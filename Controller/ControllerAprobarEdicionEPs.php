<?php
require "../Model/conexioon.php";
$cc = $_GET['cc'];
$P = $_GET['persona'];
$pscologa = $_GET['ps'];
$solicitud = 'editar';
$respuesta = 'Aprobada';

$sql = "UPDATE entrevistapsicologica set modificar= 'True' where cc='$cc'";
$rta=$objCnx->prepare($sql);
$rta->bind_param("i",$cc);
$resul=$rta->execute();
echo $sql;
if ($resul) {
    header("location: correo_informativo.php?cc=$cc&&ps=$pscologa&&solicitud=$solicitud&&respuesta=$respuesta&&p=$P");
    mysqli_close($objCnx);
}else{
    header("location:../View/gestionarEdicionEntrevistaPs.php?page=Aprobar&msj=2");
    mysqli_close($objCnx);
}
?>
