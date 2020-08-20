<?php include "../config.php";
//sessionValidate();
?>
<?php include FOLDER_TEMPLATE . "scripts.php"; ?>
<?php include FOLDER_TEMPLATE . "head.php"; ?>
<link href="../css/contactame.css" rel="stylesheet" type="text/css">

<body class="bg-primary">
  <div class="contenedor3">
  <img src="../img/enel.png" alt="imagen Enel" >
    <div>
      <h2 class="titulo"><b>¡Solicita una cuenta!</b></h2>
    </div>
    <div class="contenedor4">
      <form method="POST" action="../Controller/ValidacionContactame.php">
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
      <button type="submit" name="botton" class="btn btn-success boton1" >
        <i class="fas fa-envelope"></i> Enviar</button>
      <!-- </div> -->
    </div>
    </form>
  </div>
</body>