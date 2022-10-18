<?php
$idid=$_POST["idid"];
//echo $idid;

require("fpdf/fpdf.php");
class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    //$this->Image('logo.png',10,8,33);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Movernos a la derecha
    $this->Cell(60);
    // Título
    $this->Cell(70,10,'Accesos Al Sistema',1,0,'C');
    // Salto de línea
    $this->Ln(20);

    $this->Cell(30,10,'Registro',1,0,'C',0);
    $this->Cell(40,10,'Usuario',1,0,'C',0);
    $this->Cell(30,10,'dia',1,0,'C',0);
    $this->Cell(30,10,'hora',1,0,'C',0);
    $this->Cell(30,10,'sucursal',1,0,'C',0);
    $this->Cell(30,10,'estado',1,1,'C',0);
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
$pdf->SetFont('Times','',15);


foreach($iniciosecione as $esquipula){
  if($esquipula['dia']==$idid) {
    $pdf->Cell(30,10,utf8_decode ($esquipula['Registro']),1,0,'C',0);
    $pdf->Cell(40,10,utf8_decode ($esquipula['Usuario']),1,0,'C',0);
    $pdf->Cell(30,10,utf8_decode ($esquipula['dia']),1,0,'C',0);
    $pdf->Cell(30,10,utf8_decode ($esquipula['hora']),1,0,'C',0);
    $pdf->Cell(30,10,utf8_decode ($esquipula['sucursal']),1,0,'C',0);
    $pdf->Cell(30,10,utf8_decode ($esquipula['estado']),1,1,'C',0);
  }
}


$pdf->Output();
?>