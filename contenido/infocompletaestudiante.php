<?php
    //Recepcion de datos del formulario
    $idid=$_POST["idid"];
    $accion=(isset($_POST['accion']))?$_POST['accion']:"";
    //Recepcion de datos desde fecha hasta tipo de curso
    
    $bdayq=(isset($_POST['bday']))?$_POST['bday']:"";
    $bdayq=obtenerFechaEnLetrados($bdayq);

    $edadq=(isset($_POST['edad']))?$_POST['edad']:"";

    $Estadodecontratoq=(isset($_POST['Estadodecontrato']))?$_POST['Estadodecontrato']:"";

    $tiposangresq=(isset($_POST['tiposangres']))?$_POST['tiposangres']:"";

    $tiqueteEntregadosq=(isset($_POST['tiqueteEntregados']))?$_POST['tiqueteEntregados']:"";

    $categoriaq=(isset($_POST['categoria']))?$_POST['categoria']:"";

    $TipodeCursoq=(isset($_POST['TipodeCurso']))?$_POST['TipodeCurso']:"";

    //Recepcion de datos desde fecha hasta tipo de curso
   
    $lugartrabajosq=(isset($_POST['lugartrabajos']))?$_POST['lugartrabajos']:"";

    $ocupacionsq=(isset($_POST['ocupacions']))?$_POST['ocupacions']:"";
         
    $telcasasq=(isset($_POST['telcasas']))?$_POST['telcasas']:"";

    $cularesq=(isset($_POST['culares']))?$_POST['culares']:"";

    $teloficinasq=(isset($_POST['teloficinas']))?$_POST['teloficinas']:"";


    $detallesq=(isset($_POST['detalles']))?$_POST['detalles']:"";

    $direccionesq=(isset($_POST['direcciones']))?$_POST['direcciones']:"";

    $montosq=(isset($_POST['montos']))?$_POST['montos']:"";

    //Recepcion de datos desde abonouno hasta saldo uno
    

    //Recepcion de datos desde Primer nombre hasta observaciones

    
    $prinomq=(isset($_POST['prinom']))?$_POST['prinom']:"";

    $senomq=(isset($_POST['senom']))?$_POST['senom']:"";
    
    $priapeq=(isset($_POST['priape']))?$_POST['priape']:"";

    $seapeq=(isset($_POST['seape']))?$_POST['seape']:"";

    $trenomq=(isset($_POST['trenom']))?$_POST['trenom']:"";

    $treapeq=(isset($_POST['treape']))?$_POST['treape']:"";

    $cedulasq=(isset($_POST['cedulas']))?$_POST['cedulas']:"";

    $referidosq=(isset($_POST['referidos']))?$_POST['referidos']:"";

    $atendidosq=(isset($_POST['atendidos']))?$_POST['atendidos']:"";

    $correosq=(isset($_POST['correos']))?$_POST['correos']:"";

    $observacionesq=(isset($_POST['observaciones']))?$_POST['observaciones']:"";


    //Recepcion de datos especiales para el estado con contrato tipo curso

    $horasmanejoq=(isset($_POST['horasmanejo']))?$_POST['horasmanejo']:"";

    $tipoautoq=(isset($_POST['tipoauto']))?$_POST['tipoauto']:"";

    $MatEstudioq=(isset($_POST['MatEstudio']))?$_POST['MatEstudio']:"";


    //fin de Recepcion de datos especiales para el estado con contrato tipo curso


    //recepcion de datos de abonos de clientes

    ///primer abono
    $Tipodepagounoq=(isset($_POST['Tipodepagouno']))?$_POST['Tipodepagouno']:"";

    $abonosUnoq=(isset($_POST['abonosUno']))?$_POST['abonosUno']:"";

    $saldosUnoq=(isset($_POST['saldosUno']))?$_POST['saldosUno']:"";
    
    $nunChequeUnoq=(isset($_POST['nunChequeUno']))?$_POST['nunChequeUno']:"";

    $bancounoq=(isset($_POST['bancouno']))?$_POST['bancouno']:"";

    $FechadeAbonoUnoq=(isset($_POST['FechadeAbonoUno']))?$_POST['FechadeAbonoUno']:"";

    $FechadeAbonoUnoq=obtenerFechaEnLetrados($FechadeAbonoUnoq);

    //segundo abono

    $TipodepagoDosq=(isset($_POST['TipodepagoDos']))?$_POST['TipodepagoDos']:"";

    $abonosDosq=(isset($_POST['abonosDos']))?$_POST['abonosDos']:"";

    $saldosDosq=(isset($_POST['saldosDos']))?$_POST['saldosDos']:"";
    
    $nunChequeDosq=(isset($_POST['nunChequeDos']))?$_POST['nunChequeDos']:"";

    $bancoDosq=(isset($_POST['bancoDos']))?$_POST['bancoDos']:"";

    $FechadeAbonoDosq=(isset($_POST['FechadeAbonoDos']))?$_POST['FechadeAbonoDos']:"";

    $FechadeAbonoDosq=obtenerFechaEnLetrados($FechadeAbonoDosq);

    //Tercer abono

    $TipodepagoTresq=(isset($_POST['TipodepagoTres']))?$_POST['TipodepagoTres']:"";

    $abonosTresq=(isset($_POST['abonosTres']))?$_POST['abonosTres']:"";

    $saldosTresq=(isset($_POST['saldosTres']))?$_POST['saldosTres']:"";
    
    $nunChequeTresq=(isset($_POST['nunChequeTres']))?$_POST['nunChequeTres']:"";

    $bancoTresq=(isset($_POST['bancoTres']))?$_POST['bancoTres']:"";

    $FechadeAbonoTresq=(isset($_POST['FechadeAbonoTres']))?$_POST['FechadeAbonoTres']:"";

    $FechadeAbonoTresq=obtenerFechaEnLetrados($FechadeAbonoTresq);

    //segundo abono

    $TipodepagoCuatroq=(isset($_POST['TipodepagoCuatro']))?$_POST['TipodepagoCuatro']:"";

    $abonosCuatroq=(isset($_POST['abonosCuatro']))?$_POST['abonosCuatro']:"";

    $saldosCuatroq=(isset($_POST['saldosCuatro']))?$_POST['saldosCuatro']:"";
    
    $nunChequeCuatroq=(isset($_POST['nunChequeCuatro']))?$_POST['nunChequeCuatro']:"";

    $bancoCuatroq=(isset($_POST['bancoCuatro']))?$_POST['bancoCuatro']:"";

    $FechadeAbonoCuatroq=(isset($_POST['FechadeAbonoCuatro']))?$_POST['FechadeAbonoCuatro']:"";

    $FechadeAbonoCuatroq=obtenerFechaEnLetrados($FechadeAbonoCuatroq);
    
    //fin de recepcion de datos de abonos de clientes


    //Rececion de datos para llenar el formulario desde la base de datos
    include("../Confi/db.php");
    $sentenciaSQL=$conexion->prepare("SELECT * FROM nuevocliente1 WHERE id=:idbusca");
    $sentenciaSQL->bindParam('idbusca',$idid);
    $sentenciaSQL->execute();
    $estudianteas=$sentenciaSQL->fetch(PDO::FETCH_LAZY);
    $fechadefacturax=$estudianteas['Fecha'];
    $edadx=$estudianteas['Edad'];
    $EstadoDeContradox=$estudianteas['EstadoDeContrado'];
    $tiposangrex=$estudianteas['TipoSangre'];
    $tiquetedefacturax=$estudianteas['TiqueteEntregado'];
    $CategoriaDeLicenciax=$estudianteas['CategoriaDeLicencia'];
    $TipoDeCursox=$estudianteas['TipoDeCurso'];
    $lugarTrabajox=$estudianteas['LugarDeTrabajo'];
    $ocupacionx=$estudianteas['Ocupacion'];
    $telcasax=$estudianteas['TelCasa'];
    $celularx=$estudianteas['Celular'];
    $teloficinax=$estudianteas['TelOficina'];
    $detallex=$estudianteas['Detalle'];
    $direccionx=$estudianteas['Direccion'];
    $PrimerNombrex=$estudianteas['PrimerNombre'];
    $SegundoNombre=$estudianteas['SegundoNombre'];
    $PrimerApellidox=$estudianteas['PrimerApellido'];
    $SegundoApellidox=$estudianteas['SegundoApellido'];
    $trenonx=$estudianteas['TercerNombre'];
    $treapex=$estudianteas['ApellidoCasada'];
    $correox=$estudianteas['Correo'];
    $cedulax=$estudianteas['Cedula'];
    $referidoporx=$estudianteas['ReferidoPor'];
    $atendidoporx=$estudianteas['AtendidoPor'];
    $observaciondefacturax=$estudianteas['Observaciondefactura'];

    $sucursalx=$estudianteas['Sucursal'];
    $contratox=$estudianteas['Contrato'];
    $horasmanejox=$estudianteas['HorasDeManejo'];
    $tipoautox=$estudianteas['TipoDeAuto'];
    $MatEstudiox=$estudianteas['MatEstudio'];



    $sentenciaSQL=$conexion->prepare("SELECT * FROM registroabonocliente WHERE IdCliente=:idbusca");
    $sentenciaSQL->bindParam('idbusca',$idid);
    $sentenciaSQL->execute();
    $abonos=$sentenciaSQL->fetch(PDO::FETCH_LAZY);

    $montodefacturax=$abonos['MontoFactura'];
    $fechaabonoUno=$abonos['FechaAbonoUno'];
    $TipoDePagoUnox=$abonos['TipoPagoUno'];
    $recdefacturaUnox=$abonos['RecAbonoUno'];
    $abonodefacturaUnox=$abonos['MontoAbonoUno'];
    $saldodefacturaUnox=$abonos['SaldoUno'];
    $numChequeUnox=$abonos['NumChequeUno'];
    $bancoUnox=$abonos['BancoUno'];

    $fechaabonoDos=$abonos['FechaAbonoDos'];
    $TipoDePagoDosx=$abonos['TipoPagoDos'];
    $recdefacturaDosx=$abonos['RecAbonoDos'];
    $abonodefacturaDosx=$abonos['MontoAbonoDos'];
    $saldodefacturaDosx=$abonos['SaldoDos'];
    $numChequeDosx=$abonos['NumChequeDos'];
    $bancoDosx=$abonos['BancoDos'];

    $fechaabonoTres=$abonos['FechaAbonoTres'];
    $TipoDePagoTresx=$abonos['TipoPagoTres'];
    $recdefacturaTresx=$abonos['RecAbonoTres'];
    $abonodefacturaTresx=$abonos['MontoAbonoTres'];
    $saldodefacturaTresx=$abonos['SaldoTres'];
    $numChequeTresx=$abonos['NumChequeTres'];
    $bancoTresx=$abonos['BancoTres'];

    $fechaabonoCuatro=$abonos['FechaAbonoCuatro'];
    $TipoDePagoCuatrox=$abonos['TipoPagoCuatro'];
    $recdefacturaCuatrox=$abonos['RecAbonoCuatro'];
    $abonodefacturaCuatrox=$abonos['MontoAbonoCuatro'];
    $saldodefacturaCuatrox=$abonos['SaldoCuatro'];
    $numChequeCuatrox=$abonos['NumChequeCuatro'];
    $bancoCuatrox=$abonos['BancoCuatro'];


    function obtenerFechaEnLetra($fechadefacturax){
        $num = date("d", strtotime($fechadefacturax));
        $anno = date("Y", strtotime($fechadefacturax));
        $mes = date("m", strtotime($fechadefacturax));;
        return $num.'-'.$mes.'-'.$anno;
    }

    function obtenerFechaEnLetrados($fechadefacturax){
        $num = date("d", strtotime($fechadefacturax));
        $anno = date("Y", strtotime($fechadefacturax));
        $mes = date("m", strtotime($fechadefacturax));;
        return $anno.'-'.$mes.'-'.$num;
    }



