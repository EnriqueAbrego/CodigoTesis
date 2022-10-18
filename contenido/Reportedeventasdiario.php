<?php

$idid=$_POST["idid"];
$idid1=$_POST["idid1"];
$idid2=$_POST["idid2"];

 
if($idid2=="esquipula1"){$escuela="Esquipula 1";$sucursal="SUCURSAL SAN ISIDRO";} 
if($idid2=="esquipula2"){$escuela="Esquipula 2";$sucursal="SUCURSAL CHILIBRE";} 
if($idid2=="esquipula3"){$escuela="Esquipula 3";$sucursal="SUCURSAL  ANTÓN";} 
if($idid2=="esquipula4"){$escuela="Esquipula 4";$sucursal="SUCURSAL 24 DE DICIEMBRE";} 





$fechatitulo=obtenerFechaEnLetra($idid);

function obtenerFechaEnLetra($fechatitulo){
    $num = date("j", strtotime($fechatitulo));
    $anno = date("Y", strtotime($fechatitulo));
    $mes = array('enero', 'febrero', 'marzo', 'abril', 'mayo', 'junio', 'julio', 'agosto', 'septiembre', 'octubre', 'noviembre', 'diciembre');
    $mes = $mes[(date('m', strtotime($fechatitulo))*1)-1];
    return $num.' de '.$mes.' del '.$anno;
}


$montoapagar=0;
$montopagado=0;
$vacio="";
$TEfectivo=0;
$Tcheque=0;
$TClave=0;
$Tyappy=0;
$TDeposito=0;
$Tvisa=0;
$Tmaster=0;
$Tsaldop=0;
$Tgastos=0;
$TTransferencia=0;
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
$pdf->Cell(150,5,'REPORTE DE VENTAS DIARIAS',0,0,'R');
$pdf->Cell(65,5,'FECHA:',0,0,'R');
$pdf->Cell(50,5,utf8_decode($fechatitulo),0,1,'R');
$pdf->Cell(150,5,utf8_decode($sucursal),0,0,'R');
$pdf->Cell(65,5,'NOMBRE:',0,0,'R');
$pdf->Cell(50,5,utf8_decode($empleado['PrimerNombre'].' '.$empleado['SegundoNombre']),0,1,'R');
$pdf->Cell(150,5,'',0,0,'R');
$pdf->Cell(115,5,'REVISADO POR:_______________________',0,1,'R');
$pdf->Cell(150,14,'',0,1,'R');

$pdf->SetFont('Arial','I',7);
$pdf->SetXY(6, 50);
$pdf->multicell(36, 10,'NOMBRE',1,'C');
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x+32, $y-10);
$pdf->multicell(50, 10,'DETALLE',1,'C');
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x+82, $y-10);
$pdf->multicell(15, 5,'TIPO DE LICENCIA',1,'C');
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x+97, $y-10);
$pdf->multicell(12, 5,'NO. RECIBO',1,'C');
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x+109, $y-10);
$pdf->multicell(15, 10,'EFECTIVO',1,'C');
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x+124, $y-10);
$pdf->multicell(15, 10,'CHEQUE',1,'C');
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x+139, $y-10);
$pdf->multicell(15, 10,'CLAVE',1,'C');
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x+154, $y-10);
$pdf->multicell(15, 10,'YAPPY',1,'C');
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x+169, $y-10);
$pdf->multicell(15, 5,'DEPOSITO A CTA',1,'C');
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x+184, $y-10);
$pdf->multicell(15, 10,'VISA',1,'C');
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x+199, $y-10);
$pdf->multicell(15, 5,'MASTERCARD',1,'C');
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x+214, $y-10);
$pdf->multicell(16.5, 5,'TRANSFERENCIA',1,'C');
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x+230.5, $y-10);
$pdf->multicell(16.5, 5,'SALDO PENDIENTE',1,'C');
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x+247, $y-10);
$pdf->multicell(18, 5,'TOTAL DE INGRESOS',1,'C');




/*$pdf->Cell(266,-65,utf8_decode($fechatitulo),0,1,'R');
$pdf->Cell(265,75,utf8_decode($empleado['PrimerNombre'].' '.$empleado['SegundoNombre']),0,1,'R');*/

