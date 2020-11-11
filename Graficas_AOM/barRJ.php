<script src="../chartJS/Chart.js"></script>
<div style="width: 50%">
	<script>
		// var randomScalingFactor = function(){ return Math.round(Math.random()*100)};

		var barChartData = {
			labels: ['Responsabilidad', 'Productividad', 'Gestion del Cambio', 'Innovación', 'Resiliencia', 'Confianza'],
			datasets: [{
				fillColor: "rgba(67,254,78,0.5)", //COLOR DE LAS BARRAS
				strokeColor: "rgba(67,254,78,1)", //COLOR DEL BORDE DE LAS BARRAS
				highlightFill: "rgba(67,234,254,0.5)",//COLOR "HOVER" DE LAS BARRAS
				highlightStroke: "rgba(67,234,254,1)",//COLOR "HOVER" DEL BORDE DE LAS BARRAS
				data: <?php
				$cc= $_GET['cc'];
				$sql = "SELECT responsabilidad, productividad, gestionCambio, innovacion, resiliencia, confianza FROM entrevistapsicologica Where cc = '$cc'"; 
				$resultado = mysqli_query($objCnx, $sql);
				$datos = mysqli_fetch_array($resultado);
				?>
				[<?php echo $datos["responsabilidad"]?>, <?php echo $datos["productividad"]?>, <?php echo $datos["gestionCambio"]?>, <?php echo $datos["innovacion"]?>, <?php echo $datos["resiliencia"]?>, <?php echo $datos["confianza"]?>],
			}]

		}

		window.onload = function() {
			var ctx = document.getElementById("Barras").getContext("2d");
			window.myBar = new Chart(ctx).Bar(barChartData, {
				responsive: true
			});
		}
	</script>