<?php include "../config.php";
sessionValidate();

ini_set('date.timezone', 'America/Bogota'); //https://www.php.net/manual/es/timezones.america.php
$fecha_now = date("d/M/Y");
?>
<link href="../vendor/fontawesome-free/css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="../css/style.css" rel="stylesheet" type="text/css">
<style type="text/css">
    #regiration_form fieldset:not(:first-of-type) {
        display: none;
    }
</style>
<div class="container">
    <div class="text-center">
        <h1 class="jumbotron">Entrevista Psicológica</h1>
    </div>
    <a href="consultarEntrevistaPsicologa.php" class="text-right btn btn-primary mb-8">Administrar</a> <br><br>

    <div class="progress">
        <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
        </div>
    </div>
    <script>
        function seguro() {
            window.onbeforeunload = function() {
                return "¿Estás seguro que deseas salir de la actual página?"
            }
        }
    </script>
    <div style="text-align: right">
        <a href="principal.php" class="btn btn-danger btn-sm" onclick="seguro()">Salir</a>
    </div>
    <form id="regiration_form" novalidate action="../Controller/ValidarinsertarEntrevistaPs.php" method="post">
        <fieldset>
            <h2>Paso 1: Datos</h2>
            <div class="form-group row">
                <div class="col-sm-12">
                    <label for="nombre">Nombre Completo</label>
                    <input type="Text" class="form-control form-control-user" id="nombre" name="nombre" placeholder="NOMBRE COMPLETO" required>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-4">
                    <label for="cedula">Cédula</label>
                    <input type="number" class="form-control form-control-user" id="cc" name="cc" placeholder="NUMERO DE DOCUMENTO" required>
                </div>
                <!-- <div class="col-sm-4">
          <label for="fecha_nac">Fecha de nacimiento</label>
          <input type="date" class="form-control form-control-user" id="fecha_nac" name="fecha_nac" placeholder="Fecha Nacimiento" max="2005-01-01" required>
        </div> -->
                <div class="col-sm-4">
                    <label for="dependencia">Línea de Negocio</label>
                    <input type="text" class="form-control form-control-user" id="dependencia" name="dependencia" placeholder="DEPENDENCIA" required>
                </div>
                <div class="form-group row">
                    <div class="col-sm-4">
                        <label for="cargoAspira">Cargo al que aspira</label>
                        <input type="text" class="form-control form-control-user" id="cargoAspira" name="cargoAspira" placeholder="CARGO AL QUE ASPIRA" required>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-6">
                    <label for="telefono">Teléfono</label>
                    <input type="number" class="form-control form-control-user" id="telefono" name="telefono" placeholder="TELEFO O CELULAR" required>
                </div>
                <div class="col-sm-6">
                    <label for="aspiracionSal" class="input-group">Aspiración Salarial (Promedio Anual)</label>
                    <input type="number" class="form-control form-control-user" id="aspiracionSal" name="aspiracionSal" placeholder="ASPIRACION SALARIAL" required>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-4">
                    <label for="fechaEntrevista">Fecha de la Entrevista</label>
                    <input type="text" class="form-control form-control-user" id="fechaEntrevista" name="fechaEntrevista" value="<?php echo $fecha_now ?>" readonly="readonly" required>
                </div>
                <div class="col-sm-4">
                    <label for="psicologa">Entrevistador(a)</label>
                    <input type="text" class="form-control form-control-user" id="psicologa" name="psicologa" value="<?php echo $_SESSION['nombre'] ?><?php echo $_SESSION['apellidos'] ?>" readonly="readonly" required>
                </div>
                <div class="col-sm-4">
                    <label for="cargo">Cargo</label>
                    <input type="text" class="form-control form-control-user" id="cargo" name="cargo" placeholder="CARGO" value="Profesional Selección" readonly="readonly" required>
                </div>
            </div>
            <script type="text/javascript">
                function validar1() {
                    var a = document.getElementById("nombre").value;
                    var b = document.getElementById("cc").value;
                    var c = document.getElementById("dependencia").value;
                    var e = document.getElementById("cargoAspira").value;
                    var g = document.getElementById("telefono").value;
                    var h = document.getElementById("aspiracionSal").value;
                    if (a.length == 0 || b.length == 0 || c.length == 0 || e.length == 0 || g.length == 0 || h.length == 0) {
                        alert("¡TE FALTAN DATOS POR LLENAR O TIENES UN DATO MAL ESCRITO !");
                    }
                    return true;
                }
            </script>
            <input type="button" name="botton" onclick="validar1()" id="botton" class="btn next btn-info btn-primary btn-user  border-bottom-success" value="Siguiente" />
        </fieldset>

        <fieldset>
            <h2> Paso 2: Comportamientos</h2>
            <div class="form-group row">
                <div class="col-sm-3">
                    <label for="responsabilidad">Responsabilidad</label>
                    <select class="form-control" id="responsabilidad" name="responsabilidad" required>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
                <div class="col-sm-3">
                    <label for="productividad">Productividad</label>
                    <select class="form-control" id="productividad" name="productividad" required>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
                <div class="col-sm-3">
                    <label for="gestionCambio">Gestión de Cambio</label>
                    <select class="form-control" id="gestionCambio" name="gestionCambio" required>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
                <div class="col-sm-3">
                    <label for="innovacion">Innovación</label>
                    <select class="form-control" id="innovacion" name="innovacion" required>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
                <div class="col-sm-6">
                    <label for="resiliencia">Resiliencia</label>
                    <select class="form-control" id="resiliencia" name="resiliencia" required>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
                <div class="col-sm-6">
                    <label for="confianza">Confianza</label>
                    <select class="form-control" id="confianza" name="confianza" required>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
            </div>

            
            <h3 class="titulo"><b>Digital Skills- Self-assessment</b></h3>
                <div class="contenedor1">
                    <div>
                        <h5 class="titulo2"><b>Working Tools & Methodologies</b></h5>
                        <div class="form-check form-check-inline">
                            <input type="checkbox" class="form-check-input" id="dswm1" value="SI" name="dswm1">
                            <label class="form-check-label">MS Office basics (Word, Excel,</label>
                            <label class="texto">Powerpoint)</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="checkbox" class="form-check-input" value="SI" id="dswm2" name="dswm2">
                            <label class="form-check-label">
                                MS Office advanced (Access, Project)
                            </label>
                        </div>
                    <div class="form-check form-check-inline">
                        <input type="checkbox" class="form-check-input" id="dswo3" value="SI" name="dswo3">
                        <label class="form-check-label"> Outlook</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="checkbox" class="form-check-input" id="dswc4" value="SI" name="dswc4">
                        <label class="form-check-label"> Communication tools (Teams, Yammer)</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="checkbox" class="form-check-input" id="dswp5" value="SI" name="dswp5">
                        <label class="form-check-label"> Project Management</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="checkbox" class="form-check-input" id="dswa6" value="SI" name="dswa6">
                        <label class="form-check-label">Agile</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="checkbox" class="form-check-input" id="dswd7" value="SI" name="dswd7">
                        <label class="form-check-label"> Desing thinking</label>
                    </div>
                    <div>
                        <label for="text1"><b>Other</b></label><br>
                        <textarea class="form-check-input" name="other1" id="other1"></textarea>
                    </div><br><br><br><br>
                    <!-- </div> -->
                    <!-- <div> -->
                    <h5 class="titulo3"><b>Soft Digital Skills</b></h5>
                    <div class="form-check form-check-inline">
                        <input type="checkbox" class="form-check-input" value="SI" id="dssk1" name="dssk1">
                        <label class="form-check-label">
                            Knowledge Networking
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="checkbox" class="form-check-input" value="SI" id="dssp2" name="dssp2">
                        <label class="form-check-label">
                            Problem Solving
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="checkbox" class="form-check-input" value="SI" id="dssv3" name="dssv3">
                        <label class="form-check-label">
                            Virtual Communication
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="checkbox" class="form-check-input" value="SI" id="dssd4" name="dssd4">
                        <label class="form-check-label">
                            Digital Awareness
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="checkbox" class="form-check-input" value="SI" id="dssd5" name="dssd5">
                        <label class="form-check-label">
                            Data and device security
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="checkbox" class="form-check-input" value="SI" id="dssc6" name="dssc6">
                        <label class="form-check-label">
                            Content creation
                        </label>
                    </div>
                    <div>
                        <label class="form-check-label"><b>Other</b></label><br>
                        <textarea class="form-check-input" name="other2" id="other2"></textarea>
                    </div><br><br><br>
                    <!-- </div> -->
                    <!-- <div> -->
                    <h5 class="titulo4"><b>Digital Hard Skills</b></h5>
                    <div class="form-check form-check-inline">
                        <input type="checkbox" class="form-check-input" value="SI" id="dsdp1" name="dsdp1">
                        <label class="form-check-label">
                            Programming languages
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="checkbox" class="form-check-input" value="SI" id="dsdc2" name="dsdc2">
                        <label class="form-check-label">
                            Cloud Services
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="checkbox" class="form-check-input" value="SI" id="dsdi3" name="dsdi3">
                        <label class="form-check-label">
                            It System Management and
                        </label>
                        <label class="texto">Enterprise architecture</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="checkbox" class="form-check-input" value="SI" id="dsdc4" name="dsdc4">
                        <label class="form-check-label">
                            Cyber Security
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="checkbox" class="form-check-input" value="SI" id="dsdu5" name="dsdu5">
                        <label class="form-check-label">
                            UX/UI Desing
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="checkbox" class="form-check-input" value="SI" id="dsdm6" name="dsdm6">
                        <label class="form-check-label">
                            Mobile
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="checkbox" class="form-check-input" value="SI" id="dsdd7" name="dsdd7">
                        <label class="form-check-label">
                            Data & Analytics
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="checkbox" class="form-check-input" value="SI" id="dsdi8" name="dsdi8">
                        <label class="form-check-label">
                            Internet of Things
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="checkbox" class="form-check-input" value="SI" id="dsdi9" name="dsdi9">
                        <label class="form-check-label">
                            It Plataforms
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="checkbox" class="form-check-input" value="SI" id="dsdr10" name="dsdr10">
                        <label class="form-check-label">
                            Robotic Process Automation
                        </label>
                    </div>
                    <div>
                        <label class="form-check-label"><b>Other</b></label><br>
                        <textarea id="other3" name="other3" class="form-check-input"></textarea>
                    </div>
                </div>
            </div>
            <input type="button" name="previous" class="previous btn btn-default " value="Previo" />
            <input type="button" name="next" class="next btn btn-info" value="Siguiente" />
        </fieldset>
        <fieldset>
            <h2>Paso 3: Información de contacto</h2>
            <div class="form-group row">
                <div class="col-sm-6">
                    <label for="comportamientoEtico">Comportamiento Ético</label>
                    <input type="text" class="form-control" id="comportamientoEtico" name="comportamientoEtico" placeholder="COMPORTAMIENTO ETICO" required>
                </div>
                <div class="col-sm-6">
                    <label for="fuenteR">Fuente de Reclutamiento</label>
                    <input type="text" class="form-control" id="fuenteR" name="fuenteR" placeholder=" FUENTE DE RECLUTAMIENTO" required>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-3">
                    <label for="resultadoI">Nivel del Inglés</label>
                    <input type="text" class="form-control" id="resultadoI" name="resultadoI" placeholder="RESULTADO SOLO SI ES REQUERIDO" required>
                </div>
                <div class="col-sm-6">
                    <label for="inteligenciaE">Inteligencia Emocional</label>
                    <input type="text" class="form-control" id="inteligenciaE" name="inteligenciaE" placeholder=" FUENTE DE RECLUTAMIENTO" required>
                </div>
                <div class="col-sm-3">
                    <label for="candidatoU">¿Es candidato único?</label>
                    <select class="form-control" id="candidatou" name="candidatoU" required>
                        <option value="NO">NO</option>
                        <option value="SI">SI</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-12">
                    <label for="explicacion">Explica tu Elección</label>
                    <textarea class="form-control" name="explicacion" id="explicacion" placeholder="explicacion"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-12">
                    <label for="resolucionProblemas">Resolución de Problemas Complejos</label>
                    <input type="text" class="form-control" id="resolucionProblemas" name="resolucionProblemas" placeholder="RESOLUCION DE PROBLEMAS COMPLEJOS" required>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-12">
                    <label for="observaciones">Observaciones</label>
                    <textarea class="form-control" name="observaciones" id="observaciones" placeholder="¿Registra informacion relevante al proceso de seleccion y/o contratacio?"></textarea>
                </div>
            </div>
            

            <input type="hidden" id="co" name="co" value="<?php echo $_SESSION['co'] ?>">

            <script type="text/javascript">
                function control(caracter) {
                    caracter = (document.layers) ? caracter.which : event.keyCode;
                    if (caracter == 13) {
                        alert('Se ha pulsado la tecla Enter, esta tecla esta deshabilitada para este formulario');
                        return false;
                    }
                }
                document.onkeypress = control;
            </script>

            <input type="button" name="previous" class="previous btn btn-default" value="Previo" />
            <input type="submit" name="boton" class="submit btn btn-success" value="Registrar" id="boton" /><br>

        </fieldset>
        <?php //<a href="../Reportes/pdf-Entrevista_Psicologa.php?cc=<?php echo $datos['cc']">
        if (isset($_GET["msj"])) {

            if ($_GET["msj"] == "1") {
        ?>
                <script>
                    alert("SE REGISTRO CORRECTAMENTE");
                </script>
            <?php
            } else if ($_GET["msj"] == "2") {
            ?>
                <script>
                    alert("NO SE PUDO HACER EL REGISTRO");
                </script>
        <?php
            }
        }
        ?>
    </form>
</div>
</div>
<?php include FOLDER_TEMPLATE . "scripts.php"; ?>

<script type="text/javascript">
    $(document).ready(function() {
        var current = 1,
            current_step, next_step, steps;
        steps = $("fieldset").length;
        $(".next").click(function() {
            current_step = $(this).parent();
            next_step = $(this).parent().next();
            next_step.show();
            current_step.hide();
            setProgressBar(++current);
        });
        $(".previous").click(function() {
            current_step = $(this).parent();
            next_step = $(this).parent().prev();
            next_step.show();
            current_step.hide();
            setProgressBar(--current);
        });
        setProgressBar(current);
        // Change progress bar action
        function setProgressBar(curStep) {
            var percent = parseFloat(100 / steps) * curStep;
            percent = percent.toFixed();
            $(".progress-bar")
                .css("width", percent + "%")
                .html(percent + "%");
        }
    });
</script>
<script type="text/javaScript" src="../vendor/.js"></script>