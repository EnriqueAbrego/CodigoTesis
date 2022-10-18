<?php
require('fpdf/code128.php');
include("../Confi/db.php");
//recepcion de datos de la pantalla de creacion de certificados
$idid=$_POST["idid"];
$idid1=$_POST["idid1"];
$bday=$_POST["bday"];

$bday=obtenerFechaEnLetra($bday);
function obtenerFechaEnLetra($bday){
    $num = date("j", strtotime($bday));
    $anno = date("Y", strtotime($bday));
    $mes = date("m", strtotime($bday));;
    return $num.'-'.$mes.'-'.$anno;
} 

//variables de posision de codigos de barra

$MarcoX=10;
$AnchoCodigo=80;
$AltoCodigo=7;
$Textodebajox=10;
$Textodebajoy=7;
$codigodebarray=41;

//////////////////////////////////LECTURA DE NOMBRE Y APELLIDO Y VALIDACION DE CARACTERES PERMITIDOS PARA CODIGO DE BARRA
include("../Confi/db.php");
$sentenciaSQL=$conexion->prepare("SELECT * FROM nuevocliente1 WHERE ID=:idbusca");
$sentenciaSQL->bindParam('idbusca',$idid);
$sentenciaSQL->execute();
$cbnombres=$sentenciaSQL->fetch(PDO::FETCH_LAZY);

//////////////////valicacion caracter especial en texto primer Nombre
$TectoPrimerNombre=$cbnombres['PrimerNombre'];
$CBPrimerNombre=$TectoPrimerNombre;
$CBCPrimerNombre="";
$primera=1;
$palabra_dividida=str_split($CBPrimerNombre);
for($i=0;$i<count($palabra_dividida);$i++){
    if(utf8_decode($palabra_dividida[$i])=="?")
    {
        if($primera==1){
        $palabra_dividida[$i]="N";
        $primera=2;
        }else{
            $palabra_dividida[$i]="";
            $primera=1;
        }
    }
    $CBCPrimerNombre=$CBCPrimerNombre.$palabra_dividida[$i];
}
//echo $CBCPrimerNombre;

//////////////////valicacion caracter especial en texto Segundo Nombre
$TectoSegundoNombre=$cbnombres['SegundoNombre'];
$CBSegundoNombre=$TectoSegundoNombre;
$CBCSegundoNombre="";
$primera=1;
$palabra_dividida=str_split($CBSegundoNombre);
for($i=0;$i<count($palabra_dividida);$i++){
    if(utf8_decode($palabra_dividida[$i])=="?")
    {
        if($primera==1){
        $palabra_dividida[$i]="N";
        $primera=2;
        }else{
            $palabra_dividida[$i]="";
            $primera=1;
        }
    }
    $CBCSegundoNombre=$CBCSegundoNombre.$palabra_dividida[$i];
}
//echo $CBCSegundoNombre;

//////////////////valicacion caracter especial en texto Tercer Nombre
$TectoTercerNombre=$cbnombres['TercerNombre'];
$CBTercerNombre=$TectoTercerNombre;
$CBCTercerNombre="";
$primera=1;
$palabra_dividida=str_split($CBTercerNombre);
for($i=0;$i<count($palabra_dividida);$i++){
    if(utf8_decode($palabra_dividida[$i])=="?")
    {
        if($primera==1){
        $palabra_dividida[$i]="N";
        $primera=2;
        }else{
            $palabra_dividida[$i]="";
            $primera=1;
        }
    }
    $CBCTercerNombre=$CBCTercerNombre.$palabra_dividida[$i];
}
//echo $CBCTercerNombre;


//////////////////valicacion caracter especial en texto primer apellido
$TectoPrimerApellido=$cbnombres['PrimerApellido'];
$CBPrimerApellido=$TectoPrimerApellido;
$CBCPrimerApellido="";
$primera=1;
$palabra_dividida=str_split($CBPrimerApellido);
for($i=0;$i<count($palabra_dividida);$i++){
    if(utf8_decode($palabra_dividida[$i])=="?")
    {
        if($primera==1){
        $palabra_dividida[$i]="N";
        $primera=2;
        }else{
            $palabra_dividida[$i]="";
            $primera=1;
        }
    }
    $CBCPrimerApellido=$CBCPrimerApellido.$palabra_dividida[$i];
}
//echo $CBCPrimerApellido;

