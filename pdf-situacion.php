<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    <meta charset="utf-8">
    <title></title>

  </head>
  <body>

    <?php
      require('lib/fpdf.php');

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
              $this->Image('situaciones.png', 0, 0, 210, 297);

          }

          function Footer() {
               // Posición: a 1,5 cm del final
             
          }
      }

      $numero=$_POST['pedidoSituacion'];
      $numero2=$_POST['pedidoP'];
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

      $sql=mysqli_query($dbconn,"SELECT nombre_plantel,
      retroalimentacion.descripcion as retroalimentacion ,nom_prog, objetivo, fecha_ini, fecha_fin, plan_mejora.descripcion as planMeta  FROM plantel JOIN programas
       ON plantel.clave_plantel=programas.fk_plantel JOIN situaciones ON 
       situaciones.id_programa=programas.id join retroalimentacion on 
       retroalimentacion.id_programa=programas.id join plan_mejora on 
       plan_mejora.id_programa=programas.id WHERE situaciones.id='$numero'");
      $reg=mysqli_fetch_array($sql);

      $pdf = new PDF();
      $pdf->AddPage();
      $fontSize = 20;
      $tempFontSize = $fontSize;
      $cellWidth = 70;

      $pdf->SetFont('Arial','B',18);
      $pdf->Ln(57);
      $pdf->Cell(40);

      $pdf -> Write(14, $reg['nombre_plantel']);
      $pdf->Ln(25);

      $pdf->Cell(40);
      
      $pdf -> Write(14, " ".$reg['nom_prog']);
      $pdf -> Ln(18);
      $pdf->Cell(40);

      
      $pdf -> Write(14, $reg['objetivo']);
      $pdf -> Ln(10);
      $pdf->Cell(40);

      $pdf -> Write(14, $reg['fecha_ini']."                              ".$reg['fecha_fin']);
      $pdf -> Ln(40);
      $pdf->Cell(10);

      $pdf -> Write(14, $reg['retroalimentacion']);
      $pdf -> Ln(10);
      $pdf->Cell(40);


      ob_end_clean();
      $pdf->OutPut();

     ?>

  </body>
</html>