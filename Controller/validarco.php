<?php
extract($_REQUEST);

require "../Model/conexionBaseDeDatos.php";

$co = $_REQUEST['co'];

$objConexion = conectarse();
$sql = "SELECT co FROM usuario where co = '$co'";

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