//////////////////valicacion caracter especial en texto Segundo apellido
$TectoSegundoApellido=$cbnombres['SegundoApellido'];
$CBSegundoApellido=$TectoSegundoApellido;
$CBCSegundoApellido="";
$primera=1;
$palabra_dividida=str_split($CBSegundoApellido);
for($i=0;$i<count($palabra_dividida);$i++){
    if(utf8_decode($palabra_dividida[$i])=="?")
    {
        if($primera==1){
        $palabra_dividida[$i]="N";
        $primera=2;
        }else{
            $palabra_dividida[$i]="";
            $primera=1;
        }
    }
    $CBCSegundoApellido=$CBCSegundoApellido.$palabra_dividida[$i];
}
//echo $CBCSegundoApellido;

//////////////////valicacion caracter especial en texto Tercer apellido
$TectoApellidoCasada=$cbnombres['ApellidoCasada'];
$CBApellidoCasada=$TectoApellidoCasada;
$CBCApellidoCasada="";
$primera=1;
$palabra_dividida=str_split($CBApellidoCasada);
for($i=0;$i<count($palabra_dividida);$i++){
    if(utf8_decode($palabra_dividida[$i])=="?")
    {
        if($primera==1){
        $palabra_dividida[$i]="N";
        $primera=2;
        }else{
            $palabra_dividida[$i]="";
            $primera=1;
        }
    }
    $CBCApellidoCasada=$CBCApellidoCasada.$palabra_dividida[$i];
}
//echo $CBCApellidoCasada;

///consulta informacion del cliente
$sentenciaSQL=$conexion->prepare("SELECT * FROM nuevocliente1 WHERE id=:idbusca");
$sentenciaSQL->bindParam('idbusca',$idid);
$sentenciaSQL->execute();
$estudianteas=$sentenciaSQL->fetch(PDO::FETCH_LAZY);
$uno=$estudianteas['PrimerNombre'];
$dos=$estudianteas['SegundoNombre'];
$tres=$estudianteas['PrimerApellido'];
$cuatro=$estudianteas['SegundoApellido'];
$cinco=$estudianteas['TercerNombre'];
$seis=$estudianteas['ApellidoCasada'];
$cedulax=$estudianteas['Cedula'];



//separacion de categoria de licencia del cliente de su informacion
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





//consulta de imagenes disponible del cliente
$sentenciaSQL=$conexion->prepare("SELECT * FROM imagenes WHERE IdCliente=$idid");
$sentenciaSQL->execute();
$Imagenclientes=$sentenciaSQL->fetch(PDO::FETCH_LAZY);      
//Imagen De Cedula Del Cliente             
if($Imagenclientes['TipoCedula']=='image/jpeg'){
    $tipoc='jpg';
}
if($Imagenclientes['TipoCedula']=='image/png'){
    $tipoc='png';
}
$fotoc='"data:image/png;base64,'.base64_encode($Imagenclientes['ImagenCedula']);
$dataURIc = $fotoc;
$imgc = explode(',',$dataURIc,2)[1];
$picc = 'data://text/plain;base64,'. $imgc;

//Imagen De Licencia Del Cliente   
if($Imagenclientes['TipoLicencia']=='image/jpeg'){
    $tipol='jpg';
}
if($Imagenclientes['TipoLicencia']=='image/png'){
    $tipol='png';
}
$fotol='"data:image/png;base64,'.base64_encode($Imagenclientes['ImagenLicencia']);
$dataURIl = $fotol;
$imgl = explode(',',$dataURIl,2)[1];
$picl = 'data://text/plain;base64,'. $imgl;

//Imagen De Pasaporte Del Cliente   
if($Imagenclientes['TipoPasaporte']=='image/jpeg'){
    $tipop='jpg';
}
if($Imagenclientes['TipoPasaporte']=='image/png'){
    $tipop='png';
}
$fotop='"data:image/png;base64,'.base64_encode($Imagenclientes['ImagenPasaporte']);
$dataURIp = $fotop;
$imgp = explode(',',$dataURIp,2)[1];
$picp = 'data://text/plain;base64,'. $imgp;

