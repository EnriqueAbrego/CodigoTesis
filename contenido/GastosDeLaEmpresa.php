<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
    $guardo=0;
    if($_POST){ 
        $accion=(isset($_POST['accion']))?$_POST['accion']:"";
        $bdayq=(isset($_POST['bday']))?$_POST['bday']:"";
        $montoapagarq=(isset($_POST['montoapagar']))?$_POST['montoapagar']:"";
        $motivodelgastoq=(isset($_POST['motivodelgasto']))?$_POST['motivodelgasto']:"";
        $nombreq=(isset($_POST['nombre']))?$_POST['nombre']:"";
        $observacionesq=(isset($_POST['observaciones']))?$_POST['observaciones']:"";
        $Tipodepagoq=(isset($_POST['Tipodepago']))?$_POST['Tipodepago']:"";
        $SucursalDelClienteq=(isset($_POST['Sucursalcliente']))?$_POST['Sucursalcliente']:"";

        $motivodelgastoq=strtoupper($motivodelgastoq);
        $nombreq=strtoupper($nombreq);
        $observacionesq=strtoupper($observacionesq);

?>
<?php include("../templatelic/cabeza.php");?>
<br/> <br/>
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="text-center"> 
                    Gastos De la Empresa
                </div>
            </div>
            <div class="card-body">
                <form method="POST" enctype="multipart/form-data">
                <div class="text-center"> 
                    Seleccione Fecha <label> <input type="date" name="bday"></label>
                </div> 
<br/>         
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
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Monto a pagar</label>
                        <div class="col-sm-2">
                            <input class="input" type="text"  name="montoapagar" id="inputEmail3" placeholder="Monto a pagar">
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
<br/>                
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">descripcion</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" name="motivodelgasto"  rows="1" ></textarea>
                        </div>
                    </div>
<br/>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Proveedor</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" name="nombre"  rows="1" ></textarea>
                        </div>
                    </div>
<br/>                
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Observacion</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" name="observaciones"  rows="1" ></textarea>
                        </div>
                    </div>
<br/>
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
                    <div class="text-center">     
                        <button type="submit" name="accion" value= "nuevo" class="btn btn-primary" onclick="return siborra()">Registrar Gasto de la empresa</button>
                    </div>
                </form>
                <br/>
                <div class="text-center">     
                    <form action="https://local/contenido/GeneracionDeReportes.php" method="post">
                        <button type="submit" class="btn btn-primary">Regresar</button>
                    </form> 
                </div>
            </div>
        </div>   
    </div></div>
<?php include("../templatelic/pie.php");?>


