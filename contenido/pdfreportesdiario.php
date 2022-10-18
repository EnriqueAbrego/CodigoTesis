<?php
  $idid=$_POST["idid"];
  //echo $idid;


  $gastototal=0;
  $gananciatotal=0;


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
    $this->Cell(70,10,'Ingresos del dia',1,0,'C');
    // Salto de línea
    $this->Ln(20);


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
$pdf->Cell(190,10,'Ingresos por contratos',1,1,'C',0);
$pdf->Cell(64,10,'Fecha',1,0,'C',0);
$pdf->Cell(63,10,'Abono uno',1,0,'C',0);
$pdf->Cell(63,10,'Abono dos',1,1,'C',0);

foreach($facturasclientes as $esquipula) { 
  if($esquipula['Fecha']==$idid) { 
     $gananciatotal=$gananciatotal+$esquipula['abonounodefactura']+$esquipula['abonodosdefactura']; 
      $pdf->Cell(64,10,utf8_decode ($esquipula['Fecha']),1,0,'C',0);
      $pdf->Cell(63,10,utf8_decode ($esquipula['abonounodefactura']),1,0,'C',0);
      $pdf->Cell(63,10,utf8_decode ($esquipula['abonodosdefactura']),1,1,'C',0);
  }
}
$pdf->Cell(200,10,'',0,1,'C',0);
$pdf->SetFont('Times','',15);
$pdf->Cell(190,10,'Ingresos Gastos adicionales de clientes',1,1,'C',0);
$pdf->Cell(64,10,'Fecha',1,0,'C',0);
$pdf->Cell(63,10,'Motivo',1,0,'C',0);
$pdf->Cell(63,10,'Ingreso',1,1,'C',0);

foreach($gastocliente as $esquipula) { 
  if($esquipula['fecha']==$idid) { 
     $gananciatotal=$gananciatotal+$esquipula['abono']; 
      $pdf->Cell(64,10,utf8_decode ($esquipula['fecha']),1,0,'C',0);
      $pdf->Cell(63,10,utf8_decode ($esquipula['motivo']),1,0,'C',0);
      $pdf->Cell(63,10,utf8_decode ($esquipula['abono']),1,1,'C',0);
  }
}

$pdf->Cell(200,10,'',0,1,'C',0);
$pdf->SetFont('Times','',15);
$pdf->Cell(190,10,'Gastos de la Empresa',1,1,'C',0);
$pdf->Cell(64,10,'Fecha',1,0,'C',0);
$pdf->Cell(63,10,'Motivo',1,0,'C',0);
$pdf->Cell(63,10,'Gasto',1,1,'C',0);

foreach($gastoempresa as $esquipula) { 
  if($esquipula['fecha']==$idid) { 
      $gastototal=$gastototal+$esquipula['monto']; 
      $pdf->Cell(64,10,utf8_decode ($esquipula['fecha']),1,0,'C',0);
      $pdf->Cell(63,10,utf8_decode ($esquipula['motivo']),1,0,'C',0);
      $pdf->Cell(63,10,utf8_decode ($esquipula['monto']),1,1,'C',0);
  }
}

$totaldia=-$gastototal+$gananciatotal;

$pdf->SetTitle("Total de ingresos del dia");

$pdf->Cell(190,10,utf8_decode (""),0,1,'C',0);
$pdf->Cell(190,10,utf8_decode ("Total de ingresos del dia"),1,1,'C',0);
$pdf->Cell(190,10,utf8_decode ( $totaldia),1,1,'C',0);

$pdf->Output();
?>