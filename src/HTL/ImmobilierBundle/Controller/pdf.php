<?php

require('fpdf17/fpdf.php');

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','I',16);
$pdf->Cell(40,10,'Hello World ! Welcome' );
$pdf->Output();

?>