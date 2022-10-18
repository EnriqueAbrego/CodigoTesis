<?php
$idid=$_POST["idid"];
$idid1=$_POST["idid1"];
$idid2=$_POST["idid2"];
$idid3=$_POST["idid3"];



if($estudianteasz['Sucursal']=='Esquipula 1'){
    $encabezadoZucural='email: escuelaesquipulamilla8@hotmail.com
www.escuelaesquipula.com
TEL:391-2022/391-9200 WHATSAPP        6378-5309  /  6661-8503 
Sucursal San isidro, al lado de la parada del metro de San Isidro.';
}
if($estudianteasz['Sucursal']=='Esquipula 2'){
    $encabezadoZucural='email: escuelaesquipulachilibre@hotmail.com
www.escuelaesquipula.com
TEL:216-0708/0848 WHATSAPP         6 9 1 0  -  9 5 9 5            
Sucursal Chilibre Las Vegas, arriba de Melo.';
}
if($estudianteasz['Sucursal']=='Esquipula 3'){
    $encabezadoZucural='email: escuelaesquipulaanton@hotmail.com
www.escuelaesquipula.com
TEL:987-3598/3586 WHATSAPP       6910-8333 Cel.66618503
Sucursal  Antón, edificio W al lado del Hotel Rivera.';
}
if($estudianteasz['Sucursal']=='Esquipula 4'){
    $encabezadoZucural='email: autoescuelaesquipula@hotmail.com
www.escuelaesquipula.com
TEL: 385-6087/86 WHATSAPP        6505-0556 Cel. 66618503
Sucursal 24 de Diciembre, Calle Via Panamericana plaza Cristina diagonal a Cochez.';
}
$CategoriaDeLicenciax=$estudianteasz['CategoriaDeLicencia'];
if($CategoriaDeLicenciax=="A - Bicicleta")$CategoriaDeLicenciax="A";
if($CategoriaDeLicenciax=="B - Moto (ampliación)")$CategoriaDeLicenciax="B";
if($CategoriaDeLicenciax=="C - Particular (ampliación)")$CategoriaDeLicenciax="C";
if($CategoriaDeLicenciax=="D - Comercial (ampliación)")$CategoriaDeLicenciax="D";
if($CategoriaDeLicenciax=="A - B - Moto")$CategoriaDeLicenciax="A - B";
if($CategoriaDeLicenciax=="A - C - particular")$CategoriaDeLicenciax="A - C";
if($CategoriaDeLicenciax=="A - B - C - Bicicleta - Moto - Particular")$CategoriaDeLicenciax="A - B - C";
if($CategoriaDeLicenciax=="A - B - C - D - Bicicleta - Moto - Particular - Comercial")$CategoriaDeLicenciax="A - B - C - D";
if($CategoriaDeLicenciax=="A - B - D - Bicicleta - Moto - Comercial")$CategoriaDeLicenciax="A - B - D";
if($CategoriaDeLicenciax=="B - D - Moto - Comercial")$CategoriaDeLicenciax="B - D";
if($CategoriaDeLicenciax=="C - D - Particular - Comercial")$CategoriaDeLicenciax="C - D";
if($CategoriaDeLicenciax=="E1 - Taxi")$CategoriaDeLicenciax="E1";
if($CategoriaDeLicenciax=="E2 - Bus colegial")$CategoriaDeLicenciax="E2";
if($CategoriaDeLicenciax=="E3 - Bus")$CategoriaDeLicenciax="E3";
if($CategoriaDeLicenciax=="E1 - E2 - Taxi - Bus colegial")$CategoriaDeLicenciax="E1 - E2";
if($CategoriaDeLicenciax=="E1 - E2 - E3 - Taxi - Bus colegial - Bus Grande")$CategoriaDeLicenciax="E1 - E2 - E3";
if($CategoriaDeLicenciax=="E1 - E2 - E3 - F- Taxi - Bus colegial - Bus Grande - Camion Mas de 10 Ton")$CategoriaDeLicenciax="E1 - E2 - E3 - F ";
if($CategoriaDeLicenciax=="E2 - E3 - Bus colegial - Bus Grande")$CategoriaDeLicenciax="E2 -E3";
if($CategoriaDeLicenciax=="F - Camion Mas de 10 Ton")$CategoriaDeLicenciax="F";
if($CategoriaDeLicenciax=="F - I -  Camion Mas de 10 Ton - Equipo Pesado")$CategoriaDeLicenciax="F - I";
if($CategoriaDeLicenciax=="G - Vehiculo Articulado")$CategoriaDeLicenciax="G";
if($CategoriaDeLicenciax=="H - Vehiculo Infamable")$CategoriaDeLicenciax="H";
if($CategoriaDeLicenciax=="I - Equipo Pesado")$CategoriaDeLicenciax="I";