//Imagen De Carnet De Migracion Del Cliente   
if($Imagenclientes['TipoCarnet']=='image/jpeg'){
    $tipocr='jpg';
}
if($Imagenclientes['TipoCarnet']=='image/png'){
    $tipocr='png';
}
$fotocr='"data:image/png;base64,'.base64_encode($Imagenclientes['ImagenCarnet']);
$dataURIcr = $fotocr;
$imgcr = explode(',',$dataURIcr,2)[1];
$piccr = 'data://text/plain;base64,'. $imgcr;




$pdf=new PDF_Code128();
$pdf->AddPage('LANDSCAPE',array(220,280));
$pdf->SetFont('Arial','',10);
///////////////////////////////// Encabezado del certificado y colocacion de imagenes del cliente(se añade consecutivo y el numero para un mahor orden)
$pdf->SetFont('Arial','B',13);
$pdf->Cell(45,-10,utf8_decode('Consecutivo'),0,0,'L');
$pdf->SetFont('Times','BU',13);
$pdf->Cell(50,0,utf8_decode(''),0,0,'R');
$pdf->Cell(165,0,utf8_decode('ESTE CERTIFICADO TIENE UNA VIGENCIA DE UN AÑO'),0,1,'C');
$pdf->Cell(95,0,utf8_decode(''),0,0,'R');
$pdf->Cell(165,9,utf8_decode('A PARTIR DE SU FECHA DE ELABORACIÓN'),0,1,'C');
$pdf->SetFont('Arial','',13);
$pdf->Cell(10,0,utf8_decode(''),0,0,'C');
$pdf->Cell(80,-5,utf8_decode($idid1),0,1,'C');
$pdf->Image($picc,105,20,80,50,$tipoc);
$pdf->Image($picl,190,20,80,50,$tipol);
$pdf->Image($picp,130,80,110,60,$tipop);
$pdf->Image($piccr,130,145,110,60,$tipocr);

/////Emcabezado de codigos de barra eh informacion(codigo de barras de consecutivo)
$pdf->Code128(20,7,$idid1,$AnchoCodigo,$AltoCodigo);

//////////////////Segundo emcabezado e informacion (Documento) y codigo de barra
$pdf->SetFont('Arial','B',13);
$pdf->Cell(1,5,utf8_decode(''),0,1,'C');
$pdf->Cell(45,5,utf8_decode('Documento'),0,1,'L');
$pdf->SetFont('Arial','',13);
$pdf->Cell(1,7,utf8_decode(''),0,1,'L');
$pdf->Cell(10,5,utf8_decode(''),0,0,'C');
$pdf->Cell(80,5,utf8_decode($cedulax),0,1,'C');
$pdf->Code128(20,24,$cedulax,$AnchoCodigo,$AltoCodigo);

//////////////////Segundo emcabezado e informacion (Nombre #1)y codigo de barra
$pdf->SetFont('Arial','B',13);
$pdf->Cell(45,5,utf8_decode('Nombre #1'),0,1,'L');
$pdf->SetFont('Arial','',13);
$pdf->Cell(1,$Textodebajoy,utf8_decode(''),0,1,'L');
$pdf->Cell($Textodebajox,5,utf8_decode(''),0,0,'C');
$pdf->Cell(80,5,utf8_decode($uno),0,1,'C');
$pdf->Code128(20,$codigodebarray,$CBCPrimerNombre,$AnchoCodigo,$AltoCodigo);

if($dos!="NO_INGRESADO"){
    $codigodebarray=$codigodebarray+17;
    //////////////////Segundo emcabezado e informacion (Nombre #2)
    $pdf->SetFont('Arial','B',13);
    $pdf->Cell(45,5,utf8_decode('Nombre #2'),0,1,'L');
    $pdf->SetFont('Arial','',13);
    $pdf->Cell(1,7,utf8_decode(''),0,1,'L');
    $pdf->Cell($Textodebajox,5,utf8_decode(''),0,0,'C');
    $pdf->Cell(80,5,utf8_decode($dos),0,1,'C');
    $pdf->Code128(20,$codigodebarray,$CBCSegundoNombre,$AnchoCodigo,$AltoCodigo);
}
if($cinco!="NO_INGRESADO"){
    $codigodebarray=$codigodebarray+17;
    //////////////////Segundo emcabezado e informacion (Nombre #3)
    $pdf->SetFont('Arial','B',13);
    $pdf->Cell(45,5,utf8_decode('Nombre #3'),0,1,'L');
    $pdf->SetFont('Arial','',13);
    $pdf->Cell(1,7,utf8_decode(''),0,1,'L');
    $pdf->Cell($Textodebajox,5,utf8_decode(''),0,0,'C');
    $pdf->Cell(80,5,utf8_decode($cinco),0,1,'C');
    $pdf->Code128(20,$codigodebarray,$CBCTercerNombre,$AnchoCodigo,$AltoCodigo);
}

