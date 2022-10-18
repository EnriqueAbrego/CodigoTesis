<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
    $guardo=0;
    $idid=$_POST["idid"];
    /*date_default_timezone_set('America/Panama');
    $diahoy = date("d-m-Y");*/    
    $accion=(isset($_POST['accion']))?$_POST['accion']:"";
    /*$bdayq=date("Y-m-d");  */
    $bdayq=(isset($_POST['bday']))?$_POST['bday']:"";
    if($bdayq==""){$bdayq="NO_INGRESADO";}
    $abonosq=(isset($_POST['abonos']))?$_POST['abonos']:"";
    $Tipodepagoq=(isset($_POST['Tipodepago']))?$_POST['Tipodepago']:"";
    $Tipodepagoq=(isset($_POST['Tipodepago']))?$_POST['Tipodepago']:"";
    $numchequeq=(isset($_POST['numcheque']))?$_POST['numcheque']:"";
    $bancoq=(isset($_POST['banco']))?$_POST['banco']:"";

    if($numchequeq==""){$numchequeq="NO_INGRESADO";}
    if($bancoq==""){$bancoq="NO_INGRESADO";}

    include("../Confi/db.php");

    $recdosdefacturax=$estudianteas['RecAbonoDos'];
    $rectresdefacturax=$estudianteas['RecAbonoTres'];
    $recCuatrodefacturax=$estudianteas['RecAbonoCuatro'];
    $DeudaTotal=$estudianteas['MontoFactura'];
    $DeudaRestante=-$estudianteas['MontoAbonoUno']-$estudianteas['MontoAbonoDos']-$estudianteas['MontoAbonoTres']-$estudianteas['MontoAbonoCuatro']+$estudianteas['MontoFactura'];
    $DeudaRestante=number_format($DeudaRestante, 2, '.', '');
    $SucursalDelCliente=(isset($_POST['Sucursalcliente']))?$_POST['Sucursalcliente']:"";
    include("../Confi/db.php");
    $sentenciaSQL=$conexion->prepare("SELECT * FROM registroempleados1 WHERE Usuario=:idbusca");

    $SucursalDelCliente=$SucursalCliente['Sucursal'];
?>   

<?php
//echo $accion;
switch ($accion) {
    case  "modificar":
        {
        try {

                    }
                }
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

                        //echo "eliminado";
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
                    Registrar nuevo abono al cliente
                </div>
            </div>
            <div class="card-body">
                <form method="POST" enctype="multipart/form-data">
                <input class="input" type="HIDDEN" value=<?php  echo $nombreUsuario ?> name="Sucursalcliente">
                    <div class="text-center"> 
                        <div class="form-group row">
                            <div class="col-md-2"> </div>
                            <label for="text" class="col-sm-4 col-form-label">Codigo de cliente</label>
                            <div class="col-sm-4">
                                <input type="text" class="input" name="idid" value=<?php echo $idid; ?>  id="idid" placeholder="Primer Nombre" readonly="">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="text-center"> 
                            Seleccione Fecha <label> <input type="date" name="bday"></label>
                        </div> 
                    </div> 
<br/>                    
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Deuda Total</label>
                        <div class="col-sm-3">
                            <input class="input" type="text"  name="montototal"value=<?php  echo $DeudaTotal ?> readonly="">
                        </div>
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Deuda Restante</label>
                        <div class="col-sm-3">
                            <input class="input" type="text"  name="montonototal"value=<?php  echo $DeudaRestante ?> readonly="">
                        </div>
                    </div>  
<br/>                    
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Abono</label>
                        <div class="col-sm-3">
                            <input class="input" type="text" name="abonos" id="inputEmail3" placeholder="Abono">
                        </div>
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Tipo de pago</label>
                        <div class="col-sm-3">
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
<br/>                    
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
<br/><br/>
                    
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
                        <button type="submit" name="accion" value="modificar" class="btn btn-primary"       onclick="return sicambia()">Guardar nuevo abono</button>
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