<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Inicio de Sesión | CTEEMS</title>
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
<body  style="background: #ddd;">
<?php
    include("connection.php");
    require_once 'jwt_helper.php';
    
    if (isset($_POST['flogin']))
    {
        session_start();
        $user = $_POST['usuario'];
        $pass = $_POST['password'];

        $sqlLogin = "select * from sesion where usuario='$user' and password='$pass'";
        $do_sql = mysqli_query($conn, $sqlLogin);
        $row = mysqli_fetch_array($do_sql);
        if ($do_sql) {
            $token = array ();
            $token['user'] = $user;
            $token['pass'] = $pass;
            $tok = JWT::encode($token, 'secret_server_key');
            $_SESSION["encodedScript"]=$tok;
            
            if ($row[2] == "general") {
                $_SESSION["usuario"]=$user;
                echo ' <meta http-equiv="refresh" content="0;  url=directores/mod_prog.php">';
            }
            elseif ($row[2] == "administrador") {
                $_SESSION["usuario"]=$user;
                echo ' <meta http-equiv="refresh" content="0;  url=?.php">';
            }
            elseif ($row[2] == "coordinador") {
                $_SESSION["usuario"]=$user;
                echo ' <meta http-equiv="refresh" content="0;  url=coordinador/coordinador.php">';
            }
            elseif ($row[2] == "director") {
                $_SESSION["usuario"]=$user;
                echo ' <meta http-equiv="refresh" content="0;  url=directores/lista_programas.php">';
            }
        }
    }
?>
    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                
                <div class="login-form">
                    <div class="login-logo">
                        <a href="index.html">
                            <img class="align-content" src="images/logo1.png" alt="" width="50%">
                        </a>
                    </div>
                    <br>
                    <form action="page-login.php" method="POST" name="flogin">
                        <div class="form-group">
                            <label>Clave de la institución</label>
                            <input type="text" name="usuario" id="usuario" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Contraseña</label>
                            <input type="password" name="password" id="password" class="form-control">
                        </div>
                        <div class="checkbox" align="center">
                            <label class="" >
                                <a href="#" style="color: #999999;">¿Olvidaste la contraseña?</a>
                            </label>
                        </div><br>
                        <button type="submit" name="flogin" class="btn btn-success btn-flat m-b-30 m-t-30">Entrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>
</html>
