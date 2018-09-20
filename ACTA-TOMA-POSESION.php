<?php
require('FPDF\fpdf.php');
require('Config.php');

$pdf = new FPDF();
$pdf->AddPage();

$widthColumn = ($pdf->GetPageWidth() / 2) - $pdf->GetX() - 20;

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
$pdf->Cell(0, 20, texto('ACTA DE TOMA DE POSESIÓN'), 0, 1, 'C');

$pdf->SetFont('Arial', '', 10);
$txt1 = '          En la ciudad de Olavarría, Provincia de Buenos Aires, a los ' . date('d') . ' días del mes de ' . getMes(date('n')) . ' de ' . date('Y') . ', el/la docente ............ cuyos datos figuran al pie, toma posesión en el establecimiento, en la/s siguiente/s cátedras; en las que ha sido desigando:';
$pdf->MultiCell(0, 8, texto($txt1), 0, 1);

$pdf->Ln();

$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(0, 20, texto('ANEXO'), 0, 1, 'L');

$pdf->SetFont('Arial', 'B', 10);
$widthColumn = ($pdf->GetPageWidth() / 5) - $pdf->GetX() - 20;

$pdf->Cell(40, 8, 'Asignatura', 1, 0, 'C');
$pdf->Cell(15, 8, texto('Año'), 1, 0, 'C');
$pdf->Cell(60, 8, 'Carrera', 1, 0, 'C');

$pdf->MultiCell(30, 4, texto('N° hs./c Módulos'), 1, 'C', false);

$pdf->SetY($pdf->GetY() - 8);
$pdf->SetX($pdf->GetX() + 145);

$pdf->Cell(30, 8, texto('Carácter'), 1, 0, 'C');

$pdf->Ln();

$pdf->SetFont('Arial', '', 10);

$pdf->Cell(40, 12, texto(''), 1, 'C');
$pdf->Cell(15, 12, texto(''), 1, 0, 'C');

$pdf->MultiCell(60, 4, texto('Tecnicatura superior en psicopedagogia. resolucion nro 321321/34'), 1, 'C', false);

$pdf->SetY($pdf->GetY() - 12);
$pdf->SetX($pdf->GetX() + 115);

$pdf->Cell(30, 12, texto(''), 1, 0, 'C');
$pdf->Cell(30, 12, texto(''), 1, 0, 'C');

$pdf->SetY($pdf->GetY() + 20);

$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(0, 20, 'DATOS PERSONALES:', 0, 1, 'L');

$pdf->SetFont('Arial', '', 10);
$pdf->Cell(40, 8, 'DNI: ', 0, 0, 'L');
$pdf->Cell(70, 8, 'Fecha de Nacimiento: ', 0, 0, 'L');

$pdf->SetY($pdf->GetY() + 60);

$pdf->Cell(62, 12, 'Firma del Docente', 0, 1, 'C');

$pdf->SetY($pdf->GetY() + 30);
$pdf->SetX($pdf->GetX() + 62);

$pdf->Cell(62, 12, 'Sello del Establecimiento', 0, 0, 'C');

$pdf->SetY($pdf->GetY() - 42);
$pdf->SetX($pdf->GetX() + 124);

$pdf->Cell(62, 12, 'Firma y Sello del Secretario/a', 0, 0, 'C');

$pdf->Output();
?>