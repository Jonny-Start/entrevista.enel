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
  <style>
  header
  {
    background-color: #E0E0F8;
  }
  </style>
  <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>
<header>
<table >
<tr>
<th><img src="../img/PsicologiaPNG.png" alt="Entrevista_Enel.com" width="120" height="100"></th>
<th></th>
<th><h1>Entrevista Psicologica</h1></th>
<th></th>
<th class="esquina"><img src="../img/enel.png" alt="Entrevista_Enel.com" width="250" height="100"></th>
</tr>
</table>
</header>
<br >
<hr />
<?php 
     require_once "../Model/conexioon.php";
     $sql = "SELECT * FROM entrevistapsicologica where cc = $cc";
     $rta=$objCnx->query($sql);
     while ($datos=$rta->fetch_array()){                     
?>
<ul style:text: black;><span >
  <li class="list-group-item list-group-item-info">Nombre:  <?php echo $datos['nombre']?> </li>
  <li class="list-group-item list-group-item-info">Cedula:  <?php echo $datos['cc']?> </li>
  <li class="list-group-item list-group-item-info">Fecha De Nacimiento:  <?php echo $datos['fecha_nac']?> </li>
  <li class="list-group-item list-group-item-info">Dependencia:  <?php echo $datos['dependencia']?> </li>
  <li class="list-group-item list-group-item-info">Cargo:  <?php echo $datos['cargo']?> </li>
  <li class="list-group-item list-group-item-info">Cargo al que Aspira:  <?php echo $datos['cargoAspira']?> </li>
  <li class="list-group-item list-group-item-info">Telefono:  <?php echo $datos['telefono']?> </li>
  <li class="list-group-item list-group-item-info">Aspiracion Salarial:  <?php echo $datos['aspiracionSal']?> </li>
  <li class="list-group-item list-group-item-info">Fecha Entrevista:  <?php echo $datos['fechaEntrevista']?> </li>
  <li class="list-group-item list-group-item-info">Entrevistador(a):  <?php echo $datos['psicologa']?> </li>
  <li class="list-group-item list-group-item-info">Resultado de Idiomas:  <?php echo $datos['resultadoI']?> </li>
  <li class="list-group-item list-group-item-info">Fuente de Reclutamiento:  <?php echo $datos['fuenteR']?> </li>
  <li class="list-group-item list-group-item-info">Concepto:  <?php echo $datos['concepto']?> </li>
  </span></ul>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>

<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
<table class="table table-bordered" width="100%" cellspacing="10">
                <thead>
                  <tr>
                    <th>Nombre </th>
                    <th>Cedula de Ciudadania</th>
                    <th>Telefono Celular</th>
                  </tr>
                </thead>
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