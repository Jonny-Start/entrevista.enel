<?php

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$co = $_POST["co"];
$email = $_POST["email"];
$mensaje = $_POST["mensaje"];

$body ="<style type='text/css'>
img {
  max-width: 600px;
  outline: none;
  text-decoration: none;
  -ms-interpolation-mode: bicubic;
}

a {
  border: 0;
  outline: none;
}

a img {
  border: none;
}
td, h1, h2, h3  {
  font-family: Helvetica, Arial, sans-serif;
  font-weight: 400;
}
td {
  font-size: 13px;
  line-height: 150%;
  text-align: left;
}
body {
  -webkit-font-smoothing:antialiased;
  -webkit-text-size-adjust:none;
  width: 100%;
  height: 100%;
  color: #37302d;
  background: #ffffff;
}
table {
  border-collapse: collapse !important;
}
h1, h2, h3 {
  padding: 0;
  margin: 0;
  color: #444444;
  font-weight: 400;
  line-height: 110%;
}
h1 {
  font-size: 35px;
}
h2 {
  font-size: 30px;
}
h3 {
  font-size: 24px;
}
h4 {
  font-size: 18px;
  font-weight: normal;
}
.important-font {
  color: #21BEB4;
  font-weight: bold;
}

.hide {
  display: none !important;
}

.force-full-width {
  width: 100% !important;
}
td.desktop-hide {
  font-size: 0;
  height: 0;
  display: none;
  color: #ffffff;
}
</style>

