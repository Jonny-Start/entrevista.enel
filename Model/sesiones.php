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
$user=$resultado->fetch_object();
session_start();
$_SESSION['user']=$user->correo_electronico;
$_SESSION['rol'] = $user->Perfil;
$_SESSION['co'] = $user->co;
$_SESSION['nombre'] = $user->nombre;
header("location:../View/principal.php");
}
else {
  header ("location:../index.php");
  echo"No se encuentra el usuario";
}
require '../View/principal.php';
