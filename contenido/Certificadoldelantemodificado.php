<?php
require('fpdf/code128.php');

$idid=$_POST["idid"];
$idid1=$_POST["idid1"];
$idid2=$_POST["idid2"];
$diacrea=$_POST["idid3"];




$uno=$estudianteas['PrimerNombre'];
$dos=$estudianteas['SegundoNombre'];
$tres=$estudianteas['PrimerApellido'];
$cuatro=$estudianteas['SegundoApellido'];
$cedulax=$estudianteas['Cedula'];

$fecha=obtenerFechaEnLetra($diacrea);

function obtenerFechaEnLetra($fecha){
    $num = date("j", strtotime($fecha));
    $anno = date("Y", strtotime($fecha));
    $mes = array('enero', 'febrero', 'marzo', 'abril', 'mayo', 'junio', 'julio', 'agosto', 'septiembre', 'octubre', 'noviembre', 'diciembre');
    $mes = $mes[(date('m', strtotime($fecha))*1)-1];
    return $num.' de '.$mes.' del '.$anno;
}



$TipoDeCursox=$estudianteas['TipoDeCurso'];

$Categoriasola=$estudianteas['CategoriaDeLicencia'];
if($Categoriasola=="A - Bicicleta")$Categoriasola="A";
if($Categoriasola=="B - Moto (ampliación)")$Categoriasola="B";
if($Categoriasola=="C - Particular (ampliación)")$Categoriasola="C";
if($Categoriasola=="D - Comercial (ampliación)")$Categoriasola="D";
if($Categoriasola=="A - B - Moto")$Categoriasola="B";
if($Categoriasola=="A - B - C - Bicicleta - Moto - Particular")$Categoriasola="C";
if($Categoriasola=="A - B - C - D - Bicicleta - Moto - Particular - Comercial")$Categoriasola="D";
if($Categoriasola=="A - B - D - Bicicleta - Moto - Comercial")$Categoriasola="D";
if($Categoriasola=="B - D - Moto - Comercial")$Categoriasola="D";
if($Categoriasola=="E1 - Taxi")$Categoriasola="E1";
if($Categoriasola=="E2 - Bus colegial")$Categoriasola="E2";
if($Categoriasola=="E3 - Bus")$Categoriasola="E3";
if($Categoriasola=="E1 - E2 - Taxi - Bus colegial")$Categoriasola="E2";
if($Categoriasola=="E1 - E2 - E3 - Taxi - Bus colegial - Bus Grande")$Categoriasola="E3";
if($Categoriasola=="E2 - E3 - Bus colegial - Bus Grande")$Categoriasola="E3";
if($Categoriasola=="F - Camion Mas de 10 Ton")$Categoriasola="F";
if($Categoriasola=="G - Vehiculo Articulado")$Categoriasola="G";
if($Categoriasola=="H - Vehiculo Infamable")$Categoriasola="H";
if($Categoriasola=="I - Equipo Pesado")$Categoriasola="I";

