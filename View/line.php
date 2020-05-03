<?php
require_once "../Model/conexioon.php";
?>
		
		<script src="../chartJS/Chart.js"></script>
		<div style="width: 50%">
			<canvas id="Lineal" height="450" width="600"></canvas>
		
	<script>
		// var randomScalingFactor = function(){ return Math.round(Math.random()*100)};
		var lineChartData = {
			labels :[
		<?php
		$sql ="SELECT fechaEntrevista FROM entrevistapsicologica Where year(fechaEntrevista)=year(Now()) group by Month(fechaEntrevista)";
		$resultado = mysqli_query($objCnx,$sql);
		while ($datos=mysqli_fetch_array($resultado)){
		?>
		['<?php echo $datos["fechaEntrevista"] ?>'],

		<?php } ?>
		
		 ],
			datasets : [
				{
					label: "My Second dataset",
					fillColor : "rgba(151,187,205,0.2)",
					strokeColor : "rgba(151,187,205,1)",
					pointColor : "rgba(151,187,205,1)",
					pointStrokeColor : "#fff",
					pointHighlightFill : "#fff",
					pointHighlightStroke : "rgba(151,187,205,1)",
					data : <?php
					$sql="SELECT fechaEntrevista, count(*) as conteo,Month(fechaEntrevista) FROM entrevistapsicologica
					Where year(fechaEntrevista)=year(Now()) group by Month(fechaEntrevista)";
				$resultado = mysqli_query($objCnx,$sql); 
				?>[<?php while ($datos=mysqli_fetch_array($resultado)){ echo $datos["conteo"] ?>,<?php } ?>]
			}
			]

		}

	window.onload = function(){
		var ctx = document.getElementById("Lineal").getContext("2d");
		window.myLine = new Chart(ctx).Line(lineChartData, {
			responsive: true
		});
	}


	</script>
