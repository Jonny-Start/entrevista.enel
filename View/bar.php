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

		'echo $datos["fechaEntrevista"] '?>,
		
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
		