?>
<?php
    switch ($accion) {

        case  "Eliminacion":
            {
                try {
                    include("../Confi/db.php");
                    
                    $sentenciaSQL=$conexion->prepare("DELETE FROM nuevocliente1 WHERE id=:idupdate");
                    $sentenciaSQL->bindParam(':idupdate',$idid);
                    $sentenciaSQL->execute();

                    $sentenciaSQL=$conexion->prepare("DELETE FROM registroabonocliente WHERE IdCliente=:idupdate");
                    $sentenciaSQL->bindParam(':idupdate',$idid);
                    $sentenciaSQL->execute();

                    $sentenciaSQL=$conexion->prepare("DELETE FROM imagenes WHERE IdCliente=:idupdate");
                    $sentenciaSQL->bindParam(':idupdate',$idid);
                    $sentenciaSQL->execute();


                    header('location:ConsultaDeClientes.php'); 
                    
                } catch (Exception $ex) {
                    //$txtnombreerror="Error";
                    //echo 'erro';
                }
            }

        case  "CambioCurso":
            {
                try {
                    include("../Confi/db.php");
                    $TipoDeContratoNuevo='Curso';
                    $HorasDeManejoNuevo='10';
                    $TipoDeAutoNuevo='CAMBIO';
                    $MatDeEstudioNuevo='Si';

                    $sentenciaSQL=$conexion->prepare("UPDATE  `nuevocliente1` SET Contrato   =:PNombre WHERE id=:idupdate");
                    $sentenciaSQL->bindParam(':PNombre',$TipoDeContratoNuevo);
                    $sentenciaSQL->bindParam(':idupdate',$idid);
                    $sentenciaSQL->execute();


                    $sentenciaSQL=$conexion->prepare("UPDATE  `nuevocliente1` SET HorasDeManejo   =:PNombre WHERE id=:idupdate");
                    $sentenciaSQL->bindParam(':PNombre',$HorasDeManejoNuevo);
                    $sentenciaSQL->bindParam(':idupdate',$idid);
                    $sentenciaSQL->execute();

                    $sentenciaSQL=$conexion->prepare("UPDATE  `nuevocliente1` SET TipoDeAuto   =:PNombre WHERE id=:idupdate");
                    $sentenciaSQL->bindParam(':PNombre',$TipoDeAutoNuevo);
                    $sentenciaSQL->bindParam(':idupdate',$idid);
                    $sentenciaSQL->execute();

                    $sentenciaSQL=$conexion->prepare("UPDATE  `nuevocliente1` SET MatEstudio   =:PNombre WHERE id=:idupdate");
                    $sentenciaSQL->bindParam(':PNombre',$MatDeEstudioNuevo);
                    $sentenciaSQL->bindParam(':idupdate',$idid);
                    $sentenciaSQL->execute();
                    

                    header('location:ConsultaDeClientes.php'); 
                    
                } catch (Exception $ex) {
                    //$txtnombreerror="Error";
                    //echo 'erro';
                }
            }
        break;

        case  "cambioCertificado":
            {
                try {
                    include("../Confi/db.php");
                    $TipoDeContratoNuevo='Certificacion';
                    $HorasDeManejoNuevo='NO_INGRESADO';
                    $TipoDeAutoNuevo='NO_INGRESADO';
                    $MatDeEstudioNuevo='NO_INGRESADO';

                    $sentenciaSQL=$conexion->prepare("UPDATE  `nuevocliente1` SET Contrato   =:PNombre WHERE id=:idupdate");
                    $sentenciaSQL->bindParam(':PNombre',$TipoDeContratoNuevo);
                    $sentenciaSQL->bindParam(':idupdate',$idid);
                    $sentenciaSQL->execute();


                    $sentenciaSQL=$conexion->prepare("UPDATE  `nuevocliente1` SET HorasDeManejo   =:PNombre WHERE id=:idupdate");
                    $sentenciaSQL->bindParam(':PNombre',$HorasDeManejoNuevo);
                    $sentenciaSQL->bindParam(':idupdate',$idid);
                    $sentenciaSQL->execute();

                    $sentenciaSQL=$conexion->prepare("UPDATE  `nuevocliente1` SET TipoDeAuto   =:PNombre WHERE id=:idupdate");
                    $sentenciaSQL->bindParam(':PNombre',$TipoDeAutoNuevo);
                    $sentenciaSQL->bindParam(':idupdate',$idid);
                    $sentenciaSQL->execute();

                    $sentenciaSQL=$conexion->prepare("UPDATE  `nuevocliente1` SET MatEstudio   =:PNombre WHERE id=:idupdate");
                    $sentenciaSQL->bindParam(':PNombre',$MatDeEstudioNuevo);
                    $sentenciaSQL->bindParam(':idupdate',$idid);
                    $sentenciaSQL->execute();
                    

                    header('location:ConsultaDeClientes.php'); 
                    
                } catch (Exception $ex) {
                    //$txtnombreerror="Error";
                    //echo 'erro';
                }
            }
        break;


        case  "modificar":
            {
            try {
                include("../Confi/db.php");
                
                // Actualizacion desde fehca hasta tipo de curso
                
                $sentenciaSQL=$conexion->prepare("UPDATE  `nuevocliente1` SET Fecha  =:PNombre WHERE id=:idupdate");
                $sentenciaSQL->bindParam(':PNombre',$bdayq);
                $sentenciaSQL->bindParam(':idupdate',$idid);
                $sentenciaSQL->execute();

                $sentenciaSQL=$conexion->prepare("UPDATE  `nuevocliente1` SET Edad   =:PNombre WHERE id=:idupdate");
                $sentenciaSQL->bindParam(':PNombre',$edadq);
                $sentenciaSQL->bindParam(':idupdate',$idid);
                $sentenciaSQL->execute();

                $sentenciaSQL=$conexion->prepare("UPDATE  `nuevocliente1` SET EstadoDeContrado  =:PNombre WHERE id=:idupdate");
                $sentenciaSQL->bindParam(':PNombre',$Estadodecontratoq);
                $sentenciaSQL->bindParam(':idupdate',$idid);
                $sentenciaSQL->execute();

                $sentenciaSQL=$conexion->prepare("UPDATE  `nuevocliente1` SET TipoSangre  =:PNombre WHERE id=:idupdate");
                $sentenciaSQL->bindParam(':PNombre',$tiposangresq);
                $sentenciaSQL->bindParam(':idupdate',$idid);
                $sentenciaSQL->execute();

                $sentenciaSQL=$conexion->prepare("UPDATE  `nuevocliente1` SET TiqueteEntregado  =:PNombre WHERE id=:idupdate");
                $sentenciaSQL->bindParam(':PNombre',$tiqueteEntregadosq);
                $sentenciaSQL->bindParam(':idupdate',$idid);
                $sentenciaSQL->execute();

            
                $sentenciaSQL=$conexion->prepare("UPDATE  `nuevocliente1` SET CategoriaDeLicencia  =:PNombre WHERE id=:idupdate");
                $sentenciaSQL->bindParam(':PNombre',$categoriaq);
                $sentenciaSQL->bindParam(':idupdate',$idid);
                $sentenciaSQL->execute(); 

                $sentenciaSQL=$conexion->prepare("UPDATE  `nuevocliente1` SET TipoDeCurso  =:PNombre WHERE id=:idupdate");
                $sentenciaSQL->bindParam(':PNombre',$TipodeCursoq);
                $sentenciaSQL->bindParam(':idupdate',$idid);
                $sentenciaSQL->execute();

                //Actualizacion desde lugar de trabajo  hasta Direccion
                                
                $sentenciaSQL=$conexion->prepare("UPDATE  `nuevocliente1` SET LugarDeTrabajo  =:PNombre WHERE id=:idupdate");
                $sentenciaSQL->bindParam(':PNombre',$lugartrabajosq);
                $sentenciaSQL->bindParam(':idupdate',$idid);
                $sentenciaSQL->execute();    
                
                $sentenciaSQL=$conexion->prepare("UPDATE  `nuevocliente1` SET Ocupacion   =:PNombre WHERE id=:idupdate");
                $sentenciaSQL->bindParam(':PNombre',$ocupacionsq);
                $sentenciaSQL->bindParam(':idupdate',$idid);
                $sentenciaSQL->execute();               


                $sentenciaSQL=$conexion->prepare("UPDATE  `nuevocliente1` SET TelCasa  =:PNombre WHERE id=:idupdate");
                $sentenciaSQL->bindParam(':PNombre',$telcasasq);
                $sentenciaSQL->bindParam(':idupdate',$idid);
                $sentenciaSQL->execute();
                
                
                $sentenciaSQL=$conexion->prepare("UPDATE  `nuevocliente1` SET Celular   =:PNombre WHERE id=:idupdate");
                $sentenciaSQL->bindParam(':PNombre',$cularesq);
                $sentenciaSQL->bindParam(':idupdate',$idid);
                $sentenciaSQL->execute();
                
                
                $sentenciaSQL=$conexion->prepare("UPDATE  `nuevocliente1` SET TelOficina   =:PNombre WHERE id=:idupdate");
                $sentenciaSQL->bindParam(':PNombre',$teloficinasq);
                $sentenciaSQL->bindParam(':idupdate',$idid);
                $sentenciaSQL->execute();
                
                
                $sentenciaSQL=$conexion->prepare("UPDATE  `nuevocliente1` SET Detalle  =:PNombre WHERE id=:idupdate");
                $sentenciaSQL->bindParam(':PNombre',$detallesq);
                $sentenciaSQL->bindParam(':idupdate',$idid);
                $sentenciaSQL->execute();
                
                
                $sentenciaSQL=$conexion->prepare("UPDATE  `nuevocliente1` SET Direccion =:PNombre WHERE id=:idupdate");
                $sentenciaSQL->bindParam(':PNombre',$direccionesq);
                $sentenciaSQL->bindParam(':idupdate',$idid);
                $sentenciaSQL->execute();   
                
                //Actualizacion desde Primer nomnbre  hasta Observacion

                $sentenciaSQL=$conexion->prepare("UPDATE  `nuevocliente1` SET  PrimerNombre =:PNombre WHERE id=:idupdate");
                $sentenciaSQL->bindParam(':PNombre',$prinomq);
                $sentenciaSQL->bindParam(':idupdate',$idid);
                $sentenciaSQL->execute();

                $sentenciaSQL=$conexion->prepare("UPDATE  `nuevocliente1` SET  SegundoNombre  =:PNombre WHERE id=:idupdate");
                $sentenciaSQL->bindParam(':PNombre',$senomq);
                $sentenciaSQL->bindParam(':idupdate',$idid);
                $sentenciaSQL->execute();

                $sentenciaSQL=$conexion->prepare("UPDATE  `nuevocliente1` SET  PrimerApellido =:PNombre WHERE id=:idupdate");
                $sentenciaSQL->bindParam(':PNombre',$priapeq);
                $sentenciaSQL->bindParam(':idupdate',$idid);
                $sentenciaSQL->execute();

                $sentenciaSQL=$conexion->prepare("UPDATE  `nuevocliente1` SET  SegundoApellido  =:PNombre WHERE id=:idupdate");
                $sentenciaSQL->bindParam(':PNombre',$seapeq);
                $sentenciaSQL->bindParam(':idupdate',$idid);
                $sentenciaSQL->execute();

                $sentenciaSQL=$conexion->prepare("UPDATE  `nuevocliente1` SET  TercerNombre  =:PNombre WHERE id=:idupdate");
                $sentenciaSQL->bindParam(':PNombre',$trenomq);
                $sentenciaSQL->bindParam(':idupdate',$idid);
                $sentenciaSQL->execute();

                $sentenciaSQL=$conexion->prepare("UPDATE  `nuevocliente1` SET  ApellidoCasada =:PNombre WHERE id=:idupdate");
                $sentenciaSQL->bindParam(':PNombre',$treapeq);
                $sentenciaSQL->bindParam(':idupdate',$idid);
                $sentenciaSQL->execute();
                               
                $sentenciaSQL=$conexion->prepare("UPDATE  `nuevocliente1` SET Correo   =:PNombre WHERE id=:idupdate");
                $sentenciaSQL->bindParam(':PNombre',$correosq);
                $sentenciaSQL->bindParam(':idupdate',$idid);
                $sentenciaSQL->execute();

                $sentenciaSQL=$conexion->prepare("UPDATE  `nuevocliente1` SET Cedula  =:PNombre WHERE id=:idupdate");
                $sentenciaSQL->bindParam(':PNombre',$cedulasq);
                $sentenciaSQL->bindParam(':idupdate',$idid);
                $sentenciaSQL->execute();

                $sentenciaSQL=$conexion->prepare("UPDATE  `registroabonocliente` SET CedulaCliente  =:PNombre WHERE id=:idupdate");
                $sentenciaSQL->bindParam(':PNombre',$cedulasq);
                $sentenciaSQL->bindParam(':idupdate',$idid);
                $sentenciaSQL->execute();
                
                
                $sentenciaSQL=$conexion->prepare("UPDATE  `nuevocliente1` SET ReferidoPor   =:PNombre WHERE id=:idupdate");
                $sentenciaSQL->bindParam(':PNombre',$referidosq);
                $sentenciaSQL->bindParam(':idupdate',$idid);
                $sentenciaSQL->execute();
                
                $sentenciaSQL=$conexion->prepare("UPDATE  `nuevocliente1` SET AtendidoPor  =:PNombre WHERE id=:idupdate");
                $sentenciaSQL->bindParam(':PNombre',$atendidosq);
                $sentenciaSQL->bindParam(':idupdate',$idid);
                $sentenciaSQL->execute();   
                
                $sentenciaSQL=$conexion->prepare("UPDATE  `nuevocliente1` SET Observaciondefactura   =:PNombre WHERE id=:idupdate");
                $sentenciaSQL->bindParam(':PNombre',$observacionesq);
                $sentenciaSQL->bindParam(':idupdate',$idid);
                $sentenciaSQL->execute();  
                
                if($contratox=='Curso'){
                
                    $sentenciaSQL=$conexion->prepare("UPDATE  `nuevocliente1` SET HorasDeManejo   =:PNombre WHERE id=:idupdate");
                    $sentenciaSQL->bindParam(':PNombre',$horasmanejoq);
                    $sentenciaSQL->bindParam(':idupdate',$idid);
                    $sentenciaSQL->execute();

                    $sentenciaSQL=$conexion->prepare("UPDATE  `nuevocliente1` SET TipoDeAuto   =:PNombre WHERE id=:idupdate");
                    $sentenciaSQL->bindParam(':PNombre',$tipoautoq);
                    $sentenciaSQL->bindParam(':idupdate',$idid);
                    $sentenciaSQL->execute();

                    $sentenciaSQL=$conexion->prepare("UPDATE  `nuevocliente1` SET MatEstudio   =:PNombre WHERE id=:idupdate");
                    $sentenciaSQL->bindParam(':PNombre',$MatEstudioq);
                    $sentenciaSQL->bindParam(':idupdate',$idid);
                    $sentenciaSQL->execute();

                }

                ////modificaciones a la seccion de abonos

                $sentenciaSQL=$conexion->prepare("UPDATE  `registroabonocliente` SET MontoFactura   =:PNombre WHERE IdCliente=:idupdate");
                $sentenciaSQL->bindParam(':PNombre',$montosq);
                $sentenciaSQL->bindParam(':idupdate',$idid);
                $sentenciaSQL->execute();

                $sentenciaSQL=$conexion->prepare("UPDATE  `registroabonocliente` SET FechaAbonoUno   =:PNombre WHERE IdCliente=:idupdate");
                $sentenciaSQL->bindParam(':PNombre',$FechadeAbonoUnoq);
                $sentenciaSQL->bindParam(':idupdate',$idid);
                $sentenciaSQL->execute();

                $sentenciaSQL=$conexion->prepare("UPDATE  `registroabonocliente` SET MontoAbonoUno   =:PNombre WHERE IdCliente=:idupdate");
                $sentenciaSQL->bindParam(':PNombre',$abonosUnoq);
                $sentenciaSQL->bindParam(':idupdate',$idid);
                $sentenciaSQL->execute();

                $sentenciaSQL=$conexion->prepare("UPDATE  `registroabonocliente` SET SaldoUno   =:PNombre WHERE IdCliente=:idupdate");
                $sentenciaSQL->bindParam(':PNombre',$saldosUnoq);
                $sentenciaSQL->bindParam(':idupdate',$idid);
                $sentenciaSQL->execute();

                $sentenciaSQL=$conexion->prepare("UPDATE  `registroabonocliente` SET TipoPagoUno  =:PNombre WHERE IdCliente=:idupdate");
                $sentenciaSQL->bindParam(':PNombre',$Tipodepagounoq);
                $sentenciaSQL->bindParam(':idupdate',$idid);
                $sentenciaSQL->execute();

                $sentenciaSQL=$conexion->prepare("UPDATE  `registroabonocliente` SET NumChequeUno  =:PNombre WHERE IdCliente=:idupdate");
                $sentenciaSQL->bindParam(':PNombre',$nunChequeUnoq);
                $sentenciaSQL->bindParam(':idupdate',$idid);
                $sentenciaSQL->execute();

                $sentenciaSQL=$conexion->prepare("UPDATE  `registroabonocliente` SET BancoUno   =:PNombre WHERE IdCliente=:idupdate");
                $sentenciaSQL->bindParam(':PNombre',$bancounoq);
                $sentenciaSQL->bindParam(':idupdate',$idid);
                $sentenciaSQL->execute();

                if($TipoDePagoDosx!="0"){    
                    $sentenciaSQL=$conexion->prepare("UPDATE  `registroabonocliente` SET MontoAbonoDos   =:PNombre WHERE IdCliente=:idupdate");
                    $sentenciaSQL->bindParam(':PNombre',$abonosDosq);
                    $sentenciaSQL->bindParam(':idupdate',$idid);
                    $sentenciaSQL->execute();

                    $sentenciaSQL=$conexion->prepare("UPDATE  `registroabonocliente` SET FechaAbonoDos   =:PNombre WHERE IdCliente=:idupdate");
                    $sentenciaSQL->bindParam(':PNombre',$FechadeAbonoDosq);
                    $sentenciaSQL->bindParam(':idupdate',$idid);
                    $sentenciaSQL->execute();
    
                    $sentenciaSQL=$conexion->prepare("UPDATE  `registroabonocliente` SET SaldoDos   =:PNombre WHERE IdCliente=:idupdate");
                    $sentenciaSQL->bindParam(':PNombre',$saldosDosq);
                    $sentenciaSQL->bindParam(':idupdate',$idid);
                    $sentenciaSQL->execute();

                    $sentenciaSQL=$conexion->prepare("UPDATE  `registroabonocliente` SET TipoPagoDos  =:PNombre WHERE IdCliente=:idupdate");
                    $sentenciaSQL->bindParam(':PNombre',$TipodepagoDosq);
                    $sentenciaSQL->bindParam(':idupdate',$idid);
                    $sentenciaSQL->execute();
    
                    $sentenciaSQL=$conexion->prepare("UPDATE  `registroabonocliente` SET NumChequeDos  =:PNombre WHERE IdCliente=:idupdate");
                    $sentenciaSQL->bindParam(':PNombre',$nunChequeDosq);
                    $sentenciaSQL->bindParam(':idupdate',$idid);
                    $sentenciaSQL->execute();
    
                    $sentenciaSQL=$conexion->prepare("UPDATE  `registroabonocliente` SET BancoDos   =:PNombre WHERE IdCliente=:idupdate");
                    $sentenciaSQL->bindParam(':PNombre',$bancoDosq);
                    $sentenciaSQL->bindParam(':idupdate',$idid);
                    $sentenciaSQL->execute();
                }

                if($TipoDePagoTresx!="0"){  
                    $sentenciaSQL=$conexion->prepare("UPDATE  `registroabonocliente` SET MontoAbonoTres   =:PNombre WHERE IdCliente=:idupdate");
                    $sentenciaSQL->bindParam(':PNombre',$abonosTresq);
                    $sentenciaSQL->bindParam(':idupdate',$idid);
                    $sentenciaSQL->execute();

                    $sentenciaSQL=$conexion->prepare("UPDATE  `registroabonocliente` SET FechaAbonoTres   =:PNombre WHERE IdCliente=:idupdate");
                    $sentenciaSQL->bindParam(':PNombre',$FechadeAbonoTresq);
                    $sentenciaSQL->bindParam(':idupdate',$idid);
                    $sentenciaSQL->execute();
    
                    $sentenciaSQL=$conexion->prepare("UPDATE  `registroabonocliente` SET SaldoTres   =:PNombre WHERE IdCliente=:idupdate");
                    $sentenciaSQL->bindParam(':PNombre',$saldosTresq);
                    $sentenciaSQL->bindParam(':idupdate',$idid);
                    $sentenciaSQL->execute();

                    $sentenciaSQL=$conexion->prepare("UPDATE  `registroabonocliente` SET TipoPagoTres  =:PNombre WHERE IdCliente=:idupdate");
                    $sentenciaSQL->bindParam(':PNombre',$TipodepagoTresq);
                    $sentenciaSQL->bindParam(':idupdate',$idid);
                    $sentenciaSQL->execute();
    
                    $sentenciaSQL=$conexion->prepare("UPDATE  `registroabonocliente` SET NumChequeTres  =:PNombre WHERE IdCliente=:idupdate");
                    $sentenciaSQL->bindParam(':PNombre',$nunChequeTresq);
                    $sentenciaSQL->bindParam(':idupdate',$idid);
                    $sentenciaSQL->execute();
    
                    $sentenciaSQL=$conexion->prepare("UPDATE  `registroabonocliente` SET BancoTres   =:PNombre WHERE IdCliente=:idupdate");
                    $sentenciaSQL->bindParam(':PNombre',$bancoTresq);
                    $sentenciaSQL->bindParam(':idupdate',$idid);
                    $sentenciaSQL->execute();
                }
                if($TipoDePagoCuatrox!="0"){    
                    $sentenciaSQL=$conexion->prepare("UPDATE  `registroabonocliente` SET MontoAbonoCuatro   =:PNombre WHERE IdCliente=:idupdate");
                    $sentenciaSQL->bindParam(':PNombre',$abonosCuatroq);
                    $sentenciaSQL->bindParam(':idupdate',$idid);
                    $sentenciaSQL->execute();

                    $sentenciaSQL=$conexion->prepare("UPDATE  `registroabonocliente` SET FechaAbonoCuatro   =:PNombre WHERE IdCliente=:idupdate");
                    $sentenciaSQL->bindParam(':PNombre',$FechadeAbonoCuatroq);
                    $sentenciaSQL->bindParam(':idupdate',$idid);
                    $sentenciaSQL->execute();
    
                    $sentenciaSQL=$conexion->prepare("UPDATE  `registroabonocliente` SET SaldoCuatro   =:PNombre WHERE IdCliente=:idupdate");
                    $sentenciaSQL->bindParam(':PNombre',$saldosCuatroq);
                    $sentenciaSQL->bindParam(':idupdate',$idid);
                    $sentenciaSQL->execute();
    
                    $sentenciaSQL=$conexion->prepare("UPDATE  `registroabonocliente` SET TipoPagoCuatro  =:PNombre WHERE IdCliente=:idupdate");
                    $sentenciaSQL->bindParam(':PNombre',$TipodepagoCuatroq);
                    $sentenciaSQL->bindParam(':idupdate',$idid);
                    $sentenciaSQL->execute();

                    $sentenciaSQL=$conexion->prepare("UPDATE  `registroabonocliente` SET NumChequeCuatro  =:PNombre WHERE IdCliente=:idupdate");
                    $sentenciaSQL->bindParam(':PNombre',$nunChequeCuatroq);
                    $sentenciaSQL->bindParam(':idupdate',$idid);
                    $sentenciaSQL->execute();
    
                    $sentenciaSQL=$conexion->prepare("UPDATE  `registroabonocliente` SET BancoCuatro   =:PNombre WHERE IdCliente=:idupdate");
                    $sentenciaSQL->bindParam(':PNombre',$bancoCuatroq);
                    $sentenciaSQL->bindParam(':idupdate',$idid);
                    $sentenciaSQL->execute();
                }

                ////fin modificaciones a abonos


                header('location:ConsultaDeClientes.php'); 
                //echo "algo";
            } catch (Exception $ex) {
                //$txtnombreerror="Error";
                //echo 'erro';
            }
           
            }
            break;
        case  "foto":{
                try {
                    if (isset($_REQUEST['accion'])) {
                        if (isset($_FILES['fotop']['name'])) {
                            $tipoArchivo = $_FILES['fotop']['type'];
                            $permitido=array("image/png","image/jpeg");
                            if( in_array($tipoArchivo,$permitido) ==false ){
                                $con = mysqli_connect('localhost', 'root', "kxwbSMm95HB67W", "esquipula");
                                $query = "UPDATE `imagenes` SET `NombreFoto` = 'blanco, `ImagenFoto` = '0x89504e470d0a1a0a0000000d494844520000001e000000180806000000ed694dbf000000017352474200aece1ce90000000467414d410000b18f0bfc61050000000970485973000012740000127401de661f780000002949444154484bedcd31010000088030fb97c61678c80a6c3852ac29d6146b8a35c59a624db1e65b0c0bf5e63566350f83420000000049454e44ae426082', `TipoFoto` = 'image/png' WHERE `imagenes`.`IdCliente` = '" . $idid . "';";
                                $res = mysqli_query($con, $query);
                            }else{
                            $nombreArchivo = $_FILES['fotop']['name'];
                            $tamanoArchivo = $_FILES['fotop']['size'];
                            $imagenSubida = fopen($_FILES['fotop']['tmp_name'], 'r');
                            $binariosImagen = fread($imagenSubida, $tamanoArchivo);
                            $con = mysqli_connect('localhost', 'root', "kxwbSMm95HB67W", "esquipula");
                            $binariosImagen = mysqli_escape_string($con, $binariosImagen);
                            $query = "UPDATE `imagenes` SET `NombreFoto` = '" . $nombreArchivo . "', `ImagenFoto` = '" . $binariosImagen . "', `TipoFoto` = '" . $tipoArchivo . "' WHERE `imagenes`.`IdCliente` = '" . $idid . "';";
                            $res = mysqli_query($con, $query);
                            }
                        }
                    }
                    if (isset($_REQUEST['accion'])) {
                        if (isset($_FILES['fotopc']['name'])) {
                            $tipoArchivo = $_FILES['fotopc']['type'];
                            $permitido=array("image/png","image/jpeg");
                            if( in_array($tipoArchivo,$permitido) ==false ){
                                $con = mysqli_connect('localhost', 'root', "kxwbSMm95HB67W", "esquipula");
                                $query = "UPDATE `imagenes` SET `NombreCedula` = 'blanco, `ImagenCedula` = '0x89504e470d0a1a0a0000000d494844520000001e000000180806000000ed694dbf000000017352474200aece1ce90000000467414d410000b18f0bfc61050000000970485973000012740000127401de661f780000002949444154484bedcd31010000088030fb97c61678c80a6c3852ac29d6146b8a35c59a624db1e65b0c0bf5e63566350f83420000000049454e44ae426082', `TipoCedula` = 'image/png' WHERE `imagenes`.`IdCliente` = '" . $idid . "';";
                                $res = mysqli_query($con, $query);
                            }else{
                            $nombreArchivo = $_FILES['fotopc']['name'];
                            $tamanoArchivo = $_FILES['fotopc']['size'];
                            $imagenSubida = fopen($_FILES['fotopc']['tmp_name'], 'r');
                            $binariosImagen = fread($imagenSubida, $tamanoArchivo);
                            $con = mysqli_connect('localhost', 'root', "kxwbSMm95HB67W", "esquipula");
                            $binariosImagen = mysqli_escape_string($con, $binariosImagen);
                            $query = "UPDATE `imagenes` SET `NombreCedula` = '" . $nombreArchivo . "', `ImagenCedula` = '" . $binariosImagen . "', `TipoCedula` = '" . $tipoArchivo . "' WHERE `imagenes`.`IdCliente` = '" . $idid . "';";
                            $res = mysqli_query($con, $query);
                            }
                        }
                    }
        
                    if (isset($_REQUEST['accion'])) {
                        if (isset($_FILES['fotopl']['name'])) {
                            $tipoArchivo = $_FILES['fotopl']['type'];
                            $permitido=array("image/png","image/jpeg");
                            if( in_array($tipoArchivo,$permitido) ==false ){
                                $con = mysqli_connect('localhost', 'root', "kxwbSMm95HB67W", "esquipula");
                                $query = "UPDATE `imagenes` SET `NombreLicencia` = 'blanco, `ImagenLicencia` = '0x89504e470d0a1a0a0000000d494844520000001e000000180806000000ed694dbf000000017352474200aece1ce90000000467414d410000b18f0bfc61050000000970485973000012740000127401de661f780000002949444154484bedcd31010000088030fb97c61678c80a6c3852ac29d6146b8a35c59a624db1e65b0c0bf5e63566350f83420000000049454e44ae426082', `TipoLicencia` = 'image/png' WHERE `imagenes`.`IdCliente` = '" . $idid . "';";
                                $res = mysqli_query($con, $query);
                            }else{
                            $nombreArchivo = $_FILES['fotopl']['name'];
                            $tamanoArchivo = $_FILES['fotopl']['size'];
                            $imagenSubida = fopen($_FILES['fotopl']['tmp_name'], 'r');
                            $binariosImagen = fread($imagenSubida, $tamanoArchivo);
                            $con = mysqli_connect('localhost', 'root', "kxwbSMm95HB67W", "esquipula");
                            $binariosImagen = mysqli_escape_string($con, $binariosImagen);
                            $query = "UPDATE `imagenes` SET `NombreLicencia` = '" . $nombreArchivo . "', `ImagenLicencia` = '" . $binariosImagen . "', `TipoLicencia` = '" . $tipoArchivo . "' WHERE `imagenes`.`IdCliente` = '" . $idid . "';";
                            $res = mysqli_query($con, $query);
                            }
                        }
                    }
        
                    if (isset($_REQUEST['accion'])) {
                        if (isset($_FILES['fotopp']['name'])) {
                            $tipoArchivo = $_FILES['fotopp']['type'];
                            $permitido=array("image/png","image/jpeg");
                            if( in_array($tipoArchivo,$permitido) ==false ){
                                $con = mysqli_connect('localhost', 'root', "kxwbSMm95HB67W", "esquipula");
                                $query = "UPDATE `imagenes` SET `NombrePasaporte` = 'blanco, `ImagenPasaporte` = '0x89504e470d0a1a0a0000000d494844520000001e000000180806000000ed694dbf000000017352474200aece1ce90000000467414d410000b18f0bfc61050000000970485973000012740000127401de661f780000002949444154484bedcd31010000088030fb97c61678c80a6c3852ac29d6146b8a35c59a624db1e65b0c0bf5e63566350f83420000000049454e44ae426082', `TipoPasaporte` = 'image/png' WHERE `imagenes`.`IdCliente` = '" . $idid . "';";
                                $res = mysqli_query($con, $query);
                            }else{
                            $nombreArchivo = $_FILES['fotopp']['name'];
                            $tamanoArchivo = $_FILES['fotopp']['size'];
                            $imagenSubida = fopen($_FILES['fotopp']['tmp_name'], 'r');
                            $binariosImagen = fread($imagenSubida, $tamanoArchivo);
                            $con = mysqli_connect('localhost', 'root', "kxwbSMm95HB67W", "esquipula");
                            $binariosImagen = mysqli_escape_string($con, $binariosImagen);
                            $query = "UPDATE `imagenes` SET `NombrePasaporte` = '" . $nombreArchivo . "', `ImagenPasaporte` = '" . $binariosImagen . "', `TipoPasaporte` = '" . $tipoArchivo . "' WHERE `imagenes`.`IdCliente` = '" . $idid . "';";
                            $res = mysqli_query($con, $query);
                            }
                        }
                    }
        
                    if (isset($_REQUEST['accion'])) {
                        if (isset($_FILES['fotopcr']['name'])) {
                            $tipoArchivo = $_FILES['fotopcr']['type'];
                            $permitido=array("image/png","image/jpeg");
                            if( in_array($tipoArchivo,$permitido) ==false ){
                                $con = mysqli_connect('localhost', 'root', "kxwbSMm95HB67W", "esquipula");
                                $query = "UPDATE `imagenes` SET `NombreCarnet` = 'blanco, `ImagenCarnet` = '0x89504e470d0a1a0a0000000d494844520000001e000000180806000000ed694dbf000000017352474200aece1ce90000000467414d410000b18f0bfc61050000000970485973000012740000127401de661f780000002949444154484bedcd31010000088030fb97c61678c80a6c3852ac29d6146b8a35c59a624db1e65b0c0bf5e63566350f83420000000049454e44ae426082', `TipoPasaporte` = 'image/png' WHERE `imagenes`.`IdCliente` = '" . $idid . "';";
                                $res = mysqli_query($con, $query);
                            }else{
                            $nombreArchivo = $_FILES['fotopcr']['name'];
                            $tamanoArchivo = $_FILES['fotopcr']['size'];
                            $imagenSubida = fopen($_FILES['fotopcr']['tmp_name'], 'r');
                            $binariosImagen = fread($imagenSubida, $tamanoArchivo);
                            $con = mysqli_connect('localhost', 'root', "kxwbSMm95HB67W", "esquipula");
                            $binariosImagen = mysqli_escape_string($con, $binariosImagen);
                            $query = "UPDATE `imagenes` SET `NombreCarnet` = '" . $nombreArchivo . "', `ImagenCarnet` = '" . $binariosImagen . "', `TipoCarnet` = '" . $tipoArchivo . "' WHERE `imagenes`.`IdCliente` = '" . $idid . "';";
                            $res = mysqli_query($con, $query);
                            }
                        }
                    }
                    header('location:ConsultaDeClientes.php'); 
                    //echo "algo";
                } catch (Exception $ex) {
                    //$txtnombreerror="Error";
                    //echo 'erro';
                }
               
                }
                break;
        case  "atras":{

            header('location:GeneracionDeReportes.php'); 

        }
            break;

        default:
            //echo "mal";
            break;
        }
