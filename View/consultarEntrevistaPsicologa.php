<?php include"../config.php";
sessionValidate();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<?php include FOLDER_TEMPLATE."head.php"; ?>
<?php include FOLDER_TEMPLATE."sidebar.php"; ?>
  
<body id="page-top">
<div class="container">
          <div class="card o-hidden border-0 shadow-lg my-5">
              <div class="card-body p-0 bg-gray-300">
                  <div class="row">
                      <div class="col-md-12">
                          <div class="col-md-12 mx-auto">
                              <div class="form-group">  
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
           <center> <h2 class="m-0 font-weight-bold text">Usuarios De la Pagina</h2> </center>
          </div>
          
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" width="100%" cellspacing="10">
                <thead>
                  <tr>
                    <th>Nombre </th>
                    <th>Cedula de Ciudadania</th>
                    <th>Telefono Celular</th>
                    <th>Reporte</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>Nombre </th>
                    <th>Cedula de Ciudadania</th>
                    <th>Telefono Celular</th>
                    <th>Reporte</th>
                  </tr>
                </tfoot>
                <?php 
                    require_once "../Model/conexioon.php";
                    $sql = "SELECT * FROM `entrevistapsicologica`";
                    $rta=$objCnx->query($sql);
                    while ($datos=$rta->fetch_array()){
                     ?>
                <tbody>
                  <tr>
                  <td><?php echo $datos['nombre']?></td>
                  <td><?php echo $datos['cc']?></td>
                  <td><?php echo $datos['telefono']?></td>
                  <td><a href="../Reportes/pdf-Entrevista_Psicologa.php?cc=<?php echo $datos['cc']?>" target="_blank"><img src="../img/pdf.png" alt="Sacar Reporte" width="30" height="40"></a></td>
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

    <!-- Footer -->
    
    <footer class="sticky-footer bg-white">
      <div class="container my-auto">
        <div class="copyright text-center my-auto">
          <span>Copyright &copy; Entrevistas Enel 2020</span>
        </div>
      </div>
    </footer>

    <!-- End of Footer -->

  </div>
  <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
  <i class="fas fa-angle-up"></i>
</a>
<?php include FOLDER_TEMPLATE. "scripts.php"; ?>
</body>
</html>
