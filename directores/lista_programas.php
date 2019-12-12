<?php include("../connection.php"); 
    session_start();
    include("../verificar.php")?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Lista de Programas | CTEEMS</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="../images/logo1.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="../assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
</head>
<body style="background: #f1f2f7;">
    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <br>
                    <li>
                        <a href="lista_programas.php"><i class="menu-icon fa fa-pencil"></i>Programas</a>
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
                    <a class="navbar-brand" href="./"><img src="../images/logo.png" alt="Logo"></a>
                    <a class="navbar-brand hidden" href="./"><img src="../images/logo2.png" alt="Logo"></a>
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <h2><i class="fa fa-user"></i></h2>
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="../logout.php"><i class="fa fa-power-off"></i>Cerrar Sesión</a>
                        </div>
                    </div>
                </div>
            </div>
        </header><!-- /header -->
        <!-- Header-->
        
        <div class="content">
            <div class="animated fadeIn">
                <h1 class="text-center">Lista de programas</h1><br>
                <div class="row">
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-header text-center">
                                Agregar nuevo programa  
                                </div>
                                <div class="card-body text-center">                                    
                                    <a href="programas.php"><h1 style="font-size: 70px; color: #B4B9B4;"><i class="fa fa-plus-circle"></i></h1></a>
                                </div>
                            </a>
                        </div>
                    </div>
                    	<?php

                    	$sql = " SELECT * FROM programas";

				        $consulta = mysqli_query($conn, $sql);

				            

				        $total=mysqli_num_rows($consulta);

				            if ($total>0) 
				            {

				                while ($row = mysqli_fetch_array($consulta)) 
				                {
				                	echo ' <div class="col-md-4">
				                	<div class="card">
                            <div class="card-header text-center">
                                 '.$row['nom_prog'].'   
                                </div>
                                <div class="card-body">                                    
                                    <a href="mod_prog.php?nC='.$row['id'].'"><h5 class="text-sm-center mt-2 mb-1"><i class="fa fa-pencil-square-o"></i>&nbsp; Modificar</h5></a>
                                    <hr>
                                    <a href="minuta.php"><h5 class="text-sm-center mt-2 mb-1"><i class="fa fa-file-text-o"></i>&nbsp; Minutas</h5></a>
                                </div>
                            </a>
                        </div>
                        </div>';
				                }
				            }
                    	?>
                        
                    </div>
                </div>    

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
