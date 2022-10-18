<?php
require ("NumeroALetras.php");
use sirius\NumeroALetras\NumeroALetras;
$formatter = new NumeroALetras();
$numletra=$formatter->toInvoice(83.00, 2, '');


require("fpdf/fpdf.php");
class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // 
    $this->Image('img/marco.png',145,20,55,25);
    $this->Image('img/logoescuela.png',80,25,40,15);
    $this->SetFont('Arial','IB',15);
    $this->Cell(70,10,'AUTO ESCUELA DE MANEJO ESQUIPULA',0,1,'L');
    $this->SetFont('Arial','',8);
    $this->Cell(95,4,'R.U.C. 1583549-1-662985 D.V. 4',0,1,'L');
    $this->SetFont('Arial','',8);
    $this->Cell(95,4,'Telefonos: 391-2022 / 391-9200',0,0,'L');
    $this->Cell(40,4,'',0,0,'L');
    $this->SetFont('Arial','',12);
    $this->Cell(55,4,'FACTURA',0,1,'C');
    $this->SetFont('Arial','',8);
    $this->Cell(95,4,'San isidro: Cel: 6378-5309',0,1,'L');
    $this->Cell(95,4,'Local # 38, segundo piso',0,1,'L');
    $this->Cell(95,4,'Escuelaesquipulamilla8@hotmail.com',0,0,'L');
    $this->Cell(40,4,'',0,0,'L');
    $this->SetFont('Arial','',12);
    $this->Cell(25,4,'NOR.',0,0,'L');
    $this->Cell(25,4,'29',0,1,'L');
    $this->Cell(25,6,'',0,1,'L');
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,'Pagina '.$this->PageNo().'/{nb}',0,0,'C');
}
}
   
// Creación del objeto de la clase heredada
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->Image('img/marco1.png',10,46,95,40);
$pdf->Image('img/marco3.png',107,46,93,40);
$pdf->SetFont('Arial','',10);
$pdf->Cell(98,5,'Cliente',0,0,'L',0);
$pdf->Cell(50,5,utf8_decode('Lugar y fecha de expedición:'),0,0,'L',0);
$pdf->Cell(103,5,utf8_decode('Vencimiento:'),0,1,'L',0);


$pdf->Cell(98,5,'ANGEL ANTHONYO JAEN CUESTA',0,0,'L',0);
$pdf->Cell(50,5,utf8_decode(''),0,0,'L',0);
$pdf->Cell(103,5,utf8_decode(''),0,1,'L',0);

$pdf->Cell(98,5,'Telefono: 6281-41-36',0,0,'L',0);
$pdf->Cell(50,5,utf8_decode('5 de julio 2018'),0,0,'L',0);
$pdf->Cell(103,5,utf8_decode('5 de julio de 2018'),0,1,'L',0);

$pdf->Cell(98,5,'SAN ISIDRO 6 ETAPA',0,0,'L',0);
$pdf->Cell(50,5,utf8_decode(''),0,0,'L',0);
$pdf->Cell(103,5,utf8_decode(''),0,1,'L',0);

$pdf->Cell(98,5,'',0,0,'L',0);
$pdf->Cell(50,5,utf8_decode('Vendedor: Hilda'),0,0,'L',0);
$pdf->Cell(22,5,utf8_decode('Condiciones:'),0,0,'L',0);
$pdf->Cell(10,5,utf8_decode('Credito'),0,1,'L',0);

$pdf->Cell(98,5,'Reg. Tribut.: 8-906-1890',0,0,'L',0);
$pdf->Cell(50,5,utf8_decode(''),0,0,'L',0);
$pdf->Cell(103,5,utf8_decode(''),0,1,'L',0);

$pdf->Cell(98,5,utf8_decode('Código clte: S0146'),0,0,'L',0);
$pdf->Cell(50,5,utf8_decode('Refer.:'),0,0,'L',0);
$pdf->Cell(22,5,utf8_decode('Envió:'),0,0,'L',0);
$pdf->Cell(10,5,utf8_decode('Entregado'),0,1,'L',0);

$pdf->Cell(190,8,utf8_decode(' '),0,1,'L');

$pdf->Cell(30,8,utf8_decode('Codigo producto'),1,0,'C');
$pdf->Cell(90,8,utf8_decode('Descripcion del producto'),1,0,'C');
$pdf->Cell(20,8,utf8_decode('Cantidad'),1,0,'C');
$pdf->Cell(25,8,utf8_decode('Precio Unit. $'),1,0,'C');
$pdf->Cell(25,8,utf8_decode('Subtotal $'),1,1,'C');

$pdf->SetFont('Arial','',8);
$pdf->Cell(30,8,utf8_decode('155'),0,0,'L');
$pdf->Cell(90,8,utf8_decode('TRAMITE COMERCIAL (ACD) PROMOCIÓN'),0,0,'L');
$pdf->Cell(20,8,utf8_decode('1.00'),0,0,'R');
$pdf->Cell(25,8,utf8_decode('80.00'),0,0,'R');
$pdf->Cell(25,8,utf8_decode('80.00'),0,1,'R');

$pdf->Cell(190,10,'',0,1,'C');
$pdf->Cell(190,0,'',1,1,'C');
$pdf->Cell(30,8,utf8_decode(''),0,0,'L');
$pdf->Cell(90,8,utf8_decode(''),0,0,'L');
$pdf->Cell(20,8,utf8_decode('1.00'),0,0,'R');
$pdf->Cell(25,8,utf8_decode('Subtotal'),0,0,'R');
$pdf->Cell(25,8,utf8_decode('83.00'),0,1,'R');

$pdf->Cell(190,10,'',0,1,'C');
$pdf->Cell(30,8,utf8_decode(''),0,0,'L');
$pdf->Cell(90,8,utf8_decode(''),0,0,'L');
$pdf->Cell(20,8,utf8_decode('TOTAL'),0,0,'R');
$pdf->Cell(25,8,utf8_decode('$'),0,0,'R');
$pdf->Cell(25,8,utf8_decode('83.00'),0,1,'R');

$pdf->Cell(190,3,'',0,1,'C');
$pdf->Cell(160,3,utf8_decode(''),0,0,'L');
$pdf->Cell(30,3,utf8_decode($numletra),0,1,'R');


$pdf->Output();/* */
?>