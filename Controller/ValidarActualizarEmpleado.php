<?php 
require_once "../Model/conexioon.php"; 

$idEmpleado=$_POST["idEmpleado"];
$nombre=$_POST["Nombre"];
$apellido=$_POST["Apellido"];
$direccion=$_POST["direccion"];
$telefono=$_POST["telefono"];
$correo=$_POST["correoElectronico"];
$fecha=$_POST["fechaNacimiento"];

$sql="UPDATE empleado set idEmpleado='".$idEmpleado."',Nombre='".$nombre."',Apellido='".$apellido."',direccion='".$direccion."',
telefono='".$telefono."',correoElectronico='".$correo."',fechaNacimiento='".$fecha."' where idEmpleado=".$idEmpleado.";";
$resul=mysqli_query($objCnx,$sql);
echo $sql;
if ($resul) {
	header("location:../View/actualizar.php?page=actualizar&msj=1");
	mysqli_close($objCnx);
}else{
	header("location:../View/actualizar.php?page=actualizar&msj=2");
	mysqli_close($objCnx);
}

 
 ?>
