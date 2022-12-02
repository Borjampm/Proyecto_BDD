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
                echo "Bienvenido/a: ";
                echo $_SESSION['username'];
                echo "\n";

                $tipo_id = $_SESSION['tipo_id'];

                $query = "SELECT id_evento FROM artista_en_evento WHERE id_artista = '$tipo_id' ;";
                $result = $db1 -> prepare($query);
                $result -> execute();
                $eventos = $result -> fetchAll();

                ?>
                                <form align="center" action="./logout.php" method="post">
                    <input type="submit" value="Cerrar sesión">
                </form>
                                <h2> Eventos Programados </h2>
                <table class='table'>
                    <thead>
                        <tr>
                        <th>Nombre</th>
                        <!-- <th>Fecha de Inicio</th>
                        <th>Recinto</th>
                        <th>Ciudad</th>
                        <th>Pais</th>
                        <th>Estado</th> -->
                    </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($eventos as $evento) {
                                // if ($evento[7] == "Programado"){
                                echo "<tr>";
                                echo "<td>$evento[0]</td> ";
                                // echo "<td>$evento[5]</td> ";
                                // echo "<td>$evento[2]</td> ";
                                // echo "<td>$evento[3]</td> ";
                                // echo "<td>$evento[4]</td> ";
                                // echo "<td>Programado</td> ";
                                echo "</tr>";
                                }

                            ?>
                        </tbody>
                </table>


            <?php } else {
                // VISTA PARA PRODUCTORAS
                echo "Bienvenido/a: ";
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
