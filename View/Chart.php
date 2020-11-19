<?php include "../config.php";
sessionValidate();
if (isset($_SESSION["rol"])) {
  switch ($_SESSION['rol']) {
    case 1:
      include "../template/sidebar.php";
      require_once "../Model/conexioon.php";
      $co = $_SESSION['co'];
      //tarjeta#1
      $sql = "SELECT count(*) as conteo FROM entrevistapsicologica WHERE co = '$co'";
      $resultado = mysqli_query($objCnx, $sql);
      while ($datos = mysqli_fetch_array($resultado)) {
        $tarjeta1 = $datos["conteo"];
      }

      $grafica = "include '../Graficas_AOM/line.php'";

      break;
    case 2:
      include "../template/sidebar-Psicologa.php";
      require_once "../Model/conexioon.php";
      $co = $_SESSION['co'];
      //tarjeta#1
      $sql = "SELECT count(*) as conteo FROM entrevistapsicologica WHERE co = '$co'";
      $resultado = mysqli_query($objCnx, $sql);
      while ($datos = mysqli_fetch_array($resultado)) {
        $tarjeta1 = $datos["conteo"];
      }

      $grafica = "include '../Graficas_AOM/line.php'";

      break;
    case 3:
      include "../template/sidebar-Jefe.php";
      require_once "../Model/conexioon.php";
      $co = $_SESSION['co'];
      //tarjeta#1
      $sql = "SELECT count(*) as conteo FROM entrevistatecnica WHERE co = '$co'";
      $resultado = mysqli_query($objCnx, $sql);
      while ($datos = mysqli_fetch_array($resultado)) {
        $tarjeta1 = $datos["conteo"];
      }
      $grafica = "../Graficas_AOM/lineJefe.php'";
      break;
    case 4:
      include "../template/sidebar-BusinessPartner.php";
      require_once "../Model/conexioon.php";
      $co = $_SESSION['co'];
      //tarjeta#1
      $sql = "SELECT count(*) as conteo FROM entrevistabp WHERE co = '$co'";
      $resultado = mysqli_query($objCnx, $sql);
      while ($datos = mysqli_fetch_array($resultado)) {
        $tarjeta1 = $datos["conteo"];
      }

      $grafica = "include '../Graficas_AOM/lineBP.php'";

      break;
  }
}



?>

<?php include FOLDER_TEMPLATE . "head.php"; ?>

<div class="container">
  <div>
    <h1 class="text-center">Estos son tus datos <?php echo $_SESSION['nombre'] ?></b></h1>
  </div>
  <hr />
  <div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-12 col-md-12 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1 text-center">Entrevistas Totales de <?php echo $_SESSION['nombre'] ?></div>
              <div class="h5 mb-0 font-weight-bold text-gray-800 text-center"><?php echo $tarjeta1 ?></div>
            </div>
            <div class="col-auto">
              <i class="fas fa-info-circle fa-2x text-gray-300"></i>
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
              <a class="dropdown-item" href="../Graficas_AOM/line.php" target="_blank">Pantalla Completa</a>
              <a class="dropdown-item" href="#">Another action</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </div>
        </div>
        <!-- Card Body -->
        <div class="card-body">
          <div class="chart-bar">
            <canvas id="Lineal" height="200" width="580"><?php if (isset($_SESSION["rol"])) {
                                                            switch ($_SESSION['rol']) {
                                                              case 1:
                                                                include '../Graficas_AOM/line.php';
                                                                break;
                                                              case 2:
                                                                include '../Graficas_AOM/line.php';
                                                                break;
                                                              case 3:
                                                                include '../Graficas_AOM/lineJefe.php';
                                                                break;
                                                              case 4:
                                                                include '../Graficas_AOM/lineBP.php';
                                                                break;
                                                            }
                                                          } ?></canvas>
          </div>
        </div>
      </div>
    </div><br><br>
    <?php include FOLDER_TEMPLATE . "scripts.php"; ?>