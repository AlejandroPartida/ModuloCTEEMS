<?php include("connection.php"); ?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
</head>
<body>
    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.html"><i class="menu-icon fa fa-pencil"></i>Programas</a>
                    </li>
                    
                    <li>
                        <a href="index.html"><i class="menu-icon fa fa-users"></i>Cómite</a>
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
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa-user"></i>My Profile</a>

                            <a class="nav-link" href="#"><i class="fa fa-bell-o"></i>Notifications <span class="count">13</span></a>

                            <a class="nav-link" href="#"><i class="fa fa-cog"></i>Settings</a>

                            <a class="nav-link" href="#"><i class="fa fa-power-off"></i>Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </header><!-- /header -->
        <!-- Header-->

        <?php 
        if(isset($_POST['guardar']))
        {
            $clave=$_POST['plantel1'];

            $nombre=$_POST['nom_p'];
            $obj=$_POST['obj_p'];
            $fi=$_POST['fip'];
            $ff=$_POST['ffp'];
            
            $sql="insert into programas(fk_plantel,nom_prog,objetivo,fecha_ini,fecha_fin) values ('$clave','$nombre','$obj','$fi','$ff')";
            if($result=mysqli_query($conn,$sql))
            {
                $sql1="select id from programas where nom_prog='$nombre' and objetivo='$obj'";
                $res1=mysqli_query($conn,$sql1);
                $id_p=mysqli_fetch_array($res1);

                
                $ruta1 = 'Archivos/'.$_FILES['ar1']['name'];
                move_uploaded_file($_FILES['ar1']['tmp_name'],$ruta1);
                $sqlUpload1 ="insert into dialogo_minuta (minuta,fk_programa) VALUES ('$ruta1','$id_p[0]')";
                if($conn->query($sqlUpload1)===false)        
                {
                    echo "<script type='text/javascript'>
                        document.addEventListener('DOMContentLoaded', function(event) {
                                swal('Error!', '¡No se registro la minuta correctamente!', 'error');
                                });
                                </script>";
                }

                
                $ruta2 = 'Archivos/'.$_FILES['ar2']['name'];
                move_uploaded_file($_FILES['ar2']['tmp_name'],$ruta2);
                $sqlUpload2 ="insert into dialogo_comite (comite,fk_programa) VALUES ('$ruta2','$id_p[0]')";
                if($conn->query($sqlUpload2)===false)        
                {
                    echo "<script type='text/javascript'>
                        document.addEventListener('DOMContentLoaded', function(event) {
                                swal('Error!', '¡No se registro la minuta correctamente!', 'error');
                                });
                                </script>";
                }
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
                                        <form enctype="multipart/form-data" action="programas.php" method="post" id="f1" name="f1">
                                        <tr>
                                            <th>Plantel</th>
                                            <td><select id="plantel1" name="plantel1" class="form-control">
                                                <?php 
                                                 $sqln = "SELECT * FROM plantel;";

                                                $resultn = $conn->query($sqln);

                                                if ($resultn->num_rows > 0) 
                                                {
                                                    while($row = $resultn->fetch_assoc())
                                                    {
                                                        echo '<option value='.$row['clave_plantel'].'>'.$row['tipo_plantel'].' #'.$row['numero_plantel'].' '.$row['nombre_plantel'].'</option>';
                                                    }
                                                }else{ echo '<option value= 0> No hay planteles registrados</option>'; }
                                                 ?>
                                                
                                            </select>  </td>
                                        </tr>
                                        <tr>
                                            <th>Nombre del programa</th>
                                            <td><input type="text" id="nom_p" name="nom_p" class="form-control"></td>
                                        </tr>
                                        <tr>
                                            <th>Objetivo de las tareas a desarrollar</th>
                                            <td><textarea  id="obj_p" name="obj_p" class="form-control"></textarea></td>
                                        </tr>
                                        <tr>
                                            <th>Periodo</th>
                                            <td> 
                                                <div class="row">
                                                    <div class="col-md-5"> Fecha de inicio 
                                                        <input type="date" id="fip" name="fip" class="form-control"> 
                                                    </div>
                                                    <div class="col-md-5"> Fecha de termino 
                                                        <input type="date" id="ffp" name="ffp" class="form-control"> 
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div><!--end A) -->

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header  text-center">
                                <strong class="card-title">B) PLANEACIÓN</strong>
                            </div>
                            <div class="card-body">
                                <table id="planeacion" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Auto evaluación</th>
                                            <th>Metas efectivas</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><textarea  id="" name="" class="form-control"></textarea></td>
                                            <td><textarea  id="" name="" class="form-control"></textarea></td>
                                            
                                        </tr>
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div><!--end B) -->

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header  text-center">
                                <strong class="card-title">C) SEGUIMIENTO</strong>
                            </div>
                            <div class="card-body">

                            <div class="row">
                                
                                <div class="col-md-7">
                                    <label>Línea de acción</label>
                                    <input type="text" id="plantel" name="plantel" class="form-control">
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
                                                    <tr>
                                                        <th>Enero</th>
                                                        <th>Febrero</th>
                                                        <th>Marzo</th>
                                                        <th>Abril</th>
                                                        <th>Mayo</th>
                                                        <th>Junio</th>
                                                        <th>Julio</th>
                                                    </tr>
                                                   </thead> 
                                               </table>
                                                </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><textarea  id="" name="" class="form-control"></textarea></td>
                                            <td><textarea  id="" name="" class="form-control"></textarea></td>
                                            <th><input type="checkbox" id="cbox1" value="first_checkbox">
                                                <input type="checkbox" id="cbox1" value="first_checkbox">
                                                <input type="checkbox" id="cbox1" value="first_checkbox">
                                                <input type="checkbox" id="cbox1" value="first_checkbox">
                                                    <input type="checkbox" id="cbox1" value="first_checkbox">
                                                    <input type="checkbox" id="cbox1" value="first_checkbox">
                                                <input type="checkbox" id="cbox1" value="first_checkbox"></th>
                                            
                                        </tr>
                                       <tr>
                                            <td><textarea  id="" name="" class="form-control"></textarea></td>
                                            <td><textarea  id="" name="" class="form-control"></textarea></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td><textarea  id="" name="" class="form-control"></textarea></td>
                                            <td><textarea  id="" name="" class="form-control"></textarea></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td><textarea  id="" name="" class="form-control"></textarea></td>
                                            <td><textarea  id="" name="" class="form-control"></textarea></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="row">
                                
                                <div class="col-md-7">
                                    <label>Línea de acción</label>
                                    <input type="text" id="plantel" name="plantel" class="form-control">
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
                                                    <tr>
                                                        <th>Agosto</th>
                                                        <th>Septiembre</th>
                                                        <th>Octubre</th>
                                                        <th>Noviembre</th>
                                                        <th>Diciembre</th>
                                                        <th>Enero</th>
                                                    </tr>
                                                   </thead> 
                                               </table>
                                                </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><textarea  id="" name="" class="form-control"></textarea></td>
                                            <td><textarea  id="" name="" class="form-control"></textarea></td>
                                            <td></td>
                                        </tr>
                                       <tr>
                                            <td><textarea  id="" name="" class="form-control"></textarea></td>
                                            <td><textarea  id="" name="" class="form-control"></textarea></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td><textarea  id="" name="" class="form-control"></textarea></td>
                                            <td><textarea  id="" name="" class="form-control"></textarea></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td><textarea  id="" name="" class="form-control"></textarea></td>
                                            <td><textarea  id="" name="" class="form-control"></textarea></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div><!--end C) -->

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
                                        <input type="file" id="ar2" name="ar2" multiple="" class="form-control-file" form="f1">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--end D) -->

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
                                        <input type="file" id="ar1" name="ar1" class="form-control-file" form="f1">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--end E) -->
                    
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header  text-center">
                                <strong class="card-title">F) RETROALIMENTACIÓN</strong>
                            </div>
                            <div class="card-body">
                               <div class=" form-group">
                                    <textarea  id="" name="" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                    </div><!--end F) -->

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header  text-center">
                                <strong class="card-title">G) TRANSITORIO</strong>
                            </div>
                            <div class="card-body">
                               <div class=" form-group">
                                <label> Situaciones no previstas resueltas por el consejo</label>
                                    <textarea  id="" name="" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                    </div><!--end G) -->

                    <div class="col-md-12 text-center">
                        <button type="button" class="btn btn-outline-secondary btn-lg active">Borrar</button>
                        <button type="button" class="btn btn-outline-danger btn-lg active">Cancelar</button>
                        <button type="submit" class="btn btn-outline-primary btn-lg active" id="guardar" name="guardar" form="f1">Guardar</button>
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
