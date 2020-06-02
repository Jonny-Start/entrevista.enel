// Progres SideBar
$(document).ready(function () {
    var current = 1,
        current_step, next_step, steps;
    steps = $("fieldset").length;
    $(".next").click(function () {
        current_step = $(this).parent();
        next_step = $(this).parent().next();
        next_step.show();
        current_step.hide();
        setProgressBar(++current);
    });
    $(".previous").click(function () {
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

// Desactivar Boton retroceso de la pestaña
window.onload = function () {
    window.location.hash = "no-back-button";
    window.location.hash = "Again-No-back-button";
    window.onhashchange = function () {
        window.location.hash = "no-back-button";
    }
}

// desactivar boton enter
function control(caracter) {
    caracter = (document.layers) ? caracter.which : event.keyCode;
    if (caracter == 13) {
        alert('Se ha pulsado la tecla Enter, esta tecla esta deshabilitada para este formulario');
        return false;
    }
}
document.onkeypress = control;

// validar campos vacios
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

// confirmar boton salir
function seguro() {
    window.onbeforeunload = function () {
        return "¿Estás seguro que deseas salir de la actual página?"
    }
}
//--------------------------??-------??----------??----------??--------------------??---------------??----//

function responsabilidad() {
    swal("Preguntas para la entrevista (Responsabilidad)", {
        buttons: {
            cancel: "Run away!",
            catch: {
                text: "Disparadoras",
                value: "catch",
            },
            defeat: true,
        },
    })
        .then((value) => {
            switch (value) {

                case "defeat":
                    swal("Pikachu fainted! You gained 500 XP!");
                    break;

                case "catch":
                    swal("Disparadoras", "Cuentanos un proyecto que hayas desarrollado con éxito. Objetivo: Se debe evaluar la gestión de recursos propios y de otros (planeo, Lidero bien, optimizó recursos) -----------------------------------------------------------------------------   -Cuentanos un proyecto fallido.      -¿Que rescatas de la experiencia vivida?      -¿Que podrias haber hecho y que no hiciste?",);
                break;

                default:
                    swal("Got away safely!");
            }
        });
}
function productividad() {
    swal("¡PRODUCTIVIDAD! ", " La productividad es la relación entre el resultado de una actividad productiva y los medios que han sido necesarios para obtener dicha producción. En el campo empresarial se define la productividad empresarial como el resultado de las acciones que se deben llevar a término para conseguir los objetivos de la empresa y un buen clima laboral, teniendo en cuenta la relación entre los recursos que se invierten para alcanzar los objetivos y los resultados de los mismos. ");
}
function gestionCambio() {
    swal("¡GESTION DEL CAMBIO! ", " Es la gestión de la continuidad es decir alcanzar nuevos objetivos pero también consolidar los ya conseguidos mediante un proceso de adaptación, comprensión del impacto a largo plazo y del plan de acción para lograr un óptimo cambio en las políticas, procesos y métodos de trabajo en una organización.");
}
function innovacion() {
    swal("¡INNOVACION! ", " Es la capacidad para modificar las cosas, incluso partiendo de formas o situaciones no pensadas con anterioridad. Implica idear soluciones nuevas y diferentes ante problemas o situaciones requeridas por el cargo, la compañía y la cultura organizacional. ");
}
function resiliencia() {
    swal("¡RESILIENCIA! ", " Capacidad humana de asumir con flexibilidad situaciones limite y sobreponerse a ellas. (RAE) Es la capacidad de recuperarse frente a la adversidad y aprender de ella. “La habilidad y capacidad de una persona para fortalecerse y recuperarse bajo condiciones de enorme stress y cambio Es la capacidad de las personas para sobreponerse a situaciones adversas y adaptarse rápidamente a cambios, ambientes laborales y personas, manteniendo los niveles de eficacia y efectividad.");
}
function confianza() {
    swal("¡CONFIANZA O INTELIGENCIA EMOCIONAL! ", " Es la capacidad de describrir, reconocer, manejar, crear motivación y gestionar las emociones  y sentimientos propios, lo cual permite gestionar adecuadamente las relaciones interpersonales y así mismo  adaptarse a las diferentes situaciones que impliquen emociones tanto positivas como negativas. ");
}


    // Swal.mixin({
    //     confirmButtonText: 'Complementarias &rarr;',
    //     showCancelButton: true,
    //     progressSteps: ['1', '2']
    // }).queue([
    //     {
    //         title: 'Disparadoras',
    //         text: 'Cuentanos un proyecto que hayas desarrollado con éxito. Objetivo: Se debe evaluar la gestión de recursos propios y de otros (planeo, Lidero bien, optimizó recursos)  -Cuentanos un proyecto fallido. -¿Que rescatas de la experiencia vivida? -¿Que podrias haber hecho y que no hiciste?'
    //     },
    //     {
    //         title: 'Pregunta 2',
    //         text: '¿Animal favorito?'
    //     }
    // ])