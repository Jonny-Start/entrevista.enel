<?php
include "../config.php";
sessionValidate();
$co = $_SESSION['co'];

$type = $_FILES["firma"]["type"];
$guardado = $_FILES["firma"]['tmp_name'];

if ($_FILES['firma']['type'] == "image/png" || $_FILES['firma']['type'] == "image/jpg") {

    if (!file_exists('../Firmas')) {
        mkdir('../Firmas', 0777, true);
        if (file_exists('../Firmas')) {
            if (move_uploaded_file($guardado, '../Firmas/' . "$co.png")) {
                echo "<script type='text/javascript'>
                Swal.fire({
                icon: 'success',
                title: 'Actualizado',
                text: 'Se actualizo la firma correctamente',
                })</script>";
            } else {
                echo "<script type='text/javascript'>Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'No se pudo hacer la actualizacion, verifica la extencion de la firma',
              })</script>";
            }
        }
    } else {
        if (move_uploaded_file($guardado, '../Firmas/' . "$co.png")) {
            echo '<script type="text/javascript">
        alert ("Se Subio Tu firma corectamente");
        window.location.href="../View/misDatos.php";
        </script>';
        } else {
            echo '<script type="text/javascript">
        alert ("No pudo subir tu firma");
        window.location.href="../View/misDatos.php";
        </script>';
        }
    }
} else {
    echo '<script type="text/javascript">
        alert ("Tu archivo no es una imagen en formato png");
        window.location.href="../View/misDatos.php";
        </script>';
}
?>
<?php include FOLDER_TEMPLATE . "scripts.php"; ?>
