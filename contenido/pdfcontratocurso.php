<?php
include("../Confi/db.php");




$fechaf=$estudianteas['Fecha'];
$fechaf=obtenerFechaEnLetra($fechaf);
function obtenerFechaEnLetra($fechaf){
    $num = date("j", strtotime($fechaf));
    $anno = date("Y", strtotime($fechaf));
    $mes = date("m", strtotime($fechaf));;
    return $num.'-'.$mes.'-'.$anno;
}



$cambio=' ';
$manual=' ';
if($estudianteas['TipoDeAuto']=='CAMBIO'){$cambio='X';}
if($estudianteas['TipoDeAuto']=='AUTOMATICO'){$manual='X';}


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
$pdf->Cell(200,5,utf8_decode('CONTRATO DE CURSO DE MANEJO'),0,1,'L');
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


$pdf->SetFont('Arial','',8);
$pdf->Cell(23,10,utf8_decode('TIPO DE AUTO:'),$marco,0,'L');

$pdf->SetFont('Arial','B',8);
$pdf->Cell(13,10,utf8_decode('Cambio:'),$marco,0,'L');
$pdf->SetFont('Arial','B',9);
$pdf->Cell(15,7,utf8_decode($cambio),1,0,'C');

$pdf->SetFont('Arial','B',8);
$pdf->Cell(18,10,utf8_decode('Automatico:'),$marco,0,'L');
$pdf->SetFont('Arial','B',9);
$pdf->Cell(15,7,utf8_decode($manual),1,0,'C');

$pdf->SetFont('Arial','UB',8);
$pdf->Cell(13,10,utf8_decode(''),$marco,0,'L');

$pdf->SetFont('Arial','',8);
$pdf->Cell(25,10,utf8_decode('Horas de manejo:'),$marco,0,'L');

$pdf->SetFont('Arial','UB',8);
$pdf->Cell(26,10,utf8_decode($estudianteas['HorasDeManejo']),$marco,1,'L');


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
$pdf->Cell(24,10,utf8_decode('Monto a pagar:'),$marco,0,'L');

$pdf->SetFont('Arial','UB',8);
$pdf->Cell(30,10,utf8_decode($abonosc['MontoFactura']),$marco,0,'L');

$pdf->SetFont('Arial','',8);
$pdf->Cell(35,10,utf8_decode('Mat. Estudio Entregado'),$marco,0,'L');

