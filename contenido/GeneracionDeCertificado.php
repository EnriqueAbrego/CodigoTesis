
<?php
$idid=$_POST["idid"];

include("../Confi/db.php");




$gastotoalcliente=0;
$abonostotales=0;
$deudarestante=0;
foreach($abonosdelcliente as $esquipula) {
    if($esquipula['CedulaCliente']==$cedulaz) {
        $gastotoalcliente=$gastotoalcliente+$esquipula['MontoFactura'];
        $abonostotales=$abonostotales+$esquipula['MontoAbonoUno']+$esquipula['MontoAbonoDos']+$esquipula['MontoAbonoTres']+$esquipula['MontoAbonoCuatro'];
    }
}
foreach($gasto as $esquipula) { 
    if($esquipula['cedula']==$cedulaz) {
        $gastotoalcliente=$gastotoalcliente+$esquipula['monto'];
        $abonostotales=$abonostotales+$esquipula['abono'];
    }
}





$deudarestante=$abonostotales-$gastotoalcliente;
?>



<?php include("../templatelic/cabeza.php"); ?>
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            Generar Certificado
        </div>
        <div class="card-body">
            <div class="card" >
                <div class="card-header">
                    El Cliente mantiene los siguientes gastos
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">Gastos totales</th>
                                    <th scope="col">Pagos totales</th>
                                    <th scope="col">Deuda Restante</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php if($deudarestante<'0'){?>
                                <tr class="table-danger">
                                    <td><?php echo $gastotoalcliente; ?></td>
                                    <td><?php echo $abonostotales ?></td>
                                    <td><?php echo $deudarestante ?></td>
                                </tr>
                            <?php }?>
                            <?php if($deudarestante=='0'){?>
                                <tr class="table-primary">
                                    <td><?php echo $gastotoalcliente; ?></td>
                                    <td><?php echo $abonostotales ?></td>
                                    <td><?php echo $deudarestante ?></td>
                                </tr>
                            <?php }?>
                            <?php if($deudarestante>'0'){?>
                                <tr class="table-success">
                                    <td><?php echo $gastotoalcliente; ?></td>
                                    <td><?php echo $abonostotales ?></td>
                                    <td><?php echo $deudarestante ?></td>
                                </tr>
                            <?php }?>

                        </table>
                    </div>
                </div>
            </div> 
<br/>                            
            <div class="form-group row">
                <div class="col-md-6">
                    <form action="https://local/contenido/certificadodelante.php" target="_blank" method="post">
                        <div class="card" >
                            <div class="card-header">
                                Generar Parte Delantera
                            </div>
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="text" class="col-sm-3 col-form-label">N° de Certificado</label>
                                    <div class="col-sm-3">
                                        <input class="input" type="text" value='' name="idid1" placeholder="N° de Certificado">
                                    </div>
                                    <label for="text" class="col-sm-3 col-form-label">Codigo Text</label>
                                    <div class="col-sm-3">
                                        <input class="input" type="text" value="" name="idid2" placeholder="Codigo Text">
                                    </div>
                                </div>
<br/>                            
                                <div class="text-center"> 
                                    <label for="inputPassword3">Fecha <input type="date" name="bday"> </label>
                                </div> 
