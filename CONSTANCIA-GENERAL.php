<?php
	require('FPDF\fpdf.php');
	require('Config.php');

	$pdf = new FPDF();
	$pdf->AddPage();

	$widthColumn = ($pdf->GetPageWidth() / 2) - $pdf->GetX() - 20;

	$pdf->Rect($pdf->GetX() - 4, $pdf->GetY() - 4, $pdf->GetPageWidth() - ($pdf->GetX() * 2) + 8, 127, 'D');

	$pdf->Image('img\dirGral.png', $pdf->GetX(), $pdf->GetY(), $widthColumn, 0, 'PNG');

	$pdf->Image('img\ISFT130Logo.jpg', $pdf->GetPageWidth() - $pdf->GetX() - 15, $pdf->GetY(), 15, 0, 'JPG');

	$pdf->SetFont('Arial', 'B', 8);

	$pdf->SetY($pdf->GetY() + 15);
	$pdf->SetX($widthColumn + $pdf->GetX() + 25);
	$pdf->Cell(0, 5, texto('DIRECCIÓN DE EDUCACIÓN SUPERIOR'), 'B', 1);

	$pdf->SetX($widthColumn + $pdf->GetX() + 25);
	$pdf->Cell(0, 5, texto('INSTITUTO SUPERIOR DE FORMACIÓN'), 0, 1);

	$pdf->SetFont('Arial', '', 8);

	$pdf->SetX($widthColumn + $pdf->GetX() + 25);
	$pdf->Cell(0, 5, texto('TÉCNICA N° 130'), 'B', 1);

	$pdf->SetFont('Arial', 'B', 12);
	$pdf->Cell(0, 20, 'CONSTANCIA GENERAL', 0, 1, 'C');

	$pdf->SetFont('Arial', '', 10);
	$txt1 = '          El Instituto Superior de Formación Técnica N° 130, certifica que ........................ DNI ........................ se desempeña como Docente en la Insitución.';
	$pdf->MultiCell(0, 8, texto($txt1), 0, 1);

	$pdf->Ln();

	$txt2 = '          A pedido del interesado/a y para presentar ante quien corresponda, se extiende la presente en la ciudad de Olavarría a los ' . date('d') . ' días del mes de ' . getMes(date('n')) . ' de ' . date('Y') . '.';
	$pdf->MultiCell(0, 8, texto($txt2), 0);

	$widthColumn = (($pdf->GetPageWidth() - ($pdf->GetX() * 2)) / 3);

	$pdf->SetY($pdf->GetY() + 11);
	$pdf->Cell($widthColumn, 8, '________________________', 0, 0, 'C');

	$pdf->SetX(($widthColumn) + $pdf->GetX());
	$pdf->Cell($widthColumn, 8, '________________________', 0, 1, 'C');

	$y = $pdf->GetY();

	$pdf->MultiCell($widthColumn, 5, texto('Secretario/a' . chr(10) . 'Firma y Sello'), 0, 'C');

	$pdf->SetY($y + 2.5);
	$pdf->SetX(($widthColumn) + $pdf->GetX());
	$pdf->MultiCell($widthColumn, 5, texto('Sello del Establecimiento'), 0, 'C');

	$pdf->SetY($y);
	$pdf->SetX(($widthColumn * 2) + $pdf->GetX());
	$pdf->MultiCell($widthColumn, 5, texto('Director/a' . chr(10) . 'Firma y Sello'), 0, 'C');

	$pdf->Output();
?>