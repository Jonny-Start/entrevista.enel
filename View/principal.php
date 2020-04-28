<?php include "../config.php";
sessionValidate();

?>
<?php include FOLDER_TEMPLATE . "head.php"; ?>
<?php include FOLDER_TEMPLATE . "sidebar.php"; ?>
<link href="<?= URL_CSS ?>https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<script src="../Plotly/plotly-latest.min.js"></script>


<div class="container">
  <div>
    <h1>Bienvenido <?php echo $_SESSION['nombre'] ?> {<?php echo $_SESSION['rol'] ?>}</h1>
    <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#logoutModal">
      Modal
    </button>
  </div>
  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">que dice perro?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, iusto totam cupiditate nam dignissimos blanditiis in modi provident eum corporis.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">cancelar</button>
          <a class="btn btn-primary" href="login.html">Guardar</a>
        </div>
      </div>
    </div>
  </div>


  <div class="row">
    <div class="col-sm-12">
      <div class="panel panel-primary">
        <div class="panel panel-heading">Graficas</div>
        <div class="panel panel-body">
          <div class="row">
            <div class="col-sm-6">
              <div id="cargaLineal"></div>
            </div>
            <div class="col-sm-6">
              <div id="cargaBarras"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include FOLDER_TEMPLATE . "scripts.php"; ?>
</body>

</html>

<script type="text/javascript">
  $(document).ready(function() {
    $('#cargaLineal').load('../Plotly/lineal.php');
    $('#cargaBarras').load('../Plotly/barras.php');
  });
</script>