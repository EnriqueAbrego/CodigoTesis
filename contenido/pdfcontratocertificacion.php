<?php
include("../Confi/db.php");
$idid=$_POST["idid"];




$fechaf=$estudianteas['Fecha'];

$fechaf=obtenerFechaEnLetra($fechaf);
function obtenerFechaEnLetra($fechaf){
    $num = date("j", strtotime($fechaf));
    $anno = date("Y", strtotime($fechaf));
    $mes = date("m", strtotime($fechaf));;
    return $num.'-'.$mes.'-'.$anno;
}



if($estudianteas['Sucursal']=='Esquipula 1'){
    $encabezadoZucural='email: escuelaesquipulamilla8@hotmail.com
www.escuelaesquipula.com
TEL:391-2022/391-9200 WHATSAPP         6378-5309/6661-8503
Sucursal San isidro, al lado de la parada del metro de San Isidro.


';
}
if($estudianteas['Sucursal']=='Esquipula 2'){
    $encabezadoZucural='email: escuelaesquipulachilibre@hotmail.com
www.escuelaesquipula.com
TEL:216-0708/0848 WHATSAPP               6 9 1 0  -  9 5 9 5
Sucursal Chilibre Las Vegas, arriba de Melo.


';
}
if($estudianteas['Sucursal']=='Esquipula 3'){
    $encabezadoZucural='email: escuelaesquipulaanton@hotmail.com
www.escuelaesquipula.com
TEL:987-3598/3586 WHATSAPP        6910-8333/6661-8503
Sucursal  Antón, edificio W al lado del Hotel Rivera.

';
}
if($estudianteas['Sucursal']=='Esquipula 4'){
    $encabezadoZucural='email: autoescuelaesquipula@hotmail.com
www.escuelaesquipula.com
TEL: 385-6087/86 WHATSAPP        6505-0556/6661-8503
Sucursal 24 de Diciembre, Calle Via Panamericana plaza Cristina diagonal a Cochez.


';
}

$marco=0;
$nombrecompletoc=' ';
if($estudianteas['PrimerNombre']=='NO_INGRESADO'){$nombrecompletoc=$nombrecompletoc.' ';}else{$nombrecompletoc=$nombrecompletoc.' '.$estudianteas['PrimerNombre'];}
if($estudianteas['SegundoNombre']=='NO_INGRESADO'){$nombrecompletoc=$nombrecompletoc.' ';}else{$nombrecompletoc=$nombrecompletoc.' '.$estudianteas['SegundoNombre'];}
if($estudianteas['TercerNombre']=='NO_INGRESADO'){$nombrecompletoc=$nombrecompletoc.' ';}else{$nombrecompletoc=$nombrecompletoc.' '.$estudianteas['TercerNombre'];}
if($estudianteas['PrimerApellido']=='NO_INGRESADO'){$nombrecompletoc=$nombrecompletoc.' ';}else{$nombrecompletoc=$nombrecompletoc.' '.$estudianteas['PrimerApellido'];}
if($estudianteas['SegundoApellido']=='NO_INGRESADO'){$nombrecompletoc=$nombrecompletoc.' ';}else{$nombrecompletoc=$nombrecompletoc.' '.$estudianteas['SegundoApellido'];}
if($estudianteas['ApellidoCasada']=='NO_INGRESADO'){$nombrecompletoc=$nombrecompletoc.' ';}else{$nombrecompletoc=$nombrecompletoc.' '.$estudianteas['ApellidoCasada'];}

$CategoriaDeLicenciax=$estudianteas['CategoriaDeLicencia'];
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
$pdf->AddPage('',array(220,280));
$pdf->SetFont('Arial','',8);
$pdf->Image('img/logoescuela.png',5,5,50,30);
$pdf->Image('img/wp.png',177,17.4,4,4);
$pdf->Cell(80,5,utf8_decode(''),0,0,'R');
$pdf->multicell(120, 4,utf8_decode($encabezadoZucural),0,'R');
$pdf->SetFont('Arial','UB',10);
$pdf->Cell(200,5,utf8_decode('CONTRATO DE CERTIFICACIÓN DE LA ESCUELA DE MANEJO'),0,1,'L');
$pdf->SetFont('Arial','',8);
$pdf->Cell(13,10,utf8_decode('FECHA:'),0,0,'L');
$pdf->SetFont('Arial','UB',8);
$pdf->Cell(30,10,utf8_decode($fechaf),0,0,'L');
$pdf->SetFont('Arial','',8);
$pdf->Cell(10,10,utf8_decode('Edad:'),0,0,'L');
$pdf->SetFont('Arial','UB',8);
$pdf->Cell(30,10,utf8_decode($estudianteas['Edad']),0,1,'L');
$pdf->SetFont('Arial','',8);
$pdf->Cell(13,10,utf8_decode('Cedula'),0,0,'L');
$pdf->SetFont('Arial','UB',8);
$pdf->Cell(30,10,utf8_decode($estudianteas['Cedula']),0,0,'L');
$pdf->SetFont('Arial','',8);
$pdf->Cell(15,10,utf8_decode('Nombre:'),0,0,'L');
$pdf->SetFont('Arial','UB',8);
$pdf->Cell(30,10,utf8_decode($nombrecompletoc),0,1,'L');


