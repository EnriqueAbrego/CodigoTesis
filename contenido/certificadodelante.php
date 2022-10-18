<?php
require('fpdf/code128.php'); 
include("../Confi/db.php");
$idid=$_POST["idid"];
$idid1=$_POST["idid1"];
$idid2=$_POST["idid2"];
$diacrea=$_POST["bday"];




$cedulax=$estudianteas['Cedula'];
$TipoContratox=$estudianteas['Contrato'];
$Sucursalx=$estudianteas['Sucursal'];
$Sucursalx=$estudianteas['Sucursal'];

$nombrecompletoc=' ';
if($estudianteas['PrimerNombre']=='NO_INGRESADO'){$nombrecompletoc=$nombrecompletoc.' ';}else{$nombrecompletoc=$nombrecompletoc.' '.$estudianteas['PrimerNombre'];}
if($estudianteas['SegundoNombre']=='NO_INGRESADO'){$nombrecompletoc=$nombrecompletoc.' ';}else{$nombrecompletoc=$nombrecompletoc.' '.$estudianteas['SegundoNombre'];}
if($estudianteas['TercerNombre']=='NO_INGRESADO'){$nombrecompletoc=$nombrecompletoc.' ';}else{$nombrecompletoc=$nombrecompletoc.' '.$estudianteas['TercerNombre'];}
if($estudianteas['PrimerApellido']=='NO_INGRESADO'){$nombrecompletoc=$nombrecompletoc.' ';}else{$nombrecompletoc=$nombrecompletoc.' '.$estudianteas['PrimerApellido'];}
if($estudianteas['SegundoApellido']=='NO_INGRESADO'){$nombrecompletoc=$nombrecompletoc.' ';}else{$nombrecompletoc=$nombrecompletoc.' '.$estudianteas['SegundoApellido'];}
if($estudianteas['ApellidoCasada']=='NO_INGRESADO'){$nombrecompletoc=$nombrecompletoc.' ';}else{$nombrecompletoc=$nombrecompletoc.' '.$estudianteas['ApellidoCasada'];}
$cantidadletras=$nombrecompletoc;
$cantidadletras= strlen($cantidadletras); 


if($Sucursalx=="Esquipula 1")$SucursalCertificado="SUCURSAL SAN ISIDRO";
if($Sucursalx=="Esquipula 2")$SucursalCertificado="SUCURSAL CHILIBRE";
if($Sucursalx=="Esquipula 3")$SucursalCertificado="SUCURSAL ANTÓN";
if($Sucursalx=="Esquipula 4")$SucursalCertificado="SUCURSAL 24 DE DICIEMBRE";

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
if($Categoriasola=="A - C - particular")$Categoriasola="C";
if($Categoriasola=="A - C - D Comercial")$Categoriasola="D";
if($Categoriasola=="A - B - C - Bicicleta - Moto - Particular")$Categoriasola="C";
if($Categoriasola=="A - B - C - D - Bicicleta - Moto - Particular - Comercial")$Categoriasola="D";
if($Categoriasola=="A - B - D - Bicicleta - Moto - Comercial")$Categoriasola="D";
if($Categoriasola=="B - D - Moto - Comercial")$Categoriasola="D";
if($Categoriasola=="C - D - Particular - Comercial")$Categoriasola="D";
if($Categoriasola=="E1 - Taxi")$Categoriasola="E1";
if($Categoriasola=="E2 - Bus colegial")$Categoriasola="E2";
if($Categoriasola=="E3 - Bus")$Categoriasola="E3";
if($Categoriasola=="E1 - E2 - Taxi - Bus colegial")$Categoriasola="E2";
if($Categoriasola=="E1 - E2 - E3 - Taxi - Bus colegial - Bus Grande")$Categoriasola="E3";
if($Categoriasola=="E1 - E2 - E3 - F- Taxi - Bus colegial - Bus Grande - Camion Mas de 10 Ton")$Categoriasola="F";
if($Categoriasola=="E2 - E3 - Bus colegial - Bus Grande")$Categoriasola="E3";
if($Categoriasola=="F - Camion Mas de 10 Ton")$Categoriasola="F";
if($Categoriasola=="F - I -  Camion Mas de 10 Ton - Equipo Pesado")$Categoriasola="I";
if($Categoriasola=="G - Vehiculo Articulado")$Categoriasola="G";
if($Categoriasola=="H - Vehiculo Infamable")$Categoriasola="H";
if($Categoriasola=="I - Equipo Pesado")$Categoriasola="I";

