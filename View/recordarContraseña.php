<?php include "../config.php";
//sessionValidate();
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<?php include FOLDER_TEMPLATE . "head.php"; ?>
<link href="<?= URL_CSS ?>https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">


<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">
        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <img src="../img/enel.png" class="col-lg-12 d-none d-lg-block" alt="Imagen de Psicologia">
              <div class="col-lg-6 d-none d-lg-block bg-password"></div>
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-2">¿OLVIDASTE TU CONTRASEÑA?</h1>
                    <p class="mb-4">Te entendemos, suele pasar. Simplemente ingresa tu dirección de correo electrónico a continuación y te enviaremos un enlace para restablecer tu contraseña.</p>
                  </div>

                  <form class="user" class="form-horizontal" action="../Controller/controllerRecordarContraseña.php" method="POST">
                    <div class="form-group">
                      <input type="email" class="form-control form-control-user" id="email" name="email" aria-describedby="emailHelp" placeholder="Ingresa tu correo electronico..." required>
                    </div>
                    <input type="submit" value="Restablecer Contraseña" class="btn btn-primary btn-user btn-block ">
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" id="restablecer-correo" name="restablecer-correo" href="contactame.php">Solicitar Cuenta</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="../index.php">Ya tienes una cuenta? Login!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

</body>

<?php include FOLDER_TEMPLATE . "scripts.php"; ?>

</html>