<?php include"../config.php";
sessionValidate();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<?php include FOLDER_TEMPLATE."head.php"; ?>
<?php include FOLDER_TEMPLATE."sidebar.php"; ?>




<body>
    <div class="container col-md-10 mx-auto my-5">
        <div class="bg-gray-200 page-wrapper">
            <table class="table table-striped table-bordered table-hover" width="42%" border="0" align="center">
                <tr>
                    <td colspan="2" align="center">
                        <h2><b> Lista de Usuarios</b></h2>
                    </td>
                </tr>
            </table>

            <div class="card-body ">
                <div class="table-responsive  ">
                    <table class="table table-bordered table table-striped table-bordered table-hover mb-12" width="100%"
                        cellspacing="10">
                        <thead>
                            <tr align="center" class="bg-secondary text-white">
                                <th>Nombre </th>
                                <th>Apellido</th>
                                <th>co</th>
                                <th>Perfil</th>
                                <th>Correo Electrónico</th>
                                <th>Contraseña</th>
                            </tr>
                        </thead>
                        <?php 
                    require_once "../Model/conexioon.php";
                    $sql= "SELECT * FROM usuario";

                    $rta=$objCnx->query($sql);

                    while ($datos=$rta->fetch_array()){
                     
                     ?>
                        <tbody>
                            <tr>
                                <td><?php echo $datos['nombre']?></td>
                                <td><?php echo $datos['apellidos']?></td>
                                <td><?php echo $datos['co']?></td>
                                <td><?php echo $datos['Perfil']?></td>
                                <td><?php echo $datos['correo_electronico']?></td>
                                <td><?php echo $datos['contraseña']?></td>
                            </tr>
                            <?php  
                    }
                   ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    </div>




    <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright &copy; Entrevistas Enel 2020</span>
            </div>
        </div>
    </footer>

    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <?php include FOLDER_TEMPLATE. "scripts.php"; ?>
</body>

</html>