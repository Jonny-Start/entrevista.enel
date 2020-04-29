<?php include "../config.php";
//sessionValidate();
?>
<?php include FOLDER_TEMPLATE . "scripts.php"; ?>
<?php //include FOLDER_TEMPLATE."head.php"; 
?>

<<<<<<< HEAD
<?php include FOLDER_TEMPLATE. "head.php"; ?>
<link href="../css/style.css" rel="stylesheet" type="text/css">

<body class="bg-primary">
  
    <div class="contenedor3">
        <div class="">
            <h2 class="titulo"><b>¡Solicita una cuenta!</b></h2>
        </div>
        <div class="contenedor4">



            <form class="" method="POST" action="../Controller/ValidacionContactame.php">
                <!-- <div class="form-group"> -->
                <input type="text" name="nombre" class="form-control caja1" id="nombre" placeholder="¿Cuál es tu Nombre?"
                    required>
                <!-- </div> -->
                <!-- <div class="form-group"> -->
                <input type="text" name="apellido" class="form-control caja1" id="apellido" placeholder="¿Cuál es tu Apellido?"
                    required>
                <!-- </div> -->
                <!-- <div class="form-group"> -->
                <input type="number" name="co" class="form-control caja1" id="co" placeholder="¿Cuál es tu Co?" required><br>
                <!-- </div> -->
                <!-- <div class="form-group"> -->
                <input type="email" name="email" class="form-control caja2" id="email"
                    placeholder="¿Cuál es tu correo Empresarial?" required>
                <!-- </div> -->
                <!-- <div class="input-group"> -->
                <input type="text" class="form-control caja3" name="mensaje" id="mensaje"
                    placeholder="Escribe un mensaje al destinatario" required>
                <!-- </div> -->
                <br>
                </div>
                <div class="contenedor5">
                <!-- <div class="form-group"> -->
                <button type="submit" name="botton" class="btn btn-success boton1">
                    <i class="fas fa-envelope"></i> Enviar</button>
                <!-- </div> -->
                <a href="../index.php"  class="btn btn-danger boton2">
                    <i class="fas fa-ban"></i> Cancelar
                </a>
                </div>
            </form>
               
    </div>





    <div class="contenedor">
        <div>
            <h3 class="titulo"><b>Digital Skills- Self-assessment</b></h3>
            <div class="contenedor1">

                <div class="">
                    <h5 class="titulo2"><b>Working Tools & Methodologies</b></h5>
                    <div class="">
                        <input type="checkbox" class="" id="office_basics" value="si" name="office_basics" required>
                        <label class="" for="defaultCheck1">MS Office basics (Word, Excel,</label>
                        <label class="texto">Powerpoint)</label>
                    </div>

                    <div class="">
                        <input class="" type="checkbox" value="si" id="office_advanced" name="office_advanced" required>
                        <label class="" for="defaultCheck1">
                            MS Office advanced (Access, Project)
                        </label>
=======
<?php include FOLDER_TEMPLATE . "head.php"; ?>

