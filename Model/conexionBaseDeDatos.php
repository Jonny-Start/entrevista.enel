<?php 
$host="localhost";
$user="root";
$pass="";
$bd="eneljac";

// esto es para hacer una conexion con la base de datos



// esta es una funcion que verificara que la conexion a la base de datos se esta jecutando 
function conectarse()
{
    $objCnx = new mysqli("localhost","root","","eneljac");
    if ($objCnx->connect_errno) {
        echo "Error de conexion a la base de datos".$objCnx->connect_error;
        exit();
    }
    else
    {
        return $objCnx;
    }
}
 ?>


<!-- esto es lo primero que se crea para hacer una conexion a la base de datos  -->