<br/>                        
                                <script type="text/javascript">
                                    function sicambia($idid)
                                    {
                                        var respuesta=confirm("El estudiante mantiene una deuda pendiente. ¿Desea continuar con la imprecion del certificado?" )
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
                                <?php if($deudarestante==0){ ?>
                                    <div class="text-center"> 
                                        <button type="submit" value=<?php echo $idid; ?> name="idid" class="btn btn-primary">Generar</button>
                                    </div> 
                                <?php }else { ?>
                                    <div class="text-center"> 
                                        <button type="submit" value=<?php echo $idid; ?> name="idid" class="btn btn-primary" onclick="return sicambia()">Generar</button>
                                    </div> 
                                <?php } ?>
                            </div>
                        </div>
                    </form>
                </div>
<br><br/><br><br/><br><br/><br><br/><br><br/><br><br/>   
                <div class="col-md-6">
                    <form action="https://local/contenido/codigodebarra.php" target="_blank" method="post">
                        <div class="card" >
                            <div class="card-header">
                                Generar Parte posterior
                            </div>
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-4 col-form-label">Consecutivo</label>
                                    <div class="col-sm-4">
                                        <input class="input" type="text" value='' name="idid1" placeholder="Consecutivo">
                                    </div>
<br/><br/> <br/>                           
                                <div class="text-center"> 
                                    <label for="inputPassword3">Fecha <input type="date" name="bday"> </label>
                                </div> 
<br/><br/>                          
                                <script type="text/javascript">
                                    function sicambia($idid)
                                    {
                                        var respuesta=confirm("El estudiante mantiene una deuda pendiente. ¿Desea continuar con la imprecion del certificado?" )
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
                                <?php if($deudarestante==0){ ?>
                                    <div class="text-center"> 
                                        <button type="submit" value=<?php echo $idid; ?> name="idid" class="btn btn-primary">Generar</button>
                                    </div> 
                                <?php }else { ?>
                                    <div class="text-center"> 
                                        <button type="submit" value=<?php echo $idid; ?> name="idid" class="btn btn-primary" onclick="return sicambia()">Generar</button>
                                    </div> 
                                <?php } ?>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
<br/><br/></div>
<br/>
            <div class="col-md-12">
                <form action="https://local/contenido/infocompletaestudiante.php" method="post">  
                    <div class="card" >
                        <div class="card-header">
                            Contratos del cliente
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">Estudiante</th>
                                            <th scope="col">Monto a pagar</th>  
                                            <th scope="col">Fecha abono Uno</th>
                                            <th scope="col">Abono uno</th>  
                                            <th scope="col">Fecha abono Dos</th>
                                            <th scope="col">Abono dos</th> 
                                            <th scope="col">Fecha abono Tres</th>
                                            <th scope="col">Abono Tres</th> 
                                            <th scope="col">Fecha abono Cuatro</th>
                                            <th scope="col">Abono Cuatro</th> 
                                            <th scope="col">Deuda</th>  
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($abonosdelcliente as $esquipula) {?>
                                            <?php if($esquipula['CedulaCliente']==$cedulaz) {?>
                                                <?php $saldox=$esquipula['MontoAbonoUno']+$esquipula['MontoAbonoDos']+$esquipula['MontoAbonoTres']+$esquipula['MontoAbonoCuatro']-$esquipula['MontoFactura']; ?>
                                                <?php if($saldox==0) { ?>
                                                    <tr class="table-primary">
                                                        <td><?php echo $primernombre," ",$primerapellido; ?></td>
                                                        <td><?php echo $esquipula['MontoFactura']; ?></td>
                                                        <td><?php echo $esquipula['FechaAbonoUno']; ?></td>
                                                        <td><?php echo $esquipula['MontoAbonoUno'] ?></td>
                                                        <td><?php echo $esquipula['FechaAbonoDos']; ?></td>
                                                        <td><?php echo $esquipula['MontoAbonoDos'] ?></td>
                                                        <td><?php echo $esquipula['FechaAbonoTres']; ?></td>
                                                        <td><?php echo $esquipula['MontoAbonoTres'] ?></td>
                                                        <td><?php echo $esquipula['FechaAbonoCuatro']; ?></td>
                                                        <td><?php echo $esquipula['MontoAbonoCuatro'] ?></td>
                                                        <td><?php echo $saldox; ?></td>                          
                                                    </tr>
                                                <?php }  ?>
                                                <?php if($saldox<0) { ?>
                                                    <tr class="table-danger">
                                                        <td><?php echo $primernombre," ",$primerapellido; ?></td>
                                                        <td><?php echo $esquipula['MontoFactura']; ?></td>
                                                        <td><?php echo $esquipula['FechaAbonoUno']; ?></td>
                                                        <td><?php echo $esquipula['MontoAbonoUno'] ?></td>
                                                        <td><?php echo $esquipula['FechaAbonoDos']; ?></td>
                                                        <td><?php echo $esquipula['MontoAbonoDos'] ?></td>
                                                        <td><?php echo $esquipula['FechaAbonoTres']; ?></td>
                                                        <td><?php echo $esquipula['MontoAbonoTres'] ?></td>
                                                        <td><?php echo $esquipula['FechaAbonoCuatro']; ?></td>
                                                        <td><?php echo $esquipula['MontoAbonoCuatro'] ?></td>
                                                        <td><?php echo $saldox; ?></td>                     
                                                    </tr>
                                                <?php }  ?>
                                                <?php if($saldox>0) { ?>
                                                    <tr class="table-success">
                                                        <td><?php echo $primernombre," ",$primerapellido; ?></td>
                                                        <td><?php echo $esquipula['MontoFactura']; ?></td>
                                                        <td><?php echo $esquipula['FechaAbonoUno']; ?></td>
                                                        <td><?php echo $esquipula['MontoAbonoUno'] ?></td>
                                                        <td><?php echo $esquipula['FechaAbonoDos']; ?></td>
                                                        <td><?php echo $esquipula['MontoAbonoDos'] ?></td>
                                                        <td><?php echo $esquipula['FechaAbonoTres']; ?></td>
                                                        <td><?php echo $esquipula['MontoAbonoTres'] ?></td>
                                                        <td><?php echo $esquipula['FechaAbonoCuatro']; ?></td>
                                                        <td><?php echo $esquipula['MontoAbonoCuatro'] ?></td>
                                                        <td><?php echo $saldox; ?></td>             
                                                    </tr>
                                                <?php }  ?>
                                            <?php }  ?>
                                        <?php }  ?>
                                    </tbody>
                                </table>
                            </div> 
                        </div>
                    </div>
                </form>
            </div>
<br/>
            <div class="col-md-12">
                <form action="https://local/contenido/GastosDelosclientesinfo.php" method="post">  
                    <div class="card" >
                        <div class="card-header">
                            Gastos adicionales del cliente
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">Fecha</th>
                                            <th scope="col">Estudiante</th>     
                                            <th scope="col">Motivo</th>  
                                            <th scope="col">Monto a pagar</th>  
                                            <th scope="col">Abono</th>  
                                            <th scope="col">Deuda</th>  
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($gasto as $es) { ?>
                                            <?php if($es['cedula']==$cedulaz) { ?>
                                                <?php $cuantodebe=$es['monto']-$es['abono']; ?>
                                                <?php if($cuantodebe==0) { ?>
                                                    <tr class="table-primary">
                                                        <td><?php echo $es['fecha']; ?></td>
                                                        <td><?php echo $es['nombre'], $es['apellido']; ?></td>
                                                        <td><?php echo $es['motivo']; ?></td>
                                                        <td><?php echo $es['monto']; ?></td>
                                                        <td><?php echo $es['abono']; ?></td>
                                                        <td><?php echo $cuantodebe; ?></td>                     
                                                    </tr>
                                                <?php }  ?>
                                                <?php if($cuantodebe!=0) { ?>
                                                    <tr class="table-danger">
                                                        <td><?php echo $es['fecha']; ?></td>
                                                        <td><?php echo $es['nombre'], $es['apellido']; ?></td>
                                                        <td><?php echo $es['motivo']; ?></td>
                                                        <td><?php echo $es['monto']; ?></td>
                                                        <td><?php echo $es['abono']; ?></td>
                                                        <td><?php echo $cuantodebe; ?></td>                     
                                                    </tr>
                                                <?php }  ?>
                                            <?php }  ?>
                                        <?php }  ?>
                                    </tbody>
                                </table>
                            </div> 
                        </div>
                    </div>
                </form>
                <div class="text-center">  
                    <form action="https://local/contenido/ConsultaDeClientes.php" method="post">
                        <button type="submit" class="btn btn-primary">Regresar</button>
                    </form> 
                </div>
            </div>
        </div>
    </div>
</div>
<?php include("../templatelic/pie.php"); ?>