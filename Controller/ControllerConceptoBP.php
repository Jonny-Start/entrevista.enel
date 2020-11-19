<?php
require_once "../Model/conexioon.php";
extract($_REQUEST);

// $fecha=date("d/M/Y H:i:s",strtotime ("$_REQUEST[fechaEntrevista]"));
ini_set('date.timezone', 'America/Bogota');
@$fecha = date("Y-m-d");
@$adecuado = $_REQUEST['adecuado'];
@$adecuadoP = $_REQUEST['adecuadoP'];
@$parcialmente = $_REQUEST['parcialmente'];
@$primera = $_REQUEST['primera'];
@$segunda = $_REQUEST['segunda'];
@$noA = $_REQUEST['noA'];
@$co = $_REQUEST['co'];


$sql = " INSERT INTO `entrevistabp`(`idBP`,`proceso`, `entrevistador`, `fechaEntrevista`, `cargoEntrevistador`, `dependencia`, 
`nombreCandidato`, `cargoAspira`, `salBasicMen`, `salBasicObs`, `modalidadPagoMen`, `modalidadPagoObs`, `salVariMen`, 
`salVariObs`, `otrosBenMen`, `otrosBenObs`, `aspiracionSalMen`, `aspiracionSalObs`, `ajusteAlto`, `ajusteMedioAlto`, `ajusteMedioBajo`, 
`parcialAjusteBajo`, `perfilAjustaSN`, `perfilAjusta`, `adaptarCargo`, `elementosRetro`, `comentarios`, `adecuado`, `primera`, `seguda`,
 `noA`, `parcialmente`, `adecuadoP`, `co`) 
VALUES ('$_REQUEST[idBP]','$_REQUEST[proceso]', '$_REQUEST[entrevistador]', '$fecha', '$_REQUEST[cargoEntrevistador]', '$_REQUEST[dependencia]', '$_REQUEST[nombreCandidato]'
, '$_REQUEST[cargoAspira]', '$_REQUEST[salBasicMen]', '$_REQUEST[salBasicObs]', '$_REQUEST[modalidadPagoMen]', '$_REQUEST[modalidadPagoObs]' , '$_REQUEST[salVariMen]'
, '$_REQUEST[salVariObs]', '$_REQUEST[otrosBenMen]', '$_REQUEST[otrosBenObs]', '$_REQUEST[aspiracionSalMen]', '$_REQUEST[aspiracionSalObs]', '$_REQUEST[ajusteAlto]'
, '$_REQUEST[ajusteMedioAlto]', '$_REQUEST[ajusteMedioBajo]', '$_REQUEST[parcialAjusteBajo]', '$_REQUEST[perfilAjustaSN]', '$_REQUEST[perfilAjusta]', '$_REQUEST[adaptarCargo]'
, '$_REQUEST[elementosRetro]',' $_REQUEST[comentarios]','$adecuado', '$primera','$segunda','$noA', '$parcialmente', '$adecuadoP', '$_REQUEST[co]')";

echo $sql;
if ($objCnx->query($sql)) {
    echo ("Se hizo el registro correctamente");
    header("location:../View/conceptoBP.php?pag=insertar&msj=1");
    mysqli_close($objCnx);
} else {
    echo ("no se pudo hacer el registro  $sql");
    header("location:../View/conceptoBP.php?pag=insertar&msj=2");
    mysqli_close($objCnx);
}
