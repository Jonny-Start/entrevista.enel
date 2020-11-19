<?php include "../config.php";
sessionValidate();
if (isset($_SESSION["rol"])) {
    switch ($_SESSION['rol']) {
        case 1:
            header('location: 401.php');
            break;
        case 2:
            header('location: 401.php');
            break;
        case 3:
            header('location: 401.php');
            break;
        case 4:
            include "../template/sidebar-businessPartner.php";
            break;
    }
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<?php include FOLDER_TEMPLATE . "head.php"; ?>

<body id="page-top">
    <div class="container">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-3 bg-gray-300">
                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3" style="text-align: center;">
                        <h2 class="m-0 font-weight-bold text">Personas Entrevistadas</h2>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" width="100%" cellspacing="10">
                                <thead>
                                    <tr>
                                        <th>Nombre </th>
                                        <th>Cedula de Ciudadania</th>
                                        <th>Cargo al que Aspira</th>
                                        <th>Reporte</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Nombre </th>
                                        <th>Cedula de Ciudadania</th>
                                        <th>Cargo al que Aspira</th>
                                        <th>Reporte</th>
                                    </tr>
                                </tfoot>
                                <?php
                                require_once "../Model/conexioon.php";
                                $co =  $_SESSION['co'];
                                $sql = "SELECT * FROM `entrevistabp` where terminada = 'True' and co = $co  ";
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
                                    </style>
                                    <tbody>
                                        <tr>
                                            <td><?php echo $datos['nombreCandidato'] ?></td>
                                            <td><?php echo $datos['idBP'] ?></td>
                                            <td><?php echo $datos['cargoAspira'] ?></td>
                                            <td><a href="../Reportes/pdf-EntrevistaBP.php?cc=<?php echo $datos['idBP'] ?>" target="_blank"><img src="../img/pdf.png" alt="Sacar Reporte" width="30" height="40" style="padding: 0px;"></a></td>
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
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

    </div>
    <!-- End of Content Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <?php include FOLDER_TEMPLATE . "scripts.php"; ?>
</body>

</html>