?>
<?php include("../templatelic/cabeza.php");?>
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="text-center"> 
                <?php if($contratox=='Curso'){?>
                    Contrato De Curso De La Escuela De Manejo
                <?php }?>
                <?php if($contratox=='Certificacion'){?>
                    Contrato De Certificacion De La Escuela De Manejo
                <?php }?>  
                </div>
            </div>
            <div class="card-body">
                <form method="POST" enctype="multipart/form-data">
                <div class="text-center"> 
                    <div class="form-group row">
                        <div class="col-md-2"> </div>
                        <label for="text" class="col-sm-4 col-form-label">Codigo de cliente</label>
                        <div class="col-sm-4">
                            <input type="text" class="input" name="idid" value=<?php echo $idid; ?>  id="idid" placeholder="Primer Nombre" readonly="">
                        </div>
                    </div>
                </div>
                <br/> 
                    <div class="text-center"> 
                        <div class="form-group row">
                            <div class="col-md-2"> </div>
                            <label for="inputEmail3" class="col-sm-3 col-form-label">Fecha</label>
                            <div class="col-sm-4">
                                <input class="input" value=<?php echo obtenerFechaEnLetra($fechadefacturax); ?>  name="bday">
                            </div>
                        </div>
                    </div>

                    <div class="text-center"> 
                        <div class="form-group row">
                            <div class="col-md-2"> </div>
                            <label for="inputEmail3" class="col-sm-3 col-form-label">Sucursal</label>
                            <div class="col-sm-4">
                                <textarea class="form-control" name="ocupacions"  rows="1" readonly="" ><?php echo $estudianteas['Sucursal'];?> </textarea>
                            </div>
                        </div>
                    </div>