$CategoriaDeLicenciax=$estudianteas['CategoriaDeLicencia'];
if($CategoriaDeLicenciax=="A - Bicicleta")$CategoriaDeLicenciax="A";
if($CategoriaDeLicenciax=="B - Moto (ampliación)")$CategoriaDeLicenciax="B";
if($CategoriaDeLicenciax=="C - Particular (ampliación)")$CategoriaDeLicenciax="C";
if($CategoriaDeLicenciax=="D - Comercial (ampliación)")$CategoriaDeLicenciax="D";
if($CategoriaDeLicenciax=="A - B - Moto")$CategoriaDeLicenciax="A - B";
if($CategoriaDeLicenciax=="A - B - C - Bicicleta - Moto - Particular")$CategoriaDeLicenciax="A - B - C";
if($CategoriaDeLicenciax=="A - B - C - D - Bicicleta - Moto - Particular - Comercial")$CategoriaDeLicenciax="A - B - C - D";
if($CategoriaDeLicenciax=="A - B - D - Bicicleta - Moto - Comercial")$CategoriaDeLicenciax="A - B - D";
if($CategoriaDeLicenciax=="B - D - Moto - Comercial")$CategoriaDeLicenciax="B - D";
if($CategoriaDeLicenciax=="E1 - Taxi")$CategoriaDeLicenciax="E1";
if($CategoriaDeLicenciax=="E2 - Bus colegial")$CategoriaDeLicenciax="E2";
if($CategoriaDeLicenciax=="E3 - Bus")$CategoriaDeLicenciax="E3";
if($CategoriaDeLicenciax=="E1 - E2 - Taxi - Bus colegial")$CategoriaDeLicenciax="E1 - E2";
if($CategoriaDeLicenciax=="E1 - E2 - E3 - Taxi - Bus colegial - Bus Grande")$CategoriaDeLicenciax="E1 - E2 - E3";
if($CategoriaDeLicenciax=="E2 - E3 - Bus colegial - Bus Grande")$CategoriaDeLicenciax="E2 -E3";
if($CategoriaDeLicenciax=="F - Camion Mas de 10 Ton")$CategoriaDeLicenciax="F";
if($CategoriaDeLicenciax=="G - Vehiculo Articulado")$CategoriaDeLicenciax="G";
if($CategoriaDeLicenciax=="H - Vehiculo Infamable")$CategoriaDeLicenciax="H";
if($CategoriaDeLicenciax=="I - Equipo Pesado")$CategoriaDeLicenciax="I";

$horascurso=$estudianteas['CategoriaDeLicencia'];
if($horascurso=="A - Bicicleta")$horascurso="36";
if($horascurso=="B - Moto (ampliación)")$horascurso="36";
if($horascurso=="C - Particular (ampliación)")$horascurso="36";
if($horascurso=="D - Comercial (ampliación)")$horascurso="36";
if($horascurso=="A - B - Moto")$horascurso="36";
if($horascurso=="A - B - C - Bicicleta - Moto - Particular")$horascurso="36";
if($horascurso=="A - B - C - D - Bicicleta - Moto - Particular - Comercial")$horascurso="36";
if($horascurso=="A - B - D - Bicicleta - Moto - Comercial")$horascurso="36";
if($horascurso=="B - D - Moto - Comercial")$horascurso="36";
if($horascurso=="E1 - Taxi")$horascurso="80";
if($horascurso=="E2 - Bus colegial")$horascurso="80";
if($horascurso=="E3 - Bus")$horascurso="80";
if($horascurso=="E1 - E2 - Taxi - Bus colegial")$horascurso="80";
if($horascurso=="E1 - E2 - E3 - Taxi - Bus colegial - Bus Grande")$horascurso="80";
if($horascurso=="E2 - E3 - Bus colegial - Bus Grande")$horascurso="80";
if($horascurso=="F - Camion Mas de 10 Ton")$horascurso="36";
if($horascurso=="G - Vehiculo Articulado")$horascurso="36";
if($horascurso=="H - Vehiculo Infamable")$horascurso="36";
if($horascurso=="I - Equipo Pesado")$horascurso="36";

$nombrecompleto=$uno." ".$dos." ".$tres." ".$cuatro;
$cantidadletras=$nombrecompleto;
$cantidadletras= strlen($cantidadletras); 

$letra='"'.$Categoriasola.'"';



