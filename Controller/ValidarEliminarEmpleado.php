<?php 
require_once "../Model/conexioon.php";

$co=$_POST["co"];

$sql="DELETE FROM usuario where co= ?";
$rta=$objCnx->prepare($sql);
$rta->bind_param("i",$co);
$resul=$rta->execute();
echo $sql;
if ($resul) {
	header("location:../View/eliminar.php?page=actualizar&msj=1");
	mysqli_close($objCnx);
}else{
	header("location:../View/eliminar.php?page=actualizar&msj=2");
	mysql_close($objCnx);
}
 ?>