<br/>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Primer Nombre</label>
                        <div class="col-sm-3">
                            <textarea class="form-control" name="prinom"  rows="1"><?php echo $PrimerNombrex;?></textarea>
                        </div>
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Segundo Nombre</label>
                        <div class="col-sm-3">
                            <textarea class="form-control" name="senom"  rows="1"><?php echo $SegundoNombre;?></textarea>
                        </div>
                    </div>
<br/>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Primer Apellido</label>
                        <div class="col-sm-3">
                            <textarea class="form-control" name="priape"  rows="1"><?php echo $PrimerApellidox;?></textarea>
                        </div>
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Segundo Apellido</label>
                        <div class="col-sm-3">
                            <textarea class="form-control" name="seape"  rows="1"><?php echo $SegundoApellidox;?></textarea>
                        </div>
                    </div>
<br/>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Tercer Nombre</label>
                        <div class="col-sm-3">
                            <textarea class="form-control" name="trenom"  rows="1"><?php echo $trenonx;?></textarea>
                        </div>
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Apellido De Casada</label>
                        <div class="col-sm-3">
                            <textarea class="form-control" name="treape"  rows="1"><?php echo $treapex;?></textarea>
                        </div>
                    </div>
    <br/>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Cedula</label>
                        <div class="col-sm-3">
                            <textarea class="form-control" name="cedulas"  rows="1"><?php echo $cedulax;?></textarea>
                        </div>
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Correo</label>
                        <div class="col-sm-3">
                            <textarea class="form-control" name="correos"  rows="1"><?php echo $correox;?></textarea>
                        </div>
                    </div>