$pdf->SetFont('Arial','',6);
$gananciadeldia=0;
$yini=60;
foreach($facturasclientes as $esquipula) { 
    if($esquipula['Fecha']==$idid) {
            if($esquipula['Sucursal']==$escuela) {
            $pdf->SetFont('Arial','',6);
            $CategoriaDeLicenciax=$esquipula['CategoriaDeLicencia'];
            if($CategoriaDeLicenciax=="A - Bicicleta")$CategoriaDeLicenciax="A";
            if($CategoriaDeLicenciax=="B - Moto (ampliación)")$CategoriaDeLicenciax="B";
            if($CategoriaDeLicenciax=="C - Particular (ampliación)")$CategoriaDeLicenciax="C";
            if($CategoriaDeLicenciax=="D - Comercial (ampliación)")$CategoriaDeLicenciax="D";
            if($CategoriaDeLicenciax=="A - B - Moto")$CategoriaDeLicenciax="A - B";
            if($CategoriaDeLicenciax=="A - C - particular")$CategoriaDeLicenciax="A - C";
            if($CategoriaDeLicenciax=="A - C - D Comercial")$CategoriaDeLicenciax="A-C-D";
            if($CategoriaDeLicenciax=="A - B - C - Bicicleta - Moto - Particular")$CategoriaDeLicenciax="A-B-C";
            if($CategoriaDeLicenciax=="A - B - C - D - Bicicleta - Moto - Particular - Comercial")$CategoriaDeLicenciax="A-B-C-D";
            if($CategoriaDeLicenciax=="A - B - D - Bicicleta - Moto - Comercial")$CategoriaDeLicenciax="A-B-D";
            if($CategoriaDeLicenciax=="B - D - Moto - Comercial")$CategoriaDeLicenciax="B - D";
            if($CategoriaDeLicenciax=="C - D - Particular - Comercial")$CategoriaDeLicenciax="C - D";
            if($CategoriaDeLicenciax=="E1 - Taxi")$CategoriaDeLicenciax="E1";
            if($CategoriaDeLicenciax=="E2 - Bus colegial")$CategoriaDeLicenciax="E2";
            if($CategoriaDeLicenciax=="E3 - Bus")$CategoriaDeLicenciax="E3";
            if($CategoriaDeLicenciax=="E1 - E2 - Taxi - Bus colegial")$CategoriaDeLicenciax="E1-E2";
            if($CategoriaDeLicenciax=="E1 - E2 - E3 - Taxi - Bus colegial - Bus Grande")$CategoriaDeLicenciax="E1-E2-E3";
            if($CategoriaDeLicenciax=="E1 - E2 - E3 - F- Taxi - Bus colegial - Bus Grande - Camion Mas de 10 Ton")$CategoriaDeLicenciax="E1-E2-E3-F";
            if($CategoriaDeLicenciax=="E2 - E3 - Bus colegial - Bus Grande")$CategoriaDeLicenciax="E2-E3";
            if($CategoriaDeLicenciax=="F - Camion Mas de 10 Ton")$CategoriaDeLicenciax="F";
            if($CategoriaDeLicenciax=="F - I -  Camion Mas de 10 Ton - Equipo Pesado")$CategoriaDeLicenciax="F - I";
            if($CategoriaDeLicenciax=="G - Vehiculo Articulado")$CategoriaDeLicenciax="G";
            if($CategoriaDeLicenciax=="H - Vehiculo Infamable")$CategoriaDeLicenciax="H";
            if($CategoriaDeLicenciax=="I - Equipo Pesado")$CategoriaDeLicenciax="I";

            $pdf->SetXY(6,$yini);
            $str = $esquipula['PrimerNombre'].' '.$esquipula['PrimerApellido'];
            $cantidad=strlen($str);
            if($cantidad>="21"){
                $pdf->SetFont('Arial','',7);
                $pdf->multicell(36, 3,utf8_decode($esquipula['PrimerNombre'].' '.$esquipula['PrimerApellido']),1,'C');
            }else{
                $pdf->SetFont('Arial','',7);
                $pdf->multicell(36, 6,utf8_decode($esquipula['PrimerNombre'].' '.$esquipula['PrimerApellido']),1,'C');
            }
            $pdf->SetFont('Arial','',10);
            $x = $pdf->GetX();
            $y = $pdf->GetY();
            $pdf->SetXY($x+32, $y-6);
            $pdf->multicell(50, 6,utf8_decode('Abono a: '.$esquipula['EstadoDeContrado']),1,'L');
            $x = $pdf->GetX();
            $y = $pdf->GetY();
            $pdf->SetXY($x+82, $y-6);
            $pdf->SetFont('Arial','',10);
            if($CategoriaDeLicenciax=="E1-E2-E3-F" or  $CategoriaDeLicenciax=="A-B-C-D" or  $CategoriaDeLicenciax=="E1-E2-E3"){
                $pdf->multicell(15, 3,$CategoriaDeLicenciax,1,'C');
            }else{
                $pdf->multicell(15, 6,$CategoriaDeLicenciax,1,'C');
            }
            $pdf->SetFont('Arial','',10);
            $x = $pdf->GetX();
            $y = $pdf->GetY();
            $pdf->SetXY($x+97, $y-6);
            foreach($abonoscliente as $abonoscu) { 
                if($abonoscu['FechaAbonoUno']==$idid) {
                    if($abonoscu['IdCliente']==$esquipula['ID']) {
                        $montoapagar=$abonoscu['MontoFactura'];
                        $montopagado=$abonoscu['MontoAbonoUno'];
                        $pdf->multicell(12, 6,$abonoscu['RecAbonoUno'],1,'C');
                        $x = $pdf->GetX();
                        $y = $pdf->GetY();
                        $pdf->SetXY($x+109, $y-6);
                        $TipoDePagox=$abonoscu['TipoPagoUno'];
                        if($TipoDePagox=="Efectivo"){
                            $TEfectivo=$TEfectivo+$abonoscu['MontoAbonoUno'];
                            $gananciadeldia=$gananciadeldia+$abonoscu['MontoAbonoUno'];
                            $pdf->multicell(15, 6,$abonoscu['MontoAbonoUno'],1,'C');
                        }else{ 
                            $pdf->multicell(15, 6,$vacio,1,'C');
                        }

                        $x = $pdf->GetX();
                        $y = $pdf->GetY();
                        $pdf->SetXY($x+124, $y-6);
                        $TipoDePagox=$abonoscu['TipoPagoUno'];
                        if($TipoDePagox=="Cheque"){
                            $Tcheque=$Tcheque+$abonoscu['MontoAbonoUno'];
                            $gananciadeldia=$gananciadeldia+$abonoscu['MontoAbonoUno'];
                            $pdf->multicell(15, 6,$abonoscu['MontoAbonoUno'],1,'C');
                        }else{ 
                            $pdf->multicell(15, 6,$vacio,1,'C');
                        }
                        $x = $pdf->GetX();
                        $y = $pdf->GetY();
                        $pdf->SetXY($x+139, $y-6);
                        $TipoDePagox=$abonoscu['TipoPagoUno'];
                        if($TipoDePagox=="Clave"){
                            $TClave=$TClave+$abonoscu['MontoAbonoUno'];
                            $gananciadeldia=$gananciadeldia+$abonoscu['MontoAbonoUno'];
                            $pdf->multicell(15, 6,$abonoscu['MontoAbonoUno'],1,'C');
                        }else{ 
                            $pdf->multicell(15, 6,$vacio,1,'C');
                        }
                        $x = $pdf->GetX();
                        $y = $pdf->GetY();
                        $pdf->SetXY($x+154, $y-6);
                        $TipoDePagox=$abonoscu['TipoPagoUno'];
                        if($TipoDePagox=="Yappy"){
                            $Tyappy=$Tyappy+$abonoscu['MontoAbonoUno'];
                            $gananciadeldia=$gananciadeldia+$abonoscu['MontoAbonoUno'];
                            $pdf->multicell(15, 6,$abonoscu['MontoAbonoUno'],1,'C');
                        }else{ 
                            $pdf->multicell(15, 6,$vacio,1,'C');
                        }

                        $x = $pdf->GetX();
                        $y = $pdf->GetY();
                        $pdf->SetXY($x+169, $y-6);
                        $TipoDePagox=$abonoscu['TipoPagoUno'];
                        if($TipoDePagox=="Deposito $ a"){
                            $TDeposito=$TDeposito+$abonoscu['MontoAbonoUno'];
                            $gananciadeldia=$gananciadeldia+$abonoscu['MontoAbonoUno'];
                            $pdf->multicell(15, 6,$abonoscu['MontoAbonoUno'],1,'C');
                        }else{ 
                            $pdf->multicell(15, 6,$vacio,1,'C');
                        }

                        $x = $pdf->GetX();
                        $y = $pdf->GetY();
                        $pdf->SetXY($x+184, $y-6);
                        $TipoDePagox=$abonoscu['TipoPagoUno'];
                        if($TipoDePagox=="Visa"){
                            $Tvisa=$Tvisa+$abonoscu['MontoAbonoUno'];
                            $gananciadeldia=$gananciadeldia+$abonoscu['MontoAbonoUno'];
                            $pdf->multicell(15, 6,$abonoscu['MontoAbonoUno'],1,'C');
                        }else{ 
                            $pdf->multicell(15, 6,$vacio,1,'C');
                        }
                        
                        $x = $pdf->GetX();
                        $y = $pdf->GetY();
                        $pdf->SetXY($x+199, $y-6);
                        $TipoDePagox=$abonoscu['TipoPagoUno'];
                        if($TipoDePagox=="Mastercard"){
                            $Tmaster=$Tmaster+$abonoscu['MontoAbonoUno'];
                            $gananciadeldia=$gananciadeldia+$abonoscu['MontoAbonoUno'];
                            $pdf->multicell(15, 6,$abonoscu['MontoAbonoUno'],1,'C');
                        }else{ 
                            $pdf->multicell(15, 6,$vacio,1,'C');
                        }

                        $x = $pdf->GetX();
                        $y = $pdf->GetY();
                        $pdf->SetXY($x+214, $y-6);
                        $TipoDePagox=$abonoscu['TipoPagoUno'];
                        if($TipoDePagox=="Transferencia"){
                            $TTransferencia=$TTransferencia+$abonoscu['MontoAbonoUno'];
                            $gananciadeldia=$gananciadeldia+$abonoscu['MontoAbonoUno'];
                            $pdf->multicell(16.5, 6,$abonoscu['MontoAbonoUno'],1,'C');
                        }else{ 
                            $pdf->multicell(16.5, 6,$vacio,1,'C');
                        }
                    }
                }
            }
            $deuda=$montoapagar-$montopagado;
            $Tsaldop=$Tsaldop+$deuda;
            $x = $pdf->GetX();
            $y = $pdf->GetY();
            $pdf->SetXY($x+230.5, $y-6);
            $pdf->multicell(16.5, 6,$english_format_number = number_format($deuda, 2, '.', ''),1,'C');
            $x = $pdf->GetX();
            $y = $pdf->GetY();
            $pdf->SetXY($x+247, $y-6);
            $pdf->multicell(18, 6,$montopagado,1,'C');
            $yini=$yini+6;
        }
    }   
}
/////////////

    $x = $pdf->GetX();
    $y = $pdf->GetY();
    $xini=$x-284;
    $yini=$y;
    foreach($abonoscliente as $abonoscu) { 
        if($abonoscu['FechaAbonoDos']==$idid) {
            if($abonoscu['SucursalAbono']==$escuela) {
            $montoapagar=$abonoscu['MontoFactura'];
            $montopagado=$abonoscu['MontoAbonoUno']+$abonoscu['MontoAbonoDos'];

            include("../Confi/db.php");
            $sentenciaSQL=$conexion->prepare("SELECT * FROM nuevocliente1 WHERE id=:idbusca");
            $sentenciaSQL->bindParam('idbusca',$abonoscu['IdCliente']);
            $sentenciaSQL->execute();
            $estudianteas=$sentenciaSQL->fetch(PDO::FETCH_LAZY);
            $uno=$estudianteas['PrimerNombre'];
            $dos=$estudianteas['PrimerApellido'];
            $pdf->SetXY($xini,$yini);
            $str = $uno.' '.$dos;
            $cantidad=strlen($str);
            if($cantidad>="21"){
                $pdf->SetFont('Arial','',7);
                $pdf->multicell(36, 3,utf8_decode($uno.' '.$dos),1,'C');
            }else{
                $pdf->SetFont('Arial','',7);
                $pdf->multicell(36, 6,utf8_decode($uno.' '.$dos),1,'C');
            }
            $pdf->SetFont('Arial','',10);
            $x = $pdf->GetX();
            $y = $pdf->GetY();
            $pdf->SetXY($x+32, $y-6);
            $pdf->multicell(50, 6,'SEGUNDO ABONO',1,'L');
    
            $x = $pdf->GetX();
            $y = $pdf->GetY();
            $pdf->SetXY($x+82, $y-6);
            $pdf->multicell(15, 6,' ',1,'C');
            $x = $pdf->GetX();
            $y = $pdf->GetY();
            $pdf->SetXY($x+97, $y-6);
            $pdf->multicell(12, 6,$abonoscu['RecAbonoDos'],1,'C');
            $x = $pdf->GetX();
            $y = $pdf->GetY();
            $pdf->SetXY($x+109, $y-6);
            $TipoDePagox=$abonoscu['TipoPagoDos'];
            if($TipoDePagox=="Efectivo"){
                $TEfectivo=$TEfectivo+$abonoscu['MontoAbonoDos'];
                $gananciadeldia=$gananciadeldia+$abonoscu['MontoAbonoDos'];
                $pdf->multicell(15, 6,$abonoscu['MontoAbonoDos'],1,'C');
            }else{ 
                $pdf->multicell(15, 6,$vacio,1,'C');
            }

            $x = $pdf->GetX();
            $y = $pdf->GetY();
            $pdf->SetXY($x+124, $y-6);
            $TipoDePagox=$abonoscu['TipoPagoDos'];
            if($TipoDePagox=="Cheque"){
                $Tcheque=$Tcheque+$abonoscu['MontoAbonoDos'];
                $gananciadeldia=$gananciadeldia+$abonoscu['MontoAbonoDos'];
                $pdf->multicell(15, 6,$abonoscu['MontoAbonoDos'],1,'C');
            }else{ 
                $pdf->multicell(15, 6,$vacio,1,'C');
            }
            $x = $pdf->GetX();
            $y = $pdf->GetY();
            $pdf->SetXY($x+139, $y-6);
            $TipoDePagox=$abonoscu['TipoPagoDos'];
            if($TipoDePagox=="Clave"){
                $TClave=$TClave+$abonoscu['MontoAbonoDos'];
                $gananciadeldia=$gananciadeldia+$abonoscu['MontoAbonoDos'];
                $pdf->multicell(15, 6,$abonoscu['MontoAbonoDos'],1,'C');
            }else{ 
                $pdf->multicell(15, 6,$vacio,1,'C');
            }
            $x = $pdf->GetX();
            $y = $pdf->GetY();
            $pdf->SetXY($x+154, $y-6);
            $TipoDePagox=$abonoscu['TipoPagoDos'];
            if($TipoDePagox=="Yappy"){
                $Tyappy=$Tyappy+$abonoscu['MontoAbonoDos'];
                $gananciadeldia=$gananciadeldia+$abonoscu['MontoAbonoDos'];
                $pdf->multicell(15, 6,$abonoscu['MontoAbonoDos'],1,'C');
            }else{ 
                $pdf->multicell(15, 6,$vacio,1,'C');
            }

            $x = $pdf->GetX();
            $y = $pdf->GetY();
            $pdf->SetXY($x+169, $y-6);
            $TipoDePagox=$abonoscu['TipoPagoDos'];
            if($TipoDePagox=="Deposito $ a"){
                $TDeposito=$TDeposito+$abonoscu['MontoAbonoDos'];
                $gananciadeldia=$gananciadeldia+$abonoscu['MontoAbonoDos'];
                $pdf->multicell(15, 6,$abonoscu['MontoAbonoDos'],1,'C');
            }else{ 
                $pdf->multicell(15, 6,$vacio,1,'C');
            }

            $x = $pdf->GetX();
            $y = $pdf->GetY();
            $pdf->SetXY($x+184, $y-6);
            $TipoDePagox=$abonoscu['TipoPagoDos'];
            if($TipoDePagox=="Visa"){
                $Tvisa=$Tvisa+$abonoscu['MontoAbonoDos'];
                $gananciadeldia=$gananciadeldia+$abonoscu['MontoAbonoDos'];
                $pdf->multicell(15, 6,$abonoscu['MontoAbonoDos'],1,'C');
            }else{ 
                $pdf->multicell(15, 6,$vacio,1,'C');
            }
            
            $x = $pdf->GetX();
            $y = $pdf->GetY();
            $pdf->SetXY($x+199, $y-6);
            $TipoDePagox=$abonoscu['TipoPagoDos'];
            if($TipoDePagox=="Mastercard"){
                $Tmaster=$Tmaster+$abonoscu['MontoAbonoDos'];
                $gananciadeldia=$gananciadeldia+$abonoscu['MontoAbonoDos'];
                $pdf->multicell(15, 6,$abonoscu['MontoAbonoDos'],1,'C');
            }else{ 
                $pdf->multicell(15, 6,$vacio,1,'C');
            }

            $x = $pdf->GetX();
            $y = $pdf->GetY();
            $pdf->SetXY($x+214, $y-6);
            $TipoDePagox=$abonoscu['TipoPagoDos'];
            if($TipoDePagox=="Transferencia"){
                $TTransferencia=$TTransferencia+$abonoscu['MontoAbonoDos'];
                $gananciadeldia=$gananciadeldia+$abonoscu['MontoAbonoDos'];
                $pdf->multicell(16.5, 6,$abonoscu['MontoAbonoDos'],1,'C');
            }else{ 
                $pdf->multicell(16.5, 6,$vacio,1,'C');
            }

            $deuda=$montoapagar-$montopagado;
            $Tsaldop=$Tsaldop+$deuda;
            $x = $pdf->GetX();
            $y = $pdf->GetY();
            $pdf->SetXY($x+230.5, $y-6);
            $pdf->multicell(16.5, 6,$english_format_number = number_format($deuda, 2, '.', ''),1,'C');
            $x = $pdf->GetX();
            $y = $pdf->GetY();
            $pdf->SetXY($x+247, $y-6);
            $pdf->multicell(18, 6,$abonoscu['MontoAbonoDos'],1,'C');
            $yini=$yini+6;
        }
        }
    }

