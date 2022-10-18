<?php
    $accion=(isset($_POST['accion']))?$_POST['accion']:"";
    $bdayq1=(isset($_POST['bday1']))?$_POST['bday1']:"";
    $bdayq2=(isset($_POST['bday2']))?$_POST['bday2']:"";
    $diodia=1;
    $gananciatotal=0;
    $gananciatotalunoydos=0;
    $montodefacturadia=0;
    $abonodefacturadia=0;
    $gastoemdia=0;
    $bdayhoy=(isset($_POST['bday']))?$_POST['bday']:"";   
    $sucursal=(isset($_POST['sucursal']))?$_POST['sucursal']:"";
    if($sucursal=="Esquipula 1"){$consultaSucursal="esquipula1";}
    if($sucursal=="Esquipula 2"){$consultaSucursal="esquipula2";}
    if($sucursal=="Esquipula 3"){$consultaSucursal="esquipula3";}
    if($sucursal=="Esquipula 4"){$consultaSucursal="esquipula4";}
    
?>
<?php
if($_POST){
    switch ($accion) {

        case  "modificar":
            {
            try {
                
                $diodia=0;
                //echo 'bn';

        } catch (Exception $ex) {
                //$txtnombreerror="Error";
                echo 'erro';
        }
           
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
                <h2>Registro de ingresos y gastos </h2>
            </div>
        </div>
        <div class="card-body">
            <div class="text-center">  
                <h3>Seleccione Fecha</h3>
            </div>
            <form method="post">    
                <br/>            
                <div class="text-center"> 
                    Fecha Inicial <label> <input type="date" name="bday1"></label>
                </div>    
                <br/>            
                <div class="text-center"> 
                    Fecha  Final <label> <input type="date" name="bday2"></label>
                </div> 
                <br/>
                <div class="form-group row"> 
                    <div class="col-sm-3"></div>    
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Selecione Sucursal</label>
                    <div class="col-sm-3">
                        <select class="form-select" name="sucursal" id="exampleSelect1">
                                <option>Esquipula 1</option>
                                <option>Esquipula 2</option>
                                <option>Esquipula 3</option>
                                <option>Esquipula 4</option>
                        </select>
                    </div>
                </div>
                <br/>
                <div class="text-center"> 
                    <button type="submit" name="accion" value="modificar" class="btn btn-primary"  >Consultar</button>
                </div> 
            </form>
            <br/>
            </div><?php if($diodia==0) { ?>
                <div class="card">
                    <div class="card-header">
                        <div class="text-center">  
                            <h2>Registros de ingresos de Gastos adicionales</h2>
                        </div>
                    </div>
                    <div class="card-body">  
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr> 
                                        <th scope="col">Fecha</th>
                                        <th scope="col">Total ingresos de Gastos de Clientes</th>
                                        <th scope="col">Motivo</th>
                                        <th scope="col">Total de Ingresos Acumulado</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($facturasclientes as $esquipula) { ?>
                                        <?php $gananciatotal=$gananciatotal+$esquipula['abono']; ?>
                                        <tr class="table-primary">
                                            <td><?php echo $esquipula['fecha']; ?></td>
                                            <td><?php echo $esquipula['abono']; ?></td>
                                            <td>Gastos adicionales de cliente</td>
                                            <td><?php echo $english_format_number = number_format($gananciatotal, 2, '.', '');?> </td>
                                        </tr>
                                    <?php }  ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <br/>
                <div class="card">
                    <div class="card-header">
                        <div class="text-center">  
                            <h2>Registros de Ingresos Por primer abono</h2>
                        </div>
                    </div>
                    <div class="card-body">  
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">Fecha</th>
                                        <th scope="col">Total ingresos de contratos</th>
                                        <th scope="col">Motivo</th>
                                        <th scope="col">Total de Ingresos Acumulado</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($AbonosClienteUno as $contracli) { ?>
                                        <?php $gananciatotal=$gananciatotal+$contracli['MontoAbonoUno']; ?>
                                        <tr class="table-primary">
                                            <td><?php echo $contracli['FechaAbonoUno']; ?></td>
                                            <td><?php echo $contracli['MontoAbonoUno']; ?></td>
                                            <td><?php echo "Contratos de clientes" ?></td>
                                            <td><?php echo $english_format_number = number_format($gananciatotal, 2, '.', '');?></td>
                                        </tr>
                                    <?php }  ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <br/>
                <div class="card">
                    <div class="card-header">
                        <div class="text-center">  
                            <h2>Registros de Ingresos Por Segundo abono</h2>
                        </div>
                    </div>
                    <div class="card-body">  
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">Fecha</th>
                                        <th scope="col">Total ingresos de contratos</th>
                                        <th scope="col">Motivo</th>
                                        <th scope="col">Total de Ingresos Acumulado</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($AbonosClienteDos as $contracli) { ?>
                                        <?php $gananciatotal=$gananciatotal+$contracli['MontoAbonoDos']; ?>
                                        <tr class="table-primary">
                                            <td><?php echo $contracli['FechaAbonoDos']; ?></td>
                                            <td><?php echo $contracli['MontoAbonoDos']; ?></td>
                                            <td><?php echo "Contratos de clientes" ?></td>
                                            <td><?php echo $english_format_number = number_format($gananciatotal, 2, '.', '');?></td>
                                        </tr>
                                    <?php }  ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <br/>
                <div class="card">
                    <div class="card-header">
                        <div class="text-center">  
                            <h2>Registros de Ingresos Por Tercer abono</h2>
                        </div>
                    </div>
                    <div class="card-body">  
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">Fecha</th>
                                        <th scope="col">Total ingresos de contratos</th>
                                        <th scope="col">Motivo</th>
                                        <th scope="col">Total de Ingresos Acumulado</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($AbonosClienteTres as $contracli) { ?>
                                        <?php $gananciatotal=$gananciatotal+$contracli['MontoAbonoTres']; ?>
                                        <tr class="table-primary">
                                            <td><?php echo $contracli['FechaAbonoTres']; ?></td>
                                            <td><?php echo $contracli['MontoAbonoTres']; ?></td>
                                            <td><?php echo "Contratos de clientes" ?></td>
                                            <td><?php echo $english_format_number = number_format($gananciatotal, 2, '.', '');?></td>
                                        </tr>
                                    <?php }  ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <br/>
                <div class="card">
                    <div class="card-header">
                        <div class="text-center">  
                            <h2>Registros de Ingresos Por Cuarto abono</h2>
                        </div>
                    </div>
                    <div class="card-body">  
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">Fecha</th>
                                        <th scope="col">Total ingresos de contratos</th>
                                        <th scope="col">Motivo</th>
                                        <th scope="col">Total de Ingresos Acumulado</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($AbonosClienteCuatro as $contracli) { ?>
                                        <?php $gananciatotal=$gananciatotal+$contracli['MontoAbonoCuatro']; ?>
                                        <tr class="table-primary">
                                            <td><?php echo $contracli['FechaAbonoCuatro']; ?></td>
                                            <td><?php echo $contracli['MontoAbonoCuatro']; ?></td>
                                            <td><?php echo "Contratos de clientes" ?></td>
                                            <td><?php echo $english_format_number = number_format($gananciatotal, 2, '.', '');?></td>
                                        </tr>
                                    <?php }  ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <br/>
                <div class="card">
                    <div class="card-header">
                        <div class="text-center">  
                            <h2>Registros de gastos de la Empresa</h2>
                        </div>
                    </div>
                    <div class="card-body">  
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">Fecha</th>
                                        <th scope="col">monto</th>
                                        <th scope="col">Motivo</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($gastos as $gastoem) { ?>
                                        <?php $gastoemdia=$gastoemdia+$gastoem['montos']; ?>
                                        <tr class="table-danger">
                                            <td><?php echo $gastoem['fecha']; ?></td>
                                            <td><?php echo $gastoem['montos']; ?></td>
                                            <td><?php echo "Gastos de la Empresa" ?></td>
                                        </tr>
                                    <?php }  ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <br/>
                <div class="card">
                    <div class="card-header">
                        <div class="text-center">  
                            <h2>Registros de ingresos de contratos</h2>
                        </div>
                    </div>
                    <div class="card-body">  
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">fecha de inicio</th>
                                        <th scope="col">fecha de de cierre</th>
                                        <th scope="col">Ganancias</th>
                                        <th scope="col">Gastos</th>
                                        <th scope="col">Ganancia total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="table-success">
                                        <?php $totalfin=$gananciatotal-$gastoemdia; ?>
                                        <td><?php echo $bdayq1; ?></td>
                                        <td><?php echo $bdayq2; ?></td>
                                        <td><?php echo $gananciatotal; ?></td>
                                        <td><?php echo $gastoemdia; ?></td>
                                        <td><?php echo $totalfin; ?></td>
                                    </tr>
                                </tbody>
                            </table>               
                        </div>
                    </div>
                </div>
                <div class="text-center">         
                    <form action="https://local/contenido/Reportedeventasmensuales.php" method="post">
                        <input type="hidden" name="bday1" value=<?php echo $bdayq1?> >
                        <input type="hidden" name="bday2" value=<?php echo $bdayq2?> >
                        <input type="hidden" name="susucursal" value=<?php echo $consultaSucursal?> >
                        <button type="submit" value=<?php echo $bdayhoy?> name="idid" class="btn btn-primary">generar reporte de Ingresos </button>
                    </form> 
                </div>
            <?php }  ?>
            </div>
<br/>
    </div>
</div>
<?php include("../templatelic/pie.php");?>    



