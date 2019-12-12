<?php include("connection.php"); ?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Programas | CTEEMS</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="images/logo1.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>

<body>
    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="plantelesList.php"> <i class="menu-icon fa fa-graduation-cap"></i>Planteles</a>
                    </li>

                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand" href="./"><img src="images/logo.png" alt="Logo"></a>
                    <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa-user"></i>My Profile</a>

                            <a class="nav-link" href="#"><i class="fa fa-bell-o"></i>Notifications <span
                                    class="count">13</span></a>

                            <a class="nav-link" href="#"><i class="fa fa-cog"></i>Settings</a>

                            <a class="nav-link" href="#"><i class="fa fa-power-off"></i>Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </header><!-- /header -->
        <!-- Header-->

        <?php 
            if(isset($_POST['enviar'])) {
                $mensaje = $_POST['comentario'];
                $sqlComentario = "INSERT INTO comentarios_programas(sentBy, mensaje, fk_programa) VALUES('Coordinador', '$mensaje', ".$_COOKIE['idPrograma'].");";
                if($res = mysqli_query($conn, $sqlComentario)) {
                    echo "<script type='text/javascript'>
                    document.addEventListener('DOMContentLoaded', function(event) {
                        swal('¡Éxito!', '¡Tu comentario ha sido enviado!', 'success');
                        });
                        </script>";
                } else {
                    echo  mysqli_errno($conn) . ": " . mysqli_error($conn) . "\n";;
                }
            }
         ?>

        <div class="content">
            <div class="animated fadeIn">
                <h1 class="text-center">Plan Semestral de Trabajo</h1><br>
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header text-center">
                            <strong class="card-title">A) DATOS DE IDENTIFICACIÓN</strong>
                        </div>
                        <div class="card-body">
                            <table id="identificacion" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th style="width: 250px;"></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <form enctype="multipart/form-data" action="#" method="post" id="f1"
                                        name="f1">
                                        <tr>
                                            <th>Plantel</th>
                                            <?php 
                                                if(isset($_COOKIE['idPlantel'])) {
                                                    $sqlNombre = "SELECT nombre_plantel FROM plantel WHERE clave_plantel = '".$_COOKIE['idPlantel']."' LIMIT 1;";
                                                    $nombre = "Plantel";
                                                    $res1 = $conn -> query($sqlNombre);
                                                    if($res1->num_rows > 0){
                                                        while ($row = $res1->fetch_assoc()) {
                                                            $nombre = $row['nombre_plantel']; 
                                                        }
                
                                                    } else {
                                                        echo "0 results";
                                                    }
                                                        
                                                    echo "<td>$nombre</td>";
                                                }
                                            ?>
                                        </tr>
                                        <tr>
                                            <th>Nombre del programa</th>
                                            <?php 
                                                if(isset($_COOKIE['idPrograma'])) {
                                                    $sqlPrograma = "SELECT nom_prog FROM programas WHERE id = ".$_COOKIE['idPrograma']." LIMIT 1;";
                                                    $nombrePrograma = "Programa";
                                                    $res2 = $conn -> query($sqlPrograma);
                                                    if($res2->num_rows > 0){
                                                        while ($row = $res2->fetch_assoc()) {
                                                            $nombrePrograma = $row['nom_prog']; 
                                                        }
                
                                                    } else {
                                                        echo "0 results";
                                                    }
                                                        
                                                    echo "<td>$nombrePrograma</td>";
                                                }
                                            ?>
                                        </tr>
                                        <tr>
                                            <th>Objetivo de las tareas a desarrollar</th>
                                            <?php 
                                                if(isset($_COOKIE['idPrograma'])) {
                                                    $sqlObjetivo = "SELECT objetivo FROM programas WHERE id = ".$_COOKIE['idPrograma']." LIMIT 1;";
                                                    $nombreObjetivo = "Objetivo";
                                                    $res3 = $conn -> query($sqlObjetivo);
                                                    if($res3->num_rows > 0){
                                                        while ($row = $res3->fetch_assoc()) {
                                                            $nombreObjetivo = $row['objetivo']; 
                                                        }
                
                                                    } else {
                                                        echo "0 results";
                                                    }
                                                        
                                                    echo "<td>$nombreObjetivo</td>";
                                                }
                                            ?>
                                        </tr>
                                        <tr>
                                            <th>Periodo</th>
                                            <td>
                                                <div class="row">
                                                    <div class="col-md-5"><strong> Fecha de inicio: </strong>
                                                        <?php 
                                                            if(isset($_COOKIE['idPrograma'])) {
                                                                $sqlFechas = "SELECT fecha_ini, fecha_fin FROM programas WHERE id = ".$_COOKIE['idPrograma']." LIMIT 1;";
                                                                $fechaInicio = " ";
                                                                $fechaFin = " ";
                                                                $res2 = $conn -> query($sqlFechas);
                                                                if($res2->num_rows > 0){
                                                                    while ($row = $res2->fetch_assoc()) {
                                                                        $fechaInicio = $row['fecha_ini']; 
                                                                        $fechaFin = $row['fecha_fin'];
                                                                    }
                            
                                                                } else {
                                                                    echo "0 results";
                                                                }
                                                                    
                                                                echo "<span>$fechaInicio</span>
                                                                        </div>
                                                                        <div class='col-md-5'><strong> Fecha de término: </strong>
                                                                            <span>$fechaFin</span>
                                                                        </div>";
                                                            }
                                                        ?>
                                                   
                                                </div>
                                            </td>
                                        </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!--end A) -->

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header  text-center">
                            <strong class="card-title">B) PLANEACIÓN</strong>
                        </div>
                        <div class="card-body">
                            <table id="planeacion" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Autoevaluación</th>
                                        <th>Metas efectivas</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <?php 
                                        if(isset($_COOKIE['idPrograma'])) {
                                            $sqlAutoMetas = "SELECT autoevaluacion, metas_efectivas FROM planeacion WHERE fk_programa = ".$_COOKIE['idPrograma']." LIMIT 1;";
                                            $auto = " ";
                                            $metas = " ";
                                            $res2 = $conn -> query($sqlAutoMetas);
                                            if($res2->num_rows > 0){
                                                while ($row = $res2->fetch_assoc()) {
                                                $auto = $row['autoevaluacion']; 
                                                $metas = $row['metas_efectivas'];
                                                }
                                            } else {
                                                echo "0 results";
                                            }
                                                                    
                                            echo "<td>$auto</td>
                                                  <td>$metas</td>";
                                            }
                                    ?>
                                        

                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!--end B) -->

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header  text-center">
                            <strong class="card-title">C) SEGUIMIENTO</strong>
                        </div>
                        <div class="card-body">

                            <div class="row">

                                <div class="col-md-7">
                                    <strong>Línea de acción:</strong>
                                    <?php 
                                        if(isset($_COOKIE['idPrograma'])) {
                                        $sqlLineamiento = "SELECT fk_lineamiento FROM seguimiento WHERE fk_programa = ".$_COOKIE['idPrograma']." LIMIT 1;";
                                        $lineamiento = "13";
                                        $nombreLineamiento = "nombreLineamiento";
                                        $res3 = $conn -> query($sqlLineamiento);
                                        if($res3->num_rows > 0){
                                            while ($row = $res3->fetch_assoc()) {
                                            $lineamiento = $row['fk_lineamiento']; 
                                            }
                                            $sqlNomLin = "SELECT nombre FROM lineamientos WHERE id_lineamiento = $lineamiento";
                                            $res4 = $conn -> query($sqlNomLin);
                                            if($res4->num_rows > 0){
                                                while ($row = $res4->fetch_assoc()) {
                                                    $nombreLineamiento = $row['nombre']; 
                                                }
                
                                            } else {
                                                echo "0 results";
                                            }
                                        } else {
                                            echo "0 results";
                                        }
                                        
                                                        
                                            echo "<span>$nombreLineamiento</span>";
                                        }
                                    ?>
                                </div>
                            </div>

                            <br>

                            <table id="seguimiento" class="table table-striped table-bordered">
                                <thead>

                                    <tr>
                                        <th style="width: 350px;">Actividades</th>
                                        <th style="width: 250px;">Responsables</th>
                                        <th class="text-center">Ciclo escolar
                                            <table id="" class="table table-striped table-bordered">
                                                <thead>

                                                </thead>
                                            </table>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <?php 
                                                if(isset($_COOKIE['idPrograma'])) {
                                                    $sqlActividad = "SELECT actividad FROM seguimiento WHERE fk_programa = ".$_COOKIE['idPrograma'].";";
                                                    $nombreActividad = "Actividad";
                                                    $res3 = $conn -> query($sqlActividad);
                                                    if($res3->num_rows > 0){
                                                        while ($row = $res3->fetch_assoc()) {
                                                            $nombreActividad = $row['actividad'];
                                                            echo "<td>$nombreActividad</td>"; 
                                                        }
                
                                                    } else {
                                                        echo "0 results";
                                                    }
                                                        
                                                    
                                                }
                                        ?>
                                        <?php 
                                                if(isset($_COOKIE['idPrograma'])) {
                                                    $sqlResponsable = "SELECT responsable FROM seguimiento WHERE fk_programa = ".$_COOKIE['idPrograma'].";";
                                                    $nombreResponsable = "Responsable";
                                                    $res3 = $conn -> query($sqlResponsable);
                                                    if($res3->num_rows > 0){
                                                        while ($row = $res3->fetch_assoc()) {
                                                            $nombreResponsable = $row['responsable'];
                                                            echo "<td>$nombreResponsable</td>"; 
                                                        }
                
                                                    } else {
                                                        echo "0 results";
                                                    }
                                                        
                                                    
                                                }
                                        ?>
                                        
                                    <?php 
                                                if(isset($_COOKIE['idPrograma'])) {
                                                    $sqlMeses = "SELECT mes_ini, mes_fin FROM seguimiento WHERE fk_programa = ".$_COOKIE['idPrograma'].";";
                                                    $mesInicio = "mesInicio";
                                                    $mesFin = "mesFin";
                                                    $res3 = $conn -> query($sqlMeses);
                                                    if($res3->num_rows > 0){
                                                        while ($row = $res3->fetch_assoc()) {
                                                            $mesInicio = $row['mes_ini'];
                                                            $mesFin = $row['mes_fin'];
                                                        }

                                                    } else {
                                                        echo "0 results";
                                                    }
                                                        
                                                    echo "<td>$mesInicio - $mesFin</td>"; 

                                                }
                                        ?>
                                    </tr>

                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
                <!--end C) -->

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header  text-center">
                            <strong class="card-title">D) EVIDENCIAS</strong>
                        </div>
                        <div class="card-body">
                            <div class="row form-group">
                                <div class="col col-md-5">
                                    <b><label for="file-multiple-input" class=" form-control-label">
                                            Recopilación de trabajos realizados en distintos momentos</label></b>
                                </div>
                                <div class="col-12 col-md-6" id="ar2">
                                <?php 
                                                if(isset($_COOKIE['idPrograma'])) {
                                                    $sqlComite = "SELECT comite FROM dialogo_comite WHERE fk_programa = ".$_COOKIE['idPrograma'].";";
                                                    $comite = "comite";
                                                    $res3 = $conn -> query($sqlComite);
                                                    if($res3->num_rows > 0){
                                                        while ($row = $res3->fetch_assoc()) {
                                                            $comite = $row['comite'];
                                                            echo "<a href='$comite' download>".basename($comite)."</a>"; 
                                                        }

                                                    } else {
                                                        echo "0 results";
                                                    }
                                                        
                                                    

                                                }
                                        ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end D) -->

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header  text-center">
                            <strong class="card-title">E) DIÁLOGO</strong>
                        </div>
                        <div class="card-body">
                            <div class="row form-group">
                                <div class="col col-md-5">
                                    <b><label for="file-multiple-input" class=" form-control-label">
                                            Minuta de reunión</label></b>
                                </div>
                                <div class="col-12 col-md-6" id="ar1">
                                <?php 
                                                if(isset($_COOKIE['idPrograma'])) {
                                                    $sqlMinuta = "SELECT minuta FROM dialogo_minuta WHERE fk_programa = ".$_COOKIE['idPrograma'].";";
                                                    $minuta = "minuta";
                                                    $res3 = $conn -> query($sqlMinuta);
                                                    if($res3->num_rows > 0){
                                                        while ($row = $res3->fetch_assoc()) {
                                                            $minuta = $row['minuta'];
                                                            //basename() extrae el nombre del archivo junto con su extensión de la ruta.
                                                            echo "<a href='$minuta' download>".basename($minuta)."</a>"; 

                                                        }

                                                    } else {
                                                        echo "0 results";
                                                    }
                                                        

                                                }
                                        ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end E) -->

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header  text-center">
                            <strong class="card-title">F) RETROALIMENTACIÓN</strong>
                        </div>
                        <div class="card-body">
                            <div class=" form-group">
                            <?php 
                                                if(isset($_COOKIE['idPrograma'])) {
                                                    $sqlRetro = "SELECT retroalimentacion FROM retroalimentacion WHERE fk_programa = ".$_COOKIE['idPrograma'].";";
                                                    $retro = "retroalimentación";
                                                    $res3 = $conn -> query($sqlRetro);
                                                    if($res3->num_rows > 0){
                                                        while ($row = $res3->fetch_assoc()) {
                                                            $retro = $row['retroalimentacion'];
                                                        }

                                                    } else {
                                                        echo "0 results";
                                                    }
                                                        
                                                    echo $retro; 

                                                }
                                        ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end F) -->

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header  text-center">
                            <strong class="card-title">G) TRANSITORIO</strong>
                        </div>
                        <div class="card-body">
                            <div class=" form-group">
                                <label> Situaciones no previstas resueltas por el consejo</label>
                                <ul style="color: #1e1e1e; padding-left: 25px;">
                                <?php 
                                                if(isset($_COOKIE['idPrograma'])) {
                                                    $sqlTransitorios = "SELECT transitorios FROM transitorios WHERE fk_programa = ".$_COOKIE['idPrograma'].";";
                                                    $transitorios = "transitorios";
                                                    $res3 = $conn -> query($sqlTransitorios);
                                                    if($res3->num_rows > 0){
                                                        while ($row = $res3->fetch_assoc()) {
                                                            $transitorios = $row['transitorios'];
                                                            echo "<li>$transitorios</li>"; 
                                                        }

                                                    } else {
                                                        echo "0 results";
                                                    }
                                                        

                                                }
                                        ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end G) -->

                <div class="col-md-12">
                        <div class="card">
                            <div class="card-header  text-center">
                                <strong class="card-title">Enviar un comentario</strong>
                            </div>
                            <div class="card-body">
                               <div class=" form-group">
                                    <textarea placeholder="Comentario" id="comentario" name="comentario" class="form-control" required></textarea>
                                </div>
                            </div>
                            
                            <button type="submit" class="btn btn-primary" id="enviar" name="enviar" form="f1">Comentar</button>

                        </div>
                </div>
                </form>
            </div><!-- .animated -->
        </div><!-- .content -->

        <div class="clearfix"></div>



    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="assets/js/main.js"></script>


</body>

</html>