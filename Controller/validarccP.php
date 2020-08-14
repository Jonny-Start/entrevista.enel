<?php
extract($_REQUEST);

require "../Model/conexionBaseDeDatos.php";

$cc = $_REQUEST['cc'];

$objConexion = conectarse();
$sql = "SELECT * FROM entrevistapsicologica where cc = '$cc'";

$resultado = $objConexion->query($sql);
$existe = $resultado->num_rows;

if ($existe == 1) {
    echo ("<script type='text/javascript'>
    alert('¡El usuario existe!');
    </script>");
    echo ('<script>window.close();</script>');
} else {
    echo ("<script type='text/javascript'>
    alert('¡NO existe!');
    </script>");
    echo ('<script>window.close();</script>');
}
