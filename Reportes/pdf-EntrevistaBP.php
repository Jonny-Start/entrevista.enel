<?php

use FontLib\Table\Type\name;

ob_start();
$objCnx = new mysqli("localhost", "root", "", "eneljac");
$cc = $_GET['cc'];

$query = "SELECT * FROM entrevistabp where idBP = $cc";
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
                <th></th>
                <th>
                    <h1>Entrevista Business Partner</h1>
                </th>
                <th class="esquina" style="text-align: right;"><img src="../img/enel.png" alt="Entrevista_Enel.com" width="250" height="100"></th>
            </tr>
        </table>
    </header>
    <hr />
    <?php
    require_once "../Model/conexioon.php";
    $sql = "SELECT * FROM entrevistabp where idBP = $cc";
    $rta = $objCnx->query($sql);
    while ($datos = $rta->fetch_array()) {
    ?>
        <h2>Datos Generales</h2>
        <table class="table table-bordered" width="100%" cellspacing="10">
            <tbody>
                <tr>
                    <td>Proceso:</td>
                    <td><?php echo $datos['proceso'] ?></td>
                </tr>
                <tr>
                    <td>Entrevistador:</td>
                    <td><?php echo $datos['entrevistador'] ?></td>
                </tr>
                <tr>
                    <td>Fecha de la Entrevista:</td>
                    <td><?php echo $datos['fechaEntrevista'] ?> </td>
                </tr>
                <tr>
                    <td>Cargo del entrevistador: </td>
                    <td> <?php echo $datos['cargoEntrevistador'] ?> </td>
                </tr>
                <tr>
                    <td>Dependencia: </td>
                    <td> <?php echo $datos['dependencia'] ?></td>
                </tr>
                <tr>
                    <td>Nombre Candidato: </td>
                    <td> <?php echo $datos['nombreCandidato'] ?></td>
                </tr>
                <tr>
                    <td>Cedula del candidato: </td>
                    <td> <?php echo $datos['idBP'] ?> </td>
                </tr>
                <tr>
                    <td>Vacante: </td>
                    <td> <?php echo $datos['cargoAspira'] ?> </td>
                </tr>
            </tbody>
        </table><br><br>

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

            b {
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
        <table class="table" style="border: 3px #E0DFDF solid;">
            <thead>
                <tr style="background-color: #E0DFDF;">
                    <th scope="col" colspan="3" style="text-align: center; ">Datos de Compensación Actual de la Persona</th>
                </tr>
            </thead>
            <tbody>
                <tr style="border: 2px white solid; background-color: #FF7E39;">
                    <th scope="col">Item</th>
                    <th scope="col" style="text-align: center;">Mensual </th>
                    <th scope="col" style="text-align: center;">Observaciones</th>
                </tr>
                <tr>
                    <td scope="row">Sueldo / salario básico Actual</td>
                    <td style="text-align: center;"><?php echo $datos['salBasicMen'] ?></td>
                    <td style="text-align: center;"><?php echo $datos['salBasicObs'] ?></td>

                </tr>
                <tr>
                    <td scope="row">Modalidad de pago</td>
                    <td style="text-align: center;"><?php echo $datos['modalidadPagoMen'] ?></td>
                    <td style="text-align: center;"><?php echo $datos['modalidadPagoObs'] ?></td>
                </tr>
                <tr>
                    <td scope="row">Salario Variable Actual</td>
                    <td style="text-align: center;"><?php echo $datos['salVariMen'] ?></td>
                    <td style="text-align: center;"><?php echo $datos['salVariObs'] ?></td>
                </tr>
                <tr>
                    <td scope="row">Otros beneficios Actuales</td>
                    <td style="text-align: center;"><?php echo $datos['otrosBenMen'] ?></td>
                    <td style="text-align: center;"><?php echo $datos['otrosBenObs'] ?></td>
                </tr>
                <tr>
                    <td scope="row">Aspiración Salarial</td>
                    <td style="text-align: center;"><?php echo $datos['aspiracionSalMen'] ?></td>
                    <td style="text-align: center;"><?php echo $datos['aspiracionSalObs'] ?></td>
                </tr>
            </tbody>
            <br>
        </table>
        <?php
        function imprimir($d)
        {
            if ($d[0] == "SI" || $d[0] == 'si' || $d[0] == 'on') {
                echo "<li type='disc'><label>$d[1]</label><br>";
            }
        }
        function otros($o)
        {
            if ($o == "" || $o == " ") {
                echo  "<dd><li type='circle'><label>No se registro otro conocimiento</label></li></dd>";
            } else {
                echo "<dd><li type='circle'>$o</li></dd>";
            }
        }
        ?>
        <h4>
            <p><i style="color: #68CCFE;"> 1)</i><b>Correspondencia entre el perfil profesional del candidato y el perfil requerido:</b></p>
        </h4>
        <div>
            <?php imprimir([$datos['ajusteAlto'], "AjusteAlto"]) ?>
        </div>
        <div>
            <?php imprimir([$datos['ajusteMedioAlto'], "Ajuste Medio Alto"]) ?>
        </div>
        <div>
            <?php imprimir([$datos['ajusteMedioBajo'], "Ajuste Medio Bajo"]) ?>
        </div>
        <div>
            <?php imprimir([$datos['parcialAjusteBajo'], "Parcialmente Ajuste Bajo"]) ?>
        </div>

        <br><br><br>

        <h4>
            <p><i style="color: #68CCFE;"> 2)</i><b> ¿El perfil profesional del candidato se ajusta a las necesidades en términos de formación y experiencia que requiere el cargo?</b></p>
        </h4>
        <p> -<?php echo $datos['perfilAjustaSN'] ?> <br>
            <?php echo $datos['perfilAjusta'] ?></p><br><br>


        <h4>
            <p><i style="color: #68CCFE;"> 3)</i><b> Para lograr una buena adaptación al cargo se identifican necesidades de formación en:</b></p>
        </h4>
        <p> -<?php echo $datos['adaptarCargo'] ?></p><br><br>


        <?php if ($datos['proceso'] == 'Interno') {
            $retroalimen = $datos['elementosRetro'];
            echo "<h4>
            <p><i style='color: #68CCFE;'> 4)</i><b> Elementos relevantes para aportar en la Retroalimentación </b></p>
        </h4>
        <p> -$retroalimen</p><br><br>";
        } ?>

        <h4>
            <p><i style="color: #68CCFE;"> # </i><b> Comentarios adicionales: </b></p>
        </h4>
        <p> -<?php echo $datos['comentarios'] ?></p><br><br>

        <p style="text-align: left;"><b>Resumen de la Valoración</b></p>
        <?php imprimir([$datos['adecuado'], "Adecuado(a)"]) ?>
        </div>
        <div>
            <?php imprimir([$datos['adecuadoP'], "Adecuado(a) para otro cargo"]) ?>
        </div>
        <div>
            <?php imprimir([$datos['parcialmente'], "Parcialmente adecuado(a)"]) ?>
        </div>
        <div>
            <?php imprimir([$datos['primera'], "Primera Opción"]) ?>
        </div>
        <div>
            <?php imprimir([$datos['segunda'], "Segunda Opción"]) ?>
        </div>
        <div>
            <?php imprimir([$datos['noA'], "No Adecuado(a)"]) ?>
        </div>
        <br>
        <br><br>


        <br>
        <br><br>
        <footer>
            <table>
                <tr>
                    <td style="text-align: left;">
                        <img src="../Firmas/<?php echo $datos['co'] ?>.png" alt="La/el Business Partner NO tiene agregada una firma digital" width="250px" height="50px">
                        <br>
                        <span>--------------------------------------</span>
                        <br>
                        <span>Firma Entrevistador/a: <span><br><b style="font-size: 1rem;"><?php echo $datos['entrevistador'] ?></b>
                    </td>
                </tr>
            </table>
        </footer>

    <?php
        $nombre = $datos['nombreCandidato'];
        $cc = "Concepto Business Partner de $nombre $cc";
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