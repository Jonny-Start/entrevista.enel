<?php 
require "../Model/conexioon.php";
$cc = $_GET['cc'];
$sql = "UPDATE entrevistapsicologica set modificar= 'False' where cc='$cc'";
$rta=$objCnx->prepare($sql);
$rta->bind_param("i",$cc);
$resul=$rta->execute();
echo $sql;
if ($resul) {
    header("location:../View/gestionarEdicionEntrevistaPs.php?page=Negar&msj=3");
    mysqli_close($objCnx);
}else{
    header("location:../View/gestionarEdicionEntrevistaPs.php?page=Negar&msj=4");
    mysqli_close($objCnx);
}
?>
