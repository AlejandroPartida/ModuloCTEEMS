<?php
require('fpdf/fpdf.php');
require("connection.php"); 


class PDF extends FPDF {
    function Header() {
        $this -> SetFont('Arial', 'B', 14);
        // Movernos a la derecha
        $this->Cell(60);
        // Título
        $this->Cell(70,10,'Lineamientos',1,1,'C');
        // Salto de línea
        $this->Ln(20);
        $this -> Cell(30, 10, 'ID', 1, 0, 'C', 0);
        $this -> Cell(70, 10, 'Nombre', 1, 0, 'C', 0);   
        $this -> Cell(90, 10, utf8_decode('Descripción'), 1, 1, 'C', 0);


    }

    function Footer() {
         // Posición: a 1,5 cm del final
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial','I',8);
        // Número de página
        $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
    }
}


$sql = "SELECT * FROM lineamientos;";

$result = $conn->query($sql);

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','B',12);
$fontSize = 12;
$tempFontSize = $fontSize;
$cellWidth = 70;

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $id = $row["id"];
        $nombre = $row["nombre"];
        $descripcion = $row["descripcion"];
        
        $pdf -> Cell(30, 10, $row['id'], 1, 0, 'C', 0);
        while($pdf->GetStringWidth($row['nombre']) > $cellWidth){
            $pdf->SetFontSize($tempFontSize -= 0.1);
        }
        $pdf -> Cell(70, 10, $row['nombre'], 1, 0, 'C', 0);
        $pdf -> SetFontSize($fontSize);
        $pdf -> Cell(90, 10, $row['descripcion'], 1, 1, 'C', 0);

        

    }
}

$pdf->Output();
?>