///////////////////segunda linea
$pdf->SetFont('Arial','',8);
$pdf->Cell(23,10,utf8_decode('Tipo de Licencia:'),$marco,0,'L');

$pdf->SetFont('Arial','UB',8);
$pdf->Cell(26,10,utf8_decode($CategoriaDeLicenciax),$marco,0,'L');

$pdf->SetFont('Arial','',8);
$pdf->Cell(22,10,utf8_decode('Tipo de Sangre:'),$marco,0,'L');

$pdf->SetFont('Arial','UB',8);
$pdf->Cell(26,10,utf8_decode($estudianteas['TipoSangre']),$marco,0,'L');

$pdf->SetFont('Arial','',8);
$pdf->Cell(25,10,utf8_decode('Tiquete entregado:'),$marco,0,'L');

$pdf->SetFont('Arial','UB',8);
$pdf->Cell(26,10,utf8_decode($estudianteas['TiqueteEntregado']),$marco,1,'L');


///////////////////tercera linea
$pdf->SetFont('Arial','',8);
$pdf->Cell(24,10,utf8_decode('Lugar de Trabajo:'),$marco,0,'L');

$pdf->SetFont('Arial','UB',8);
$pdf->Cell(70,10,utf8_decode($estudianteas['LugarDeTrabajo']),$marco,0,'L');

$pdf->SetFont('Arial','',8);
$pdf->Cell(16,10,utf8_decode('Ocupación:'),$marco,0,'L');

$pdf->SetFont('Arial','UB',8);
$pdf->Cell(90,10,utf8_decode($estudianteas['Ocupacion']),$marco,1,'L');

///////////////////cuarta linea
$pdf->SetFont('Arial','',8);
$pdf->Cell(24,10,utf8_decode('Tel.casa:'),$marco,0,'L');

$pdf->SetFont('Arial','UB',8);
$pdf->Cell(40,10,utf8_decode($estudianteas['TelCasa']),$marco,0,'L');

$pdf->SetFont('Arial','',8);
$pdf->Cell(16,10,utf8_decode('Celular'),$marco,0,'L');

$pdf->SetFont('Arial','UB',8);
$pdf->Cell(45,10,utf8_decode($estudianteas['Celular']),$marco,0,'L');

$pdf->SetFont('Arial','',8);
$pdf->Cell(21,10,utf8_decode('Tel. Oficina:'),$marco,0,'L');

$pdf->SetFont('Arial','UB',8);
$pdf->Cell(54,10,utf8_decode($estudianteas['TelOficina']),$marco,1,'L');

///////////////////quinta linea

$pdf->SetFont('Arial','',8);
$pdf->Cell(16,10,utf8_decode('Detalle: '),$marco,0,'L');

$pdf->SetFont('Arial','UB',8);
$pdf->Cell(120,10,utf8_decode($estudianteas['Detalle']),$marco,1,'L');

///////////////////sexta linea
$pdf->SetFont('Arial','',8);
$pdf->Cell(24,10,utf8_decode('Dirección'),$marco,0,'L');

$pdf->SetFont('Arial','UB',8);
$pdf->Cell(176,10,utf8_decode($estudianteas['Direccion']),$marco,1,'L');


///////////////////sectima linea
$pdf->SetFont('Arial','',8);
$pdf->Cell(24,10,utf8_decode('monto a pagar:'),$marco,0,'L');

$pdf->SetFont('Arial','UB',8);
$pdf->Cell(176,10,utf8_decode($abonosc['MontoFactura']),$marco,1,'L');

///////////////////            8 linea
$pdf->SetFont('Arial','',8);
$pdf->Cell(24,10,utf8_decode('Rec. No.'),$marco,0,'L');

$pdf->SetFont('Arial','UB',8);
$pdf->Cell(40,10,utf8_decode($abonosc['RecAbonoUno']),$marco,0,'L');

$pdf->SetFont('Arial','',8);
$pdf->Cell(16,10,utf8_decode('Abono:'),$marco,0,'L');

$pdf->SetFont('Arial','UB',8);
$pdf->Cell(45,10,utf8_decode($abonosc['MontoAbonoUno']),$marco,0,'L');

