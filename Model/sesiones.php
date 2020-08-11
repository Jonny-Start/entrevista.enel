<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<html><head><body style="background-color: black;">
</body></head></html>
<script type="text/javascript">
  function inicio(){    
  setTimeout( ()=>{
    window.location='../index.php';
    },3000)
    swal("Error", "¡Error en la contraseña o correo electronico!", "error");
  }
</script>
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

if ($existe==1){
$user=$resultado->fetch_object();
session_start();
$_SESSION['user']=$user->correo_electronico;
$_SESSION['rol'] = $user->Perfil;
$_SESSION['co'] = $user->co;
$_SESSION['nombre'] = $user->nombre;
$_SESSION['apellidos'] = $user->apellidos;
header("location:../View/Chart.php");
}
else {
 echo("<script type='text/javascript'>
 inicio();
 </script>");
}
?>
