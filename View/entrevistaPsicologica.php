<?php include "../config.php";
sessionValidate();
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
    <a href="consultarEntrevistaPsicologa.php" class="text-right btn btn-primary mb-8">Administrar</a> <br>

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
    <a href="principal.php" class="float-right btn btn-danger" onclick="seguro()">Salir</a>
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
                    <label for="dependencia">Dependencia</label>
                    <input type="text" class="form-control form-control-user" id="dependencia" name="dependencia" placeholder="DEPENDENCIA" required>
                </div>
                <div class="col-sm-4">
                    <label for="cargo">Cargo</label>
                    <input type="text" class="form-control form-control-user" id="cargo" name="cargo" placeholder="CARGO" value="Profesional Selección" readonly="readonly" required>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-12">
                    <label for="cargoAspira">Cargo al que aspira</label>
                    <input type="text" class="form-control form-control-user" id="cargoAspira" name="cargoAspira" placeholder="CARGO AL QUE ASPIRA" required>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-6">
                    <label for="telefono">Teléfono</label>
                    <input type="number" class="form-control form-control-user" id="telefono" name="telefono" placeholder="TELEFO O CELULAR" required>
                </div>
                <div class="col-sm-6">
                    <label for="aspiracionSal" class="input-group">Aspiración Salarial</label>
                    <input type="number" class="form-control form-control-user" id="aspiracionSal" name="aspiracionSal" placeholder="ASPIRACION SALARIAL" required>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-6">
                    <label for="fechaEntrevista">Fecha de la Entrevista</label>
                    <input type="text" class="form-control form-control-user" id="fechaEntrevista" name="fechaEntrevista" value="<?php echo $fecha_actual ?>" readonly="readonly" required>
                </div>
                <div class="col-sm-6">
                    <label for="psicologa">Entrevistador(a)</label>
                    <input type="email" class="form-control form-control-user" id="psicologa" name="psicologa" value="<?php echo $_SESSION['user'] ?>" readonly="readonly" required>
                </div>
            </div>
            <script type="text/javascript">
                function validar1() {
                    var a = document.getElementById("nombre").value;
                    var b = document.getElementById("cc").value;
                    var c = document.getElementById("dependencia").value;
                    var d = document.getElementById("cargo").value;
                    var e = document.getElementById("cargoAspira").value;
                    var f = document.getElementById("nombre").value;
                    var g = document.getElementById("telefono").value;
                    var h = document.getElementById("aspiracionSal").value;
                    if (a.length == 0 || b.length == 0 || c.length == 0 || d.length == 0 || e.length == 0 || f.length == 0 || g.length == 0 || h.length == 0) {
                        alert("TE FALTAN DATOS POR LLENAR");
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

            <div class="contenedor">
                <div>
                    <h3 class="titulo"><b>Digital Skills- Self-assessment</b></h3>
                    <div class="contenedor1">
                        <div class="">
                            <h5 class="titulo2"><b>Working Tools & Methodologies</b></h5>
                            <div class="">
                                <input type="checkbox" class="" id="office_basics" value="si" name="office_basics"
                                    required>
                                <label class="" for="defaultCheck1">MS Office basics (Word, Excel,</label>
                                <label class="texto">Powerpoint)</label>
                            </div>
                            <div class="">
                                <input class="" type="checkbox" value="si" id="office_advanced" name="office_advanced"
                                    required>
                                <label class="" for="defaultCheck1">
                                    MS Office advanced (Access, Project)
                                </label>
                            </div>
                            <input type="checkbox" class="" id="outlook" value="si" name="outlook" required>
                            <label class="" for="defaultCheck1"> Outlook</label>
                        </div>
                        <div class="">
                            <input type="checkbox" class="" id="communication_tools" value="si"
                                name="communication_tools" required>
                            <label class="" for="defaultCheck1"> Communication tools (Teams, Yammer)</label>
                        </div>
                        <div class="">
                            <input type="checkbox" class="" id="project_management" value="si" name="project_management"
                                required>
                            <label class="" for="defaultCheck1"> Project Management</label>
                        </div>
                        <div class="">
                            <input type="checkbox" class="" id="agile" value="si" name="agile" required>
                            <label class="" for="defaultCheck1"> Agile</label>
                        </div>
                        <div class="">
                            <input type="checkbox" class="" id="desing_thinking" value="si" name="desing_thinking"
                                required>
                            <label class="" for="defaultCheck1"> Desing thinking</label>
                        </div>
                        <div class="">
                            <label for="text1"><b>Other</b></label><br>
                            <textarea class="" id="mensaje" placeholder="" required></textarea>
                        </div><br><br><br><br>
                        <!-- </div> -->
                        <!-- <div class=""> -->
                        <h5 class="titulo3"><b>Soft Digital Skills</b></h5>
                        <div class="">
                            <input class="" type="checkbox" value="si" id="knowledge_networking"
                                name="knowledge_networking" required>
                            <label class="" for="defaultCheck1">
                                Knowledge Networking
                            </label>
                        </div>
                        <div class="">
                            <input class="" type="checkbox" value="si" id="problem_solving" name="problem_solving"
                                required>
                            <label class="" for="defaultCheck1">
                                Problem Solving
                            </label>
                        </div>
                        <div class="">
                            <input class="" type="checkbox" value="si" id="virtual_communication"
                                name="virtual_communication" required>
                            <label class="" for="defaultCheck1">
                                Virtual Communication
                            </label>
                        </div>
                        <div class="">
                            <input class="" type="checkbox" value="si" id="digital_awareness" name="digital_awareness"
                                required>
                            <label class="" for="defaultCheck1">
                                Digital Awareness
                            </label>
                        </div>
                        <div class="">
                            <input class="" type="checkbox" value="si" id="data_and_device_security"
                                name="data_and_device_security" required>
                            <label class="" for="defaultCheck1">
                                Data and device security
                            </label>
                        </div>
                        <div class="">
                            <input class="" type="checkbox" value="si" id="content_creation" name="content_creation"
                                required>
                            <label class="" for="defaultCheck1">
                                Content creation
                            </label>
                        </div>
                        <div class="">
                            <label for=""><b>Other</b></label><br>
                            <textarea class="text2" id="mensaje" placeholder="" required></textarea>
                        </div><br><br>
                        <!-- </div> -->
                        <!-- <div class=""> -->
                        <h5 class="titulo4"><b>Digital Hard Skills</b></h5>
                        <div class="">
                            <input class="" type="checkbox" value="si" id="programming" name="programming" required>
                            <label class="" for="defaultCheck1">
                                Programming languages
                            </label>
                        </div>
                        <div class="">
                            <input class="" type="checkbox" value="si" id="cloud" name="cloud" required>
                            <label class="" for="defaultCheck1">
                                Cloud Services
                            </label>
                        </div>
                        <div class="">
                            <input class="" type="checkbox" value="si" id="it_system" name="it_system" required>
                            <label class="" for="defaultCheck1">
                                It System Management and
                            </label>
                            <label class="texto">Enterprise architecture</label>
                        </div>
                        <div class="">
                            <input class="" type="checkbox" value="si" id="cyber_security" name="cyber_security"
                                required>
                            <label class="" for="defaultCheck1">
                                Cyber Security
                            </label>
                        </div>
                        <div class="">
                            <input class="" type="checkbox" value="si" id="ux/ui_desing" name="ux/ui_desing" required>
                            <label class="" for="defaultCheck1">
                                UX/UI Desing
                            </label>
                        </div>
                        <div class="">
                            <input class="" type="checkbox" value="si" id="mobile" name="mobile" required>
                            <label class="" for="defaultCheck1">
                                Mobile
                            </label>
                        </div>
                        <div class="">
                            <input class="" type="checkbox" value="si" id="data_analytics" name="data_analytics"
                                required>
                            <label class="" for="defaultCheck1">
                                Data & Analytics
                            </label>
                        </div>
                        <div class="">
                            <input class="" type="checkbox" value="si" id="internet_of_things" name="internet_of_things"
                                required>
                            <label class="" for="defaultCheck1">
                                Internet of Things
                            </label>
                        </div>
                        <div class="">
                            <input class="" type="checkbox" value="si" id="it_plataforms" name="it_plataforms" required>
                            <label class="" for="defaultCheck1">
                                It Plataforms
                            </label>
                        </div>
                        <div class="">
                            <input class="" type="checkbox" value="si" id="robotic_process" name="robotic_process"
                                required>
                            <label class="" for="defaultCheck1">
                                Robotic Process Automation
                            </label>
                        </div>
                        <div class="">
                            <label for=""><b>Other</b></label><br>
                            <textarea class="" id="mensaje" placeholder="" required></textarea>
                        </div>
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
                    <label for="resultadoI">Resultado de Idiomas</label>
                    <input type="text" class="form-control" id="resultadoI" name="resultadoI" placeholder="RESULTADO SOLO SI ES REQUERIDO" required>
                </div>
                <div class="col-sm-6">
                    <label for="inteligenciaE">Inteligencia Emocional</label>
                    <input type="text" class="form-control" id="inteligenciaE" name="inteligenciaE" placeholder=" FUENTE DE RECLUTAMIENTO" required>
                </div>
                <div class="col-sm-3">
                    <label for="candidatoU">¿Es candidato único?</label>
                    <select class="form-control" id="candidatou" name="candidatoU" required>
                        <option value="no">NO</option>
                        <option value="si">SI</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-12">
                    <label for="explicacion">Explica tu Seleccion</label>
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
            <div class="container">
                <h1 class="tituloc">Concepto (Resumen de la Valoración)</h1>
                <div class="casilla">
                    <div class="form-group row">
                        <div class="form-check form-check-inline">
                            <input type="checkbox" class="form-check-input" id="adecuado" value="si" name="adecuado" required>
                            <label class="form-check-label minimal" for="defaultCheck1">Adecuado(a)</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input " type="checkbox" value="si" id="adecuadoP" name="adecuadoP" required>
                            <label class="form-check-label minimal" for="defaultCheck1">
                                Adecuado(a) para otro cargo
                            </label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input type="checkbox" class="form-check-input derecha" id="parcialmente" value="si" name="parcialmente" required>
                            <label class="form-check-label minimal" for="defaultCheck1"> Parcialmente
                                adecuado(a)</label>
                        </div>

                    </div>
                    <div class="form-group row">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" value="si" id="primera" name="primera" required>
                            <label class="form-check-label" for="defaultCheck1">
                                Primera Opción
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" value="si" id="segunda" name="segunda" required>
                            <label class="form-check-label" for="defaultCheck1">
                                Segunda Opción
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input derecha" type="checkbox" value="si" id="noA" name="noA" required>
                            <label class="form-check-label" for="defaultCheck1">
                                No Adecuado(a)
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <!-- <div class="col-sm-6"> -->
                    <label class="titulocp" for="concepto">Concepto Psicóloga</label><br><br>
                    <textarea class="campo form-control" onKeyUp="Habilitar()" name="concepto" id="concepto" placeholder="¿Cual es tu Concepto?" required></textarea>
                </div>
            </div>

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