<?php include("../templatelic/cabeza.php");?>
<?php


    $consultaSucursal="a";
    $gananciatotal=0;
    $Gastototal=0;
    $montodefacturadia=0;
    $abonodefacturadia=0;
    $diodia=1;
    $saldodia=0;
    $bdayhoy=(isset($_POST['bday']))?$_POST['bday']:"";
    $sucursal=(isset($_POST['sucursal']))?$_POST['sucursal']:"";
    if($sucursal=="Esquipula 1"){$consultaSucursal="esquipula1";}
    if($sucursal=="Esquipula 2"){$consultaSucursal="esquipula2";}
    if($sucursal=="Esquipula 3"){$consultaSucursal="esquipula3";}
    if($sucursal=="Esquipula 4"){$consultaSucursal="esquipula4";}
    $fechaf=$bdayhoy;
    $fechaf=obtenerFechaEnLetra($fechaf);
    function obtenerFechaEnLetra($fechaf){
    $num = date("j", strtotime($fechaf));
    $anno = date("Y", strtotime($fechaf));
    $mes = date("m", strtotime($fechaf));;
    return $num.'-'.$mes.'-'.$anno;
    }   
    
    
    
?>
<?php
if($_POST){
    $diodia=0;
}
?>
<br/><br/><br/><br/>
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <div class="text-center">  
                <h2>Registro de ingresos  gastos </h2>
            </div>
        </div>
        <div class="card-body">
            <div class="text-center"> 
                <div class="form-group row">
                    <div class="col-sm-4">
                        <input class="input" name="idid" type="HIDDEN" value=<?php echo $consultaSucursal; ?>  id="idid" placeholder="Primer Nombre" readonly="">
                    </div>
                </div>
            </div>
            <div class="text-center">  
                <h3>Seleccione Fecha</h3>
            </div>
            <form method="post">    
<br/>              
                <div class="text-center"> 
                    Seleccione Fecha <label> <input type="date" name="bday"></label>
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
                        <button type="submit" name="accion" value= "nuqevo" class="btn btn-primary">Consultar</button>
                </div>
            </form>
