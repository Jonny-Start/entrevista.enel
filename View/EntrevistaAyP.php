<?php include "../config.php";
sessionValidate();

ini_set('date.timezone', 'America/Bogota'); //https://www.php.net/manual/es/timezones.america.php
$fecha_now = date("d/M/Y");
?>
<link href="../vendor/fontawesome-free/css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="../css/style.css" rel="stylesheet" type="text/css">
<div class="container">
    <div class="text-center">
        <h1 class="jumbotron">Entrevista Psicológica de Aprendices & Practicantes
            <p><br>¡Recuerde la importancia de registrar la totalidad de su concepto!</p>
        </h1>
    </div>
    <a href="consultarEntrevistaPsAyP.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50" style="padding: 3px;"></i>Reporte De Entrevista</a>
    <br><br>
    <form id="regiration_form" novalidate action="../Controller/ValidarinsertarEntrevistaAyP.php" method="post">
        <div class="form-group row">
            <div class="col-sm-6" id="divAyP">
                <label for="cc">Numero de cedula o tarjeta de identidad</label>
                <input type="number" class="form-control form-control-user" id="cc" name="cc" placeholder="#" required>
            </div>
            <div class="col-sm-1" id="botonAyP" style="padding: 0px; display: none;">
                    <input type="button" class="btn btn-primary" id="validarAyP" name="validarAyP" value="Verificar">
            </div>
            <div class="col-sm-6">
                <label for="nombre">Nombre Completo</label>
                <input type="Text" class="form-control form-control-user" id="nombre" name="nombre" placeholder="NOMBRE COMPLETO" required>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-4">
                <label for="dependencia">Línea de Negocio </label>
                <input type="text" class="form-control form-control-user" id="dependencia" name="dependencia" placeholder="DEPENDENCIA" required>
            </div>
            <div class="col-sm-4">
                <label for="areaPractica">Area de practica</label>
                <input type="text" class="form-control form-control-user" id="areaPractica" name="areaPractica" placeholder="Area de practica" required>
            </div>
            <div class="form-group row">
                <div class="col-sm-4">
                    <label for="ingles">Ingles</label>
                    <input type="text" class="form-control form-control-user" id="ingles" name="ingles" placeholder="CARGO AL QUE ASPIRA" required>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-4">
                <label for="fechaEntrevista">Fecha de la Entrevista</label>
                <input type="text" class="form-control form-control-user" id="fechaEntrevista" name="fechaEntrevista" value="<?php echo $fecha_now ?>" readonly="readonly" required>
            </div>
            <div class="col-sm-4">
                <label for="psicologa">Entrevistador(a)</label>
                <input type="text" class="form-control form-control-user" id="psicologa" name="psicologa" value="<?php echo $_SESSION['nombre'] ?> <?php echo $_SESSION['apellidos'] ?>" readonly="readonly" required>
            </div>
            <div class="col-sm-4">
                <label for="cargo">Cargo</label>
                <input type="text" class="form-control form-control-user" id="cargo" name="cargo" placeholder="CARGO" value="Practicante" required>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-12">
                <label for="conocimientoEmpresa">¿Qué sabes acerca de nuestra empresa?, Qué te atrae de ella?</label>
                <textarea class="form-control" name="conocimientoEmpresa" id="conocimientoEmpresa" placeholder="¿Registra informacion relevante al proceso de seleccion y/o contratacio?"></textarea>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-12">
                <label for="motivacionArea">De las responsabilidades definidas para el cargo, describa en cuales de ellas el candidato/ta tiene motivación para desempeñarse en esta área.</label>
                <textarea class="form-control" name="motivacionArea" id="motivacionArea" placeholder="¿Registra informacion relevante al proceso de seleccion y/o contratacio?"></textarea>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-12">
                <label for="ofimaticas">De uno(1) a cinco(5) cual es el desempeño que tiene el candidato/ta en herramientas ofimaticas</label>
                <select class="form-control" id="ofimatica" name="ofimatica" required>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-12">
                <label for="conocimientosProgramacion">Que conocimientos tiene el candidato/ta en programacion</label>
                <textarea class="form-control" name="conocimientoProgramacion" id="conocimientoProgramacion" placeholder="Que conocimientos tiene el candidato/ta en programacion"></textarea>
            </div>
        </div>
        <div class="container">
            <div class="contenedor1">
                <div class="casilla">
                    <div class="form-group row">
                        <div class="form-check form-check-inline">
                            <input type="checkbox" class="form-check-input" id="adecuado" value="si" name="adecuado" required>
                            <label class="form-check-label minimal">Adecuado(a)</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input " type="checkbox" value="si" id="adecuadoP" name="adecuadoP" required>
                            <label class="form-check-label minimal">
                                Adecuado(a) para otro cargo
                            </label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input type="checkbox" class="form-check-input derecha" id="parcialmente" value="si" name="parcialmente" required>
                            <label class="form-check-label minimal"> Parcialmente
                                adecuado(a)</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" value="si" id="primera" name="primera" required>
                            <label class="form-check-label">
                                Primera Opción
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" value="si" id="segunda" name="segunda" required>
                            <label class="form-check-label">
                                Segunda Opción
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input derecha" type="checkbox" value="si" id="noA" name="noA" required>
                            <label class="form-check-label">
                                No Adecuado(a)
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div><br><br>
        <div class="form-group row">
            <div class="col-sm-12">
                <label for="concepto">Una vez finalizada la entrevista con el/la candidato/ta, registre sus conclusiones</label>
                <textarea class="form-control" name="concepto" id="concepto" placeholder="Tu concepto o concluciones"></textarea>
            </div>
        </div>
        <input type="hidden" id="co" name="co" value="<?php echo $_SESSION['co'] ?>">
        <div style="text-align: right">
            <input type="submit" name="btn" class="submit btn btn-success" value="Registrar" id="btn" />
            <a href="principal.php" class="btn btn-danger btn-sm" onclick="seguro()">Salir</a>
        </div>
    </form>
    <script type="text/javascript" src="../vendor/.js"></script>
    <?php include FOLDER_TEMPLATE . "scripts.php"; ?>
    <script type="text/javascript" src="../js/funcionesAyP.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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