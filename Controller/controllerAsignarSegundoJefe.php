<?php 
require_once "../Model/conexioon.php";

$co=$_POST['co'];
$cc=$_POST['cc'];

$sql="UPDATE entrevistaTecnica set apruebaEntrevista ='".$co."' where idTec=".$cc.";";

$resul=mysqli_query($objCnx,$sql);
echo $sql;
if ($resul) {
	header("location:../View/noTerminadasTecnica.php?page=completar&msj=1");
	mysqli_close($objCnx);
}else{
	mysqli_close($objCnx);
}

?>
