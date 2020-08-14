<?php include "../config.php";
sessionValidate();

?>
<?php include FOLDER_TEMPLATE . "head.php"; ?>
<style>
    .header {
        color: #36A0FF;
        font-size: 27px;
        padding: 10px;
    }

    .bigicon {
        font-size: 35px;
        color: #36A0FF;
    }
</style>
<form class="user" method="post" action="../Controller/validarccAyP.php">
    <h1 class="header" style="padding-left: 120px;"><b>Validar ID</b></h1>
    <div class="form-row">
        <div class="col-md-1">
            <i class="fa fa-user bigicon" style="padding-bottom: 0px; padding-left: 10px;"></i>
        </div>
    </div>
    </div>
    <div class="form-row" style="padding: 10px;">
        <div class="col-md-3" id="dato">
            <input id="cc" name="cc" type="number" placeholder="no es un numero lo que ingresaste" value="" class="form-control">
        <br>
        </div><br>
        <div class="col-md-12" style="text-align: left;">
            <button type="submit" class="btn btn-primary btn-lg">Verificar</button>
        </div>
</form>
</div>
<script src="../js/validarCc.js"></script>
</body>

</html>