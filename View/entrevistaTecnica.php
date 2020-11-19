<?php include "../config.php";
sessionValidate();

if (isset($_SESSION["rol"])) {
    switch ($_SESSION['rol']) {
        case 2:
            header('401.php');
            break;
        case 4:
            header('401.php');
            break;
    }
}
function cualPerfil($rol)
{
    switch ($rol) {
        case 1:
            echo "Administrador";
            break;
        case 2:
            echo "Psicóloga";
            break;
        case 3:
            echo "Jefe";
            break;
        case 4:
            echo "Business Partner";
            break;
    }
}

ini_set('date.timezone', 'America/Bogota'); //https://www.php.net/manual/es/timezones.america.php
$fecha_now = date("d/M/Y");
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
            <a href="entrevistasTecTerminadas.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50" style="padding: 3px;"></i>Reporte De Entrevista</a>
            <button type="button" onclick="colorearI()" id="I" style="background-color: #12C812;" class="btn" data-color="success">Interno</button>
            <button type="button" class="btn" onclick="colorearE()" id="E" data-color="success">Externo</button>
        </div>
    </div>

    <br><br>
    <form id="regiration_form" class="user" action="../Controller/controllerConceptoTecnico.php" method="post">
        <div class="form-group row">
            <div class="col-sm-6">
                <label for="psicologa">Entrevistador(a)</label>
                <input type="text" class="form-control form-control-user" id="entrevistador" name="entrevistador" value="<?php echo $_SESSION['nombre'] ?> <?php echo $_SESSION['apellidos'] ?>" readonly="readonly" required>
            </div>
            <div class="col-sm-6">
                <label for="fechaEntrevista">Fecha de la Entrevista</label>
                <input type="text" class="form-control form-control-user" id="fechaEntrevista" name="fechaEntrevista" value="<?php echo $fecha_now ?>" readonly="readonly" required>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-6">
                <label for="cargo">Cargo</label>
                <input type="text" class="form-control form-control-user" id="cargoEntrevistador" name="cargoEntrevistador" placeholder="CARGO" value="<?php cualPerfil($_SESSION['rol']) ?>" readonly required>
            </div>
            <div class="col-sm-6">
                <label for="dependencia">Dependencia</label>
                <input type="text" class="form-control form-control-user" id="dependencia" name="dependencia" placeholder="DEPENDENCIA" required>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-4">
                <label for="nombre">Nombre Completo</label>
                <input type="Text" class="form-control form-control-user" id="nombreCandidato" name="nombreCandidato" placeholder="NOMBRE COMPLETO" required>
            </div>
            <div class="col-sm-4">
                <label for="nombre">Cedula del Candidato</label>
                <input type="number" class="form-control form-control-user" id="idTec" name="idTec" placeholder="Cedula" required>
            </div>
            <div class="col-sm-4">
                <label for="nombre">Cargo Vacante</label>
                <input type="Text" class="form-control form-control-user" id="cargoAspira" name="cargoAspira" placeholder="Cargo al que Aspira" required>
            </div>
        </div>
        <br>
        <br>
        <h3><b>¿El candidato/ta cuenta con las competencias técnicas para desempeñar las responsabilidades del cargo? SI/NO Explique la respuesta elegida: </b></h3>
        <div class="form-group row">
            <div class="col-sm-12">
                <select class="form-control" id="cuentaCompetenciaSN" name="cuentaCompetenciaSN" required>
                    <option value="SI">SI</option>
                    <option value="NO">NO</option>
                </select>
                <textarea class="form-control" name="cuentaCompetencia" id="cuentaCompetencia" placeholder="Explique"></textarea>
            </div>
        </div>

        <h3><b>De las responsabilidades definidas para el cargo, en cuales de ellas identifica durante la entrevista que el candidato/ta tiene experiencia previa.</b></h3>
        <textarea class="form-control" name="experienciaPrevia" id="experienciaPrevia" placeholder="Para lograr una buena adaptación..."></textarea>
        <br><br>
        <h3><b>Cuenta con conociemientos digitales o de metodologias agile que se requieren para el cargo</b></h3>
        <textarea class="form-control" name="cuentaCono" id="cuentaCono" placeholder="Para lograr una buena adaptación..."></textarea>
        <br><br>
        <h3><b>¿El candidato/ta cuenta con el conocimiento y la experiencia para desempeñar responsabilidades asociadas a los Sistemas de Gestión Integral (calidad, ambiental y SISO) en el cargo? SI/NO Explique la respuesta elegida: </b></h3>
        <div class="form-group row">
            <div class="col-sm-12">
                <select class="form-control" id="calidadSN" name="calidadSN" required>
                    <option value="SI">SI</option>
                    <option value="NO">NO</option>
                </select>
                <textarea class="form-control" name="calidad" id="calidad" placeholder="Explique"></textarea>
            </div>
        </div>
        <br>
        <div id="retroAlimentacion">
            <h3><b>Elementos relevantes para aportar en la Retroalimentación </b></h3>
            <textarea class="form-control" name="retroalimentacion" id="retroalimentacion" placeholder="Para lograr una buena adaptación..."></textarea>
            <br><br>
        </div>
        <br><br><br>
        <div class="container">
            <div class="contenedor1">
                <div class="casilla">
                    <div class="form-group row">
                        <div class="form-check form-check-inline">
                            <input type="checkbox" class="form-check-input" id="adecuado" value="si" name="adecuado" required>
                            <label class="form-check-label minimal">Adecuado(a)</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input derecha" type="checkbox" value="si" id="noA" name="noA" required>
                            <label class="form-check-label">
                                No Adecuado(a)
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" value="si" id="primera" disabled name="primera">
                            <label class="form-check-label">
                                Primera Opción
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="checkbox" class="form-check-input derecha" id="parcialmente" disabled value="si" name="parcialmente">
                            <label class="form-check-label minimal"> Parcialmente
                                adecuado(a)</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" value="si" id="segunda" disabled name="segunda">
                            <label class="form-check-label">
                                Segunda Opción
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input " type="checkbox" value="si" id="adecuadoP" disabled name="adecuadoP">
                            <label class="form-check-label minimal">
                                Adecuado(a) para otro cargo
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div><br><br>
        <div style="text-align: right">
            <input type="hidden" id="co" name="co" value="<?php echo $_SESSION['co'] ?>">
            <input type="hidden" id="proceso" name="proceso" value="Externo">
            <input type="submit" id="registrar" name="btn" class="submit btn btn-success" value="Registrar" />
            <a href="principal.php" class="btn btn-danger btn-sm" onclick="seguro()">Salir</a>
        </div>
    </form>
</div>
<?php include FOLDER_TEMPLATE . "scripts.php"; ?>
<script type="text/javaScript" src="../vendor/.js"></script>
<script type="text/javascript" src="../js/funcionesAyP.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script type="text/javascript">
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
<script type='text/javascript'>
    function desabilitar() {
        if (<?php echo $_SESSION['rol'] ?> == 1) {
            var boton = document.querySelector('#registrar');
            boton.setAttribute('disabled', 'disabled');
        }
    }
    window.onload = desabilitar();
</script>