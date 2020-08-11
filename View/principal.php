<?php include "../config.php";
sessionValidate();
require_once "../Model/conexioon.php";

//tarjeta#4
$sql = "SELECT count(*) as conteo FROM usuario";
$resultado = mysqli_query($objCnx, $sql);
while ($datos = mysqli_fetch_array($resultado)) {
  $tarjeta4 = $datos["conteo"];
}
//tarjeta#1
$sql = "SELECT count(*) as conteo FROM entrevistapsicologica";
$resultado = mysqli_query($objCnx, $sql);
while ($datos = mysqli_fetch_array($resultado)) {
  $tarjeta1 = $datos["conteo"];
}

?>
<?php include FOLDER_TEMPLATE . "head.php"; ?>
<?php include FOLDER_TEMPLATE . "sidebar.php"; ?>
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<!-- <script type="text/javaScript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.js"></script> -->
<div class="container">
  <div>
    <h1 class="text-center" style="color: black">Bienvenido <?php echo $_SESSION['nombre'] ?> <b class="text-right" style="color: #ACC9E4; ">[<?php echo $_SESSION['rol'] ?>]</b></h1>
  </div>
  <hr />

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard-Global</h1>
    <a href="consultarEntrevistaPsicologa.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i>Reporte De Entrevista</a>
  </div>

  <!-- Content Row -->
  <div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Entrevistas Totales Psicologa</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $tarjeta1 ?></div>
            </div>
            <div class="col-auto">
              <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Entrevistas Totales Jefes</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $_SESSION['co'] ?></div>
            </div>
            <div class="col-auto">
              <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Entrevistas Totales Business_Partner</div>
              <div class="row no-gutters align-items-center">
                <div class="col-auto">
                </div>
                <div class="col">
                  <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $_SESSION['co'] ?></div>
                </div>
              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Pending Requests Card Example -->
    <div class="col-xl-3 col-md-6 mb-4" title="Entrevista totales de Practicantes y aprendices">
      <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Entrevistas Totales Prac / Apre</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $tarjeta4 ?></div>
            </div>
            <div class="col-auto">
              <i class="fas fa-calendar fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- Content Row -->
  <div class="row">
    <!-- Area Chart -->
    <div class="col-xl-12 col-lg-12">
      <div class="card shadow mb-8">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">Reporte por dias</h6>
          <div class="dropdown no-arrow">
            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
              <div class="dropdown-header">Dropdown Header:</div>
              <a class="dropdown-item" href="../Graficas_AOM/bar.php" target="_blank">Pantalla Completa</a>
              <a class="dropdown-item" href="#">Another action</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </div>
        </div>
        <!-- Card Body -->
        <div class="card-body">
          <div class="chart-bar">
            <canvas id="Barras" height="200" width="580"><?php include "../Graficas_AOM/bar.php" ?></canvas>
          </div>
        </div>
      </div>
    </div>
    <br />


    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <?php include FOLDER_TEMPLATE . "scripts.php"; ?>