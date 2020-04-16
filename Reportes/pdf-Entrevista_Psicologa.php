<?php ob_start();
$objCnx = new mysqli("localhost","root","","eneljac");
$cc = $_GET['cc'];

$query = "SELECT * FROM entrevistapsicologica where cc = $cc";
$rta = $objCnx->query($query);

?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<table class="table table-bordered" width="100%" cellspacing="10">
                <thead>
                  <tr>
                    <th>Nombre </th>
                    <th>Cedula de Ciudadania</th>
                    <th>Telefono Celular</th>
                  </tr>
                </thead>
                <?php 
                    require_once "../Model/conexioon.php";
                    $sql = "SELECT * FROM entrevistapsicologica where cc = $cc";
                    $rta=$objCnx->query($sql);
                    while ($datos=$rta->fetch_array()){                     
                     ?>
                <tbody>
                  <tr>
                  <td><?php echo $datos['nombre']?></td>
                  <td><?php echo $datos['cc']?></td>
                  <td><?php echo $datos['telefono']?></td>
                  </tr>
                  <?php  
                    }
                   ?>
                </tbody>
              </table>
</body>
</html>
<?php
require_once("../dompdf/autoload.inc.php");
use Dompdf\Dompdf;
$dompdf = new DOMPDF();
$dompdf->load_html(ob_get_clean());
$dompdf->render();
$pdf = $dompdf->output();
$filename = 'Entrevista_psicologica.pdf';
$dompdf->stream($filename, array("Attachment" => 0));
?>