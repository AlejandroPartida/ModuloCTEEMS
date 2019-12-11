<?php include("connection.php"); ?>
<!DOCTYPE HTML>


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
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
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

                   <li class="menu-item-has-children active dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Tablas</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i><a href="tables-basic1.php">Personal</a></li>
                            <li><i class="fa fa-table"></i><a href="tables-basic2.php">Plantel</a></li>
                            <li><i class="fa fa-table"></i><a href="tables-basic3.php">Lineamientos</a></li>
                             <li><i class="fa fa-table"></i><a href="tables-indicadores.php">Indicadores</a></li>
                              <li><i class="fa fa-table"></i><a href="tables-unidad.php">Unidad</a></li>
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
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..."
                                    aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>

                    </div>

                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
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
                            <h4 class="modal-title">Editar personal</h4>

                        </div>
                        <div class="modal-body">
                            <form action="tables-basic1.php" method="post" >
                                <div class="input-group" style="margin-top: 15px;">
                                    <input id="curp" type="text" class="form-control" name="curp" placeholder="CURP" required>
                                </div>
                                <div class="input-group" style="margin-top: 15px;">
                                    <input id="telefono" autocomplete="off" type="text" class="form-control"
                                        name="telefono" placeholder="Teléfono" required></div>

                                <div class="input-group" style="margin-top: 4%;">
                                    <input id="correo" type="text" class="form-control" name="correo"
                                        placeholder="Correo electrónico" required>
                                </div>
                                <div class="input-group" style="margin-top: 4%;">
                                    <input id="puesto" type="text" class="form-control" name="puesto"
                                        placeholder="Puesto" required>
                                </div>
                                <div class="input-group" style="margin-top: 4%;">
                                    <input id="plantel" type="hidden" class="form-control" name="plantel">
                                </div>
                                <button type="submit" class="btn btn-success" name="editar" style="margin-top: 10%;">Editar</button>
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
                                    <li><a href="#">Tabla</a></li>
                                    <li class="active">Personal</li>
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
                                <strong class="card-title">Tabla Personal</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">


                                    <thead>
                                        <tr>
                                            <th>CURP</th>
                                            <th>Teléfono</th>
                                            <th>Correo Electrónico</th>
                                            <th>Puesto</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>

                                    <?php

                                    if(isset($_POST["editar"])) {
                                        $curpU = $_POST["curp"];
                                        $telefonoU = $_POST["telefono"];
                                        $correoU = $_POST["correo"];
                                        $puestoU = $_POST["puesto"];
                                        $plantelU = $_POST["plantel"];
                                        $sqlUpdate = "UPDATE personal SET curp = '$curpU', tel_celular = $telefonoU, correo_electronico = '$correoU', puesto = '$puestoU' WHERE fk_plantel = $plantelU";
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
                                      $sql = "SELECT * FROM personal;";
                                        $result = $conn->query($sql);
                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                                $curp = $row["curp"];
                                                $telefono = $row["tel_celular"];
                                                $correo = $row["correo_electronico"];
                                                $puesto = $row["puesto"];
                                                $plantel = $row["fk_plantel"];
                                                echo  "<tbody>";
                                                echo     "<tr>";
                                                echo      "<td>" .$row["curp"]."</td>";
                                                echo      "<td>" .$row["tel_celular"]. "</td>";
                                                echo      "<td>" .$row["correo_electronico"]. "</td>";
                                                echo      "<td>".$row["puesto"]. "</td>";

                                                printf('<td><button type="button" class="btn btn-light" onclick="setValuesOnModalInputs(\'%s\', \'%s\', \'%s\', \'%s\', \'%s\')" data-toggle="modal"
                                                            data-target="#myModal">Editar</button></td>', $curp, $telefono, $correo, $puesto, $plantel);

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
    <script src="assets/js/editarPersonal.js"></script>

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
    });
    </script>


</body>

</html>
