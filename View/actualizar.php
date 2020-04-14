<?php include"../config.php";  // esto es para validar una sesion que se haga correctamente //
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

        <!-- /. NAV TOP  -->
      
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                    <div class="row" align="center"> 
                    <div class="form-group">
                      <br><br>
                      <form id="form2" name="form1" method="post" action="actualizar.php" class="form-group">
                        <table class="table table-striped table-bordered table-hover" width="42%" border="0" align="center">
                          <tr>
                            <td colspan="2" align="center">ACTUALIZAR EMPLEADO</td>
                          </tr>
                          <tr>
                            <td width="28%" align="right" bgcolor=" #ffae00">BUSCAR</td>
                            <td><label for="co"></label>
                              <?php $co=0;
                              $nombre="";
                              $apellidos="";
                              $Perfil="";
                              $correo_electronico="";
                              $contraseña="";
                              ?>
                              <input type="text" name="Buscar" id="Buscar" class="form-control" size="40" value="<?php echo $co;?>" required/>
                              <input type="submit" class="btn btn-warning" class="form-control"  name="Consultar" value="Consultar">

                            </td>
                            <?php 

                            $co="";
                            if (isset($_POST["Consultar"])) {
                              $co=$_POST["Buscar"];
                              require_once "../Model/conexioon.php";

                              $sql = "SELECT * FROM usuario WHERE co = $co";

                              $rta=$objCnx->query($sql);

                              while ($datos=$rta->fetch_array()) {
                                $nombre= $datos['nombre'];
                                $apellidos= $datos['apellidos'];
                                $co=$datos['co'];
                                $Perfil= $datos['Perfil'];
                                $correo_electronico= $datos['correo_electronico'];
                                $contraseña= $datos['contraseña'];                            
                              }
                            }
                             ?>
                          </tr>
                        </table>
                      </form>
                      <form id="form1" name="form1" method="post" action="../Controller/ValidarActualizarUsuario.php">
                        <table class="table table-striped table-bordered table-hover" width="42%" align="center">
                        <tr>
                          <td width="28%" align="right" bgcolor="#ffae00">Nombre</td>
                          <td width="72%"> <label for="co"></label>
                          <input type="text" name="nombre" id="nombre" value="<?php echo $nombre;?>" size="40" required/></td>
                        </tr>
                        <tr>
                          <td  align="right" bgcolor="#ffae00">Apellido</td>
                          <td><input type="text" name="apellidos" id="apellidos" value="<?php echo $apellidos;?>" size="40" required/></td>
                        </tr>
                        <tr>
                          <td height="25" align="right" bgcolor="#ffae00">CO</td>
                          <td><input type="text" name="co" id="co" value="<?php echo $co;?>" size="40" required/></td>
                        </tr>
                        <tr>
                          <td height="25" align="right" bgcolor="#ffae00">Perfil</td>
                          <td><input type="text" name="Perfil" id="Perfil" value="<?php echo $Perfil;?>" size="40" required/></td>
                        </tr>
                        <tr>
                          <td  align="right" bgcolor="#ffae00">Correo Electronico</td>
                          <td><input type="email" name="correo_electronico" id="correo_electronico" value="<?php echo $correo_electronico;?>" size="40" required/></td>
                        </tr>
                        <tr>
                          <td  align="right" bgcolor="#ffae00">Contraseña</td>
                          <td><input type="text" name="contraseña" id="contraseña" value="<?php echo $contraseña;?>" style="width: 270px"required/></td>
                        </tr>
                        <tr>
                          <td colspan="2" align="center" bgcolor="#fffff"><input  class="btn btn-warning" type="submit" name="button" id="button" value="ACTUALIZAR"></td>
                        </tr>
                        </table>
                      </form>
                      <h1>Listado de Usuarios</h1>
                      <table class="table table-striped table-bordered table-hover" width="70%" border="1" align="center">
                      <tr align="center" bgcolor="#ECAB97">
                          <td>Nombre</td>
                          <td>Apellido</td>
                          <td>CO</td>
                          <td>Perfil</td>
                          <td>Correo Electronico</td>
                          <td>Contraseña</td>
                      </tr>
                      <?php 
                            $co="";
                            if (isset($_POST["Consultar"])) {
                              $co=$_POST["Buscar"];
                              require_once "../Model/conexioon.php";

                              $sql = "SELECT * FROM usuario where co = $co";

                              $rta=$objCnx->query($sql);

                              while ($datos=$rta->fetch_array()) {
                        ?>
                              <tr>
                                <td><?php echo $datos['nombre'];?> </td>
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
                      </table>
                      <?php 

                      extract($_REQUEST);

                      if(isset($_REQUEST["msj"])){
                        if ($_REQUEST["msj"]=="1"){
                          echo "<p> se actualizo correctamente el empleado<p>";
                        }else
                        {
                          echo "<p> no se actualizo el empleado<p>";
                        }
                      }
                       ?>
</div>
</div>          
    </div>
            </div>
        </div> 
<?php include FOLDER_TEMPLATE. "footer.php"; ?>
<?php include FOLDER_TEMPLATE. "scripts.php"; ?>  
</body>
</html>