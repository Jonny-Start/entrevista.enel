  <?php include"../config.php";
sessionValidate();
?>
  <!DOCTYPE html>
  <html xmlns="http://www.w3.org/1999/xhtml">
  <?php include FOLDER_TEMPLATE."head.php"; ?>
  <?php include FOLDER_TEMPLATE."sidebar.php"; ?>

  <body>

      <div class="container">
          <div class="card o-hidden border-0 shadow-lg my-5">
              <div class="card-body p-0 bg-gray-300">
                  <div class="row">
                      <div class="col-md-12">
                          <div class="col-md-8 mx-auto">
                              <div class="form-group">
                                  <br>
                                  <form id="form2" name="form1" method="post" action="eliminar.php" class="form-group">
                                      <table class="table table-striped table-bordered table-hover" width="42%"
                                          border="0" align="center">
                                          <tr>
                                              <td colspan="2" align="center"><b>ELIMINAR USUARIO</b></td>
                                          </tr>
                                          <tr>
                                              <td align="center"> <input type="submit"
                                                      class="btn btn-success " name="Consultar" value="CONSULTAR">
                                              </td>
                                              <td>
                                                  <?php 
                              $nombre="";
                              $apellidos="";
                              $co=0;
                              $Perfil="";
                              $correo_electronico="";
                              $contraseña="";
                               ?>
                                                  <input type="number" name="Buscar" id="Buscar"
                                                      class="form-control form-control-user mb-2 mr-5" size="40"
                                                      value="<?php echo $co;?>" required />

                                              </td>
                                              <?php 

                            if (isset($_POST["Consultar"])) {
                              $co=$_POST["Buscar"];
                              require_once "../Model/conexioon.php";

                              $sql = "SELECT * FROM usuario WHERE co = $co";

                              $rta=$objCnx->query($sql);

                              while ($datos=$rta->fetch_array()) {
                                $nombre= $datos['nombre'];
                                $apellidos= $datos['apellidos'];
                                $co= $datos['co'];
                                $Perfil= $datos['Perfil'];
                                $correo_electronico= $datos['correo_electronico'];
                                $contraseña= $datos['contraseña'];
                              }
                            }
                             ?>
                                          </tr>
                                          <tr align="center" bgcolor="#CFE0EE">
                        </form>

        <form id="form1" name="form1" method="post" action="../Controller/ValidarEliminarUsuario.php">
          <td> <input class="btn btn-danger mt-3" type="submit" name="button" id="button"
                    value="ELIMINAR">
          </td>
          <td colspan="2" align="center" > Identificación a Eliminar
              <input type="number" name="co" id="co" readonly="readonly" size="40"
                  value="<?php echo $co;?>" class="form-control form-control-user " required />
             
             
          </td>
      </tr>
  </table>
                                   
                                  </form>
                              </div>
                          </div>
                              <table class="table table-striped table-bordered table-hover" width="42%" border="0"
                                  align="center">
                                  <tr>
                                      <td colspan="2" align="center">
                                          <h1>Listado de Usuarios</h1>
                                      </td>
                                  </tr>
                              </table>
                              <table class="table table-striped table-bordered table-hover" width="70%" border="1"
                                  align="center">
                                  <tr align="center" bgcolor="#ECAB97">
                                      <td>Nombre</td>
                                      <td>Apellido</td>
                                      <td>Co</td>
                                      <td>Perfil</td>
                                      <td>Correo Electronico</td>
                                      <td>Contraseña</td>
                                  </tr>
                                  <?php 

                            if (isset($_POST["Consultar"])) {
                              $co=$_POST["Buscar"];
                              require_once "../Model/conexioon.php";

                              $sql = "SELECT * FROM usuario where co = $co";

                              $rta=$objCnx->query($sql);

                              while ($datos=$rta->fetch_array()) {
                        ?>
                                  <tr>
                                      <td><?php echo $datos['nombre'];?></td>
                                      <td><?php echo $datos['apellidos'];?></td>
                                      <td><?php echo $datos['co'];?></td>
                                      <td><?php echo $datos['Perfil'];?></td>
                                      <td><?php echo $datos['correo_electronico'];?></td>
                                      <td><?php echo $datos['contraseña'];?></td>
                                  </tr>
                                  <?php
                              }
                            }
                            ?>
<<<<<<< HEAD
                            <?php
                            
                            extract($_REQUEST);
            
                                  if(isset($_REQUEST["msj"])){
                                    if ($_REQUEST["msj"]=="1"){
                                    ?>
                                        <script>
                                        alert("SE ELIMINO CORRECTAMENTE ");
                                        </script>
                                    <?php
                                    }else
                                    {
                                    ?>
                                        <script>
                                        alert("NO SE PUDO ELIMINAR EL USUARIO, VERIFICA LOS DATOS");
                                        </script>
                                    <?php
                                    }
                                  }
                            ?>

=======
>>>>>>> 62337f6660364554e7a760dc1e4f5fdc8499f069
                          </form>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      </div>
      <?php include FOLDER_TEMPLATE. "footer.php"; ?>
      <?php include FOLDER_TEMPLATE. "scripts.php"; ?>
  </body>

  </html>