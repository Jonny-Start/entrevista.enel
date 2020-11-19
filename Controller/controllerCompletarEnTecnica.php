<?php 
require_once "../Model/conexioon.php";

$idTec=$_POST['idTec'];
@$adecuado=$_POST["adecuado"];
@$adecuadoP =$_POST["adecuadoP"];
@$parcialmente=$_POST["parcialmente"];
@$primera=$_POST["primera"];
@$segunda=$_POST["segunda"];
@$noA=$_POST["noA"];
$conceptoSegundo=$_POST["conceptoSegundo"];
$terminada = "True";

$sql="UPDATE entrevistaTecnica set adecuado='".$adecuado."',adecuadoP='".$adecuadoP."',parcialmente='".$parcialmente."',
primera='".$primera."',segunda='".$segunda."',noA='".$noA."',conceptoSegundo='".$conceptoSegundo."',terminada='".$terminada."'
where idTec=".$idTec.";";

$resul=mysqli_query($objCnx,$sql);
echo $sql;
if ($resul) {
	header("location:../View/completarEntrevistaTecnica.php?page=completar&msj=1");
	mysqli_close($objCnx);
}else{
	header("location:../View/completarEntrevistaTecnica.php?page=completar&msj=2");
	mysqli_close($objCnx);
}

?>
