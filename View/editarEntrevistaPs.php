<?php include "../config.php";
sessionValidate();

if (isset($_SESSION["rol"])) {
    switch ($_SESSION['rol']) {
        case 1:
            break;
        case 2:
            break;
        case 3:
            header('location: ../View/401.php');
            break;
        case 4:
            header('location: ../View/401.php');
            break;
    }
}
require_once "../Model/conexioon.php";

$cc = $_GET['cc'];
$query = "SELECT * FROM entrevistapsicologica where cc = $cc and terminado = 'True'";
$rta = $objCnx->query($query);
?>
<link href="../vendor/fontawesome-free/css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="../css/style.css" rel="stylesheet" type="text/css">
<div class="container">
    <div class="text-center">
        <h1 class="jumbotron">Entrevista Psicológica</h1>
    </div>
    <a href="principal.php" class="btn btn-danger btn-sm" style="width: 100%" onclick="seguro()">Salir</a>
    <form id="regiration_form" novalidate action="../Controller/controllerActualizarEntrevista.php" method="post">

        <?php
        require_once "../Model/conexioon.php";
        $sql = "SELECT * FROM entrevistapsicologica where cc = $cc and modificar = 'True'";
        $rta = $objCnx->query($sql);
        while ($datos = $rta->fetch_array()) {
        ?>
            <h2 style="color: black"><b>Datos</b></h2><br>
            <div class="form-group row">
                <div class="col-sm-12">
                    <label>Nombre Completo</label>
                    <input class="form-control form-control-user" id="nombre" name="nombre" value="<?php echo $datos['nombre'] ?>">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-4">
                    <label>Cédula</label>
                    <input class="form-control form-control-user" id="cc" name="cc" value="<?php echo $datos['cc'] ?>">
                </div>
                <div class="col-sm-4">
                    <label>Línea de Negocio</label>
                    <input class="form-control form-control-user" id="dependencia" name="dependencia" value="<?php echo $datos['dependencia'] ?>">
                </div>
                <div class="form-group row">
                    <div class="col-sm-4">
                        <label>Cargo al que aspira</label>
                        <input class="form-control form-control-user" id="cargoAspira" name="cargoAspira" value="<?php echo $datos['cargoAspira'] ?>">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-6">
                    <label>Teléfono</label>
                    <input class="form-control form-control-user" id="telefono" name="telefono" value="<?php echo $datos['telefono'] ?>">
                </div>
                <div class="col-sm-6">
                    <label class="input-group">Aspiración Salarial (Promedio Anual)</label>
                    <input class="form-control form-control-user" id="aspiracionSal" name="aspiracionSal" value="<?php echo $datos['aspiracionSal'] ?>">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-4">
                    <label>Fecha de la Entrevista</label>
                    <input class="form-control form-control-user" id="fechaEntrevista" name="fechaEntrevista" value="<?php echo $datos['fechaEntrevista'] ?>">
                </div>
                <div class="col-sm-4">
                    <label>Entrevistador(a)</label>
                    <input class="form-control form-control-user" id="psicologa" name="psicologa" value="<?php echo $datos['psicologa'] ?>">
                </div>
                <div class="col-sm-4">
                    <label>Cargo</label>
                    <input class="form-control form-control-user" id="cargo" name="cargo" value="<?php echo $datos['cargo'] ?>">
                </div>
            </div>
            <h2>Comportamientos</h2>
            <div class="form-group row">
                <div class="col-sm-3">
                    <label>Responsabilidad</label>
                    <input class="form-control" id="responsabilidad" name="responsabilidad" value="<?php echo $datos['responsabilidad'] ?>">
                </div>
                <div class="col-sm-3">
                    <label>Productividad</label>
                    <input class="form-control" id="productividad" name="productividad" value="<?php echo $datos['productividad'] ?>">
                </div>
                <div class="col-sm-3">
                    <label>Gestión de Cambio</label>
                    <input class="form-control" id="gestionCambio" name="gestionCambio" value="<?php echo $datos['gestionCambio'] ?>">
                </div>
                <div class="col-sm-3">
                    <label>Innovación</label>
                    <input class="form-control" id="innovacion" name="innovacion" value="<?php echo $datos['innovacion'] ?>">
                </div>
                <div class="col-sm-6">
                    <label>Resiliencia</label>
                    <input class="form-control" id="resiliencia" name="resiliencia" value="<?php echo $datos['resiliencia'] ?>">
                </div>
                <div class="col-sm-6">
                    <label>Confianza</label>
                    <input class="form-control" id="confianza" name="confianza" value="<?php echo $datos['confianza'] ?>">
                </div>
            </div>
            <?php
            function chulo($d , $id){
                if($d == 'SI' || $d == 'si' || $d == 'on'){
                    echo "<script type='text/javascript'>
                    console.log('$d');
                    var dato = document.querySelector('#$id');
                    console.log(dato);
                    dato.setAttribute('checked','');
                    </script>";
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
                            <input type='checkbox' name='dswm1' id="dswm1"><?php chulo($datos['dswm1'],'dswm1') ?> <label>MS Office basics (Word, Excel,</label>
                                <label class="texto">Powerpoint)</label>
                            </div>
                            <div>
                            <input type='checkbox' name='dswm2' id="dswm2"><?php chulo($datos['dswm2'],'dswm2') ?> <label>
                                    MS Office advanced (Access, Project)
                                </label>
                            </div>
                            <input type='checkbox' name='dswo3' id="dswo3"><?php chulo($datos['dswo3'],'dswo3') ?> <label> Outlook</label>
                        </div>
                        <div>
                            <input type='checkbox' name='dswc4' id="dswc4"><?php chulo($datos['dswc4'],'dswc4') ?> <label> Communication tools (Teams, Yammer)</label>
                        </div>
                        <div>
                            <input type='checkbox' name='dswp5' id="dswp5"><?php chulo($datos['dswp5'],'dswp5') ?> <label> Project Management</label>
                        </div>
                        <div>
                            <input type='checkbox' name='dswa6' id="dswa6"><?php chulo($datos['dswa6'],'dswa6') ?> <label> Agile</label>
                        </div>
                        <div>
                            <input type='checkbox' name='dswd7' id="dswd7"><?php chulo($datos['dswd7'],'dswd7') ?> <label> Desing thinking</label>
                        </div>
                        <div>
                            <label for="text1"><b>Other</b></label><br>
                            <textarea id="other1" name="other1"><?php echo $datos['other1'] ?></textarea>
                        </div><br><br><br><br>
                        <!-- </div> -->
                        <!-- <div> -->
                        <h5 class="titulo3" style="color: black"><b>Soft Digital Skills</b></h5>
                        <div>
                            <input type='checkbox' name='dssk1' id="dssk1"><?php chulo($datos['dssk1'],'dssk1') ?> <label>
                                Knowledge Networking
                            </label>
                        </div>
                        <div>
                            <input type='checkbox' name='dssp2' id="dssp2"><?php chulo($datos['dssp2'],'dssp2') ?> <label>
                                Problem Solving
                            </label>
                        </div>
                        <div>
                            <input type='checkbox' name='dssv3' id="dssv3"><?php chulo($datos['dssv3'],'dssv3') ?> <label>
                                Virtual Communication
                            </label>
                        </div>
                        <div>
                            <input type='checkbox' name='dssd4' id="dssd4"><?php chulo($datos['dssd4'],'dssd4') ?> <label>
                                Digital Awareness
                            </label>
                        </div>
                        <div>
                            <input type='checkbox' name='dssd5' id="dssd5"><?php chulo($datos['dssd5'],'dssd5') ?> <label>
                                Data and device security
                            </label>
                        </div>
                        <div>
                            <input type='checkbox' name='dssc6' id="dssc6"><?php chulo($datos['dssc6'],'dssc6') ?> <label>
                                Content creation
                            </label>
                        </div>
                        <div>
                            <label>Other</label><br>
                            <textarea id="other2" name="other2"><?php echo $datos['other2'] ?></textarea>
                        </div><br><br><br><br><br>
                        <!-- </div> -->
                        <!-- <div> -->
                        <h5 class="titulo4" style="color: black"><b>Digital Hard Skills</b></h5>
                        <div>
                            <input type='checkbox' name='dsdp1' id="dsdp1"><?php chulo($datos['dsdp1'],'dsdp1') ?> <label>
                                Programming languages
                            </label>
                        </div>
                        <div>
                            <input type='checkbox' name='dsdc2' id="dsdc2"><?php chulo($datos['dsdc2'],'dsdc2') ?> <label>
                                Cloud Services
                            </label>
                        </div>
                        <div>
                            <input type='checkbox' name='dsdi3' id="dsdi3"><?php chulo($datos['dsdi3'],'dsdi3') ?> <label>
                                It System Management and
                            </label>
                            <label class="texto">Enterprise architecture</label>
                        </div>
                        <div>
                            <input type='checkbox' name='dsdc4' id="dsdc4"><?php chulo($datos['dsdc4'],'dsdc4') ?> <label>
                                Cyber Security
                            </label>
                        </div>
                        <div>
                            <input type='checkbox' name='dsdu5' id="dsdu5"><?php chulo($datos['dsdu5'],'dsdu5') ?> <label>
                                UX/UI Desing
                            </label>
                        </div>
                        <div>
                            <input type='checkbox' name='dsdm6' id="dsdm6"><?php chulo($datos['dsdm6'],'dsdm6') ?> <label>
                                Mobile
                            </label>
                        </div>
                        <div>
                            <input type='checkbox' name='dsdd7' id="dsdd7"><?php chulo($datos['dsdd7'],'dsdd7') ?> <label>
                                Data & Analytics
                            </label>
                        </div>
                        <div>
                            <input type='checkbox' name='dsdi8' id="dsdi8"><?php chulo($datos['dsdi8'],'dsdi8') ?> <label>
                                Internet of Things
                            </label>
                        </div>
                        <div>
                            <input type='checkbox' name='dsdi9' id="dsdi9"><?php chulo($datos['dsdi9'],'dsdi9') ?> <label>
                                It Plataforms
                            </label>
                        </div>
                        <div>
                            <input type='checkbox' name='dsdr10' id="dsdr10"><?php chulo($datos['dsdr10'],'dsdr10') ?> <label>
                                Robotic Process Automation
                            </label>
                        </div>
                        <div>
                            <label><b>Other</b></label><br>
                            <textarea id="other3" name="other3"><?php echo $datos['other3'] ?></textarea>
                        </div>
                    </div>
                </div>
            </div>

            <h2 style="color: black"><b>Información de contacto</b></h2><br><br>
            <div class="form-group row">
                <div class="col-sm-6">
                    <label>Comportamiento Ético</label>
                    <input class="form-control" id="comportamientoEtico" name="comportamientoEtico" value="<?php echo $datos['comportamientoEtico'] ?>">
                </div>
                <div class="col-sm-6">
                    <label>Fuente de Reclutamiento</label>
                    <input class="form-control" id="fuenteR" name="fuenteR" value="<?php echo $datos['fuenteR'] ?>">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-3">
                    <label>Nivel del Inglés</label>
                    <input class="form-control" id="resultadoI" name="resultadoI" value="<?php echo $datos['resultadoI'] ?>">
                </div>
                <div class="col-sm-6">
                    <label for="inteligenciaE">Inteligencia Emocional</label>
                    <input class="form-control" id="inteligenciaE" name="inteligenciaE" value="<?php echo $datos['inteligenciaE'] ?>">
                </div>
                <div class="col-sm-3">
                    <label>¿Es candidato único?</label>
                    <input class="form-control" id="candidatoU" name="candidatoU" value="<?php echo $datos['candidatoU'] ?>">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-12">
                    <label for="explicacion">Explica tu Elección</label>
                    <textarea id="explicacion" name="explicacion"  class="form-control"><?php echo $datos['explicacion'] ?></textarea>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-12">
                    <label>Resolución de Problemas Complejos</label>
                    <input class="form-control" id="resolucionProblemas" name="resolucionProblemas" value="<?php echo $datos['resolucionProblemas'] ?>">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-12">
                    <label for="observaciones">Observaciones</label>
                    <textarea id="observaciones" name="observaciones" class="form-control"><?php echo $datos['observaciones'] ?></textarea>
                </div>
            </div>
            <div class="container">
                <h1>Concepto (Resumen de la Valoración)</h1>
                <br>
                <div class="contenedor1">
                    <div class="casilla">
                        <div class="form-group row">
                            <div class="form-check form-check-inline">
                                <input type="checkbox" class="form-check-input" id="adecuado" value="si" name="adecuado" required><?php chulo($datos['adecuado'],'adecuado')?>
                                <label class="form-check-label minimal">Adecuado(a)</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input " type="checkbox" value="si" id="adecuadoP" name="adecuadoP" required><?php chulo($datos['adecuadoP'],'adecuadoP')?>
                                <label class="form-check-label minimal">
                                    Adecuado(a) para otro cargo
                                </label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input type="checkbox" class="form-check-input derecha" id="parcialmente" value="si" name="parcialmente" required><?php chulo($datos['parcialmente'],'parcialmente')?>
                                <label class="form-check-label minimal"> Parcialmente
                                    adecuado(a)</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" value="si" id="primera" name="primera" required><?php chulo($datos['primera'],'primera')?>
                                <label class="form-check-label">
                                    Primera Opción
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" value="si" id="segunda" name="segunda" required><?php chulo($datos['segunda'],'segunda')?>
                                <label class="form-check-label">
                                    Segunda Opción
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input derecha" type="checkbox" value="si" id="noA" name="noA" required><?php chulo($datos['noA'],'noA')?>
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
                <textarea class="campo form-control" onKeyUp="Habilitar()" name="concepto" id="concepto" placeholder="¿Cual es tu Concepto?" required><?php echo $datos['concepto'] ?></textarea>
            </div>
            <input type="hidden" id="co" name="co" value="<?php echo $_SESSION['co'] ?>">
            <input type="hidden" id="terminado" name="terminado" value="True">
            <input type="hidden" id="modificar" name="modificar" value="False">
        <?php
        } ?>
        <input type="submit" name="boton" class="submit btn btn-success" value="ACTUALIZAR" id="boton" /><br>
    </form>
</div>
</div>
<?php include FOLDER_TEMPLATE . "scripts.php"; ?>

<script type="text/javaScript" src="../vendor/.js"></script>