$pdf->SetFont('Arial','',8);
$pdf->Cell(21,10,utf8_decode('Saldo:'),$marco,0,'L');

$pdf->SetFont('Arial','UB',8);
$pdf->Cell(54,10,utf8_decode($abonosc['SaldoUno']),$marco,1,'L');

///////////////////             9 linea
if($abonosc['RecAbonoDos']!="0"){
    $pdf->SetFont('Arial','',8);
    $pdf->Cell(24,10,utf8_decode('Rec. No.'),$marco,0,'L');

    $pdf->SetFont('Arial','UB',8);
    $pdf->Cell(40,10,utf8_decode($abonosc['RecAbonoDos']),$marco,0,'L');

    $pdf->SetFont('Arial','',8);
    $pdf->Cell(16,10,utf8_decode('Abono:'),$marco,0,'L');

    $pdf->SetFont('Arial','UB',8);
    $pdf->Cell(45,10,utf8_decode($abonosc['MontoAbonoDos']),$marco,0,'L');

    $pdf->SetFont('Arial','',8);
    $pdf->Cell(21,10,utf8_decode('Saldo:'),$marco,0,'L');

    $pdf->SetFont('Arial','UB',8);
    $pdf->Cell(54,10,utf8_decode($abonosc['SaldoDos']),$marco,1,'L');
}
if($abonosc['RecAbonoTres']!="0"){
    $pdf->SetFont('Arial','',8);
    $pdf->Cell(24,10,utf8_decode('Rec. No.'),$marco,0,'L');

    $pdf->SetFont('Arial','UB',8);
    $pdf->Cell(40,10,utf8_decode($abonosc['RecAbonoTres']),$marco,0,'L');

    $pdf->SetFont('Arial','',8);
    $pdf->Cell(16,10,utf8_decode('Abono:'),$marco,0,'L');

    $pdf->SetFont('Arial','UB',8);
    $pdf->Cell(45,10,utf8_decode($abonosc['MontoAbonoTres']),$marco,0,'L');

    $pdf->SetFont('Arial','',8);
    $pdf->Cell(21,10,utf8_decode('Saldo:'),$marco,0,'L');

    $pdf->SetFont('Arial','UB',8);
    $pdf->Cell(54,10,utf8_decode($abonosc['SaldoTres']),$marco,1,'L');
}
if($abonosc['RecAbonoCuatro']!="0"){
    $pdf->SetFont('Arial','',8);
    $pdf->Cell(24,10,utf8_decode('Rec. No.'),$marco,0,'L');

    $pdf->SetFont('Arial','UB',8);
    $pdf->Cell(40,10,utf8_decode($abonosc['RecAbonoCuatro']),$marco,0,'L');

    $pdf->SetFont('Arial','',8);
    $pdf->Cell(16,10,utf8_decode('Abono:'),$marco,0,'L');

    $pdf->SetFont('Arial','UB',8);
    $pdf->Cell(45,10,utf8_decode($abonosc['MontoAbonoCuatro']),$marco,0,'L');

    $pdf->SetFont('Arial','',8);
    $pdf->Cell(21,10,utf8_decode('Saldo:'),$marco,0,'L');

    $pdf->SetFont('Arial','UB',8);
    $pdf->Cell(54,10,utf8_decode($abonosc['SaldoCuatro']),$marco,1,'L');
}

///////////////////              10 linea
$pdf->SetFont('Arial','',8);
$pdf->Cell(24,10,utf8_decode('Observación:'),$marco,0,'L');

