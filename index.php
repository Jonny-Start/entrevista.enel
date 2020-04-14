<?php include"config.php"?>
<?php //include FOLDER_TEMPLATE."head.php"; ?>



<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Entrevistas</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-15 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <!-- <div class="col-lg-6 d-none d-lg-block" ></div>  bg-login-image -->
              <img src="img/Psicologia.jpg" class="col-lg-6 d-none d-lg-block" alt="" height="" width="">
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h1 text-gray-1000 mb-4">Bienvenido</h1>
                  </div>  
                  <form class="user" method="POST" action="<?=URL_PROY?>Model/sesiones.php">
                    <div class="form-group">
                      <input type="email" name="usuario" class="form-control form-control-user" id="usuario" aria-describedby="emailHelp" placeholder="EMAIL ENEL" required >
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" class="form-control form-control-user" id="password" placeholder="PASSWORD" required>
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Recuerdame</label>
                      </div>
                    </div>

                    <div class="form-group">               			
                    <button type="submit" name="btningresar" class="btn btn-primary btn-user btn-block btn-success">   
                    <i class="fas fa-check"></i>
                    Ingresar</button>              				
                    </div>

                    <hr>
                    <a href="View/recordarContraseña.php" class="btn btn-primary btn-user btn-block btn-danger"> <!-- btn-google -->
                      <i class="fas fa-exclamation-triangle"></i> Olvide mi contraseña
                    </a>
                   <a href="#" class="btn btn-primary btn-user btn-block btn-primary " >   <!-- btn-facebook -->
                      <i class="fas fa-info-circle"></i> Inscripcion
                    </a>
                  </form>
                  <hr>
                  <!-- <div class="text-center">
                    <a class="small" href="forgot-password.html">Forgot Password?</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="register.html">Create an Account!</a>
                  </div> -->
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>
</body>
</html>