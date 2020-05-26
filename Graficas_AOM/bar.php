<?php
require_once "../Model/conexioon.php";
?>

<script src="../chartJS/Chart.js"></script>
<div style="width: 100%">
	<canvas id="Barras" height="450" width="600"></canvas>
	<script>
		// var randomScalingFactor = function(){ return Math.round(Math.random()*100)};

		var barChartData = {
			labels: [
				<?php
				$sql = "SELECT fechaEntrevista FROM entrevistapsicologica Where year(fechaEntrevista)=year(Now()) group by Month(fechaEntrevista)";
				$resultado = mysqli_query($objCnx, $sql);
				while ($datos = mysqli_fetch_array($resultado)) { ?>

					['<?php echo $datos["fechaEntrevista"] ?>'],

				<?php } ?>
			],
			datasets: [{
				fillColor: "rgba(96,204,255,0.5)", //COLOR DE LAS BARRAS
				strokeColor: "rgba(220,220,220,0.8)", //COLOR DEL BORDE DE LAS BARRAS
				highlightFill: "rgba(255,96,163,0.75)",//COLOR "HOVER" DE LAS BARRAS
				highlightStroke: "rgba(220,220,220,1)",//COLOR "HOVER" DEL BORDE DE LAS BARRAS
				data: <?php
						$sql = "SELECT fechaEntrevista, count(*) as conteo,Month(fechaEntrevista) FROM entrevistapsicologica
				Where year(fechaEntrevista)=year(Now()) group by Month(fechaEntrevista)";
						$resultado = mysqli_query($objCnx, $sql);
						?>[<?php while ($datos = mysqli_fetch_array($resultado)) {
						echo $datos["conteo"] ?>, <?php } ?>]
			}]

		}

		window.onload = function() {
			var ctx = document.getElementById("Barras").getContext("2d");
			window.myBar = new Chart(ctx).Bar(barChartData, {
				responsive: true
			});
		}
	</script>