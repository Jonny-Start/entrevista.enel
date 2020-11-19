<?php include "../config.php";
sessionValidate();
if (isset($_SESSION["rol"])) {
  switch ($_SESSION['rol']) {
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
                      <h2 class="m-0 font-weight-bold text">Administrar Entrevista Profesional</h2>
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
                            <th>Acción</th>
                          </tr>
                        </thead>
                        <tfoot>
                          <tr>
                            <th>Nombre </th>
                            <th>Cedula de Ciudadania</th>
                            <th>Telefono Celular</th>
                            <th>Acción</th>
                          </tr>
                        </tfoot>
                        <?php
                        $co = $_SESSION['co'];
                        require_once "../Model/conexioon.php";
                        $sql = "SELECT * FROM `entrevistapsicologica` where terminado = 'True' and co = $co ";
                        $rta = $objCnx->query($sql);
                        while ($datos = $rta->fetch_array()) {
                          $info = $datos['nombre'] . "||" . $datos['cc'];
                          $i = $datos['nombre'] . "||" . $datos['cc'];
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
                              <td style="text-align: center;">
                                <a href="" onclick="agregarModal('<?php echo $info ?>')" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-trash-alt" title="Solicitar eliminacion de entrevista" style="color: red; width: 50px; font-size: 2rem;"></i></a>
                                <a href="" onclick="agregarModal2('<?php echo $i ?>')" id="correo" data-toggle='modal' data-target='#exampleModal2'><i class='fas fa-envelope-open-text correo' style='color: blue; width: 50px; font-size: 2rem;'></i></a>
                                <?php
                                $cc = $datos['cc'];
                                if ($datos['modificar'] == 'True') {
                                  echo "<a href='editarEntrevistaPs.php?cc=$cc'><i class='fas fa-edit' title='Editar entrevista' style='color: green; width: 50px; font-size: 2rem;'></i></a>";
                                }
                                ?>
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

        <!-- Modal solicitud de edicion-->
        <div class='modal fade' id='exampleModal' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
          <div class='modal-dialog' role='document'>
            <div class='modal-content'>
              <div class='modal-header'>
                <h5 class='modal-title' id='exampleModalLabel'>Solicitud de eliminacion</h5>
                <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                  <span aria-hidden='true'>&times;</span>
                </button>
              </div>
              <div class='modal-body'>
                <div style="text-align: center"><img src='../img/exclamacion.png' alt='Alerta' width='50%'></div>
                <br>
                <div class="container" style="color: black;">
                  Estas segur@ que deseas solicitar la eliminacion de la entrevista con <span id="nombre"></span> con numero de cedula <span id="cedula"></span>?, no se podra recuperar en un futuro.<br>
                </div>
              </div>
              <div class='modal-footer'>
                <button type='button' class='btn btn-danger' data-dismiss='modal'>Cerrar</button>
                <a><button id="btn" onclick="solicitarEliminacion()" class='btn btn-success'>Enviar</button></a>
              </div>
            </div>
          </div>
        </div>
        <!-- Modal 2 solicitud de edicion -->
        <div class='modal fade' id='exampleModal2' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
          <div class='modal-dialog' role='document'>
            <div class='modal-content'>
              <div class='modal-header'>
                <h5 class='modal-title' id='exampleModalLabel'>Solicitud para editar</h5>
                <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                  <span aria-hidden='true'>&times;</span>
                </button>
              </div>
              <div class='modal-body'>
                <div style="text-align: center"><img src='../img/exclamacion.png' alt='Alerta' width='50%'></div>
                <br>
                <div class="container" style="color: black;">
                  Deseas solicitar la edicion de la entrevista con <span id="name"></span> con numero de cedula <span id="cc"></span>?<br>
                </div>
              </div>
              <div class='modal-footer'>
                <button type='button' class='btn btn-danger' data-dismiss='modal'>Cerrar</button>
                <a><button id="boton" onclick="solictarEdicion()" class='btn btn-success'>Enviar</button></a>
              </div>
            </div>
          </div>
        </div>
        <?php
        if (isset($_GET["msj"])) {

          if ($_GET["msj"] == "3") {
            echo " <script type='text/javascript'>
                    Swal.fire({
                        icon: 'success',
                        title: 'COMPLETADO!',
                        text: 'se actualizo correctamente la entrevista Psicologica',
                    })
                </script>";
          } else if ($_GET["msj"] == "4") {
            echo "<script type='text/javascript'>
                    Swal.fire({
                        icon: 'error',
                        title: '¡ERROR!',
                        text: 'No se pudo actualizar la entrevista, intentalo nuevamente',
                    })
                </script>";
          }
        }
        ?>
</body>
</html>