$CategoriaDeLicenciax=$estudianteas['CategoriaDeLicencia'];
if($CategoriaDeLicenciax=="A - Bicicleta")$CategoriaDeLicenciax="A";
if($CategoriaDeLicenciax=="B - Moto (ampliación)")$CategoriaDeLicenciax="B";
if($CategoriaDeLicenciax=="C - Particular (ampliación)")$CategoriaDeLicenciax="C";
if($CategoriaDeLicenciax=="D - Comercial (ampliación)")$CategoriaDeLicenciax="D";
if($CategoriaDeLicenciax=="A - B - Moto")$CategoriaDeLicenciax="A - B";
if($CategoriaDeLicenciax=="A - C - particular")$CategoriaDeLicenciax="A - C";
if($CategoriaDeLicenciax=="A - C - D Comercial")$CategoriaDeLicenciax="A - C - D";
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
if($CategoriaDeLicenciax=="E1 - E2 - E3 - F- Taxi - Bus colegial - Bus Grande - Camion Mas de 10 Ton")$CategoriaDeLicenciax="E1 - E2 - E3 - F";
if($CategoriaDeLicenciax=="E2 - E3 - Bus colegial - Bus Grande")$CategoriaDeLicenciax="E2 -E3";
if($CategoriaDeLicenciax=="F - Camion Mas de 10 Ton")$CategoriaDeLicenciax="F";
if($CategoriaDeLicenciax=="F - I -  Camion Mas de 10 Ton - Equipo Pesado")$CategoriaDeLicenciax="F - I";
if($CategoriaDeLicenciax=="G - Vehiculo Articulado")$CategoriaDeLicenciax="G";
if($CategoriaDeLicenciax=="H - Vehiculo Infamable")$CategoriaDeLicenciax="H";
if($CategoriaDeLicenciax=="I - Equipo Pesado")$CategoriaDeLicenciax="I";


    $horascurso=$estudianteas['CategoriaDeLicencia'];
    if($horascurso=="A - Bicicleta")$horascurso="36";
    if($horascurso=="B - Moto (ampliación)")$horascurso="36";
    if($horascurso=="C - Particular (ampliación)")$horascurso="36";
    if($horascurso=="D - Comercial (ampliación)")$horascurso="36";
    if($horascurso=="A - B - Moto")$horascurso="36";
    if($horascurso=="A - C - particular")$horascurso="36";
    if($horascurso=="A - C - D Comercial")$horascurso="36";
    if($horascurso=="A - B - C - Bicicleta - Moto - Particular")$horascurso="36";
    if($horascurso=="A - B - C - D - Bicicleta - Moto - Particular - Comercial")$horascurso="36";
    if($horascurso=="A - B - D - Bicicleta - Moto - Comercial")$horascurso="36";
    if($horascurso=="B - D - Moto - Comercial")$horascurso="36";
    if($horascurso=="C - D - Particular - Comercial")$horascurso="36";
    if($horascurso=="E1 - Taxi")$horascurso="80";
    if($horascurso=="E2 - Bus colegial")$horascurso="80";
    if($horascurso=="E3 - Bus")$horascurso="80";
    if($horascurso=="E1 - E2 - Taxi - Bus colegial")$horascurso="80";
    if($horascurso=="E1 - E2 - E3 - Taxi - Bus colegial - Bus Grande")$horascurso="80";
    if($horascurso=="E1 - E2 - E3 - F- Taxi - Bus colegial - Bus Grande - Camion Mas de 10 Ton")$horascurso="80";
    if($horascurso=="E2 - E3 - Bus colegial - Bus Grande")$horascurso="80";
    if($horascurso=="F - Camion Mas de 10 Ton")$horascurso="36";
    if($horascurso=="F - I -  Camion Mas de 10 Ton - Equipo Pesado")$horascurso="36";
    if($horascurso=="G - Vehiculo Articulado")$horascurso="36";
    if($horascurso=="H - Vehiculo Infamable")$horascurso="36";
    if($horascurso=="I - Equipo Pesado")$horascurso="36";