<br/>
                <?php if($contratox=='Curso'){?>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">TIPO DE AUTO</label>
                        <div class="col-sm-3">
                            <select class="form-select" name="tipoauto" id="exampleSelect1">
                                <option><?php echo $tipoautox;?></option>
                                <option>CAMBIO</option>
                                <option>AUTOMATICO</option>
                            </select>
                        </div>
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Horas de Manejo</label>
                        <div class="col-sm-3">
                            <input class="input" type="text"  value=<?php echo $horasmanejox;?>  name="horasmanejo">
                        </div>
                    </div>        
                <br/>
                <?php }?> 
<br/>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Edad</label>
                        <div class="col-sm-3">
                            <select class="form-select" name="edad" id="exampleSelect1">
                                <option><?php echo $edadx;?></option>
                                <?php $edades=16; ?>    
                                <?php while ($edades!=100) {?>
                                    <option><?php echo $edades;?></option>
                                <?php $edades=$edades+1;} ?>
                            </select>
                        </div>
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Estado del contrado</label>
                        <div class="col-sm-3">
                            <select class="form-select" name="Estadodecontrato" id="exampleSelect1">
                                    <option><?php echo $EstadoDeContradox;?></option>
                                    <option>Curso</option>
                                    <option>Certificacion</option>
                                    <option>Curso practico</option>
                                    <option>validacion</option>
                                    <option>Duplicado</option>
                                    <option>Ampliacion</option>
                                    <option>1/2 Curso</option>
                                    <option>Curso Completo</option>
                                    <option>Cancelación</option>
                            </select>
                        </div>
                    </div>
