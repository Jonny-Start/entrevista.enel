<?php include "../config.php";
sessionValidate();
if (isset($_SESSION["rol"])) {
  switch ($_SESSION['rol']) {
    case 1:
        header("location: 401.php");
      break;
    case 2:
      header("location: 401.php");
      break;
    case 3:
      include "../template/sidebar-Jefe.php";
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
                  <div class="card-header py-3" style="text-align: center;">
                      <h2 class="m-0 font-weight-bold text">Completar entrevistas tecnicas asignadas</h2>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered" width="100%" cellspacing="10">
                        <thead style="background-color: gray; color: white; text-align: center;">
                          <tr>
                            <th>Proceso</th>
                            <th>Entrevistador</th>
                            <th>Fecha de Entrevista</th>
                            <th>Nombre candidato</th>
                            <th>Cedula del candidato</th>
                            <th>Cargo al que Aspira</th>
                            <th>Completar</th>
                          </tr>
                        </thead>
                        <?php
                        $co = $_SESSION['co'];
                        require_once "../Model/conexioon.php";
                        $sql = "SELECT * FROM entrevistatecnica Where apruebaEntrevista = $co and terminada = 'False'";
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
                              <td><?php echo $datos['proceso'] ?></td>
                              <td><?php echo $datos['entrevistador'] ?></td>
                              <td><?php echo $datos['fechaEntrevista'] ?></td>
                              <td><?php echo $datos['nombreCandidato'] ?></td>
                              <td><?php echo $datos['idTec'] ?></td>
                              <td><?php echo $datos['cargoAspira'] ?></td>
                              <td style="text-align: center;">
                              <a href="entrevistaTecnica2.php?cc=<?php echo $datos['idTec']?>" title="completar"><i style="color: green; font-size: 2rem;" class="fas fa-user-edit"></i></a>
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
              title: 'Completada!',
              text: 'se completo la entrevista tecnica',
          })
      </script>";
          } else if($_GET["msj"] == "2") {
            echo "<script type='text/javascript'>
          Swal.fire({
              icon: 'error',
              title: '¡ERROR!',
              text: 'No se pudo completar la entrevista, porfavor comunicate con el administrador del aplicativo',
          })
      </script>";
          } 
        }
        ?>
</body>

</html>