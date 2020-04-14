<?php include"../config.php";
sessionValidate();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<?php include FOLDER_TEMPLATE."head.php"; ?>
<?php include FOLDER_TEMPLATE."sidebar.php"; ?>
  
    


<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

  <!-- Content Wrapper -->
  <div id="content-wrapper" class="d-flex flex-column">
    <!-- Main Content -->
    <div id="content">

      <!-- Begin Page Content -->
      <div class="container-fluid">

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
                    <th>Apellido</th>
                    <th>co</th>
                    <th>Perfil</th>
                    <th>Correo Electronico</th>
                    <th>Contraseña</th>
                  </tr>
                </thead>
                
                <tfoot>
                  <tr>
                    <th>Nombre </th>
                    <th>Apellido</th>
                    <th>co</th>
                    <th>Perfil</th>
                    <th>Correo Electronico</th>
                    <th>Contraseña</th>
                  </tr>
                </tfoot>
                <?php 
                    require_once "../Model/conexioon.php";
                    $sql= "SELECT * FROM usuario";

                    $rta=$objCnx->query($sql);

                    while ($datos=$rta->fetch_array()){
                     
                     ?>
                <tbody>
                  <tr>
                  <td><?php echo $datos['nombre']?></td>
                  <td><?php echo $datos['apellidos']?></td>
                  <td><?php echo $datos['co']?></td>
                  <td><?php echo $datos['Perfil']?></td>
                  <td><?php echo $datos['correo_electronico']?></td>
                  <td><?php echo $datos['contraseña']?></td>
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
