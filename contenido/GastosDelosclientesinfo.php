<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
    $guardo=0;
    $idid=$_POST["idid"];
    $accion=(isset($_POST['accion']))?$_POST['accion']:"";
    $bdayq=(isset($_POST['bday']))?$_POST['bday']:"";
    $montoapagarq=(isset($_POST['montoapagar']))?$_POST['montoapagar']:"";
    $motivodelgasto=(isset($_POST['motivodelgasto']))?$_POST['motivodelgasto']:"";
    $recibosq=(isset($_POST['recibos']))?$_POST['recibos']:"";
    $abonosq=(isset($_POST['abonos']))?$_POST['abonos']:"";
    $saldosq=(isset($_POST['saldos']))?$_POST['saldos']:"";
    $nombreq=(isset($_POST['nombre']))?$_POST['nombre']:"";
    $apellidoq=(isset($_POST['apellido']))?$_POST['apellido']:"";
    $cedulasq=(isset($_POST['cedulas']))?$_POST['cedulas']:"";
    $observacionesq=(isset($_POST['observaciones']))?$_POST['observaciones']:"";
    

    $estudianteas=$sentenciaSQL->fetch(PDO::FETCH_LAZY);
    $bdayx=$estudianteas['fecha'];
    $montoapagarx=$estudianteas['monto'];
    $motivodelgastox=$estudianteas['motivo'];
    $recibosx=$estudianteas['recibo'];
    $abonosx=$estudianteas['abono'];
    $saldosx=$estudianteas['saldo'];
    $nombrex=$estudianteas['nombre'];
    $apellidox=$estudianteas['apellido'];
    $cedulasx=$estudianteas['cedula'];
    $observacionesx=$estudianteas['observasion'];

?>   

<?php
//echo $accion;
switch ($accion) {
    case  "modificar":
        {
        
                //echo "algo";
            } catch (Exception $ex) {
                //$txtnombreerror="Error";
                //echo 'erro';
            }
           
            }
            break;


            case  "eliminar":
                {
                    try {
                        //echo $idid;

                        header('location:ConsultaDeClientes.php'); 
    
                    } catch (Exception $ex) {
                        //$txtnombreerror="Error";
                        //echo $txtnombreerror."<br/>";
                    }
                }
                break;
            case  "atras":{
    
                header('location:ConsultaDeClientes.php'); 
    
            }
                break;
    
            default:
                //echo "mal";
                break;
            }
?>
<?php include("../templatelic/cabeza.php");?>
<br/> <br/>
    <div class="col-md-1"> </div>
    <div class="col-md-10">
        <div class="card">
            <div class="card-header">
                <div class="text-center"> 
                    Gastos adicionales1 de los clientes
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
                    
                    <div class="text-center"> 
                        <div class="form-group row">
                            <div class="col-md-2"> </div>
                            <label for="inputEmail3" class="col-sm-4 col-form-label">Fecha</label>
                            <div class="col-sm-4">
                                <input class="input" type="text"  value=<?php echo $bdayx; ?> name="bday"  placeholder="Fecha">
                            </div>
                        </div>
                    </div>
<br/>      
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Monto a pagar</label>
                        <div class="col-sm-2">
                            <input class="input" type="text" value=<?php echo $montoapagarx;?> name="montoapagar" id="inputEmail3" placeholder="Monto a pagar">
                        </div>
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Motivo del gasto</label>
                        <div class="col-sm-6">
                            <input class="input" type="text" value=<?php echo $motivodelgastox;?> name="motivodelgasto" id="inputEmail3" placeholder="Monto a pagar">
                        </div>
                    </div>
<br/>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Rec. No.</label>
                        <div class="col-sm-2">
                            <input class="input" type="text" value=<?php echo $recibosx;?> name="recibos" id="inputEmail3" placeholder="Rec. No." readonly="">
                        </div>
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Abono</label>
                        <div class="col-sm-2">
                            <input class="input" type="text" value=<?php echo $abonosx;?> name="abonos" id="inputEmail3" placeholder="Abono">
                        </div>
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Saldo:</label>
                        <div class="col-sm-2">
                            <input class="input" type="text" value=<?php echo $saldosx;?> name="saldos" id="inputEmail3" placeholder="Saldo">
                        </div>
                    </div>
<br/>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Nombre</label>
                        <div class="col-sm-2">
                            <input class="input" type="text" value=<?php echo $nombrex;?> name="nombre" id="inputEmail3" placeholder="Estudiante">
                        </div>
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Apellido</label>
                        <div class="col-sm-2">
                            <input class="input" type="text" value=<?php echo $apellidox;?> name="apellido" id="inputEmail3" placeholder="Estudiante">
                        </div>
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Cedula</label>
                        <div class="col-sm-2">
                            <input class="input" type="text" value=<?php echo $cedulasx;?> name="cedulas" id="inputEmail3" placeholder="Cedula">
                        </div>
                    </div>
<br/>
                    <div class="form-group">
                        <label for="exampleTextarea">Observacion</label>
                        <textarea class="form-control" name="observaciones" id="exampleTextarea" rows="3" style="margin-top: 0px; margin-bottom: 0px; height: 85px;"><?php echo $observacionesx;?></textarea>
                    </div>
<br/><br/>
                    
                    <script type="text/javascript">
                        function siborra()
                        {
                            var respuesta=confirm("¿Realmente desea eliminar la informacion?")
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
                                title: 'Se cancelo la accion de eliminar',
                                showConfirmButton: false,
                                timer: 1500
                                })
                                return false;
                            }
                        }
                    </script>
                    <script type="text/javascript">
                        function sicambia($idid)
                        {
                            var respuesta=confirm("¿Realmente desea modificar la informacion?")
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
                                title: 'Se cancelo la accion de Modificacion',
                                showConfirmButton: false,
                                timer: 1500
                                })
                                return false;
                            }
                        }
                    </script>


                    <div class="form-group">
                    <div class="modal-footer">
                    <button type="submit" name="accion" value="eliminar"  class="btn btn-danger"     onclick="return siborra()" >eliminar</button>
                    <button type="submit" name="accion" value="atras"     class="btn btn-primary"  >Regresar</button>                    
                    <button type="submit" name="accion" value="modificar" class="btn btn-primary"       onclick="return sicambia()">Modificar registro</button>
                    </div>
                    </div>
                </form>
                <form action="https://local/contenido/pdfReciboGastos.php" target="_blank" method="post">
                    <button type="submit" value=<?php echo $idid; ?> name="idid" class="btn btn-primary">Imprimir Recibo de gastos</button>
                </form>
            </div>
        </div>   
    </div></div>
<?php include("../templatelic/pie.php");?>    
