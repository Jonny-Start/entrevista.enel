<?php 
require "../Model/conexioon.php";
$cc = $_GET['cc'];
$P = $_GET['persona'];
$pscologa = $_GET['ps'];
$solicitud = 'editar';
$respuesta = 'Negada';

$sql = " UPDATE entrevistabp set modificar = 'False' where idBP = '$cc' ";
$rta=$objCnx->prepare($sql);
$rta->bind_param("i",$cc);
$resul=$rta->execute();
echo $sql;
if ($resul) {
  header("location: correo_informativo.php?cc=$cc&&ps=$pscologa&&solicitud=$solicitud&&respuesta=$respuesta&&p=$P");
  mysqli_close($objCnx);
}else{
    header("location:../View/gestionarEdicionEntrevistaBP.php?page=Negar&msj=4");
    mysqli_close($objCnx);
}
