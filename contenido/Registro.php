<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
if($_POST){
    $accion=(isset($_POST['accion']))?$_POST['accion']:"";
    switch ($accion) {
        case  "nuevo":
            { 
    $sucursal1="esquipula1";
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
    if($TxtCorreo==""){$TxtCorreo="NO_INGRESADO";}

    $TxtDireccion=(isset($_POST['TxtDireccion']))?$_POST['TxtDireccion']:"";
    if($TxtDireccion==""){$TxtDireccion="NO_INGRESADO";}
    
    $TxtSucursal=(isset($_POST['TxtSucursal']))?$_POST['TxtSucursal']:"";
    if($TxtSucursal==""){$TxtSucursal="NO_INGRESADO";}

    $TxtContrasena=password_hash($TxtContrasena,PASSWORD_DEFAULT);

    try {

        header('location:ManejoDePersonal.php'); 
    } catch (Exception $ex) {
        //$txtnombreerror="Error";
        //echo $txtnombreerror."<br/>";
    }
   



            }
            break;

        case  "atras":
            header('location:ManejoDePersonal.php');
            break;
        
        default:
            //echo "mal";
            break;
    }
    
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
                    Registrar personal 
                </div>
            </div>
        <div class="card-body">
            <form method="POST" enctype="multipart/form-data">
<br/>
                <div class="form-group row">
                    <label for="text" class="col-sm-3 col-form-label">Primer Nombre</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" name="TxtPrimerNombre" id="TxtPrimerNombre" placeholder="Primer Nombre">
                    </div>
                    <label for="text" class="col-sm-2 col-form-label">Segundo Nombre</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" name="TxtSegundoNombre" id="TxtSegundoNombre" placeholder="Segundo Nombre">
                    </div>
                </div>   
<br/>
                <div class="form-group row">
                    <label for="text" class="col-sm-3 col-form-label">Primer Apellido</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" name="TxtPrimerApellido" id="TxtPrimerApellido" placeholder="Primer Apellido">
                    </div>
                    <label for="text" class="col-sm-2 col-form-label">Segundo Apellido</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" name="TxtSegundoApellido" id="TxtSegundoApellido" placeholder="Segundo Apellido">
                    </div>
                </div>   
<br/>
                <div class="form-group row">
                    <label for="text" class="col-sm-3 col-form-label">Usuario</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" name="TxtUsuario" id="TxtUsuario" placeholder="Usuario">
                    </div>
                    <label for="text" class="col-sm-2 col-form-label">Contraseña</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" name="TxtContrasena"  placeholder="Contraseña">
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
                        <input type="text" class="form-control"  name="TxtCelular" id="TxtCelular" placeholder="Celular">
                    </div>
                    <label input type="text" class="col-sm-2 col-form-label">Tel. Casa</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control"  name="TxtTelCasa" id="TxtTelcasa" placeholder="Tel. Casa">
                    </div>
                </div>   
<br/>
                <div class="form-group row">
                    <label input type="text" class="col-sm-3 col-form-label">Correo</label>
                    <div class="col-sm-8">
                        <input input type="text" class="form-control" name="TxtCorreo" id="TxtCorreo" placeholder="Correo">
                    </div>
                </div>
<br/>
                <div class="form-group row">
                    <label input type="text" class="col-sm-3 col-form-label">Dirección</label>
                    <div class="col-sm-8">
                        <input input type="text" class="form-control" name="TxtDireccion" id="TxtDireccion" placeholder="Dirección">
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
                <div class="card-body">
                    <div class="modal-footer">
                        <button type="submit" name="accion" value= "nuevo" class="btn btn-primary">Registrar nuevo Personal</button>
                        <button type="submit" name="accion" value="atras"  class="btn btn-primary" data-bs-dismiss="modal">Regresar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php include("../templatelic/pie.php");?>    