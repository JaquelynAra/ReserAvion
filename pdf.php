<?php
	$asiento = $_GET['asiento'];
	if($asiento >= 1 and $asiento <=5)
		$clase ="Primera Clase";
	else
		$clase = "Segunda Clase";
	include("fpdf17/fpdf.php");
	$pdf = new FPDF('P','cm','letter');
	$pdf->AddPage();
	$pdf->SetFont('Arial','B',16);
	$pdf->Cell(12,2.5,"Asiento",1,0,'C');
	$pdf->Cell(7.5,2.5,"Clase",1,0,'C');
	$pdf->Ln();
	$pdf->SetFont('Arial','',14);
	$pdf->Cell(12,2.5,$asiento,1,0,'C'); 
	$pdf->Cell(7.5,2.5,$clase,1,0,'C');
	$pdf->Ln();
	$pdf->Ln();
	$pdf->SetTextColor(0,0,255);
	$pdf->Cell(19.5,2.5,"Gracias por viajar en nuetro primer avión.",0,0,'C');
	$pdf->Output();		 	
?>