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

  table {
  border-collapse: collapse;
  width: 100%;
  }

  th, td {
  text-atdgn: left;
  padding: 8px;
  }

  tr:nth-child(even) 
{
  background-color: #f2f2f2;
}
h2
{
  text-align: center;
}
</style>
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
<hr />
<?php 
     require_once "../Model/conexioon.php";
     $sql = "SELECT * FROM entrevistapsicologica where cc = $cc";
     $rta=$objCnx->query($sql);
     while ($datos=$rta->fetch_array()){                     
?>
<h2>Informacion Primaria</h2>
<table class="table table-bordered" width="100%" cellspacing="10">
  <tbody>
  <tr>
  <td>Nombre:</td>
  <td><?php echo $datos['nombre']?></td>
  </tr>
  <tr>
  <td>Cedula:</td>
  <td><?php echo $datos['cc']?> </td>
  </tr>
  <tr>
  <td>Dependencia: </td>
  <td> <?php echo $datos['dependencia']?> </td>
  </tr>
  <tr>
  <td>Cargo:  </td>
  <td> <?php echo $datos['cargo']?></td>
  </tr>
  <tr>
  <td>Cargo al que Aspira:  </td>
  <td> <?php echo $datos['cargoAspira']?></td>
  </tr>
  <tr>
  <td>Telefono: </td>
  <td> <?php echo $datos['telefono']?> </td>
  </tr>
  <tr>
  <td>Aspiracion Salarial: </td>
  <td> <?php echo $datos['aspiracionSal']?> </td>
  </tr>
  <tr>
  <td>Fecha Entrevista: </td>
  <td> <?php echo $datos['fechaEntrevista']?> </td>
  </tr>
  <tr>
  <td>Entrevistador(a): </td>
  <td> <?php echo $datos['psicologa']?> </td>
  </tr>
  <tr>
  <td>Resultado de Idiomas:  </td>
  <td><?php echo $datos['resultadoI']?> </td>
  </tr>
  <tr>
  <td>Fuente de Reclutamiento: </td>
  <td> <?php echo $datos['fuenteR']?> </td>
  </tr>
  <!-- <tr>
  <td>Concepto:  </td>
  <td> </td>
  </tr> -->
  </tbody>
</table>
<br />
<hr/>
<h2>Concepto Psicóloga</h2>
<p><?php echo $datos['concepto']?> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum, reprehenderit! Cupiditate, sunt dicta. Architecto rerum, deleniti facilis aliquid ducimus quisquam! Adipisci, eum, doloribus reiciendis nemo dolorum dolor provident at accusantium corrupti, cum quia minus? Facere quos est accusantium dicta? Consectetur aliquam, necessitatibus ullam repellat laborum eaque optio quod maiores. Dignissimos.</p>
<hr />
<br><br><br><br>

  <?php  
  }
  ?>
</body>
</html>
<?php
require_once("../dompdf/autoload.inc.php");
use Dompdf\Dompdf;
$dompdf = new DOMPDF();
$dompdf->load_html(ob_get_clean());
// $mpdf->SetProtection(array(), '123456', '123456');  // esto es para encryptar los pdf pero con mpdf
$dompdf->render();
$pdf = $dompdf->output();
$filename = 'Entrevista_psicologica.pdf';
$dompdf->stream($filename, array("Attachment" => 0));
?>