$pdf->SetFont('Arial','UB',8);
$pdf->Cell(176,10,utf8_decode($estudianteas['Observaciondefactura']),$marco,1,'L');
///////////////////tercera linea
$pdf->SetFont('Arial','',11);
$pdf->Cell(200,10,utf8_decode('REGLAS DE LA ESCUELA DE MANEJO ESQUIPULA PARA LOS ESTUDIANTES QUE SABEN CONDUCIR:'),$marco,1,'L');
$pdf->Cell(200,5,utf8_decode('      1.  No se permite hablar por celular ni chatear en el salón de clase.'),$marco,1,'L');
$pdf->Cell(200,5,utf8_decode('      2.	Por disposición  de  la  autoridad  del  trámite  y  trasporte terrestre las 4 charlas teóricas deben  asistirse'),$marco,1,'L');
$pdf->Cell(200,5,utf8_decode('          corridas o en un periodo NO MAYOR DE 30 días máximo de lo contrario se anularán las que sobrepasen'),$marco,1,'L');
$pdf->Cell(200,5,utf8_decode('          el tiempo estimado.'),$marco,1,'L');
$pdf->Cell(200,5,utf8_decode('      3.	El  diploma  se  envía  los lunes al transito una vez el estudiante haya cancelado el trámite con la escuela'),$marco,1,'L');
$pdf->Cell(200,5,utf8_decode('          de manejo  para  que  sea sellado,  firmado y captado y demora 10 días para ser devuelto a la escuela de '),$marco,1,'L');
$pdf->Cell(200,5,utf8_decode('          manejo.'),$marco,1,'L');
$pdf->Cell(200,5,utf8_decode('      4.	El diploma teórico práctico tiene una vigencia de (1) año y de le, tendrá un costo de renovación de B/80.00'),$marco,1,'L');
$pdf->Cell(200,5,utf8_decode('          el primer año y 100.00 el segundo año en adelante.'),$marco,1,'L');
$pdf->Cell(200,5,utf8_decode('      5.	En caso de que el estudiante colisione el vehículo en la evaluación practica deberá pagar el deducible que '),$marco,1,'L');
$pdf->Cell(200,5,utf8_decode('          es de B/.200.00.'),$marco,1,'L');
$pdf->Cell(200,5,utf8_decode('      6.	La  evaluación practica  consite  en  hacer  un  recorrido  en  el  circuito de manejo, hacer estacionamiento'),$marco,1,'L');
$pdf->Cell(200,5,utf8_decode('          de  frente,  lateral  y de retroceso y de no pasar las pruebas de manejo, deberá pagar un curso de manejo '),$marco,1,'L');
$pdf->Cell(200,5,utf8_decode('          o pagar horas de practica que tiene  un costo de B/20.00.'),$marco,1,'L');
$pdf->Cell(200,5,utf8_decode('      7.	Vestimentas:  Está  prohibido  que  los  estudiantes  asistan  a  las  charlas  teóricas;   Damas:   FALDAS '),$marco,1,'L');
$pdf->Cell(200,5,utf8_decode('          Y  PANTALONES MUY CORTOS Y BLUSAS MUY ESCOTADAS.  Caballeros: PANTALONES CORTOS,'),$marco,1,'L');
$pdf->Cell(200,5,utf8_decode('          CAMISETAS O FRANELAS.'),$marco,1,'L');
$pdf->Cell(200,5,utf8_decode('      8.	Los certificados tienen un periodo de vencimiento de un año (1) año a partir de su elaboración y después'),$marco,1,'L');
$pdf->Cell(200,5,utf8_decode('          de ese  periodo  la validaciòn tendrà un costo de B/50.00. y   deben traer   traer   el '),$marco,1,'L');
$pdf->Cell(200,5,utf8_decode('          CERTIFICADO   FISICAMENTE para poder validarse'),$marco,1,'L');
$pdf->Cell(200,5,utf8_decode('      9.	No se validan CERTIFICADO cuando el estudiante haya ido a SERTRACEN a hacer los tramites y halla '),$marco,1,'L');
$pdf->Cell(200,5,utf8_decode('          reprobado las pruebas.      '),$marco,1,'L');
$pdf->Cell(200,5,utf8_decode('    10.	No se devuelve dinero después de firmar el contrato.  '),$marco,1,'L');
$pdf->Cell(200,25,utf8_decode('     '),$marco,1,'L');
$pdf->Cell(200,5,utf8_decode('   _______________                                                                       ______________________________   '),$marco,1,'L');
$pdf->Cell(200,5,utf8_decode('     ESTUDIANTES                                                                             DIRECTOR/ADMINISTRACIÓN     '),$marco,1,'L');
$pdf->Cell(200,10,utf8_decode(''),$marco,1,'L');

$pdf->SetFont('Arial','',8);
$pdf->Cell(25,5,utf8_decode('Referido por:'),$marco,0,'L');
$pdf->SetFont('Arial','UB',8);
$pdf->Cell(55,5,utf8_decode($estudianteas['ReferidoPor'].'                     '),$marco,0,'L');
$pdf->SetFont('Arial','',8);
$pdf->Cell(22,5,utf8_decode('Atendido por:'),$marco,0,'L');
$pdf->SetFont('Arial','UB',8);
$pdf->Cell(98,5,utf8_decode($estudianteas['AtendidoPor'].'                     '),$marco,1,'L');
$pdf->SetFont('Arial','',8);
$pdf->Cell(200,10,utf8_decode(''),$marco,1,'L');
$pdf->Cell(11,5,utf8_decode('E-mail:'),$marco,0,'L');
$pdf->SetFont('Arial','UB',8);
$pdf->Cell(189,5,utf8_decode($estudianteas['Correo'].'                     '),$marco,1,'L');

$pdf->Output();
?>