$estado="Generado";
$sentenciaSQL=$conexion->prepare("INSERT INTO `certificado` (`Cedula`, `FechaCRea`, `Fechasale`,`Estado`,`IdCliente`,`CodigoText`,`Consecutivo`,`nombre`,`apellido`,`cedulaentrega`,`Sucursal`) VALUES (:cedu,:creado,'AUN_NO_ENTREGADO',:esta,:idliente,:ctext,:nunt,'POR_DEFINIR','POR_DEFINIR','POR_DEFINIR',:Sucursal);");
$sentenciaSQL->bindParam(':cedu',$cedulax);
$sentenciaSQL->bindParam(':creado',$diacrea);
$sentenciaSQL->bindParam(':esta',$estado);
$sentenciaSQL->bindParam(':idliente',$idid);
$sentenciaSQL->bindParam(':nunt',$idid1);
$sentenciaSQL->bindParam(':ctext',$idid2);
$sentenciaSQL->bindParam(':Sucursal',$Sucursalx);
$sentenciaSQL->execute();
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

$NombrePasaportex=$estudianteas['NombrePasaporte'];
$iniciocedula=" ";
if($NombrePasaportex=="blanco")$iniciocedula="CIP";
if($NombrePasaportex!="blanco")$iniciocedula="PAS";

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
if($horascurso==80){
    $pdf->Image('img/pantillacertificadoE.png',5,7.5,270,202.5);
}
else{
    $pdf->Image('img/pantillacertificado.png',5,7.5,270,202.5);
}
$pdf->Image($pic,211,36,40,53,$tipo);
$pdf->Ln();
/////////////// primera linea
$pdf->SetFont('Times','B',19);
$pdf->Cell(2,2,utf8_decode(''),0,1,'R');
$pdf->Cell(5,15,utf8_decode(''),0,0,'R');
$pdf->Cell(185,20,utf8_decode(' '),0,0,'L');
$pdf->SetFont('Times','B',12);
$pdf->Cell(18,20,utf8_decode(' '),0,0,'L');
$pdf->SetFont('Times','B',17);
$pdf->Cell(16,16,utf8_decode($letra),0,0,'C');
$pdf->SetFont('Times','B',14);
$pdf->Cell(5,20,utf8_decode(' '),0,0,'C');
$pdf->Cell(30,16,utf8_decode($idid1),0,1,'L');

/////////////// SEGUNDA LINEA

$pdf->Cell(260,12.4,utf8_decode(''),0,1,'C');

///////////////QUINTA
$pdf->SetFont('Times','B',12);
$pdf->Cell(63,5,utf8_decode(''),0,0,'R');
$pdf->Cell(17,5,utf8_decode($idid2),0,1,'L');

/////////////// SEGUNDA LINEA

$pdf->Cell(260,53,utf8_decode(''),0,1,'C');

///////////////OCTAVA

$pdf->SetFont('Times','B',16);
$pdf->Cell(-10,5,utf8_decode(''),0,0,'C');
$pdf->Cell(280,5,utf8_decode($SucursalCertificado),0,1,'C');
/////////////// SEGUNDA LINEA

$pdf->Cell(260,10,utf8_decode(''),0,1,'C');

///////////////DECIMA
if($cantidadletras<=40){
    $pdf->SetFont('Times','B',20);  
}
if($cantidadletras>=50){
    $pdf->SetFont('Times','B',15);  
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
$pdf->Cell(280,11,utf8_decode('A:'.$nombrecompletoc),0,1,'C');
///////////////UNDECIMA
$pdf->SetFont('Times','B',16);
$pdf->Cell(-10,5,utf8_decode(''),0,0,'C');
$pdf->Cell(280,12,utf8_decode($iniciocedula.': '.$cedulax),0,1,'C');
///////////////DUODECIMA
$pdf->SetFont('Times','B',16);
$pdf->Cell(260,1.5,utf8_decode(''),0,1,'C');
$pdf->Cell(132,8,utf8_decode(' '),0,0,'R');
$pdf->SetFont('Times','B',20);
$pdf->Cell(74,5,utf8_decode($TipoDeCursox),0,1,'C');

///////////////treceava
$pdf->SetFont('Times','B',16);
$pdf->Cell(87,8,utf8_decode(''),0,0,'R');
$pdf->SetFont('Times','B',16);
$pdf->Cell(36,8,utf8_decode($CategoriaDeLicenciax),0,0,'C');
$pdf->SetFont('Times','B',16);
$pdf->Cell(50,8,utf8_decode(' '),0,0,'C');
$pdf->SetFont('Times','B',16);
$pdf->Cell(32,8,utf8_decode($horascurso.' horas'),0,1,'C');

///////////////dieciceisava
$pdf->SetFont('Times','B',16);
$pdf->Cell(106,10,utf8_decode(''),0,1,'L');
$pdf->Cell(154,5,utf8_decode(''),0,0,'C');
$pdf->Cell(68,8,utf8_decode($fecha),0,1,'C');


///////////////diecicieteava
$pdf->Output();
?>