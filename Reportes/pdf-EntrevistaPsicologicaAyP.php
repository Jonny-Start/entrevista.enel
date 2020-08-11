<?php ob_start();
$objCnx = new mysqli("localhost", "root", "", "eneljac");
$cc = $_GET['cc'];

$query = "SELECT * FROM entrevistaaprendices_practicantes where cc = $cc";
$rta = $objCnx->query($query);
?>
<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        header {
            background-color: #E0E0F8;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        h2 {
            text-align: center;
        }

        .container {
            width: 100%;
            height: auto;
            background-color: paleturquoise;

            display: flex;
        }

        .box {
            width: 20%;
            height: 300px;
            background-color: lawngreen;
            margin: 20px;
            box-sizing: border-box;
            font-size: 10px;

        }
    </style>
</head>

<body>
    <header>
        <table>
            <tr>
                <th><img src="../img/PsicologiaPNG.png" alt="Entrevista_Enel.com" width="120" height="100"></th>
                <th></th>
                <th>
                    <h1>Entrevista Psicologica</h1>
                </th>
                <th></th>
                <th class="esquina"><img src="../img/enel.png" alt="Entrevista_Enel.com" width="250" height="100"></th>
            </tr>
        </table>
    </header>
    <hr />
    <?php
    require_once "../Model/conexioon.php";
    $sql = "SELECT * FROM entrevistaaprendices_practicantes where cc = $cc";
    $rta = $objCnx->query($sql);
    while ($datos = $rta->fetch_array()) {

    ?>
        <h2>Datos Generales</h2>
        <table class="table table-bordered" width="100%" cellspacing="10">
            <tbody>
                <tr>
                    <td>Nombre:</td>
                    <td><?php echo $datos['nombre'] ?></td>
                </tr>
                <tr>
                    <td>Cedula:</td>
                    <td><?php echo $datos['cc'] ?> </td>
                </tr>
                <tr>
                    <td>Dependencia: </td>
                    <td> <?php echo $datos['dependencia'] ?> </td>
                </tr>
                <tr>
                    <td>Area de practica: </td>
                    <td> <?php echo $datos['areaPractica'] ?></td>
                </tr>
                <tr>
                    <td>Ingles: </td>
                    <td> <?php echo $datos['ingles'] ?></td>
                </tr>
                <tr>
                    <td>Ofimatica: </td>
                    <td> <?php echo $datos['ofimatica'] ?> </td>
                </tr>
                <tr>
                    <td>Fecha Entrevista: </td>
                    <td> <?php echo $datos['fechaEntrevista'] ?> </td>
                </tr>
                <tr>
                    <td>Entrevistador(a): </td>
                    <td> <?php echo $datos['psicologa'] ?> </td>
                </tr>
                <tr>
                    <td>cargo: </td>
                    <td><?php echo $datos['cargo'] ?> </td>
                </tr>
            </tbody>
        </table><br><br><br>

        <style>
            .titulo {
                color: black;
                text-align: center;
                padding-bottom: 20px;
            }

            .titulo2 {
                padding-bottom: 10px;
                font-size: 17px;

            }

            .titulo3 {
                margin-top: 40px;
                font-size: 17px;
            }

            .titulo4 {
                margin-top: 60px;
                font-size: 17px;
            }

            .contenedor1 {
                padding-top: 20px;
                column-count: 3;
                column-gap: 45px;
            }

            .otros {
                width: 50px;
                height: 30px;
            }
            b
            {
                font-size: 20px;
            }
        </style>
        <?php
        function validar($dato)
        {
            if ($dato == "SI") {
                echo "<i>SI-></i>";
            } else {
                echo "<i>NO-></i>";
            }
        }
        ?>
        <br>
        <hr />
        <h4>
            <p><i style="color: #68CCFE;"> 1)</i><b> ¿Qué sabes acerca de nuestra empresa?, Qué te atrae de ella? </b></p>
        </h4>
        <p> -<?php echo $datos['conocimientoEmpresa'] ?> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odit, alias. Numquam dolor fugit quia debitis commodi? Reprehenderit ut debitis excepturi.</p><br><br>
        <h4>
        <p><i style="color: #68CCFE;"> 2)</i><b> En las responsabilidades definidas para el cargo en cuales de ellas el candidato/ta tiene motivación para desempeñarse en esta área.</b></p>
        </h4>
        <p> -<?php echo $datos['motivacionArea'] ?> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Possimus odit cupiditate sit exercitationem nostrum ratione molestias, dolorem expedita fugit corporis!</p><br><br>
        <h4>
        <p><i style="color: #68CCFE;"> 3)</i><b> Conocimientos que tiene el candidato/ta en programacion</b></p>
        </h4>
        <p> -<?php echo $datos['conocimientoProgramacion'] ?> Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo ad a quasi quae magnam iure molestiae. Aperiam neque natus non eius dolor error rerum, vel, quaerat, officiis consectetur voluptates laudantium!</p><br><br>
        <hr />
        <br><br>
        <h3 class="titulo"><b>Concepto Psicologa</b></h3>
            <br>
            <p><?php echo $datos['concepto'] ?> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas delectus voluptatem tempore ipsum est veniam et ad quaerat deleniti magnam esse iste molestiae, hic beatae similique? Itaque fugiat doloremque fuga voluptatem, facere repellendus. Quia, architecto? Qui, recusandae doloribus eius laudantium dolore quidem eum quas quaerat temporibus repellat aliquid quam voluptates dignissimos est, voluptas quasi excepturi distinctio dolores ducimus! Voluptatem ducimus quia ipsum deleniti ex dignissimos pariatur vitae blanditiis corrupti accusamus quis neque quod, error tempore delectus hic quibusdam praesentium sit?</p>
            <br>
            <table style='width:100%'>
            <tr>
                <th>
                    <td colspan="3"></td><br>
                </th>
            </tr>
            <tr>
                <td><?php validar($datos['adecuado']) ?><label>Adecuado</label></td>
                <td><?php validar($datos['adecuadoP']) ?><label>Adecuado para otro cargo</label></td>
                <td><?php validar($datos['parcialmente']) ?><label>Parcialmente adecuado</label></td>
            </tr>
            <tr>
                <td><?php validar($datos['primera']) ?><label>Primera opcion</label></td>
                <td><?php validar($datos['segunda']) ?><label>Segunda opcion</label></td>
                <td><?php validar($datos['noA']) ?><label>No Adecudo</label></td>
            </tr>
        </table>
            <br><br>
            <footer>
                <img src="../Firmas/<?php echo $datos['co'] ?>.png" alt="La Psicologa NO tiene agregada una firma digital" width="200px" height="50px">
                <p>--------------------------------------</p>
                <h5><?php echo $datos['psicologa'] ?></h5>
                <p>Firma Psicologa<p>
            </footer>

        <?php
        $nombre = $datos['nombre'];
        $cc = "Entrevista Psicologica de $nombre $cc";
    }
        ?>
</body>

</html>
<?php
require_once("../dompdf/autoload.inc.php");

use Dompdf\Dompdf;

$dompdf = new DOMPDF();
$dompdf->load_html(ob_get_clean());
// $mpdf->SetProtection(array(), '123456', '123456');  // esto es para encryptar los pdf pero con mpdf
$dompdf->render();
$pdf = $dompdf->output();
$filename = $cc;
$dompdf->stream($filename, array("Attachment" => 0));
?>