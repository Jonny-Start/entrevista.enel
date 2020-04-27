<?php include"../config.php";
//sessionValidate();
?>
<?php include FOLDER_TEMPLATE. "scripts.php"; ?>
<?php //include FOLDER_TEMPLATE."head.php"; ?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<?php include FOLDER_TEMPLATE. "head.php"; ?>

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">

<title>Contáctame</title>

<!-- Custom fonts for this template-->
<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">
<!-- librerias para funcion mostrar contraseña -->
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->

<!-- Custom styles for this template -->
<link href="css/sb-admin-2.min.css" rel="stylesheet">

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->


        <div class="col-xl-15 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <!-- <div class="card-body p-0"> -->
                <!-- Nested Row within Card Body -->
                <div class="row justify-content-center">


                    <div class="col-lg-6">
                        <div class="p-5">
                            <div class="text-center">
                                <h2 class="h1 text-gray-1000 mb-4">Solicita una cuenta!</h2>
                            </div>
                            <form class="user justify-content-center" method="POST" action="">
                                <div class="form-group">
                                    <input type="text" name="nombre" class="form-control form-control-user" id="nombre"
                                        placeholder="Nombre" required><br>
                                    <div class="form-group">
                                        <!-- <input type="number" name="telefono" class="form-control form-control-user" -->
                                        <!-- id="telefono"  placeholder="Teléfono/Celular" -->
                                        <!-- required><br> -->
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control form-control-user"
                                                id="email" placeholder="EMAIL ENEL" required>
                                            <br>
                                            <div class="input-group">
                                                <textarea class="form-control form-control-user" name="mensaje"
                                                    id="mensaje" placeholder="Escribe un mensaje al destinatario"
                                                    required></textarea>
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <button type="submit" name="submit"
                                                    class="btn btn-primary btn-user btn-block btn-primary">
                                                    <i class="fas fa-envelope"></i> Enviar</button>
                                                <h5 class="notifCorrecto"> <?= $result; ?> </h5>
                                              
                                            </div>
                                            <a href="../index.php"
                                                class="btn btn-primary btn-user btn-block btn-danger ">
                                                <i class="fas fa-ban"></i> Cancelar
                                            </a>
                            </form>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    </div>

    </div>

    <script type="text/javascript">
    function mostrarPassword() {
        var cambio = document.getElementById("password");
        if (cambio.type == "password") {
            cambio.type = "text";
            $('.icon').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
        } else {
            cambio.type = "password";
            $('.icon').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
        }
    }

    $(document).ready(function() {
        //CheckBox mostrar contraseña
        $('#ShowPassword').click(function() {
            $('#Password').attr('type', $(this).is(':checked') ? 'text' : 'password');
        });
    });
    </script>

    <div class="container card o-hidden border-0 shadow-lg my-5 row justify-content-center p-5">
        <h3 class="tituloc pb-3 text-center"><b>Digital Skills- Self-assessment</b></h3>
        <div class="row row-cols-3">

            <div class="col pr-5">
                <h5 class="tituloc pb-2 float-left"><b>Working Tools & Methodologies</b></h5>
                <div class="col ml-2 pb-2">
                    <input type="checkbox" class="form-check-input" id="office_basics" value="si" name="office_basics"
                        required>
                    <label class="form-check-label" for="defaultCheck1">MS Office basics (Word, Excel,
                        Powerpoint</label>
                </div>


                <div class="col ml-2 pr-5 pb-2">
                    <input class="form-check-input" type="checkbox" value="si" id="office_advanced"
                        name="office_advanced" required>
                    <label class="form-check-label" for="defaultCheck1">
                        MS Office advanced (Access, Project)
                    </label>
                </div>

                <div class="col ml-2 pb-2">
                    <input type="checkbox" class="form-check-input" id="outlook" value="si" name="outlook" required>
                    <label class="form-check-label" for="defaultCheck1"> Outlook</label>
                </div>
                <div class="col ml-2 pr-4 pb-2">
                    <input type="checkbox" class="form-check-input" id="communication_tools" value="si"
                        name="communication_tools" required>
                    <label class="form-check-label" for="defaultCheck1"> Communication tools (Teams, Yammer)</label>
                </div>
                <div class="col ml-2 pb-2">
                    <input type="checkbox" class="form-check-input" id="project_management" value="si"
                        name="project_management" required>
                    <label class="form-check-label" for="defaultCheck1"> Project Management</label>
                </div>
                <div class="col ml-2 pb-2">
                    <input type="checkbox" class="form-check-input" id="agile" value="si" name="agile" required>
                    <label class="form-check-label" for="defaultCheck1"> Agile</label>
                </div>
                <div class="col ml-2 pb-2">
                    <input type="checkbox" class="form-check-input" id="desing_thinking" value="si"
                        name="desing_thinking" required>
                    <label class="form-check-label" for="defaultCheck1"> Desing thinking</label>
                </div>
                <div class="col mr-2 pb-2">
                    <label for=""><b>Other</b></label><br>
                    <textarea class="mensaje" id="mensaje" placeholder="" required></textarea>
                </div>
            </div>

            <div class="col">
                <h5 class="tituloc pb-2"><b>Soft Digital Skills</b></h5>
                <div class="col ml-2 pb-2">
                    <input class="form-check-input" type="checkbox" value="si" id="knowledge_networking"
                        name="knowledge_networking" required>
                    <label class="form-check-label" for="defaultCheck1">
                        Knowledge Networking
                    </label>
                </div>
                <div class="col ml-2 pb-2">
                    <input class="form-check-input" type="checkbox" value="si" id="problem_solving"
                        name="problem_solving" required>
                    <label class="form-check-label" for="defaultCheck1">
                        Problem Solving
                    </label>
                </div>
                <div class="col ml-2 pb-2">
                    <input class="form-check-input" type="checkbox" value="si" id="virtual_communication"
                        name="virtual_communication" required>
                    <label class="form-check-label" for="defaultCheck1">
                        Virtual Communication
                    </label>
                </div>
                <div class="col ml-2 pb-2">
                    <input class="form-check-input" type="checkbox" value="si" id="digital_awareness"
                        name="digital_awareness" required>
                    <label class="form-check-label" for="defaultCheck1">
                        Digital Awareness
                    </label>
                </div>
                <div class="col ml-2 pb-2">
                    <input class="form-check-input" type="checkbox" value="si" id="data_and_device_security"
                        name="data_and_device_security" required>
                    <label class="form-check-label" for="defaultCheck1">
                        Data and device security
                    </label>
                </div>
                <div class="col ml-2 pb-2">
                    <input class="form-check-input" type="checkbox" value="si" id="content_creation"
                        name="content_creation" required>
                    <label class="form-check-label" for="defaultCheck1">
                        Content creation
                    </label>
                </div>
                <div class="col mr-2 pb-2">
                    <label for=""><b>Other</b></label><br>
                    <textarea class="mensaje" id="mensaje" placeholder="" required></textarea>
                </div>
            </div>
            <div class="col">
                <h5 class="tituloc pb-2 float-left"><b>Digital Hard Skills</b></h5>
                <div class="col ml-2 pb-2">
                    <input class="form-check-input" type="checkbox" value="si" id="programming" name="programming"
                        required>
                    <label class="form-check-label" for="defaultCheck1">
                        Programming languages
                    </label>
                </div>
                <div class="col ml-2 pb-2">
                    <input class="form-check-input" type="checkbox" value="si" id="cloud" name="cloud" required>
                    <label class="form-check-label" for="defaultCheck1">
                        Cloud Services
                    </label>
                </div>
                <div class="col ml-2 pr-4 pb-2">
                    <input class="form-check-input" type="checkbox" value="si" id="it_system" name="it_system" required>
                    <label class="form-check-label" for="defaultCheck1">
                        It System Management and Enterprise architecture
                    </label>
                </div>
                <div class="col ml-2 pb-2">
                    <input class="form-check-input" type="checkbox" value="si" id="cyber_security" name="cyber_security"
                        required>
                    <label class="form-check-label" for="defaultCheck1">
                        Cyber Security
                    </label>
                </div>
                <div class="col ml-2 pb-2">
                    <input class="form-check-input" type="checkbox" value="si" id="ux/ui_desing" name="ux/ui_desing"
                        required>
                    <label class="form-check-label" for="defaultCheck1">
                        UX/UI Desing
                    </label>
                </div>
                <div class="col ml-2 pb-2">
                    <input class="form-check-input" type="checkbox" value="si" id="mobile" name="mobile" required>
                    <label class="form-check-label" for="defaultCheck1">
                        Mobile
                    </label>
                </div>
                <div class="col ml-2 pb-2">
                    <input class="form-check-input" type="checkbox" value="si" id="data_analytics" name="data_analytics" required>
                    <label class="form-check-label" for="defaultCheck1">
                    Data & Analytics
                    </label>
                </div>
                <div class="col ml-2 pb-2">
                    <input class="form-check-input" type="checkbox" value="si" id="internet_of_things" name="internet_of_things" required>
                    <label class="form-check-label" for="defaultCheck1">
                    Internet of Things
                    </label>
                </div>
                <div class="col ml-2 pb-2">
                    <input class="form-check-input" type="checkbox" value="si" id="it_plataforms" name="it_plataforms" required>
                    <label class="form-check-label" for="defaultCheck1">
                    It Plataforms
                    </label>
                </div>
                <div class="col ml-2 pb-2">
                    <input class="form-check-input" type="checkbox" value="si" id="robotic_process" name="robotic_process" required>
                    <label class="form-check-label" for="defaultCheck1">
                    Robotic Process Automation
                    </label>
                </div>
                <div class="col mr-2 ">
                    <label for=""><b>Other</b></label><br>
                    <textarea class="mensaje" id="mensaje" placeholder="" required></textarea>
                </div>
            </div>
        </div>
    </div>



</body>

</html>