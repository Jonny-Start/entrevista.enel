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
            cancel: "Cancelar",
            catch: {
                text: "Disparadoras",
                value: "catch",
            },
            defeat: {
                text: "Complemento",
                value: "defeat",
            }
        },
    })
        .then((value) => {
            switch (value) {

                case "defeat":
                    swal("Complementarias", "-¿Dentro de su roll quienes son sus clientes? ___________ -¿Como mides la satisfacción con tu cliente? ____________ -¿Como generas un plan de acción para mejorar la satisfacción con tu cliente?_____________");
                    break;

                case "catch":
                    swal("Disparadoras", "Cuentanos un proyecto que hayas desarrollado con éxito. Objetivo: Se debe evaluar la gestión de recursos propios y de otros (planeo, Lidero bien, optimizó recursos) -----------------------------------------------------------------------------   -Cuentanos un proyecto fallido.___________________ -¿Que rescatas de la experiencia vivida?______________ -¿Que podrias haber hecho y que no hiciste?____________");
                    break;

                default:
                    swal("¡Si tienes dudas, aquí estare!");
            }
        });
}
function productividad() {
    swal("Preguntas para la entrevista (Productividad)", {
        buttons: {
            cancel: "Cancelar",
            catch: {
                text: "Disparadoras",
                value: "catch",
            },
            defeat: {
                text: "Complemento",
                value: "defeat",
            }
        },
    })
        .then((value) => {
            switch (value) {

                case "defeat":
                    swal("Complementarias", "-¿A cuales redes estas afiliados? (red que promueva el conocimiento) -¿Como te mantienes actualizado e informado?");
                    break;

                case "catch":
                    swal("Disparadoras", "-Conclusión a la que se llega a través de la entrevista si la persona hace o no inversión en su propio desarrollo. -¿Cual fue la última retroalimentación que recibiste? -¿Que te resaltaron en tu ultima evaluación?,  -¿Que te invitaron a mejorar? -¿Que acciones realizaste para desarrollar?");
                    break;

                default:
                    swal("¡Si tienes dudas, aquí estare!");
            }
        });
}
function gestionCambio() {
    swal("Preguntas para la entrevista (Gestion del Cambio)", {
        buttons: {
            cancel: "Cancelar",
            catch: {
                text: "Disparadoras",
                value: "catch",
            },
            defeat: {
                text: "Complemento",
                value: "defeat",
            }
        },
    })
        .then((value) => {
            switch (value) {

                case "defeat":
                    swal("-¿Cuentanos un cambio organizacional que hayas vivido?. -Como vendes la idea que esta nueva situación es adecuada o favorece a todo el grupo.");
                    break;

                case "catch":
                    swal("-¿Cuentanos un gran cambio que has tenido en tu vida?");
                    break;

                default:
                    swal("¡Si tienes dudas, aquí estare!");
            }
        });
}
function innovacion() {
    swal("Preguntas para la entrevista (Innovacion)", {
        buttons: {
            cancel: "Cancelar",
            catch: {
                text: "Disparadoras",
                value: "catch",
            },
            defeat: {
                text: "Complemento",
                value: "defeat",
            }
        },
    })
        .then((value) => {
            switch (value) {

                case "defeat":
                    swal("-¿Cuales son los temas que más te gustan para pasar tu tiempo libre?, por ejemplo Lectura o Actividades culturales. -¿Cual fue la situación más novedosa, diferente o inesperada que sucedio en  tu vida, y como la enfrentaste?");
                    break;

                case "catch":
                    swal("-¿Cuales son las oportunidades de mejoramiento que identificas o identificaste en tu actual area del trabajo? Dime una. -¿Cual es el benficio para la empresa?");
                    break;

                default:
                    swal("¡Si tienes dudas, aquí estare!");
            }
        });
}
function resiliencia() {
    swal("Preguntas para la entrevista (Resiliencia)", {
        buttons: {
            cancel: "Cancelar",
            catch: {
                text: "Disparadoras",
                value: "catch",
            },
            defeat: {
                text: "Complemento",
                value: "defeat",
            }
        },
    })
        .then((value) => {
            switch (value) {

                case "defeat":
                    swal("No se requieren preguntas puesto que este criterio ya fue evaluado previamente en las pruebas psicotécnicas.");
                    break;

                case "catch":
                    swal("-¿Cual fue el evento más dificil de tu vida? ¿Que pasó? ¿Qué hiciste? ¿Como percibiste que habias superado este evento? ¿Que aprendiste de este evento en tu vida?  Observación: Que tanto tiempo esta persona estuvo en la fase más dificil del evento, cada cuanto te pasa esto y cada cuanto te sientes así.");
                    break;

                default:
                    swal("¡Si tienes dudas, aquí estare!");
            }
        });
}
function confianza() {
    swal("Preguntas para la entrevista (Confianza)", {
        buttons: {
            cancel: "Cancelar",
            catch: {
                text: "Disparadoras",
                value: "catch",
            },
            defeat: {
                text: "Complemento",
                value: "defeat",
            }
        },
    })
        .then((value) => {
            switch (value) {

                case "defeat":
                    swal("-¿En algún momento has asumido rol de tutor o mentor? Cuentanos una experiencia donde te hayas visto enfrentado a transferir conocimiento? Como lo hiciste?, ¿Cual fue el resultado? -¿Como Inspiras a tu equipo? -¿Como haces a que tu equipo encuentre sentido a lo que hace? -Cuentanos un evento donde hayas tenido oportunidad de dar feedback a tus compañeros de trabajo,¿ Que tan frecuente sucede? -¿Como logras que la gente te siga y haga lo que tenga que hacer? -Cuentame un caso que evidencia que hayas inspirado a tu equipo? -¿Como logras que tus amigos hagan lo que tu crees que deben hacer?");
                    break;

                case "catch":
                    swal("¿Como es la comunicación con tus jefes, compañeros y colaboradores de trabajo? Enfocarnos en retroalimentación, oportunidad, manejo del error, periodicidad de reuniones y segurimiento. Asertividad. -Para el caso de pares se identifica si se puede hacer sinergia, si se cultiva los vinculos, o se mantiene de manera saludable, para que cuando yo lo necesito sea más fluido.");
                    break;

                default:
                    swal("¡Si tienes dudas, aquí estare!");
            }
        });
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