<?php
require_once "../Model/conexioon.php";

$idTec=$_POST['idTec'];
$proceso =$_POST['proceso'];
$entrevistador =$_POST['entrevistador'];
$fechaEntrevista =$_POST['fechaEntrevista'];
$cargoEntrevistador =$_POST['cargoEntrevistador'];
$dependencia =$_POST['dependencia'];
$nombreCandidato =$_POST['nombreCandidato'];
$cargoAspira =$_POST['cargoAspira'];
$cuentaCompetenciaSN =$_POST['cuentaCompetenciaSN'];
$cuentaCompetencia =$_POST['cuentaCompetencia'];
$experienciaPrevia =$_POST['experienciaPrevia'];
$cuentaCono =$_POST['cuentaCono'];
$calidadSN =$_POST['calidadSN'];
$calidad =$_POST['calidad'];
$retroalimentacion =$_POST['retroalimentacion'];
$conceptoSegundo=$_POST["conceptoSegundo"];

@$adecuado=$_POST["adecuado"];
@$primera=$_POST["primera"];
@$segunda=$_POST["segunda"];
@$noA=$_POST["noA"];
@$parcialmente=$_POST["parcialmente"];
@$adecuadoP =$_POST["adecuadoP"];
$modificar = 'Modificada';
// $terminado = "True";

$sql="UPDATE entrevistatecnica set proceso='".$proceso."', entrevistador='".$entrevistador."', fechaEntrevista='".$fechaEntrevista."',
cargoEntrevistador='".$cargoEntrevistador."', dependencia='".$dependencia."', nombreCandidato='".$nombreCandidato."', cargoAspira='".$cargoAspira."',
cuentaCompetenciaSN='".$cuentaCompetenciaSN."',cuentaCompetencia='".$cuentaCompetencia."', experienciaPrevia='".$experienciaPrevia."',
cuentaCono='".$cuentaCono."', calidadSN='".$calidadSN."', calidad='".$calidad."', retroalimentacion='".$retroalimentacion."',
conceptoSegundo='".$conceptoSegundo."', adecuado='".$adecuado."', primera='".$primera."', segunda='".$segunda."', noA='".$noA."',
parcialmente='".$parcialmente."', adecuadoP='".$adecuadoP."' , modificar='".$modificar."' where idTec=".$idTec.";";

$resul=mysqli_query($objCnx,$sql);
echo $sql;
if ($resul) {
	header("location:../View/administrarEntrevistaTec.php?page=actualizar&msj=1");
	mysqli_close($objCnx);
}else{
	header("location:../View/administrarEntrevistaTec.php?page=actualizar&msj=2");
	mysqli_close($objCnx);
}

?>
