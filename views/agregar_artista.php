<?php
include('../templates/header.html');
require("../config/conexion.php");

$query = "SELECT id_artista, nombre_artistico FROM artistas;";
$result = $db1 -> prepare($query);
$result -> execute();
$artistas = $result -> fetchAll();
$msg = $_GET['msg'];

$query = "SELECT artistas.nombre_artistico, artistas.numero_contacto FROM artista_en_evento, artistas WHERE artista_en_evento.id_evento = '$msg' AND artista_en_evento.id_artista = artistas.id_artista;";
$result = $db1 -> prepare($query);
$result -> execute();
$artistas_display = $result -> fetchAll();

?>
<br>
<body>
<form align="center" action="./home.php" method="get">
            <input class='btn btn-outline-success' type="submit" value="Volver al inicio">
    </form>
    <h3 class="display-6" align="center"> Seleccione un artista para invitar a su evento </h3>
    <br>
    <?php echo '<form class="form-signin" role="form" action="agregar_artista_validation.php?msg='.$msg.'" method="post">'; ?>
    <div class="d-grid gap-2 col-6 mx-auto">
        <select class="form-select" name="id_artista">
            <?php
            #Para cada tipo agregamos el tag <option value=value_of_param> visible_value </option>
            foreach ($artistas as $d) {
                echo '<option value="'.$d[0].'">'.$d[1].'</option>';
            }
            ?>
        </select>
        </div>
        <button class='btn btn-outline-success' type="submit" name="agregar_artista"> Invitar artista </button>
    </form>

    <h2> Artistas Invitados </h2>
    <table class='table'>
        <thead>
            <tr>
            <th>Nombre</th>
            <th>Número de Contacto</th>
            </tr>
        </thead>
            <tbody>
                <?php
                foreach ($artistas_display as $artista) {
                    echo "<tr>";
                    echo "<td>$artista[0]</td> ";
                    echo "<td>$artista[1]</td> ";
                    echo "</tr>";
                }
                ?>
            </tbody>
    </table>

</body>

