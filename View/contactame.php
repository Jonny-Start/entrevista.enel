<?php include "../config.php";
//sessionValidate();
?>
<?php include FOLDER_TEMPLATE . "scripts.php"; ?>
<?php //include FOLDER_TEMPLATE."head.php"; 
?>

<?php include FOLDER_TEMPLATE . "head.php"; ?>
<link href="../css/style.css" rel="stylesheet" type="text/css">

<body class="bg-primary">

  <div class="contenedor3">
    <div class="">
      <h2 class="titulo"><b>¡Solicita una cuenta!</b></h2>
    </div>
    <div class="contenedor4">



      <form class="" method="POST" action="../Controller/ValidacionContactame.php">
        <!-- <div class="form-group"> -->
        <input type="text" name="nombre" class="form-control caja1" id="nombre" placeholder="¿Cuál es tu Nombre?" required>
        <!-- </div> -->
        <!-- <div class="form-group"> -->
        <input type="text" name="apellido" class="form-control caja1" id="apellido" placeholder="¿Cuál es tu Apellido?" required>
        <!-- </div> -->
        <!-- <div class="form-group"> -->
        <input type="number" name="co" class="form-control caja1" id="co" placeholder="¿Cuál es tu Co?" required><br>
        <!-- </div> -->
        <!-- <div class="form-group"> -->
        <input type="email" name="email" class="form-control caja2" id="email" placeholder="¿Cuál es tu correo Empresarial?" required>
        <!-- </div> -->
        <!-- <div class="input-group"> -->
        <input type="text" class="form-control caja3" name="mensaje" id="mensaje" placeholder="Escribe un mensaje al destinatario" required>
        <!-- </div> -->
        <br>
    </div>
    <div class="contenedor5">
      <!-- <div class="form-group"> -->
      <button type="submit" name="botton" class="btn btn-success boton1">
        <i class="fas fa-envelope"></i> Enviar</button>
      <!-- </div> -->
      <a href="../index.php" class="btn btn-danger ">
        <i class="fas fa-ban"></i> Cancelar
      </a>
    </div>
    </form>
  </div>

  <!-- <table style='width:100%'><tr>
        <th colspan='2'><h2>responsabilidad</h2></th>
        </tr><tr><td style=' background-color: rgb(226, 239, 218)'><h3>Fortalezas</h3><br><p></p></td>
          <td style='background-color: rgb(252, 228, 214)'><h3>Debilidades</h3><br><p></p></td></tr>
      </table> -->



</body>










<!-- <div class="spinner-grow text-primary" role="status">
  <span class="sr-only mx-auto" style="width: 200px;" >Loading...</span>
</div>
<div class="spinner-grow text-secondary" role="status">
  <span class="sr-only mx-auto" style="width: 200px;">Loading...</span>
</div>
<div class="spinner-grow text-success" role="status">
  <span class="sr-only mx-auto" style="width: 200px;">Loading...</span>
</div>
<div class="spinner-grow text-danger" role="status">
  <span class="sr-only mx-auto" style="width: 200px;" >Loading...</span>
</div>
<div class="spinner-grow text-warning" role="status">
  <span class="sr-only">Loading...</span>
</div>
<div class="spinner-grow text-info" role="status">
  <span class="sr-only">Loading...</span>
</div>
<div class="spinner-grow text-light" role="status">
  <span class="sr-only">Loading...</span>
</div>
<div class="spinner-grow text-dark" role="status">
  <span class="sr-only">Loading...</span>
</div> -->