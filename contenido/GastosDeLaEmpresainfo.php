<?php
    $idid=$_POST["idid"];

    $gastoEmpresa=$sentenciaSQL->fetch(PDO::FETCH_LAZY);

    $fechaf=$gastoEmpresa['fecha'];
    $monto=$gastoEmpresa['monto'];
    $Tipopago=$gastoEmpresa['Tipopago'];
    $motivo=$gastoEmpresa['motivo'];
    $nombre=$gastoEmpresa['nombre'];
    $observasion=$gastoEmpresa['observasion'];

    $accion=(isset($_POST['accion']))?$_POST['accion']:"";
    $FechaDeGastoInfo=(isset($_POST['bday']))?$_POST['bday']:"";
    $MontoGastoEmpresa=(isset($_POST['montoapagar']))?$_POST['montoapagar']:"";
    $TipoPagoGastoEmpresa=(isset($_POST['Tipodepago']))?$_POST['Tipodepago']:"";
    $DescripcionGastoEmpresa=(isset($_POST['motivodelgasto']))?$_POST['motivodelgasto']:"";
    $ProveedorGastoEmpresa=(isset($_POST['nombre']))?$_POST['nombre']:"";
    $ObservacionGastoEmpresa=(isset($_POST['observaciones']))?$_POST['observaciones']:"";

    $FechaDeGastoInfo=obtenerFechaEnLetrados($FechaDeGastoInfo);

    $fechaf=obtenerFechaEnLetra($fechaf);
    function obtenerFechaEnLetra($fechaf){
    $num = date("j", strtotime($fechaf));
    $anno = date("Y", strtotime($fechaf));
    $mes = date("m", strtotime($fechaf));;
    return $num.'-'.$mes.'-'.$anno;
    }  

    function obtenerFechaEnLetrados($fechadefacturax){
        $num = date("d", strtotime($fechadefacturax));
        $anno = date("Y", strtotime($fechadefacturax));
        $mes = date("m", strtotime($fechadefacturax));;
        return $anno.'-'.$mes.'-'.$num;
    }
    switch ($accion) {
        case  "modificar":
            {
            
                   // echo "algo1";
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
                    header('location:GeneracionDeReportesrangoDeGastos.php');  

                } catch (Exception $ex) {
                    //$txtnombreerror="Error";
                    //echo $txtnombreerror."<br/>";
                }
            }
            break;
            default:
            //echo "mal";
            break;
        }



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
                        <div class="form-group row">
                            <div class="col-md-2"> </div>
                            <label for="text" class="col-sm-4 col-form-label">Numero de gasto</label>
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
                                <input class="input" type="text"  value=<?php echo $fechaf; ?> name="bday"  placeholder="Fecha">
                            </div>
                        </div>
                    </div>
<br/> <br/>           
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Monto a pagar</label>
                        <div class="col-sm-2">
                            <input class="input" type="text"  name="montoapagar" value=<?php echo $monto; ?>>
                        </div>
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Tipo de pago</label>
                        <div class="col-sm-2">
                            <select class="form-select" name="Tipodepago" id="exampleSelect1">
                                <option><?php echo $Tipopago; ?></option>
                            </select>
                        </div>
                    </div>
<br/>                
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">descripcion</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" name="motivodelgasto"  rows="1" ><?php echo $motivo; ?></textarea>
                        </div>
                    </div>
<br/>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Proveedor</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" name="nombre"  rows="1" ><?php echo $nombre; ?></textarea>
                        </div>
                    </div>
<br/>                
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Observacion</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" name="observaciones"  rows="1" ><?php echo $observasion; ?></textarea>
                        </div>
                    </div>
<br/>
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
                            <button type="submit" name="accion" value="modificar" class="btn btn-primary"       onclick="return sicambia()">Modificar registro</button> 
                            <button type="submit" name="accion" value="eliminar" class="btn btn-danger"       onclick="return siborra()">Eliminar informacion</button>
                        </div>
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
