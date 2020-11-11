<?php ob_start();
$objCnx = new mysqli("localhost", "root", "", "eneljac");
$cc = $_GET['cc'];

$query = "SELECT * FROM entrevistapsicologica where cc = $cc and terminado = 'True'";
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
                <th>
                    <h1>Entrevista Psicologica</h1>
                </th>
                <th><img src="../img/enel.png" alt="Entrevista_Enel.com" width="250" height="100" style="margin-left: 35%;"></th>
            </tr>
        </table>
    </header>
    <hr />
    <?php
    require_once "../Model/conexioon.php";
    $sql = "SELECT * FROM entrevistapsicologica where cc = $cc and terminado='True'";
    $rta = $objCnx->query($sql);
    while ($datos = $rta->fetch_array()) {
        switch ($datos['responsabilidad']) {
            case '1':
                $datos['responsabilidad'] = "<table style='width:100%'><tr>
                <th><h2>Responsabilidad</h2></th>
                </tr><tr><td style=' background-color: rgb(226, 239, 218)'><h3>Fortalezas</h3><br><p>Asiste o cumple con sus responsabilidades con uno que otro error ocasional.</p></td>
                  <td style='background-color: rgb(252, 228, 214)'><h3>Debilidades</h3><br><p>  Emplea de manera deficiente los recursos a su disposición para alcanzar los resultados.
                    Entrega sus productos d emanera inoportuna la mayoría de las veces o no los entrega con la calidad esperada.   Puede perder de vista sus obligaciones, si no tiene un control externo que se las recuerde.   No manifiesta un sentido de urgencia en el cumplimiento de sus deberes.</p></td></tr>
              </table> ";
                break;
            case '2':
                $datos['responsabilidad'] = "<table style='width:100%'><tr>
                <th><h2>Responsabilidad</h2></th>
                </tr><tr><td style=' background-color: rgb(226, 239, 218)><h3>Fortalezas</h3><br><p> Cumple la mayor parte de las tareas que se le solicitan, con calidad aceptable.  La calidad de sus trabajos es suficiente</p></td>
                  <td style='background-color: rgb(252, 228, 214)'><h3>Debilidades</h3><br><p> Puede que presente demoras frecuentes en la entregas de los resultados esperados.  Los recursos que emplea para entregar resultados no son usados de manera eficiente.  No prevee posibles retrasos.</p></td></tr>
              </table>";
                break;
            case '3':
                $datos['responsabilidad'] = "<table style='width:100%'><tr>
                <th><h2>Responsabilidad</h2></th>
                </tr><tr><td style=' background-color: rgb(226, 239, 218)><h3>Fortalezas</h3><br><p> Emplea la totalidad de las directrices corporativas en sus entregables.  Alcanza los resultados mínimos exigidos por la compañía.  Desde su rol, protege los intereses de la compañía.  Obtiene y mantiene los resultados mes a mes.</p></td>
                  <td style='background-color: rgb(252, 228, 214)'><h3>Debilidades</h3><br><p> No se interesa demasiado en conocer los recursos con los que cuenta y que le pueden ayudar a obtener resultados.  En ocasiones se le dificulta entregar la totalidada de los productos en los plazos acordados, lo cual puede generar inconvenientes. 
                  </p></td></tr>
              </table>";
                break;
            case '4':
                $datos['responsabilidad'] = "<table style='width:100%'><tr>
                <th><h2>Responsabilidad</h2></th>
                </tr><tr><td style=' background-color: rgb(226, 239, 218)><h3>Fortalezas</h3><br><p>
                - Cumple lo que promete, sólo con excepción de incidentes fuera de su control
                - Puede focalizar su atención y energía la mayoría de las veces con el fin de aprobar los retos de su rol.  Entiende las dinámicas de trabajo y detecta oportunidades de mejora.   Emplea el tiempo de trabajo de manera eficiente para cumplir las tareas de su rol profesional.  Se muestra dispuesto a en implementar innovaciones que faciliten el desarrollo de sus responsabilidades.</p></td>
                  <td style='background-color: rgb(252, 228, 214)'><h3>Debilidades</h3><br><p> Puede presentar retrasos ocasionales en sus entregas, que no afectan la calidada de los productos.</p></td></tr>
              </table>";
                break;
            case '5':
                $datos['responsabilidad'] = "<table style='width:100%'><tr>
                <th><h2>Responsabilidad</h2></th>
                </tr><tr><td style=' background-color: rgb(226, 239, 218)'><h3>Fortalezas</h3><br><p>' Cumple sus obligaciones con atención en lo que hace o decide.  Se esmera por refinar sus entregables y optimizar la calidad de sus productos.   Su trabajo promueve activos importante para los intereses de la compañía.   Prioriza adecuadamente sus tareas y el cronograma de actividades dispuesto para su cumplimiento.   Altamente orentado a los resultados. Preve los posibles retrasos de los plazos de entrega y toma acciones para solucionarlo.  Entiende las dinámicas de trabajo y detecta oportunidades de mejora tanto a nivel de las personas como a nivel de los procesos.  Es una persona que facilita el cumplimieto de los objetivos del equipo de trabajo, mediante tranferencias de conocimiento a partir de sus experiencias exitosas.</p></td>
                  <td style='background-color: rgb(252, 228, 214)'><h3>Debilidades</h3><br><p>Tiene potencial para incorporar nuevos métodos de mejora que faciliten la entrega de resultados a nivel laboral. </p></td></tr>
              </table>";
                break;
        }
        switch ($datos['productividad']) {
            case '1':
                $datos['productividad'] = "<table style='width:100%'><tr>
                <th><h2>productividad</h2></th>
                </tr><tr><td style=' background-color: rgb(226, 239, 218)'><h3>Fortalezas</h3><br><p>Realiza el trabajo que se le solicita cuando se le hace seguimiento constante.  Cumple con los aspectos básicos del trabajo que debe realizar.</p></td>
                  <td style='background-color: rgb(252, 228, 214)'><h3>Debilidades</h3><br><p>No sabe emplear los recursos a su disposición para alcanzar los resultados.  No alcanza resultados, y emplea una gran cantidad de recursos.  Los ingresos y beneficios que debería lograr, no son alcanzados.  Los resultados que obtiene no son constantes ni tienden a aumentar. No planifica su horario y no prioriza las tareas más importantes.  No preve los posibles retrasos.  Se distrae de manera repetitiva y no alcanza resultados.  No entiende las dinámicas de trabajo, por lo que no detecta oportunidades de mejora.</p></td></tr>
              </table>";
                break;
            case '2':
                $datos['productividad'] = "<table style='width:100%'><tr>
                <th><h2>Productividad</h2></th>
                </tr><tr><td style=' background-color: rgb(226, 239, 218)'><h3>Fortalezas</h3><br><p>Alcanza los resultados mínimos que debe lograr.  Conoce las tareas que debe realizar, por lo que mantiene su atención en esto.  Con su trabajo, busca que los ingresos y beneficios no disminuyan.</p></td>
                  <td style='background-color: rgb(252, 228, 214)'><h3>Debilidades</h3><br><p>No sabe emplear los recursos a su disposición para alcanzar los resultados.  A pesar de que conoce las metas que debe lograr, no alcanza resultados, y emplea una gran cantidad de recursos.  Los ingresos y beneficios que debería lograr, no son alcanzados.  Los resultados que obtiene no son constantes ni tienden a aumentar.  Se puede distraer miestras intenta alcanzar los resultados.  No preve los posibles retrasos.</p></td></tr>
              </table>";
                break;
            case '3':
                $datos['productividad'] = "<table style='width:100%'><tr>
                <th><h2>Productividad</h2></th>
                </tr><tr><td style=' background-color: rgb(226, 239, 218)'><h3>Fortalezas</h3><br><p>Sabe que hay unos recursos que le permiten alcanzar los resultados, sin profundizar demasiado en conocerlos.  Alcanza los resultados.  Con su trabajo, logra que los ingresos se mantengan y sean constantes.  Obtiene y mantiene los resultados mes a mes.  Conoce las tareas que debe realizar, organizando su tiempo para cumplir.  En la mayoría de las ocasiones, evita distracciones que retrasen su trabajo.</p></td>
                  <td style='background-color: rgb(252, 228, 214)'><h3>Debilidades</h3><br><p>No se interesa demasiado en conocer los recursos con los que cuenta y que le pueden ayudar a obtener resultados.  Los recursos con los que cuenta, muchas veces no son empleados.  Obtiene resultados, pero no suele proponer una estrategia para que estos aumeten.  No sabe priorizar entre todas las tareas que debe desarrollar, dandole importancia en ocasiones a aspectos poco importantes.  No preve los posibles retrazos de los plazos de entrega.</p></td></tr>
              </table>";
                break;
            case '4':
                $datos['productividad'] = "<table style='width:100%'><tr>
                <th><h2>Productividad</h2></th>
                </tr><tr><td style=' background-color: rgb(226, 239, 218)'><h3>Fortalezas</h3><br><p>Conoce  los recursos con lo que cuenta para alcanzar resultados.  Alcanza los resultados esperados, empleando todos los recursos que ponen a su alcance.  Con su trabajo, logra ocasionalmente aumentar los ingresos y beneficios.  Obtiene resultados que de vez en cuando tienden a aumentar, siendo estáticos la mayoria del tiempo.  Planifica su horario y se organiza para cumplir con las tareas que debe cumplir.  Preve los posibles retrazos de los plazos de entrega.  Evita distracciones que no le permitan alcanzar los resultados.  Entiende las dinámicas de trabajo y detecta oportunidades de mejora.</p></td>
                  <td style='background-color: rgb(252, 228, 214)'><h3>Debilidades</h3><br><p> En algunas ocasiones no sab optimizar los recursos con los que cuenta a la hora de buscar un resultado.  Puede mejorar los resultados, con el fin de que estos crezcan de manera constante.  Se le puede dificultar la priorización de las tareas que debe llevar a cabo.
                   Preve los restrasos en plazos de entrega, pero puede dificultársele la toma de una acción.</p></td></tr>
              </table>";
                break;
            case '5':
                $datos['productividad'] = "<table style='width:100%'><tr>
                <th><h2>Productividad</h2></th>
                </tr><tr><td style=' background-color: rgb(226, 239, 218)'><h3>Fortalezas</h3><br><p> Usa de manera óptima los recursos a la hora de generar los resultados.  Alcanza los resultados esperados, empleando una cantidad menor de recursos.  Con su trabajo incrementa de manera constante los ingresos y beneficios.  Obtiene resultados que de manera constante crecen, no son estáticos sino que tienden a aumentar.  Planifica su horario y le da prioridad a sus tareas; se organiza y tiene la capacidad de crear listas de tareas y cumplirla.  Preve los posibles retrasos de los plazos de entrega y toma acciones para solucionarlo.
                Entiende las dinámicas de trabajo y detecta oportunidades de mejora tanto a nivel de las personas como a nivel de los procesos.</p></td>
                  <td style='background-color: rgb(252, 228, 214)'><h3>Debilidades</h3><br><p>Tiene la posibilidad de emplear las herramientas personales con las que cuenta en pro de mejorar y crecer profesionalmente.</p></td></tr>
              </table>";
                break;
        }
        switch ($datos['gestionCambio']) {
            case '1':
                $datos['gestionCambio'] = "<table style='width:100%'><tr>
                <th><h2>Gestion del Cambio</h2></th>
                </tr><tr><td style=' background-color: rgb(226, 239, 218)'><h3>Fortalezas</h3><br><p>Entiende que en las organizaciones existen cambios.</p></td>
                  <td style='background-color: rgb(252, 228, 214)'><h3>Debilidades</h3><br><p>Evalúa negativamente las situaciones en las cuales puede existir cambios en sus tareas, en los procedimientos, políticas y sistemas por medio de los cuales se rige su trabajo. Percibe como peligrosas las transformaciones por lo cual experimenta repetidamente altos grados de ansiedad en el proceso de adaptación y obstaculiza el proceso de adaptación de los demás.</p></td></tr>
              </table>";
                break;
            case '2':
                $datos['gestionCambio'] = "<table style='width:100%'><tr>
                <th><h2>Gestion del Cambio</h2></th>
                </tr><tr><td style=' background-color: rgb(226, 239, 218)'><h3>Fortalezas</h3><br><p>' Entiende la finalidad y el plan de acción para llevar a cabo el cambio.
                 Hace parte de los procesos de sensibilización implementados para entender el cambio.</p></td>
                  <td style='background-color: rgb(252, 228, 214)'><h3>Debilidades</h3><br><p> Evita tener contacto con su nuevo entorno y se aferra a antiguos procesos y creencias para realizar sus tareas. No cuenta con la habilidad para crear oportunidades que lleven a la implementación de los nuevos sistemas, enfoques, estructuras o métodos.</p></td></tr>
              </table>";
                break;
            case '3':
                $datos['gestionCambio'] = "<table style='width:100%'><tr>
                <th><h2>Gestion del Cambio</h2></th>
                </tr><tr><td style=' background-color: rgb(226, 239, 218)'><h3>Fortalezas</h3><br><p> Le gusta interactuar con su nuevo entorno y está motivado para comprender las estpas del cambio. Ayuda a la gente a desarrollar una correcta visión de lo que se necesita hacer de manera diferente como resultado de los cambios en la organización. Toma responsabilidad de los cambios que debe hacer desde su posición individual con el fin de alcanzar los nuevos objetivos. </p></td>
                  <td style='background-color: rgb(252, 228, 214)'><h3>Debilidades</h3><br><p> No facilita implementa o apoya las actividades administrativas; comunicación, capacitación, desarrollo del trabajo en equipo y procesos de acompañamiento.
                  No tiene una visión a largo plazo desarrollada para comprender el verdadero impacto del cambio.
                   Toma una posición pasiva en la cual solo sigue las instrucciones dadas por otros y colabora, pero no propone soluciones creativas a necesidades existentes.
                  </p></td></tr>
              </table>";
                break;
            case '4':
                $datos['gestionCambio'] = "<table style='width:100%'><tr>
                <th><h2>Gestion del Cambio</h2></th>
                </tr><tr><td style=' background-color: rgb(226, 239, 218)'><h3>Fortalezas</h3><br><p> Es abierto al cambio, está orientado al reto y tiene una visión global a largo plazo por lo cual entiende la importancia de los pequeños cambios en todos los procesos dentro de las organizaciones.
                 Participa activamente en los cambios, proponiendo ideas nuevas para facilitar la adopción de los nuevos procesos.
                 Ayuda a la gente a desarrollar una correcta visión de lo que se necesita hacer de manera diferente como resultado de los cambios en la organización
                 Toma responsabilidad de los cambios que debe hacer desde su posición individual con el fin de alcanzar los nuevos objetivos.
                 Facilita los cambios en la dirección del negocio o los procesos; facilita la sociedad con otros grupos u organizaciones; facilita el cambio de políticas, procesos o procedimientos.</p></td>
                  <td style='background-color: rgb(252, 228, 214)'><h3>Debilidades</h3><br> En ocasiones no se preocupa por fortalecer sus capacidades para facilitar el proceso de adaptación al cambio. Es decir, no busca herramientas, medios o motivos para estar al día y encontrar las formas más convenientes para ser más eficaz en las nuevas estructuras de trabajo.
                   No es una persona inquieta o curiosa por buscar información acerca del cambio en el corto plazo.<p></p></td></tr>
              </table>";
                break;
            case '5':
                $datos['gestionCambio'] = "<table style='width:100%'><tr>
                <th><h2>gestion del Cambio</h2></th>
                </tr><tr><td style=' background-color: rgb(226, 239, 218)'><h3>Fortalezas</h3><br><p>' Ayuda a la gente a desarrollar una correcta visión de lo que se necesita hacer de manera diferente como resultado de los cambios en la organización.
                 Toma responsabilidad de los cambios que debe hacer desde su posición individual con el fin de alcanzar los nuevos objetivos.
                 Facilita los cambios en la dirección del negocio o los procesos; facilita la sociedad con otros grupos u organizaciones; facilita el cambio de políticas, procesos o procedimientos.
                 Tiene la capacidad para asumir los cambios sin que esto altere el alcance de los objetivos que se han propuesto con antelación. Tiene la capacidad de entender como válidas perspectivas y situaciones diferentes a las que se está acostumbrado.
                 Logra superar las etapas del cambio organizacional (Negación, Defensa, Aceptación) y logra adaptarse.
                 Existe una valoración tanto de ventajas como desventajas del cambio que le impulsan a experimentarlo y adaptarse.</p></td>
                  <td style='background-color: rgb(252, 228, 214)'><h3>Debilidades</h3><br><p> Tiene la posibilidad de emplear las herramientas personales con las que cuenta y con la búsqueda de nueva información para participar constantemente y activamente en la formulación de propuestas novedosas que beneficien el cambio.</p></td></tr>
              </table>";
                break;
        }
        switch ($datos['innovacion']) {
            case '1':
                $datos['innovacion'] = "<table style='width:100%'><tr>
                <th><h2>Innovacion</h2></th>
                </tr><tr><td style=' background-color: rgb(226, 239, 218)'><h3>Fortalezas</h3><br><p>' Trabaja ante situaciones conocidas y rutinarias.  Cumple con los planteamientos básicos del trabajo que debe realizar.</p></td>
                  <td style='background-color: rgb(252, 228, 214)'><h3>Debilidades</h3><br><p> Presenta dificultades para identificar problemas que se presentan ante situaciones nuevas, considerandolas como situaciones dificiles de afrontar. Necesita que le digan como ejecutar y prefiere que otros las realicen.  Se aferra a sus propias opiniones y no es crítico respecto de su accionar.  Es estructurado y le gusta moverse en situaciones conocidas y con pautas de acción prefijadas.</p></td></tr>
              </table>";
                break;
            case '2':
                $datos['innovacion'] = "<table style='width:100%'><tr>
                <th><h2>Innovacion</h2></th>
                </tr><tr><td style=' background-color: rgb(226, 239, 218)'><h3>Fortalezas</h3><br><p> Presenta algunas dificultades para ejecutar nuevas ideas y llevarlas a la práctica.
                 Prefiere recibir ayuda para realizar actividades fuera de lo establecido.</p></td>
                  <td style='background-color: rgb(252, 228, 214)'><h3>Debilidades</h3><br><p> Plantea ídeas innovadoras ante situaciones sencillas, cuando tiene tiempo y recibe adecuado apoyo.  Aporta ideas que tienen un impacto menor en las funciones que realiza.  Ante algunas situaciones requiere ayuda para ejecutar sus nuevas ideasy llevarlas a la práctica.</p></td></tr>
              </table>";
                break;
            case '3':
                $datos['innovacion'] = "<table style='width:100%'><tr>
                <th><h2>Innovacion</h2></th>
                </tr><tr><td style=' background-color: rgb(226, 239, 218)'><h3>Fortalezas</h3><br><p> Toma decisiones y acciones con iniciativa para generar desarrollo en las diferentes tareas en las que participa, superando obstaculos y dificultades con facilidad.
                 Busca capacitarse, para desarrollar continuamente y ser parte de equipos trabajan en el desarrollo de la creatividad y la innovación.</p></td>
                  <td style='background-color: rgb(252, 228, 214)'><h3>Debilidades</h3><br><p> Requiere ayuda para estar al día con los cambios de su área y relacionarlos con las funciones asignadas en su trabajo.  Está informado acerca de los cambios del contexto organizacional y del equipo de trabajo.  Requiere apoyo para relacionar los cambios organizacionales con los cambios que demandan su trabajo.</p></td></tr>
              </table>";
                break;
            case '4':
                $datos['innovacion'] = "<table style='width:100%'><tr>
                <th><h2>Innovacion</h2></th>
                </tr><tr><td style=' background-color: rgb(226, 239, 218)'><h3>Fortalezas</h3><br><p> Optimiza los resultados a través de la identificación, planteamiento y resolución de problemas de forma alternativa.
                 Es proactivo ante situaciones que requieren actuar con rapidez y autonomía frente a problemas que requieren encontrar una pronta solución.
                 Frecuentemente sus  ideas generan un impacto significativo para ejecutar las funciones del área.
                 Toma decisiones con iniciativa para generar nuevas formas de resolución de problemas dentro de su entorno profesional. </p></td>
                  <td style='background-color: rgb(252, 228, 214)'><h3>Debilidades</h3><br><p> Presenta dificultades a la hora de diferenciar entre prioridad y urgencia.</p></td></tr>
              </table>";
                break;
            case '5':
                $datos['innovacion'] = "<table style='width:100%'><tr>
                <th><h2>Innovacion</h2></th>
                </tr><tr><td style=' background-color: rgb(226, 239, 218)'><h3>Fortalezas</h3><br><p> Actúa de forma proactiva e innovadora para promover mejoras que busquen mejores prácticas para generar mayores ingresos.
                 Constantemente aporta  nuevas ideas que generan valor agregado al equipo de trabajo.
                 Tiene alta capacidad para reaccionar en forma oportuna y acertada frente a nuevas situaciones.
                 Se anticipa a los cambios y a las nuevas demandas del mercado a través depropuestas que van a la vanguardia y generan valor agregado al equipo de trabajo y la compañía.
                 Alcanza activamente nuevos planteamientos que se adelanten a los cambios del entorno, tomando decisiones oportunas con criterio propio.</p></td>
                  <td style='background-color: rgb(252, 228, 214)'><h3>Debilidades</h3><br><p>SIN ASPECTOS NEGATIVOS</p></td></tr>
              </table>";
                break;
        }
        switch ($datos['resiliencia']) {
            case '1':
                $datos['resiliencia'] = "<table style='width:100%'><tr>
                <th><h2>Resiliencia</h2></th>
                </tr><tr><td style=' background-color: rgb(226, 239, 218)'><h3>Fortalezas</h3><br><p> Reconoce que presenta dificultad para sobreponerse ante situaciones adversas.</p></td>
                  <td style='background-color: rgb(252, 228, 214)'><h3>Debilidades</h3><br><p> Presenta dificultad en la recuperación frente a eventos adversos.  Toma siempre los problemas como un obstáculo.  Le cuesta enfrentar y  aceptar los cambios como parte de la vida.  Constantemente atribuye la culpa a otras personas o al sistema de los obstáculos que se presentan.  Se le dificulta aclarar sus objetivos.  Frente a situaciones adversas se le dificulta buscar apoyo emocional yo familiar.  Se muestra como una persona negativa. </p></td></tr>
              </table>";
                break;
            case '2':
                $datos['resiliencia'] = "<table style='width:100%'><tr>
                <th><h2>Resiliencia</h2></th>
                </tr><tr><td style=' background-color: rgb(226, 239, 218)'><h3>Fortalezas</h3><br><p> Alcanza a recuperarse ante situaciones que ya ha vivido.  Intenta mostrarse positiva ante situaciones difíciles.</p></td>
                  <td style='background-color: rgb(252, 228, 214)'><h3>Debilidades</h3><br><p> Eventualmente se recupera frente a situaciones adversas que son nuevas.  Usualmente se  bloquea con las dificultades siendo poco eficaz cuando estos se producen.  Puede generar dramatismo y no mostrar predisposición para seguir con la vida de manera natural.  Usualmente ignora los problemas imposibilitando levantarse de ellos de manera pronta.</p></td></tr>
              </table>";
                break;
            case '3':
                $datos['resiliencia'] = "<table style='width:100%'><tr>
                <th><h2>Resiliencia</h2></th>
                </tr><tr><td style=' background-color: rgb(226, 239, 218)'><h3>Fortalezas</h3><br><p> Es consiente de la importancia  de salir adelante ante situaciones adversas.  Presenta reacciones simples para el  enfrentamiento de  situaciones difíciles.  En la mayoría de ocasiones toma los momentos difíciles como aprendizaje.</p></td>
                  <td style='background-color: rgb(252, 228, 214)'><h3>Debilidades</h3><br><p> El evento es tomado como intolerable pero genera acciones reconstructivas aunque con dificultad.  Eventualmente  toma el adverso como medio de enseñanza hacia los demás, la mayoría de las veces  prefiere no socializar el problema.  Puede seguir trabajando en la confianza de si mismo para atacar mas fácilmente los momentos adversos. </p></td></tr>
              </table>";
                break;
            case '4':
                $datos['resiliencia'] = "<table style='width:100%'><tr>
                <th><h2>Resiliencia</h2></th>
                </tr><tr><td style=' background-color: rgb(226, 239, 218)'><h3>Fortalezas</h3><br><p> Es capaz de diferenciar la situación actual con el evento adverso.  Usualmente se  apoya en el núcleo familiar y social.  Se ve a sí mismo como fortalecido posteriormente a la situación adversa.  Cultiva y valora sus relaciones interpersonales.  Observa el problema desde diferentes puntos de vista.  Es capaz de  diseñar un plan de acción y  ponerlo en marcha una vez se presente la  situación.</p></td>
                  <td style='background-color: rgb(252, 228, 214)'><h3>Debilidades</h3><br><p>  Aunque  lucha por salir adelante, cuando el rumbo de sus objetivos cambia puede sentirse mal al haber abandonado su objetivo inicial.   Tiene clara la importancia de salir adelante frente a situaciones difíciles, sin embargo en ocasiones de le dificulta  generar  mecanismos transformadores de supervivencia.</p></td></tr>
              </table>";
                break;
            case '5':
                $datos['resiliencia'] = "<table style='width:100%'><tr>
                <th><h2>Resiliencia</h2></th>
                </tr><tr><td style=' background-color: rgb(226, 239, 218)'><h3>Fortalezas</h3><br><p> Se recupera frente a la adversidad  bajo condiciones de enorme stress.  Siempre toma el adverso como medio de enseñanza hacia los demás.  Ante situaciones difíciles busca  siempre el apoyo emocional y familiar.  Siempre toma la experiencia como enriquecedora.  Se adapta rápidamente a cambios repentinos manteniendo los niveles de eficacia y efectividad.  Tiene la capacidad de  fortalecerse y recuperarse de inmediato  Es optimista, Disfruta de los pequeños detalles y no pierde su capacidad para asombrarse ante la vida a pesar de las dificultades.  Es perseverante, si algo la distingue es su capacidad de lucha.  Generalmente se rodea de personas que mantienen una actitud positiva ante la vida.  Aprende a lidiar con la incertidumbre, para que no cause el menor malestar posible.  Es una  persona segura de sí misma y confía en lo que hace.  Siempre se encuentra preparadoa para reaccionar y sobrevivir ante la adversidad.  Tiene la habilidad de improvisar una solución sin contar con herramientas apropiadas.</p></td>
                  <td style='background-color: rgb(252, 228, 214)'><h3>Debilidades</h3><br><p> Tiene el potencial para  emplear más  herramientas personales emocionales que le permitan enfrentar cualquier tipo de situación adversa.</p></td></tr>
              </table>";
                break;
        }

        switch ($datos['confianza']) {
            case '1':
                $datos['confianza'] = "<table style='width:100%; text-align: justify'><tr>
        <th><h2>Confianza</h2></th>
        </tr><tr><td style=' background-color: rgb(226, 239, 218)'><h3>Fortalezas</h3><br><p>Identifica situaciones en las que se debe confiar en otras personas o hechos.</p></td>
          <td style='background-color: rgb(252, 228, 214)'><h3>Debilidades</h3><br><p>No es capaz de suspender la incertidumbre respecto a las acciones de los demás. Hay momentos en los que no se le simplifican las relaciones sociales, pues no cree en sus propias habilidades. Tiene la creencia de que no puede actuar de manera adecuada en una determinada situación. No es capaz de expresar lo que desea en una situación de diálogo y respeto. No logra evaluar las situaciones de manera adecuada, para identificar si es posible confiar en los demás. Se muestra familiar en la convivencia con los demás, sin poner los limites que permitan el desarrollo adecuado de la relación. No actúa de manera sincera, disminuyendo la credibilidad y confianza de los demás.
          </p></td></tr>
      </table>";
                break;
            case '2':
                $datos['confianza'] = "<table style='width:100%'><tr>
        <th><h2>Confianza</h2></th>
        </tr><tr><td style=' background-color: rgb(226, 239, 218)'><h3>Fortalezas</h3><br><p>Logra confiar y gestionar situaciones de incertidumbre. Cree tener la capacidad para entablar relaciones con otras personas.</p></td>
          <td style='background-color: rgb(252, 228, 214)'><h3>Debilidades</h3><br><p>No sabe reconocer los contextos en los cuales se debe brindar menos confianza. Aunque logra expresar sus pensamientos e ideas con confianza, se le puede dificultar realizarlo en un espacio de respeto mutuo. No logra expresar sus pensamientos e ideas en un ámbito de dialogo y respeto. Hay momentos en los que se le dificulta poner los limites referentes a la confianza, pues se muestra o muy familiar o muy hostil.</p></td></tr>
      </table>";
                break;
            case '3':
                $datos['confianza'] = "<table style='width:100%'><tr>
        <th><h2>Confianza</h2></th>
        </tr><tr><td style=' background-color: rgb(226, 239, 218)'><h3>Fortalezas</h3><br><p>Logra gestionar situaciones de incertidumbre de manera básica, prediciendo ciertas conductas. Cree que puede entablar relaciones con otros y diálogos. Piensa que es capaz de responder de manera adecuada frente a situaciones. Se muestra cercano en las relaciones con las personas de su entorno.</p></td>
          <td style='background-color: rgb(252, 228, 214)'><h3>Debilidades</h3><br><p>Logra gestionar situaciones de incertidumbre de manera básica, prediciendo ciertas conductas. Cree que puede entablar relaciones con otros y diálogos. Piensa que es capaz de responder de manera adecuada frente a situaciones. Se muestra cercano en las relaciones con las personas de su entorno.Logra gestionar situaciones de incertidumbre de manera básica, prediciendo ciertas conductas. Cree que puede entablar relaciones con otros y diálogos. Piensa que es capaz de responder de manera adecuada frente a situaciones. Se muestra cercano en las relaciones con las personas de su entorno.Logra gestionar situaciones de incertidumbre de manera básica, prediciendo ciertas conductas. Cree que puede entablar relaciones con otros y diálogos. Piensa que es capaz de responder de manera adecuada frente a situaciones. Se muestra cercano en las relaciones con las personas de su entorno.</p></td></tr>
      </table>";
                break;
            case '4':
                $datos['confianza'] = "<table style='width:100%'><tr>
        <th><h2>Confianza</h2></th>
        </tr><tr><td style=' background-color: rgb(226, 239, 218)'><h3>Fortalezas</h3><br><p>Es capaz de gestionar la certeza total de las situaciones, prediciendo acciones en momentos de incertidumbre. Cree en sus habilidades para entablar relaciones. Cree que puede actuar de manera adecuada en ciertos momentos. Es capaz de expresar sus pensamientos en un espacio de dialogo. Se muestra cercano en las relaciones con las demás personas, además, sabe poner los limites necesarios. Actúa de manera sincera con los demás.</p></td>
          <td style='background-color: rgb(252, 228, 214)'><h3>Debilidades</h3><br><p>No sabe reconocer los contextos en los cuales se debe brindar menos confianza. Aunque logra expresar sus pensamientos e ideas con confianza, se le puede dificultar realizarlo en un espacio de respeto mutuo.</p></td></tr>
      </table>";
                break;
            case '5':
                $datos['confianza'] = "<table style='width:100%'><tr>
        <th><h2>Confianza</h2></th>
        </tr><tr><td style=' background-color: rgb(226, 239, 218)'><h3>Fortalezas</h3><br><p>'Es capaz de suspender la incertidumbre respecto a las acciones de los demás, prediciendo sus acciones y comportaminetos. Se le simplifican las relaciones sociales y cree en sus propias habilidades. Tiene la creencia de que puede actuar de manera adecuada en una determinada situación. Es capaz de expresar lo que desea en una situación de diálogo y respeto. Logra evaluar las situaciones de manera adecuada, para identificar si es posible confiar en los demás. Se muestra familiar en la convivencia con los demás, poniendo los limites que permitan el desarrollo adecuado de la relación. Actúa de manera sincera, incrementando la credibilidad y confianza de los demás.</p></td>
          <td style='background-color: rgb(252, 228, 214)'><h3>Debilidades</h3><br><p>En ocasiones no sabe reconocer los contextos en los cuales se debe brindar menos confianza.</p></td></tr>
      </table>";
                break;
        }
    ?>
        <br>
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
                    <td>Cargo al que Aspira: </td>
                    <td> <?php echo $datos['cargoAspira'] ?></td>
                </tr>
                <tr>
                    <td>Telefono: </td>
                    <td> <?php echo $datos['telefono'] ?> </td>
                </tr>
                <tr>
                    <td>Aspiracion Salarial: </td>
                    <td> <?php echo $datos['aspiracionSal'] ?> </td>
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
                    <td>Cargo: </td>
                    <td> <?php echo $datos['cargo'] ?></td>
                </tr>
                <tr>
                    <td>Resultado de Idiomas: </td>
                    <td><?php echo $datos['resultadoI'] ?> </td>
                </tr>
                <tr>
                    <td>Fuente de Reclutamiento: </td>
                    <td> <?php echo $datos['fuenteR'] ?> </td>
                </tr>
                <tr>
                    <td>Candidato Unico: </td>
                    <td> <?php echo $datos['candidatoU'] ?> </td>
                </tr>
                <tr>
                    <td>Explicacion de candidato unico: </td>
                    <td> <?php echo $datos['explicacion'] ?> </td>
                </tr>
                <tr>
                    <td>Comportamiento Ético: </td>
                    <td> <?php echo $datos['comportamientoEtico'] ?> </td>
                </tr>
                <tr>
                    <td>Resulucion de problemas complejos: </td>
                    <td> <?php echo $datos['resolucionProblemas'] ?> </td>
                </tr>
                <tr>
                    <td>Observaciones: </td>
                    <td> <?php echo $datos['observaciones'] ?> </td>
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
        </style>
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
        <br><br><br>
        <h2 class="titulo"><b>Digital Skills- Self-assessment</b></h2>
        <div>
            <div class="contenedor1">
                <div>
                    <h5 class="titulo2"><b>Working Tools & Methodologies</b></h5>
                    <div>
                        <?php imprimir([$datos['dswm1'], "MS Office basics (Word, Excel, Powerpoint)"]); ?>
                    </div>
                    <div>
                        <?php imprimir([$datos['dswm2'], "MS Office advanced (Access, Project)"]) ?>
                    </div>
                    <?php imprimir([$datos['dswo3'], "Outlook"]) ?>
                </div>
                <div>
                    <?php imprimir([$datos['dswc4'], "Communication tools (Teams, Yammer)"]) ?>
                </div>
                <div>
                    <?php imprimir([$datos['dswp5'], "Project Management"]) ?>
                </div>
                <div>
                    <?php imprimir([$datos['dswa6'], "Agile"]) ?>
                </div>
                <div>
                    <?php imprimir([$datos['dswd7'], "Desing thinking"]) ?>
                </div>

                <label><b>Other</b><br>
                    <?php otros($datos['other1']) ?>
            </div><br>

            <h5 class="titulo3"><b>Soft Digital Skills</b></h5>
            <div>
                <?php imprimir([$datos['dssk1'], "Knowledge Networking"]) ?>
            </div>
            <div>
                <?php imprimir([$datos['dssp2'], "Problem Solving"]) ?>
            </div>
            <div>
                <?php imprimir([$datos['dssv3'], "Virtual Communication"]) ?>
            </div>
            <div>
                <?php imprimir([$datos['dssd4'], "Digital Awareness"]) ?>
            </div>
            <div>
                <?php imprimir([$datos['dssd5'], "Data and device security"]) ?>
            </div>
            <div>
                <?php imprimir([$datos['dssc6'], "Content creation"]) ?>
            </div>
            <div>
                <b>Other</b><br>
                <?php otros($datos['other2']) ?>
            </div>
            <h5 class="titulo4"><b>Digital Hard Skills</b></h5>
            <div>
                <?php imprimir([$datos['dsdp1'], "Programming languages"]) ?>
            </div>
            <div>
                <?php imprimir([$datos['dsdc2'], "Cloud Services"]) ?>
            </div>
            <div>
                <?php imprimir([$datos['dsdi3'], "It System Management and Enterprise architecture"]) ?>
            </div>
            <div>
                <?php imprimir([$datos['dsdc4'], "Cyber Security"]) ?>
            </div>
            <div>
                <?php imprimir([$datos['dsdu5'], "UX/UI Desing"]) ?>
            </div>
            <div>
                <?php imprimir([$datos['dsdm6'], "Mobile"]) ?>
            </div>
            <div>
                <?php imprimir([$datos['dsdd7'], "Data & Analytics"]) ?>
            </div>
            <div>
                <?php imprimir([$datos['dsdi8'], "Internet of Things"]) ?>
            </div>
            <div>
                <?php imprimir([$datos['dsdi9'], "It Plataforms"]) ?>
            </div>
            <div>
                <?php imprimir([$datos['dsdr10'], "Robotic Process Automation"]) ?>
            </div>
            <div> <b>Other</b><br>
                <?php otros($datos['other3']) ?>
            </div>
            <br><br>
            <hr>
        </div>
        </div>
        <br><br>
        <style>
            table,
            th,
            td {

                border-collapse: collapse;
            }

            td {
                padding: 7px;
                text-align: justify
            }

            /* tr:nth-child(even) {
                background-color: #dddddd;
            }   */
        </style>
        <h1 style="text-align: center">Competencias</h1>
        <?php echo $datos['responsabilidad'] ?>
        <?php echo $datos['productividad'] ?>
        <?php echo $datos['gestionCambio'] ?>
        <?php echo $datos['innovacion'] ?>
        <?php echo $datos['resiliencia'] ?>
        <?php echo $datos['confianza'] ?>
        <br><br>
        <br />
        <hr />
        <h2>Concepto Psicóloga</h2>
        <p><?php echo $datos['concepto'] ?></p>
        
        <p style="text-align: left;"><b>Concepto (Resumen de la Valoración)</b></p>
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
        <hr />
        <br><br>

        <footer>
            <img src="../Firmas/<?php echo $datos['co'] ?>.png" alt="La Psicologa NO tiene agregada una firma digital" width="200px" height="50px">
            <p>--------------------------------------</p>
            <b><?php echo $datos['psicologa'] ?></b>
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