<?php include("../templatelic/cabeza.php"); ?>
<?php

date_default_timezone_set('America/Panama');
$diahoySesion = date("Y-m-d");    
$horahoySesion = date("h:i:s a");  


session_destroy();
header('location:../index.php');
?>
<?php include("../templatelic/pie.php");?>    