<br/>
            </div><?php if($diodia==0) { ?>
                <div class="card">
                    <div class="card-header">
                        <div class="text-center">  
                            <h2>REGISTRO DE INGRESOS DE CONTRATOS</h2>
                        </div>
                    </div>
                    <div class="card-body">   
                        <form action="https://local/contenido/infocompletaestudiante.php" method="post">   
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">Factura</th>
                                            <th scope="col">Nombre</th>
                                            <th scope="col">Cedula</th>
                                            <th scope="col">Monto</th>
                                            <th scope="col">Fecha</th>
                                            <th scope="col">Descripcion</th>
                                            <th scope="col">Ver</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($abonoscliente as $esquipula) { ?>
                                            <?php if($esquipula['SucursalAbono']==$sucursal) { ?>
                                                <?php if($esquipula['FechaAbonoUno']==$bdayhoy) { ?>
                                                    <?php $gananciatotal=$gananciatotal+$esquipula['MontoAbonoUno'];?> 
                                                    <?php
                                                    include("../Confi/db.php");
                                                    $idid=$esquipula['IdCliente'];

                                                    $estudianteas=$sentenciaSQL->fetch(PDO::FETCH_LAZY);
                                                    $nombre=$estudianteas['PrimerNombre'].' '.$estudianteas['PrimerApellido'];
                                                    ?>                                           
                                                    <tr class="table-primary">
                                                        <td><?php echo $esquipula['RecAbonoUno']; ?></td>
                                                        <td><?php echo $nombre; ?></td>
                                                        <td><?php echo $esquipula['CedulaCliente']; ?></td>
                                                        <td><?php echo $esquipula['MontoAbonoUno']; ?></td>
                                                        <td><?php echo $fechaf ?></td>
                                                        <td>Primer Abono</td>
                                                        <td><button type="submit" value=<?php echo $esquipula['IdCliente']; ?> name="idid" class="btn btn-primary">Ver</button></td>
                                                    </tr>
                                                <?php }  ?>
                                                <?php if($esquipula['FechaAbonoDos']==$bdayhoy) { ?>
                                                    <?php $gananciatotal=$gananciatotal+$esquipula['MontoAbonoDos'];?> 
                                                    <?php
                                                    include("../Confi/db.php");
                                                    $idid=$esquipula['IdCliente'];

                                                    $estudianteas=$sentenciaSQL->fetch(PDO::FETCH_LAZY);
                                                    $nombre=$estudianteas['PrimerNombre'].' '.$estudianteas['PrimerApellido'];
                                                    ?>                                                   
                                                    <tr class="table-primary">
                                                        <td><?php echo $esquipula['RecAbonoDos']; ?></td>
                                                        <td><?php echo $nombre; ?></td>
                                                        <td><?php echo $esquipula['CedulaCliente']; ?></td>
                                                        <td><?php echo $esquipula['MontoAbonoDos']; ?></td>
                                                        <td><?php echo $fechaf ?></td>
                                                        <td>Segundo Abono</td> 
                                                        <td><button type="submit" value=<?php echo $esquipula['IdCliente']; ?> name="idid" class="btn btn-primary">Ver</button></td>                                                    
                                                    </tr>
                                                <?php }  ?>   
                                                <?php if($esquipula['FechaAbonoTres']==$bdayhoy) { ?>
                                                    <?php $gananciatotal=$gananciatotal+$esquipula['MontoAbonoTres'];?> 
                                                    <?php
                                                    include("../Confi/db.php");
                                                    $idid=$esquipula['IdCliente'];

                                                    $estudianteas=$sentenciaSQL->fetch(PDO::FETCH_LAZY);
                                                    $nombre=$estudianteas['PrimerNombre'].' '.$estudianteas['PrimerApellido'];
                                                    ?>                                                   
                                                    <tr class="table-primary">
                                                        <td><?php echo $esquipula['RecAbonoTres']; ?></td>
                                                        <td><?php echo $nombre; ?></td>
                                                        <td><?php echo $esquipula['CedulaCliente']; ?></td>
                                                        <td><?php echo $esquipula['MontoAbonoTres']; ?></td>
                                                        <td><?php echo $fechaf ?></td>
                                                        <td>Tercer Abono</td>   
                                                        <td><button type="submit" value=<?php echo $esquipula['IdCliente']; ?> name="idid" class="btn btn-primary">Ver</button></td>                                                  
                                                    </tr>
                                                <?php }  ?>   
                                                <?php if($esquipula['FechaAbonoCuatro']==$bdayhoy) { ?>
                                                    <?php $gananciatotal=$gananciatotal+$esquipula['MontoAbonoCuatro'];?>  
                                                    <?php
                                                    include("../Confi/db.php");
                                                    $idid=$esquipula['IdCliente'];

                                                    $estudianteas=$sentenciaSQL->fetch(PDO::FETCH_LAZY);
                                                    $nombre=$estudianteas['PrimerNombre'].' '.$estudianteas['PrimerApellido'];
                                                    ?>                                                  
                                                    <tr class="table-primary">
                                                        <td><?php echo $esquipula['RecAbonoCuatro']; ?></td>
                                                        <td><?php echo $nombre; ?></td>
                                                        <td><?php echo $esquipula['CedulaCliente']; ?></td>
                                                        <td><?php echo $esquipula['MontoAbonoCuatro']; ?></td>
                                                        <td><?php echo $fechaf ?></td>
                                                        <td>Cuarto Abono</td>     
                                                        <td><button type="submit" value=<?php echo $esquipula['IdCliente']; ?> name="idid" class="btn btn-primary">Ver</button></td>                                               
                                                    </tr>
                                                <?php }  ?>
                                            <?php }  ?>
                                        <?php }  ?>
                                    </tbody>
                                </table>
                            </div>
                        </form>
                    </div>
                </div>
                <br/>  
                <div class="card">
                    <div class="card-header">
                        <div class="text-center">  
                            <h2>Ingresos por gastos adicionales de clientes</h2>
                        </div>
                    </div>                 
                    <div class="card-body">   
                        <form action="https://local/contenido/GastosDelosclientesinfo.php" method="post">   
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">Motivo</th>
                                            <th scope="col">Fecha</th>
                                            <th scope="col">Abono uno</th>                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($gastocliente as $gastocli) { ?>
                                            <?php if($gastocli['Sucursal']==$sucursal) { ?>
                                                <?php if($gastocli['fecha']==$bdayhoy) { ?>
                                                    <?php $gananciatotal=$gananciatotal+$gastocli['abono']; ?>
                                                    <tr class="table-primary">
                                                        <td><?php echo $fechaf; ?></td>
                                                        <td><?php echo $gastocli['motivo']; ?></td>
                                                        <td><?php echo $gastocli['abono']; ?></td>
                                                    </tr>
                                                <?php }  ?>  
                                            <?php }  ?> 
                                        <?php }  ?>
                                    </tbody>
                                </table>
                            </div>
                        </form>
                    </div>
                </div>
<br/>
                <div class="card">
                    <div class="card-header">
                        <div class="text-center">   
                            <h3>Total del dia</h3>
                        </div>
                    </div>                 
                    <div class="card-body">   
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">fecha</th>
                                        <th scope="col">Ingresos totales</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $saldodia=$gananciatotal; ?>
                                    <tr class="table-primary">
                                        <td><?php echo $fechaf; ?></td>
                                        <td><?php echo $saldodia; ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <br/>
                <div class="text-center">         
                    <form action="https://local/contenido/Reportedeventasdiario.php"  target="_blank" method="post">
                        <input class="input" type="HIDDEN" value=<?php echo $consultaSucursal?> name="idid2" placeholder="N°">
                        <input class="input" type="HIDDEN" value=<?php echo $nombreUsuario?> name="idid1" placeholder="N°">
                        <button type="submit" value=<?php echo $bdayhoy?> name="idid" class="btn btn-primary">generar reporte de Ingresos </button>
                    </form> 
                    <br/><br/>
                    <form action="https://local/contenido/GeneracionDeReportes.php" method="post">
                        <button type="submit" class="btn btn-primary">Regresar</button>
                    </form> 
                </div>
            <?php }  ?>
<br/>
    </div>
</div>
<?php include("../templatelic/pie.php");?>    