if($idid1==1){
    $fechaf=$estudianteas['FechaAbonoUno'];
    $abono=$estudianteas['MontoAbonoUno'];
    $nunrecibos=$estudianteas['RecAbonoUno'];

    if($estudianteas['SaldoUno']==0){
        $primero="Cancelacion";
    }else{
        $primero="Primer Abono";
    }
    $motivo=$primero.' de '.$estudianteasz['EstadoDeContrado'].' de tipo '.$CategoriaDeLicenciax;
    $tipopago=$estudianteas['TipoPagoUno'];
    $Saldo=$estudianteas['SaldoUno'];
    $NumChequeUno=$estudianteas['NumChequeUno'];
    $BancoUno=$estudianteas['BancoUno'];
    if($NumChequeUno=="NO_INGRESADO"){$NumChequeUno=" ";}
    if($BancoUno=="NO_INGRESADO"){$BancoUno=" ";}
}

if($idid1==2){
    $fechaf=$estudianteas['FechaAbonoDos'];
    $abono=$estudianteas['MontoAbonoDos'];
    $nunrecibos=$estudianteas['RecAbonoDos'];
    if($estudianteas['SaldoDos']==0){
        $primero="Cancelacion";
    }else{
        $primero="Segundo Abono";
    }
    $motivo=$primero.' de '.$estudianteasz['EstadoDeContrado'].' de tipo '.$CategoriaDeLicenciax;
    $tipopago=$estudianteas['TipoPagoDos'];
    $Saldo=$estudianteas['SaldoDos'];
    $NumChequeUno=$estudianteas['NumChequeDos'];
    $BancoUno=$estudianteas['BancoDos'];
    if($NumChequeUno=="NO_INGRESADO"){$NumChequeUno=" ";}
    if($BancoUno=="NO_INGRESADO"){$BancoUno=" ";}
}

if($idid1==3){
    $fechaf=$estudianteas['FechaAbonoTres'];
    $abono=$estudianteas['MontoAbonoTres'];
    $nunrecibos=$estudianteas['RecAbonoTres'];

    if($estudianteas['SaldoTres']==0){
        $primero="Cancelacion";
    }else{
        $primero="Tercer Abono";
    }
    $motivo=$primero.' de '.$estudianteasz['EstadoDeContrado'].' de tipo '.$CategoriaDeLicenciax;

    $tipopago=$estudianteas['TipoPagoTres'];
    $Saldo=$estudianteas['SaldoTres'];
    $NumChequeUno=$estudianteas['NumChequeTres'];
    $BancoUno=$estudianteas['BancoTres'];
    if($NumChequeUno=="NO_INGRESADO"){$NumChequeUno=" ";}
    if($BancoUno=="NO_INGRESADO"){$BancoUno=" ";}
}

if($idid1==4){
    $fechaf=$estudianteas['FechaAbonoCuatro'];
    $abono=$estudianteas['MontoAbonoCuatro'];
    $abono=$estudianteas['MontoAbonoCuatro'];

    if($estudianteas['SaldoCuatro']==0){
        $primero="Cancelacion";
    }else{
        $primero="Cuarto Abono";
    }
    $motivo=$primero.' de '.$estudianteasz['EstadoDeContrado'].' de tipo '.$CategoriaDeLicenciax;
    $tipopago=$estudianteas['TipoPagoCuatro'];
    $Saldo=$estudianteas['SaldoCuatro'];
    $NumChequeUno=$estudianteas['NumChequeCuatro'];
    $BancoUno=$estudianteas['BancoCuatro'];
    if($NumChequeUno=="NO_INGRESADO"){$NumChequeUno=" ";}
    if($BancoUno=="NO_INGRESADO"){$BancoUno=" ";}
}
    

$efectivo=" ";
$cheque=" ";
$clave=" ";
$yappy=" ";
$visa="";
$mastercard=" ";
$deposito=" ";
$Transferencia=" ";
$contador=0;

