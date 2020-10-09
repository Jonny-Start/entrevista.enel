<?php

function validar(){
	if (empty($dato)) {
		echo 'NO';
	}
}

require_once "../Model/conexioon.php";
extract($_REQUEST);
$nombre = $_POST['nombre'];
$cc = $_POST['cc'];
$dependendencia = $_POST['dependencia'];
$cargo = $_POST['cargo'];
$cargoAspira = $_POST['cargoAspira'];
$telefono = $_POST['telefono'];
$aspiracionSal = $_POST['aspiracionSal'];
$fechaEntrevista = $_POST['fechaEntrevista'];
$psicologa = $_POST['psicologa'];
$responsabilidad = $_POST['responsabilidad'];
$productividad = $_POST['productividad'];
$gestionCambio = $_POST['gestionCambio'];
$innovacion = $_POST['innovacion'];
$resiliencia = $_POST['resiliencia'];
@$confianza = $_POST['confianza'];
@$dswm1 = $_POST['dswm1'];
@$dswm2 = $_POST['dswm2'];
@$dswo3 = $_POST['dswo3'];
@$dswc4 = $_POST['dswc4'];
@$dswp5 = $_POST['dswp5'];
@$dswa6 = $_POST['dswa6'];
@$dswd7 = $_POST['dswd7'];
@$other1 = $_POST['other1'];
@$dssk1 = $_POST['dssk1'];
@$dssp2 = $_POST['dssp2'];
@$dssv3 = $_POST['dssv3'];
@$dssd4 = $_POST['dssd4'];
@$dssd5 = $_POST['dssd5'];
@$dssc6 = $_POST['dssc6'];
@$other2 = $_POST['other2'];
@$dsdp1 = $_POST['dsdp1'];
@$dsdc2 = $_POST['dsdc2'];
@$dsdi3 = $_POST['dsdi3'];
@$dsdc4 = $_POST['dsdc4'];
@$dsdc4 = $_POST['dsdc4'];
@$dsdu5 = $_POST['dsdu5'];
@$dsdm6 = $_POST['dsdm6'];
@$dsdd7 = $_POST['dsdd7'];
@$dsdi8 = $_POST['dsdi8'];
@$dsdi9 = $_POST['dsdi9'];
@$dsdr10 = $_POST['dsdr10'];
@$other3 = $_POST['other3'];
$comportamientoEtico = $_POST['comportamientoEtico'];
$fuenteR = $_POST['fuenteR'];
$resultadoI = $_POST['resultadoI'];
$inteligenciaE = $_POST['inteligenciaE'];
$candidatoU = $_POST['candidatoU'];
$explicacion = $_POST['explicacion'];
$resolucionProblemas = $_POST['resolucionProblemas'];
$observaciones = $_POST['observaciones'];
@$adecuado = $_POST['adecuado'];
@$adecuadoP = $_POST['adecuadoP'];
@$parcialmente = $_POST['parcialmente'];
@$primera = $_POST['primera'];
@$segunda = $_POST['segunda'];
@$noA = $_POST['noA'];
$concepto = $_POST['concepto'];
$co = $_POST['co'];
$terminado = $_POST['terminado'];
$modificar = $_POST['modificar'];

$sql = "UPDATE  entrevistapsicologica set nombre='" . $nombre . "', cc = '" . $cc . "', dependencia = '" . $dependendencia . "', cargo = '" . $cargo . "', cargoAspira = '" . $cargoAspira . "', telefono = '" . $telefono . "', aspiracionSal = '" . $aspiracionSal . "',
fechaEntrevista = '" . $fechaEntrevista . "', psicologa = '" . $psicologa . "', responsabilidad = '" . $responsabilidad . "', productividad = '" . $productividad . "', gestionCambio = '" . $gestionCambio . "',
innovacion = '" . $innovacion . "', resiliencia = '" . $resiliencia . "', confianza = '" . $confianza . "', 
dswm1 = '" . $dswm1 . "', dswm2='" . $dswm2 . "', dswo3 = '" . $dswo3 . "', dswc4 = '" . $dswc4 . "', dswp5 = '" . $dswp5 . "', dswa6 = '" . $dswa6 . "', dswd7 = '" . $dswd7 . "', other1 = '" . $other1 . "',
dssk1 = '" . $dssk1 . "', dssp2 ='" . $dssp2 . "', dssv3 = '" . $dssv3 . "', dssd4 = '" . $dssd4 . "', dssd5 = '" . $dssd5 . "', dssc6 = '" . $dssc6 . "', other2 = '" . $other2 . "',
dsdp1 = '" . $dsdp1 . "', dsdc2 = '" . $dsdc2 . "', dsdi3 = '" . $dsdi3 . "', dsdc4 = '" . $dsdc4 . "', dsdu5 = '" . $dsdu5 . "', dsdm6 = '" . $dsdm6 . "', dsdd7 = '" . $dsdd7 . "', dsdi8 = '" . $dsdi8 . "', dsdi9 = '" . $dsdi9 . "', dsdr10 = '" . $dsdr10 . "', other3 = '" . $other3 . "',
comportamientoEtico = '" . $comportamientoEtico . "', fuenteR = '" . $fuenteR . "', resultadoI = '" . $resultadoI . "', inteligenciaE = '" . $inteligenciaE . "',
candidatoU = '" . $candidatoU . "', explicacion = '" . $explicacion . "', resolucionProblemas = '" . $resolucionProblemas . "', observaciones = '" . $observaciones . "', adecuado = '" . $adecuado . "', adecuadoP = '" . $adecuadoP . "', parcialmente = '" . $parcialmente . "',
primera = '" . $primera . "', segunda = '" . $segunda . "', noA = '" . $noA . "', concepto = '" . $concepto . "', co = '" . $co . "', terminado = '" . $terminado . "', modificar = '" . $modificar . "'  where cc=" . $cc . ";";

echo $sql;
if ($objCnx->query($sql)) {
	echo ("Se hizo el registro correctamente");
	header("location:../View/AdministrarEntrevistaPs.php?pag=Administrar&msj=3");
	mysqli_close($objCnx);
} else {
	// alert
	echo ("no se pudo hacer el registro " + $sql);
	header("location:../View/AdministrarEntrevistaPs.php?pag=Administrar&msj=4");
	mysqli_close($objCnx);
}
