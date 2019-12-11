<?php include("connection.php"); ?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ela Admin - HTML5 Admin Template</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">
    <link rel="shortcut icon" href="https://i.imgur.com/QRAUqs9.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/lib/datatable/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>


    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>
    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.html"><i class="menu-icon fa fa-laptop"></i>Inicio </a>
                    </li>
                    <li class="menu-title">UI elements</li><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-cogs"></i>Components</a>
                        <ul class="sub-menu children dropdown-menu">                            <li><i class="fa fa-puzzle-piece"></i><a href="ui-buttons.html">Buttons</a></li>
                            <li><i class="fa fa-id-badge"></i><a href="ui-badges.html">Badges</a></li>
                            <li><i class="fa fa-bars"></i><a href="ui-tabs.html">Tabs</a></li>

                            <li><i class="fa fa-id-card-o"></i><a href="ui-cards.html">Cards</a></li>
                            <li><i class="fa fa-exclamation-triangle"></i><a href="ui-alerts.html">Alerts</a></li>
                            <li><i class="fa fa-spinner"></i><a href="ui-progressbar.html">Progress Bars</a></li>
                            <li><i class="fa fa-fire"></i><a href="ui-modals.html">Modals</a></li>
                            <li><i class="fa fa-book"></i><a href="ui-switches.html">Switches</a></li>
                            <li><i class="fa fa-th"></i><a href="ui-grids.html">Grids</a></li>
                            <li><i class="fa fa-file-word-o"></i><a href="ui-typgraphy.html">Typography</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children active dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Tablas</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i><a href="tables-basic1.php">Personal</a></li>
                            <li><i class="fa fa-table"></i><a href="tables-basic2.php">Plantel</a></li>
                            <li><i class="fa fa-table"></i><a href="tables-basic3.php">Lineamientos</a></li>
                             <li><i class="fa fa-table"></i><a href="tables-indicadores.php">Indicadores</a></li>
                              <li><i class="fa fa-table"></i><a href="tables-basic3.php">Unidad</a></li>
                              <li><i class="fa fa-table"></i><a href="tables-situaciones.php">Situaciones</a></li>
                            <li><i class="fa fa-table"></i><a href="tables-retroalimentacion.php">Retroalimentacion</a></li>
                            <li><i class="fa fa-table"></i><a href="tables-metas.php">Metas Efectivas</a></li>
                             <li><i class="fa fa-table"></i><a href="tables-plan.php">Plan de Mejora</a></li>
                        </ul>
                    </li>

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Tablas</a>
                        <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-table"></i><a href="addRetroalimentacion.php">Retroalimentacion</a></li>
                            <li><i class="fa fa-table"></i><a href="addSituaciones.php">Situaciones</a></li>
                            <li><i class="fa fa-table"></i><a href="addMetas.php">Metas</a></li>
                             <li><i class="fa fa-table"></i><a href="addPlan.php">Plan de Mejora</a></li>
                              <li><i class="fa fa-table"></i><a href="agregar-didacticas.php">Secuencias Didacticas</a></li>
                        </ul>
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
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>

                        
                    </div>

                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">

                            <a class="nav-link" href="#"><i class="fa fa-power-off"></i>Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </header><!-- /header -->
        <!-- Header-->
        <div class="container">
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Editar plantel</h4>

                        </div>
                        <div class="modal-body">
                            <form action="tables-basic2.php" method="post" >
                                <div class="input-group" style="margin-top: 15px;">
                                    <input id="tipo" type="text" class="form-control" name="tipo" placeholder="Tipo de Plantel" required>
                                </div>
                                <div class="input-group" style="margin-top: 15px;">
                                    <input id="numero" autocomplete="off" type="text" class="form-control"
                                        name="numero" placeholder="Número de Plantel" required></div>

                                <div class="input-group" style="margin-top: 4%;">
                                    <input id="nombre" type="text" class="form-control" name="nombre"
                                        placeholder="Nombre de Plantel" required>
                                </div>
                                <div class="input-group" style="margin-top: 4%;">
                                    <input id="telefono" type="text" class="form-control" name="telefono"
                                        placeholder="Teléfono de Plantel" required>
                                </div>
                                <div class="input-group" style="margin-top: 4%;">
                                    <input id="id" type="hidden" class="form-control" name="id">
                                </div>
                                <button type="submit" class="btn btn-success" name="editar">Editar</button>
                            </form>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-dismiss="modal">Cerrar</button>

                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Tablas</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Tablas</a></li>
                                    <li><a href="#">Tabla</a></li>
                                    <li class="active">Planteles</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Tabla plantel</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">


                                    <thead>
                                        <tr>
                                            <th>Clave</th>
                                            <th>Plantel</th>
                                            <th>Numero de plantel</th>
                                            <th>Nombre del plantel</th>
                                            <th>Telefono</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>

                                    <?php
                                        if(isset($_POST["editar"])) {
                                            $tipoU = $_POST["tipo"];
                                            $numeroU = $_POST["numero"];
                                            $nombreU = $_POST["nombre"];
                                            $telefonoU = $_POST["telefono"];
                                            $idPlantel = $_POST["id"];
                                            $sqlUpdate = "UPDATE plantel SET tipo_plantel = '$tipoU', numero_plantel = $numeroU, nombre_plantel = '$nombreU', telefono_plantel = $telefonoU WHERE clave_plantel = $idPlantel";
                                            $res = $conn->query($sqlUpdate);
                                            if($res === true) {
                                                echo("<script type='text/javascript'>
                                                    Swal.fire({
                                                    title: 'Se han guardado tus cambios.',
                                                    type: 'success',
                                                    confirmButtonColor: '#3085d6',
                                                    confirmButtonText: 'Aceptar'
                                                }); </script>");
                                            } else {
                                                echo  mysqli_errno($conn) . ": " . mysqli_error($conn) . "\n";;
                                            }
                                        }

                                        $sql = "SELECT * FROM plantel;";
                                            $result = $conn->query($sql);
                                            if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                                $id = $row["clave_plantel"];
                                                $tipo = $row["tipo_plantel"];
                                                $numero = $row["numero_plantel"];
                                                $nombre = $row["nombre_plantel"];
                                                $telefono = $row["telefono_plantel"];
                                                echo  "<tbody>";
                                                echo     "<tr>";
                                                echo      "<td>" .$row["clave_plantel"]."</td>";
                                                echo      "<td>" .$row["tipo_plantel"]. "</td>";
                                                echo      "<td>" .$row["numero_plantel"]. "</td>";
                                                echo      "<td>".$row["nombre_plantel"]. "</td>";
                                                echo      "<td>".$row["telefono_plantel"]. "</td>";

                                                  echo "<td>
                                                  <form method='post' action='PDF/pdf.php'>
                                                    <input type='hidden' value='$row[clave_plantel]' name='pedido'>
                                                    <button type='submit'class='btn btn-light'>Imprimir</button>
                                                  </form>
                                                 </td>";
                                                printf('<td><button type="button" class="btn btn-light" onclick="setValuesOnModalInputs(\'%s\', \'%s\', \'%s\', \'%s\', \'%s\')" data-toggle="modal"
                                                            data-target="#myModal">Editar</button></td>', $id, $tipo, $numero, $nombre, $telefono);
                                                  echo "<td><button type='button' class='btn btn-light'>Eliminar</button></td>";
                                                echo     "</tr>";
                        }
                    } else {
                    echo "0 results";
                    }
                  ?>
                </tbody>
                  </table>
                  </div>
                </div>
                  </div>
                </div>
            </div><!-- .animated -->
        </div><!-- .content -->






        <div class="clearfix"></div>

        <footer class="site-footer">
            <div class="footer-inner bg-white">
                <div class="row">
                    <div class="col-sm-6">
                        Copyright &copy; 2018 Ela Admin
                    </div>
                    <div class="col-sm-6 text-right">
                        Designed by <a href="https://colorlib.com">Colorlib</a>
                    </div>
                </div>
            </div>
        </footer>

    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/editarPlantel.js"></script>


    <script src="assets/js/lib/data-table/datatables.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/jszip.min.js"></script>
    <script src="assets/js/lib/data-table/vfs_fonts.js"></script>
    <script src="assets/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.print.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.colVis.min.js"></script>
    <script src="assets/js/init/datatables-init.js"></script>


    <script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
      } );
  </script>


</body>
</html>
