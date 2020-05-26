<?php
require_once "../Model/conexioon.php";
extract($_REQUEST);

// $fecha=date("d/M/Y H:i:s",strtotime ("$_REQUEST[fechaEntrevista]"));
ini_set('date.timezone', 'America/Bogota');
$fecha = date("Y-m-d");
$terminado = "False";

@$dssk1 = $_REQUEST['dssk1'];
@$dssp2 = $_REQUEST['dssp2'];
@$dssv3 = $_REQUEST['dssv3'];
@$dssd4 = $_REQUEST['dssd4'];
@$dssd5 = $_REQUEST['dssd5'];
@$dssc6 = $_REQUEST['dssc6'];
$dsdp1 = $_REQUEST['dsdp1'];
$dsdc2 = $_REQUEST['dsdc2'];
$dsdi3 = $_REQUEST['dsdi3'];
$dsdc4 = $_REQUEST['dsdc4'];
$dsdc4 = $_REQUEST['dsdc4'];
$dsdu5 = $_REQUEST['dsdu5'];
$dsdm6 = $_REQUEST['dsdm6'];
$dsdd7 = $_REQUEST['dsdd7'];
$dsdi8 = $_REQUEST['dsdi8'];
$dsdi9 = $_REQUEST['dsdi9'];
$dsdr10 = $_REQUEST['dsdr10'];

$sql = "INSERT INTO  entrevistapsicologica (nombre, cc, dependencia, cargo, cargoAspira, telefono, aspiracionSal,
fechaEntrevista, psicologa, responsabilidad, productividad, gestionCambio,
innovacion, resiliencia, confianza, 
dswm1, dswm2, dswo3, dswc4, dswp5, dswa6, dswd7, other1,
dssk1, dssp2, dssv3, dssd4, dssd5, dssc6, other2,
dsdp1, dsdc2, dsdi3, dsdc4, dsdu5, dsdm6, dsdd7, dsdi8, dsdi9, dsdr10, other3,
comportamientoEtico, fuenteR, resultadoI, inteligenciaE,
candidatoU, explicacion, resolucionProblemas, observaciones, co, terminado)

VALUES('$_REQUEST[nombre]','$_REQUEST[cc]','$_REQUEST[dependencia]','$_REQUEST[cargo]',
'$_REQUEST[cargoAspira]','$_REQUEST[telefono]','$_REQUEST[aspiracionSal]','$fecha' ,'$_REQUEST[psicologa]',
'$_REQUEST[responsabilidad]','$_REQUEST[productividad]','$_REQUEST[gestionCambio]','$_REQUEST[innovacion]',
'$_REQUEST[resiliencia]','$_REQUEST[confianza]',
'$_REQUEST[dswm1]','$_REQUEST[dswm2]','$_REQUEST[dswo3]','$_REQUEST[dswc4]','$_REQUEST[dswp5]','$_REQUEST[dswa6]','$_REQUEST[dswd7]','$_REQUEST[other1]', 
'$dssk1','$dssp2','$dssv3','$dssd4','$dssd5','$dssc6','$_REQUEST[other2]',
'$dsdp1','$dsdc2','$dsdi3','$dsdc4','$dsdu5','$dsdm6','$dsdd7','$dsdi8','$dsdi9','$dsdr10','$_REQUEST[other3]',
'$_REQUEST[comportamientoEtico]','$_REQUEST[fuenteR]',
'$_REQUEST[resultadoI]','$_REQUEST[inteligenciaE]','$_REQUEST[candidatoU]','$_REQUEST[explicacion]','$_REQUEST[resolucionProblemas]',
'$_REQUEST[observaciones]','$_REQUEST[co]','$terminado')";

echo $sql;
if ($objCnx->query($sql)) {
	echo ("Se hizo el registro correctamente");
	header("location:../View/entrevistaPsicologica.php?pag=insertar&msj=1");
	mysqli_close($objCnx);
} else {
	// alert
	echo ("no se pudo hacer el registro " + $sql);
	header("location:../View/entrevistaPsicologica.php?pag=insertar&msj=2");
	mysqli_close($objCnx);
}