/////////////


/////////////

$x = $pdf->GetX();
$y = $pdf->GetY();
$xini=$x-284;
$yini=$y;
foreach($abonoscliente as $abonoscu) { 
    if($abonoscu['FechaAbonoTres']==$idid) {
        if($abonoscu['SucursalAbono']==$escuela) {
        $montoapagar=$abonoscu['MontoFactura'];
        $montopagado=$abonoscu['MontoAbonoUno']+$abonoscu['MontoAbonoDos']+$abonoscu['MontoAbonoTres'];
        include("../Confi/db.php");
        $sentenciaSQL=$conexion->prepare("SELECT * FROM nuevocliente1 WHERE id=:idbusca");
        $sentenciaSQL->bindParam('idbusca',$abonoscu['IdCliente']);
        $sentenciaSQL->execute();
        $estudianteas=$sentenciaSQL->fetch(PDO::FETCH_LAZY);
        $uno=$estudianteas['PrimerNombre'];
        $dos=$estudianteas['PrimerApellido'];
        $pdf->SetXY($xini,$yini);
        $str = $uno.' '.$dos;
        $cantidad=strlen($str);
        if($cantidad>="21"){
            $pdf->SetFont('Arial','',7);
            $pdf->multicell(36, 3,utf8_decode($uno.' '.$dos),1,'C');
        }else{
            $pdf->SetFont('Arial','',7);
            $pdf->multicell(36, 6,utf8_decode($uno.' '.$dos),1,'C');
        }
        $pdf->SetFont('Arial','',10);
        $x = $pdf->GetX();
        $y = $pdf->GetY();
        $pdf->SetXY($x+32, $y-6);
        $pdf->multicell(50, 6,'TERCER ABONO',1,'L');
        $x = $pdf->GetX();
        $y = $pdf->GetY();
        $pdf->SetXY($x+82, $y-6);
        $pdf->multicell(15, 6,' ',1,'C');
        $x = $pdf->GetX();
        $y = $pdf->GetY();
        $pdf->SetXY($x+97, $y-6);
        $pdf->multicell(12, 6,$abonoscu['RecAbonoTres'],1,'C');
        $x = $pdf->GetX();
        $y = $pdf->GetY();
        $pdf->SetXY($x+109, $y-6);
        $TipoDePagox=$abonoscu['TipoPagoTres'];
        if($TipoDePagox=="Efectivo"){
            $TEfectivo=$TEfectivo+$abonoscu['MontoAbonoTres'];
            $gananciadeldia=$gananciadeldia+$abonoscu['MontoAbonoTres'];
            $pdf->multicell(15, 6,$abonoscu['MontoAbonoTres'],1,'C');
        }else{ 
            $pdf->multicell(15, 6,$vacio,1,'C');
        }

        $x = $pdf->GetX();
        $y = $pdf->GetY();
        $pdf->SetXY($x+124, $y-6);
        $TipoDePagox=$abonoscu['TipoPagoTres'];
        if($TipoDePagox=="Cheque"){
            $Tcheque=$Tcheque+$abonoscu['MontoAbonoTres'];
            $gananciadeldia=$gananciadeldia+$abonoscu['MontoAbonoTres'];
            $pdf->multicell(15, 6,$abonoscu['MontoAbonoTres'],1,'C');
        }else{ 
            $pdf->multicell(15, 6,$vacio,1,'C');
        }
        $x = $pdf->GetX();
        $y = $pdf->GetY();
        $pdf->SetXY($x+139, $y-6);
        $TipoDePagox=$abonoscu['TipoPagoTres'];
        if($TipoDePagox=="Clave"){
            $TClave=$TClave+$abonoscu['MontoAbonoTres'];
            $gananciadeldia=$gananciadeldia+$abonoscu['MontoAbonoTres'];
            $pdf->multicell(15, 6,$abonoscu['MontoAbonoTres'],1,'C');
        }else{ 
            $pdf->multicell(15, 6,$vacio,1,'C');
        }
        $x = $pdf->GetX();
        $y = $pdf->GetY();
        $pdf->SetXY($x+154, $y-6);
        $TipoDePagox=$abonoscu['TipoPagoTres'];
        if($TipoDePagox=="Yappy"){
            $Tyappy=$Tyappy+$abonoscu['MontoAbonoTres'];
            $gananciadeldia=$gananciadeldia+$abonoscu['MontoAbonoTres'];
            $pdf->multicell(15, 6,$abonoscu['MontoAbonoTres'],1,'C');
        }else{ 
            $pdf->multicell(15, 6,$vacio,1,'C');
        }

        $x = $pdf->GetX();
        $y = $pdf->GetY();
        $pdf->SetXY($x+169, $y-6);
        $TipoDePagox=$abonoscu['TipoPagoTres'];
        if($TipoDePagox=="Deposito $ a"){
            $TDeposito=$TDeposito+$abonoscu['MontoAbonoTres'];
            $gananciadeldia=$gananciadeldia+$abonoscu['MontoAbonoTres'];
            $pdf->multicell(15, 6,$abonoscu['MontoAbonoTres'],1,'C');
        }else{ 
            $pdf->multicell(15, 6,$vacio,1,'C');
        }

        $x = $pdf->GetX();
        $y = $pdf->GetY();
        $pdf->SetXY($x+184, $y-6);
        $TipoDePagox=$abonoscu['TipoPagoTres'];
        if($TipoDePagox=="Visa"){
            $Tvisa=$Tvisa+$abonoscu['MontoAbonoTres'];
            $gananciadeldia=$gananciadeldia+$abonoscu['MontoAbonoTres'];
            $pdf->multicell(15, 6,$abonoscu['MontoAbonoTres'],1,'C');
        }else{ 
            $pdf->multicell(15, 6,$vacio,1,'C');
        }
        
        $x = $pdf->GetX();
        $y = $pdf->GetY();
        $pdf->SetXY($x+199, $y-6);
        $TipoDePagox=$abonoscu['TipoPagoTres'];
        if($TipoDePagox=="Mastercard"){
            $Tmaster=$Tmaster+$abonoscu['MontoAbonoTres'];
            $gananciadeldia=$gananciadeldia+$abonoscu['MontoAbonoTres'];
            $pdf->multicell(15, 6,$abonoscu['MontoAbonoTres'],1,'C');
        }else{ 
            $pdf->multicell(15, 6,$vacio,1,'C');
        }

        $x = $pdf->GetX();
        $y = $pdf->GetY();
        $pdf->SetXY($x+214, $y-6);
        $TipoDePagox=$abonoscu['TipoPagoTres'];
        if($TipoDePagox=="Transferencia"){
            $TTransferencia=$TTransferencia+$abonoscu['MontoAbonoTres'];
            $gananciadeldia=$gananciadeldia+$abonoscu['MontoAbonoTres'];
            $pdf->multicell(16.5, 6,$abonoscu['MontoAbonoTres'],1,'C');
        }else{ 
            $pdf->multicell(16.5, 6,$vacio,1,'C');
        }

        $deuda=$montoapagar-$montopagado;
        $Tsaldop=$Tsaldop+$deuda;
        $x = $pdf->GetX();
        $y = $pdf->GetY();
        $pdf->SetXY($x+230.5, $y-6);
        $pdf->multicell(16.5, 6,$english_format_number = number_format($deuda, 2, '.', ''),1,'C');
        $x = $pdf->GetX();
        $y = $pdf->GetY();
        $pdf->SetXY($x+247, $y-6);
        $pdf->multicell(18, 6,$abonoscu['MontoAbonoTres'],1,'C');
    }
    }
}

