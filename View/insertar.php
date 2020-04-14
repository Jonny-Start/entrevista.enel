<?php include"../config.php";
sessionValidate();
?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<?php include FOLDER_TEMPLATE. "head.php"; ?>
<?php include FOLDER_TEMPLATE."sidebar.php"; ?>


<body>
  <div class="container">
    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0 bg-gray-300"> 
        <!-- Nested Row within Card Body -->
        <div class="row">
          <!-- <div class="col-lg-5 d-none d-lg-block bg-register-image"></div> -->
          <div class="col-lg-12">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h1 text-gray-1000 mb-5">Crea una cuenta!</h1>
              </div>
              <form class="user" id="form1" name= "form1" method="post" action="../Controller/ValidarInsertarUsuario.php">
                <div class="form-group row">
                  <div class="col-sm-12 mb-3 mb-sm-0">
                    <input name="nombre" type="text" class="form-control form-control-user" id="nombre" placeholder="Nombre(s)" required>
                 </div>
                 </div>
                 <div class="form-group row">
                  <div class="col-sm-12">
                    <input type="text" name="apellidos" class="form-control form-control-user" id="apellidos" placeholder="Apellido(s)" required>
                </div>
                </div>
                <div class="form-group row">
                <div class="col-lg-12">
                  <input type="text" name="co" class="form-control form-control-user" id="co" placeholder="CO" required>
                </div>
                <!-- <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                  </div> -->
              </div>
              <div class="form-group row">
               <div class="col-lg-12">
               <input type="text" name="Perfil" class="form-control form-control-user" id="Perfil" placeholder="Perfil" required>
                </div>
                </div>
                <div class="form-group row">
                <div class="col-lg-12">
                  <input type="email" name="correo_electronico" class="form-control form-control-user" id="correo_electronico" placeholder="Correo electronico de Enel" required>
                </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-12">
                    <input type="password" class="form-control form-control-user" id="contraseña" name="contraseña" placeholder="contraseña" required>
                  </div>
                </div>
                <input type="submit" class="btn btn-primary btn-user btn-block border-bottom-success " id="button" name="button" value="Registrar Cuenta">
                  
                
                <!-- <hr>
                <a href="index.html" class="btn btn-google btn-user btn-block">
                  <i class="fab fa-google fa-fw"></i> Register with Google
                </a>
                <a href="index.html" class="btn btn-facebook btn-user btn-block">
                  <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                </a>
              </form> -->
              <hr />
                     <center> <?php 
                    if (isset($_GET["msj"])) {

                        if ($_GET["msj"]=="1") {
                            echo "<p stile='color:green'>SE INSERTO CORRECTAMENTE</p>";

                        }else if ($_GET["msj"]=="2")
                        {
                            echo "<p style='color:red'> NO SE PUDO HACER EL REGISTRO</p>";
                        }
                    }
                    ?></center>
              <!-- <div class="text-center">
                <a class="small" href="forgot-password.html">Forgot Password?</a>
              </div> -->
              <!-- <div class="text-center">
                <a class="small" href="login.html">Already have an account? Login!</a>
              </div> -->
            </div>
          </div>
          
        </div>
        <center><img src="../img/enel.png" alt="Logo De Enel" width="40%"></center>
      </div>
      
    </div>

  </div>
 

</body>
           









<!-- <a class="nav-link dropdown-toggle"  id="Perfil" name="Perfil" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Perfil
              </a>
              <div class="dropdown-menu" aria-labelledby="Perfil">
                <a class="dropdown-item" value="Business Partner">Business Partner</a>
                <a class="dropdown-item" value="Psicologa">Psicologa</a>
                <a class="dropdown-item" value="Jefe">Jefe</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" value="Administrador">Administrador</a>
              </div>
                </div> -->










        <?php include FOLDER_TEMPLATE. "scripts.php"; ?>
</body>
</html>

