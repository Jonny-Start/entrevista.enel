<?php

require_once "../Model/conexioon.php";
$sql="SELECT COUNT(*) AS conteo FROM  entrevistapsicologica ";
$rta=$objCnx->query($sql);
$valoresY = array(); // cantidad 
// $valoresX = array(); // fechas

while($ver=mysqli_fetch_row($rta)){
    $valoresY[]=$ver[0];
}
$datosY=json_decode($valoresY);
?>

<div id="graficaLineal"></div>
<script type="text/javascript">
    var trace1 = {
        x: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Nombiembre', 'Diciembre' ],
        y: [100,200],
        type: 'scatter'
    };

    // var trace2 = {
    //     x: [1, 2, 3, 4],
    //     y: [16, 5, 11, 9],
    //     type: 'scatter'
    // };

    var data = [trace1/*, trace2*/];

    Plotly.newPlot('graficaLineal', data);
</script>