<style type='text/css' media='screen'>
    @media screen {
      @import url(http://fonts.googleapis.com/css?family=Open+Sans:400);

      /* Thanks Outlook 2013! */
      td, h1, h2, h3 {
        font-family: 'Open Sans', 'Helvetica Neue', Arial, sans-serif !important;
      }
    }
</style>

<style type='text/css' media='only screen and (max-width: 600px)'>
  /* Mobile styles */
  @media only screen and (max-width: 600px) {

    table[class='w320'] {
      width: 320px !important;
    }

    table[class='w300'] {
      width: 300px !important;
    }

    table[class='w290'] {
      width: 290px !important;
    }

    td[class='w320'] {
      width: 320px !important;
    }

    td[class~='mobile-padding'] {
      padding-left: 14px !important;
      padding-right: 14px !important;
    }

    td[class*='mobile-padding-left'] {
      padding-left: 14px !important;
    }

    td[class*='mobile-padding-right'] {
      padding-right: 14px !important;
    }

    td[class*='mobile-block'] {
      display: block !important;
      width: 100% !important;
      text-align: left !important;
      padding-left: 0 !important;
      padding-right: 0 !important;
      padding-bottom: 15px !important;
    }

    td[class*='mobile-no-padding-bottom'] {
      padding-bottom: 0 !important;
    }

    td[class~='mobile-center'] {
      text-align: center !important;
    }

    table[class*='mobile-center-block'] {
      float: none !important;
      margin: 0 auto !important;
    }

    *[class*='mobile-hide'] {
      display: none !important;
      width: 0 !important;
      height: 0 !important;
      line-height: 0 !important;
      font-size: 0 !important;
    }

    td[class*='mobile-border'] {
      border: 0 !important;
    }

    td[class*='desktop-hide'] {
      display: block !important;
      font-size: 13px !important;
      height: 61px !important;
      padding-top: 10px !important;
      padding-bottom: 10px !important;
      color: #444444 !important;
    }
  }
</style>
</head>
<body class='body' style='padding:0; margin:0; display:block; background:#ffffff; -webkit-text-size-adjust:none' bgcolor='#ffffff'>
<table align='center' cellpadding='0' cellspacing='0' width='100%' height='100%'>
<tr>
  <td align='center' valign='top' bgcolor='#ffffff'  width='100%'>

  <table cellspacing='0' cellpadding='0' width='100%'>
    <tr>
      <td style='background:#1f1f1f' width='100%'>
        <center>
          <table cellspacing='0' cellpadding='0' width='600' class='w320'>
            <tr>
              <td valign='top' class='mobile-block mobile-no-padding-bottom mobile-center' width='270' style='background:#1f1f1f;padding:10px 10px 10px 20px;'>
                <a href='../index.php' style='text-decoration:none;'>
                <img src='../img/PsicologiaPNG.png' alt='Entrevista_Enel.com' width='142' height='30'>
                <b>Entrevistas Enel Colombia</b>
                <img src='../img/enel.png' alt='Entrevista_Enel.com' width='142' height='30'>
                </a>
              </td>
    </tr>
    </table>
    <tr>
      <td style='border-bottom:1px solid #e7e7e7;'>
        <center>
          <table cellpadding='0' cellspacing='0' width='600' class='w320'>
            <tr>
              <td align='left' class='mobile-padding' style='padding:20px'>

                <br class='mobile-hide' />

                <div>
                  <b>".$nombre.",</b>
                  <b>".$apellido.",</b><br>
                  Solicito un usuario y contraseña a la plataforma de Entrevistas<br><br>
                  Muchas Gracias<br>
                  <br>
                  <b>Mi correo electronico es :</b> ".$email."<br>
                  <b>Mi co en Enel es : <b>".$co."<br>
                  <br>
                  ".$mensaje."
                </div>
                <br>
                <table cellspacing='0' cellpadding='0' width='100%' bgcolor='#ffffff'>
                  <tr>
                    <td style='width:100px;background:#D84A38;'>
                      <div>
                        <!--[if mso]>
                        <v:rect xmlns:v='urn:schemas-microsoft-com:vml' xmlns:w='urn:schemas-microsoft-com:office:word' href='#' style='height:33px;v-text-anchor:middle;width:100px;' stroke='f' fillcolor='#D84A38'>
                          <w:anchorlock/>
                          <center>
                        <![endif]-->
                            <a href='#'
                      style='background-color:#D84A38;color:#ffffff;display:inline-block;font-family:sans-serif;font-size:13px;font-weight:bold;line-height:33px;text-align:center;text-decoration:none;width:100px;-webkit-text-size-adjust:none;'>My Account</a>
                        <!--[if mso]>
                          </center>
                        </v:rect>
                        <![endif]-->
                      </div>
                    </td>
                    <td width='281' style='background-color:#ffffff; font-size:0; line-height:0;'>&nbsp;</td>
                  </tr>
                </table>
              </td>
              <td class='mobile-hide' style='padding-top:20px;padding-bottom:0; vertical-align:bottom;' valign='bottom'>
                <table cellspacing='0' cellpadding='0' width='100%'>
                  <tr>
                    <td align='right' valign='bottom' style='padding-bottom:0; vertical-align:bottom;'>
                      <img  style='vertical-align:bottom;' src='../View/insertar.php'  width='174' height='294' />
                    </td>
                  </tr>
                </table>
              </td>
            </tr>
          </table>
        </center>
      </td>
    </tr>
    <tr>
      <td valign='top' style='background-color:#f8f8f8;border-bottom:1px solid #e7e7e7;'>
  </table>
  </td>
</tr>
</table>
</body>";


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer/Exception.php';
require '../PHPMailer/PHPMailer.php';
require '../PHPMailer/SMTP.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com'; //smtp de gmail                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'entrevistasenel2020@gmail.com'; // correo de donde se va a enviar el correo                     // SMTP username
    $mail->Password   = 'Endesa2016'; // contraseña de correo                              // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('entrevistasenel2020@gmail.com', 'Entrevistas Enel Jonny Cano'); //desde donde se va a enviar
    $mail->addAddress('jonnyalejandro.ca0910@gmail.com','PETICION PAGINA ENTREVISTA');  //a quien se le va a enviar    // Add a recipient
    // $mail->addAddress('ellen@example.com');// para agregar a alguien mas                // Name is optional
    //$mail->addReplyTo('jonnyalejandro.ca0910@gmail.com', 'PETICION PAGINA ENTREVISTA');  // esto es para agregar una copia
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    // Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');                 // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');         // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Importante Peticion, Pagina entrevistas Enel';
    $mail->Body    =  $body;
    $mail->CharSet = 'UTF-8';
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo '
    <script type="text/javaScript">
    alert("Se envio correctamente el mensaje");
    window.history.go(-1);
    </script>
    ';
} catch (Exception $e) {
    echo "Hubo un error al enviar el mensaje: {$mail->ErrorInfo}";
}
?>