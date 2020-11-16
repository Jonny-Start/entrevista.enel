$(document).ready(function () {

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


    // confirmar boton salir
    function seguro() {
        window.onbeforeunload = function () {
            return "¿Estás seguro que deseas salir de la actual página?"
        }
    }

    var adecuado = document.querySelector("#adecuado");
    var Noadecuado = document.querySelector("#noA");

    adecuado.addEventListener('change', function () {
        if (this.checked) {
            $('#primera').removeAttr('disabled');
            $('#segunda').removeAttr('disabled');
            $('#noA').attr('disabled','disabled');
        } else {
            $('#primera').attr('disabled','disabled');
            $('#segunda').attr('disabled' , 'disabled');
            $('#noA').removeAttr('disabled');
        }
    });

    Noadecuado.addEventListener('change', function () {
        if (this.checked) {
            $('#parcialmente').removeAttr('disabled');
            $('#adecuadoP').removeAttr('disabled');
            $('#adecuado').attr('disabled' , 'disabled');
        } else {
            $('#parcialmente').attr('disabled','disabled');
            $('#adecuadoP').attr('disabled' , 'disabled');
            $('#adecuado').removeAttr('disabled');
        }
    });
});