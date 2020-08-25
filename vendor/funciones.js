
function agregarModal(info) {
    var d = info.split('||');
    $('#nombre').text(d[0]);
    $('#cedula').text(d[1]);
  }

  function seEnvio(){
    Swal.fire({
      icon: 'success',
      title: 'Se Envio Correctamente',
      text: 'El correo ya se le envio al administrador de la pagina',
    });
  }

  function enviarDatos() {
    var nombre = $('#nombre').text();
    var cc = $('#cedula').text();
    var btn = $('#btn'); 
    btn.attr('disabled', 'disabled');
    cadena = "&nombre=" + nombre + "&cedula=" + cc;
    $.ajax({
      type: "POST",
      url: "../Controller/validarSolicitudEliminar.php",
      data: cadena,
      success: function(r) {
        if (r == 1) {
          btn.removeAttr('disabled');
          Swal.fire({
            icon: 'success',
            title: 'Se Envio Correctamente',
            text: 'El correo ya se le envio al administrador de la pagina',
          });
        } else {
          btn.removeAttr('disabled');
          Swal.fire({
            icon: 'error',
            title: 'ERROR',
            text: 'No se pudo enviar el correo, porfavor contactese con el administrador del programa',
          });
        }
      }
    })
  }