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

$sql =" INSERT INTO `entrevistatecnica`(`idTec`,`proceso`, `entrevistador`, `fechaEntrevista`
, `cargoEntrevistador`, `dependencia`, `nombreCandidato`, `cargoAspira`, `cuentaCompetenciaSN`
, `cuentaCompetencia`, `experienciaPrevia`, `cuentaCono`, `calidadSN`, `calidad`, `retroalimentacion`
, `adecuado`, `primera`, `segunda`, `noA`, `parcialmente`, `adecuadoP`, `co`)
 VALUES ('$_REQUEST[idTec]','$_REQUEST[proceso]', '$_REQUEST[entrevistador]', '$fecha', '$_REQUEST[cargoEntrevistador]', '$_REQUEST[dependencia]', '$_REQUEST[nombreCandidato]'
 , '$_REQUEST[cargoAspira]', '$_REQUEST[cuentaCompetenciaSN]', '$_REQUEST[cuentaCompetencia]', '$_REQUEST[experienciaPrevia]'
 , '$_REQUEST[cuentaCono]', '$_REQUEST[calidadSN]', '$_REQUEST[calidad]', '$_REQUEST[retroalimentacion]'
 , '$adecuado', '$primera','$segunda','$noA', '$parcialmente', '$adecuadoP', '$_REQUEST[co]')";

echo $sql;
if ($objCnx->query($sql)) {
    echo ("Se hizo el registro correctamente");
    header("location:../View/conceptoBP.php?pag=insertar&msj=1");
    mysqli_close($objCnx);
} else {
    echo ("no se pudo hacer el registro  $sql");
    mysqli_close($objCnx);
}


