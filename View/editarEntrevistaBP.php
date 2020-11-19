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
            break;
    }
}

require_once "../Model/conexioon.php";
$cc = $_GET['cc'];
$co = $_SESSION['co'];
$query = " SELECT * FROM entrevistabp where idBP = $cc and terminada = 'True' and co = $co ";
$rta = $objCnx->query($query);
?>
<link href="../vendor/fontawesome-free/css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="../css/style.css" rel="stylesheet" type="text/css">
<div class="container">
    <div class="text-center">
        <h1 class="jumbotron">Entrevista Business Partner
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
    <form id="regiration_form" class="user" action="../Controller/controllerEditarBP.php" method="post">
        <?php
        require_once "../Model/conexioon.php";
        $sql = "SELECT * FROM entrevistabp where idBP = $cc and terminada = 'True' and co = $co ";
        $rta = $objCnx->query($sql);
        while ($datos = $rta->fetch_array()) {
        ?>
            <div class="form-group row">
                <div class="col-sm-6">
                    <label for="psicologa">Entrevistador(a)</label>
                    <input type="text" class="form-control form-control-user" id="entrevistador" name="entrevistador" value="<?php echo $datos['entrevistador'] ?> " required>
                </div>
                <div class="col-sm-6">
                    <label for="fechaEntrevista">Fecha de la Entrevista</label>
                    <input type="text" class="form-control form-control-user" id="fechaEntrevista" name="fechaEntrevista" value="<?php echo $datos['fechaEntrevista'] ?>" required>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-6">
                    <label for="cargo">Cargo</label>
                    <input type="text" readonly class="form-control form-control-user" id="cargoEntrevistador" name="cargoEntrevistador" placeholder="CARGO" value="<?php echo $datos['cargoEntrevistador'] ?>" required>
                </div>
                <div class="col-sm-6">
                    <label for="dependencia">Dependencia</label>
                    <input type="text" class="form-control form-control-user" id="dependencia" name="dependencia" placeholder="DEPENDENCIA" value="<?php echo $datos['dependencia'] ?>" required>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-4">
                    <label for="nombre">Nombre Completo</label>
                    <input type="Text" class="form-control form-control-user" id="nombreCandidato" name="nombreCandidato" value="<?php echo $datos['nombreCandidato'] ?>" placeholder="NOMBRE COMPLETO" required>
                </div>
                <div class="col-sm-4">
                    <label for="nombre">Cedula del candidato</label>
                    <input type="number" readonly class="form-control form-control-user" id="idBP" name="idBP" value="<?php echo $datos['idBP'] ?>" placeholder="Cedula del candidato" required>
                </div>
                <div class="col-sm-4">
                    <label for="nombre">Cargo Vacante</label>
                    <input type="Text" class="form-control form-control-user" id="cargoAspira" name="cargoAspira" value="<?php echo $datos['cargoAspira'] ?>" placeholder="Cargo al que Aspira" required>
                </div>
            </div>
            <br>
            <br>

            <table class="table" style="border: 3px #E0DFDF solid;">
                <thead>
                    <tr style="background-color: #E0DFDF;">
                        <th scope="col" colspan="3" style="text-align: center; ">Datos de Compensación Actual de la Persona</th>
                    </tr>
                </thead>
                <tbody>
                    <tr style="border: 2px white solid; background-color: #FF7E39;">
                        <th scope="col">Item</th>
                        <th scope="col" style="text-align: center;">Mensual </th>
                        <th scope="col" style="text-align: center;">Observaciones</th>
                    </tr>
                    <tr>
                        <td scope="row">Sueldo / salario básico Actual</td>
                        <td style="text-align: center;"><input type="number" class="form-control form-control-user" value="<?php echo $datos['salBasicMen'] ?>" id="salBasicMen" name="salBasicMen" placeholder="Mensual" required></td>
                        <td style="text-align: center;"><input type="Text" class="form-control form-control-user" value="<?php echo $datos['salBasicObs'] ?>" id="salBasicObs" name="salBasicObs" placeholder="Observacion" required></td>

                    </tr>
                    <tr>
                        <td scope="row">Modalidad de pago</td>
                        <td style="text-align: center;"><input type="Text" class="form-control form-control-user" value="<?php echo $datos['modalidadPagoMen'] ?>" id="modalidadPagoMen" name="modalidadPagoMen" placeholder="Mensual" required></td>
                        <td style="text-align: center;"><input type="Text" class="form-control form-control-user" value="<?php echo $datos['modalidadPagoObs'] ?>" id="modalidadPagoObs" name="modalidadPagoObs" placeholder="Observacion" required></td>
                    </tr>
                    <tr>
                        <td scope="row">Salario Variable Actual</td>
                        <td style="text-align: center;"><input type="Text" class="form-control form-control-user" value="<?php echo $datos['salVariMen'] ?>" id="salVariMen" name="salVariMen" placeholder="Mensual" required></td>
                        <td style="text-align: center;"><input type="Text" class="form-control form-control-user" value="<?php echo $datos['salVariObs'] ?>" id="salVariObs" name="salVariObs" placeholder="Observacion" required></td>
                    </tr>
                    <tr>
                        <td scope="row">Otros beneficios Actuales</td>
                        <td style="text-align: center;"><input type="Text" class="form-control form-control-user" value="<?php echo $datos['otrosBenMen'] ?>" id="otrosBenMen" name="otrosBenMen" placeholder="Mensual" required></td>
                        <td style="text-align: center;"><input type="Text" class="form-control form-control-user" value="<?php echo $datos['otrosBenObs'] ?>" id="otrosBenObs" name="otrosBenObs" placeholder="Observacion" required></td>
                    </tr>
                    <tr>
                        <td scope="row">Aspiración Salarial</td>
                        <td style="text-align: center;"><input type="number" class="form-control form-control-user" value="<?php echo $datos['aspiracionSalMen'] ?>" id="aspiracionSalMen" name="aspiracionSalMen" placeholder="Mensual" required></td>
                        <td style="text-align: center;"><input type="Text" class="form-control form-control-user" value="<?php echo $datos['aspiracionSalObs'] ?>" id="aspiracionSalObs" name="aspiracionSalObs" placeholder="Observacion" required></td>
                    </tr>
                </tbody>
            </table>
            <br>
            <h3><b>Correspondencia entre el perfil profesional del candidato y el perfil requerido: </b></h3>
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
                                <input type="checkbox" class="form-check-input" id="ajusteAlto" value="si" name="ajusteAlto"> <?php chulo($datos['ajusteAlto'], 'ajusteAlto') ?>
                                <label class="form-check-label minimal">Ajuste Alto</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input derecha" type="checkbox" value="si" id="ajusteMedioAlto" name="ajusteMedioAlto"> <?php chulo($datos['ajusteMedioAlto'], 'ajusteMedioAlto') ?>
                                <label class="form-check-label">
                                    Ajuste Medio Alto
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" value="si" id="ajusteMedioBajo" name="ajusteMedioBajo"> <?php chulo($datos['ajusteMedioBajo'], 'ajusteMedioBajo') ?>
                                <label class="form-check-label">
                                    Ajuste Medio Bajo
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="checkbox" class="form-check-input derecha" id="parcialAjusteBajo" value="si" name="parcialAjusteBajo"> <?php chulo($datos['parcialAjusteBajo'], 'parcialAjusteBajo') ?>
                                <label class="form-check-label minimal"> Parcialmente Ajuste Bajo</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <h3><b>¿El perfil profesional del candidato se ajusta a las necesidades en términos de formación y experiencia que requiere el cargo? SI / NO Explique (en ambos casos)</b></h3>
            <div class="form-group row">
                <div class="col-sm-12">
                    <select class="form-control" id="perfilAjustaSN" name="perfilAjustaSN" required>
                        <option selected><?php echo $datos['perfilAjustaSN'] ?></option>
                        <option value="SI">SI</option>
                        <option value="NO">NO</option>
                    </select>
                    <textarea class="form-control" name="perfilAjusta" id="perfilAjusta" placeholder="Explique"><?php echo $datos['perfilAjusta'] ?></textarea>
                </div>
            </div>
            <br>
            <h3><b>Para lograr una buena adaptación al cargo se identifican necesidades de formación en:</b></h3>
            <textarea class="form-control" name="adaptarCargo" id="adaptarCargo" placeholder="Para lograr una buena adaptación..."><?php echo $datos['adaptarCargo'] ?></textarea>
            <div id="retroAlimentacion" hidden>
                <br><br>
                <h3><b>Elementos que apoyen la retroalimentación </b></h3>
                <textarea class="form-control" name="elementosRetro" id="elementosRetro" placeholder="Elementos que apoyen la retroalimentación "> <?php echo $datos['elementosRetro'] ?></textarea>
            </div>
            <br><br>
            <h3><b>Comentarios adicionales: </b></h3>
            <textarea class="form-control" name="comentarios" id="comentarios" placeholder="Comentarios "><?php echo $datos['comentarios'] ?></textarea>
            <br><br><br>
            <div class="container">
                <div class="contenedor1">
                    <div class="casilla">
                        <div class="form-group row">
                            <div class="form-check form-check-inline">
                                <input type="checkbox" class="form-check-input" id="adecuado" value="si" name="adecuado"><?php chulo($datos['adecuado'], 'adecuado') ?>
                                <label class="form-check-label minimal">Adecuado(a)</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input derecha" type="checkbox" value="si" id="noA" name="noA"><?php chulo($datos['noA'], 'noA') ?>
                                <label class="form-check-label">
                                    No Adecuado(a)
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" value="si" id="primera" name="primera"><?php chulo($datos['primera'], 'primera') ?>
                                <label class="form-check-label">
                                    Primera Opción
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="checkbox" class="form-check-input derecha" id="parcialmente" value="si" name="parcialmente"><?php chulo($datos['parcialmente'], 'parcialmente') ?>
                                <label class="form-check-label minimal"> Parcialmente
                                    adecuado(a)</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" value="si" id="segunda" name="segunda"><?php chulo($datos['segunda'], 'segunda') ?>
                                <label class="form-check-label">
                                    Segunda Opción
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input " type="checkbox" value="si" id="adecuadoP" name="adecuadoP"> <?php chulo($datos['adecuadoP'], 'adecuadoP') ?>
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