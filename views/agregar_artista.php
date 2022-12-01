<?php
include('../templates/header.html');
require("../config/conexion.php");
if (isset($_GET['msg'])){
    $msg = $_GET['msg'];
} else{
    $msg = "INGRESAR CREDENCIALES";
}

$query = "SELECT id_artista, nombre_artistico FROM artistas;";
$result = $db1 -> prepare($query);
$result -> execute();
$artistas = $result -> fetchAll();

?>

<body>
    <h3> Seleccione un artista para invitar a su evento </h3>
    <br>
    <form class="form-signin" role="form" action="agregar_artista_validation.php" method="post">
        <select name="recinto">
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
</body>