$pdf->SetFont('Arial','UB',8);
$pdf->Cell(30,10,utf8_decode($estudianteas['MatEstudio']),$marco,1,'L');

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
///////////////////tercera linea
$pdf->SetFont('Arial','',11);
$pdf->multicell(200, 4,utf8_decode('Reglas de la escuela de manejo Esquipula: 
1-Los estudiantes que estén matriculados en el curso de manejo y decidan retirarse del curso por cualquier motivo o razón y no hayan terminado sus clases prácticas deberán cancelar la totalidad del curso de manejo practico teórico en el contrato inicial y firmar una nota que excluya a la escuela de ninguna responsabilidad de su retiro para poder retirar su certificado PRACTICO TEORICO.


2-Todo estudiante que hayan programado sus clases practicas deben de ser puntuales a la hora de llegara al circuito y de no asistir a sus clases practicas deben de notificar con una llamada de un día de anticipo a nuestras oficinas(administración) al teléfono (391-2022 y 391-9200)  WhatsApp (6378-5309) explicando el motivo de su cancelación de clases practicas de lo contrario se tomara como clase dada.


3-Los estudiantes den de ser puntiles a la hora de llegada a recibir sus clases prácticas al circuito de manejo, ubicado detrás de la estación delta frente a chivo-chivo, si se retasan o se ausentan y no lo notifican a la administración se dará por clase dada.


4-Los estudiantes deben registrase por lo pautado en su contrato inicial sobre el tipo de vehículo (TRASMISIÓN AUTOMÁTICA O TRASMISIÓN MANUAL) cualquier cambio de vehículo que desee hacer el antes o mientras le impartes las clases practicas deben notificar con una NOTA dirigida a la administración de la Auto Escuela de Manejo Esquipula solicitando el cambio de vehículo y deben esperar una nueva fecha para ser reprogramado nuevamente.


5-Todo estudiante que tenga alguna queja del traite o curso de manejo deben enviar una NOTA a la administración explicando su inconformidad personalmente o por correo electrónico a: escuelaesquipulamilla8@hotmail.com


6-Está prohibido que el instructor practico CHATE O HABLE por teléfono mientras imparte las clases de manejo, de incurrir en esta practica notificarlo con una carta a la administración de la escuela de manejo para tomar correctivos.


7-los contratos de cursos de manejo tiene una duración de un año a partir de la fecha de firma NO se devolverá dinero NI se reprogramara clases practicas si sobrepasa, el tiempo estimado y se tomará como terminación de contrato y exime de ninguna responsabilidad penal o judicial a la Auto Escuela de manejo Esquipula.


8-El certificado tiene un periodo de vencimiento de un (1 año) a partir de su elaboración. La validacion tiene un costo de B/.50.00.


9-Para empezar a dar sus clases de manejo practico debe haber culminado sus charlas teóricas presencial o virtual obligatoriamente.


10-Antes de iniciar las clases practicas deben firmar la hoja de asistencia en el circuito de manejo.


11-Deben exigir a su instructor de manejo que les explique el estacionamiento lateral, de reversa y de frente para que estén diestros a la hora que realicen las pruebas de estacionamiento en sertracen.


12-El diploma será enviado al trámite para que sea registrado, sellado y firmado, una vez el estudiante haya cancelado el tramite con la Auto escuela de manejo Esquipula será devuelto en 8 días hábiles. 


13-En caso de que el estudiante colisione el vehículo deberá pagar el deducible que es de B/. 200.00. (doscientos balboas solamente.)


14-Los pagos del curso de manejo harán en 2(dos) partes: el primer pago se hará al firmar el contrato y el segundo pago se efectuará a la mitad del curso práctico (8 horas) si es de 16 horas y 6 si es de 12 horas y 4 si es de 8 horas prácticas.


15- Los certificados que se deterioren o extravíen en un tiempo no mayor de un año de su elaboración deberán pagar (30.00) por su nueva confección y enviado la autoridad del tránsito y transporte terrestre para que sea llenado y firmado y lo devolverá en un plazo no mayor a quince días.


16-Todos los estudiantes podrán verificar si certificado regreso de la autoridad de transito y trasporte terrestre en nuestra pagina web. www.escuelaesquipula.com ingresando su cedula o pasaporte.


17-Para poder matricularse en la auto Escuela de Manejo Esquipulas deberán presentar su Cedula Vigente si es panameño y si es extranjero el pasaporte vigente y carnet de migración vigente y si es menor de edad el certificado de nacimiento.


18-Cuando llueve muy fuerte se suspenderá la clase práctica devido a la poca visibilidad y se reprograma.


19-Las duraciones de las horas de clases practicas son de 50 minutos y hora deben concluir en un periodo máximo de un mes, de lo contrario no seremos responsables de la disponibilidad de horarios para que terminen sus clases.


20-No comer dentro del vehículo ni tirar las puestas duro, respetar y acatar todas las instrucciones del instructor y si tiene alguna inconformidad notifíquelo a la administración. 
Normas para que los estudiantes puedan ser sacados las dos ultimas horas de practica a la calle debe mostrar lo siguiente:
1-CONTROL Y DOMINIO DEL VEHICULO-
2-RESPETO A LAS REGLAS Y SEÑALES DE TRANSITO.
3-RESPETAR Y OBEDECER LAS INDICACIONES DEL INSTRUCTOR DE MANEJO.
4-CONDUCIR POR EL CARRIL DERECHO.
5-CONUCIR A BAJA VELOCIDAD (NO MAYOR A 50KM/H).
6-NO PODRA NI HABLAR NI CHATEAR POR TELEFONO MIENTRAS CONDUCE.
7-NO COMER DENTRO DEL VEHICULO.
8-DEBE MANTENER EL ORDEN EN EL CARRIL DERECHO Y SOLO REBASARA SI ES NECESARIO Y CON LA APROBACION DEL INSTRUCTOR.
9-DEBE GUARDAR COMO MINIMO 10 METROS DE DISTANCIA DEL VEHICULO QUE VA ADELANTE.
10-DE SENTIRSE “NO ACTO” POR CUALQUEIR MOTIVO (ENFERMEDAD, NERVIOSISMO, ESTRÉS, FALTA DE CONFIANZA, ETC) ARA SU SALIDA A LA CALLE NOTIFIQUELO A SU INSTRUCTOR INMEDIATAMENTE ANTES DE SALIR.
21-Normas de bioseguridad para los estudiantes
        1-EL USO OBLIGATORIO DE LA MASCARILLA (NO PUEDE SER DE TELE).
        2-SI TIENE SINSTOMAS COMO (FIEBRE, DOLOR DE CABEZA, GARGANTA, MALESTAR EN EL 
        CUERPO) AVISAR A LA ADMINISTRACION. PARA SUSPENDER Y REPROGRAMAR CLASES.
        3-SI DENTRO DE LA BURBUJA FAMILIAR HAY ALGUNO POSITICO CON COVID-19 AVISAR A LA 
        ADMINISTRACION PARA SUSPENDER Y REPROGRAMAR LAS CLASES.
22-NO SE DEVUELVE DINERO DESPUES DE FIRMAR EL CONTRARO.'),0,'L');

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