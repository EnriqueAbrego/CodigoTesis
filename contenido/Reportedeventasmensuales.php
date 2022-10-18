<?php
$idid=$_POST["bday1"];
$idid2=$_POST["bday2"];
$diosucursal=$_POST["susucursal"];
$diainicia=$idid;
$diafin=$idid2;
$diafin= date("Y-m-d",strtotime($diafin."+ 1 days")); 

$fechatitulo=obtenerFechaEnLetra($diainicia);

function obtenerFechaEnLetra($diainicia){
    $num = date("j", strtotime($diainicia));
    $anno = date("Y", strtotime($diainicia));
    $mes = array('enero', 'febrero', 'marzo', 'abril', 'mayo', 'junio', 'julio', 'agosto', 'septiembre', 'octubre', 'noviembre', 'diciembre');
    $mes = $mes[(date('m', strtotime($diainicia))*1)-1];
    return 'FECHA: '.$mes.' '.$anno;
}
$fechatitulo=strtoupper($fechatitulo);

$fecha=$diainicia;

//inicializacion contador total de tipos de curso del mes
$Tcurso=0;
$Tcerticompleto=0;
$Tcursopractico=0;
$Tvalidacion=0;
$Tduplicado=0;
$Tampliacion=0;
$Tmediocurso=0;
$Tcursocompleto=0;
$Tcancelacion=0;
//fin de inicializacion de contador total de tipos de curso del mes
//inicializacon horas totales de manejo del mes
$Thorademanejo=0;
//fin inicializacion horas totales de manejo

//inicializacion Total Abonos del mes
$TabonoParaCurso=0;
$TabonoaCerti=0;
$TabonoaCursoPractico=0;
$TabonoaValidacion=0;
$TabonoaDuplicado=0;
$TabonoAampliacion=0;
$TabonoaMediocurso=0;
$TabonoaCursoCompleto=0;
//fin inicialisation total abonos del mes

//Inicializacion gastos del cliente del mes
$Tfolleto=0;
$Talquilerauto=0;
$Tvarios=0;
//fin Inicializacion gastos del cliente del mes

//inicializacion monto total del mes segun tipo de pago
$Tefectivo=0;
$Tcheque=0;
$Tclave=0;
$Tyappy=0;
$Tvisa=0;
$Tmastercard=0;
$Tdeposito=0;
$Ttransferencia=0;
$Ttotal=0;

//fin inicializacion monto total del mes segun tipo de pago


if($diosucursal=="esquipula1"){$escuela="Esquipula 1";$sucursal="SUCURSAL SAN ISIDRO";} 
if($diosucursal=="esquipula2"){$escuela="Esquipula 2";$sucursal="SUCURSAL CHILIBRE";} 
if($diosucursal=="esquipula3"){$escuela="Esquipula 3";$sucursal="SUCURSAL  ANTÓN";} 
if($diosucursal=="esquipula4"){$escuela="Esquipula 4";$sucursal="SUCURSAL 24 DE DICIEMBRE";} 




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
$pdf->AddPage('LANDSCAPE',array(220,360));

