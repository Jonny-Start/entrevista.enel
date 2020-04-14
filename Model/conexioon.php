<?php 
require_once"conexionBaseDeDatos.php"; 
$objCnx= new mysqli($host,$user,$pass,$bd);  // esto es para instanciar una variable de conexion a la base de datos

// mysqli_close($objCnx);

if ($objCnx->connect_errno) {
	echo "<p style='color:#FF0000'>
	Error de conexion en la base de datos".$objCnx->connect_error."</p>";
	exit();
}else{
echo "<h6 style='color:#0000'>
	 conexion a la base de datos OK (BD=".$bd.")</h6>";
}
 ?>

<!-- esto es una vista de que si se esta conectando a la base de datos  -->