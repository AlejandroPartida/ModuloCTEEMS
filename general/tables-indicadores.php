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
    <link rel="stylesheet" href="../assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="../assets/css/lib/datatable/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>
    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                   
                    <li class="menu-title">INDICADORES</li><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        
                        <ul class="sub-menu children dropdown-menu">                            <li><i class="fa fa-puzzle-piece"></i><a href="ui-buttons.html">Buttons</a></li>
                            <li><i class="fa fa-id-badge"></i><a href="ui-badges.html">Badges</a></li>
                          

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
                              <li><i class="fa fa-table"></i><a href="general.php">Programas</a></li>
                              <li><i class="fa fa-table"></i><a href="tables-unidad.php">Unidad</a></li>
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
                    <a class="navbar-brand" href="./"><img src="../images/logo.png" alt="Logo"></a>
                    <a class="navbar-brand hidden" href="./"><img src="../images/logo2.png" alt="Logo"></a>
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

                            <a class="nav-link" href="../logout.php"><i class="fa fa-power-off"></i>Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </header><!-- /header -->
        <!-- Header-->

       
        <div class="content">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">INDICADORES</strong>
                            </div>
                            <div class="card-body">
                                <?php

                                            include ("../connection.php");
// Revisamos el estado de la conexion en caso de errores. 
                                        if(!$conn) {
                                        echo "Error: No se ha podido conectar a la base de datos\n";
                                        } else {
                                        echo "\n";

                                             $sql=mysqli_query($conn,"SELECT * FROM indicadores");
                                             ?>
                               

                            <table id='bootstrap-data-table' class='table table-striped table-bordered'>
                                                  <thead>

                                                    <tr>
                                                     <td>Clave</td>
                                                        <td>Nombre</td>
                                                       <td>Descripcion</td>
                                                        <td>Unidad</td>
                                                        <td>Reporte</td>
                                                    </tr>
                                                  </thead>
                                            <?php
                                                while ($reg=mysqli_fetch_array($sql))
                                                {
                                                  echo "<tr><td>".$reg['id']."</td>";
                                                  echo "<td>".$reg['nombre']."</td>";
                                                  echo "<td>".$reg['descripcion']."</td>";
                                                  echo"<td>".$reg['fk_unidad']."</td>";
                                    
                                                 echo "<td>
                                                  <form method='post' action='tables-indicadores.php'>
                                
                                                    <input type='hidden' value='$reg[id]' name='visto'>
                                                    <button type='submit' class='btn btn-light'>Ver</button>

                                                  </form>


                                                 
                                                 </td>";
                                                 
                                                       echo "<td><button type='button' class='btn btn-light'>Imprimir</button></td>";
                                                  
                                                }
                                              }
                                                echo "</tr>     </table>";
                                        ?>
                            </div>
                        </div>
                    </div>


                </div>

                <script language="JavaScript">

                function muestra_oculta(id){
                if (document.getElementById){ 
                var el = document.getElementById(id); 
                el.style.display = (el.style.display == 'none') ? 'block' : 'none'; 
                }
                }
                window.onload = function(){}
               </script>

               <p><a style='cursor: pointer;' onclick="muestra_oculta('contenido_a_mostrar')" title=""></a></p>
               
              <div id="contenido_a_mostrar">
                <?php
               
                
              
                if($_POST){
                    $numero=$_POST['visto'];
                    $servidor="127.0.0.1";
                    $bd="cecyte";
                    $user="root";
                    $pass="";
                    $dbconn=mysqli_connect($servidor, $user, $pass, $bd);
 
                    if(!$dbconn) {
                      echo "Error: No se ha podido conectar a la base de datos\n";
                        } else {
                        echo "\n";

                        $sql=mysqli_query($dbconn,"SELECT * FROM indicador where id_indicador='$numero'");

                         echo "<TABLE>";

                        while ($reg=mysqli_fetch_array($sql))
                        {
                            echo "<TR><TD>Clave:   </TD><TD>".$reg['id_indicador']."</TD></TR>";
                            echo "<TR><TD>Nombre:  </TD><TD>".$reg['nombre']."</TD></TR>";
                            echo "<TR><TD>Descripcion:  </TD><TD>".$reg['descripcion']."</TD></TR>";
                            echo "<TR><TD>Unidad: </TD><TD>".$reg['unidad']."</TD></TR>";
                        }
                                                   
                         
 

                        echo  "</TABLE>";



                    }
                                             
                    

                    //echo"tHIS". $numero; 
                }else
                {
                    echo"";
                }

                ?>


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


    <script src="../assets/js/lib/data-table/datatables.min.js"></script>
    <script src="../assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
    <script src="../assets/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="../assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
    <script src="../assets/js/lib/data-table/jszip.min.js"></script>
    <script src="../assets/js/lib/data-table/vfs_fonts.js"></script>
    <script src="../assets/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="../assets/js/lib/data-table/buttons.print.min.js"></script>
    <script src="../assets/js/lib/data-table/buttons.colVis.min.js"></script>
    <script src="../assets/js/init/datatables-init.js"></script>


    <script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
      } );
  </script>


</body>
</html>