if($tres!="NO_INGRESADO"){
    $codigodebarray=$codigodebarray+17;
    //////////////////Segundo emcabezado e informacion (Apellido #1)
    $pdf->SetFont('Arial','B',13);
    $pdf->Cell(45,5,utf8_decode('Apellido #1'),0,1,'L');
    $pdf->SetFont('Arial','',13);
    $pdf->Cell(1,7,utf8_decode(''),0,1,'L');
    $pdf->Cell($Textodebajox,5,utf8_decode(''),0,0,'C');
    $pdf->Cell(80,5,utf8_decode($tres),0,1,'C');
    $pdf->Code128(20,$codigodebarray,$CBCPrimerApellido,$AnchoCodigo,$AltoCodigo);
}
if($cuatro!="NO_INGRESADO"){
    $codigodebarray=$codigodebarray+17;
    //////////////////Segundo emcabezado e informacion (Apellido #2)
    $pdf->SetFont('Arial','B',13);
    $pdf->Cell(45,5,utf8_decode('Apellido #2'),0,1,'L');
    $pdf->SetFont('Arial','',13);
    $pdf->Cell(1,7,utf8_decode(''),0,1,'L');
    $pdf->Cell($Textodebajox,5,utf8_decode(''),0,0,'C');
    $pdf->Cell(80,5,utf8_decode($cuatro),0,1,'C');
    $pdf->Code128(20,$codigodebarray,$CBCSegundoApellido,$AnchoCodigo,$AltoCodigo);
}
if($seis!="NO_INGRESADO"){
    $codigodebarray=$codigodebarray+17;
    //////////////////Segundo emcabezado e informacion (Apellido #3)
    $pdf->SetFont('Arial','B',13);
    $pdf->Cell(45,5,utf8_decode('Apellido #3'),0,1,'L');
    $pdf->SetFont('Arial','',13);
    $pdf->Cell(1,7,utf8_decode(''),0,1,'L');
    $pdf->Cell($Textodebajox,5,utf8_decode(''),0,0,'C');
    $pdf->Cell(80,5,utf8_decode($seis),0,1,'C');
    $pdf->Code128(20,$codigodebarray,$CBCApellidoCasada,$AnchoCodigo,$AltoCodigo);
}

//////////////////Segundo emcabezado e informacion (Tipo)
$codigodebarray=$codigodebarray+17;
$pdf->SetFont('Arial','B',13);
$pdf->Cell(45,5,utf8_decode('Tipo'),0,1,'L');
$pdf->SetFont('Arial','',13);
$pdf->Cell(1,7,utf8_decode(''),0,1,'L');
$pdf->Cell($Textodebajox,5,utf8_decode(''),0,0,'C');
$pdf->Cell(80,5,utf8_decode($CategoriaDeLicenciax),0,1,'C');
$pdf->Code128(20,$codigodebarray,$CategoriaDeLicenciax,$AnchoCodigo,$AltoCodigo);

//////////////////Segundo emcabezado e informacion (Fecha)
$codigodebarray=$codigodebarray+17;
$pdf->SetFont('Arial','B',13);
$pdf->Cell(45,5,utf8_decode('Fecha'),0,1,'L');
$pdf->SetFont('Arial','',13);
$pdf->Cell(1,7,utf8_decode(''),0,1,'L');
$pdf->Cell($Textodebajox,5,utf8_decode(''),0,0,'C');
$pdf->Cell(80,5,utf8_decode($bday),0,1,'C');
$pdf->Code128(20,$codigodebarray,$bday,$AnchoCodigo,$AltoCodigo);



$pdf->Output();

?>