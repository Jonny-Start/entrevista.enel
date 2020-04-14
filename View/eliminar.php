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
                    <div class="row" align="center"> 
                    <div class="form-group" ">
                      <br><br>
                      <form id="form2" name="form1" method="post" action="eliminar.php" class="form-group">
                        <table class="table table-striped table-bordered table-hover" width="42%" border="0" align="center">
                          <tr>
                            <td colspan="2" align="center">ELIMINAR USUARIO</td>
                          </tr>
                          <tr>
                            <td width="28%" align="right" bgcolor="#ffae00">BUSCAR</td>
                            <td><label for="co"></label>
                              <?php 
                              $nombre="";
                              $apellidos="";
                              $co=0;
                              $Perfil="";
                              $correo_electronico="";
                              $contraseña="";
                               ?>
                              <input type="text" name="Buscar" id="Buscar" size="40" value="<?php echo $co;?>" required/>
                              <input type="submit" class="btn btn-warning" name="Consultar" value="Consultar">
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
                        </table>
                      </form>
                      <form id="form1" name="form1" method="post" action="../Controller/ValidarEliminarEmpleado.php">
                        <h1>Listado de Usuarios</h1>
                      <table class="table table-striped table-bordered table-hover" width="70%" border="1" align="center">
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
                      <tr align="center" bgcolor="#CFE0EE">
                        <td>Identificacion a Eliminar</td>
                          <td colspan="2" align="center" bgcolor="#FFFFFF">
                            <input type="number" name="co" id="co" readonly="readonly" size="40" value="<?php echo $co;?>" required/>
                            <input  class="btn btn-warning" type="submit" name="button" id="button" value="ELIMINAR">
                          </td>
                      </tr>
                      </table>
                      <?php 

                      extract($_REQUEST);

                      if(isset($_REQUEST["msj"])){
                        if ($_REQUEST["msj"]=="1"){
                          echo "<p> se elimino correctamente el empleado<p>";
                        }else
                        {
                          echo "<p> no se elimino el empleado<p>";
                        }
                      }
                       ?>
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