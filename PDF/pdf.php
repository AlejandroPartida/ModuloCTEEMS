<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    <meta charset="utf-8">
    <title></title>

  </head>
  <body>

    <?php
    $numero=$_POST['pedido'];
      $servidor="localhost";
      $bd="cecyte";
      $user="root";
      $pass="";
      $dbconn=mysqli_connect($servidor, $user, $pass, $bd);

        // Revisamos el estado de la conexion en caso de errores.
      if(!$dbconn) {
        echo "Error: No se ha podido conectar a la base de datos\n";
      } else {
      echo "\n";
      }

      $sql=mysqli_query($dbconn,"SELECT * FROM plantel Where clave_plantel ='$numero'");
      $reg=mysqli_fetch_array($sql);

      require_once('lib/fpdf.php');


      $imagen= imagecreatefrompng('Sin título-1.png');
      $texto2 = 'Nombre de Plantel:'.$reg['nombre_plantel'];
      $texto3 = 'Tipo de Plantel:'.$reg['tipo_plantel'];
      $texto4 = 'Numero del Plantel:'.$reg['numero_plantel'];
      $texto5 = 'Telefono del Plantel:'.$reg['telefono_plantel'];
      $fuente = 'C:\Windows\Fonts\bgothl.ttf';//cambiar fuente dependiendo equipo y corregir
      $fuente2 = 2;
      $negro = imagecolorallocate($imagen, 0, 0, 0);

      $text_color = imagecolorallocate( $imagen, 0, 0, 0 ); // Color del texto en la imagen.
      imagettftext($imagen, 60, 0, 190, 600, $negro, $fuente, $texto2);
      imagettftext($imagen, 60, 0, 190, 800, $negro, $fuente, $texto3);
      imagettftext($imagen, 60, 0, 190, 1000, $negro, $fuente, $texto4);
      imagettftext($imagen, 60, 0, 190, 1200, $negro, $fuente, $texto5);


      imagepng( $imagen, 'Sin título-2.png' ); // Crea la imagen y la guarda donde le digas
      imagedestroy( $imagen ); // Destruye la estructura de datos
      echo '<img src="Sin título-2.png" />'; // Muestras    la imagen.

      //$filename = "nombre_del_archivo.pdf";

      $pdf = new FPDF();
      $pdf ->AddPage();
      $pdf->Image('Sin título-2.png',20,40,180,180);
      ob_end_clean();
      $pdf->OutPut('Reporte1.pdf','D');

      $lol=0;
      echo "<script type='text/javascript' language='Javascript'>window.open('Reporte.pdf');</script>";
      $lol++;
      if ($lol>1) {
        unlink('Reporte1.pdf');
       }
     ?>

  </body>
</html>
