<?php include "../config.php";
sessionValidate();
$co = $_SESSION['co'];
if (isset($_SESSION["rol"])) {
  switch($_SESSION['rol']){
    case 1:
      include "../template/sidebar.php";
    break;
    case 2:
      include "../template/sidebar-Psicologa.php";
      break;
    case 3:
      header('location: ../index.php');
    break;
    case 4:
      header('location: ../index.php');
    break;
  }
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<?php include FOLDER_TEMPLATE . "head.php"; ?>


<body id="page-top">
  <div class="container">
    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-3 bg-gray-300">
        <div class="row">
          <div class="col-md-12">
            <div class="col-md-12 mx-auto">
              <div class="form-group">
                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                  <div class="card-header py-3">
                    <center>
                      <h2 class="m-0 font-weight-bold text">Entrevistas no terminadas</h2>
                    </center>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered" width="100%" cellspacing="10">
                        <thead>
                          <tr>
                            <th>Nombre </th>
                            <th>Cedula de Ciudadania</th>
                            <th>Telefono Celular</th>
                            <th>Fecha de Entrevista</th>
                            <th>Accion</th>
                          </tr>
                        </thead>
                        <tfoot>
                          <tr>
                            <th>Nombre </th>
                            <th>Cedula de Ciudadania</th>
                            <th>Telefono Celular</th>
                            <th>Fecha de Entrevista</th>
                            <th>Accion</th>
                          </tr>
                        </tfoot>
                        <?php
                        require_once "../Model/conexioon.php";
                        $sql = "SELECT * FROM `entrevistapsicologica` where terminado = 'False' and co ='$co' ";
                        $rta = $objCnx->query($sql);

                        while ($datos = $rta->fetch_array()) {
                          $cc = $datos['cc'];
                        ?>
                          <tbody>
                            <tr>
                              <td><?php echo $datos['nombre'] ?></td>
                              <td><?php echo $cc ?></td>
                              <td><?php echo $datos['telefono'] ?></td>
                              <td><?php echo $datos['fechaEntrevista'] ?></td>
                              <td><a href="entrevistaPsTerminada.php?cc=<?php echo $datos['cc'] ?>"><i class="fas fa-user-edit" style="color: green; padding: 5px"></i></a> 
                              <a href="../Controller/ValidarEliminarEntrevistaPsNo.php?cc=<?php echo $cc ?>"><i class="fas fa-user-minus" onclick="verificar()" style="color: red; padding: 5px"></i></a></td>
                            </tr>
                          <?php
                        }
                          ?>
                          </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php include FOLDER_TEMPLATE . "scripts.php"; ?>
        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
          <i class="fas fa-angle-up"></i>
        </a>
        <?php
        extract($_REQUEST);
        if (isset($_REQUEST["msj"])) {
          if ($_REQUEST["msj"] == "1") {
            echo "<script type='text/javascript'>
            Swal.fire({
            icon: 'success',
            title: '¡COMPLETADO!',
            text: 'Se completo correctamente la entrevista',
            })</script>";
          } else if ($_REQUEST["msj"] == "2"){
            echo "<script type='text/javascript'>
            Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'No se pudo completar la entrevista intentalo nuevamente',
          })</script>";
          }else if ($_REQUEST["msj"] == "3") {
            echo "<script type='text/javascript'>
            Swal.fire({
            icon: 'success',
            title: 'Eliminado',
            text: 'Se Elimino el registro correctamente',
          })</script>";
          } else if ($_REQUEST["msj"] == "4"){
            echo "<script type='text/javascript'>
            Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'No se pudo eliminar la informacion, verifica los datos',
          })</script>";
          }
        }
        ?>
</body>
</html>