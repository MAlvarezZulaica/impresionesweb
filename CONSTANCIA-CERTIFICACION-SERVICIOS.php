<?php
require('FPDF\fpdf.php');
require('Config.php');

$pdf = new FPDF();
$pdf->AddPage();

$widthColumn = ($pdf->GetPageWidth() / 2) - $pdf->GetX() - 20;

$pdf->Image('img\dirCultEduc.jpg', $pdf->GetX(), $pdf->GetY(), $widthColumn, 0, 'JPG');

$pdf->Image('img\ISFT130Logo.jpg', $pdf->GetPageWidth() - $pdf->GetX() - 15, $pdf->GetY(), 15, 0, 'JPG');

$pdf->SetY($pdf->GetY() + 20);
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(0, 20, texto('Constancia de Certificación de Servicios'), 0, 1, 'C');

$pdf->SetFont('Arial', '', 10);
$txt1 = '          Certifico que ........................ DNI N° ........................ se desempeñó como docente en el ISFT N° 130 según se detalla a continuación:';
$pdf->MultiCell(0, 8, texto($txt1), 0, 1);

$pdf->SetY($pdf->GetY() + 10);

$pdf->SetFont('Arial', 'B', 10);
$widthColumn = ($pdf->GetPageWidth() / 7) - $pdf->GetX() - 20;

$pdf->Cell(40, 12, 'Materias', 1, 0, 'C');

$pdf->MultiCell(18, 4, texto('Hs. Cátedra/ Módulos'), 1, 'C', false);

$pdf->SetY($pdf->GetY() - 12);
$pdf->SetX($pdf->GetX() + 58);

$pdf->Cell(15, 12, texto('Año'), 1, 0, 'C');
$pdf->Cell(60, 12, 'Carrera', 1, 0, 'C');
$pdf->Cell(15, 12, 'Sit. Rev.', 1, 0, 'C');
$pdf->Cell(20, 12, 'Desde', 1, 0, 'C');
$pdf->Cell(20, 12, 'Hasta', 1, 0, 'C');

$pdf->Ln();

$pdf->SetFont('Arial', '', 10);

$pdf->MultiCell(40, 12, texto(''), 1, 'C', false);

$pdf->SetY($pdf->GetY() - 12);
$pdf->SetX($pdf->GetX() + 40);

$pdf->Cell(18, 12, texto(''), 1, 0, 'C');
$pdf->Cell(15, 12, texto(''), 1, 0, 'C');

$pdf->MultiCell(60, 4, texto('Tecnicatura superior en psicopedagogia. resolucion nro 321321/34'), 1, 'C', false);

$pdf->SetY($pdf->GetY() - 12);
$pdf->SetX($pdf->GetX() + 133);

$pdf->Cell(15, 12, texto(''), 1, 0, 'C');
$pdf->Cell(20, 12, texto(''), 1, 0, 'C');
$pdf->Cell(20, 12, texto(''), 1, 0, 'C');

$pdf->SetY($pdf->GetY() + 20);

$pdf->SetFont('Arial', '', 10);
$txt2 = '          Se extiende la presente constancia en Olavarría, a los ' . date('d') . ' días del mes de ' . getMes(date('n')) . ' de ' . date('Y') . ' a los efectos de ser presentada ante quien corresponda.';
$pdf->MultiCell(0, 8, texto($txt2), 0);

$pdf->Output();
?>