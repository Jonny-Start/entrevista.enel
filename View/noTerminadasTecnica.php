<?php include "../config.php";
sessionValidate();
if (isset($_SESSION["rol"])) {
    switch ($_SESSION['rol']) {
        case 1:
            header("location: 401.php");
            break;
        case 2:
            header("location: 401.php");
            break;
        case 3:
            include "../template/sidebar-Jefe.php";
            break;
        case 4:
            header('location: 401.php');
            break;
    }
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<?php include FOLDER_TEMPLATE . "head.php"; ?>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

<body id="page-top">
    <div class="container">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-3 bg-gray-300">
                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3" style="text-align: center;">
                        <h2 class="m-0 font-weight-bold text">Asignar entrevista para completar concepto</h2>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" width="100%" cellspacing="10">
                                <thead style="background-color: gray; color: white; text-align: center;">
                                    <tr>
                                        <th>Proceso</th>
                                        <th>Fecha de Entrevista</th>
                                        <th>Nombre candidato</th>
                                        <th>Cargo al que Aspira</th>
                                        <th>Jefe a asignar</th>
                                    </tr>
                                </thead>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        $co = $_SESSION['co'];
        require_once "../Model/conexioon.php";
        $sql = "SELECT * FROM entrevistatecnica Where co = $co and terminada = 'False'";
        $rta = $objCnx->query($sql);
        while ($datos = $rta->fetch_array()) {
        ?>
            <style>
                i {
                    margin-top: 3px;
                }

                td {
                    width: auto;
                    height: auto;
                }

                .centrado {
                    text-align: center;
                }

                span {
                    padding: 0px;
                }
            </style>

            <tbody>
                <tr>
                    <td><?php echo $datos['proceso'] ?></td>
                    <td><?php echo $datos['fechaEntrevista'] ?></td>
                    <td><?php echo $datos['nombreCandidato'] ?></td>
                    <td><?php echo $datos['cargoAspira'] ?></td>
                    <td style="text-align: center;">
                    <form class="user" action="../Controller/controllerAsignarSegundoJefe.php" method="post">
                        <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <button class="input-group-text"><i class="fas fa-user-plus"></i></button>
                                </div>
                                <input type="number" class="form-control" name="co" title="CO / CC" id="co" placeholder="CO / CC del jefe" required>
                                <input type="hidden" id="cc" name="cc" value="<?php echo $datos['idTec'] ?>">
                        </div>
                        </form>
                    </td>
                </tr>
            <?php
        }
            ?>
            </tbody>
            </table>
    </div>

    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <?php include FOLDER_TEMPLATE . "scripts.php"; ?>
    <script type="text/javascript" src="../vendor/funciones.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <?php
    require_once "../Model/conexioon.php";
    $sql = "SELECT * FROM usuario where Perfil = '3' ";
    $rta = $objCnx->query($sql);
    $array = array();
    while ($datos = $rta->fetch_array()) {
        $mail = utf8_decode($datos['correo_electronico']);
        array_push($array, $mail); // le mando los datos al array 
    }
    ?>

    <script type="text/javascript">
        $(document).ready(function() {
            var item = <?= json_encode($array) ?>;
            $('#correo').autocomplete({
                source: item
            });
        });
    </script>

    <?php
    if (isset($_GET["msj"])) {
        if ($_GET["msj"] == "1") {
            echo " <script type='text/javascript'>
          Swal.fire({
              icon: 'success',
              title: 'Completada!',
              text: 'se asigno la entrevista tecnica al segundo Jefe',
          })
      </script>";
        } else if ($_GET["msj"] == "2") {
            echo "<script type='text/javascript'>
          Swal.fire({
              icon: 'error',
              title: '¡ERROR!',
              text: 'No se pudo asignar la entrevista, porfavor comunicate con el administrador del aplicativo',
          })
      </script>";
        }
    }
    ?>
</body>

</html>