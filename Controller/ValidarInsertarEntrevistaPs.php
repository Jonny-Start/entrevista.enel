<?php 
require_once "../Model/conexioon.php";
extract($_REQUEST);


// $fecha=date("d/M/Y H:i:s",strtotime ("$_REQUEST[fechaEntrevista]"));
ini_set('date.timezone', 'America/Bogota');
$fecha= date("Y-m-d H:i:s");


$sql= "INSERT INTO  entrevistapsicologica (nombre, cc, dependencia, cargo, cargoAspira, telefono, aspiracionSal,
 fechaEntrevista, psicologa, responsabilidad, productividad, gestionCambio,
  innovacion, resiliencia, confianza, comportamientoEtico, fuenteR, resultadoI, inteligenciaE,
   candidatoU, explicacion, resolucionProblemas, observaciones, adecuado, adecuadoP, parcialmente, primera, segunda, noA, concepto)
VALUES('$_REQUEST[nombre]','$_REQUEST[cc]','$_REQUEST[dependencia]','$_REQUEST[cargo]',
'$_REQUEST[cargoAspira]','$_REQUEST[telefono]','$_REQUEST[aspiracionSal]','$fecha' ,'$_REQUEST[psicologa]',
'$_REQUEST[responsabilidad]','$_REQUEST[productividad]','$_REQUEST[gestionCambio]','$_REQUEST[innovacion]',
'$_REQUEST[resiliencia]','$_REQUEST[confianza]','$_REQUEST[comportamientoEtico]','$_REQUEST[fuenteR]',
'$_REQUEST[resultadoI]','$_REQUEST[inteligenciaE]','$_REQUEST[candidatoU]','$_REQUEST[explicacion]','$_REQUEST[resolucionProblemas]',
'$_REQUEST[observaciones]','$_REQUEST[adecuado]','$_REQUEST[adecuadoP]','$_REQUEST[parcialmente]','$_REQUEST[primera]',
'$_REQUEST[segunda]','$_REQUEST[noA]','$_REQUEST[concepto]')";

echo $sql;
if ($objCnx->query($sql)) {
	// alert
	echo("Se hizo el registro correctamente");
	header("location:../View/entrevistaPsicologica.php?pag=insertar&msj=1");
	mysqli_close($objCnx);
}else{
// alert
echo("no se pudo hacer el registro "+$sql);
header("location:../View/entrevistaPsicologica.php?pag=insertar&msj=2");
	mysqli_close($objCnx);
}
