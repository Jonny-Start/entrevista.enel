 <script src='https://kit.fontawesome.com/a076d05399.js'></script>
 <link rel="icon" type="image/icon" href="../img/PsicologiaPNG.ico" />
 <html lang="es">
 <?php include FOLDER_TEMPLATE . "head.php"; ?>
 <body>
   <!-- Page Wrapper -->
   <div id="wrapper">

     <!-- Sidebar -->
     <ul class="navbar-nav bg-gradient-info  sidebar sidebar-dark accordion" id="accordionSidebar">

       <!-- Sidebar - Brand -->
       <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= URL_PROY ?>Model/logout.php">
         <div class="sidebar-brand-icon rotate-n-15">
           <img src="../img/Psicologiaico.ico" class="col-lg-10 d-none d-lg-block" alt="" height="" width="">
         </div>
         <div class="sidebar-brand-text mx-2"><i class='fas fa-power-off' style='font-size:15px;color:red'><span style='font-size:15px;color:black'>SALIR</span></i>
         </div>
       </a>
       <div class="sidebar-brand-icon rotate-n-0">
       </div>
       <!-- Divider -->
       <hr class="sidebar-divider my-0">

       <!-- Nav Item - Dashboard -->
       <li class="nav-item active">
         <a class="nav-link" href="principal.php">
           <i class="fas fa-fw fa-tachometer-alt"></i>
           <span>Principal</span></a>
       </li>

       <!-- Divider -->
       <hr class="sidebar-divider">

       <!-- Heading -->
       <div class="sidebar-heading">
         Interface
       </div>

       <!-- Nav Item - Pages Collapse Menu -->
       <li class="nav-item">
         <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
           <i class="fas fa-fw fa-cog"></i>
           <span>Entrevistas</span>
         </a>
         <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
           <div class="bg-white py-2 collapse-inner rounded">
             <h6 class="collapse-header">Generar Entrevistas:</h6>
             <a class="collapse-item" data-toggle="modal" data-target="#logoutModal">Psicologicas</a>
             <a class="collapse-item" href="entrevistaBP.php">Business Partner</a>
             <a class="collapse-item" href="entrevistaTecnica.php">Tecnicas</a>
           </div>
         </div>
       </li>

       <!-- Nav Item - Utilities Collapse Menu -->
       <li class="nav-item">
         <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
           <i class="fas fa-fw fa-wrench"></i>
           <span>Usuarios</span>
         </a>
         <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
           <div class="bg-white py-2 collapse-inner rounded">
             <h6 class="collapse-header">Administrar Usuarios:</h6>
             <a class="collapse-item" href="insertar.php">Agregar</a>
             <a class="collapse-item" href="consultar.php">Buscar</a>
             <a class="collapse-item" href="actualizar.php">Actualizar</a>
             <a class="collapse-item" href="eliminar.php">Eliminar</a>
           </div>
         </div>
       </li>

       <!-- Divider -->
       <hr class="sidebar-divider">

       <!-- Heading -->
       <div class="sidebar-heading">
         Addons
       </div>

       <!-- Nav Item - Pages Collapse Menu -->
       <li class="nav-item">
         <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
           <i class="fas fa-fw fa-folder"></i>
           <span>Administrar</span>
         </a>
         <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
           <div class="bg-white py-2 collapse-inner rounded">
             <h6 class="collapse-header">Administrar</h6>
             <a class="collapse-item" href="gestionarEdicionEntrevistaPs.php">Gestion edición entrevista</a> 
             <a class="collapse-item" href="gestionarEliminacionEntrevistaPs.php">Gestion eliminar entrevista</a>
             <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
             <div class="collapse-divider"></div>
             <h6 class="collapse-header">Other Pages:</h6>
             <a class="collapse-item" href="404.html">404 Page</a>
             <a class="collapse-item" href="blank.html">Blank Page</a>
           </div>
         </div>
       </li>

       <!-- Nav Item - Charts -->
       <li class="nav-item">
         <a class="nav-link" href="Chart.php">
           <i class="fas fa-fw fa-chart-area"></i>
           <span>Charts</span></a>
       </li>

       <!-- Nav Item - Tables -->
       <li class="nav-item">
         <a class="nav-link" href="misDatos.php">
           <i class="fas fa-fw fa-table"></i>
           <span><?php echo $_SESSION['nombre'] ?>Perfil</span></a>
       </li>

       <!-- Divider -->
       <hr class="sidebar-divider d-none d-md-block">

       <!-- Sidebar Toggler (Sidebar) -->
       <div class="text-center d-none d-md-inline">
         <button class="rounded-circle border-0" id="sidebarToggle"></button>
       </div>

     </ul>
     <!-- End of Sidebar -->

 </body>





 <!-- Logout Modal-->
 <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-lg" role="document">
     <div class="modal-content">
       <div class="modal-header">
         <div style="text-align: center">
           <h5 class="modal-title" style="color: black" id="exampleModalLabel"><?php echo $_SESSION['nombre'] ?>, Bienvenido al portal de entrevistas</h5>
         </div>
         <button class="close" type="button" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true">×</span>
         </button>
       </div>
       <div style="text-align: center">
         <div class="modal-body aling-center" style="color: black"><b>Recuerda, la información que se ingrese será anexada a tu portal de entrevistas</b></div>
       </div>
       <div class="container" style="text-align:right; display: flex; align-items: flex-end; padding-left:80px">
         <div style="text-align: center; width: 45%; height: 50%; float: center;">
           <img src="../img/Profesional.jpg" alt="Profecional" style="margin-bottom: 1%; padding:10%" width="100%"><br>
           <div style="text-align: center">
             <a class="btn btn-success ml-6" href="entrevistaPsicologica.php" style=" margin-bottom: 5% ">Profesionales</a>
           </div>
         </div>
         <div style="text-align: center; width: 45%; height: 50%; float: center;">
           <img src="../img/aprendiz.png" alt="Profecional" width="90%" style="margin-bottom: 1%; padding:10%"><br>
           <div style="text-align: center">
             <a class="btn btn-info mr-12 btn-ml" href="entrevistaAyP.php" style="float: center; margin-bottom: 5% ">Aprendices y/o Practicantes</a>
           </div>
         </div>
       </div>
       <div class="modal-footer" >
         <button class="btn btn-danger btn-ml" type="button" data-dismiss="modal">cancelar</button>
       </div>
     </div>
   </div>
 </div>