/////////////

/////////////

$x = $pdf->GetX();
$y = $pdf->GetY();
$xini=$x-285;
$yini=$y;
foreach($abonoscliente as $abonoscu) { 
    if($abonoscu['FechaAbonoCuatro']==$idid) {
        if($abonoscu['SucursalAbono']==$escuela) {
        $montoapagar=$abonoscu['MontoFactura'];
        $montopagado=$abonoscu['MontoAbonoUno']+$abonoscu['MontoAbonoDos']+$abonoscu['MontoAbonoTres']+$abonoscu['MontoAbonoCuatro'];
        include("../Confi/db.php");
        $sentenciaSQL=$conexion->prepare("SELECT * FROM nuevocliente1 WHERE id=:idbusca");
        $sentenciaSQL->bindParam('idbusca',$abonoscu['IdCliente']);
        $sentenciaSQL->execute();
        $estudianteas=$sentenciaSQL->fetch(PDO::FETCH_LAZY);
        $uno=$estudianteas['PrimerNombre'];
        $dos=$estudianteas['PrimerApellido'];
        $pdf->SetXY($xini,$yini);
        $str = $uno.' '.$dos;
        $cantidad=strlen($str);
        if($cantidad>="21"){
            $pdf->SetFont('Arial','',7);
            $pdf->multicell(36, 3,utf8_decode($uno.' '.$dos),1,'C');
        }else{
            $pdf->SetFont('Arial','',7);
            $pdf->multicell(36, 6,utf8_decode($uno.' '.$dos),1,'C');
        }
        $pdf->SetFont('Arial','',10);
        $x = $pdf->GetX();
        $y = $pdf->GetY();
        $pdf->SetXY($x+32, $y-6);
        $pdf->multicell(50, 6,'CUARTO ABONO',1,'L');

        $x = $pdf->GetX();
        $y = $pdf->GetY();
        $pdf->SetXY($x+82, $y-6);
        $pdf->multicell(15, 6,' ',1,'C');
        $x = $pdf->GetX();
        $y = $pdf->GetY();
        $pdf->SetXY($x+97, $y-6);
        $pdf->multicell(12, 6,$abonoscu['RecAbonoCuatro'],1,'C');
        $x = $pdf->GetX();
        $y = $pdf->GetY();
        $pdf->SetXY($x+109, $y-6);
        $TipoDePagox=$abonoscu['TipoPagoCuatro'];
        if($TipoDePagox=="Efectivo"){
            $TEfectivo=$TEfectivo+$abonoscu['MontoAbonoCuatro'];
            $gananciadeldia=$gananciadeldia+$abonoscu['MontoAbonoCuatro'];
            $pdf->multicell(15, 6,$abonoscu['MontoAbonoCuatro'],1,'C');
        }else{ 
            $pdf->multicell(15, 6,$vacio,1,'C');
        }

        $x = $pdf->GetX();
        $y = $pdf->GetY();
        $pdf->SetXY($x+124, $y-6);
        $TipoDePagox=$abonoscu['TipoPagoCuatro'];
        if($TipoDePagox=="Cheque"){
            $Tcheque=$Tcheque+$abonoscu['MontoAbonoCuatro'];
            $gananciadeldia=$gananciadeldia+$abonoscu['MontoAbonoCuatro'];
            $pdf->multicell(15, 6,$abonoscu['MontoAbonoCuatro'],1,'C');
        }else{ 
            $pdf->multicell(15, 6,$vacio,1,'C');
        }
        $x = $pdf->GetX();
        $y = $pdf->GetY();
        $pdf->SetXY($x+139, $y-6);
        $TipoDePagox=$abonoscu['TipoPagoCuatro'];
        if($TipoDePagox=="Clave"){
            $TClave=$TClave+$abonoscu['MontoAbonoCuatro'];
            $gananciadeldia=$gananciadeldia+$abonoscu['MontoAbonoCuatro'];
            $pdf->multicell(15, 6,$abonoscu['MontoAbonoCuatro'],1,'C');
        }else{ 
            $pdf->multicell(15, 6,$vacio,1,'C');
        }
        $x = $pdf->GetX();
        $y = $pdf->GetY();
        $pdf->SetXY($x+154, $y-6);
        $TipoDePagox=$abonoscu['TipoPagoCuatro'];
        if($TipoDePagox=="Yappy"){
            $Tyappy=$Tyappy+$abonoscu['MontoAbonoCuatro'];
            $gananciadeldia=$gananciadeldia+$abonoscu['MontoAbonoCuatro'];
            $pdf->multicell(15, 6,$abonoscu['MontoAbonoCuatro'],1,'C');
        }else{ 
            $pdf->multicell(15, 6,$vacio,1,'C');
        }

        $x = $pdf->GetX();
        $y = $pdf->GetY();
        $pdf->SetXY($x+169, $y-6);
        $TipoDePagox=$abonoscu['TipoPagoCuatro'];
        if($TipoDePagox=="Deposito $ a"){
            $TDeposito=$TDeposito+$abonoscu['MontoAbonoCuatro'];
            $gananciadeldia=$gananciadeldia+$abonoscu['MontoAbonoCuatro'];
            $pdf->multicell(15, 6,$abonoscu['MontoAbonoCuatro'],1,'C');
        }else{ 
            $pdf->multicell(15, 6,$vacio,1,'C');
        }

        $x = $pdf->GetX();
        $y = $pdf->GetY();
        $pdf->SetXY($x+184, $y-6);
        $TipoDePagox=$abonoscu['TipoPagoCuatro'];
        if($TipoDePagox=="Visa"){
            $Tvisa=$Tvisa+$abonoscu['MontoAbonoCuatro'];
            $gananciadeldia=$gananciadeldia+$abonoscu['MontoAbonoCuatro'];
            $pdf->multicell(15, 6,$abonoscu['MontoAbonoCuatro'],1,'C');
        }else{ 
            $pdf->multicell(15, 6,$vacio,1,'C');
        }
        
        $x = $pdf->GetX();
        $y = $pdf->GetY();
        $pdf->SetXY($x+199, $y-6);
        $TipoDePagox=$abonoscu['TipoPagoCuatro'];
        if($TipoDePagox=="Mastercard"){
            $Tmaster=$Tmaster+$abonoscu['MontoAbonoCuatro'];
            $gananciadeldia=$gananciadeldia+$abonoscu['MontoAbonoCuatro'];
            $pdf->multicell(15, 6,$abonoscu['MontoAbonoCuatro'],1,'C');
        }else{ 
            $pdf->multicell(15, 6,$vacio,1,'C');
        }

        $x = $pdf->GetX();
        $y = $pdf->GetY();
        $pdf->SetXY($x+214, $y-6);
        $TipoDePagox=$abonoscu['TipoPagoCuatro'];
        if($TipoDePagox=="Transferencia"){
            $TTransferencia=$TTransferencia+$abonoscu['MontoAbonoCuatro'];
            $gananciadeldia=$gananciadeldia+$abonoscu['MontoAbonoCuatro'];
            $pdf->multicell(16.5, 6,$abonoscu['MontoAbonoCuatro'],1,'C');
        }else{ 
            $pdf->multicell(16.5, 6,$vacio,1,'C');
        }
        $deuda=$montoapagar-$montopagado;
        $Tsaldop=$Tsaldop+$deuda;
        $x = $pdf->GetX();
        $y = $pdf->GetY();
        $pdf->SetXY($x+230.5, $y-6);
        $pdf->multicell(16.5, 6,$english_format_number = number_format($deuda, 2, '.', ''),1,'C');
        $x = $pdf->GetX();
        $y = $pdf->GetY();
        $pdf->SetXY($x+247, $y-6);
        $pdf->multicell(18, 6,$abonoscu['MontoAbonoCuatro'],1,'C');
    }
    }
}