<br/>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Tipo de Sangre</label>
                        <div class="col-sm-3">
                            <select class="form-select" name="tiposangres" id="exampleSelect1">
                                <option><?php echo $tiposangrex;?></option>
                                <option>A+</option>
                                <option>A-</option>
                                <option>B+</option>
                                <option>AB+</option>
                                <option>AB-</option>
                                <option>AB-</option>
                                <option>O+</option>
                                <option>O-</option>
                                <option>Sin especificar</option>
                            </select>
                        </div>
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Tiquete Entregado</label>
                        <div class="col-sm-3">
                            <select class="form-select" name="tiqueteEntregados" id="exampleSelect1">
                                <option><?php echo $tiquetedefacturax;?></option>
                                <option>SI</option>
                                <option>NO</option>
                            </select>
                        </div>
                    </div>
<br/>
                    <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Categoria</label>
                        <div class="col-sm-3">
                            <select class="form-select" name="categoria" id="exampleSelect1">
                                <option><?php echo $CategoriaDeLicenciax;?></option>
                                <option>A - Bicicleta</option>
                                <option>B - Moto (ampliación)</option>
                                <option>C - Particular (ampliación)</option>
                                <option>D - Comercial (ampliación)</option>
                                <option>A - B - Moto</option>
                                <option>A - C - particular</option>
                                <option>A - C - D Comercial</option>
                                <option>A - B - C - Bicicleta - Moto - Particular</option>
                                <option>A - B - C - D - Bicicleta - Moto - Particular - Comercial</option>
                                <option>A - B - D - Bicicleta - Moto - Comercial</option>
                                <option>B - D - Moto - Comercial</option>
                                <option>C - D - Particular - Comercial</option>
                                <option>E1 - Taxi</option>
                                <option>E2 - Bus colegial</option>
                                <option>E3 - Bus</option>
                                <option>E1 - E2 - Taxi - Bus colegial</option>
                                <option>E1 - E2 - E3 - Taxi - Bus colegial - Bus Grande</option>
                                <option>E1 - E2 - E3 - F- Taxi - Bus colegial - Bus Grande - Camion Mas de 10 Ton</option>
                                <option>E2 - E3 - Bus colegial - Bus Grande</option>
                                <option>F - Camion Mas de 10 Ton</option>
                                <option>F - I -  Camion Mas de 10 Ton - Equipo Pesado</option>
                                <option>G - Vehiculo Articulado</option>
                                <option>H - Vehiculo Infamable</option>
                                <option>I - Equipo Pesado</option>
                            </select>
                        </div>   
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Tipo de curso</label>
                        <div class="col-sm-3">
                            <select class="form-select" name="TipodeCurso" id="exampleSelect1">
                                <option><?php echo $TipoDeCursox;?></option>
                                <option>Teorico y Practico</option>
                                <option>Teorico</option>
                                <option>Practico</option>
                            </select>
                        </div>
                    </div>
<br/>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Lugar de trabajo</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" name="lugartrabajos"  rows="1" ><?php echo $lugarTrabajox;?></textarea>
                        </div>
                    </div>
<br/>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Ocupacion</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" name="ocupacions"  rows="1" ><?php echo $ocupacionx;?></textarea>
                        </div>
                    </div>
