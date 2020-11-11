<?php include "../config.php";
sessionValidate();
if (isset($_SESSION["rol"])) {
  switch ($_SESSION['rol']) {
    case 1:
      include "../template/sidebar.php";
      break;
    case 2:
      header("location: 401.php");
      break;
    case 3:
      header('location: 401.php');
      break;
    case 4:
      header('location: 401.php');
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
                      <h2 class="m-0 font-weight-bold text">Administrar Entrevista Profesional (Editar)</h2>
                    </center>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered" width="100%" cellspacing="10">
                        <thead style="background-color: gray; color: white; text-align: center;">
                          <tr>
                            <th>Nombre </th>
                            <th>Cedula de Ciudadania</th>
                            <th>Telefono Celular</th>
                            <th>Fecha de entrevista</th>
                            <th>Psicóloga</th>
                            <th>Acción</th>
                          </tr>
                        </thead>
                        <?php
                        require_once "../Model/conexioon.php";
                        $sql = "SELECT * FROM `entrevistapsicologica` where terminado = 'True' and  modificar = 'Solicitado'";
                        $rta = $objCnx->query($sql);
                        while ($datos = $rta->fetch_array()) {
                        ?>
                          <style>
                            i {
                              margin-top: 3px;
                            }

                            td {
                              width: auto;
                              height: auto;
                            }

                            .centrado {
                              text-align: center;
                            }

                            span {
                              padding: 0px;
                            }
                          </style>

                          <tbody>
                            <tr>
                              <td><?php echo $datos['nombre'] ?></td>
                              <td><?php echo $datos['cc'] ?></td>
                              <td><?php echo $datos['telefono'] ?></td>
                              <td><?php echo $datos['fechaEntrevista'] ?></td>
                              <td><?php echo $datos['psicologa'] ?></td>
                              <td style="text-align: center;">
                                <a href="../Controller/ControllerAprobarEdicionEPs.php?cc=<?php echo $datos['cc'] ?>&ps=<?php echo $datos['cc'] ?>"><i class="fas fa-check" title="Aprobar" style="color: green; width: 50px; font-size: 2rem;"></i></a>
                                <a href="../Controller/ControllerNegarEdicionEPS.php?cc=<?php echo $datos['cc'] ?>"><i class='fas fa-times' title="Negar" style='color: red; width: 50px; font-size: 2rem;'></i></a>
                              </td>
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
        <a class="scroll-to-top rounded" href="#page-top">
          <i class="fas fa-angle-up"></i>
        </a>
        <?php include FOLDER_TEMPLATE . "scripts.php"; ?>
        <script type="text/javascript" src="../vendor/funciones.js"></script>

        <?php
        if (isset($_GET["msj"])) {
          if ($_GET["msj"] == "1") {
            echo " <script type='text/javascript'>
          Swal.fire({
              icon: 'success',
              title: 'APROBADO!',
              text: 'se aprobo la edicion de la entrevista',
          })
      </script>";
          } else if ($_GET["msj"] == "2") {
            echo "<script type='text/javascript'>
          Swal.fire({
              icon: 'error',
              title: '¡ERROR!',
              text: 'No se pudo aprobar la edicion, porfavor comunicate con el administrador del aplicativo',
          })
      </script>";
          } else if ($_GET["msj"] == "3") {
            echo " <script type='text/javascript'>
          Swal.fire({
              icon: 'success',
              title: 'Negado!',
              text: 'se negó la edicion de la entrevista',
          })
      </script>";
          } else if ($_GET["msj"] == "4") {
            echo "<script type='text/javascript'>
          Swal.fire({
              icon: 'error',
              title: '¡ERROR!',
              text: 'No se pudo negar la edicion, porfavor comunicate con el administrador del aplicativo',
          })
      </script>";
          }
        }
        ?>
</body>

</html>