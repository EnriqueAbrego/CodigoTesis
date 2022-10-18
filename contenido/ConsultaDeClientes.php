<?php
    include("../Confi/db.php");

    $fcedula=(isset($_POST['recibos2']))?$_POST['recibos2']:"";
    $buscacliente=0;
?>
<?php
if($_POST){
    $accion=(isset($_POST['accion']))?$_POST['accion']:"";
    //header('location:Registro.php');
    //print_r($_POST);
    switch ($accion) {
        case  "nuqevo":
            $buscacliente=1;
            break;

        case  "ver":
            {
                
                //header('location:modificacion.php');
            }
            break;
        
        default:
            //echo "mal";
            break;
    }
}
?>
<?php include("../templatelic/cabeza.php");?>
<div class="col-md-1"> </div>
<div class="col-md-10">
    <div class="card">
        <div class="card-header">
            <div class="text-center">  
                <h3>Consulta de clientes</h3>
            </div>    
        </div>
        <div class="card-body">
            <div class="text-center">  
                <h3>Información Estudiantes</h3>
            </div>
            <form method="post" enctype="multipart/form-data">
                <div class="form-group row">
                    <div class="col-md-3"></div>
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Cedula del estudiante</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" name="recibos2" valu id="inputEmail3" placeholder="Cedula del estudiante">
                    </div> 
                </div>  
                <br/>
                <div class="text-center"> 
                    <button type="submit" name="accion" value= "nuqevo" class="btn btn-primary">Consultar</button>
                </div>
            </from>
            </div><?php if($buscacliente!=0) { ?>
            <form action="https://local/contenido/infocompletaestudiante.php" method="post">   

            </form>
            <form action="https://local/contenido/infocompletaestudiante.php" method="post">       
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Fecha</th>
                                <th scope="col">Estudiante</th>
                                <th scope="col">Cedula</th>  
                                <th scope="col">Celular</th>  
                                <th scope="col">Descripcion</th> 
                                <th scope="col">Informe</th> 
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($estudiantes as $esquipula) { ?>
                                <?php if($esquipula['Cedula']==$fcedula) { ?>
                                    <tr class="table-primary">
                                        <td><?php echo $esquipula['Fecha']; ?></td>
                                        <td><?php echo $esquipula['PrimerNombre']," ",$esquipula['PrimerApellido']; ?></td>
                                        <td><?php echo $esquipula['Cedula']; ?></td>
                                        <td><?php echo $esquipula['Celular']; ?></td>
                                        <td><?php echo $esquipula['EstadoDeContrado']; ?></td>
                                        <td><button type="submit" value=<?php echo $esquipula['ID']; ?> name="idid" class="btn btn-primary">Ver</button></td>                            
                                    </tr>
                                <?php }  ?>
                            <?php }  ?> 
                            <?php foreach($estudiantes as $esquipula) { ?>
                                <?php if($esquipula['PrimerNombre']==$fcedula) { ?>
                                    <tr class="table-primary">
                                        <td><?php echo $esquipula['Fecha']; ?></td>
                                        <td><?php echo $esquipula['PrimerNombre']," ",$esquipula['PrimerApellido']; ?></td>
                                        <td><?php echo $esquipula['Cedula']; ?></td>
                                        <td><?php echo $esquipula['Celular']; ?></td>
                                        <td><?php echo $esquipula['EstadoDeContrado']; ?></td>
                                        <td><button type="submit" value=<?php echo $esquipula['ID']; ?> name="idid" class="btn btn-primary">Ver</button></td>                            
                                    </tr>
                                <?php }  ?>
                            <?php }  ?>
                        </tbody>
                    </table>
                </div>  
            </form>
            <?php }  ?>
        </div>
    </div>
</div>
<div class="col-md-1">
<?php include("../templatelic/pie.php");?>  
