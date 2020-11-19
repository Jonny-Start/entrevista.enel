<?php
require_once "../Model/conexioon.php";

$idBP=$_POST['idBP'];
$proceso=$_POST['proceso'];
$entrevistador=$_POST['entrevistador'];
$fechaEntrevista=$_POST['fechaEntrevista'];
$cargoEntrevistador=$_POST['cargoEntrevistador'];
$dependencia=$_POST['dependencia'];
$nombreCandidato=$_POST['nombreCandidato'];
$cargoAspira=$_POST['cargoAspira'];
$salBasicMen=$_POST['salBasicMen'];
$salBasicObs=$_POST['salBasicObs'];
$modalidadPagoMen=$_POST['modalidadPagoMen'];
$modalidadPagoObs=$_POST['modalidadPagoObs'];
$salVariMen=$_POST['salVariMen'];
$salVariObs=$_POST['salVariObs'];
$otrosBenMen=$_POST['otrosBenMen'];
$otrosBenObs=$_POST['otrosBenObs'];
$aspiracionSalMen=$_POST['aspiracionSalMen'];
$aspiracionSalObs=$_POST['aspiracionSalObs'];
$ajusteAlto=$_POST['ajusteAlto'];
$ajusteMedioAlto=$_POST['ajusteMedioAlto'];
$ajusteMedioBajo=$_POST['ajusteMedioBajo'];
$parcialAjusteBajo=$_POST['parcialAjusteBajo'];
$perfilAjustaSN=$_POST['perfilAjustaSN'];
$perfilAjusta=$_POST['perfilAjusta'];
$adaptarCargo=$_POST['adaptarCargo'];
$elementosRetro=$_POST['elementosRetro'];
$comentarios=$_POST['comentarios'];

@$adecuado=$_POST["adecuado"];
@$primera=$_POST["primera"];
@$segunda=$_POST["segunda"];
@$noA=$_POST["noA"];
@$parcialmente=$_POST["parcialmente"];
@$adecuadoP =$_POST["adecuadoP"];
$modificar = 'Modificada';
// $terminado = "True";

$sql="UPDATE entrevistabp set proceso='".$proceso."', entrevistador='".$entrevistador."', fechaEntrevista='".$fechaEntrevista."', 
cargoEntrevistador='".$cargoEntrevistador."',dependencia='".$dependencia."',nombreCandidato='".$nombreCandidato."',cargoAspira='".$cargoAspira."',
salBasicMen='".$salBasicMen."',salBasicObs='".$salBasicObs."',modalidadPagoMen='".$modalidadPagoMen."',modalidadPagoObs='".$modalidadPagoObs."',
salVariMen='".$salVariMen."',salVariObs='".$salVariObs."',otrosBenMen='".$otrosBenMen."',otrosBenObs='".$otrosBenObs."',aspiracionSalMen='".$aspiracionSalMen."',
aspiracionSalObs='".$aspiracionSalObs."',ajusteAlto='".$ajusteAlto."',ajusteMedioAlto='".$ajusteMedioAlto."',ajusteMedioBajo='".$ajusteMedioBajo."',
parcialAjusteBajo='".$parcialAjusteBajo."', perfilAjustaSN='".$perfilAjustaSN."',perfilAjusta='".$perfilAjusta."',adaptarCargo='".$adaptarCargo."',
elementosRetro='".$elementosRetro."',comentarios='".$comentarios."', adecuado='".$adecuado."', primera='".$primera."', segunda='".$segunda."', noA='".$noA."',
parcialmente='".$parcialmente."', adecuadoP='".$adecuadoP."' , modificar='".$modificar."'
where idBP=".$idBP.";";

$resul=mysqli_query($objCnx,$sql);
echo $sql;
if ($resul) {
	header("location:../View/administrarEntrevistaBP.php?page=actualizar&msj=1");
	mysqli_close($objCnx);
}else{
	mysqli_close($objCnx);
}

?>