<body class="bg-gradient-primary">
    <div class="container">
        <div class="col-xl-10 col-lg-500 col-md-500">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="row justify-content-center">

                    <div class="col-lg-10">
                        <div class="p-5">
                            <div class="text-center">
                                <h2 class="h1 text-gray-1000 mb-4">Solicita una cuenta!</h2>
                            </div>
                            <form class="user justify-content-center" method="POST" action="../Controller/ValidacionContactame.php">
                                <div class="form-group">

                                    <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Escribe tu Nombre" required><br>
                                    <div class="form-group">
                                        <input type="text" name="apellido" class="form-control" id="apellido" placeholder="Escribe tu Apellido" required><br>
                                        <div class="form-group">
                                            <input type="text" name="co" class="form-control" id="co" placeholder="Escribe tu Co" required><br>
                                            <div class="form-group">
                                                <!-- <input type="number" name="telefono" class="form-control form-control-user" -->
                                                <!-- id="telefono"  placeholder="Teléfono/Celular" -->
                                                <!-- required><br> -->
                                                <div class="form-group">
                                                    <input type="email" name="email" class="form-control" id="email" placeholder="Escribe tu correo Empresarial" required>
                                                    <br>
                                                    <div class="input-group">
                                                        <textarea class="form-control" name="mensaje" id="mensaje" placeholder="Escribe un el motivo de tu mensaje" required></textarea>
                                                    </div>
                                                    <br>
                                                    <div class="form-group">
                                                        <button type="submit" name="botton" class="btn btn-primary btn-user btn-block btn-primary">
                                                            <i class="fas fa-envelope"></i> Enviar</button>
                                                    </div>
                                                    <a href="../index.php" class="btn btn-primary btn-user btn-block btn-danger ">
                                                        <i class="fas fa-ban"></i> Cancelar
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
>>>>>>> a70cc7babfd951b8a7e7b489b5b3ce3b58228dd9
                    </div>


                    <input type="checkbox" class="" id="outlook" value="si" name="outlook" required>
                    <label class="" for="defaultCheck1"> Outlook</label>
                </div>
                <div class="">
                    <input type="checkbox" class="" id="communication_tools" value="si" name="communication_tools"
                        required>
                    <label class="" for="defaultCheck1"> Communication tools (Teams, Yammer)</label>
                </div>
                <div class="">
                    <input type="checkbox" class="" id="project_management" value="si" name="project_management"
                        required>
                    <label class="" for="defaultCheck1"> Project Management</label>
                </div>
                <div class="">
                    <input type="checkbox" class="" id="agile" value="si" name="agile" required>
                    <label class="" for="defaultCheck1"> Agile</label>
                </div>
                <div class="">
                    <input type="checkbox" class="" id="desing_thinking" value="si" name="desing_thinking" required>
                    <label class="" for="defaultCheck1"> Desing thinking</label>
                </div>
                <div class="">
                    <label for="text1"><b>Other</b></label><br>
                    <textarea class="" id="mensaje" placeholder="" required></textarea>
                </div><br><br><br><br>
                <!-- </div> -->
                <!-- <div class=""> -->
                <h5 class="titulo3"><b>Soft Digital Skills</b></h5>
                <div class="">
                    <input class="" type="checkbox" value="si" id="knowledge_networking" name="knowledge_networking"
                        required>
                    <label class="" for="defaultCheck1">
                        Knowledge Networking
                    </label>
                </div>
                <div class="">
                    <input class="" type="checkbox" value="si" id="problem_solving" name="problem_solving" required>
                    <label class="" for="defaultCheck1">
                        Problem Solving
                    </label>
                </div>
                <div class="">
                    <input class="" type="checkbox" value="si" id="virtual_communication" name="virtual_communication"
                        required>
                    <label class="" for="defaultCheck1">
                        Virtual Communication
                    </label>
                </div>
                <div class="">
                    <input class="" type="checkbox" value="si" id="digital_awareness" name="digital_awareness" required>
                    <label class="" for="defaultCheck1">
                        Digital Awareness
                    </label>
                </div>
                <div class="">
                    <input class="" type="checkbox" value="si" id="data_and_device_security"
                        name="data_and_device_security" required>
                    <label class="" for="defaultCheck1">
                        Data and device security
                    </label>
                </div>
                <div class="">
                    <input class="" type="checkbox" value="si" id="content_creation" name="content_creation" required>
                    <label class="" for="defaultCheck1">
                        Content creation
                    </label>
                </div>
                <div class="">
                    <label for=""><b>Other</b></label><br>
                    <textarea class="text2" id="mensaje" placeholder="" required></textarea>
                </div><br><br>
                <!-- </div> -->
                <!-- <div class=""> -->
                <h5 class="titulo4"><b>Digital Hard Skills</b></h5>
                <div class="">
                    <input class="" type="checkbox" value="si" id="programming" name="programming" required>
                    <label class="" for="defaultCheck1">
                        Programming languages
                    </label>
                </div>
                <div class="">
                    <input class="" type="checkbox" value="si" id="cloud" name="cloud" required>
                    <label class="" for="defaultCheck1">
                        Cloud Services
                    </label>
                </div>
                <div class="">
                    <input class="" type="checkbox" value="si" id="it_system" name="it_system" required>
                    <label class="" for="defaultCheck1">
                        It System Management and
                    </label>
                    <label class="texto">Enterprise architecture</label>
                </div>
                <div class="">
                    <input class="" type="checkbox" value="si" id="cyber_security" name="cyber_security" required>
                    <label class="" for="defaultCheck1">
                        Cyber Security
                    </label>
                </div>
                <div class="">
                    <input class="" type="checkbox" value="si" id="ux/ui_desing" name="ux/ui_desing" required>
                    <label class="" for="defaultCheck1">
                        UX/UI Desing
                    </label>
                </div>
                <div class="">
                    <input class="" type="checkbox" value="si" id="mobile" name="mobile" required>
                    <label class="" for="defaultCheck1">
                        Mobile
                    </label>
                </div>
                <div class="">
                    <input class="" type="checkbox" value="si" id="data_analytics" name="data_analytics" required>
                    <label class="" for="defaultCheck1">
                        Data & Analytics
                    </label>
                </div>
                <div class="">
                    <input class="" type="checkbox" value="si" id="internet_of_things" name="internet_of_things"
                        required>
                    <label class="" for="defaultCheck1">
                        Internet of Things
                    </label>
                </div>
                <div class="">
                    <input class="" type="checkbox" value="si" id="it_plataforms" name="it_plataforms" required>
                    <label class="" for="defaultCheck1">
                        It Plataforms
                    </label>
                </div>
                <div class="">
                    <input class="" type="checkbox" value="si" id="robotic_process" name="robotic_process" required>
                    <label class="" for="defaultCheck1">
                        Robotic Process Automation
                    </label>
                </div>
                <div class="">
                    <label for=""><b>Other</b></label><br>
                    <textarea class="" id="mensaje" placeholder="" required></textarea>
                </div>
<<<<<<< HEAD
            </div>
        </div>
    </div>
</body>
=======


                <!-- <div class="spinner-grow text-primary" role="status">
  <span class="sr-only mx-auto" style="width: 200px;" >Loading...</span>
</div>
<div class="spinner-grow text-secondary" role="status">
  <span class="sr-only mx-auto" style="width: 200px;">Loading...</span>
</div>
<div class="spinner-grow text-success" role="status">
  <span class="sr-only mx-auto" style="width: 200px;">Loading...</span>
</div>
<div class="spinner-grow text-danger" role="status">
  <span class="sr-only mx-auto" style="width: 200px;" >Loading...</span>
</div>
<div class="spinner-grow text-warning" role="status">
  <span class="sr-only">Loading...</span>
</div>
<div class="spinner-grow text-info" role="status">
  <span class="sr-only">Loading...</span>
</div>
<div class="spinner-grow text-light" role="status">
  <span class="sr-only">Loading...</span>
</div>
<div class="spinner-grow text-dark" role="status">
  <span class="sr-only">Loading...</span>
</div> -->
                                    

>>>>>>> a70cc7babfd951b8a7e7b489b5b3ce3b58228dd9
