"use strict"

// Consultar cc en AyP
var botonP = document.querySelector('#botonP');
var divP = document.querySelector('#divP');
var cc = document.querySelector('#cc');

cc.addEventListener('focus', () => {
    botonP.style.display = 'block';
    divP.classList.remove('col-sm-4');
    divP.classList.add('col-sm-3');
});
cc.addEventListener("blur", () => {
    tiempo = setTimeout(() => {
        botonP.style.display = 'none';
        divP.classList.remove('col-sm-3');
        divP.classList.add('col-sm-4');

    }, 300);
});
var validarP = document.querySelector('#validarP');
validarP.addEventListener('click', () => {
    var url = "../View/consultarccP.php?" + cc.value;
    window.open(url, "", "width=400, height=300"); // darle tamaños a la ventana
});

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
                    swal("Complementarias", "  1) ¿Dentro de su roll quienes son sus clientes?  2) ¿Como mides la satisfacción con tu cliente?  3) ¿Como generas un plan de acción para mejorar la satisfacción con tu cliente?");
                    break;

                case "catch":
                    swal("Disparadoras", "  1) Cuentanos un proyecto que hayas desarrollado con éxito. Objetivo: Se debe evaluar la gestión de recursos propios y de otros (planeo, Lidero bien, optimizó recursos)   2) Cuentanos un proyecto fallido  3) ¿Que rescatas de la experiencia vivida?  4) ¿Que podrias haber hecho y que no hiciste?");
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
                    swal("Complementarias", "  1) ¿A cuales redes estas afiliados? (red que promueva el conocimiento)  2) ¿Como te mantienes actualizado e informado?");
                    break;

                case "catch":
                    swal("Disparadoras", "  1) Conclusión a la que se llega a través de la entrevista si la persona hace o no inversión en su propio desarrollo.  2) ¿Cual fue la última retroalimentación que recibiste?  3) ¿Que te resaltaron en tu ultima evaluación?,   4) ¿Que te invitaron a mejorar?  5) ¿Que acciones realizaste para desarrollar?");
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
                    swal("Complementarias","  1) ¿Cuentanos un cambio organizacional que hayas vivido?.  2) Como vendes la idea que esta nueva situación es adecuada o favorece a todo el grupo.");
                    break;

                case "catch":
                    swal("Disparadoras","  1) ¿Cuentanos un gran cambio que has tenido en tu vida?");
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
                    swal("Complementarias","  1) ¿Cuales son los temas que más te gustan para pasar tu tiempo libre?, por ejemplo Lectura o Actividades culturales.  2) ¿Cual fue la situación más novedosa, diferente o inesperada que sucedio en  tu vida, y como la enfrentaste?");
                    break;

                case "catch":
                    swal("Disparadoras"," ¿Cuales son las oportunidades de mejoramiento que identificas o identificaste en tu actual area del trabajo? Dime una. -¿Cual es el benficio para la empresa?");
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