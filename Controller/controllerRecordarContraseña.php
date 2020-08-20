<?php
$email = $_POST["email"];
$contraseña = '*R@?'. rand(100,999) . 'SpW' . rand(100,999);
    require "../Model/conexioon.php";
    $sql = "UPDATE usuario set contraseña= '$contraseña' where correo_electronico='$email'";
    $resul=mysqli_query($objCnx,$sql);

$body = " <style> img {
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

  /* General styling */

  td, h1, h2, h3  {
    font-family: Helvetica, Arial, sans-serif;
    font-weight: 400;
  }

  td {
    font-size: 13px;
    line-height: 19px;
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


  h1, h2, h3, h4 {
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

      td[class*='mobile-padding-left-only'] {
        padding-left: 14px !important;
        padding-right: 0 !important;
      }

      td[class*='mobile-padding-right-only'] {
        padding-right: 14px !important;
        padding-left: 0 !important;
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
                  <a href='#' style='text-decoration:none;'>
                    <img src='https://upload.wikimedia.org/wikipedia/commons/thumb/2/22/Enel_Group_logo.svg/800px-Enel_Group_logo.svg.png' width='142' height='50' alt='Your Logo'/>
                  </a>
                </td>
                </tr></table>
          </center>

        </td>
      </tr>
      <tr>
        <td style='border-bottom:1px solid #e7e7e7;'>

          <center>
            <table cellpadding='0' cellspacing='0' width='600' class='w320'>
              <tr>
                <td align='left' class='mobile-padding' style='padding:20px 20px 30px'>

                  <br class='mobile-hide' />

                  <h1>Entrevistas<br> ENEL-Colombia</h1>

                  <br>
                  ¡Hola!
                  <br><br>
                  Acabas de informar de que olvidaste tu contraseña, por este motivo borramos tu contraseña actual y te asignamos una diferente, la cual puedes utilizar hasta el momento que lo permitas, sino puedes cambiarla facilmente en tu <a href='../view/misDatos.php'>Perfil</a>.
                  <br>
                  <br><br>
                  <table cellspacing='0' cellpadding='0' width='100%' bgcolor='#ffffff'>
                    <tr>
                      <td style='width:130px;background:#D84A38;'>
                        <div>
                              <a href='../index.php'
                        style='background-color:#D84A38;color:#ffffff;display:inline-block;font-family:sans-serif;font-size:13px;font-weight:bold;line-height:33px;text-align:center;text-decoration:none;width:130px;-webkit-text-size-adjust:none;'>Iniciar Sesion</a>
                        </div>
                      </td>
                      <td width='316' style='background-color:#ffffff; font-size:0; line-height:0;'>&nbsp;</td>
                    </tr>
                  </table>
                </td>
                <td class='mobile-hide' style='padding-top:20px;padding-bottom:0;'>
                  <table cellspacing='0' cellpadding='0' width='100%'>
                    <tr>
                      <td align='right' width='220' style='padding-right:20px; vertical-align:middle;'>
                        <table width='94' align='right' cellpadding='0' cellspacing='0'>
                          <tr>
                            <td style='border:2px solid #000000'>
                              <img src='https://www.filepicker.io/api/file/OqRXT4JuRbmXSgbxccgK' style='display:block' width='90' height='90' alt='profile'/>
                            </td>
                          </tr>
                        </table>
                      </td>
                    </tr>
                    <tr>
                     <td style='font-size:12px; padding-top:5px; text-align:center; padding-right:20px'>
                       Contraseña Nueva: <br> <a style='color:blue;'>$contraseña</a>
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
        ";


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
    $mail->setFrom('entrevistasenel2020@gmail.com', 'Entrevistas Enel'); //desde donde se va a enviar
    $mail->addAddress("$email", 'PETICION PAGINA ENTREVISTA');  //a quien se le va a enviar    // Add a recipient
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
