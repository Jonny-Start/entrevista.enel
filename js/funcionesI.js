"use strict"

var boton = document.querySelector('#boton');
var divg = document.querySelector('#divg');
var co = document.querySelector('#co');
var validarI = document.querySelector('#validarI');
co.addEventListener("focus", () => {
    boton.style.display = 'block';
    divg.classList.remove('col-lg-12');
    divg.classList.add('col-lg-10');
});
co.addEventListener("blur", () => {
    setTimeout(() => {
        console.log(divg);
        boton.style.display = 'none';
        divg.classList.remove('col-lg-10');
        divg.classList.add('col-lg-12');
    }, 300);
});

validarI.addEventListener('click', () => {
    var url = "../View/consultarco.php?" + co.value;
    window.open(url, "", "width=400, height=300"); // darle tamaños a la ventana
});


// ojito
function mostrarPassword() {
    var cambio = document.getElementById("contraseña");
    if (cambio.type == "password") {
        cambio.type = "text";
        $('.icon').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
    } else {
        cambio.type = "password";
        $('.icon').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
    }
}
$(document).ready(function () {
    //CheckBox mostrar contraseña
    $('#ShowPassword').click(function () {
        $('#Password').attr('type', $(this).is(':checked') ? 'text' : 'password');
    });
});