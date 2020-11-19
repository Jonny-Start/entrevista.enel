<?php 
require "../Model/conexioon.php";
$cc = $_GET['cc'];
$P = $_GET['persona'];
$pscologa = $_GET['ps'];
$solicitud = 'eliminar';
$respuesta = 'Negada';

$sql = "UPDATE entrevistatecnica set modificar= 'False' where idTec='$cc'";
$rta=$objCnx->prepare($sql);
$rta->bind_param("i",$cc);
$resul=$rta->execute();
echo $sql;
if ($resul) {
    header("location: correo_informativo.php?cc=$cc&&ps=$pscologa&&solicitud=$solicitud&&respuesta=$respuesta&&p=$P");
    mysqli_close($objCnx);
}else{
    header("location:../View/gestionarEliminacionEntrevistaTecnica.php?page=Negar&msj=4");
    mysqli_close($objCnx);
}
?>
