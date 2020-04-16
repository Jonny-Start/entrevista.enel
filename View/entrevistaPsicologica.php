<?php include "../config.php";
sessionValidate();
?>

<?php include FOLDER_TEMPLATE . "head.php"; ?>
<link href="../vendor/fontawesome-free/css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="../vendor/fontawesome-free/css/regular.css" rel="stylesheet" type="text/css">
<style type="text/css">
  #regiration_form fieldset:not(:first-of-type) {
    display: none;
  }
</style>
<div class="container">
  <div class="text-center">
    <h1 class="jumbotron">Entrevista Psicológica</h1>
  </div>
  <div class="progress">
    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
  </div>
  <h3><a href="principal.php">Salir</a></h3>
  <form id="regiration_form" novalidate action="../Controller/ValidarinsertarEntrevistaPs.php" method="post">
    <fieldset>
      <h2>Paso 1: Datos</h2>
      <div class="form-group row">
        <div class="col-sm-6">
          <label for="apellido">Nombre Completo</label>
          <input type="Text" class="form-control" id="nombre" name="nombre" placeholder="NOMBRE COMPLETO" required>
        </div>
        <div class="col-sm-6">
          <label for="cedula">Cédula</label>
          <input type="number" class="form-control" id="cc" name="cc" placeholder="NUMERO DE DOCUMENTO" required>
        </div>
      </div>

      <div class="form-group row">
        <div class="col-sm-4">
          <label for="fecha_nac">Fecha de nacimiento</label>
          <input type="date" class="form-control form-control-user" id="fecha_nac" name="fecha_nac" placeholder="Fecha Nacimiento" max="2005-01-01" required>
        </div>
        <div class="col-sm-4">
          <label for="dependencia">Dependencia</label>
          <input type="text" class="form-control form-control-user" id="dependencia" name="dependencia" placeholder="DEPENDENCIA" required>
        </div>
        <div class="col-sm-4">
          <label for="cargo">Cargo</label>
          <input type="text" class="form-control form-control-user" id="cargo" name="cargo" placeholder="CARGO" required>
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
          <label for="aspiracionSal">Aspiración Salarial</label>
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
      <input type="button" name="data[password]" class="next btn btn-info" value="Siguiente" />
    </fieldset>

    <fieldset>
      <h2> Paso 2: Comportamientos</h2>
      <div class="form-group row">
        <div class="col-sm-3">
          <label for="responsabilidad">Responsabilidad</label>
          <input type="number" class="form-control" name="responsabilidad" id="responsabilidad" placeholder="1-5" min="1" max="5" required>
        </div>
        <div class="col-sm-3">
          <label for="productividad">Productividad</label>
          <input type="number" class="form-control" name="productividad" id="productividad" placeholder="1-5" min="1" max="5" required>
        </div>
        <div class="col-sm-3">
          <label for="gestionCambio">Gestión de Cambio</label>
          <input type="number" class="form-control" name="gestionCambio" id="gestionCambio" placeholder="1-5" min="1" max="5" required>
        </div>
        <div class="col-sm-3">
          <label for="innovacion">Innovación</label>
          <input type="number" class="form-control" name="innovacion" id="innovacion" placeholder="1-5" min="1" max="5" required>
        </div>
      </div>
      <div class="form-group row">
        <div class="col-sm-6">
          <label for="resiliencia">Resiliencia</label>
          <input type="number" class="form-control" name="resiliencia" id="resiliencia" placeholder="1-5" min="1" max="5" required>
        </div>
        <div class="col-sm-6">
          <label for="confianza">Confianza</label>
          <input type="number" class="form-control" name="confianza" id="confianza" placeholder="1-5" min="1" max="5" required>
        </div>
      </div>
      <input type="button" name="previous" class="previous btn btn-default" value="Previo" />
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
          <label for="explicacion">Explicación (si es candidato único)</label>
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
      <br>

      <div class="container">
        <h1 class="tituloc">Concepto (Resumen de la Valoración)</h1>
        <div class="casilla">
          <div class="form-group row">
                 <div class="form-check form-check-inline">
              <input type="checkbox" class="form-check-input" id="adecuado" value="si" name="adecuado" required>
              <label class="form-check-label" for="defaultCheck1">Adecuado(a)</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" value="si" id="adecuadoP" name="adecuadoP" required>
              <label class="form-check-label" for="defaultCheck1">
                Adecuado(a) para otro cargo
              </label>
            </div>

            <div class="form-check form-check-inline">
              <input type="checkbox" class="form-check-input" id="parcialmente" value="si" name="parcialmente" required>
              <label class="form-check-label" for="defaultCheck1"> Parcialmente adecuado(a)</label>
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
              <input class="form-check-input" type="checkbox" value="si" id="noA" name="noA" required>
              <label class="form-check-label" for="defaultCheck1">
                No Adecuado(a)
              </label>
            </div>
          </div>
        </div>
        <div class="form-group row">
          <!-- <div class="col-sm-6"> -->
          <label class="titulocp" for="concepto">Concepto Psicóloga</label><br><br>
          <textarea class="campo form-control" name="concepto" id="concepto" placeholder="¿Cual es tu Concepto?" required></textarea>
        </div>
      </div>

      <input type="button" name="previous" class="previous btn btn-default" value="Previo" />
      <input type="submit" name="button" class="submit btn btn-success" value="registrar" id="button" /><br>
    </fieldset>
     <?php 
                    if (isset($_GET["msj"])) {

                        if ($_GET["msj"]=="1") {
                          ?>
                            <script>
                            alert("SE REGISTRO CORRECTAMENTE");
                            </script>
                          <?php
                        }else if ($_GET["msj"]=="2")
                        {
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