$fechaf=obtenerFechaEnLetra($fechaf);
function obtenerFechaEnLetra($fechaf){
    $num = date("j", strtotime($fechaf));
    $anno = date("Y", strtotime($fechaf));
    $mes = date("m", strtotime($fechaf));;
    return $num.'-'.$mes.'-'.$anno;
}

/////////////////

$numero = $abono;
$entera = intval($numero);
$decimal = $numero - $entera;
$numero=$numero-$decimal;

$VALDSD1=convertirNumeroLetra($numero);
$VALDSD2=' CON ';
$VALDSD3=number_format($decimal, 2, '.', '');
$VALDSD4='/100';
$letrastotal=$VALDSD1.$VALDSD2.$VALDSD3.$VALDSD4;

function convertirNumeroLetra($numero){
    $numf = milmillon($numero);
    return $numf." ";
}

function milmillon($nummierod){
    if ($nummierod >= 1000000000 && $nummierod <2000000000){
        $num_letrammd = "MIL ".(cienmillon($nummierod%1000000000));
    }
    if ($nummierod >= 2000000000 && $nummierod <10000000000){
        $num_letrammd = unidad(Floor($nummierod/1000000000))." MIL ".(cienmillon($nummierod%1000000000));
    }
    if ($nummierod < 1000000000)
        $num_letrammd = cienmillon($nummierod);
    
    return $num_letrammd;
}

function cienmillon($numcmeros){
    if ($numcmeros == 100000000)
        $num_letracms = "CIEN MILLONES";
    if ($numcmeros >= 100000000 && $numcmeros <1000000000){
        $num_letracms = centena(Floor($numcmeros/1000000))." MILLONES ".(millon($numcmeros%1000000));       
    }
    if ($numcmeros < 100000000)
        $num_letracms = decmillon($numcmeros);
    return $num_letracms;
}

function decmillon($numerodm){
    if ($numerodm == 10000000)
        $num_letradmm = "DIEZ MILLONES";
    if ($numerodm > 10000000 && $numerodm <20000000){
        $num_letradmm = decena(Floor($numerodm/1000000))."MILLONES ".(cienmiles($numerodm%1000000));        
    }
    if ($numerodm >= 20000000 && $numerodm <100000000){
        $num_letradmm = decena(Floor($numerodm/1000000))." MILLONES ".(millon($numerodm%1000000));      
    }
    if ($numerodm < 10000000)
        $num_letradmm = millon($numerodm);
    
    return $num_letradmm;
}

function millon($nummiero){
    if ($nummiero >= 1000000 && $nummiero <2000000){
        $num_letramm = "UN MILLON ".(cienmiles($nummiero%1000000));
    }
    if ($nummiero >= 2000000 && $nummiero <10000000){
        $num_letramm = unidad(Floor($nummiero/1000000))." MILLONES ".(cienmiles($nummiero%1000000));
    }
    if ($nummiero < 1000000)
        $num_letramm = cienmiles($nummiero);
    
    return $num_letramm;
}

function cienmiles($numcmero){
    if ($numcmero == 100000)
        $num_letracm = "CIEN MIL";
    if ($numcmero >= 100000 && $numcmero <1000000){
        $num_letracm = centena(Floor($numcmero/1000))." MIL ".(centena($numcmero%1000));        
    }
    if ($numcmero < 100000)
        $num_letracm = decmiles($numcmero);
    return $num_letracm;
}

function decmiles($numdmero){
    if ($numdmero == 10000)
        $numde = "DIEZ MIL";
    if ($numdmero > 10000 && $numdmero <20000){
        $numde = decena(Floor($numdmero/1000))."MIL ".(centena($numdmero%1000));        
    }
    if ($numdmero >= 20000 && $numdmero <100000){
        $numde = decena(Floor($numdmero/1000))." MIL ".(miles($numdmero%1000));     
    }       
    if ($numdmero < 10000)
        $numde = miles($numdmero);
    
    return $numde;
}

