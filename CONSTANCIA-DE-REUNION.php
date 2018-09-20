<?php
	require('FPDF\fpdf.php');
	require('Config.php');

	$pdf = new FPDF();
	$pdf->AddPage();

	$widthColumn = ($pdf->GetPageWidth() / 2) - $pdf->GetX() - 20;

	$pdf->Rect($pdf->GetX() - 4, $pdf->GetY() - 4, $pdf->GetPageWidth() - ($pdf->GetX() * 2) + 8, 130, 'D');

	$pdf->Image('img\BsAsProv.png', $pdf->GetPageWidth() - $pdf->GetX() - $widthColumn  + 20, $pdf->GetY() , 50, 0, 'PNG');


	$pdf->SetFont('Arial', 'B', 8);

	$pdf->SetX($widthColumn - $pdf->GetX() - 55);
	$pdf->Cell(0, 5, texto('Dirección General de Cultura y Educación'), 0, 2);
	$pdf->Ln();

	$pdf->SetFont('Arial', '', 8);

	$pdf->Cell(0, 3, texto('Dirección de Educación Superior'), 0, 2);
	$pdf->Cell(0, 3, texto('Instituto Superior de Formación Técnica N° 130'), 0, 2);
	$pdf->Cell(0, 3, texto('SanMartín 3051 - Olavarría - Pcia. de Buenos Aires'), 0, 2);
	$pdf->Cell(0, 3, texto('Teléfonos: 441887 - 427692'), 0, 2);
	$pdf->Cell(0, 3, texto('Correo electrónico: 130instituto@gmail.com'), 0, 2);

	$pdf->SetFont('Arial', 'B', 12);
	$pdf->Cell(0, 20, texto('CONSTANCIA DE REUNIÓN'), 0, 1, 'C');

	$pdf->SetFont('Arial', '', 10);
	$txt1 = '          El Instituto Superior de Formación Técnica N° 130, certifica que ........................ DNI ........................ concurrió a la reunión de personal de la Tecnicatura Superior en ........................, llevada a cabo el día ......... de ........................ de ......... desde las ....................Hs. hasta las ......................Hs.' ;
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