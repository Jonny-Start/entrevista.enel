<?php
session_start();
extract($_REQUEST);

<<<<<<< HEAD

=======
>>>>>>> 62337f6660364554e7a760dc1e4f5fdc8499f069
require "conexionBaseDeDatos.php";

$user=$_REQUEST['usuario'];
$pass = $_REQUEST['password'];
<<<<<<< HEAD
=======
// $co=0;
// $rol="";

// $mysqli ="SELECT * FROM usuario where co = '$co' and Perfil = '$rol' and correo_electronico = '$user'";
// $rta=$objConexion->query($mysqli);
>>>>>>> 62337f6660364554e7a760dc1e4f5fdc8499f069

$objConexion=conectarse();

$sql="SELECT * FROM usuario where correo_electronico = '$user' and contraseña = '$pass'";

$resultado=$objConexion->query($sql);

$existe= $resultado->num_rows;

if ($existe==1)
{
<<<<<<< HEAD
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
=======
$usuario=$resultado->fetch_object();
session_start();
$_SESSION['user']=$usuario->correo_electronico;
header("location:../View/principal.php");
}
else {

  header ("location:../index.php");
  echo"No se encuentra el usuario";
}
>>>>>>> 62337f6660364554e7a760dc1e4f5fdc8499f069