/////////////


$x = $pdf->GetX();
$y = $pdf->GetY();
$xini=$x-284;
$yini=$y;
foreach($gastocliente as $esquipula) { 
    if($esquipula['fecha']==$idid) {
        if($esquipula['Sucursal']==$escuela) {
            $pdf->SetXY($xini,$yini);
            $str = $esquipula['nombre'].' '.$esquipula['apellido'];
            $cantidad=strlen($str);
            if($cantidad>="21"){
                $pdf->SetFont('Arial','',7);
                $pdf->multicell(36, 6,utf8_decode($esquipula['nombre'].' '.$esquipula['apellido']),1,'C');
            }else{
                $pdf->SetFont('Arial','',7);
                $pdf->multicell(36, 6,utf8_decode($esquipula['nombre'].' '.$esquipula['apellido']),1,'C');
            }
            $pdf->SetFont('Arial','',10);
            $x = $pdf->GetX();
            $y = $pdf->GetY();
            $pdf->SetXY($x+32, $y-6);
            $pdf->multicell(50, 6,utf8_decode($esquipula['motivo']),1,'L');

            $x = $pdf->GetX();
            $y = $pdf->GetY();
            $pdf->SetXY($x+82, $y-6);
            $pdf->multicell(15, 6,' ',1,'C');
            

            $x = $pdf->GetX();
            $y = $pdf->GetY();
            $pdf->SetXY($x+97, $y-6);
            $pdf->multicell(12,6,$esquipula['recibo'],1,'C');
            $x = $pdf->GetX();
            $y = $pdf->GetY();
            $pdf->SetXY($x+109, $y-6);

            $TipoDePagox=$esquipula['Tipopago'];
            if($TipoDePagox=="Efectivo"){
                $TEfectivo=$TEfectivo+$esquipula['abono'];
                $gananciadeldia=$gananciadeldia+$esquipula['abono'];
                $pdf->multicell(15, 6,$esquipula['abono'],1,'C');
            }else{ 
                $pdf->multicell(15, 6,$vacio,1,'C');
            }

            $x = $pdf->GetX();
            $y = $pdf->GetY();
            $pdf->SetXY($x+124, $y-6);
            if($TipoDePagox=="Cheque"){
                $Tcheque=$Tcheque+$esquipula['abono'];
                $gananciadeldia=$gananciadeldia+$esquipula['abono'];
                $pdf->multicell(15, 6,$esquipula['abono'],1,'C');
            }else{ 
                $pdf->multicell(15, 6,$vacio,1,'C');
            }

            $x = $pdf->GetX();
            $y = $pdf->GetY();
            $pdf->SetXY($x+139, $y-6);
            if($TipoDePagox=="Clave"){
                $TClave=$TClave+$esquipula['abono'];
                $gananciadeldia=$gananciadeldia+$esquipula['abono'];
                $pdf->multicell(15, 6,$esquipula['abono'],1,'C');
            }else{ 
                $pdf->multicell(15, 6,$vacio,1,'C');
            }

            $x = $pdf->GetX();
            $y = $pdf->GetY();
            $pdf->SetXY($x+154, $y-6);
            if($TipoDePagox=="Yappy"){
                $Tyappy=$Tyappy+$esquipula['abono'];
                $gananciadeldia=$gananciadeldia+$esquipula['abono'];
                $pdf->multicell(15, 6,$esquipula['abono'],1,'C');
            }else{ 
                $pdf->multicell(15, 6,$vacio,1,'C');
            }

            $x = $pdf->GetX();
            $y = $pdf->GetY();
            $pdf->SetXY($x+169, $y-6);
            if($TipoDePagox=="Deposito $ a"){
                $TDeposito=$TDeposito+$esquipula['abono'];
                $gananciadeldia=$gananciadeldia+$esquipula['abono'];
                $pdf->multicell(15, 6,$esquipula['abono'],1,'C');
            }else{ 
                $pdf->multicell(15, 6,$vacio,1,'C');
            }

            $x = $pdf->GetX();
            $y = $pdf->GetY();
            $pdf->SetXY($x+184, $y-6);
            if($TipoDePagox=="Visa"){
                $Tvisa=$Tvisa+$esquipula['abono'];
                $gananciadeldia=$gananciadeldia+$esquipula['abono'];
                $pdf->multicell(15, 6,$esquipula['abono'],1,'C');
            }else{ 
                $pdf->multicell(15, 6,$vacio,1,'C');
            }

            $x = $pdf->GetX();
            $y = $pdf->GetY();
            $pdf->SetXY($x+199, $y-6);
            if($TipoDePagox=="Mastercard"){
                $Tmaster=$Tmaster+$esquipula['abono'];
                $gananciadeldia=$gananciadeldia+$esquipula['abono'];
                $pdf->multicell(15, 6,$esquipula['abono'],1,'C');
            }else{ 
                $pdf->multicell(15, 6,$vacio,1,'C');
            }

            $x = $pdf->GetX();
            $y = $pdf->GetY();
            $pdf->SetXY($x+214, $y-6);
            if($TipoDePagox=="Transferencia"){
                $TTransferencia=$TTransferencia+$esquipula['abono'];
                $gananciadeldia=$gananciadeldia+$esquipula['abono'];
                $pdf->multicell(16.5, 6,$esquipula['abono'],1,'C');
            }else{ 
                $pdf->multicell(16.5, 6,$vacio,1,'C');
            }

            
            $deuda=$esquipula['monto']-$esquipula['abono'];
            $Tsaldop=$Tsaldop+$deuda;
            $x = $pdf->GetX();
            $y = $pdf->GetY();
            $pdf->SetXY($x+230.5, $y-6);
            $pdf->multicell(16.5, 6,$english_format_number = number_format($deuda, 2, '.', ''),1,'C');
            $x = $pdf->GetX();
            $y = $pdf->GetY();
            $pdf->SetXY($x+247, $y-6);
            $pdf->multicell(18, 6,$esquipula['abono'],1,'C');
            $yini=$yini+6;
        } 
    }   
}
$pdf->SetFont('Arial','B',9);
$pdf->Cell(-4,6,'',0,0,'C',0);
$pdf->Cell(269,6,"",1,1,'L',0);
$pdf->Cell(-4,6,'',0,0,'C',0);
$pdf->Cell(113,6,"TOTAL DE LA VENTA DEL DIA",1,0,'L',0);
$pdf->Cell(15,6,$english_format_number = number_format($TEfectivo, 2, '.', ''),1,0,'C',0);
$pdf->Cell(15,6,$english_format_number = number_format($Tcheque, 2, '.', ''),1,0,'C',0);
$pdf->Cell(15,6,$english_format_number = number_format($TClave, 2, '.', ''),1,0,'C',0);
$pdf->Cell(15,6,$english_format_number = number_format($Tyappy, 2, '.', ''),1,0,'C',0);
$pdf->Cell(15,6,$english_format_number = number_format($TDeposito, 2, '.', ''),1,0,'C',0);
$pdf->Cell(15,6,$english_format_number = number_format($Tvisa, 2, '.', ''),1,0,'C',0);
$pdf->Cell(15,6,$english_format_number = number_format($Tmaster, 2, '.', ''),1,0,'C',0);
$pdf->Cell(16.5,6,$english_format_number = number_format($TTransferencia, 2, '.', ''),1,0,'C',0);
$pdf->Cell(16.5,6,$english_format_number = number_format($Tsaldop, 2, '.', ''),1,0,'C',0);
$pdf->Cell(18,6,$english_format_number = number_format($gananciadeldia, 2, '.', ''),1,1,'C',0);

$pdf->Output();
?>