$pdf->Image('img/logoescuela.png',10,10,60,40);
    $pdf->SetFont('Arial','',11);
    $pdf->Cell(340,10,'REPORTE DE VETAS MENSUALES',0,1,'R');
    $pdf->Cell(340,10,utf8_decode($sucursal),0,1,'R');
    $pdf->Cell(340,10,$fechatitulo,0,1,'R');

    $pdf->SetFont('Arial','I',6);
    $pdf->SetXY(5, 45);
    $pdf->multicell(15, 12,utf8_decode('FECHA'),1,'C');
    $x = $pdf->GetX();
    $y = $pdf->GetY();
    $pdf->SetXY($x+10, $y-12);
    $pdf->multicell(11, 12,utf8_decode('CURSO'),1,'C');
    $x = $pdf->GetX();
    $y = $pdf->GetY();
    $pdf->SetXY($x+21, $y-12);
    $pdf->multicell(11, 4,utf8_decode('ABONO A CURSO'),1,'C');
    $x = $pdf->GetX();
    $y = $pdf->GetY();
    $pdf->SetXY($x+32, $y-12);
    $pdf->multicell(11, 6,utf8_decode('CERTIFICACIÓN'),1,'C');
    $x = $pdf->GetX();
    $y = $pdf->GetY();
    $pdf->SetXY($x+43, $y-12);
    $pdf->multicell(11, 3,utf8_decode('ABONO A CERTIFICACIÓN'),1,'C');
    $x = $pdf->GetX();
    $y = $pdf->GetY();
    $pdf->SetXY($x+54, $y-12);
    $pdf->multicell(11, 4,utf8_decode('CURSO PRACTICO'),1,'C');
    $x = $pdf->GetX();
    $y = $pdf->GetY();
    $pdf->SetXY($x+65, $y-12);
    $pdf->multicell(11, 3,utf8_decode('ABONO CURSO PRACTICO'),1,'C');
    $x = $pdf->GetX();
    $y = $pdf->GetY();
    $pdf->SetXY($x+76, $y-12);
    $pdf->multicell(11, 6,utf8_decode('VALIDACIÓN'),1,'C');
    $x = $pdf->GetX();
    $y = $pdf->GetY();
    $pdf->SetXY($x+87, $y-12);
    $pdf->multicell(11, 3,utf8_decode('ABONO A VALIDACIÓN'),1,'C');
    $x = $pdf->GetX();
    $y = $pdf->GetY();
    $pdf->SetXY($x+98, $y-12);
    $pdf->multicell(11, 6,utf8_decode('DUPLICADO'),1,'C');
    $x = $pdf->GetX();
    $y = $pdf->GetY();
    $pdf->SetXY($x+109, $y-12);
    $pdf->multicell(11, 3,utf8_decode('ABONO A DUPLICADO'),1,'C');
    $x = $pdf->GetX();
    $y = $pdf->GetY();
    $pdf->SetXY($x+120, $y-12);
    $pdf->multicell(11, 6,utf8_decode('AMPLIACIÓN'),1,'C');
    $x = $pdf->GetX();
    $y = $pdf->GetY();
    $pdf->SetXY($x+131, $y-12);
    $pdf->multicell(11, 4,utf8_decode('ABONO AMPLIACIÓN'),1,'C');
    $x = $pdf->GetX();
    $y = $pdf->GetY();
    $pdf->SetXY($x+142, $y-12);
    $pdf->multicell(11, 6,utf8_decode('1/2 CURSO'),1,'C');
    $x = $pdf->GetX();
    $y = $pdf->GetY();
    $pdf->SetXY($x+153, $y-12);
    $pdf->multicell(11, 4,utf8_decode('ABONO A 1/2 CURSO'),1,'C');
    $x = $pdf->GetX();
    $y = $pdf->GetY();
    $pdf->SetXY($x+164, $y-12);
    $pdf->multicell(11, 4,utf8_decode('CURSO COMPLETO'),1,'C');
    $x = $pdf->GetX();
    $y = $pdf->GetY();
    $pdf->SetXY($x+175, $y-12);
    $pdf->multicell(11, 3,utf8_decode('ABONO CURSO COMPLETO'),1,'C');
    $x = $pdf->GetX();
    $y = $pdf->GetY();
    $pdf->SetXY($x+186, $y-12);
    $pdf->multicell(11, 6,utf8_decode('CANCELACIÓN'),1,'C');
    $x = $pdf->GetX();
    $y = $pdf->GetY();
    $pdf->SetXY($x+197, $y-12);
    $pdf->multicell(11, 4,utf8_decode('HORAS DE MANEJO'),1,'C');
    $x = $pdf->GetX();
    $y = $pdf->GetY();
    $pdf->SetXY($x+208, $y-12);
    $pdf->multicell(11, 6,utf8_decode('FOLLETO'),1,'C');
    $x = $pdf->GetX();
    $y = $pdf->GetY();
    $pdf->SetXY($x+219, $y-12);
    $pdf->multicell(11, 4,utf8_decode('ALQUILER DE AUTO'),1,'C');
    $x = $pdf->GetX();
    $y = $pdf->GetY();
    $pdf->SetXY($x+230, $y-12);
    $pdf->multicell(11, 12,utf8_decode('VARIOS'),1,'C');
    $x = $pdf->GetX();
    $y = $pdf->GetY();
    $pdf->SetXY($x+241, $y-12);
    $pdf->multicell(11, 6,utf8_decode('EFECTIVO'),1,'C');
    $x = $pdf->GetX();
    $y = $pdf->GetY();
    $pdf->SetXY($x+252, $y-12);
    $pdf->multicell(11, 6,utf8_decode('CHEQUE'),1,'C');
    $x = $pdf->GetX();
    $y = $pdf->GetY();
    $pdf->SetXY($x+263, $y-12);
    $pdf->multicell(11, 12,utf8_decode('CLAVE'),1,'C');
    $x = $pdf->GetX();
    $y = $pdf->GetY();
    $pdf->SetXY($x+274, $y-12);
    $pdf->multicell(11, 12,utf8_decode('YAPPY'),1,'C');
    $x = $pdf->GetX();
    $y = $pdf->GetY();
    $pdf->SetXY($x+285, $y-12);
    $pdf->multicell(11, 6,utf8_decode('DEPOSITO $ A'),1,'C');
    $x = $pdf->GetX();
    $y = $pdf->GetY();
    $pdf->SetXY($x+296, $y-12);
    $pdf->multicell(11, 12,utf8_decode('VISA'),1,'C');
    $x = $pdf->GetX();
    $y = $pdf->GetY();
    $pdf->SetXY($x+307, $y-12);
    $pdf->multicell(11, 6,utf8_decode('MASTERCARD'),1,'C');
    $x = $pdf->GetX();
    $y = $pdf->GetY();
    $pdf->SetXY($x+318, $y-12);
    $pdf->multicell(11, 6,utf8_decode('TRASFERENCIA'),1,'C');
    $x = $pdf->GetX();
    $y = $pdf->GetY();
    $pdf->SetXY($x+329, $y-12);
    $pdf->multicell(13, 4,utf8_decode('TOTAL DE INGRESOS'),1,'C');




    

