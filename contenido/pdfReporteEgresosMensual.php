<?php

$idid=$_POST["bday1"];
$idid1=$_POST["bday2"];
$idid2=$_POST["idid1"];
$contador=0;

if($idid2=="esquipula1"){$escuela="Esquipula 1";$sucursal="SUCURSAL SAN ISIDRO";} 
if($idid2=="esquipula2"){$escuela="Esquipula 2";$sucursal="SUCURSAL CHILIBRE";} 
if($idid2=="esquipula3"){$escuela="Esquipula 3";$sucursal="SUCURSAL  ANTÓN";} 
if($idid2=="esquipula4"){$escuela="Esquipula 4";$sucursal="SUCURSAL 24 DE DICIEMBRE";} 

include("../Confi/db.php");
$diafin= date("Y-m-d",strtotime($idid1."+ 1 days")); 
$fecha=$idid;


$montoapagar=0;
$montopagado=0;
$yini=0;
$xini=0;

$vacio="";
require("fpdf/fpdf.php");
class PDF extends FPDF
{
// Cabecera de página
function Header()
{

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
$pdf->AddPage('LANDSCAPE',array(220,280));
$pdf->SetFont('Arial','U',11);

$pdf->Image('img/logoescuela.png',10,10,60,40);
//$pdf->Image('img/cabecera2.png',10.2,45,270,10);
$pdf->SetFont('Arial','U',11);
$pdf->Cell(150,15,'',0,1,'R');
$pdf->Cell(150,5,'REPORTE DE EGRESOS',0,0,'R');
$pdf->Cell(65,5,'FECHA:',0,0,'R');
$pdf->Cell(50,5,utf8_decode($idid.' Al '.$idid1),0,1,'R');
$pdf->Cell(150,5,$sucursal,0,0,'R');
$pdf->Cell(50,5,utf8_decode(''),0,1,'R');
$pdf->Cell(150,5,'',0,0,'R');
$pdf->Cell(115,5,'REVISADO POR:_______________________',0,1,'R');
$pdf->Cell(150,14,'',0,1,'R');
 
$pdf->SetFont('Arial','I',10);
$pdf->SetXY(5, 50);
$pdf->multicell(25, 10,utf8_decode('Fecha'),1,'C');
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x+20, $y-10);
$pdf->multicell(90, 10,utf8_decode('Proveedor'),1,'C');
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x+110, $y-10);
$pdf->multicell(120, 10,utf8_decode('Descripción'),1,'C');

$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x+230, $y-10);
$pdf->multicell(35, 10,utf8_decode('EGRESO'),1,'C');


$yini=$yini+60;
$xini=$xini+5;
$pdf->SetFont('Arial','',6);
$gastosdelaempresa=0;
while($fecha!=$diafin){
    foreach($gastos as $esquipula) { 
        if($esquipula['fecha']==$fecha) {
            if($esquipula['GastosESucursal']==$escuela) {
                $contador=$contador+1;
                if($contador==22){
                    $contador=0;
                    $pdf->AliasNbPages();
                    $pdf->AddPage('LANDSCAPE',array(220,280));
                    $pdf->SetFont('Arial','U',11);
                    
                    $pdf->Image('img/logoescuela.png',10,10,60,40);
                    //$pdf->Image('img/cabecera2.png',10.2,45,270,10);
                    $pdf->SetFont('Arial','U',11);
                    $pdf->Cell(150,15,'',0,1,'R');
                    $pdf->Cell(150,5,'REPORTE DE EGRESOS',0,0,'R');
                    $pdf->Cell(65,5,'FECHA:',0,0,'R');
                    $pdf->Cell(50,5,utf8_decode($idid.' Al '.$idid1),0,1,'R');
                    $pdf->Cell(150,5,$sucursal,0,0,'R');
                    $pdf->Cell(50,5,utf8_decode(''),0,1,'R');
                    $pdf->Cell(150,5,'',0,0,'R');
                    $pdf->Cell(115,5,'REVISADO POR:_______________________',0,1,'R');
                    $pdf->Cell(150,14,'',0,1,'R');
                     
                    $pdf->SetFont('Arial','I',10);
                    $pdf->SetXY(5, 50);
                    $pdf->multicell(25, 10,utf8_decode('Fecha'),1,'C');
                    $x = $pdf->GetX();
                    $y = $pdf->GetY();
                    $pdf->SetXY($x+20, $y-10);
                    $pdf->multicell(90, 10,utf8_decode('Proveedor'),1,'C');
                    $x = $pdf->GetX();
                    $y = $pdf->GetY();
                    $pdf->SetXY($x+110, $y-10);
                    $pdf->multicell(120, 10,utf8_decode('Descripción'),1,'C');
                    
                    $x = $pdf->GetX();
                    $y = $pdf->GetY();
                    $pdf->SetXY($x+230, $y-10);
                    $pdf->multicell(35, 10,utf8_decode('EGRESO'),1,'C'); 
                    $yini=60;
                    $xini=5;

                }
                $pdf->SetXY($xini,$yini);
                $pdf->SetFont('Arial','',8);
                $pdf->multicell(25, 6,$esquipula['fecha'],1,'C');
                $pdf->SetFont('Arial','',8);
                $x = $pdf->GetX();
                $y = $pdf->GetY();
                $pdf->SetXY($x+20, $y-6);
                $cantidadletras=$esquipula['nombre'];
                $cantidadletras= strlen($cantidadletras);
                if($cantidadletras>50){
                    $pdf->multicell(90, 3,utf8_decode($esquipula['nombre']),1,'L');
                }else{
                    $pdf->multicell(90, 6,utf8_decode($esquipula['nombre']),1,'L');
                }
                $cantidadletras=$esquipula['motivo'];
                $cantidadletras= strlen($cantidadletras);
                $x = $pdf->GetX();
                $y = $pdf->GetY();
                $pdf->SetXY($x+110, $y-6);
                if($cantidadletras>72){
                    $pdf->multicell(120, 3,utf8_decode($esquipula['motivo']),1,'L');
                }else{
                    $pdf->multicell(120, 6,utf8_decode($esquipula['motivo']),1,'L');
                }

                $x = $pdf->GetX();
                $y = $pdf->GetY();
                $pdf->SetXY($x+230, $y-6);
                $pdf->SetFont('Arial','B',12);
                $pdf->multicell(35, 6,$esquipula['monto'],1,'C');
                $gastosdelaempresa=$gastosdelaempresa+$esquipula['monto'];
                $yini=$yini+6;
            }
        }   
    }
$fecha= date("Y-m-d",strtotime($fecha."+ 1 days"));  
}
$pdf->SetFont('Arial','B',12);
$pdf->Cell(-5,6,'',0,0,'C',0);
$pdf->Cell(270,6,"",1,1,'L',0);
$pdf->Cell(-5,6,'',0,0,'C',0);
$pdf->Cell(235,6,"TOTAL DE GASTOS",1,0,'L',0);
$pdf->Cell(35,6,$english_format_number = number_format($gastosdelaempresa, 2, '.', ''),1,1,'C',0);
$pdf->Cell(-5,6,'',0,0,'C',0);
$pdf->Cell(270,6,"",1,1,'L',0);
$pdf->Cell(-5,6,'',0,0,'C',0);
$pdf->Output();
?>