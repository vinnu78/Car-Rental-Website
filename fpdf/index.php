<?php
require ('fpdf.php');
$pdf = new FPDF('p','mm','A4');
$pdf->AddPage();
$pdf->SetFont('Arial','B',12);
$pdf->Cell(30,10,'Hello World!',1,0);
$pdf->Cell(40,10,'Hello Vinita!',1,0);
$pdf->Cell(40,10,'Hello Priya!',1,0);
$pdf->Cell(30,10,'Hello World!',1,0);
$pdf->Output();
?>