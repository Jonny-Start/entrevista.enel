<?php 
require_once "../Model/conexioon.php";
extract($_REQUEST);

$fecha=date("Y-m-d",strtotime ("$_REQUEST[fechaNacimiento]"));

$sql= "INSERT INTO  empleado (
idEmpleado, Nombre, Apellido, direccion, telefono, correoElectronico, fechaNacimiento)VALUES('$_REQUEST[idEmpleado]','$_REQUEST[Nombre]','$_REQUEST[Apellido]','$_REQUEST[direccion]','$_REQUEST[telefono]','$_REQUEST[correoElectronico]','$fecha')";
echo $sql;
if ($objCnx->query($sql)) {
	header("location:../View/insertar.php?pag=insertar&msj=1");
	mysqli_close($objCnx);
}else{

header("location:../View/insertar.php?pag=insertar&msj=2");
	mysqli_close($objCnx);
}
 ?>