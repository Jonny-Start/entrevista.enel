"use strict"

// Consultar cc en AyP
var botonAyP = document.querySelector('#botonAyP');
var divAyP = document.querySelector('#divAyP');
var cc = document.querySelector('#cc');

cc.addEventListener('focus', () => {
    botonAyP.style.display = 'block';
    divAyP.classList.remove('col-sm-6');
    divAyP.classList.add('col-sm-5');
});
cc.addEventListener("blur", () => {
    tiempo = setTimeout(() => {
        botonAyP.style.display = 'none';
        divAyP.classList.remove('col-sm-5');
        divAyP.classList.add('col-sm-6');

    }, 300);
});
var validarAyP = document.querySelector('#validarAyP');
validarAyP.addEventListener('click', () => {
    var url = "../View/consultarccAyP.php?" + cc.value;
    window.open(url, "", "width=400, height=300"); // darle tamaños a la ventana
});
