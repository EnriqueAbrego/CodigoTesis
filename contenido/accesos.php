<?php

    
?>
<?php include("../templatelic/cabeza.php");?>
<br/><br/><br/><br/>
<div class="col-md-1"> </div>
<div class="col-md-10">
    <div class="card">
        <div class="card-header">
            <div class="text-center">  
                Accesos al sistema 
            </div>
            

        </div>
        <div class="card-body">
        <div class="text-center">  
            <h3></h3>
        </div>
        <form method="post">    
<br/>              
        <div class="text-center"> 
            Filtrar por el dia: <label> <input type="date" name="bday"></label>
        </div>
<br/>
        <div class="text-center"> 
                <button type="submit" name="accion" value= "nuqevo" class="btn btn-primary">Consultar</button>
        </div>
        <br/>  
        <div class="text-center"> 
        </div>
        <div class="text-center"> 
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Usuaio</th>
                            <th scope="col">dia</th>
                            <th scope="col">hora</th> 
                            <th scope="col">sucursal</th>   
                            <th scope="col">estado</th>  
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($iniciosecione as $esquipula) { ?>
                            <?php if($esquipula['dia']==$bdayhoy) { ?>
                                <tr class="table-success">
                                    <td><?php echo $esquipula['Registro']; ?></td>
                                    <td><?php echo $esquipula['Usuario']; ?></td>
                                    <td><?php echo $esquipula['dia']; ?></td>
                                    <td><?php echo $esquipula['hora']; ?></td>
                                    <td><?php echo $esquipula['sucursal']; ?></td>
                                    <td><?php echo $esquipula['estado']; ?></td>
                                </tr>
                            <?php }  ?>   
                        <?php }  ?>
                    </tbody>
                </table>
            </div>  
        </form>    
        <form action="https://local/contenido/pdfaccesos.php" target="_blank" method="post">
            <button type="submit" value=<?php echo $bdayhoy?> name="idid" class="btn btn-success">Generar reporte de accesos</button>
        </form>    
<br/>
    </div>
</div>
<?php include("../templatelic/pie.php");?>    
