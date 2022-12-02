<?php
include('../templates/header.html');
require("../config/conexion.php");

$msg = $_GET['msg'];

echo $msg;
$query = "SELECT categoria, COUNT(categoria) as Numero_de_entradas FROM entradas WHERE nombre_evento = '$msg' GROUP BY categoria;";
$result = $db2 -> prepare($query);
$result -> execute();
$entradas = $result -> fetchAll();
if(empty($entradas)){
    echo "<p>El evento no tiene entradas disponibles</p>";
} else {
    ?>
    <table class='table'>
                    <thead>
                        <tr>
                            <th>Categoria</th>
                            <th>Cantidad Entradas</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($entradas as $entrada) {
                                echo "<tr>";
                                echo "<td>$entrada[0]</td> ";
                                echo "<td>$entrada[1]</td> ";
                                echo "</tr>";
                            }
                            ?>
                        </tbody>
                </table>

<?php }?>


