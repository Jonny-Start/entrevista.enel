<?php include"../config.php";
//sessionValidate();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<?php include FOLDER_TEMPLATE. "head.php"; ?>
<link href="<?=URL_CSS?>https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<body id="page-top">
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- 404 Error Text -->
          <div class="text-center">
            <br />
            <br />
            <br />
            <div class="error mx-auto" data-text="404">404</div>
            <p class="lead text-gray-800 mb-5">Página NO encontrada</p>
            <p class="text-gray-500 mb-0">Al parecer intentas entrar a una página que no existe</p> 
            <p class="text-gray-500 mb-0"> verifica la URL a la quieres entrar.</p>
            <a href="principal.php">&larr; Regresa a la página Principal</a>
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

  <?php include FOLDER_TEMPLATE. "scripts.php"; ?>
</body>
</html>