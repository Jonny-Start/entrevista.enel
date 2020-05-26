<?php 
require_once "../Model/conexioon.php";

$cc=$_POST['cc'];
$adecuado=$_POST["adecuado"];
$adecuadoP =$_POST["adecuadoP"];
$parcialmente=$_POST["parcialmente"];
$primera=$_POST["primera"];
$segunda=$_POST["segunda"];
$noA=$_POST["noA"];
$concepto=$_POST["concepto"];
$terminado = "True";

$sql="UPDATE entrevistapsicologica set adecuado='".$adecuado."',adecuadoP='".$adecuadoP."',parcialmente='".$parcialmente."',
primera='".$primera."',segunda='".$segunda."',noA='".$noA."',concepto='".$concepto."',terminado='".$terminado."'
where cc=".$cc.";";

$resul=mysqli_query($objCnx,$sql);
echo $sql;
if ($resul) {
	header("location:../View/consultarEntrevistaPsicologaNo.php?page=actualizar&msj=1");
	mysqli_close($objCnx);
}else{
	header("location:../View/consultarEntrevistaPsicologaNo.php?page=actualizar&msj=2");
	mysqli_close($objCnx);
}

?>
