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

$sql = "INSERT INTO entrevistaaprendices_practicantes (cc, nombre, dependencia, areaPractica, ingles, fechaEntrevista,
psicologa, cargo, conocimientoEmpresa, motivacionArea, ofimatica, 
conocimientoProgramacion, adecuado, adecuadoP, parcialmente, primera, segunda, noA, concepto, co)

VALUES('$_REQUEST[cc]','$_REQUEST[nombre]','$_REQUEST[dependencia]',
'$_REQUEST[areaPractica]','$_REQUEST[ingles]','$fecha', '$_REQUEST[psicologa]','$_REQUEST[cargo]',
'$_REQUEST[conocimientoEmpresa]','$_REQUEST[motivacionArea]','$_REQUEST[ofimatica]','$_REQUEST[conocimientoProgramacion]',
'$adecuado','$adecuadoP','$parcialmente','$primera','$segunda','$noA', '$_REQUEST[concepto]','$co')";


echo $sql;
if ($objCnx->query($sql)) {
    echo ("Se hizo el registro correctamente");
    header("location:../View/EntrevistaAyP.php?pag=insertar&msj=1");
    mysqli_close($objCnx);
} else {
    echo ("no se pudo hacer el registro  $sql");
    header("location:../View/EntrevistaAyP.php?pag=insertar&msj=2");
    mysqli_close($objCnx);
}
