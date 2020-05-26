<?php include "../config.php";
sessionValidate();
require_once "../Model/conexioon.php";

$cc = $_GET['cc'];
$query = "SELECT * FROM entrevistapsicologica where cc = $cc and terminado = 'False'";
$rta = $objCnx->query($query);
?>
<link href="../vendor/fontawesome-free/css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="../css/style.css" rel="stylesheet" type="text/css">

<div class="container">
    <div class="text-center">
        <h1 class="jumbotron">Entrevista Psicológica</h1>
    </div>
    <script>
        function seguro() {
            window.onbeforeunload = function() {
                return "¿Estás seguro que deseas salir de la actual página?"
            }
        }
    </script>
    <a href="principal.php" class="btn btn-danger btn-sm" style="width: 100%" onclick="seguro()">Salir</a>
    <form id="regiration_form" novalidate action="../Controller/ValidarActualizarEntrevistaPs.php" method="post">

        <?php
        require_once "../Model/conexioon.php";
        $sql = "SELECT * FROM entrevistapsicologica where cc = $cc and terminado='False'";
        $rta = $objCnx->query($sql);
        while ($datos = $rta->fetch_array()) {
        ?>

            <h2 style="color: black"><b>Datos</b></h2><br>
            <div class="form-group row">
                <div class="col-sm-12">
                    <label>Nombre Completo</label>
                    <input class="form-control form-control-user" value="<?php echo $datos['nombre'] ?>" readonly>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-4">
                    <label>Cédula</label>
                    <input class="form-control form-control-user" id="cc" name="cc" value="<?php echo $datos['cc'] ?>" readonly>
                </div>
                <div class="col-sm-4">
                    <label>Línea de Negocio</label>
                    <input class="form-control form-control-user" value="<?php echo $datos['dependencia'] ?>" readonly>
                </div>
                <div class="form-group row">
                    <div class="col-sm-4">
                        <label>Cargo al que aspira</label>
                        <input class="form-control form-control-user" value="<?php echo $datos['cargoAspira'] ?>" readonly>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-6">
                    <label>Teléfono</label>
                    <input class="form-control form-control-user" value="<?php echo $datos['telefono'] ?>" readonly>
                </div>
                <div class="col-sm-6">
                    <label class="input-group">Aspiración Salarial (Promedio Anual)</label>
                    <input class="form-control form-control-user" value="<?php echo $datos['aspiracionSal'] ?>" readonly>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-4">
                    <label>Fecha de la Entrevista</label>
                    <input class="form-control form-control-user" value="<?php echo $datos['fechaEntrevista'] ?>" readonly>
                </div>
                <div class="col-sm-4">
                    <label>Entrevistador(a)</label>
                    <input class="form-control form-control-user" value="<?php echo $datos['psicologa'] ?>" readonly>
                </div>
                <div class="col-sm-4">
                    <label>Cargo</label>
                    <input class="form-control form-control-user" value="<?php echo $datos['cargo'] ?>" readonly>
                </div>
            </div>
            <h2>Comportamientos</h2>
            <div class="form-group row">
                <div class="col-sm-3">
                    <label>Responsabilidad</label>
                    <input class="form-control" value="<?php echo $datos['responsabilidad'] ?>" readonly>
                </div>
                <div class="col-sm-3">
                    <label>Productividad</label>
                    <input class="form-control" value="<?php echo $datos['productividad'] ?>" readonly>
                </div>
                <div class="col-sm-3">
                    <label>Gestión de Cambio</label>
                    <input class="form-control" value="<?php echo $datos['gestionCambio'] ?>" readonly>
                </div>
                <div class="col-sm-3">
                    <label>Innovación</label>
                    <input class="form-control" value="<?php echo $datos['innovacion'] ?>" readonly>
                </div>
                <div class="col-sm-6">
                    <label>Resiliencia</label>
                    <input class="form-control" value="<?php echo $datos['resiliencia'] ?>" readonly>
                </div>
                <div class="col-sm-6">
                    <label>Confianza</label>
                    <input class="form-control" value="<?php echo $datos['confianza'] ?>" readonly>
                </div>
            </div>

            <?php
            function check($valor)
            {
                if ($valor == 'SI') {
                    echo "<i class='fas fa-check' style='color: green;'></i>";
                } else {
                    echo "<i class='fas fa-times' style='color: red;'></i>";
                }
            }
            ?>

            <div class="contenedor">
                <div>
                    <h3 class="titulo" style="color: black"><b>Digital Skills- Self-assessment</b></h3>
                    <div class="contenedor1">
                        <div>
                            <h5 class="titulo2" style="color: black"><b>Working Tools & Methodologies</b></h5>
                            <div>
                                <?php check($datos['dswm1']) ?> <label>MS Office basics (Word, Excel,</label>
                                <label class="texto">Powerpoint)</label>
                            </div>
                            <div>
                                <?php check($datos['dswm2']) ?> <label>
                                    MS Office advanced (Access, Project)
                                </label>
                            </div>
                            <?php check($datos['dswo3']) ?> <label> Outlook</label>
                        </div>
                        <div>
                            <?php check($datos['dswc4']) ?> <label> Communication tools (Teams, Yammer)</label>
                        </div>
                        <div>
                            <?php check($datos['dswp5']) ?> <label> Project Management</label>
                        </div>
                        <div>
                            <?php check($datos['dswa6']) ?> <label> Agile</label>
                        </div>
                        <div>
                            <?php check($datos['dswd7']) ?> <label> Desing thinking</label>
                        </div>
                        <div>
                            <label for="text1"><b>Other</b></label><br>
                            <textarea readonly><?php echo $datos['other1'] ?></textarea>
                        </div><br><br><br><br>
                        <!-- </div> -->
                        <!-- <div> -->
                        <h5 class="titulo3" style="color: black"><b>Soft Digital Skills</b></h5>
                        <div>
                            <?php check($datos['dssk1']) ?> <label>
                                Knowledge Networking
                            </label>
                        </div>
                        <div>
                            <?php check($datos['dssp2']) ?> <label>
                                Problem Solving
                            </label>
                        </div>
                        <div>
                            <?php check($datos['dssv3']) ?> <label>
                                Virtual Communication
                            </label>
                        </div>
                        <div>
                            <?php check($datos['dssd4']) ?> <label>
                                Digital Awareness
                            </label>
                        </div>
                        <div>
                            <?php check($datos['dssd5']) ?> <label>
                                Data and device security
                            </label>
                        </div>
                        <div>
                            <?php check($datos['dssc6']) ?> <label>
                                Content creation
                            </label>
                        </div>
                        <div>
                            <label>Other</label><br>
                            <textarea readonly><?php echo $datos['other2'] ?></textarea>
                        </div><br><br>
                        <!-- </div> -->
                        <!-- <div> -->
                        <h5 class="titulo4" style="color: black"><b>Digital Hard Skills</b></h5>
                        <div>
                            <?php check($datos['dsdp1']) ?> <label>
                                Programming languages
                            </label>
                        </div>
                        <div>
                            <?php check($datos['dsdc2']) ?> <label>
                                Cloud Services
                            </label>
                        </div>
                        <div>
                            <?php check($datos['dsdi3']) ?> <label>
                                It System Management and
                            </label>
                            <label class="texto">Enterprise architecture</label>
                        </div>
                        <div>
                            <?php check($datos['dsdc4']) ?> <label>
                                Cyber Security
                            </label>
                        </div>
                        <div>
                            <?php check($datos['dsdu5']) ?> <label>
                                UX/UI Desing
                            </label>
                        </div>
                        <div>
                            <?php check($datos['dsdm6']) ?> <label>
                                Mobile
                            </label>
                        </div>
                        <div>
                            <?php check($datos['dsdd7']) ?> <label>
                                Data & Analytics
                            </label>
                        </div>
                        <div>
                            <?php check($datos['dsdi8']) ?> <label>
                                Internet of Things
                            </label>
                        </div>
                        <div>
                            <?php check($datos['dsdi9']) ?> <label>
                                It Plataforms
                            </label>
                        </div>
                        <div>
                            <?php check($datos['dsdr10']) ?> <label>
                                Robotic Process Automation
                            </label>
                        </div>
                        <div>
                            <label><b>Other</b></label><br>
                            <textarea readonly><?php echo $datos['other3'] ?></textarea>
                        </div>
                    </div>
                </div>
            </div>

            <h2 style="color: black"><b>Información de contacto</b></h2><br><br>
            <div class="form-group row">
                <div class="col-sm-6">
                    <label>Comportamiento Ético</label>
                    <input class="form-control" value="<?php echo $datos['comportamientoEtico'] ?>" readonly>
                </div>
                <div class="col-sm-6">
                    <label>Fuente de Reclutamiento</label>
                    <input class="form-control" value="<?php echo $datos['fuenteR'] ?>" readonly>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-3">
                    <label>Nivel del Inglés</label>
                    <input class="form-control" value="<?php echo $datos['resultadoI'] ?>" readonly>
                </div>
                <div class="col-sm-6">
                    <label for="inteligenciaE">Inteligencia Emocional</label>
                    <input class="form-control" value="<?php echo $datos['inteligenciaE'] ?>" readonly>
                </div>
                <div class="col-sm-3">
                    <label>¿Es candidato único?</label>
                    <input class="form-control" value="<?php echo $datos['candidatoU'] ?>" readonly>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-12">
                    <label for="explicacion">Explica tu Elección</label>
                    <textarea class="form-control" readonly><?php echo $datos['explicacion'] ?></textarea>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-12">
                    <label>Resolución de Problemas Complejos</label>
                    <input class="form-control" value="<?php echo $datos['resolucionProblemas'] ?>" readonly>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-12">
                    <label for="observaciones">Observaciones</label>
                    <textarea class="form-control" readonly><?php echo $datos['observaciones'] ?></textarea>
                </div>
            </div>
            <div class="container">
                <h1>Concepto (Resumen de la Valoración)</h1>
                <br>
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
                <!-- <div class="col-sm-6"> -->
                <label style="color: black"><b>Concepto Psicóloga</b></label><br><br>
                <textarea class="campo form-control" onKeyUp="Habilitar()" name="concepto" id="concepto" placeholder="¿Cual es tu Concepto?" required></textarea>
            </div>
        <?php
        } ?>
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

        <input type="submit" name="boton" class="submit btn btn-success" value="Registrar" id="boton" /><br>


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

<!-- <script type="text/javaScript" src="../vendor/.js"></script> -->