<?php
require('fpdf/fpdf.php');
require("connection.php");
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
        $this -> Cell(90, 10, '', 1, 1, 'C', 0);
        $this->Image('PDF/Sin título-1.png', 0, 0, 210, 297);
    }
    function Footer() {
         // Posición: a 1,5 cm del final

    }
}
$sql = "SELECT * FROM lineamientos;";
$result = $conn->query($sql);
$pdf = new PDF();
$pdf->AliasNbPages();
$fontSize = 20;
$tempFontSize = $fontSize;
$cellWidth = 70;
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $id = $row["id_lineamiento"];
        $nombre = $row["nombre"];
        $descripcion = $row["descripcion"];
        $pdf->AddPage();
        $pdf->SetFont('Arial','B',18);
        $pdf -> Write(14, 'ID de Lineamiento: ');
        $pdf->SetFont('Arial','',18);
        $pdf -> Write(14, $row['id_lineamiento']);
        $pdf -> Ln(10);
        $pdf->SetFont('Arial','B',18);
        $pdf -> Write(14, 'Nombre de Lineamiento: ');
        $pdf->SetFont('Arial','',18);
        $pdf -> Write(14, $row['nombre']);
        $pdf -> Ln(10);
        $pdf->SetFont('Arial','B',18);
        $pdf -> Write(14, utf8_decode('Descripción de Lineamiento: '));
        $pdf->SetFont('Arial','',18);
        $pdf -> Write(14, utf8_decode($row['descripcion']));
        //$pdf -> Cell(30, 10, $row['id_lineamiento'], 1, 0, 'C', 0);
        //while($pdf->GetStringWidth($row['nombre']) > $cellWidth){
        //    $pdf->SetFontSize($tempFontSize -= 0.1);
        //}
        //$pdf -> Cell(70, 10, $row['nombre'], 1, 0, 'C', 0);
        //$pdf -> SetFontSize($fontSize);
        //$pdf -> Cell(90, 10, $row['descripcion'], 1, 1, 'C', 0);

    }
}
$pdf->Output();
?>
