<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
    $guardo=0;
    /*date_default_timezone_set('America/Panama');
    $diahoy = date("d-m-Y");*/  
    if($_POST){
        /*date_default_timezone_set('America/Panama');
        $diahoy = date("d-m-Y");    
        //Recepcion de datos desde Fecha hasta Tipo de curso
        $bdayq=date("Y-m-d");*/
        
        $bdayq=(isset($_POST['bday']))?$_POST['bday']:"";
        if($bdayq==""){$bdayq="NO_INGRESADO";}
        
        $accion=(isset($_POST['accion']))?$_POST['accion']:"";
        $montoapagarq=(isset($_POST['montoapagar']))?$_POST['montoapagar']:""; 
        if($montoapagarq==""){$montoapagarq="0";}

        $motivodelgasto=(isset($_POST['motivodelgasto']))?$_POST['motivodelgasto']:"";
        
        $abonosq=(isset($_POST['abonos']))?$_POST['abonos']:"";
        if($abonosq==""){$abonosq="0";}

        $saldosq=$montoapagarq-$abonosq;

        $nombreq=(isset($_POST['nombre']))?$_POST['nombre']:"";
        if($nombreq==""){$nombreq="NO_INGRESADO";}
        
        $apellidoq=(isset($_POST['apellido']))?$_POST['apellido']:"";
        if($apellidoq==""){$apellidoq="NO_INGRESADO";}

        $cedulasq=(isset($_POST['cedulas']))?$_POST['cedulas']:"";
        if($cedulasq==""){$cedulasq="NO_INGRESADO";}

        $observacionesq=(isset($_POST['observaciones']))?$_POST['observaciones']:"";
        if($observacionesq==""){$observacionesq="NO_INGRESADO";}

        $Tipodepagoq=(isset($_POST['Tipodepago']))?$_POST['Tipodepago']:"";

        $numchequeq=(isset($_POST['numcheque']))?$_POST['numcheque']:"";    
        if($numchequeq==""){$numchequeq="NO_INGRESADO";}

        $bancoq=(isset($_POST['banco']))?$_POST['banco']:"";    
        if($bancoq==""){$bancoq="NO_INGRESADO";}

        $SucursalDelCliente=(isset($_POST['Sucursalcliente']))?$_POST['Sucursalcliente']:"";

        $SucursalDelCliente=$SucursalCliente['Sucursal'];

        

        try {
            
    }
?>
<?php include("../templatelic/cabeza.php");?>
<br/> <br/>
    <div class="col-md-1"> </div>
    <div class="col-md-10">
        <div class="card">
            <div class="card-header">
                <div class="text-center"> 
                    Gastos adicionales de los clientes
                </div>
            </div>
            <div class="card-body">
                <form method="POST" enctype="multipart/form-data">
                <input class="input" type="HIDDEN" value=<?php  echo $nombreUsuario ?> name="Sucursalcliente">
                <div class="form-group row">
                    <div class="text-center"> 
                        Seleccione Fecha <label> <input type="date" name="bday"></label>
                    </div> 
                </div> 
<br/> <br/>
                    
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Monto a pagar</label>
                        <div class="col-sm-2">
                            <input class="input" type="text"  name="montoapagar" id="inputEmail3" placeholder="Monto a pagar">
                        </div>
                        <div class="col-sm-3">
                            <select class="form-select" name="motivodelgasto" id="exampleSelect1">
                                    <option>Folleto</option>
                                    <option>Alquiler de auto</option>
                                    <option>Examen Medico</option>
                                    <option>Otros</option>
                            </select>
                        </div>
                    </div>
<br/>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Abono</label>
                        <div class="col-sm-2">
                            <input class="input" type="text"  name="abonos" id="inputEmail3" placeholder="Abono">
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
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Nombre</label>
                        <div class="col-sm-2">
                            <input class="input" type="text"  name="nombre" id="inputEmail3" placeholder="Estudiante">
                        </div>
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Apellido</label>
                        <div class="col-sm-2">
                            <input class="input" type="text"  name="apellido" id="inputEmail3" placeholder="Estudiante">
                        </div>
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Cedula</label>
                        <div class="col-sm-2">
                            <input class="input" type="text"  name="cedulas" id="inputEmail3" placeholder="Cedula">
                        </div>
                    </div>
<br/>
                    <div class="form-group">
                        <label for="exampleTextarea">Observacion</label>
                        <textarea class="form-control" name="observaciones" id="exampleTextarea" rows="3" style="margin-top: 0px; margin-bottom: 0px; height: 85px;"></textarea>
                    </div>
<br/><br/>

                    <?php if ($guardo!=0){?>
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
                    <div class="form-group">
                        <div class="modal-footer">               
                            <button type="submit" name="accion" value="nuevo" class="btn btn-primary eliminar"  onclick="return sicambia()">Registrar nuevo Gasto del cliente</button>
                        </div>
                    </div>
                </form>
                <div class="form-group">
                    <div class="modal-footer">   
                        <form action="https://local/contenido/ConsultaDeClientes.php" method="post">
                            <button type="submit" class="btn btn-primary">Regresar</button>
                        </form> 
                    </div>
                </div>
            </div>
        </div>   
    </div></div>
<?php include("../templatelic/pie.php");?>   