function miles($nummero){
    if ($nummero >= 1000 && $nummero < 2000){
        $numm = "MIL ".(centena($nummero%1000));
    }
    if ($nummero >= 2000 && $nummero <10000){
        $numm = unidad(Floor($nummero/1000))." MIL ".(centena($nummero%1000));
    }
    if ($nummero < 1000)
        $numm = centena($nummero);
    
    return $numm;
}
function centena($numc){
    if ($numc >= 100)
    {
        if ($numc >= 900 && $numc <= 999)
        {
            $numce = "NOVECIENTOS ";
            if ($numc > 900)
                $numce = $numce.(decena($numc - 900));
        }
        else if ($numc >= 800 && $numc <= 899)
        {
            $numce = "OCHOCIENTOS ";
            if ($numc > 800)
                $numce = $numce.(decena($numc - 800));
        }
        else if ($numc >= 700 && $numc <= 799)
        {
            $numce = "SETECIENTOS ";
            if ($numc > 700)
                $numce = $numce.(decena($numc - 700));
        }
        else if ($numc >= 600 && $numc <= 699)
        {
            $numce = "SEISCIENTOS ";
            if ($numc > 600)
                $numce = $numce.(decena($numc - 600));
        }
        else if ($numc >= 500 && $numc <= 599)
        {
            $numce = "QUINIENTOS ";
            if ($numc > 500)
                $numce = $numce.(decena($numc - 500));
        }
        else if ($numc >= 400 && $numc <= 499)
        {
            $numce = "CUATROCIENTOS ";
            if ($numc > 400)
                $numce = $numce.(decena($numc - 400));
        }
        else if ($numc >= 300 && $numc <= 399)
        {
            $numce = "TRESCIENTOS ";
            if ($numc > 300)
                $numce = $numce.(decena($numc - 300));
        }
        else if ($numc >= 200 && $numc <= 299)
        {
            $numce = "DOSCIENTOS ";
            if ($numc > 200)
                $numce = $numce.(decena($numc - 200));
        }
        else if ($numc >= 100 && $numc <= 199)
        {
            if ($numc == 100)
                $numce = "CIEN ";
            else
                $numce = "CIENTO ".(decena($numc - 100));
        }
    }
    else
        $numce = decena($numc);
    
    return $numce;  
}
function decena($numdero){
    
    if ($numdero >= 90 && $numdero <= 99)
    {
        $numd = "NOVENTA ";
        if ($numdero > 90)
            $numd = $numd."Y ".(unidad($numdero - 90));
    }
    else if ($numdero >= 80 && $numdero <= 89)
    {
        $numd = "OCHENTA ";
        if ($numdero > 80)
            $numd = $numd."Y ".(unidad($numdero - 80));
    }
    else if ($numdero >= 70 && $numdero <= 79)
    {
        $numd = "SETENTA ";
        if ($numdero > 70)
            $numd = $numd."Y ".(unidad($numdero - 70));
    }
    else if ($numdero >= 60 && $numdero <= 69)
    {
        $numd = "SESENTA ";
        if ($numdero > 60)
            $numd = $numd."Y ".(unidad($numdero - 60));
    }
    else if ($numdero >= 50 && $numdero <= 59)
    {
        $numd = "CINCUENTA ";
        if ($numdero > 50)
            $numd = $numd."Y ".(unidad($numdero - 50));
    }
    else if ($numdero >= 40 && $numdero <= 49)
    {
        $numd = "CUARENTA ";
        if ($numdero > 40)
            $numd = $numd."Y ".(unidad($numdero - 40));
    }
    else if ($numdero >= 30 && $numdero <= 39)
    {
        $numd = "TREINTA ";
        if ($numdero > 30)
            $numd = $numd."Y ".(unidad($numdero - 30));
    }
    else if ($numdero >= 20 && $numdero <= 29)
    {
        if ($numdero == 20)
            $numd = "VEINTE ";
        else
            $numd = "VEINTI".(unidad($numdero - 20));
    }
    else if ($numdero >= 10 && $numdero <= 19)
    {
        switch ($numdero){
        case 10:
        {
            $numd = "DIEZ ";
            break;
        }
        case 11:
        {               
            $numd = "ONCE ";
            break;
        }
        case 12:
        {
            $numd = "DOCE ";
            break;
        }
        case 13:
        {
            $numd = "TRECE ";
            break;
        }
        case 14:
        {
            $numd = "CATORCE ";
            break;
        }
        case 15:
        {
            $numd = "QUINCE ";
            break;
        }
        case 16:
        {
            $numd = "DIECISEIS ";
            break;
        }
        case 17:
        {
            $numd = "DIECISIETE ";
            break;
        }
        case 18:
        {
            $numd = "DIECIOCHO ";
            break;
        }
        case 19:
        {
            $numd = "DIECINUEVE ";
            break;
        }
        }   
    }
    else
        $numd = unidad($numdero);
return $numd;
}
function unidad($numuero){
    switch ($numuero)
    {
        case 9:
        {
            $numu = "NUEVE";
            break;
        }
        case 8:
        {
            $numu = "OCHO";
            break;
        }
        case 7:
        {
            $numu = "SIETE";
            break;
        }       
        case 6:
        {
            $numu = "SEIS";
            break;
        }       
        case 5:
        {
            $numu = "CINCO";
            break;
        }       
        case 4:
        {
            $numu = "CUATRO";
            break;
        }       
        case 3:
        {
            $numu = "TRES";
            break;
        }       
        case 2:
        {
            $numu = "DOS";
            break;
        }       
        case 1:
        {
            $numu = "UN0";
            break;
        }       
        case 0:
        {
            $numu = "CERO";
            break;
        }       
    }
    return $numu;   
}











