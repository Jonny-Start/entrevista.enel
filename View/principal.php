<?php include "../config.php";
sessionValidate();

?>
<?php include FOLDER_TEMPLATE . "head.php"; ?>
<?php include FOLDER_TEMPLATE . "sidebar.php"; ?>
<?php include  "bar.php"; ?>
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<script type="text/javaScript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.js"></script>
<div class="container">
  <div>
    <h1>Bienvenido <?php echo $_SESSION['nombre'] ?> {<?php echo $_SESSION['rol'] ?>}</h1>
    <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#logoutModal">
      Modal
    </button>
  </div>
  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">que dice perro?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, iusto totam cupiditate nam dignissimos blanditiis in modi provident eum corporis.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">cancelar</button>
          <a class="btn btn-primary" href="login.html">Guardar</a>
        </div>
      </div>
    </div>
  </div>

























   <!-- Page Heading -->
   <h1 class="h3 mb-2 text-gray-800">Charts</h1>
          <p class="mb-4">Chart.js is a third party plugin that is used to generate the charts in this theme. The charts below have been customized - for further customization options, please visit the <a target="_blank" href="https://www.chartjs.org/docs/latest/">official Chart.js documentation</a>.</p>

          <!-- Content Row -->
          <div class="row">

            <div class="col-xl-8 col-lg-7">

              <!-- Area Chart -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Area Chart</h6>
                </div>
                <div class="card-body">
                  <div class="chart-area">
                  <?php
require_once "../Model/conexioon.php";
?>
		
		<script src="../chartJS/Chart.js"></script>
		<div style="width: 50%">
			<canvas id="Barras" height="450" width="600"></canvas>

	<script>
	// var randomScalingFactor = function(){ return Math.round(Math.random()*100)};

	var barChartData = {
		labels : [
		<?php
		$sql ="SELECT fechaEntrevista, count(*) as conteo FROM entrevistapsicologica group by fechaEntrevista";
		$resultado = mysqli_query($objCnx,$sql); 
		while ($datos=mysqli_fetch_array($resultado)){ 

		'echo $datos["fechaEntrevista"]'?>,
		
		<?php } ?>
		],
		datasets : [
			{
				fillColor : "rgba(220,220,220,0.5)",
				strokeColor : "rgba(220,220,220,0.8)",
				highlightFill: "rgba(220,220,220,0.75)",
				highlightStroke: "rgba(220,220,220,1)",
				data :
				<?php
				$sql ="SELECT fechaEntrevista, count(*) as conteo FROM entrevistapsicologica group by fechaEntrevista";
				$resultado = mysqli_query($objCnx,$sql); 
				?>[<?php while ($datos=mysqli_fetch_array($resultado)){  echo $datos["conteo"] ?>,<?php } ?>]
			}
		]

	}
	window.onload = function(){
		var ctx = document.getElementById("Barras").getContext("2d");
		window.myBar = new Chart(ctx).Bar(barChartData, {
			responsive : true
		});
	}

	</script>
		
                  </div>
                  <hr>
                  Styling for the area chart can be found in the <code>/js/demo/chart-area-demo.js</code> file.
                </div>
              </div>


            </div>

            <!-- Donut Chart -->
            <div class="col-xl-4 col-lg-5">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Donut Chart</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="chart-pie pt-4">
                    <canvas id="myPieChart"></canvas>
                  </div>
                  <hr>
                  Styling for the donut chart can be found in the <code>/js/demo/chart-pie-demo.js</code> file.
                </div>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

<?php include FOLDER_TEMPLATE . "scripts.php"; ?>
</body>

</html>

