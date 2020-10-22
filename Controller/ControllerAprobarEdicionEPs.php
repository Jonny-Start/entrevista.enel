<?php
require "../Model/conexioon.php";
$cc = $_GET['cc'];
$sql = "UPDATE entrevistapsicologica set modificar= 'True' where cc='$cc'";
$rta=$objCnx->prepare($sql);
$rta->bind_param("i",$cc);
$resul=$rta->execute();
echo $sql;
if ($resul) {
    header("location:../View/gestionarEdicionEntrevistaPs.php?page=Aprobar&msj=1");
    mysqli_close($objCnx);
}else{
    header("location:../View/gestionarEdicionEntrevistaPs.php?page=Aprobar&msj=2");
    mysqli_close($objCnx);
}
?>