$sentenciaSQL=$conexion->prepare("SELECT * FROM imagenes WHERE IdCliente=$idid");
$sentenciaSQL->execute();
$estudianteas=$sentenciaSQL->fetch(PDO::FETCH_LAZY);                   
if($estudianteas['TipoFoto']=='image/jpeg'){
    $tipo='jpg';
}
if($estudianteas['TipoFoto']=='image/png'){
    $tipo='png';
}
$foto='"data:image/png;base64,'.base64_encode($estudianteas['ImagenFoto']);
$dataURI = $foto;
$img = explode(',',$dataURI,2)[1];
$pic = 'data://text/plain;base64,'. $img;

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
$pdf->AddPage('LANDSCAPE',array(220,280));
$pdf->Image('img/marcobien.png',5,5,270,210);
$pdf->Image('img/logoatt.png',10,25,50,35);
$pdf->Image('img/semaforo.png',220,110,30,20);
$pdf->Image('img/rotonda2.png',30,110,30,20);
$pdf->Image('img/esquipulasemaforo.png',130,175,30,30);
$pdf->Image('img/linea.png',160,138,45,0.3);
$pdf->Image('img/linea.png',185,146,31,0.3);
$pdf->Image('img/linea.png',103,146,31,0.3);
$pdf->Image('img/linea.png',160,170.5,50,0.3);
$pdf->Image('img/linea.png',103,146,31,0.3);
$pdf->Image($pic,210,32,40,45,$tipo);
$pdf->Ln();
/////////////// primera linea
$pdf->SetFont('Times','B',19);
$pdf->Cell(5,15,utf8_decode(''),0,0,'R');
$pdf->Cell(185,20,utf8_decode('AUTORIDAD DEL TANSITO Y TRASMPOSTE TERRESTE'),0,0,'L');
$pdf->SetFont('Times','B',14);
$pdf->Cell(15,20,utf8_decode('TIPO'),0,0,'L');
$pdf->SetFont('Times','B',25);
$pdf->Cell(20,20,utf8_decode($letra),0,0,'C');
$pdf->SetFont('Times','B',14);
$pdf->Cell(10,20,utf8_decode('Nº'),0,0,'C');
$pdf->Cell(33,20,utf8_decode($idid1),0,1,'L');

/////////////// SEGUNDA LINEA

$pdf->SetFont('Times','B',14);
$pdf->Cell(-10,5,utf8_decode(''),0,0,'C');
$pdf->Cell(280,0,utf8_decode('RESUELTO Nº 380'),0,1,'C');

///////////////Cuarta
$pdf->SetFont('Times','B',10);
$pdf->Cell(45,13,utf8_decode(''),0,0,'R');
$pdf->Cell(35,13,utf8_decode('CODIGO TEXT'),0,0,'c');
$pdf->SetFont('Times','B',14);
$pdf->Cell(100,13,utf8_decode('(4 de Diciembre de 2020)'),0,1,'C');
///////////////QUINTA
$pdf->SetFont('Times','B',10);
$pdf->Cell(45,0,utf8_decode(''),0,0,'R');
$pdf->Cell(8,0,utf8_decode('  No.'),0,0,'R');
$pdf->Cell(17,0,utf8_decode($idid2),0,1,'L');
///////////////sexto
$pdf->SetFont('Times','B',21);
$pdf->Cell(300,35,utf8_decode(''),0,1,'R');
$pdf->Cell(-10,5,utf8_decode(''),0,0,'C');
$pdf->Cell(280,8,utf8_decode('AUTO ESCUELA DE MANEJO'),0,1,'C');
///////////////SEPTIMA
$pdf->SetFont('Times','B',27);
$pdf->Cell(-10,5,utf8_decode(''),0,0,'C');
$pdf->Cell(280,8,utf8_decode('ESQUIPULA'),0,1,'C');
///////////////OCTAVA
$pdf->SetFont('Times','B',16);
$pdf->Cell(-10,5,utf8_decode(''),0,0,'C');
$pdf->Cell(280,8,utf8_decode('SUCURSAL SAN ISIDRO'),0,1,'C');
///////////////NOVENA
$pdf->SetFont('Times','B',16);
$pdf->Cell(-10,5,utf8_decode(''),0,0,'C');
$pdf->Cell(280,8,utf8_decode('Otorga el presente Certificado'),0,1,'C');
///////////////DECIMA
if($cantidadletras<=40){
    $pdf->SetFont('Times','B',20);  
}
if($cantidadletras>=50){
    $pdf->SetFont('Times','B',17);  
}
if($cantidadletras>=55){
    $pdf->SetFont('Times','B',16);  
}
if($cantidadletras>=60){
    $pdf->SetFont('Times','B',14);  
}
if($cantidadletras>=65){
    $pdf->SetFont('Times','B',13);  
}
if($cantidadletras>=70){
    $pdf->SetFont('Times','B',12);  
}
if($cantidadletras>=75){
    $pdf->SetFont('Times','B',11);  
}
if($cantidadletras>=80){
    $pdf->SetFont('Times','B',10.5);  
}



