<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
    /*date_default_timezone_set('America/Panama');
    $diahoy = date("d-m-Y");   */ 
    $guardo=0;
    if($_POST){
        $accion=(isset($_POST['accion']))?$_POST['accion']:"";
        /*date_default_timezone_set('America/Panama');
        $diahoy = date("d-m-Y");    
        //Recepcion de datos desde Fecha hasta Tipo de curso
        $bdayq=date("Y-m-d"); */
        
        $bdayq=(isset($_POST['bday']))?$_POST['bday']:"";
        if($bdayq==""){$bdayq="NO_INGRESADO";}

        $edadq=(isset($_POST['edad']))?$_POST['edad']:"";

        $Estadodecontratoq=(isset($_POST['Estadodecontrato']))?$_POST['Estadodecontrato']:"";
        

        $tiposangresq=(isset($_POST['tiposangres']))?$_POST['tiposangres']:"";

        $tiqueteEntregadosq=(isset($_POST['tiqueteEntregados']))?$_POST['tiqueteEntregados']:"";

        $categoriaq=(isset($_POST['categoria']))?$_POST['categoria']:"";

        $TipodeCursoq=(isset($_POST['TipodeCurso']))?$_POST['TipodeCurso']:"";


        //Recepcion de datos desde Lugar de trabajo hasta foto NO
        
        
        $lugartrabajosq=(isset($_POST['lugartrabajos']))?$_POST['lugartrabajos']:"";
        if($lugartrabajosq==""){$lugartrabajosq="NO_INGRESADO";}

        $ocupacionsq=(isset($_POST['ocupacions']))?$_POST['ocupacions']:"";
        if($ocupacionsq==""){$ocupacionsq="NO_INGRESADO";}
          
        $telcasasq=(isset($_POST['telcasas']))?$_POST['telcasas']:"";
        if($telcasasq==""){$telcasasq="NO_INGRESADO";}

        $cularesq=(isset($_POST['culares']))?$_POST['culares']:"";
        if($cularesq==""){$cularesq="NO_INGRESADO";}

        $teloficinasq=(isset($_POST['teloficinas']))?$_POST['teloficinas']:"";
        if($teloficinasq==""){$teloficinasq="NO_INGRESADO";}

        $MatEstudioq=(isset($_POST['MatEstudio']))?$_POST['MatEstudio']:"";


        //Recepcion de datos desde Detalles hasta Segundo apellido

        $detallesq=(isset($_POST['detalles']))?$_POST['detalles']:"";
        if($detallesq==""){$detallesq="NO_INGRESADO";}

        $direccionesq=(isset($_POST['direcciones']))?$_POST['direcciones']:"";
        if($direccionesq==""){$direccionesq="NO_INGRESADO";}

        $montosq=(isset($_POST['montos']))?$_POST['montos']:"";
        if($montosq==""){$montosq=0;}

        $abonos1q=(isset($_POST['abonos1']))?$_POST['abonos1']:"";
        if($abonos1q==""){$abonos1q=0;}

        $saldosq=$montosq-$abonos1q;

        $Tipodepagoq=(isset($_POST['Tipodepago']))?$_POST['Tipodepago']:"";      

        $numchequeq=(isset($_POST['numcheque']))?$_POST['numcheque']:"";    
        if($numchequeq==""){$numchequeq="NO_INGRESADO";}

        $bancoq=(isset($_POST['banco']))?$_POST['banco']:"";    
        if($bancoq==""){$bancoq="NO_INGRESADO";}

        $prinomq=(isset($_POST['prinom']))?$_POST['prinom']:"";
        if($prinomq==""){$prinomq="NO_INGRESADO";}
        $prinomq=strtoupper($prinomq);

        $senomq=(isset($_POST['senom']))?$_POST['senom']:"";
        if($senomq==""){$senomq="NO_INGRESADO";}
        $senomq=strtoupper($senomq);
        
        $priapeq=(isset($_POST['priape']))?$_POST['priape']:"";
        if($priapeq==""){$priapeq="NO_INGRESADO";}
        $priapeq=strtoupper($priapeq);

        $seapeq=(isset($_POST['seape']))?$_POST['seape']:"";
        if($seapeq==""){$seapeq="NO_INGRESADO";}
        $seapeq=strtoupper($seapeq);

        $trenomq=(isset($_POST['trenom']))?$_POST['trenom']:"";
        if($trenomq==""){$trenomq="NO_INGRESADO";}
        $trenomq=strtoupper($trenomq);

        $treapeq=(isset($_POST['treape']))?$_POST['treape']:"";
        if($treapeq==""){$treapeq="NO_INGRESADO";}
        $treapeq=strtoupper($treapeq);

        //Recepcion de datos desde correo hasta Segundo observacion

        $correosq=(isset($_POST['correos']))?$_POST['correos']:"";
        if($correosq==""){$correosq="NO_INGRESADO";}

        $cedulasq=(isset($_POST['cedulas']))?$_POST['cedulas']:"";
        if($cedulasq==""){$cedulasq="NO_INGRESADO";}

        $referidosq=(isset($_POST['referidos']))?$_POST['referidos']:"";
        if($referidosq==""){$referidosq="NO_INGRESADO";}

        $atendidosq=(isset($_POST['atendidos']))?$_POST['atendidos']:"";
        if($atendidosq==""){$atendidosq="NO_INGRESADO";}      

        $observacionesq=(isset($_POST['observaciones']))?$_POST['observaciones']:"";
        if($observacionesq==""){$observacionesq="NO_INGRESADO";}

        $saldounoq=$montosq-$abonos1q;
        
        $SucursalDelCliente=(isset($_POST['Sucursalcliente']))?$_POST['Sucursalcliente']:"";

        $tipoautoq=(isset($_POST['tipoauto']))?$_POST['tipoauto']:"";
        
        $horasmanejoq=(isset($_POST['horasmanejo']))?$_POST['horasmanejo']:"";
        

        $tipodecontratosucursal="Curso";
        
?>
<?php include("../templatelic/cabeza.php"); ?>
<br/> <br/>
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="text-center"> 
                    CONTRATO CURSO DE MANEJO
                </div>
            </div>
            <div class="card-body">
                <form method="POST" enctype="multipart/form-data">
                <div class="form-group row">
                    <div class="text-center"> 
                        Seleccione Fecha <label> <input type="date" name="bday"></label>
                    </div> 
                </div> 
                <div class="form-group row"> 
                    <div class="col-sm-3"></div>    
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Selecione Sucursal</label>
                    <div class="col-sm-3">
                        <select class="form-select" name="Sucursalcliente" id="exampleSelect1">
                                <option>Esquipula 1</option>
                                <option>Esquipula 2</option>
                                <option>Esquipula 3</option>
                                <option>Esquipula 4</option>
                        </select>
                    </div>
                </div>
<br/>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Primer Nombre</label>
                        <div class="col-sm-3">
                            <input class="input" type="text"  name="prinom" id="inputEmail3" placeholder="Primer Nombre">
                        </div>
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Segundo Nombre</label>
                        <div class="col-sm-3">
                            <input class="input" type="text"  name="senom" id="inputEmail3" placeholder="Segundo Nombre">
                        </div>
                    </div>
<br/>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Primer Apellido</label>
                        <div class="col-sm-3">
                            <input class="input" type="text"  name="priape" id="inputEmail3" placeholder="Primer Apellido">
                        </div>
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Segundo Apellido</label>
                        <div class="col-sm-3">
                            <input class="input" type="text"  name="seape" id="inputEmail3" placeholder="Primer Segundo">
                        </div>
                    </div>
<br/>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Tercer Nombre</label>
                        <div class="col-sm-3">
                            <input class="input" type="text"  name="trenom" id="inputEmail3" placeholder="Tercer Nombre">
                        </div>
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Apellido De Casada</label>
                        <div class="col-sm-3">
                            <input class="input" type="text"  name="treape" id="inputEmail3" placeholder="Apellido De Casada">
                        </div>
                    </div>
<br/>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">TIPO DE AUTO</label>
                        <div class="col-sm-3">
                            <select class="form-select" name="tipoauto" id="exampleSelect1">
                                <option>CAMBIO</option>
                                <option>AUTOMATICO</option>
                            </select>
                        </div>
                        <label for="inputEmail3" class="col-sm-3 col-form-label">HORAS DE MANEJO</label>
                        <div class="col-sm-3">
                            <select class="form-select" name="horasmanejo">
                                <?php $horas=0; ?>    
                                <?php while ($horas!=82) {?>
                                    <option><?php echo $horas;?></option>
                                <?php $horas=$horas+2;} ?>
                            </select>
                        </div>
                    </div>
<br/>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Edad</label>
                        <div class="col-sm-3">
                            <select class="form-select" name="edad">
                                <?php $edades=16; ?>    
                                <?php while ($edades!=100) {?>
                                    <option><?php echo $edades;?></option>
                                <?php $edades=$edades+1;} ?>
                            </select>
                        </div>
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Estado del contrado</label>
                        <div class="col-sm-3">
                            <select class="form-select" name="Estadodecontrato" id="exampleSelect1">
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
                            <input class="input" type="text" name="lugartrabajos" placeholder="Lugar de trabajo">
                        </div>
                    </div>
<br/>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Ocupacion</label>
                        <div class="col-sm-9">
                            <input class="input" type="text"   name="ocupacions" id="inputEmail3" placeholder="Ocupacion">
                        </div>
                    </div>
<br/>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Tel.Casa</label>
                        <div class="col-sm-3">
                            <input class="input" type="text"  name="telcasas" id="inputEmail3" placeholder="Tel.casa">
                        </div>
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Celular</label>
                        <div class="col-sm-3">
                            <input class="input" type="text"  name="culares" id="inputEmail3" placeholder="Celular">
                        </div>
                        </div>
<br/>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Tel.Oficina</label>
                        <div class="col-sm-3">
                            <input class="input" type="text"  name="teloficinas" id="inputEmail3" placeholder="Tel.oficina">
                        </div>
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Mat Estudio Entregado</label>
                        <div class="col-sm-3">
                            <select class="form-select" name="MatEstudio">
                                <option>Si</option>
                                <option>No</option>
                            </select>
                        </div>         
                    </div>
<br/>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Detalle</label>
                        <div class="col-sm-9">
                            <input class="input" type="text"  name="detalles" id="inputEmail3" placeholder="Detalle">
                        </div>
                    </div>
<br/>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Direccion</label>
                        <div class="col-sm-9">
                            <input class="input" type="text"  name="direcciones" id="inputEmail3" placeholder="Direccion">
                        </div>
                    </div>
<br/>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Monto a pagar</label>
                        <div class="col-sm-2">
                            <input class="input" type="text"   name="montos" id="inputEmail3" placeholder="Monto">
                        </div>
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Abono</label>
                        <div class="col-sm-2">
                            <input class="input" type="text"   name="abonos1" id="inputEmail3" placeholder="Abono">
                        </div>
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Tipo de pago</label>
                        <div class="col-sm-2">
                            <select class="form-select" name="Tipodepago" id="exampleSelect1">
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
                    </div>
                    <div class="text-center"> 
                        Los campos de Numero de Cheque y Banco solo son nesesarios llenar cuado el tipo de pago Corresponde a Deposito
                    </div>
<br/>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Numero de Cheque</label>
                        <div class="col-sm-3">
                            <input class="input" type="text"  name="numcheque" id="inputEmail3" placeholder="Numero de Cheque">
                        </div>
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Banco</label>
                        <div class="col-sm-3">
                            <input class="input" type="text"  name="banco" id="inputEmail3" placeholder="Banco">
                        </div>
                    </div>
<br/>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Cedula</label>
                        <div class="col-sm-3">
                            <input class="input" type="text"  name="cedulas" id="inputEmail3" placeholder="Cedula">
                        </div>
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Correo</label>
                        <div class="col-sm-3">
                            <input class="input" type="text"  name="correos" id="inputEmail3" placeholder="correos">
                        </div>
                    </div>
<br/>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Referido por</label>
                        <div class="col-sm-3">
                            <input class="input" type="text"  name="referidos" id="inputEmail3" placeholder="Referido por">
                        </div>
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Atendido por</label>
                        <div class="col-sm-3">
                            <input class="input" type="text"  name="atendidos" id="inputEmail3" placeholder="Atendido por">
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
                        <textarea class="form-control" name="observaciones" id="exampleTextarea" rows="3" style="margin-top: 0px; margin-bottom: 0px; height: 85px;"></textarea>
                    </div>
<br/><br/>
                    <?php if ($guardo==1){?>
                        <script>
                            Swal.fire({
                            position: 'center',
                            icon: 'success',
                            title: 'Informacion guardada',
                            showConfirmButton: false,
                            timer: 1500
                            })
                        </script>  
                    <?php } ?>
                    <?php if ($guardo==3){?>
                        <script>
                            Swal.fire({
                            position: 'center',
                            icon: 'error',
                            title: 'error al guardar informacion compruebe campos',
                            showConfirmButton: false,
                            timer: 1500
                            })
                        </script>  
                    <?php } ?>
                    
                    <script type="text/javascript">
                        function siborra()
                        {
                            var respuesta=confirm("¿Seguro de guardar esta informacion?")
                            if(respuesta== true)
                            {
                                return true;
                            }
                            else
                            {
                                $guardo=3;
                                Swal.fire({
                                position: 'center',
                                icon: 'warning',
                                title: 'Se cancelo la accion de guardar',
                                showConfirmButton: false,
                                timer: 1500
                                })
                                return false;
                            }
                        }
                    </script>
                    <div class="d-grid gap-2">
                        <button type="submit" name="accion" value= "nuevo" class="btn btn-primary" onclick="return siborra()">Registrar nuevo Contrato</button>
                    </div>
                </form>
            </div>
        </div>   
    </div></div>
<?php include("../templatelic/pie.php");?>    
