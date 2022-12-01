<?php
include('../templates/header.html');
require("../config/conexion.php");

$query = "SELECT id_artista, nombre_artistico FROM artistas;";
$result = $db1 -> prepare($query);
$result -> execute();
$artistas = $result -> fetchAll();
$msg = $_GET['msg'];

$query = "SELECT artistas.nombre_artistico, artistas.telefono FROM artista_en_evento, artistas WHERE id_evento = $msg AND artista_en_evento.id_artista = artistas.id_artista;";
$result = $db1 -> prepare($query);
$result -> execute();
$artistas_display = $result -> fetchAll();

?>

<body>
    <h3> Seleccione un artista para invitar a su evento </h3>
    <br>
    <form class="form-signin" role="form" action="agregar_artista_validation.php" method="post">
        <select name="id_artista">
            <?php
            #Para cada tipo agregamos el tag <option value=value_of_param> visible_value </option>
            foreach ($artistas as $d) {
                echo '<option value="'.$d[0].'">'.$d[1].'</option>';
            }
            ?>
        </select>
        <button type="submit" name="agregar_artista"> Invitar artista </button>
    </form>
    <form align="center" action="./home.php" method="get">
            <input type="submit" value="Volver a home">
    </form>

    <h2> Artistas Invitados </h2>
    <table class='table'>
        <thead>
            <tr>
            <th>Nombre</th>
        </tr>
            </thead>
            <tbody>
                <?php
                foreach ($artistas_display as $artista) {
                    echo "<tr>";
                    echo $artista[0];
                    echo $artista[1];
                    echo "</tr>";
                }
                ?>
            </tbody>
    </table>

</body>
