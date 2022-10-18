<?php

?>
<?php
if($_POST){
    $accion=(isset($_POST['accion']))?$_POST['accion']:"";
    $id=(isset($_POST['id']))?$_POST['id']:"";
    echo $id;
    //header('location:Registro.php');
    //print_r($_POST);
    switch ($accion) {
        case  "nuevo":
            header('location:Registro.php');
            break;

        case  "ver":
            {
                
                header('location:modificacion.php');
            }
            break;
        
        default:
            //echo "mal";
            break;
    }
}
?>
<?php include("../templatelic/cabeza.php");?>
<br/><br/><br/><br/>
<div class="col-md-1"> </div>
<div class="col-md-10">
    <div class="card">
        <div class="card-header">
            <div class="text-center">  
                <h2>Manejo de personal</h2>
            </div>    
        </div>
        <div class="card-body">
        <div class="text-center">  
            <h3>Usuarios activos</h3>
        </div>
        <form action="https://local/contenido/modificacion.php" method="post">       
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Primer Nombre</th>
                            <th scope="col">Primer Apellido</th>    
                            <th scope="col">Rol</th>  
                            <th scope="col">Celular</th>  
                            <th scope="col">Correo</th>  
                            <th scope="col">Sucursal</th>
                            <th scope="col">Informe</th> 
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($listaEmpledos as $esquipula) { ?>
                            <tr class="table-success">
                                <td><?php echo $esquipula['ID']; ?></td>
                                <td><?php echo $esquipula['PrimerNombre']; ?></td>
                                <td><?php echo $esquipula['PrimerApellido']; ?></td>
                                <td><?php echo $esquipula['Rol']; ?></td>
                                <td><?php echo $esquipula['Celular']; ?></td>
                                <td><?php echo $esquipula['Correo']; ?></td>
                                <td><?php echo $esquipula['Sucursal']; ?></td>
                                <td><button type="submit"value=<?php echo $esquipula['ID']; ?> name="idid" class="btn btn-success">Ver</button></td>                            
                            </tr>
                        <?php }  ?>
                    </tbody>
                </table>
            </div>  
        </form>
        <form action="https://local/contenido/Registro.php" method="post">
            <div class="card-body">
                <div class="modal-footer">
                    <button type="submit" name="accion" value= "nuqevo" class="btn btn-primary">Registrar nuevo Personal</button>
                </div>
            </div>
        </from>
<br/>
    </div>
</div>
<?php include("../templatelic/pie.php");?>    
