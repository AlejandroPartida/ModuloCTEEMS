<?php
    function conexion(){
        $servidor =  "localhost";
        $usuario = "root";
        $pass =  "";
        $bd = "pdf";


        $conexion = mysqli_connect($servidor, $usuario, $pass, $bd);

        return $conexion;
    }
 ?>
