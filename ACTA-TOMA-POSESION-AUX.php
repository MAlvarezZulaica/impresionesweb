<?php
require('FPDF\fpdf.php');
require('Config.php');

$pdf = new FPDF();
$pdf->AddPage();

$widthColumn = ($pdf->GetPageWidth() / 2) - $pdf->GetX() - 20;

$pdf->Image('img\dirGral.png', $pdf->GetX(), $pdf->GetY(), $widthColumn, 0, 'PNG');

$pdf->SetFont('Arial', 'B', 18);

$pdf->Cell(0, 5, texto('D5a'), 0, 0, 'R');

$pdf->SetFont('Arial', 'B', 8);

$pdf->SetY($pdf->GetY() + 15);
$pdf->SetX($widthColumn + $pdf->GetX() + 25);
$pdf->Cell(0, 5, texto('DIRECCIÓN DE EDUCACIÓN SUPERIOR'), 'B', 1);

$pdf->SetX($widthColumn + $pdf->GetX() + 25);
$pdf->Cell(0, 5, texto('INSTITUTO SUPERIOR DE FORMACIÓN'), 0, 1);

$pdf->SetFont('Arial', '', 8);

$pdf->SetX($widthColumn + $pdf->GetX() + 25);
$pdf->Cell(0, 5, texto('TÉCNICA N° 130'), '', 1);

$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(0, 20, 'ACTA DE TOMA DE POSESIÓN', 0, 1, 'C');

$pdf->SetFont('Arial', '', 10);
$txt1 = '          En la ciudad de Olavarría, Provincia de Buenos Aires, a los ' . date('d') . ' días del mes de ' . getMes(date('n')) . ' de ' . date('Y') . ', la Sra./Sr. ......................... cuyos datos figuran al pie, toma posesión en el establecimiento, en el cargo de auxiliar ....................., en reemplazo de ...................... según se detalla a continuación:';
$pdf->MultiCell(0, 8, texto($txt1), 0, 1);

$pdf->Ln();

$pdf->SetX($pdf->GetX() + 30);

$pdf->SetFont('Arial', 'B', 10);
$widthColumn = ($pdf->GetPageWidth() / 5) - $pdf->GetX() - 20;

$pdf->Cell(40, 8, 'Cargo', 1, 0, 'C');
$pdf->MultiCell(30, 4, texto('Situación de Revista'), 1, 'C', false);

$pdf->SetY($pdf->GetY() - 8);
$pdf->SetX($pdf->GetX() + 100);

$pdf->Cell(30, 8, texto('Desde'), 1, 0, 'C');
$pdf->Cell(30, 8, texto('Hasta'), 1, 0, 'C');

$pdf->Ln();

$pdf->SetFont('Arial', '', 10);

$pdf->SetX($pdf->GetX() + 30);

$pdf->Cell(40, 8, texto(''), 1, 0, 'C');
$pdf->Cell(30, 8, texto(''), 1, 0, 'C');
$pdf->Cell(30, 8, texto(''), 1, 0, 'C');
$pdf->Cell(30, 8, texto(''), 1, 0, 'C');

$pdf->SetY($pdf->GetY() + 20);

$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(0, 20, 'DATOS PERSONALES:', 0, 1, 'L');

$pdf->SetFont('Arial', '', 10);
$pdf->Cell(60, 8, 'DNI: ', 0, 0, 'L');
$pdf->Cell(70, 8, 'Fecha de Nacimiento: ', 0, 1, 'L');
$pdf->Cell(60, 8, 'Domicilio: ', 0, 0, 'L');
$pdf->Cell(70, 8, 'Tel.: ', 0, 1, 'L');

$pdf->SetY($pdf->GetY() + 100);

$pdf->SetX($pdf->GetX() + 62);

$pdf->Cell(62, 12, 'Sello del Establecimiento', 0, 0, 'C');

$pdf->SetY($pdf->GetY() - 42);
$pdf->SetX($pdf->GetX() + 124);

$pdf->Cell(62, 12, 'Firma y Sello del Secretario/a', 0, 0, 'C');


$pdf->Output();
?>