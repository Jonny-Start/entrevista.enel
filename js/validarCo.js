
window.onload = () => {
    // capturamos la url
    var loc = document.location.href;
    // si existe el interrogante
    if (loc.indexOf('?') > 0) {
        // cogemos la parte de la url que hay despues del interrogante
        var GET = loc.split('?')[1];
    }
    var co = document.querySelector("#co");
    co.value = GET;
}