/////////////////
require('fpdf/code128.php');
$marco=0;



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
$pdf = new FPDF('P','mm',array(215.9,280));
$pdf->AliasNbPages();
$pdf->AddPage('P');
$pdf->SetFont('Arial','B',20);
$pdf->Image('img/marcobien2.png',12.5,20,190,80);
$pdf->Image('img/marcobien2.png',12.5,100,190,80);
$pdf->Image('img/marcobien2.png',12.5,180,190,80);

if($contador==0){
    $pdf->Ln();
    $pdf->Cell(200,15,utf8_decode(''),0,1,'C');
    
}
while($contador!=3){
    /////////////// primera linea
    if($contador!=0){
        $pdf->Ln();
        $pdf->Cell(200,11,utf8_decode(''),0,1,'C');
    }
    $contador=$contador+1;
    $pdf->SetFont('Arial','',7);
    $pdf->multicell(185, 2,utf8_decode($encabezadoZucural),0,'R');
    $pdf->Cell(185,2,utf8_decode('escuelademanejo_esquipula'),0,1,'R');
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(90,2,utf8_decode('Recibo # '),0,0,'R');
    $pdf->SetTextColor(255 , 1, 1);
    $pdf->Cell(15,2,utf8_decode($nunrecibos),0,0,'L');
    $pdf->SetFont('Arial','',7);
    $pdf->SetTextColor(10 , 10, 10);
    $pdf->Cell(80,2,utf8_decode('escuela de manejo esquipula'),0,1,'R');
    $pdf->Cell(185,6,utf8_decode(''),0,1,'R');

    $pdf->Cell(10,0,utf8_decode(''),0,0,'L');
    $pdf->Cell(92.5,0,utf8_decode('R.U.C. 1583549-1-662985 D.V. 4'),0,0,'L');
    $pdf->SetFont('Arial','',10);
    $pdf->Cell(12,0,utf8_decode('Fecha: '),0,0,'L');
    $pdf->SetFont('Arial','',10);
    $pdf->Cell(70.5,0,utf8_decode($fechaf),0,1,'L');

    $pdf->Cell(10,6,utf8_decode(''),$marco,1,'L');
    $pdf->Cell(10,0,utf8_decode(''),$marco,0,'L');
    $pdf->SetFont('Arial','',8);
    $pdf->Cell(32,0,utf8_decode('Hemos recibido de:'),$marco,0,'L');
    $pdf->SetFont('Arial','',8);
    $pdf->Cell(70.5,0,utf8_decode($estudianteasz['PrimerNombre'].' '.$estudianteasz['PrimerApellido']),$marco,1,'L');
    $pdf->SetFont('Arial','u',8);


    $pdf->Cell(10,5,utf8_decode(''),$marco,1,'L');
    $pdf->Cell(10,0,utf8_decode(''),$marco,0,'L');
    $pdf->SetFont('Arial','',8);
    $pdf->Cell(32,0,utf8_decode('La Suma de:'),$marco,0,'L');
    $pdf->SetFont('Arial','',8);
    $pdf->Cell(115,0,utf8_decode($letrastotal),0,0,'L');
    $pdf->Cell(25,0,utf8_decode('  B/: $'.$abono),0,1,'L');
    $pdf->Cell(10,5,utf8_decode(''),$marco,1,'L');
    $pdf->Cell(10,0,utf8_decode(''),$marco,0,'L');
    $pdf->SetFont('Arial','',8);
    $pdf->Cell(32,0,utf8_decode('En Concepto de: '),$marco,0,'L');
    $pdf->SetFont('Arial','',8);
    $pdf->Cell(70.5,0,utf8_decode($motivo),$marco,1,'L');
    $pdf->Cell(10,0,utf8_decode(''),$marco,1,'L');


    if($tipopago=="Efectivo"){$efectivo="x";}
    if($tipopago=="Cheque"){$cheque="x";}
    if($tipopago=="Clave"){$clave="X";}
    if($tipopago=="Yappy"){$yappy="X";}
    if($tipopago=="Visa"){$visa="X";}
    if($tipopago=="Mastercard"){$mastercard="X";}
    if($tipopago=="Deposito $ a"){$deposito="X";}
    if($tipopago=="Transferencia"){$Transferencia="X";}


    $pdf->Cell(10,7,utf8_decode(''),$marco,1,'L');
    $pdf->Cell(10,0,utf8_decode(''),$marco,0,'L');
    $pdf->SetFont('Arial','',10);
    $pdf->Cell(14,5,utf8_decode('Efectivo'),$marco,0,'L');
    $pdf->Cell(4,5,utf8_decode($efectivo),1,0,'L');
    $pdf->Cell(1,5,utf8_decode(' '),$marco,0,'L');

    $pdf->Cell(14,5,utf8_decode('Cheque'),$marco,0,'L');
    $pdf->Cell(4,5,utf8_decode($cheque),1,0,'L');
    $pdf->Cell(1,5,utf8_decode(' '),$marco,0,'L');

    $pdf->Cell(11,5,utf8_decode('Clave'),$marco,0,'L');
    $pdf->Cell(4,5,utf8_decode($clave),1,0,'L');
    $pdf->Cell(1,5,utf8_decode(' '),$marco,0,'L');

    $pdf->Cell(13,5,utf8_decode('Yappy'),$marco,0,'L');
    $pdf->Cell(4,5,utf8_decode($yappy),1,0,'L');
    $pdf->Cell(1,5,utf8_decode(' '),$marco,0,'L');

    $pdf->Cell(9,5,utf8_decode('Visa'),$marco,0,'L');
    $pdf->Cell(4,5,utf8_decode($visa),1,0,'L');
    $pdf->Cell(1,5,utf8_decode(' '),$marco,0,'L');

    $pdf->Cell(20,5,utf8_decode('Mastercard'),$marco,0,'L');
    $pdf->Cell(4,5,utf8_decode($mastercard),1,0,'L');
    $pdf->Cell(1,5,utf8_decode(' '),$marco,0,'L');

    $pdf->Cell(22,5,utf8_decode('Deposito $ a'),$marco,0,'L');
    $pdf->Cell(4,5,utf8_decode($deposito),1,0,'L');
    $pdf->Cell(1,5,utf8_decode(' '),$marco,0,'L');

    $pdf->Cell(24,5,utf8_decode('Transferencia'),$marco,0,'L');
    $pdf->Cell(4,5,utf8_decode($Transferencia),1,0,'L');
    $pdf->Cell(1,5,utf8_decode(' '),$marco,1,'L');



    $pdf->Cell(10,10,utf8_decode(' '),0,0,'L');
    $pdf->Cell(40,10,utf8_decode('Num Cheque/Deposto:'),$marco,0,'L');
    $pdf->Cell(25,10,utf8_decode($NumChequeUno),0,0,'L');
    $pdf->Cell(5,10,utf8_decode(' '),0,0,'L');


    $pdf->Cell(13,10,utf8_decode('Banco: '),$marco,0,'L');
    $pdf->Cell(40,10,utf8_decode($BancoUno),0,0,'L');

    $pdf->Cell(15,10,utf8_decode('Saldo: '),$marco,0,'L');
    $pdf->Cell(10,10,utf8_decode($Saldo.' $'),0,0,'L');
    $pdf->Cell(5,8,utf8_decode(' '),0,1,'L');


    $pdf->Cell(20,11,utf8_decode(''),0,1,'L');
    $pdf->Cell(20,4,utf8_decode(''),0,0,'L');
    $pdf->SetFont('Arial','',10);
    $pdf->Cell(90,4,utf8_decode('Recibido por'),0,0,'L');
    $pdf->SetFont('Arial','',7);
    $pdf->Cell(32,4,utf8_decode('DOCUMENTO NO FISCAL'),0,0,'L');
}

$pdf->Output();
?>