<br/>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Celular</label>
                        <div class="col-sm-3">
                            <input class="input" type="text"  value=<?php echo $celularx;?>  name="culares"  placeholder="Celular">
                        </div>
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Tel.Casa</label>
                        <div class="col-sm-3">
                            <input class="input" type="text"  value=<?php echo $telcasax;?>  name="telcasas"  placeholder="Tel.casa">
                        </div>
                    </div>
<br/>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Tel.Oficina</label>
                        <div class="col-sm-3">
                            <input class="input" type="text"  value=<?php echo $teloficinax;?> name="teloficinas"  placeholder="Tel.oficina">
                        </div>   
                        <?php if($contratox=='Curso'){?>
                            <label for="inputEmail3" class="col-sm-3 col-form-label">Mat Estudio Entregado</label>
                            <div class="col-sm-3">
                                <select class="form-select" name="MatEstudio">
                                    <option><?php echo $MatEstudiox;?></option>
                                    <option>Si</option>
                                    <option>No</option>
                                </select>
                            </div> 
                        <?php }?>           
                    </div>
<br/>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Detalle</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" name="detalles"  rows="1" ><?php echo $detallex;?></textarea>
                        </div>
                    </div>
<br/>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Direccion</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" name="direcciones"  rows="1" ><?php echo $direccionx;?></textarea>
                        </div>
                    </div>
<br/>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Monto a pagar</label>
                        <div class="col-sm-9">
                            <input class="input" type="text"  value=<?php echo $montodefacturax;?> name="montos">
                        </div>
                    </div>
 <br/>                   
                    <div class="card">
                        <div class="card-header">
                            Primer Abono
                        </div>
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">Tipo de pago</label>
                                <div class="col-sm-3">
                                    <select class="form-select" name="Tipodepagouno" id="exampleSelect1" >
                                        <option><?php echo $TipoDePagoUnox;?></option>
                                        <option>Efectivo</option>
                                        <option>Cheque</option>
                                        <option>Clave</option>
                                        <option>Yappy</option>
                                        <option>Visa</option>
                                        <option>Mastercard</option>
                                        <option>Deposito $ a</option> 
                                        <option>Transferencia</option> 
                                    </select>
                                </div>
                                <label for="inputEmail3" class="col-sm-3 col-form-label">Fecha de Abono</label>
                                <div class="col-sm-3">
                                    <input class="input" type="text"  value=<?php echo obtenerFechaEnLetra($fechaabonoUno);?> name="FechadeAbonoUno"> 
                                </div>
                            </div>


<br/>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">Rec. No.</label>
                                <div class="col-sm-2">
                                    <input class="input" type="text"  value=<?php echo $recdefacturaUnox;?> name="recibosUno"  placeholder="Rec. No." readonly="">
                                </div>
                                <label for="inputEmail3" class="col-sm-1 col-form-label">Abono</label>
                                <div class="col-sm-2">
                                    <input class="input" type="text"  value=<?php echo $abonodefacturaUnox;?> name="abonosUno"  placeholder="Abono">
                                </div>
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Saldo:</label>
                                <div class="col-sm-2">
                                    <input class="input" type="text"  value=<?php echo $saldodefacturaUnox;?> name="saldosUno"  placeholder="Saldo">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">Num. Cheque</label>
                                <div class="col-sm-2">
                                    <input class="input" type="text"  value=<?php echo $numChequeUnox;?> name="nunChequeUno"  placeholder="Abono" >
                                </div>
                                <label for="inputEmail3" class="col-sm-1 col-form-label">Banco</label>
                                <div class="col-sm-2">
                                    
                                    <textarea class="form-control" name="bancouno"  rows="1" ><?php echo $bancoUnox;?></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
<br/>
                    <?php if($TipoDePagoDosx!="0"){?>
                        <div class="card">
                            <div class="card-header">
                                Segundo Abono
                            </div>
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Tipo de pago</label>
                                    <div class="col-sm-3">
                                        <select class="form-select" name="TipodepagoDos" id="exampleSelect1" >
                                            <option><?php echo $TipoDePagoDosx?></option>
                                            <option>Efectivo</option>
                                            <option>Cheque</option>
                                            <option>Clave</option>
                                            <option>Yappy</option>
                                            <option>Visa</option>
                                            <option>Mastercard</option>
                                            <option>Deposito $ a</option> 
                                            <option>Transferencia</option> 
                                        </select>
                                    </div>
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Fecha de Abono</label>
                                    <div class="col-sm-3">
                                        <input class="input" type="text"  value=<?php echo obtenerFechaEnLetra($fechaabonoDos);?> name="FechadeAbonoDos">
                                    </div>
                                </div>
<br/>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Rec. No.</label>
                                    <div class="col-sm-2">
                                        <input class="input" type="text"  value=<?php echo $recdefacturaDosx;?> name="recibosDos"  placeholder="Rec. No." readonly="">
                                    </div>
                                    <label for="inputEmail3" class="col-sm-1 col-form-label">Abono</label>
                                    <div class="col-sm-2">
                                        <input class="input" type="text"  value=<?php echo $abonodefacturaDosx;?> name="abonosDos"  placeholder="Abono">
                                    </div>
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Saldo:</label>
                                    <div class="col-sm-2">
                                        <input class="input" type="text"  value=<?php echo $saldodefacturaDosx;?> name="saldosDos"  placeholder="Saldo">
                                    </div>
                                </div>
                                <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">Num. Cheque</label>
                                <div class="col-sm-2">
                                    <input class="input" type="text"  value=<?php echo $numChequeDosx;?> name="nunChequeDos"  placeholder="Abono">
                                </div>
                                <label for="inputEmail3" class="col-sm-1 col-form-label">Banco</label>
                                <div class="col-sm-2">
                                    
                                    <textarea class="form-control" name="bancoDos"  rows="1" ><?php echo $bancoDosx;?></textarea>
                                </div>
                            </div>
                            </div>
                        </div>
                    <?php }?>
 <br/>
                    <?php if($TipoDePagoTresx!="0"){?>
                        <div class="card">
                            <div class="card-header">
                                Tercer Abono
                            </div>
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Tipo de pago</label>
                                    <div class="col-sm-3">
                                        <select class="form-select" name="TipodepagoTres" id="exampleSelect1" >
                                            <option><?php echo $TipoDePagoTresx?></option>
                                            <option>Efectivo</option>
                                            <option>Cheque</option>
                                            <option>Clave</option>
                                            <option>Yappy</option>
                                            <option>Visa</option>
                                            <option>Mastercard</option>
                                            <option>Deposito $ a</option> 
                                            <option>Transferencia</option> 
                                        </select>
                                    </div>
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Fecha de Abono</label>
                                    <div class="col-sm-3">
                                        <input class="input" type="text"  value=<?php echo obtenerFechaEnLetra($fechaabonoTres);?> name="FechadeAbonoTres">
                                    </div>
                                </div>
<br/>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Rec. No.</label>
                                    <div class="col-sm-2">
                                        <input class="input" type="text"  value=<?php echo $recdefacturaTresx;?> name="recibosTres"  placeholder="Rec. No." readonly="">
                                    </div>
                                    <label for="inputEmail3" class="col-sm-1 col-form-label">Abono</label>
                                    <div class="col-sm-2">
                                        <input class="input" type="text"  value=<?php echo $abonodefacturaTresx;?> name="abonosTres"  placeholder="Abono" >
                                    </div>
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Saldo:</label>
                                    <div class="col-sm-2">
                                        <input class="input" type="text"  value=<?php echo $saldodefacturaTresx;?> name="saldosTres"  placeholder="Saldo" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Num. Cheque</label>
                                    <div class="col-sm-2">
                                        <input class="input" type="text"  value=<?php echo $numChequeTresx;?> name="nunChequeTres"  placeholder="Abono" >
                                    </div>
                                    <label for="inputEmail3" class="col-sm-1 col-form-label">Banco</label>
                                    <div class="col-sm-2">
                                        
                                        <textarea class="form-control"  name="bancoTres"  rows="1" ><?php echo $bancoTresx;?></textarea>
                                    </div>
                                </div>       
                            </div>
                        </div>
                    <?php }?>
                    <br/>
                    <?php if($TipoDePagoCuatrox!="0"){?>
                        <div class="card">
                            <div class="card-header">
                                Cuarto Abono
                            </div>
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Tipo de pago</label>
                                    <div class="col-sm-3">
                                        <select class="form-select" name="TipodepagoCuatro" id="exampleSelect1" >
                                            <option><?php echo $TipoDePagoCuatrox?></option>
                                            <option>Efectivo</option>
                                            <option>Cheque</option>
                                            <option>Clave</option>
                                            <option>Yappy</option>
                                            <option>Visa</option>
                                            <option>Mastercard</option>
                                            <option>Deposito $ a</option> 
                                            <option>Transferencia</option> 
                                        </select>
                                    </div>
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Fecha de Abono</label>
                                    <div class="col-sm-3">
                                        <input class="input" type="text"  value=<?php echo  obtenerFechaEnLetra($fechaabonoCuatro);?> name="FechadeAbonoCuatro">
                                    </div>
                                </div>
<br/>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Rec. No.</label>
                                    <div class="col-sm-2">
                                        <input class="input" type="text"  value=<?php echo $recdefacturaCuatrox;?> name="recibosCuatro"  placeholder="Rec. No." readonly="">
                                    </div>
                                    <label for="inputEmail3" class="col-sm-1 col-form-label">Abono</label>
                                    <div class="col-sm-2">
                                        <input class="input" type="text"  value=<?php echo $abonodefacturaCuatrox;?> name="abonosCuatro"  placeholder="Abono">
                                    </div>
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Saldo:</label>
                                    <div class="col-sm-2">
                                        <input class="input" type="text"  value=<?php echo $saldodefacturaCuatrox;?> name="saldosCuatro"  placeholder="Saldo">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Num. Cheque</label>
                                    <div class="col-sm-2">
                                        <input class="input" type="text"  value=<?php echo $numChequeCuatrox;?> name="nunChequeCuatro"  placeholder="Abono">
                                    </div>
                                    <label for="inputEmail3" class="col-sm-1 col-form-label">Banco</label>
                                    <div class="col-sm-2">
                                        
                                        <textarea class="form-control" name="bancoCuatro"  rows="1" ><?php echo $bancoCuatrox;?></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php }?>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Referido por</label>
                        <div class="col-sm-3">
                            <textarea class="form-control" name="referidos"  rows="1"><?php echo $referidoporx;?></textarea>
                        </div>
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Atendido por</label>
                        <div class="col-sm-3">
                            <textarea class="form-control" name="atendidos"  rows="1"><?php echo $atendidoporx;?></textarea>
                        </div>
                    </div>
