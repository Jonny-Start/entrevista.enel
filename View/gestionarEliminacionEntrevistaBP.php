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
                  <div class="card-header py-3" style="text-align: center;">
                    <h2 class="m-0 font-weight-bold text">Administrar Entrevista Business Partner (Eliminar)</h2>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered" width="100%" cellspacing="10">
                        <thead style="background-color: gray; color: white; text-align: center;">
                          <tr>
                            <th>Proceso </th>
                            <th>Fecha Entrevista</th>
                            <th>Nombre candidato</th>
                            <th>Cedula</th>
                            <th>Cargo al que aplicó</th>
                            <th>Acción</th>
                          </tr>
                        </thead>
                        <?php
                        require_once "../Model/conexioon.php";
                        $sql = "SELECT entrevistabp.nombreCandidato, entrevistabp.idBP, entrevistabp.proceso, entrevistabp.fechaEntrevista, entrevistabp.cargoAspira, usuario.correo_electronico FROM usuario , entrevistabp where terminada = 'True' and modificar = 'Eliminar' and usuario.co = entrevistabp.co ";
                        $rta = $objCnx->query($sql);
                        while ($datos = $rta->fetch_array()) {
                          $info = $datos['nombreCandidato'] . "||" . $datos['idBP'] . "||" . $datos['correo_electronico'];
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
                              <td><?php echo $datos['fechaEntrevista'] ?></td>
                              <td><?php echo $datos['nombreCandidato'] ?></td>
                              <td><?php echo $datos['idBP'] ?></td>
                              <td><?php echo $datos['cargoAspira'] ?></td>
                              <td style="text-align: center;">
                                <a href="" onclick="agregarModal('<?php echo $info ?>')" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-trash-alt" title="Aprobar" style="color: red; width: 50px; font-size: 2rem;"></i></a>
                                <a href="../Controller/ControllerNegarEliminacionBP.php?cc=<?php echo $datos['idBP'] ?>&&ps=<?php echo $datos['correo_electronico'] ?>&&persona=<?php echo $datos['nombreCandidato'] ?>"><i class='fas fa-ban' title="Negar" style='color: green; width: 50px; font-size: 2rem;'></i></a>
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
        <script type="text/javascript">
        
          function EliminacionBP() {
            var nombre = $('#nombre').text();
            var cc = $('#cedula').text();
            var ps = $('#ps').text();
            var btn = $('#btn');
            btn.attr('disabled', 'disabled');
            cadena = "&nombre=" + nombre + "&cedula=" + cc + "&ps=" + ps;
            $.ajax({
              type: "POST",
              url: "../Controller/ValidarEliminarEntrevistaBP.php?",
              data: cadena,
              success: function(r) {
                if (r == 1) {
                  console.log("esto es bien" + r + cadena);
                  btn.removeAttr('disabled');
                  Swal.fire({
                    icon: 'success',
                    title: 'Se Elimino Correctamente',
                    text: 'La entrevista de eliminó correctamente',
                  });
                } else {
                  console.log("esto es mal" + r + cadena);
                  console.log(r);
                  btn.removeAttr('disabled');
                  Swal.fire({
                    icon: 'error',
                    title: 'ERROR',
                    text: 'No se pudo eliminar la entrevista, porfavor contactese con el administrador del programa',
                  });
                }
              }
            })
            // $(body).load('ValidarEliminarEntrevista.php');
          }
        </script>
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
                  Estas segur@ que deseas eliminar la entrevista con <span id="nombre"></span>, cedula <span id="cedula"></span>?, no se podra recuperar.<br>
                  <span style="display: none;" id="ps"></span>
                </div>
              </div>
              <div class='modal-footer'>
                <button type='button' class='btn btn-danger' data-dismiss='modal'>Cerrar</button>
                <a><button id="btn" onclick="EliminacionBP()" class='btn btn-success'>Enviar</button></a>
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
              title: 'Negado!',
              text: 'se negó la Eliminacion de la entrevista',
          })
      </script>";
          } else if ($_GET["msj"] == "4") {
            echo "<script type='text/javascript'>
          Swal.fire({
              icon: 'error',
              title: '¡ERROR!',
              text: 'No se pudo negar la Eliminacion, porfavor comunicate con el administrador del aplicativo',
          })
      </script>";
          }
        }
        ?>
</body>

</html>