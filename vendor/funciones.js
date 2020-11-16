
function agregarModal(info ) {
    var d = info.split('||');
    $('#nombre').text(d[0]);
    $('#cedula').text(d[1]);
    $('#ps').text(d[2]);
  }
  
function agregarModal2(inf) {
    var d2 = inf.split('||');
    console.log (inf);
    $('#name').text(d2[0]);
    $('#cc').text(d2[1]);
  }

  function seEnvio(){
    Swal.fire({
      icon: 'success',
      title: 'Se Envio Correctamente',
      text: 'El correo ya se le envio al administrador de la pagina',
    });
  }

  function solictarEdicion() {
    var name2 = $('#name').text();
    var cc2 = $('#cc').text();
    var btn2 = $('#boton'); 
    btn2.attr('disabled', 'disabled');
    cadena = "&name=" + name2 + "&cc=" + cc2;
    $.ajax({
      type: "POST",
      url: "../Controller/validarSolicitudEditar.php",
      data: cadena,
      success: function(r) {
        console.log(r);
        if (r == 1) {
          btn2.removeAttr('disabled');
          Swal.fire({
            icon: 'success',
            title: 'Se Envio Correctamente',
            text: 'El correo ya se le envio al administrador de la pagina',
          });
        } else {
          console.log(r);
          btn2.removeAttr('disabled');
          Swal.fire({
            icon: 'error',
            title: 'ERROR',
            text: 'No se pudo enviar el correo, porfavor contactese con el administrador del programa',
          });
        }
      }
    })
  }

  function solicitarEliminacion() {
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
        console.log(r);
        if (r == 1) {
          btn.removeAttr('disabled');
          Swal.fire({
            icon: 'success',
            title: 'Se Envio Correctamente',
            text: 'El correo ya se le envio al administrador de la pagina',
          });
        } else {
          console.log(r);
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

  function Eliminacion() {
    var nombre = $('#nombre').text();
    var cc = $('#cedula').text();
    var ps = $('#ps').text();
    var btn = $('#btn'); 
    btn.attr('disabled', 'disabled');
    cadena = "&nombre=" + nombre + "&cedula=" + cc + "&ps=" + ps;
    $.ajax({
      type: "POST",
      url: "../Controller/ValidarEliminarEntrevistaPs.php?",
      data: cadena,
      success: function(r) {
        if (r == 1) {
          console.log("esto es bien" + r + cadena );
          btn.removeAttr('disabled');
          Swal.fire({
            icon: 'success',
            title: 'Se Elimino Correctamente',
            text: 'La entrevista de eliminó correctamente',
          });
        } else {
          console.log("esto es mal"+ r + cadena);
          console.log(r);
          btn.removeAttr('disabled');
          Swal.fire({
            icon: 'error',
            title: 'ERROR',
            text: 'No se pudo eliminar la entrevista, porfavor contactese con el administrador del programa',
          });
        }
      }
    })
    // $(body).load('ValidarEliminarEntrevista.php');
  }