<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
    $accion=(isset($_POST['accion']))?$_POST['accion']:"";
    $idid=(isset($_POST['idid3']))?$_POST['idid']:"";
    $idid=$_POST["idid"];
    $TxtPrimerNombre=(isset($_POST['TxtPrimerNombre']))?$_POST['TxtPrimerNombre']:"";
    if($TxtPrimerNombre==""){$TxtPrimerNombre="NO_INGRESADO";}

    $TxtSegundoNombre=(isset($_POST['TxtSegundoNombre']))?$_POST['TxtSegundoNombre']:"";
    if($TxtSegundoNombre==""){$TxtSegundoNombre="NO_INGRESADO";}

    $TxtPrimerApellido=(isset($_POST['TxtPrimerApellido']))?$_POST['TxtPrimerApellido']:"";
    if($TxtPrimerApellido==""){$TxtPrimerApellido="NO_INGRESADO";}

    $TxtSegundoApellido=(isset($_POST['TxtSegundoApellido']))?$_POST['TxtSegundoApellido']:"";
    if($TxtSegundoApellido==""){$TxtSegundoApellido="NO_INGRESADO";}

    $TxtUsuario=(isset($_POST['TxtUsuario']))?$_POST['TxtUsuario']:"";
    if($TxtUsuario==""){$TxtUsuario="NO_INGRESADO";}

    $TxtContrasena=(isset($_POST['TxtContrasena']))?$_POST['TxtContrasena']:"";
    if($TxtContrasena==""){$TxtContrasena="NO_INGRESADO";}

    $TxtRol=(isset($_POST['TxtRol']))?$_POST['TxtRol']:"";
    if($TxtRol==""){$TxtRol="NO_INGRESADO";}

    $TxtCelular=(isset($_POST['TxtCelular']))?$_POST['TxtCelular']:"";
    if($TxtCelular==""){$TxtCelular="NO_INGRESADO";}

    $TxtTelCasa=(isset($_POST['TxtTelCasa']))?$_POST['TxtTelCasa']:"";
    if($TxtTelCasa==""){$TxtTelCasa="NO_INGRESADO";}
    
    $TxtCorreo=(isset($_POST['TxtCorreo']))?$_POST['TxtCorreo']:"";
    if($TxtCorreo=""){$TxtCorreo="NO_INGRESADO";}

    $TxtDireccion=(isset($_POST['TxtDireccion']))?$_POST['TxtDireccion']:"";
    if($TxtDireccion==""){$TxtDireccion="NO_INGRESADO";}

    $TxtSucursal=(isset($_POST['TxtSucursal']))?$_POST['TxtSucursal']:"";
    if($TxtSucursal==""){$TxtSucursal="NO_INGRESADO";}
    


    //header('location:Registro.php'); 
    //print_r($_POST);
    //echo  $codigoanos;
    //echo $TxtRol;

    $sunombre=$Empleado['PrimerNombre'];
    $suapellidouno=$Empleado['PrimerApellido'];
    $sunombredros=$Empleado['SegundoNombre'];
    $suapellidodos=$Empleado['SegundoApellido'];
    $suususario=$Empleado['Usuario'];
    $sucontrasena=$Empleado['Contrasena'];
    $surol=$Empleado['Rol'];
    $sucelular=$Empleado['Celular'];
    $sutel=$Empleado['TelCasa'];
    $sucorreo=$Empleado['Correo'];
    $sudirecion=$Empleado['Direccion'];
    $susucursal=$Empleado['Sucursale'];

    switch ($accion) {
        case  "eliminar":
            {
                try {
                    //echo $idid;

                    //echo "eliminado";
                    header('location:https://local/contenido/ManejoDePersonal.php');

                } catch (Exception $ex) {
                    //$txtnombreerror="Error";
                    //echo $txtnombreerror."<br/>";
                }
            }
            break;

        case  "atras":
            header('location:ManejoDePersonal.php');
            
            break;

        case  "modificar":
            {
            try {
                include("../Confi/db.php");
                //echo $TxtPrimerNombre;
                //echo $idid;


                //echo 'bn';
            } catch (Exception $ex) {
                //$txtnombreerror="Error";
                //echo 'erro';
            }
           
            }
            break;
        
        default:
            //echo "mal";
            break;
        }
?>

<?php include("../templatelic/cabeza.php");?>
<br/><br/><br/><br/>
<br/><br/><br/>
<div class="col-md-1"> </div>
    <div class="col-md-10">
        <div class="card">
            <div class="card-header">
                <div class="text-center"> 
                    Modificacion del personal
                </div>
            </div>
        <div class="card-body">
            <form method="POST" enctype="multipart/form-data" >
                <div class="form-group row">
                    <label for="text" class="col-sm-3 col-form-label">Codigo de empleado</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" name="idid" value=<?php echo $idid; ?>  id="idid" placeholder="Primer Nombre" readonly="">
                    </div>
                </div>