<br/>
                    <div class="form-group">
                        <label for="archivo" class="form-label mt-4">Selecione Foto del Cliente</label>
                        <input type="file" class="form-control-file" name="fotop" accept="image/*">
                    </div>
                    <div class="form-group">
                        <label for="archivo" class="form-label mt-4">Cedula del cliente</label>
                        <input type="file" class="form-control-file" name="fotopc" accept="image/*">
                    </div>
                    <div class="form-group">
                        <label for="archivo" class="form-label mt-4">Licencia</label>
                        <input type="file" class="form-control-file" name="fotopl" accept="image/*">
                    </div>
                    <div class="form-group">
                        <label for="archivo" class="form-label mt-4">Pasaporte del cliente</label>
                        <input type="file" class="form-control-file" name="fotopp" accept="image/*">
                    </div>
                    <div class="form-group">
                        <label for="archivo" class="form-label mt-4">Carnet De Migracion</label>
                        <input type="file" class="form-control-file" name="fotopcr" accept="image/*">
                    </div>
<br/>
                    <div class="form-group">
                        <label for="exampleTextarea">Observacion</label>
                        <textarea class="form-control" name="observaciones" id="exampleTextarea" rows="3" style="margin-top: 0px; margin-bottom: 0px; height: 85px;"><?php echo $observaciondefacturax;?></textarea>
                    </div>
<br/><br/>

                    <script type="text/javascript">
                        function siborra()
                        {
                            var respuesta=confirm("Esta accion eliminara El Contrato de Cliente, las Fotos del cliente y los Pagos del cliente")
                            if(respuesta== true)
                            {
                                return true;
                            }
                            else
                            {
                                return false;
                            }
                        }
                    </script>
                    <script type="text/javascript">
                        function sicambia($idid)
                        {
                            var respuesta=confirm("Seguro De modificar este Contrato" )
                            if(respuesta== true)
                            {
                                return true;
                            }
                            else
                            {
                                return false;
                            }
                        }
                    </script>


                    <div class="form-group">
                        <div class="modal-footer">
                            <button type="submit" name="accion" value="atras"     class="btn btn-primary"  >Regresar</button>                    
                            <button type="submit" name="accion" value="modificar" class="btn btn-primary"       onclick="return sicambia()">Modificar registro</button>
                            <button type="submit" name="accion" value="foto" class="btn btn-primary"       onclick="return sicambia()">Modificar Imagenes</button>    
                            <?php if($contratox=='Curso'){?>
                                <button type="submit" name="accion" value="cambioCertificado" class="btn btn-primary"  onclick="return sicambia()">Cambiar a contrato de Certificado</button>
                            <?php }else{?>
                                <button type="submit" name="accion" value="CambioCurso" class="btn btn-primary"  onclick="return sicambia()"> Cambiar a contrato de curso</button> 
                            <?php }?>
                            <button type="submit" name="accion" value="Eliminacion" class="btn btn-danger"       onclick="return siborra()">Eliminar informacion</button>
                        </div>
                    </div>
                </form>
                <div class="form-group">
                    <div class="modal-footer">
<br/><br/>              <?php if($contratox=='Curso'){?>
                            <form action="https://local/contenido/pdfcontratocurso.php" target="_blank" method="post">
                                <td><button type="submit" value=<?php echo $idid; ?> name="idid" class="btn btn-primary">Imprimir Contrato De Curso</button></td>
                            </form>
                        <?php }else{?>
                            <form action="https://local/contenido/pdfcontratocertificacion.php" target="_blank" method="post">
                                <td><button type="submit" value=<?php echo $idid; ?> name="idid" class="btn btn-primary">Imprimir Contrato De Certificado</button></td>
                            </form>  
                    <?php }?>
<br/><br/> 
                    <?php if($TipoDePagoCuatrox=="0"){?>
                        <form action="https://local/contenido/nuevoabonocliente.php" method="post">
                            <td><button type="submit" value=<?php echo $idid; ?> name="idid" class="btn btn-primary">Registrar nuevo Abono</button></td>
                        </form>
                    <?php }?>
<br/><br/> 
                        <form action="https://local/contenido/GastosDelosclientes.php" target="_blank" method="post">
                            <td><button type="submit" class="btn btn-primary">Gastos del cliente</button></td>
                        </form>
                        <div class="modal-footer">
                        <form action="https://local/contenido/GeneracionDeCertificado.php" target="_blank" method="post">
                            <td><button type="submit" value=<?php echo $idid; ?> name="idid" class="btn btn-primary">Generar certificado</button></td>
                        </form>
                    </div> 
                    </div> 

                </div>
                <div class="form-group">
                    <div class="modal-footer">
                        <form action="https://local/contenido/pdfRecifoabono.php" target="_blank" method="post">
                            <input class="input" type="HIDDEN" value="1" name="idid1" placeholder="N°">
                            <input class="input" type="HIDDEN" value=<?php echo $PrimerNombrex; ?> name="idid2" placeholder="N°">
                            <input class="input" type="HIDDEN" value=<?php echo $PrimerApellidox; ?> name="idid3" placeholder="N°"> 
                            <td><button type="submit" value=<?php echo $idid; ?> name="idid" class="btn btn-primary">Generar recibo primer abono</button></td>
                        </form>
<br/><br/>                  
                      <?php if($TipoDePagoDosx!="0"){?> 
                        <form action="https://local/contenido/pdfRecifoabono.php" target="_blank" method="post">
                            <input class="input" type="HIDDEN" value="2" name="idid1" placeholder="N°">
                            <input class="input" type="HIDDEN" value=<?php echo $PrimerNombrex; ?> name="idid2" placeholder="N°">
                            <input class="input" type="HIDDEN" value=<?php echo $PrimerApellidox; ?> name="idid3" placeholder="N°"> 
                            <td><button type="submit" value=<?php echo $idid; ?> name="idid" class="btn btn-primary">Generar recibo segundo abono</button></td>
                        </form>
                      <?php }?>
<br/><br/>            
                      <?php if($TipoDePagoTresx!="0"){?> 
                        <form action="https://local/contenido/pdfRecifoabono.php" target="_blank" method="post">
                            <input class="input" type="HIDDEN" value="3" name="idid1" placeholder="N°">
                            <input class="input" type="HIDDEN" value=<?php echo $PrimerNombrex; ?> name="idid2" placeholder="N°">
                            <input class="input" type="HIDDEN" value=<?php echo $PrimerApellidox; ?> name="idid3" placeholder="N°"> 
                            <td><button type="submit" value=<?php echo $idid; ?> name="idid" class="btn btn-primary">Generar recibo tercero abono</button></td>
                        </form>
                       <?php }?>
                      <?php if($TipoDePagoCuatrox!="0"){?> 
                        <form action="https://local/contenido/pdfRecifoabono.php" target="_blank" method="post">
                            <input class="input" type="HIDDEN" value="4" name="idid1" placeholder="N°">
                            <input class="input" type="HIDDEN" value=<?php echo $PrimerNombrex; ?> name="idid2" placeholder="N°">
                            <input class="input" type="HIDDEN" value=<?php echo $PrimerApellidox; ?> name="idid3" placeholder="N°"> 
                            <td><button type="submit" value=<?php echo $idid; ?> name="idid" class="btn btn-primary">Generar recibo cuarto abono</button></td>
                        </form>
                       <?php }?>
                    </div> 
                </div>
            </div>
        </div>   
    </div>
    <div class="col-md-1"> </div>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="no.js"></script>
<?php include("../templatelic/pie.php");?>  