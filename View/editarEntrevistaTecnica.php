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
            break;
        case 4:
            header('location: 401.php');
            break;
    }
}

require_once "../Model/conexioon.php";
$cc = $_GET['cc'];
$co = $_SESSION['co'];
$query = " SELECT * FROM entrevistatecnica where idTec = $cc and terminada = 'True' and co = $co ";
$rta = $objCnx->query($query);
?>
<link href="../vendor/fontawesome-free/css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="../css/style.css" rel="stylesheet" type="text/css">
<div class="container">
    <div class="text-center">
        <h1 class="jumbotron">Entrevista Técnica
            <p><br>¡Recuerde la importancia de registrar la totalidad de su concepto!</p>
        </h1>
    </div>
    <div class="form-group row">
        <div class="col-sm-12">
            <button type="button" onclick="colorearI()" id="I" class="btn">Interno</button>
            <button type="button" onclick="colorearE()" class="btn" id="E">Externo</button>
        </div>
    </div>

    <br><br>
    <form id="regiration_form" class="user" action="../Controller/controllerEditarTecnica.php" method="post">
        <?php
        require_once "../Model/conexioon.php";
        $sql = "SELECT * FROM entrevistatecnica where idTec = $cc and terminada = 'True' and co = $co ";
        $rta = $objCnx->query($sql);
        while ($datos = $rta->fetch_array()) {
        ?>
            <div class="form-group row">
                <div class="col-sm-6">
                    <label for="psicologa">Entrevistador(a)</label>
                    <input type="text" class="form-control form-control-user" id="entrevistador" name="entrevistador" value="<?php echo $datos['entrevistador'] ?>" required>
                </div>
                <div class="col-sm-6">
                    <label for="fechaEntrevista">Fecha de la Entrevista</label>
                    <input type="text" class="form-control form-control-user" id="fechaEntrevista" name="fechaEntrevista" value="<?php echo $datos['fechaEntrevista'] ?>" required>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-6">
                    <label for="cargo">Cargo</label>
                    <input type="text" class="form-control form-control-user" id="cargoEntrevistador" name="cargoEntrevistador" placeholder="CARGO" value="<?php echo $datos['cargoEntrevistador'] ?>" readonly required>
                </div>
                <div class="col-sm-6">
                    <label for="dependencia">Dependencia</label>
                    <input type="text" class="form-control form-control-user" id="dependencia" name="dependencia" value="<?php echo $datos['dependencia'] ?>" placeholder="DEPENDENCIA" required>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-4">
                    <label for="nombre">Nombre Completo</label>
                    <input type="Text" class="form-control form-control-user" id="nombreCandidato" name="nombreCandidato" value="<?php echo $datos['nombreCandidato'] ?>" placeholder="NOMBRE COMPLETO" required>
                </div>
                <div class="col-sm-4">
                    <label for="nombre">Cedula del candidato</label>
                    <input type="number" class="form-control form-control-user" id="idTec" name="idTec" value="<?php echo $datos['idTec'] ?>" placeholder="Cedula" readonly>
                </div>
                <div class="col-sm-4">
                    <label for="nombre">Cargo Vacante</label>
                    <input type="Text" class="form-control form-control-user" id="cargoAspira" name="cargoAspira" value="<?php echo $datos['cargoAspira'] ?>" placeholder="Cargo al que Aspira" required>
                </div>
            </div>
            <br>
            <br>
            <h3><b>¿El candidato/ta cuenta con las competencias técnicas para desempeñar las responsabilidades del cargo? SI/NO Explique la respuesta elegida: </b></h3>
            <div class="form-group row">
                <div class="col-sm-12">
                    <select class="form-control" id="cuentaCompetenciaSN" name="cuentaCompetenciaSN" required>
                        <option selected><?php echo $datos['cuentaCompetenciaSN'] ?></option>
                        <option value="SI">SI</option>
                        <option value="NO">NO</option>
                    </select>
                    <textarea class="form-control" name="cuentaCompetencia" id="cuentaCompetencia" placeholder="..."><?php echo $datos['cuentaCompetencia'] ?></textarea>
                </div>
            </div>

            <h3><b>De las responsabilidades definidas para el cargo, en cuales de ellas identifica durante la entrevista que el candidato/ta tiene experiencia previa.</b></h3>
            <textarea class="form-control" name="experienciaPrevia" id="experienciaPrevia" placeholder="..."><?php echo $datos['experienciaPrevia'] ?></textarea>
            <br><br>
            <h3><b>Cuenta con conociemientos digitales o de metodologias agile que se requieren para el cargo</b></h3>
            <textarea class="form-control" name="cuentaCono" id="cuentaCono" placeholder="..."><?php echo $datos['cuentaCono'] ?></textarea>
            <br><br>
            <h3><b>¿El candidato/ta cuenta con el conocimiento y la experiencia para desempeñar responsabilidades asociadas a los Sistemas de Gestión Integral (calidad, ambiental y SISO) en el cargo? SI/NO Explique la respuesta elegida: </b></h3>
            <div class="form-group row">
                <div class="col-sm-12">
                    <select class="form-control" id="calidadSN" name="calidadSN"  required>
                        <option selected><?php echo $datos['calidadSN'] ?></option>
                        <option value="SI">SI</option>
                        <option value="NO">NO</option>
                    </select>
                    <textarea class="form-control" name="calidad" id="calidad" placeholder="..."><?php echo $datos['calidad'] ?></textarea>
                </div>
            </div>
            <br>
            <div id="retroAlimentacion" hidden>
                <h3><b>Elementos relevantes para aportar en la Retroalimentación </b></h3>
                <textarea class="form-control" name="retroalimentacion" id="retroalimentacion" placeholder="..."><?php echo $datos['retroalimentacion'] ?></textarea>
                <br><br>
            </div>
            <h3><b>Concepto Segundo Evaluador</b></h3>
            <textarea class="form-control" name="conceptoSegundo" id="conceptoSegundo" placeholder="..."><?php echo $datos['conceptoSegundo'] ?></textarea>
            <br><br><br>
            <script type="text/javascript">
                <?php function chulo($d, $id)
                {
                    if ($d == 'SI' || $d == 'si' || $d == 'on') {
                        echo "<script type='text/javascript'>
                    console.log('$d');
                    var dato = document.querySelector('#$id');
                    console.log(dato);
                    dato.setAttribute('checked','');
                    </script>";
                    }
                }
                ?>
            </script>
            <div class="container">
                <div class="contenedor1">
                    <div class="casilla">
                        <div class="form-group row">
                            <div class="form-check form-check-inline">
                                <input type="checkbox" class="form-check-input" id="adecuado" value="si" name="adecuado" ><?php chulo($datos['adecuado'], 'adecuado') ?>
                                <label class="form-check-label minimal">Adecuado(a)</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input derecha" type="checkbox" value="si" id="noA" name="noA" ><?php chulo($datos['noA'], 'noA') ?>
                                <label class="form-check-label">
                                    No Adecuado(a)
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" value="si" id="primera"  name="primera"><?php chulo($datos['primera'], 'primera') ?>
                                <label class="form-check-label">
                                    Primera Opción
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="checkbox" class="form-check-input derecha" id="parcialmente"  value="si" name="parcialmente"><?php chulo($datos['parcialmente'], 'parcialmente') ?>
                                <label class="form-check-label minimal"> Parcialmente
                                    adecuado(a)</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" value="si" id="segunda"  name="segunda"><?php chulo($datos['segunda'], 'segunda') ?>
                                <label class="form-check-label">
                                    Segunda Opción
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input " type="checkbox" value="si" id="adecuadoP"  name="adecuadoP"> <?php chulo($datos['adecuadoP'], 'adecuadoP') ?>
                                <label class="form-check-label minimal">
                                    Adecuado(a) para otro cargo
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div><br><br>

            <div style="text-align: right">
                <input type="hidden" id="proceso" name="proceso" value="<?php echo $datos['proceso'] ?>">
                <input type="submit" name="btn" class="submit btn btn-success" value="Registrar" id="btn" />
                <a href="principal.php" class="btn btn-danger btn-sm" onclick="seguro()">Salir</a>
            </div>
    </form>
    <?php include FOLDER_TEMPLATE . "scripts.php"; ?>
    <script type="text/javaScript" src="../vendor/.js"></script>
    <script type="text/javascript" src="../js/funcionesAyP.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script type="text/javascript">
        var campo = $('#retroAlimentacion');
        var proceso = $('#proceso');
        var I = $('#I');
        var E = $('#E');
        if (proceso.val() == 'Interno') {
            campo.show("fast");
            I.css('background-color', '#12C812');
        } else {
            console.log(proceso.val());
            campo.hide("fast");
            E.css('background-color', '#12C812');
        }

        function colorearI() {
            var I = $('#I');
            var E = $('#E');
            var campo = $('#retroAlimentacion');
            I.css('background-color', '#12C812');
            E.removeAttr('Style');
            campo.show("fast");
            $('#proceso').val('Interno');

        }

        function colorearE() {
            var I = $('#I');
            var E = $('#E');
            var campo = $('#retroAlimentacion');
            E.css('background-color', '#12C812');
            I.removeAttr('Style');
            campo.hide("fast");
            $('#proceso').val('Externo');
        }
    </script>
    <?php
            extract($_REQUEST);
            if (isset($_REQUEST["msj"])) {
                if ($_REQUEST["msj"] == "1") {
                    echo "<script type='text/javascript'>
                swal('Registrado', 'Se registraron los datos correctamente', 'success');
                </script>";
                } else {
                    echo "<script type='text/javascript'>
                swal('Error', 'No se guardo la informacion, un dato reguistrado esta mal', 'error');
                </script>";
                }
            }
    ?>

<?php } ?>