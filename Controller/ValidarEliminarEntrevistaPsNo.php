<?php 
require_once "../Model/conexioon.php";
?>
<?php
	$cc = $_POST['cc'];
	$sql="DELETE FROM entrevistapsicologica where cc= ?";
	$rta=$objCnx->prepare($sql);
	$rta->bind_param("i",$cc);
	$resul=$rta->execute();
	echo $sql;
	if ($resul) {
		header("location:../View/consultarEntrevistaPsicologaNo.php?page=Eliminar&msj=3");
		mysqli_close($objCnx);
	}else{
		header("location:../View/consultarEntrevistaPsicologaNo.php?page=Eliminar&msj=4");
		mysqli_close($objCnx);
	}
?>
