<?php
  require("fpdf/fpdf.php");
  $bdayq1=$_POST["bday1"];
  $bdayq2=$_POST["bday2"];
  //echo $bdayq1;
  //echo $bdayq2;
  
  include("../Confi/db.php");
  

  $titulo="Reporte desde el dia: "." ".$bdayq1." "."hasta el dia: "." ".$bdayq2;
  $gastototal=0;
  $gananciatotal=0;
  $gastototal=0;
  $totalcontradodia=0;

  
  class PDF extends FPDF
  {
  // Cabecera de página
  function Header()
  {
      // Logo
  
      // Arial bold 15
      $this->SetFont('Arial','B',15);
      // Título
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
      //$this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
  }
  }
  
  // Creación del objeto de la clase heredada
  //$fotorandon="1638827413_logo_utp_1_300.png";
  $pdf = new FPDF();
  $pdf->AliasNbPages();
  $pdf->AddPage('');
  $pdf->SetFont('Arial','B',13);
  $pdf->Ln();
  /////////////// primera linea
  $pdf->Cell(190,15,utf8_decode($titulo),1,1,'C');

  $pdf->SetFont('Arial','B',10);
  $pdf->Cell(190,10,'',0,1,'C',0);
  $pdf->Cell(190,10,'Ingresos por contratos',1,1,'C',0);
  $pdf->Cell(64,10,'Fecha',1,0,'C',0);
  $pdf->Cell(42,10,'Primeros abonos',1,0,'C',0);
  $pdf->Cell(42,10,'Segundos abonos',1,0,'C',0);
  $pdf->Cell(42,10,'Total del dia',1,1,'C',0);

  foreach($contratoscli as $esquipula) { 
        $totalcontradodia=0;
        $totalcontradodia=$totalcontradodia+$esquipula['abonouno']+$esquipula['abonodos']; 
        $gananciatotal=$gananciatotal+$esquipula['abonouno']+$esquipula['abonodos']; 
        $pdf->Cell(64,10,utf8_decode ($esquipula['Fecha']),1,0,'C',0);
        $pdf->Cell(42,10,utf8_decode ($esquipula['abonouno']),1,0,'C',0);
        $pdf->Cell(42,10,utf8_decode ($esquipula['abonodos']),1,0,'C',0);
        $pdf->Cell(42,10,utf8_decode ($totalcontradodia),1,1,'C',0);
  }

  $pdf->SetFont('Arial','B',10);
  $pdf->Cell(190,10,'',0,1,'C',0);
  $pdf->Cell(190,10,'Ingresos por Gastos adicionales de clientes',1,1,'C',0);
  $pdf->Cell(95,10,'Fecha',1,0,'C',0);
  $pdf->Cell(95,10,'Monto',1,1,'C',0);

  foreach($facturasclientes as $esquipula) { 
        $gananciatotal=$gananciatotal+$esquipula['abono']; 
        $pdf->Cell(95,10,utf8_decode ($esquipula['fecha']),1,0,'C',0);
        $pdf->Cell(95,10,utf8_decode ($esquipula['abono']),1,1,'C',0);
  }

  $pdf->SetFont('Arial','B',10);
  $pdf->Cell(190,10,'',0,1,'C',0);
  $pdf->Cell(190,10,'Gastos de la Empresa',1,1,'C',0);
  $pdf->Cell(95,10,'Fecha',1,0,'C',0);
  $pdf->Cell(95,10,'Monto',1,1,'C',0);

  foreach($gastos as $esquipula) { 
      $gastototal= $gastototal+$esquipula['montos']; 
      $pdf->Cell(95,10,utf8_decode ($esquipula['fecha']),1,0,'C',0);
      $pdf->Cell(95,10,utf8_decode ($esquipula['montos']),1,1,'C',0);
  }
  $totaldia=-$gastototal+$gananciatotal;

  $pdf->SetTitle("Total de ingresos del dia");

  $pdf->Cell(190,10,utf8_decode (""),0,1,'C',0);
  $pdf->Cell(190,10,utf8_decode ("Total de ingresos del dia"),1,1,'C',0);
  $pdf->Cell(64,10,utf8_decode ("Total de ingresos"),1,0,'C',0);
  $pdf->Cell(63,10,utf8_decode ("Total de gastos"),1,0,'C',0);
  $pdf->Cell(63,10,utf8_decode ("Total final"),1,1,'C',0);
  $pdf->Cell(64,10,utf8_decode ( $gananciatotal),1,0,'C',0);
  $pdf->Cell(63,10,utf8_decode ( $gastototal),1,0,'C',0);
  $pdf->Cell(63,10,utf8_decode ( $totaldia),1,1,'C',0);
  

  $pdf->Output();
?>