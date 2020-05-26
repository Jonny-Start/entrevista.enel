<?php include "../config.php";
sessionValidate();
$co = $_SESSION['co'];
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<?php include FOLDER_TEMPLATE . "head.php"; ?>
<?php include FOLDER_TEMPLATE . "sidebar.php"; ?>


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
                        ?>
                          <tbody>
                            <tr>
                              <td><?php echo $datos['nombre'] ?></td>
                              <td><?php echo $datos['cc'] ?></td>
                              <td><?php echo $datos['telefono'] ?></td>
                              <td><?php echo $datos['fechaEntrevista']?></td>
                              <td><a href="entrevistaPsTerminada.php?cc=<?php echo $datos['cc'] ?>"><i class="fas fa-user-edit" style="color: green; padding: 5px"></i></a>   <i class="fas fa-user-minus"  style="color: red; padding: 5px"></i></td>
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
              <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

          </div>
          <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
          <i class="fas fa-angle-up"></i>
        </a>
        <?php include FOLDER_TEMPLATE . "scripts.php"; ?>
</body>

</html>