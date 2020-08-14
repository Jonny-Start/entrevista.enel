<?php include "../config.php";
sessionValidate();
?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<?php include FOLDER_TEMPLATE . "head.php"; ?>
<?php include FOLDER_TEMPLATE . "sidebar.php"; ?>


<body>
    <div class="container">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0 bg-gray-300">
                <!-- Nested Row within Card Body -->
                <div class="form-row">
                    <!-- <div class="col-lg-5 d-none d-lg-block bg-register-image"></div> -->
                    <div class="col-lg-12">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h1 text-gray-1000 mb-5">Crea una cuenta!</h1>
                            </div>
                            <form class="user" id="form1" name="form1" method="post" action="../Controller/ValidarInsertarUsuario.php">
                                <div class="form-group row">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                        <input name="nombre" type="text" class="form-control" id="nombre" placeholder="Nombre(s)" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <input type="text" name="apellidos" class="form-control" id="apellidos" placeholder="Apellido(s)" required>
                                    </div>
                                </div>
                                    <div class="form-group row">
                                        <div class="col-lg-12" id="divg">
                                            <input type="number" name="co" class="form-control" id="co" placeholder="CO" required>
                                        </div>
                                        <div class="form-group row" id="boton" style="display: none;">
                                            <div class="col-sm-12 mb-3 mb-sm-0">
                                                <input type="button" class="btn btn-primary" id="validarI" name="validarI" value="Verificar">
                                            </div>
                                        </div>
                                    </div>
                                <div class="form-group row">
                                    <div class="col-lg-12">
                                        <select id="Perfil" name="Perfil" class="form-control" required>
                                            <option selected>Perfil</option>
                                            <option value="1">Administrador</option>
                                            <option value="2">Psicologa</option>
                                            <option value="3">Jefe</option>
                                            <option value="4">Business Partner</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-12">
                                        <input type="email" name="correo_electronico" class="form-control" id="correo_electronico" placeholder="Correo electronico de Enel" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-12">
                                        <div class="input-group">
                                            <input type="password" class="form-control" id="contraseña" name="contraseña" placeholder="contraseña" required>
                                            <div class="input-group-append">
                                                <button id="show_password" class="btn btn-primary" type="button" onclick="mostrarPassword()"> <span class="fa fa-eye-slash icon"></span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <input type="submit" class="btn btn-primary btn-user btn-block border-bottom-success " id="button" name="button" value="Registrar Cuenta">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<?php include FOLDER_TEMPLATE . "scripts.php"; ?>
<?php
extract($_REQUEST);
if (isset($_REQUEST["msj"])) {
    if ($_REQUEST["msj"] == "1") {
        echo "<script type='text/javascript'>
        Swal.fire({
        icon: 'success',
        title: 'Agregado',
        text: 'Se inserto correctamente el usuario',
        })</script>";
    } else {
        echo "<script type='text/javascript'>
        Swal.fire({
        icon: 'error',
        title: 'Error',
        text: 'No se pudo hacer el registro, verifica los datos',
        })</script>";
    }
}
?>
<script src="../js/funcionesI.js"></script>
</body>

</html>