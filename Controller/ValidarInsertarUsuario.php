<?php 
require_once "../Model/conexioon.php";
extract($_REQUEST);

// $fecha=date("Y-m-d",strtotime ("$_REQUEST[fechaNacimiento]"));

$sql= "INSERT INTO  usuario (nombre, apellidos, co, Perfil, correo_electronico, contraseña)
VALUES('$_REQUEST[nombre]','$_REQUEST[apellidos]','$_REQUEST[co]','$_REQUEST[Perfil]','$_REQUEST[correo_electronico]','$_REQUEST[contraseña]')"; //$fecha

echo $sql;
if ($objCnx->query($sql)) {
	header("location:../View/insertar.php?pag=insertar&msj=1");
	mysqli_close($objCnx);
}else{

header("location:../View/insertar.php?pag=insertar&msj=2");
	mysqli_close($objCnx);
}
 ?>