$pdf->Cell(-10,5,utf8_decode(''),0,0,'C');
$pdf->Cell(280,11,utf8_decode('A:'.$nombrecompleto),0,1,'C');
///////////////UNDECIMA
$pdf->SetFont('Times','B',16);
$pdf->Cell(-10,5,utf8_decode(''),0,0,'C');
$pdf->Cell(280,11,utf8_decode('CIP: '.$cedulax),0,1,'C');
///////////////DUODECIMA
$pdf->SetFont('Times','B',16);
$pdf->Cell(-10,5,utf8_decode(''),0,0,'C');
$pdf->Cell(161,8,utf8_decode('Por haber aprobado el curso de capacitación:  '),0,0,'R');
$pdf->SetFont('Times','B',16);
$pdf->Cell(43,8,utf8_decode($TipoDeCursox.','),0,0,'C');
$pdf->SetFont('Times','B',16);
$pdf->Cell(61,8,utf8_decode('  para optar'),0,1,'L');

///////////////treceava
$pdf->SetFont('Times','B',16);
$pdf->Cell(-10,5,utf8_decode(''),0,0,'C');
$pdf->Cell(15,8,utf8_decode(''),0,0,'C');
$pdf->Cell(89,8,utf8_decode('por la licencia de conducir tipo '),0,0,'R');
$pdf->SetFont('Times','B',16);
$pdf->Cell(30,8,utf8_decode($CategoriaDeLicenciax.','),0,0,'C');
$pdf->SetFont('Times','B',16);
$pdf->Cell(50,8,utf8_decode(' con una duración de'),0,0,'C');
$pdf->SetFont('Times','B',16);
$pdf->Cell(32,8,utf8_decode($horascurso.' horas'),0,0,'C');
$pdf->SetFont('Times','B',16);
$pdf->Cell(50,8,utf8_decode('en complimiento'),0,1,'L');

///////////////cartorceava
$pdf->SetFont('Times','B',16);
$pdf->Cell(-10,5,utf8_decode(''),0,0,'C');
$pdf->Cell(280,8,utf8_decode('del Decreto Ejecutivo No. 640 de 27 de diciembre de 2006 en su articulo '),0,1,'C');

///////////////quinceava
$pdf->SetFont('Times','B',16);
$pdf->Cell(-10,5,utf8_decode(''),0,0,'C');
$pdf->Cell(280,8,utf8_decode('113, acapite a.'),0,1,'C');

///////////////dieciceisava
$pdf->SetFont('Times','B',16);
$pdf->Cell(-10,5,utf8_decode(''),0,0,'C');
$pdf->Cell(17,8,utf8_decode(''),0,0,'C');
$pdf->Cell(144,8,utf8_decode('Dado en la Republica de Panamá, el día '),0,0,'R');
$pdf->Cell(106,8,utf8_decode($fecha),0,1,'L');


///////////////diecicieteava
$pdf->SetFont('Times','B',16);
$pdf->Cell(15,11,utf8_decode(''),0,1,'C');
$pdf->Cell(15,8,utf8_decode(''),0,0,'C');
$pdf->Cell(110,0,utf8_decode('________________________'),0,0,'C');
$pdf->Cell(30,0,utf8_decode(''),0,0,'C');
$pdf->Cell(110,0,utf8_decode('_________________________________'),0,0,'C');
$pdf->Cell(4,7,utf8_decode(''),0,1,'C');
$pdf->Cell(15,8,utf8_decode(''),0,0,'C');
$pdf->Cell(65,0,utf8_decode('Director'),0,0,'R');
$pdf->Cell(80,0,utf8_decode(''),0,0,'R');
$pdf->Cell(90,0,utf8_decode('Presidenre de la junta directiva'),0,1,'C');
$pdf->Cell(160,5,utf8_decode(''),0,1,'R');
$pdf->Cell(160,0,utf8_decode(''),0,0,'R');
$pdf->Cell(90,0,utf8_decode('Representante legal'),0,1,'C');

$pdf->Output();/* */
?>