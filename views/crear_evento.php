<?php
include('../templates/header.html');
require("../config/conexion.php");

$query = "SELECT * FROM recintos;";
$result = $db1 -> prepare($query);
$result -> execute();
$recintos = $result -> fetchAll();

?>

<body>
    <h3> Ingrese nombre de usuario y contraseña </h3>
    <br>
    <form class="form-signin" role="form" action="crear_evento_validation.php" method="post">
        <?php echo $msg; ?>
        <input type="text" name="nombre" placeholder="nombre del evento" required autofocus>
        <input type="date" name="fecha_inicio" placeholder="Fecha de Inicio" required>
        <select name="recinto">
            <?php
            #Para cada tipo agregamos el tag <option value=value_of_param> visible_value </option>
            foreach ($recintos as $d) {
                echo '<option value="'.$d[0].'">'.$d[0].'</option>';
            }
            ?>
        </select>
        <input type="text" name="ciudad" placeholder="Ciudad" required>
        <input type="text" name="pais" placeholder="Pais" required>
        <button type="submit" name="login"> Iniciar sesión </button>
    </form>
</body>