<br/>
                <div class="form-group row">
                    <label for="text" class="col-sm-3 col-form-label">Primer Nombre</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" name="TxtPrimerNombre" value=<?php echo $sunombre;?>    id="TxtPrimerNombre" placeholder="Primer Nombre">
                    </div>
                    <label for="text" class="col-sm-2 col-form-label">Segundo Nombre</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" name="TxtSegundoNombre" value=<?php echo $sunombredros;?> id="TxtSegundoNombre" placeholder="Segundo Nombre">
                    </div>
                </div>   
<br/>
                <div class="form-group row">
                    <label for="text" class="col-sm-3 col-form-label">Primer Apellido</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" name="TxtPrimerApellido" value=<?php echo $suapellidouno;?> id="TxtPrimerApellido" placeholder="Primer Apellido">
                    </div>
                    <label for="text" class="col-sm-2 col-form-label">Segundo Apellido</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" name="TxtSegundoApellido" value=<?php echo $suapellidodos;?> id="TxtSegundoApellido" placeholder="Segundo Apellido">
                    </div>
                </div>   
<br/>
                <div class="form-group row">
                    <label for="text" class="col-sm-3 col-form-label">Usuario</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" name="TxtUsuario" value=<?php echo $suususario;?> id="TxtUsuario" placeholder="Usuario">
                    </div>
                    <label for="text" class="col-sm-2 col-form-label">Contraseña</label>
                    <div class="col-sm-3">
                        <input type="password" class="form-control" name="TxtContrasena" value=<?php echo $sucontrasena;?>  placeholder="Contraseña">
                    </div>
                </div>
<br/>
                <div class="form-group row">
                    <label input type="text" class="col-sm-3 col-form-label">Rol</label>
                    <div class="col-sm-8">
                        <select class="form-select"  name="TxtRol" id="TxtRol">
                            <option>Administrador</option>
                            <option>Cajero</option>
                            <option>Certificado</option>
                        </select>
                    </div>   
                </div>
<br/>
                <div class="form-group row">
                    <label input type="text" class="col-sm-3 col-form-label">Celular</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control"  name="TxtCelular" value=<?php echo $sucelular;?> id="TxtCelular" placeholder="Celular">
                    </div>
                    <label input type="text" class="col-sm-2 col-form-label">Tel. Casa</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control"  name="TxtTelCasa" value=<?php echo $sutel;?> id="TxtTelcasa" placeholder="Tel. Casa">
                    </div>
                </div>   
<br/>
                <div class="form-group row">
                    <label input type="text" class="col-sm-3 col-form-label">Correo</label>
                    <div class="col-sm-8">
                        <input input type="text" class="form-control" name="TxtCorreo" value=<?php echo $sucorreo;?> id="TxtCorreo" placeholder="Correo">
                    </div>
                </div>
<br/>
                <div class="form-group row">
                    <label input type="text" class="col-sm-3 col-form-label">Dirección</label>
                    <div class="col-sm-8">
                        <input input type="text" class="form-control" name="TxtDireccion" value=<?php echo $sudirecion;?> id="TxtDireccion" placeholder="Dirección">
                    </div>
                </div>
<br/>
                <div class="form-group row">
                    <label input type="text" class="col-sm-3 col-form-label">Selecione sucursal</label>
                    <div class="col-sm-8">
                        <select class="form-select"  name="TxtSucursal" id="TxtSucursal">
                            <option>Esquipula 1</option>
                            <option>Esquipula 2</option>
                            <option>Esquipula 3</option>
                            <option>Esquipula 4</option>
                        </select>
                    </div>   
                </div>
<br/>
                    <script type="text/javascript">
                        function siborra()
                        {
                            var respuesta=confirm("Se eliminara toda la informacion relacionada con el empleado")
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
                        function sicambia()
                        {
                            var respuesta=confirm("Seguro de guardar los cambios")
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
                <div class="card-body">
                    <div class="modal-footer">
                        <button type="submit" name="accion" value="eliminar"  class="btn btn-danger"     onclick="return siborra()" >eliminar</button>
                        <button type="submit" name="accion" value="atras"     class="btn btn-primary"  data-bs-dismiss="modal">Regresar</button>
                        <button type="submit" name="accion" value="modificar" class="btn btn-primary"       onclick="return sicambia()">Modificar registro</button>
                    </div>
                </div>
<br/>
            </form>
        </div>
    </div>
</div>
<?php include("../templatelic/pie.php");?>    
