
<?php


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
        case  "Registronuevo":
            {
                header('location:GastosDelosclientes.php');
            }
            break;
        
            
        default:
            //echo "mal";
            break;
    }
}
?>
<?php include("../templatelic/cabeza.php"); ?>
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <div class="text-center">  
                <h3>Consulta de gastos de clientes</h3>
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
                    <button type="submit" name="accion" value= "Registronuevo" class="btn btn-primary">Registrar nuevo gasto</button>
                </div>
            </from>
            </div><?php if($buscacliente!=0) { ?>
            <form action="https://local/contenido/GastosDelosclientesinfo.php" method="post">    

            </form>
            <form action="https://local/contenido/GastosDelosclientesinfo.php" method="post">         
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Cedula</th>
                                <th scope="col">Fecha de Creación</th>  
                                <th scope="col">Informe</th> 
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($estudiantes as $esquipula) { ?>
                                <?php if($esquipula['cedula']==$fcedula) { ?>
                                    <tr class="table-primary">
                                        <td><?php echo $esquipula['ID']; ?></td>
                                        <td><?php echo $esquipula['cedula'];?></td>
                                        <td><?php echo $esquipula['fecha']; ?></td>
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
<?php include("../templatelic/pie.php");?>  
