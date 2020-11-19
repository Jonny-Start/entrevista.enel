<?php 
session_start();
require_once "../Model/conexioon.php";
$co = $_SESSION['co'];
?>
		
		<script src="../chartJS/Chart.js"></script>
		<div style="width: 100%">
			<canvas id="Lineal" height="450" width="600"></canvas>
	<script>
		// var randomScalingFactor = function(){ return Math.round(Math.random()*100)};
		var lineChartData = {
			labels :[
		<?php
		$sql ="SELECT fechaEntrevista FROM entrevistatecnica Where year(fechaEntrevista)=year(Now()) and co = '$co' group by fechaEntrevista";
		$resultado = mysqli_query($objCnx,$sql);
		while ($datos=mysqli_fetch_array($resultado)){
		?>
		['<?php echo $datos["fechaEntrevista"] ?>'],

		<?php } ?>
		
		 ],
			datasets : [
				{
					label: "My Second dataset",
					fillColor : "rgba(151,187,205,0.2)",//COLOR DE LAS BARRAS
					strokeColor : "rgba(151,187,205,1)",//COLOR DEL BORDE DE LAS BARRAS
					pointColor : "rgba(151,187,205,1)", // COLOR DE LOS PUNTOS
					pointStrokeColor : "#fff", //COLOR DEL BORDE DE LOS PUNTOS 
					pointHighlightFill : "#FF60A3",//COLOR "HOVER" DE LAS BARRAS
					pointHighlightStroke : "rgba(255,96,180,1)", //COLOR "HOVER" DEL BORDE DE LAS BARRAS
					data : <?php
					// $sql="SELECT fechaEntrevista, count(*) as conteo,Month(fechaEntrevista) FROM entrevistapsicologica
					// Where year(fechaEntrevista)=year(Now()) group by Month(fechaEntrevista)";

					$sql ="SELECT fechaEntrevista, co, count(*) as conteo FROM entrevistatecnica  Where year(fechaEntrevista)=year(Now()) and co = '$co' group by fechaEntrevista";
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