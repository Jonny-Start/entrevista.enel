<?php 
require_once "../Model/conexioon.php"; 


$nombre=$_POST["nombre"];
$apellidos=$_POST["apellidos"];
$co=$_POST["co"];
$correo_electronico=$_POST["correo_electronico"];
$contraseña=$_POST["contraseña"];

$sql="UPDATE usuario set nombre='".$nombre."',apellidos='".$apellidos."',co='".$co."',correo_electronico='".$correo_electronico."',contraseña='".$contraseña."'
where co=".$co.";";

$resul=mysqli_query($objCnx,$sql);
echo $sql;
if ($resul) {
	header("location:../View/misDatos.php?page=actualizar&msj=1");
	mysqli_close($objCnx);
}else{
	header("location:../View/misDatos.php?page=actualizar&msj=2");
	mysqli_close($objCnx);
}

 
 ?>
