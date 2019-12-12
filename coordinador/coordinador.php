<?php include("../connection.php"); 
session_start();
include("../verificar.php");?>
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
    <title>¡Bienvenido!</title>
    <meta name="description" content="Bienvenido">
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
    <link rel="stylesheet" href="../assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="../assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
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
                    <a class="navbar-brand" href="./"><img src="../images/logo.png" alt="Logo"></a>
                    <a class="navbar-brand hidden" href="./"><img src="../images/logo2.png" alt="Logo"></a>
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

                        <div class="dropdown for-notification">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="notification"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-bell"></i>
                                <span class="count bg-danger">3</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="notification">
                                <p class="red">You have 3 Notification</p>
                                <a class="dropdown-item media" href="#">
                                    <i class="fa fa-check"></i>
                                    <p>Server #1 overloaded.</p>
                                </a>
                                <a class="dropdown-item media" href="#">
                                    <i class="fa fa-info"></i>
                                    <p>Server #2 overloaded.</p>
                                </a>
                                <a class="dropdown-item media" href="#">
                                    <i class="fa fa-warning"></i>
                                    <p>Server #3 overloaded.</p>
                                </a>
                            </div>
                        </div>

                        <div class="dropdown for-message">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="message"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-envelope"></i>
                                <span class="count bg-primary">4</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="message">
                                <p class="red">You have 4 Mails</p>
                                <a class="dropdown-item media" href="#">
                                    <span class="photo media-left"><img alt="avatar" src="../images/avatar/1.jpg"></span>
                                    <div class="message media-body">
                                        <span class="name float-left">Jonathan Smith</span>
                                        <span class="time float-right">Just now</span>
                                        <p>Hello, this is an example msg</p>
                                    </div>
                                </a>
                                <a class="dropdown-item media" href="#">
                                    <span class="photo media-left"><img alt="avatar" src="images/avatar/2.jpg"></span>
                                    <div class="message media-body">
                                        <span class="name float-left">Jack Sanders</span>
                                        <span class="time float-right">5 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                    </div>
                                </a>
                                <a class="dropdown-item media" href="#">
                                    <span class="photo media-left"><img alt="avatar" src="../images/avatar/3.jpg"></span>
                                    <div class="message media-body">
                                        <span class="name float-left">Cheryl Wheeler</span>
                                        <span class="time float-right">10 minutes ago</span>
                                        <p>Hello, this is an example msg</p>
                                    </div>
                                </a>
                                <a class="dropdown-item media" href="#">
                                    <span class="photo media-left"><img alt="avatar" src="images/avatar/4.jpg"></span>
                                    <div class="message media-body">
                                        <span class="name float-left">Rachel Santos</span>
                                        <span class="time float-right">15 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="../images/admin.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="../logout.php"><i class="fa fa-power-off"></i>Cerrar sesión</a>
                        </div>
                    </div>
                </div>
            </div>
        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>¡Bienvenido!</h1>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="content">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-4">
                        <div class="card">
                            <a href="plantelesList.php">
                                <div class="card-header">

                                </div>
                                <div class="card-body">
                                    <div class="mx-auto d-block">
                                        <img class="rounded-circle mx-auto d-block" src="../images/school.png"
                                            alt="Card image cap" width="40%">
                                    </div>
                                    <hr>
                                    <h5 class="text-sm-center mt-2 mb-1">P L A N T E L E S</h5>
                                </div>
                            </a>
                        </div>
                    </div>


                    <div class="modal fade" id="personal" tabindex="-1" role="dialog" aria-labelledby="smallModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog " role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <h5 class="modal-title" id="smallModalLabel"> <strong>PERSONAL ENCARGADO</strong>
                                    </h5>
                                </div>
                                <div class="modal-body" style="padding: 30px;">
                                    <form action="agregar.php" method="POST" name="fpersonal">
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="id_per"
                                                    class=" form-control-label">Clave de personal</label></div>
                                            <div class="col-12 col-md-9"><input type="number" id="id_per" required=""
                                                    name="id_per" class="form-control"></div>
                                        </div>
                                        <div class="form-group">
                                            <label for="curp" class=" form-control-label">CURP</label>
                                            <input type="text" id="curp" name="curp" required=""
                                                pattern="^[A-Z]{1}[AEIOU]{1}[A-Z]{2}[0-9]{2}(0[1-9]|1[0-2])(0[1-9]|1[0-9]|2[0-9]|3[0-1])[HM]{1}(AS|BC|BS|CC|CS|CH|CL|CM|DF|DG|GT|GR|HG|JC|MC|MN|MS|NT|NL|OC|PL|QT|QR|SP|SL|SR|TC|TS|TL|VZ|YN|ZS|NE)[B-DF-HJ-NP-TV-Z]{3}[0-9A-Z]{1}[0-9]{1}$"
                                                title="Asegure ingresar correctamente los 18 digitos con letra mayuscula de la CURP"
                                                class="form-control">
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="nombre_per"
                                                    class=" form-control-label">Nombre Completo</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="nombre_per" required=""
                                                    name="nombre_per" class="form-control"></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-4"><label for="selectpuesto"
                                                    class=" form-control-label">Puesto</label></div>
                                            <div class="col-8 col-md-8">
                                                <select name="selectpuesto" id="selectpuesto" class="form-control"
                                                    required="">
                                                    <option value="">Selecciona...</option>
                                                    <option value="Director">Director</option>
                                                    <option value="Subdirector">Subdirector</option>
                                                    <option value="Coordinador">Coordinador</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class=" form-control-label">Número de telefono</label>
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                                                <input class="form-control" type="tel" id="tel_per" name="tel_per"
                                                    pattern="[0-9]{3}[0-9]{3}[0-9]{4}"
                                                    title="Asegure ingresar un número valido de 10 digitos sin espacios o signos o letras">
                                            </div>
                                            <small class="form-text text-muted">ej. 6189021234</small>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="mail"
                                                    class=" form-control-label">Correo Electrónico</label></div>
                                            <div class="col-12 col-md-9"><input type="email" id="mail" required=""
                                                    name="mail" class="form-control"></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-4"><label for="selectid"
                                                    class=" form-control-label">Plantel</label></div>
                                            <div class="col-8 col-md-8">
                                                <select name="selectid" id="selectid" class="form-control" required="">
                                                    <option value="">Selecciona...</option>
                                                    <?php
                                                     $sql2="select * from plantel";
                                                     $res2=mysqli_query($conn,$sql2);
                                                     while($pla=mysqli_fetch_array($res2))
                                                     {
                                                         echo '<option value="'.$pla[0].'">'.$pla[1].' '.$pla[3].'</option>';
                                                     }
                                                ?>
                                                </select>
                                            </div>
                                        </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-dismiss="modal">Cancelar</button>
                                    <button type="submit" class="btn btn-primary" name="fpersonal"
                                        ide="fpersonal">Guardar</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="planteles" tabindex="-1" role="dialog" aria-labelledby="smallModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog " role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <h5 class="modal-title" id="smallModalLabel"> <strong>PLANTELES</strong></h5>
                                </div>
                                <div class="modal-body" style="padding: 30px;">
                                    <form action="agregar.php" method="POST" name="fplanteles">
                                        <div class="row form-group">
                                            <div class="col col-md-4"><label for="selectplan"
                                                    class=" form-control-label">Tipo de plantel</label></div>
                                            <div class="col-8 col-md-8">
                                                <select name="selectplan" id="selectplan" required=""
                                                    class="form-control">
                                                    <option value="">Selecciona...</option>
                                                    <option value="CECyTE">CECYTE</option>
                                                    <option value="EMSaD">EMSAD</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col col-md-4"><label for="clave"
                                                    class=" form-control-label">Clave de plantel</label></div>
                                            <div class="col-8 col-md-8">
                                                <input required="" type="number" id="clave" name="clave"
                                                    class="form-control">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-4"><label for="num"
                                                    class=" form-control-label">Número de plantel</label></div>
                                            <div class="col-8 col-md-8">
                                                <input required="" type="number" id="num" name="num"
                                                    class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="nombre" class=" form-control-label">Nombre del plantel</label>
                                            <input required="" type="text" id="nombre" name="nombre"
                                                class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label class=" form-control-label">Número de telefono</label>
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                                                <input class="form-control" required="" type="tel" id="tel_plan"
                                                    name="tel_plan" pattern="[0-9]{3}[0-9]{3}[0-9]{4}"
                                                    title="Asegure ingresar un número valido de 10 digitos sin espacios o signos o letras">
                                            </div>
                                            <small class="form-text text-muted">ej. 6181861885</small>
                                        </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-dismiss="modal">Cancelar</button>
                                    <button type="submit" class="btn btn-primary" id="fplanteles"
                                        name="fplanteles">Guardar</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="lineamientos" tabindex="-1" role="dialog"
                        aria-labelledby="smallModalLabel" aria-hidden="true">
                        <div class="modal-dialog " role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <h5 class="modal-title" id="smallModalLabel"> <strong>LINEAMIENTOS</strong></h5>
                                </div>
                                <div class="modal-body" style="padding: 30px;">
                                    <form action="agregar.php" method="POST" name="flineamientos">
                                        <div class="form-group">
                                            <label for="nombres" class=" form-control-label">Nombre</label>
                                            <input required="" type="text" id="nombres" name="nombres"
                                                class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="descripcion" class=" form-control-label">Descripción</label>
                                            <textarea name="descripcion" id="descripcion" rows="5" placeholder=""
                                                class="form-control"></textarea>
                                        </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-dismiss="modal">Cancelar</button>
                                    <button type="submit" class="btn btn-primary" name="flineamientos">Guardar</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="indicadores" tabindex="-1" role="dialog"
                        aria-labelledby="smallModalLabel" aria-hidden="true">
                        <div class="modal-dialog " role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <h5 class="modal-title" id="smallModalLabel"> <strong>INDICADORES</strong></h5>
                                </div>
                                <div class="modal-body" style="padding: 30px;">
                                    <form action="agregar.php" method="POST" name="findicadores">
                                        <div class="form-group">
                                            <label for="nombrei" class=" form-control-label">Nombre</label>
                                            <input required="" type="text" id="nombrei" name="nombrei"
                                                class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="descripcioni" class=" form-control-label">Descripción</label>
                                            <textarea name="descripcioni" id="descripcioni" rows="5" placeholder=""
                                                class="form-control"></textarea>
                                        </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-4"><label for="selectidi" class=" form-control-label">Unidad
                                            de medida</label></div>
                                    <div class="col-8 col-md-8">
                                        <select name="selectidi" id="selectidi" class="form-control" required="">
                                            <option value="">Selecciona...</option>
                                            <?php
                                                     $sql2="select * from unidad";
                                                     $res2=mysqli_query($conn,$sql2);
                                                     while($un=mysqli_fetch_array($res2))
                                                     {
                                                         echo '<option value="'.$un[0].'">'.$un[1].'</option>';
                                                     }
                                                ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-dismiss="modal">Cancelar</button>
                                    <button type="submit" class="btn btn-primary" name="findicadores">Guardar</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div><!-- .row -->
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
    <script src="../assets/js/main.js"></script>


</body>

</html>