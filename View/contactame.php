<?php include"../config.php";
//sessionValidate();
?>
<?php include FOLDER_TEMPLATE. "scripts.php"; ?>
<?php //include FOLDER_TEMPLATE."head.php"; ?>

<?php include FOLDER_TEMPLATE. "head.php"; ?>

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
                                    <input type="text" name="nombre" class="form-control" id="nombre"

                                        placeholder="Escribe tu Nombre" required><br>
                                        <div class="form-group">
                                    <input type="text" name="apellido" class="form-control" id="apellido"
                                        placeholder="Escribe tu Apellido"required><br>
                                        <div class="form-group">
                                    <input type="text" name="co" class="form-control" id="co"
                                        placeholder="Escribe tu Co" required><br>
                                    <div class="form-group">
                                        <!-- <input type="number" name="telefono" class="form-control form-control-user" -->
                                        <!-- id="telefono"  placeholder="Teléfono/Celular" -->
                                        <!-- required><br> -->
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control"
                                                id="email" placeholder="Escribe tu correo Empresarial" required>
                                            <br>
                                            <div class="input-group">
                                                <textarea class="form-control" name="mensaje"
                                                    id="mensaje" placeholder="Escribe un el motivo de tu mensaje"
                                                    required></textarea>
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <button type="submit" name="botton"
                                                    class="btn btn-primary btn-user btn-block btn-primary">
                                                    <i class="fas fa-envelope"></i> Enviar</button>
                                            </div>
                                            <a href="../index.php"
                                                class="btn btn-primary btn-user btn-block btn-danger ">
                                                <i class="fas fa-ban"></i> Cancelar
                                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
