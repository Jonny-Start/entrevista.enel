<?php include "../config.php";
sessionValidate();
?>
<?php include FOLDER_TEMPLATE . "head.php"; ?>
<?php include FOLDER_TEMPLATE . "sidebar.php"; ?>
<style type="text/css" rel="stylesheet" src="../SW2/sweetalert2.min.css"></style>
<div class="container">
  <!-- Donut Chart -->
  <div class="col-xl-12 col-lg-8" style="margin-top: 20px;">
    <div class="card shadow mb-8">
      <!-- Card Header - Dropdown -->
      <div class="card-header py-4 bg-gray-500">
        <h1 class="m-0 font-weight-bold text-primary text-center ">Mis Datos</h1>
      </div>
      <!-- Card Body -->
      <div class="card-body bg-gray-300">
        <!-- consulta BD -->
        <?php
        require_once "../Model/conexioon.php";
        $co = $_SESSION['co'];
        $nombre = $_SESSION['nombre'];
        $sql = "SELECT * FROM usuario WHERE co = '$co'";

        $rta = $objCnx->query($sql);

        while ($datos = $rta->fetch_array()) {
          $nombre = $datos['nombre'];
          $apellidos = $datos['apellidos'];
          $co = $datos['co'];
          $Perfil = $datos['Perfil'];
          $correo_electronico = $datos['correo_electronico'];
          $contraseña = $datos['contraseña'];
        }
        ?>
        <style>

        </style>
        <!-- fin de la consulta -->
        <div>
          <center><img src="../img/misDatos.png" alt="Img_Modificar_Usuario"></center>
        </div>
        <form id="form1" name="form1" method="post" action="../Controller/controllermisDatos.php">
          <div class="form-group row">
            <div class="col-sm-12">
              <label style="color: black">Nombre</label>
              <input type="text" name="nombre" id="nombre" class="form-control form-control-user " value="<?php echo $nombre; ?>" required />
            </div>
          </div>
          <div class="form-group row">
            <div class="col-sm-12">
              <label style="color: black">Apellido</label>
              <input type="text" name="apellidos" id="apellidos" class="form-control form-control-user" value="<?php echo $apellidos; ?>" required />
            </div>
          </div>
          <div class="form-group row">
            <div class="col-sm-12">
              <label style="color: black">Perfil</label>
              <input class="form-control form-control-user " value="<?php echo $Perfil; ?>" readonly />
            </div>
          </div>
          <div class="form-group row">
            <div class="col-sm-12">
              <label style="color: black">Correo Electronico</label>
              <input type="email" name="correo_electronico" id="correo_electronico" class="form-control form-control-user" value="<?php echo $correo_electronico; ?>" required />
            </div>
          </div>
          <div class="form-group row">
            <div class="col-sm-12">
              <label style="color: black">Co</label>
              <input type="text" name="co" id="co" class="form-control" value="<?php echo $co; ?>" required />
            </div>
          </div>
          <div class="form-group row">
            <div class="col-sm-12">
              <label style="color: black">Contraseña</label>
              <input type="text" name="contraseña" id="contraseña" class="form-control form-control-user" value="<?php echo $contraseña; ?>" required />
            </div>
          </div>
          <div class="row justify-content-center">
            <input class="btn btn-primary mt-2" type="submit" name="button" id="button" value="ACTUALIZAR">
          </div>
        </form>

        <!-- firma Digital -->
        <form action="../Controller/controllerFirma.php" enctype="multipart/form-data" method="post">
          <b style="color: black">Firma Digital</b>
          <input type="file" name="firma" id="firma" max_file_uploads="1" required />
          <div class="row justify-content-center">
            <input class="btn btn-info mt-2" type="submit" name="button" id="button" value="SUBIR FIRMA">
          </div>
        </form>
        <img src="../Firmas/<?php echo $co ?>.png" alt="<?php echo $nombre ?>" width="200px" height="50px">
        <p>--------------------------------------</p>
        <p>Firma Actual<p>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
</div>
</div>
<button id="btn7" class="btn btn-info btn-lg btn-block">Progresivo</button>

<?php include FOLDER_TEMPLATE . "scripts.php"; ?>

<script type="text/javascript">
  //Progresivo
$("#btn7").click(function(){
    Swal.mixin({
      input: 'text', //puede ser text, number, email, password, textarea, select, radio
      confirmButtonText: 'Siguiente &rarr;',
      showCancelButton: true,
      progressSteps: ['1', '2', '3']
    }).queue([
      {
        title: 'Pregunta 1',
        text: '¿Color favorito?'
      },
      {
        title: 'Pregunta 2',
        text: '¿Animal favorito?'
      },
        {
        title: 'Pregunta 3',
        text: '¿País de origen?'
      }      
    ]).then((result) => {
      if (result.value) {
        Swal.fire({
          title: '¡Completado!',
          html:
            'Tus respuestas: <pre><code>' +
              JSON.stringify(result.value) +
            '</code></pre>',
          confirmButtonText: 'Ok'
        })
      }
    });    
});
</script>


<?php
extract($_REQUEST);
if (isset($_REQUEST["msj"])) {
  if ($_REQUEST["msj"] == "1") {
    echo "<script type='text/javascript'>
      Swal.fire({
      icon: 'success',
      title: 'Actualizado',
      text: 'Se actualizo correctamente',
    })</script>";
  } else {
    echo "<script type='text/javascript'>Swal.fire({
      icon: 'error',
      title: 'Error',
      text: 'No se pudo hacer la actualizacion, verifica los datos',
    })</script>";
  }
}
?>