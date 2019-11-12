<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    <meta charset="utf-8">
    <title></title>

  </head>
  <body>

    <?php
      require('fpdf/fpdf.php');

      class PDF extends FPDF {
          function Header() {
              $this -> SetFont('Arial', 'B', 14);
              // Movernos a la derecha
              $this->Cell(60);
              // Título
              $this->Cell(70,10,'',1,1,'C');
              // Salto de línea
              $this->Ln(20);
              $this -> Cell(30, 10, '', 1, 0, 'C', 0);
              $this -> Cell(70, 10, '', 1, 0, 'C', 0);   
              $this -> Cell(90, 10,'', 1, 1, 'C', 0);
              $this->Image('formatoTab.png', 0, 0, 210, 297);

          }

          function Footer() {
               // Posición: a 1,5 cm del final
             
          }
      }

      $numero=$_POST['pedido'];
      $servidor="remotemysql.com";
      $bd="J7F7S1NVFx";
      $user="J7F7S1NVFx";
      $pass="aoet0WesuU";
      $dbconn=mysqli_connect($servidor, $user, $pass, $bd);

        // Revisamos el estado de la conexion en caso de errores.
      if(!$dbconn) {
        echo "Error: No se ha podido conectar a la base de datos\n";
      } else {
      echo "\n";
      }

      $sql=mysqli_query($dbconn,"SELECT * FROM programas Where id ='$numero'");
      $reg=mysqli_fetch_array($sql);

      $pdf = new PDF();
      $pdf->AddPage();
      $fontSize = 20;
      $tempFontSize = $fontSize;
      $cellWidth = 70;

      

        $pdf->SetFont('Arial','B',18);
        $pdf->Ln(20);
        $pdf->Ln(34);
        $pdf->Cell(40);

        $pdf -> Write(14, $reg['fk_plantel']);
        
        $pdf -> Write(14, " ".$reg['varEstatus']);
        $pdf -> Ln(30);
        $pdf->Cell(40);

        
        $pdf -> Write(14, $reg['nom_prog']);
        $pdf -> Ln(30);
        $pdf->Cell(40);

        $pdf -> Write(14, $reg['objetivo']);
        $pdf -> Ln(15);
        $pdf->Cell(40);
        
        $pdf -> Write(14, $reg['fecha_ini']."                                ".$reg['fecha_fin']);
        $pdf -> Ln(15);
        $pdf->Cell(80);
      



      /*
      $imagen= imagecreatefrompng('formatoTab.png');
      $texto2 = 'Nombre de Plantel:'.$reg['varPlantel'];
      $texto3 = 'Tipo de Plantel:'.$reg['varEstatus'];
      $texto4 = 'Numero del Plantel:'.$reg['varNomProg'];
      $texto5 = 'Telefono del Plantel:'.$reg['txtObjetivo'];
      $fuente = 'C:\Windows\Fonts\ARIALUNI.TTF';//cambiar fuente dependiendo equipo y corregir
      $negro = imagecolorallocate($imagen, 0, 0, 0);

      $text_color = imagecolorallocate( $imagen, 0, 0, 0 ); // Color del texto en la imagen.
      imagettftext($imagen, 60, 0, 100, 100, $negro, $fuente, $texto2);
      imagettftext($imagen, 60, 0, 100, 200, $negro, $fuente, $texto3);
      imagettftext($imagen, 60, 0, 100, 300, $negro, $fuente, $texto4);
      imagettftext($imagen, 60, 0, 100, 400, $negro, $fuente, $texto5);


      imagepng( $imagen, 'formatoTab2.png' ); // Crea la imagen y la guarda donde le digas
      imagedestroy( $imagen ); // Destruye la estructura de datos
      echo '<img src="formatoTab2.png" />'; // Muestras    la imagen.

      //$filename = "nombre_del_archivo.pdf";

      $pdf = new FPDF();
      $pdf ->AddPage();
      $pdf->Image('formatoTab.png',20,40,190,190);
      ob_end_clean();
      $pdf->OutPut('ReporteP.pdf','D');
      */
      ob_end_clean();
      $pdf->OutPut();

     ?>

  </body>
</html>
