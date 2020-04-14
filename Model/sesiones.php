<?php
session_start();
extract($_REQUEST);

require "conexionBaseDeDatos.php";

$user=$_REQUEST['usuario'];
$pass = $_REQUEST['password'];


$objConexion=conectarse();

$sql="SELECT * FROM usuario where correo_electronico = '$user' and contraseña = '$pass'";



$resultado=$objConexion->query($sql);

$existe= $resultado->num_rows;

if ($existe==1)
{

$usuario=$resultado->fetch_object();
session_start();
$_SESSION['user']=$usuario->correo_electronico;
header("location:../View/principal.php");

}
else {

  header ("location:../index.php");
  echo"No se encuentra el usuario";
}
