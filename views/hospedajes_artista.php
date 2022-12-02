<?php
include('../templates/header.html');
require("../config/conexion.php");
session_start();


$tipo_id = $_SESSION['tipo_id'];

$query = "SELECT lugar, nombre_hotel, tipo_traslado FROM hospedajes_y_reservas WHERE id_artista = '$tipo_id';";
$result = $db1 -> prepare($query);
$result -> execute();
$viajes = $result -> fetchAll();
if(empty($viajes)){
    echo "<p>El artista no ha viajado</p>";
} else {
    ?>
    <table class='table'>
                    <thead>
                        <tr>
                            <th>Lugar</th>
                            <th>Nombre Hotel</th>
                            <th>Tipo Traslado</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($viajes as $viaje) {
                                echo "<tr>";
                                echo "<td>$viaje[0]</td> ";
                                echo "<td>$viaje[1]</td> ";
                                echo "<td>$viaje[2]</td> ";
                                echo "</tr>";
                            }
                            ?>
                        </tbody>
                </table>

<?php }?>
<form align="center" action="./home.php" method="get">
            <input type="submit" value="Volver a home">
</form>
