<?php include "../config.php";
sessionValidate();
if (isset($_SESSION["rol"])) {
    switch ($_SESSION['rol']) {
        case 1:
            include "../template/sidebar.php";
            break;
        case 2:
            include '../template/sidebar-Psicologa.php';
            break;
        case 3:
            header('location: ../index.php');
            break;
        case 4:
            header('location: ../index.php');
            break;
    }
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<?php include FOLDER_TEMPLATE . "head.php"; ?>

<body>

    <div class="container">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0 bg-gray-300">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-8 mx-auto">
                            <div class="form-group">
                                <br>
                                <form id="form2" name="form2" method="post" action="enviarEntrevistajefe.php" class="form-group">
                                    <table class="table table-striped table-bordered table-hover" width="42%" border="0" align="center">
                                        <tr>
                                            <td colspan="2" align="center"><b>Buscar Entrevista</b></td>
                                        </tr>
                                        <tr>
                                            <td align="center"> <input type="submit" class="btn btn-success" name="Consultar" value="CONSULTAR">
                                            </td>
                                            <td>
                                                <input type="number" name="Buscar" id="Buscar" class="form-control form-control-user mb-2 mr-5" size="40" value="<?php echo $cc; ?>" required />
                                            </td>
                                            <?php
                                            if (isset($_POST["Consultar"])) {
                                                $cc = $_POST["Buscar"];
                                            }
                                            ?>
                                        </tr>
                                        <tr align="center" bgcolor="#CFE0EE">
                                </form>

                                    <td colspan="2" align="center"> Identificación
                                        <input type="number" name="cc" id="cc" readonly="readonly" size="40" value="<?php echo $cc; ?>" class="form-control form-control-user " required />
                                        <div class="form-group row">
                                    </td>
                                    </tr>
                                    </table>
                            </div>
                        </div>
                        <table class="table table-striped table-bordered table-hover" width="42%" border="0" align="center">
                            <tr>
                                <td colspan="2" align="center">
                                    <h1>Informacion del Candidato</h1>
                                </td>
                            </tr>
                        </table>
                        <table class="table table-striped table-bordered table-hover" width="70%" border="1" align="center">
                            <tr align="center" bgcolor="#ECAB97">
                                <td>Nombre</td>
                                <td>Cedula</td>
                                <td>Telefono</td>
                                <td>Proceso</td>
                                <td>Jefe a enviar</td>
                                <td>Enviar entrevista</td>
                            </tr>
                            <?php
                            require_once "../Model/conexioon.php";
                            if (isset($_POST["Consultar"])) {
                                $cc = $_POST["Buscar"];
                                $sql = "SELECT * FROM entrevistapsicologica where cc = $cc";
                                $rta = $objCnx->query($sql);
                                while ($datos = $rta->fetch_array()) {
                            ?>
                                    <tr>
                                        <td><?php echo $datos['nombre']; ?></td>
                                        <td><?php echo $datos['cc']; ?></td>
                                        <td><?php echo $datos['telefono']; ?></td>
                                        <td><?php echo $datos['cargoAspira']; ?></td>
                                        <td><form id="form1" name="form1" method="POST" action="../Controller/validarEnviarJefe.php?cc=<?php echo $datos['cc']; ?>&nombre=<?php echo $datos['nombre']; ?>&proceso=<?php echo $datos['cargoAspira']; ?>">
                                            <select id="jefe" name="jefe" class="form-control" required>
                                                <option selected>¿A cual Jefe?</option>
                                                <?php
                                                if (isset($_POST["Consultar"])) {
                                                    $mysql = "SELECT * FROM usuario where Perfil = 3";
                                                    $resultado = $objCnx->query($mysql);
                                                    while ($dt = $resultado->fetch_array()) {
                                                ?>
                                                        <option id="jefe" name="jefe" value="<?php echo $dt['correo_electronico']; ?>"><?php echo $dt['nombre']; echo $dt['apellidos']; ?></option>
                                                <?php
                                                    }
                                                }
                                                ?>
                                            </select></td>
                                        <td style="text-align: center;"><input class="btn btn-info" type="submit" value="Enviar Entrevista"></a></td>
                                    </tr>
                            <?php
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
    <?php include FOLDER_TEMPLATE . "footer.php"; ?>
    <?php include FOLDER_TEMPLATE . "scripts.php"; ?>
    <script type="text/javascript" src="../vendor/funciones.js"></script>
</body>

</html>