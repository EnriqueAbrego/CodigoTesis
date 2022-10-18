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
    $totaldegastos=0;
    $consultaSucursal="esquipula1";
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
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <div class="text-center">  
                <h2>Registro de ingresos y gastos </h2>
            </div>
        </div>
        <div class="card-body">
            <div class="text-center"> 
                <div class="form-group row">
                    <div class="col-sm-4">
                        <input class="input" name="idid" type="HIDDEN" value=<?php echo $consultaSucursal; ?>>
                    </div>
                </div>
            </div>
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
                            <h2>Registros de gastos de la Empresa</h2>
                        </div>
                    </div>
                    <div class="card-body">  
                    <form action="https://local/contenido/GastosDeLaEmpresainfo.php" method="post">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">Fecha</th>
                                            <th scope="col">Proveedor</th>
                                            <th scope="col">Descripción</th>
                                            <th scope="col">Egreso</th>
                                            <th scope="col">Ver</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($gastos as $gastoem) { ?>
                                            <?php if($gastoem['GastosESucursal']==$sucursal) { ?>    
                                                <?php $gastoemdia=$gastoemdia+$gastoem['monto']; ?>
                                                <tr class="table-danger">
                                                    <td><?php echo $gastoem['fecha']; ?></td>
                                                    <td><?php echo $gastoem['nombre']; ?></td>
                                                    <td><?php echo $gastoem['motivo']; ?></td>
                                                    <td><?php echo $gastoem['monto']; ?></td>
                                                    <td><button type="submit" value=<?php echo $gastoem['ID']; ?> name="idid" class="btn btn-primary">Ver</button></td>
                                                </tr>
                                            <?php }  ?>
                                        <?php }  ?>
                                    </tbody>
                                </table>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <div class="text-center">  
                            <h2>Total</h2>
                        </div>
                    </div>
                    <div class="card-body">  
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">Fecha Inicial</th>
                                        <th scope="col">Fecha Final</th>
                                        <th scope="col">Egreso Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="table-danger">
                                        <td><?php echo $bdayq1; ?></td>
                                        <td><?php echo $bdayq2; ?></td>
                                        <td><?php echo $gastoemdia; ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="text-center">         
                    <form action="https://local/contenido/pdfReporteEgresosMensual.php" target="_blank" method="post">
                        <input type="hidden" name="bday1" value=<?php echo $bdayq1?> >
                        <input type="hidden" name="bday2" value=<?php echo $bdayq2?> >
                        <input type="HIDDEN" name="idid1" value=<?php echo $consultaSucursal?>  >
                        <button type="submit" value=<?php echo $bdayhoy?> name="idid" class="btn btn-primary">generar reporte de Egresos</button>
                    </form> 
                </div>
                <br/>
                <div class="text-center">    
                    <form action="https://local/contenido/GeneracionDeReportesrangoDeGastos.php" method="post">
                        <button type="submit" class="btn btn-primary">Regresar</button>
                    </form> 
                </div>
            <?php }  ?>
            <br/><br/><br/>
            </div>
<br/>
    </div>
</div>
<?php include("../templatelic/pie.php");?>    



