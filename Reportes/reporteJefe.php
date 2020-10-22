<?php include "../config.php";
sessionValidate();
?>

<?php include FOLDER_TEMPLATE . "head.php"; ?>
<link href="../css/styleRJefe.css" rel="stylesheet" type="text/css">

<div class="container">
    <div>
        <h1 class="text-center" style="color: black">Reporte de <b class="text-right" style="color: #ACC9E4; ">[<?php echo $_SESSION['nombre'] ?>]</b></h1>
    </div>
    <hr />
    <div id="cajaTexto">
    </div>
<div class="container" id="divG">
    
    <div id="circulo">
        <p> <b style="font-size: 1.5rem;">Concepto Psicologa</b> <br> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Soluta quas ex sed non reiciendis expedita, dolorum provident ab velit nemo tempora atque sequi quam, veniam itaque dicta, perspiciatis neque incidunt minus quis suscipit! Accusantium amet exercitationem dolor soluta minima sed tenetur at a dignissimos? Et consectetur, vitae delectus eveniet, impedit sapiente recusandae similique vel eius id molestias nulla. Perspiciatis, repudiandae ad? Modi illo ut, cumque quaerat cum commodi praesentium vitae, nesciunt error hic natus autem magni? Facere possimus a ut est distinctio sed odit sint ipsum ex, itaque soluta. Omnis laborum ab aspernatur animi aliquam doloremque error magni, accusantium pariatur!</p>

        <div id="circulo1">
            <p><b>Nombre: </b><br><b>Tel: </b><br><b>E-mail: </b><br></p>
        </div>

        <div id="circulo2">
            <p><b>Nombre: </b><br><b>Tel: </b><br><b>E-mail: </b><br></p>
        </div>

        <div id="circulo3">
            <p><b>Nombre: </b><br><b>Tel: </b><br><b>E-mail: </b><br></p>
        </div>

        <div id="circulo4">
            <p><b>Nombre: </b><br><b>Tel: </b><br><b>E-mail: </b><br></p>
        </div>

        <div id="circulo5">
            <p><b>Nombre: </b><br><b>Tel: </b><br><b>E-mail: </b><br></p>
        </div>

        <div id="circulo6">
            <p><b>Nombre: </b><br><b>Tel: </b><br><b>E-mail: </b><br></p>
        </div>

        <div id="circulo7">
            <p><b>Nombre: </b><br><b>Tel: </b><br><b>E-mail: </b><br></p>
        </div>
    </div>
</div>



    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <?php include FOLDER_TEMPLATE . "scripts.php"; ?>