$pdf->SetFont('Arial','',5);
$pdf->SetFont('Arial','I',6);
$yini=57;
    while($fecha!=$diafin){
        //inicializacion de acumulado del dia para los diferentes tipos de contrato
        $curso=0;
        $certificacion=0;
        $cursopractico=0;
        $validacion=0;
        $duplicado=0;
        $Ampliacion=0;
        $mediocurso=0;
        $cursocompleto=0;
        $cancelacion=0;
        //fin de inicializacion acumulado del dia para los diferentes tipos de contrato

        //inicializacion contador de horas de manejo del dia
        $horastotalcurso=0;
        //fin inicializacion de horas de manejo del dia

        //inicializacion de acomulado del dia de abonos
        $efectivo=0;
        $cheque=0;
        $clave=0;
        $yappy=0;
        $visa=0;
        $mastercard=0;
        $deposito=0;
        $trasferencia=0;
        $total=0;
        //fin inicializacion de acomulado del dia de abonos

        //inicializacion contador de tipos de contrato
        $AbonaCurso=0;
        $AbonoaCertificacion=0;
        $AbonoaCursopractico=0;
        $AbonoaValidacion=0;
        $AbonoaDuplicado=0;
        $AbonoAmpliacion=0;
        $AbonomedioCurso=0;
        $AbonoaCursocompleto=0;
        //fin inicializacion contador de tipos de contrato

        //inicializacion contador del dia de gastos adicionales
        $Folleto=0;
        $Alquiler=0;
        $Otros=0;
        //fin de inicializacion contador del dia de gastos adicionales

        foreach($facturasclientes as $esquipula) { 
            if($esquipula['Fecha']==$fecha) {
                //validacion de tipo de contrato y contador diario de contratos y total de contador
                if($esquipula['EstadoDeContrado']=="Curso"){$curso=$curso+1; $Tcurso=$Tcurso+1;}
                if($esquipula['EstadoDeContrado']=="Certificacion"){$certificacion=$certificacion+1;$Tcerticompleto=$Tcerticompleto+1;}               
                if($esquipula['EstadoDeContrado']=="Curso practico"){$cursopractico=$cursopractico+1;$Tcursopractico=$Tcursopractico+1;}
                if($esquipula['EstadoDeContrado']=="validacion"){$validacion=$validacion+1;$Tvalidacion=$Tvalidacion+1;}
                if($esquipula['EstadoDeContrado']=="Duplicado"){$duplicado=$duplicado+1;$Tduplicado=$Tduplicado+1;}
                if($esquipula['EstadoDeContrado']=="Ampliacion"){$Ampliacion=$Ampliacion+1;$Tampliacion=$Tampliacion+1;}
                if($esquipula['EstadoDeContrado']=="1/2 Curso"){$mediocurso=$mediocurso+1;$Tmediocurso=$Tmediocurso+1;}
                if($esquipula['EstadoDeContrado']=="Curso Completo"){$cursocompleto=$cursocompleto+1;$Tcursocompleto=$Tcursocompleto+1;}
                if($esquipula['EstadoDeContrado']=="Cancelación"){$cancelacion=$cancelacion+1;$Tcancelacion=$Tcancelacion+1;}




                $horascurso=$esquipula['CategoriaDeLicencia'];
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
                $horastotalcurso=$horastotalcurso+$horascurso;
                $Thorademanejo=$Thorademanejo+$horascurso;

            }  
        }
        foreach($AbonosCliente as $esquipula) { 
            if($esquipula['FechaAbonoUno']==$fecha) {
                $idparaestado=$esquipula['IdCliente'];
                $sentenciaSQL=$conexion->prepare("SELECT * FROM nuevocliente1 WHERE id=:idbusca");
                $sentenciaSQL->bindParam(':idbusca',$idparaestado);
                $sentenciaSQL->execute();
                $esquipulas=$sentenciaSQL->fetch(PDO::FETCH_LAZY);
                if($esquipulas['EstadoDeContrado']=="Curso"){$AbonaCurso=$AbonaCurso+1;$TabonoParaCurso=$TabonoParaCurso+1;}
                if($esquipulas['EstadoDeContrado']=="Certificacion"){$AbonoaCertificacion=$AbonoaCertificacion+1;$TabonoaCerti=$TabonoaCerti+1;}   
                if($esquipulas['EstadoDeContrado']=="Curso practico"){$AbonoaCursopractico=$AbonoaCursopractico+1;$TabonoaCursoPractico=$TabonoaCursoPractico+1;}   
                if($esquipulas['EstadoDeContrado']=="validacion"){$AbonoaValidacion=$AbonoaValidacion+1;$TabonoaValidacion=$TabonoaValidacion+1;}
                if($esquipulas['EstadoDeContrado']=="Duplicado"){$AbonoaDuplicado=$AbonoaDuplicado+1;$TabonoaDuplicado=$TabonoaDuplicado+1;}
                if($esquipulas['EstadoDeContrado']=="Ampliacion"){$AbonoAmpliacion=$AbonoAmpliacion+1;$TabonoAampliacion=$TabonoAampliacion+1;}
                if($esquipulas['EstadoDeContrado']=="1/2 Curso"){$AbonomedioCurso=$AbonomedioCurso+1;$TabonoaMediocurso=$TabonoaMediocurso+1;}
                if($esquipulas['EstadoDeContrado']=="Curso Completo"){$AbonoaCursocompleto=$AbonoaCursocompleto+1;$TabonoaCursoCompleto=$TabonoaCursoCompleto+1;}


                if($esquipula['TipoPagoUno']=="Efectivo"){$efectivo=$efectivo+$esquipula['MontoAbonoUno'];$Tefectivo=$Tefectivo+$esquipula['MontoAbonoUno'];}
                if($esquipula['TipoPagoUno']=="Cheque"){$cheque=$cheque+$esquipula['MontoAbonoUno'];$Tcheque=$Tcheque+$esquipula['MontoAbonoUno'];}
                if($esquipula['TipoPagoUno']=="Clave"){$clave=$clave+$esquipula['MontoAbonoUno'];$Tclave=$Tclave+$esquipula['MontoAbonoUno'];}
                if($esquipula['TipoPagoUno']=="Yappy"){$yappy=$yappy+$esquipula['MontoAbonoUno'];$Tyappy=$Tyappy+$esquipula['MontoAbonoUno'];}
                if($esquipula['TipoPagoUno']=="Visa"){$visa=$visa+$esquipula['MontoAbonoUno'];$Tvisa=$Tvisa+$esquipula['MontoAbonoUno'];}
                if($esquipula['TipoPagoUno']=="Mastercard"){$mastercard=$mastercard+$esquipula['MontoAbonoUno'];$Tmastercard=$Tmastercard+$esquipula['MontoAbonoUno'];}
                if($esquipula['TipoPagoUno']=="Deposito $ a"){$deposito=$deposito+$esquipula['MontoAbonoUno'];$Tdeposito=$Tdeposito+$esquipula['MontoAbonoUno'];}
                if($esquipula['TipoPagoUno']=="Transferencia"){$trasferencia=$trasferencia+$esquipula['MontoAbonoUno'];$Ttransferencia=$Ttransferencia+$esquipula['MontoAbonoUno'];} 
                $total=$total+$esquipula['MontoAbonoUno'];
                $Ttotal=$Ttotal+$esquipula['MontoAbonoUno'];
            }  
        }
        foreach($AbonosCliente as $esquipula) { 
            if($esquipula['FechaAbonoDos']==$fecha) {
                $idparaestado=$esquipula['IdCliente'];
                $sentenciaSQL=$conexion->prepare("SELECT * FROM nuevocliente1 WHERE id=:idbusca");
                $sentenciaSQL->bindParam(':idbusca',$idparaestado);
                $sentenciaSQL->execute();
                $esquipulas=$sentenciaSQL->fetch(PDO::FETCH_LAZY);
                if($esquipulas['EstadoDeContrado']=="Curso"){$AbonaCurso=$AbonaCurso+1;$TabonoParaCurso=$TabonoParaCurso+1;}
                if($esquipulas['EstadoDeContrado']=="Certificacion"){$AbonoaCertificacion=$AbonoaCertificacion+1;$TabonoaCerti=$TabonoaCerti+1;}   
                if($esquipulas['EstadoDeContrado']=="Curso practico"){$AbonoaCursopractico=$AbonoaCursopractico+1;$TabonoaCursoPractico=$TabonoaCursoPractico+1;}   
                if($esquipulas['EstadoDeContrado']=="validacion"){$AbonoaValidacion=$AbonoaValidacion+1;$TabonoaValidacion=$TabonoaValidacion+1;}
                if($esquipulas['EstadoDeContrado']=="Duplicado"){$AbonoaDuplicado=$AbonoaDuplicado+1;$TabonoaDuplicado=$TabonoaDuplicado+1;}
                if($esquipulas['EstadoDeContrado']=="Ampliacion"){$AbonoAmpliacion=$AbonoAmpliacion+1;$TabonoAampliacion=$TabonoAampliacion+1;}
                if($esquipulas['EstadoDeContrado']=="1/2 Curso"){$AbonomedioCurso=$AbonomedioCurso+1;$TabonoaMediocurso=$TabonoaMediocurso+1;}
                if($esquipulas['EstadoDeContrado']=="Curso Completo"){$AbonoaCursocompleto=$AbonoaCursocompleto+1;$TabonoaCursoCompleto=$TabonoaCursoCompleto+1;}

                if($esquipula['TipoPagoDos']=="Efectivo"){$efectivo=$efectivo+$esquipula['MontoAbonoDos'];$Tefectivo=$Tefectivo+$esquipula['MontoAbonoDos'];}
                if($esquipula['TipoPagoDos']=="Cheque"){$cheque=$cheque+$esquipula['MontoAbonoDos'];$Tcheque=$Tcheque+$esquipula['MontoAbonoDos'];}
                if($esquipula['TipoPagoDos']=="Clave"){$clave=$clave+$esquipula['MontoAbonoDos'];$Tclave=$Tclave+$esquipula['MontoAbonoDos'];}
                if($esquipula['TipoPagoDos']=="Yappy"){$yappy=$yappy+$esquipula['MontoAbonoDos'];$Tyappy=$Tyappy+$esquipula['MontoAbonoDos'];}
                if($esquipula['TipoPagoDos']=="Visa"){$visa=$visa+$esquipula['MontoAbonoDos'];$Tvisa=$Tvisa+$esquipula['MontoAbonoDos'];}
                if($esquipula['TipoPagoDos']=="Mastercard"){$mastercard=$mastercard+$esquipula['MontoAbonoDos'];$Tmastercard=$Tmastercard+$esquipula['MontoAbonoDos'];}
                if($esquipula['TipoPagoDos']=="Deposito $ a"){$deposito=$deposito+$esquipula['MontoAbonoDos'];$Tdeposito=$Tdeposito+$esquipula['MontoAbonoDos'];}
                if($esquipula['TipoPagoDos']=="Transferencia"){$trasferencia=$trasferencia+$esquipula['MontoAbonoDos'];$Ttransferencia=$Ttransferencia+$esquipula['MontoAbonoDos'];}
                $total=$total+$esquipula['MontoAbonoDos'];
                $Ttotal=$Ttotal+$esquipula['MontoAbonoDos'];
            }  
        }

        foreach($AbonosCliente as $esquipula) { 
            if($esquipula['FechaAbonoTres']==$fecha) {
                $idparaestado=$esquipula['IdCliente'];
                $sentenciaSQL=$conexion->prepare("SELECT * FROM nuevocliente1 WHERE id=:idbusca");
                $sentenciaSQL->bindParam(':idbusca',$idparaestado);
                $sentenciaSQL->execute();
                $esquipulas=$sentenciaSQL->fetch(PDO::FETCH_LAZY);
                if($esquipulas['EstadoDeContrado']=="Curso"){$AbonaCurso=$AbonaCurso+1;$TabonoParaCurso=$TabonoParaCurso+1;}
                if($esquipulas['EstadoDeContrado']=="Certificacion"){$AbonoaCertificacion=$AbonoaCertificacion+1;$TabonoaCerti=$TabonoaCerti+1;}   
                if($esquipulas['EstadoDeContrado']=="Curso practico"){$AbonoaCursopractico=$AbonoaCursopractico+1;$TabonoaCursoPractico=$TabonoaCursoPractico+1;}   
                if($esquipulas['EstadoDeContrado']=="validacion"){$AbonoaValidacion=$AbonoaValidacion+1;$TabonoaValidacion=$TabonoaValidacion+1;}
                if($esquipulas['EstadoDeContrado']=="Duplicado"){$AbonoaDuplicado=$AbonoaDuplicado+1;$TabonoaDuplicado=$TabonoaDuplicado+1;}
                if($esquipulas['EstadoDeContrado']=="Ampliacion"){$AbonoAmpliacion=$AbonoAmpliacion+1;$TabonoAampliacion=$TabonoAampliacion+1;}
                if($esquipulas['EstadoDeContrado']=="1/2 Curso"){$AbonomedioCurso=$AbonomedioCurso+1;$TabonoaMediocurso=$TabonoaMediocurso+1;}
                if($esquipulas['EstadoDeContrado']=="Curso Completo"){$AbonoaCursocompleto=$AbonoaCursocompleto+1;$TabonoaCursoCompleto=$TabonoaCursoCompleto+1;}

                if($esquipula['TipoPagoTres']=="Efectivo"){$efectivo=$efectivo+$esquipula['MontoAbonoTres'];$Tefectivo=$Tefectivo+$esquipula['MontoAbonoTres'];}
                if($esquipula['TipoPagoTres']=="Cheque"){$cheque=$cheque+$esquipula['MontoAbonoTres'];$Tcheque=$Tcheque+$esquipula['MontoAbonoTres'];}
                if($esquipula['TipoPagoTres']=="Clave"){$clave=$clave+$esquipula['MontoAbonoTres'];$Tclave=$Tclave+$esquipula['MontoAbonoTres'];}
                if($esquipula['TipoPagoTres']=="Yappy"){$yappy=$yappy+$esquipula['MontoAbonoTres'];$Tyappy=$Tyappy+$esquipula['MontoAbonoTres'];}
                if($esquipula['TipoPagoTres']=="Visa"){$visa=$visa+$esquipula['MontoAbonoTres'];$Tvisa=$Tvisa+$esquipula['MontoAbonoTres'];}
                if($esquipula['TipoPagoTres']=="Mastercard"){$mastercard=$mastercard+$esquipula['MontoAbonoTres'];$Tmastercard=$Tmastercard+$esquipula['MontoAbonoTres'];}
                if($esquipula['TipoPagoTres']=="Deposito $ a"){$deposito=$deposito+$esquipula['MontoAbonoTres'];$Tdeposito=$Tdeposito+$esquipula['MontoAbonoTres'];}
                if($esquipula['TipoPagoTres']=="Transferencia"){$trasferencia=$trasferencia+$esquipula['MontoAbonoTres'];$Ttransferencia=$Ttransferencia+$esquipula['MontoAbonoTres'];}
                $total=$total+$esquipula['MontoAbonoTres'];
                $Ttotal=$Ttotal+$esquipula['MontoAbonoTres'];
            }  
        }

        foreach($AbonosCliente as $esquipula) { 
            if($esquipula['FechaAbonoCuatro']==$fecha) {
                $idparaestado=$esquipula['IdCliente'];
                $sentenciaSQL=$conexion->prepare("SELECT * FROM nuevocliente1 WHERE id=:idbusca");
                $sentenciaSQL->bindParam(':idbusca',$idparaestado);
                $sentenciaSQL->execute();
                $esquipulas=$sentenciaSQL->fetch(PDO::FETCH_LAZY);
                if($esquipulas['EstadoDeContrado']=="Curso"){$AbonaCurso=$AbonaCurso+1;$TabonoParaCurso=$TabonoParaCurso+1;}
                if($esquipulas['EstadoDeContrado']=="Certificacion"){$AbonoaCertificacion=$AbonoaCertificacion+1;$TabonoaCerti=$TabonoaCerti+1;}   
                if($esquipulas['EstadoDeContrado']=="Curso practico"){$AbonoaCursopractico=$AbonoaCursopractico+1;$TabonoaCursoPractico=$TabonoaCursoPractico+1;}   
                if($esquipulas['EstadoDeContrado']=="validacion"){$AbonoaValidacion=$AbonoaValidacion+1;$TabonoaValidacion=$TabonoaValidacion+1;}
                if($esquipulas['EstadoDeContrado']=="Duplicado"){$AbonoaDuplicado=$AbonoaDuplicado+1;$TabonoaDuplicado=$TabonoaDuplicado+1;}
                if($esquipulas['EstadoDeContrado']=="Ampliacion"){$AbonoAmpliacion=$AbonoAmpliacion+1;$TabonoAampliacion=$TabonoAampliacion+1;}
                if($esquipulas['EstadoDeContrado']=="1/2 Curso"){$AbonomedioCurso=$AbonomedioCurso+1;$TabonoaMediocurso=$TabonoaMediocurso+1;}
                if($esquipulas['EstadoDeContrado']=="Curso Completo"){$AbonoaCursocompleto=$AbonoaCursocompleto+1;$TabonoaCursoCompleto=$TabonoaCursoCompleto+1;}

                if($esquipula['TipoPagoCuatro']=="Efectivo"){$efectivo=$efectivo+$esquipula['MontoAbonoCuatro'];$Tefectivo=$Tefectivo+$esquipula['MontoAbonoCuatro'];}
                if($esquipula['TipoPagoCuatro']=="Cheque"){$cheque=$cheque+$esquipula['MontoAbonoCuatro'];$Tcheque=$Tcheque+$esquipula['MontoAbonoCuatro'];}
                if($esquipula['TipoPagoCuatro']=="Clave"){$clave=$clave+$esquipula['MontoAbonoCuatro'];$Tclave=$Tclave+$esquipula['MontoAbonoCuatro'];}
                if($esquipula['TipoPagoCuatro']=="Yappy"){$yappy=$yappy+$esquipula['MontoAbonoCuatro'];$Tyappy=$Tyappy+$esquipula['MontoAbonoCuatro'];}
                if($esquipula['TipoPagoCuatro']=="Visa"){$visa=$visa+$esquipula['MontoAbonoCuatro'];$Tvisa=$Tvisa+$esquipula['MontoAbonoCuatro'];}
                if($esquipula['TipoPagoCuatro']=="Mastercard"){$mastercard=$mastercard+$esquipula['MontoAbonoCuatro'];$Tmastercard=$Tmastercard+$esquipula['MontoAbonoCuatro'];}
                if($esquipula['TipoPagoCuatro']=="Deposito $ a"){$deposito=$deposito+$esquipula['MontoAbonoCuatro'];$Tdeposito=$Tdeposito+$esquipula['MontoAbonoCuatro'];}
                if($esquipula['TipoPagoCuatro']=="Transferencia"){$trasferencia=$trasferencia+$esquipula['MontoAbonoCuatro'];$Ttransferencia=$Ttransferencia+$esquipula['MontoAbonoCuatro'];}
                $total=$total+$esquipula['MontoAbonoCuatro'];
                $Ttotal=$Ttotal+$esquipula['MontoAbonoCuatro'];
            }  
        }
        foreach($facturasclientesg as $esquipula) { 
            if($esquipula['fecha']==$fecha) {
                if($esquipula['motivo']=="Folleto"){$Folleto=$Folleto+1;$Tfolleto=$Tfolleto+1;}
                if($esquipula['motivo']=="Alquiler de auto"){$Alquiler=$Alquiler+1;$Talquilerauto=$Talquilerauto+1;}
                if($esquipula['motivo']=="Otros"){$Otros=$Otros+1;$Tvarios=$Tvarios+1;}
                if($esquipula['motivo']=="Examen Medico"){$Otros=$Otros+1;$Tvarios=$Tvarios+1;}


                if($esquipula['Tipopago']=="Efectivo"){$efectivo=$efectivo+$esquipula['abono'];$Tefectivo=$Tefectivo+$esquipula['abono'];}
                if($esquipula['Tipopago']=="Cheque"){$cheque=$cheque+$esquipula['abono'];$Tcheque=$Tcheque+$esquipula['abono'];}
                if($esquipula['Tipopago']=="Clave"){$clave=$clave+$esquipula['abono'];$Tclave=$Tclave+$esquipula['abono'];}
                if($esquipula['Tipopago']=="Yappy"){$yappy=$yappy+$esquipula['abono'];$Tyappy=$Tyappy+$esquipula['abono'];}
                if($esquipula['Tipopago']=="Visa"){$visa=$visa+$esquipula['abono'];$Tvisa=$Tvisa+$esquipula['abono'];}
                if($esquipula['Tipopago']=="Mastercard"){$mastercard=$mastercard+$esquipula['abono'];$Tmastercard=$Tmastercard+$esquipula['abono'];}
                if($esquipula['Tipopago']=="Deposito $ a"){$deposito=$deposito+$esquipula['abono'];$Tdeposito=$Tdeposito+$esquipula['abono'];}
                if($esquipula['Tipopago']=="Transferencia"){$trasferencia=$trasferencia+$esquipula['abono'];$Ttransferencia=$Ttransferencia+$esquipula['abono'];}
                $total=$total+$esquipula['abono'];
                $Ttotal=$Ttotal+$esquipula['abono'];
            }  
        }
        $pdf->SetXY(5, $yini);
        $pdf->multicell(15, 4,utf8_decode($fecha),1,'C');
        $x = $pdf->GetX();
        $y = $pdf->GetY();
        $pdf->SetXY($x+10, $y-4);
        if($curso!=0){
        $pdf->multicell(11, 4,utf8_decode($curso),1,'C');}
        else{$pdf->multicell(11, 4,utf8_decode(' '),1,'C');}

        $x = $pdf->GetX();
        $y = $pdf->GetY();
        $pdf->SetXY($x+21, $y-4);
        if($AbonaCurso!=0){           
        $pdf->multicell(11, 4,utf8_decode($AbonaCurso),1,'C');}
        else{$pdf->multicell(11, 4,utf8_decode(' '),1,'C');}

        $x = $pdf->GetX();
        $y = $pdf->GetY();
        $pdf->SetXY($x+32, $y-4); 
        if($certificacion!=0){                    
        $pdf->multicell(11, 4,utf8_decode($certificacion),1,'C');}
        else{$pdf->multicell(11, 4,utf8_decode(' '),1,'C');}

        $x = $pdf->GetX();
        $y = $pdf->GetY();
        $pdf->SetXY($x+43, $y-4);
        if($AbonoaCertificacion!=0){  
        $pdf->multicell(11, 4,utf8_decode($AbonoaCertificacion),1,'C');}
        else{$pdf->multicell(11, 4,utf8_decode(' '),1,'C');}

        $x = $pdf->GetX();
        $y = $pdf->GetY();
        $pdf->SetXY($x+54, $y-4);
        if($cursopractico!=0){  
        $pdf->multicell(11, 4,utf8_decode($cursopractico),1,'C');}
        else{$pdf->multicell(11, 4,utf8_decode(' '),1,'C');}

        $x = $pdf->GetX();
        $y = $pdf->GetY();
        $pdf->SetXY($x+65, $y-4);
        if($AbonoaCursopractico!=0){  
        $pdf->multicell(11, 4,utf8_decode($AbonoaCursopractico),1,'C');}
        else{$pdf->multicell(11, 4,utf8_decode(' '),1,'C');}

        $x = $pdf->GetX();
        $y = $pdf->GetY();
        $pdf->SetXY($x+76, $y-4);
        if($validacion!=0){  
        $pdf->multicell(11, 4,utf8_decode($validacion),1,'C');}
        else{$pdf->multicell(11, 4,utf8_decode(' '),1,'C');}

        $x = $pdf->GetX();
        $y = $pdf->GetY();
        $pdf->SetXY($x+87, $y-4);
        if($AbonoaValidacion!=0){  
        $pdf->multicell(11, 4,utf8_decode($AbonoaValidacion),1,'C');}
        else{$pdf->multicell(11, 4,utf8_decode(' '),1,'C');}

        $x = $pdf->GetX();
        $y = $pdf->GetY();
        $pdf->SetXY($x+98, $y-4);
        if($duplicado!=0){  
        $pdf->multicell(11, 4,utf8_decode($duplicado),1,'C');}
        else{$pdf->multicell(11, 4,utf8_decode(' '),1,'C');}

        $x = $pdf->GetX();
        $y = $pdf->GetY();
        $pdf->SetXY($x+109, $y-4);
        if($AbonoaDuplicado!=0){  
        $pdf->multicell(11, 4,utf8_decode($AbonoaDuplicado),1,'C');}
        else{$pdf->multicell(11, 4,utf8_decode(' '),1,'C');}

        $x = $pdf->GetX();
        $y = $pdf->GetY();
        $pdf->SetXY($x+120, $y-4);
        if($Ampliacion!=0){  
        $pdf->multicell(11, 4,utf8_decode($Ampliacion),1,'C');}
        else{$pdf->multicell(11, 4,utf8_decode(' '),1,'C');}

        $x = $pdf->GetX();
        $y = $pdf->GetY();
        $pdf->SetXY($x+131, $y-4);
        if($AbonoAmpliacion!=0){  
        $pdf->multicell(11, 4,utf8_decode($AbonoAmpliacion),1,'C');}
        else{$pdf->multicell(11, 4,utf8_decode(' '),1,'C');}

        $x = $pdf->GetX();
        $y = $pdf->GetY();
        $pdf->SetXY($x+142, $y-4);
        if($mediocurso!=0){  
        $pdf->multicell(11, 4,utf8_decode($mediocurso),1,'C');}
        else{$pdf->multicell(11, 4,utf8_decode(' '),1,'C');}

        $x = $pdf->GetX();
        $y = $pdf->GetY();
        $pdf->SetXY($x+153, $y-4);
        if($AbonomedioCurso!=0){  
        $pdf->multicell(11, 4,utf8_decode($AbonomedioCurso),1,'C');}
        else{$pdf->multicell(11, 4,utf8_decode(' '),1,'C');}

        $x = $pdf->GetX();
        $y = $pdf->GetY();
        $pdf->SetXY($x+164, $y-4);
        if($cursocompleto!=0){  
        $pdf->multicell(11, 4,utf8_decode($cursocompleto),1,'C');}
        else{$pdf->multicell(11, 4,utf8_decode(' '),1,'C');}

        $x = $pdf->GetX();
        $y = $pdf->GetY();
        $pdf->SetXY($x+175, $y-4);
        if($AbonoaCursocompleto!=0){  
        $pdf->multicell(11, 4,utf8_decode($AbonoaCursocompleto),1,'C');}
        else{$pdf->multicell(11, 4,utf8_decode(' '),1,'C');}

        $x = $pdf->GetX();
        $y = $pdf->GetY();
        $pdf->SetXY($x+186, $y-4);
        if($cancelacion!=0){
        $pdf->multicell(11, 4,utf8_decode($cancelacion),1,'C');}
        else{$pdf->multicell(11, 4,utf8_decode(' '),1,'C');}

        $x = $pdf->GetX();
        $y = $pdf->GetY();
        $pdf->SetXY($x+197, $y-4);
        if($horastotalcurso!=0){
        $pdf->multicell(11, 4,utf8_decode($horastotalcurso),1,'C');}
        else{$pdf->multicell(11, 4,utf8_decode(' '),1,'C');}

        $x = $pdf->GetX();
        $y = $pdf->GetY();
        $pdf->SetXY($x+208, $y-4);
        if($Folleto!=0){
        $pdf->multicell(11, 4,utf8_decode($Folleto),1,'C');}
        else{$pdf->multicell(11, 4,utf8_decode(' '),1,'C');}

        $x = $pdf->GetX();
        $y = $pdf->GetY();
        $pdf->SetXY($x+219, $y-4);
        if($Alquiler!=0){
        $pdf->multicell(11, 4,utf8_decode($Alquiler),1,'C');}
        else{$pdf->multicell(11, 4,utf8_decode(' '),1,'C');}

        $x = $pdf->GetX();
        $y = $pdf->GetY();
        $pdf->SetXY($x+230, $y-4);
        if($Otros!=0){
        $pdf->multicell(11, 4,utf8_decode($Otros),1,'C');}
        else{$pdf->multicell(11, 4,utf8_decode(' '),1,'C');}



        
        $x = $pdf->GetX();
        $y = $pdf->GetY();
        $pdf->SetXY($x+241, $y-4);
        $pdf->multicell(11, 4,utf8_decode($efectivo),1,'C');

        $x = $pdf->GetX();
        $y = $pdf->GetY();
        $pdf->SetXY($x+252, $y-4);
        $pdf->multicell(11, 4,utf8_decode($cheque),1,'C');

        $x = $pdf->GetX();
        $y = $pdf->GetY();
        $pdf->SetXY($x+263, $y-4);
        $pdf->multicell(11, 4,utf8_decode($clave),1,'C');

        $x = $pdf->GetX();
        $y = $pdf->GetY();
        $pdf->SetXY($x+274, $y-4);
        $pdf->multicell(11, 4,utf8_decode($yappy),1,'C');

        $x = $pdf->GetX();
        $y = $pdf->GetY();
        $pdf->SetXY($x+285, $y-4);
        $pdf->multicell(11, 4,utf8_decode($deposito),1,'C');

        $x = $pdf->GetX();
        $y = $pdf->GetY();
        $pdf->SetXY($x+296, $y-4);
        $pdf->multicell(11, 4,utf8_decode($visa),1,'C');

        $x = $pdf->GetX();
        $y = $pdf->GetY();
        $pdf->SetXY($x+307, $y-4);
        $pdf->multicell(11, 4,utf8_decode($mastercard),1,'C');

        $x = $pdf->GetX();
        $y = $pdf->GetY();
        $pdf->SetXY($x+318, $y-4);
        $pdf->multicell(11, 4,utf8_decode($trasferencia),1,'C');

        $x = $pdf->GetX();
        $y = $pdf->GetY();
        $pdf->SetXY($x+329, $y-4);
        $pdf->multicell(13, 4,utf8_decode($english_format_number = number_format($total, 2, '.', '')),1,'C');
        $yini=$yini+4;                
        $fecha= date("Y-m-d",strtotime($fecha."+ 1 days"));
    }
    $pdf->SetXY(5, $yini);
        $pdf->multicell(15, 4,utf8_decode('TOTAL'),1,'C');
        $x = $pdf->GetX();
        $y = $pdf->GetY();
        $pdf->SetXY($x+10, $y-4);
        $pdf->multicell(11, 4,utf8_decode($Tcurso),1,'C');
        $x = $pdf->GetX();
        $y = $pdf->GetY();
        $pdf->SetXY($x+21, $y-4);                
        $pdf->multicell(11, 4,utf8_decode($TabonoParaCurso),1,'C');
        $x = $pdf->GetX();
        $y = $pdf->GetY();
        $pdf->SetXY($x+32, $y-4);                
        $pdf->multicell(11, 4,utf8_decode($Tcerticompleto),1,'C');
        $x = $pdf->GetX();
        $y = $pdf->GetY();
        $pdf->SetXY($x+43, $y-4);
        $pdf->multicell(11, 4,utf8_decode($TabonoaCerti),1,'C');
        $x = $pdf->GetX();
        $y = $pdf->GetY();
        $pdf->SetXY($x+54, $y-4);
        $pdf->multicell(11, 4,utf8_decode($Tcursopractico),1,'C');
        $x = $pdf->GetX();
        $y = $pdf->GetY();
        $pdf->SetXY($x+65, $y-4);
        $pdf->multicell(11, 4,utf8_decode($TabonoaCursoPractico),1,'C');
        $x = $pdf->GetX();
        $y = $pdf->GetY();
        $pdf->SetXY($x+76, $y-4);
        $pdf->multicell(11, 4,utf8_decode($Tvalidacion),1,'C');
        $x = $pdf->GetX();
        $y = $pdf->GetY();
        $pdf->SetXY($x+87, $y-4);
        $pdf->multicell(11, 4,utf8_decode($TabonoaValidacion),1,'C');
        $x = $pdf->GetX();
        $y = $pdf->GetY();
        $pdf->SetXY($x+98, $y-4);
        $pdf->multicell(11, 4,utf8_decode($Tduplicado),1,'C');
        $x = $pdf->GetX();
        $y = $pdf->GetY();
        $pdf->SetXY($x+109, $y-4);
        $pdf->multicell(11, 4,utf8_decode($TabonoaDuplicado),1,'C');
        $x = $pdf->GetX();
        $y = $pdf->GetY();
        $pdf->SetXY($x+120, $y-4);
        $pdf->multicell(11, 4,utf8_decode($Tampliacion),1,'C');
        $x = $pdf->GetX();
        $y = $pdf->GetY();
        $pdf->SetXY($x+131, $y-4);
        $pdf->multicell(11, 4,utf8_decode($TabonoAampliacion),1,'C');
        $x = $pdf->GetX();
        $y = $pdf->GetY();
        $pdf->SetXY($x+142, $y-4);
        $pdf->multicell(11, 4,utf8_decode($Tmediocurso),1,'C');
        $x = $pdf->GetX();
        $y = $pdf->GetY();
        $pdf->SetXY($x+153, $y-4);
        $pdf->multicell(11, 4,utf8_decode($TabonoaMediocurso),1,'C');
        $x = $pdf->GetX();
        $y = $pdf->GetY();
        $pdf->SetXY($x+164, $y-4);
        $pdf->multicell(11, 4,utf8_decode($Tcursocompleto),1,'C');
        $x = $pdf->GetX();
        $y = $pdf->GetY();
        $pdf->SetXY($x+175, $y-4);
        $pdf->multicell(11, 4,utf8_decode($TabonoaCursoCompleto),1,'C');
        $x = $pdf->GetX();
        $y = $pdf->GetY();
        $pdf->SetXY($x+186, $y-4);
        $pdf->multicell(11, 4,utf8_decode($Tcancelacion),1,'C');
        $x = $pdf->GetX();
        $y = $pdf->GetY();
        $pdf->SetXY($x+197, $y-4);
        $pdf->multicell(11, 4,utf8_decode($Thorademanejo),1,'C');
        $x = $pdf->GetX();
        $y = $pdf->GetY();
        $pdf->SetXY($x+208, $y-4);
        $pdf->multicell(11, 4,utf8_decode($Tfolleto),1,'C');
        $x = $pdf->GetX();
        $y = $pdf->GetY();
        $pdf->SetXY($x+219, $y-4);
        $pdf->multicell(11, 4,utf8_decode($Talquilerauto),1,'C');
        $x = $pdf->GetX();
        $y = $pdf->GetY();
        $pdf->SetXY($x+230, $y-4);
        $pdf->multicell(11, 4,utf8_decode($Tvarios),1,'C');
        $x = $pdf->GetX();
        $y = $pdf->GetY();
        $pdf->SetXY($x+241, $y-4);
        $pdf->multicell(11, 4,utf8_decode($Tefectivo),1,'C');

        $x = $pdf->GetX();
        $y = $pdf->GetY();
        $pdf->SetXY($x+252, $y-4);
        $pdf->multicell(11, 4,utf8_decode($Tcheque),1,'C');

        $x = $pdf->GetX();
        $y = $pdf->GetY();
        $pdf->SetXY($x+263, $y-4);
        $pdf->multicell(11, 4,utf8_decode($Tclave),1,'C');

        $x = $pdf->GetX();
        $y = $pdf->GetY();
        $pdf->SetXY($x+274, $y-4);
        $pdf->multicell(11, 4,utf8_decode($Tyappy),1,'C');

        $x = $pdf->GetX();
        $y = $pdf->GetY();
        $pdf->SetXY($x+285, $y-4);
        $pdf->multicell(11, 4,utf8_decode($Tdeposito),1,'C');

        $x = $pdf->GetX();
        $y = $pdf->GetY();
        $pdf->SetXY($x+296, $y-4);
        $pdf->multicell(11, 4,utf8_decode($Tvisa),1,'C');

        $x = $pdf->GetX();
        $y = $pdf->GetY();
        $pdf->SetXY($x+307, $y-4);
        $pdf->multicell(11, 4,utf8_decode($Tmastercard),1,'C');
        
        $x = $pdf->GetX();
        $y = $pdf->GetY();
        $pdf->SetXY($x+318, $y-4);
        $pdf->multicell(11, 4,utf8_decode($Ttransferencia),1,'C');
        $x = $pdf->GetX();
        $y = $pdf->GetY();
        $pdf->SetXY($x+329, $y-4);
        $pdf->multicell(13, 4,utf8_decode($english_format_number = number_format($Ttotal, 2, '.', '')),1,'C');


/* */
$pdf->Output();
?>