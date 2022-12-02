<?php include('../templates/header.html');
require("../config/conexion.php");
?>
<?php session_start();
?>
<?php
        if (!isset($_SESSION['username'])) {
        ?>
            <form align="center" action="./login.php" method="get">
                <input type="submit" value="Iniciar sesión">
            </form>
        <?php } else {

            if ($_SESSION["tipo"] == "artista"){
                // VISTA PARA ARTISTAS
                echo "Bienvenido/a ";
                echo $_SESSION['username'];
                echo "\n";

                $tipo_id = $_SESSION['tipo_id'];

                $query = "SELECT * FROM artista_en_evento
                INNER JOIN eventos ON artista_en_evento.id_evento = eventos.id_evento
                WHERE artista_en_evento.id_artista = '$tipo_id' ;";
                $result = $db1 -> prepare($query);
                $result -> execute();
                $eventos = $result -> fetchAll();

                ?>
                                <form align="center" action="./logout.php" method="post">
                    <input type="submit" value="Cerrar sesión">
                </form>
                    <h2> Eventos Programados </h2>
                    <?php
                foreach ($eventos as $evento) {
                    if ($evento[11] == "Programado"){
                echo "<h3> $evento[5]</h3>";
                echo "<p> - Fecha: $evento[9]</p>";
                echo "<p> - Recinto: $evento[6]</p>";


                $query = "SELECT * FROM artista_en_evento
                INNER JOIN artistas ON artista_en_evento.id_artista = artistas.id_artista
                WHERE artista_en_evento.id_evento = '$evento[4]'
                AND  artistas.id_artista != '$evento[2]';";
                $result = $db1 -> prepare($query);
                $result -> execute();
                $artistas = $result -> fetchAll();

                // if ($evento[7] == "Programado"){
                    if(empty($artistas)){
                        echo "<p>No hay más artistas en este evento</p>";
                    }else{
                        echo "<p> - Otros artistas: </p>";
                        foreach ($artistas as $artista) {
                            echo "<p>   ->  $artista[5]</p>";
                        }
                    }
                $query = "SELECT * from tours WHERE tours.nombre =  '$evento[5]';";
                $result = $db1 -> prepare($query);
                $result -> execute();
                $tours = $result -> fetchAll();
                if(empty($tours)){
                    echo "<p>El evento no pertenece a un Tour</p>";
                } else {
                    $tour = $tours[0];
                    echo "<p> - Tour: $tour[1]</p>";
                }

                echo "<p> - Entradas de Cortesía: </p>";
                    foreach ($artistas as $artista) {
                        // if ($evento[7] == "Programado"){
                    echo "<p>   ->  $artista[5]</p>";
                        }


                    }
                    }
                    ?>

                    <h2> Eventos en Espera de Aprobación </h2>
                <table class='table'>
                    <thead>
                        <tr>
                        <th>Nombre</th>
                        <th>Fecha de Inicio</th>
                        <th>Recinto</th>
                        <th>Ciudad</th>
                        <th>Pais</th>
                        <th>Acción</th>
                    </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($eventos as $evento) {
                                if ($evento[3] == "En Espera"){
                                echo "<tr>";
                                echo "<td>$evento[5]</td> ";
                                echo "<td>$evento[9]</td> ";
                                echo "<td>$evento[6]</td> ";
                                echo "<td>$evento[7]</td> ";
                                echo "<td>$evento[8]</td> ";
                                $msg = json_encode(array($tipo_id, $evento[0], $evento[6], "Aprobado"));
                                $msg2 = json_encode(array($tipo_id, $evento[0], $evento[6], "Rechazado"));
                                echo '<td>
                                        <form align="center" action="./accion_artista.php?msg='.$msg.'" method="post">
                                        <input type="submit" value="Aceptar">
                                        </form>
                                        <form align="center" action="./accion_artista.php?msg='.$msg2.'" method="post">
                                        <input type="submit" value="Rechazar">
                                        </form>
                                    </td> ';
                                echo "</tr>";
                                }
                            }
                            ?>
                        </tbody>
                </table>


            <?php } else {
                // VISTA PARA PRODUCTORAS
                echo "Bienvenido/a ";
                echo $_SESSION['username'];
                echo "\n";
                ?>
                <form align="center" action="./logout.php" method="post">
                    <input type="submit" value="Cerrar sesión">
                </form>
                <form align="center" action="./crear_evento.php" method="get">
                    <input type="submit" value="Crear Evento">
                </form>

                <?php

                $tipo_id = $_SESSION['tipo_id'];

                $query = "SELECT * FROM eventos WHERE eventos.id_productora = '$tipo_id' ORDER BY eventos.fecha_inicio ASC;";
                $result = $db1 -> prepare($query);
                $result -> execute();
                $eventos = $result -> fetchAll();
                ?>


                <h2> Eventos Programados </h2>
                <table class='table'>
                    <thead>
                        <tr>
                        <th>Nombre</th>
                        <th>Fecha de Inicio</th>
                        <th>Recinto</th>
                        <th>Ciudad</th>
                        <th>Pais</th>
                        <th>Estado</th>
                    </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($eventos as $evento) {
                                if ($evento[7] == "Programado"){
                                echo "<tr>";
                                echo "<td>$evento[1]</td> ";
                                echo "<td>$evento[5]</td> ";
                                echo "<td>$evento[2]</td> ";
                                echo "<td>$evento[3]</td> ";
                                echo "<td>$evento[4]</td> ";
                                echo "<td>Programado</td> ";
                                echo "</tr>";
                                }
                            }
                            ?>
                        </tbody>
                </table>
                <h2> Eventos en Espera </h2>
                <table class='table'>
                    <thead>
                        <tr>
                        <th>Nombre</th>
                        <th>Fecha de Inicio</th>
                        <th>Recinto</th>
                        <th>Ciudad</th>
                        <th>Pais</th>
                        <th>Estado</th>
                    </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($eventos as $evento) {
                                if ($evento[7] == "En Espera"){
                                echo "<tr>";
                                echo "<td>$evento[1]</td> ";
                                echo "<td>$evento[5]</td> ";
                                echo "<td>$evento[2]</td> ";
                                echo "<td>$evento[3]</td> ";
                                echo "<td>$evento[4]</td> ";
                                echo "<td>En Espera</td> ";
                                echo "</tr>";
                                }
                            }
                            ?>
                        </tbody>
                </table>
                <h2> Eventos Rechazados </h2>
                <table class='table'>
                    <thead>
                        <tr>
                        <th>Nombre</th>
                        <th>Fecha de Inicio</th>
                        <th>Recinto</th>
                        <th>Ciudad</th>
                        <th>Pais</th>
                        <th>Estado</th>
                    </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($eventos as $evento) {
                                if ($evento[7] == "Rechazado"){
                                echo "<tr>";
                                echo "<td>$evento[1]</td> ";
                                echo "<td>$evento[5]</td> ";
                                echo "<td>$evento[2]</td> ";
                                echo "<td>$evento[3]</td> ";
                                echo "<td>$evento[4]</td> ";
                                echo "<td>Rechazado</td> ";
                                echo "</tr>";
                                }
                            }
                            ?>
                        </tbody>
                </table>

                <?php

                    }
                } ?>
</html>
