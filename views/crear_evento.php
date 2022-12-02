<?php
include('../templates/header.html');
require("../config/conexion.php");
if (isset($_GET['msg'])){
    $msg = $_GET['msg'];
} else{
    $msg = "Ingrese los datos del evento";
}

$query = "SELECT nombre FROM recintos;";
$result = $db2 -> prepare($query);
$result -> execute();
$recintos = $result -> fetchAll();

?>

<body align="center">
<h3 class="display-6" align="center"> Ingrese sus credenciales </h3>
    <br>
    <form class="form-signin" role="form" action="crear_evento_validation.php" method="post">
        <div class="d-grid gap-2 col-6 mx-auto">
        <input class="form-control" type="text" name="nombre" placeholder="Nombre del Evento" required autofocus>
        <input class="form-control" type="date" name="fecha_inicio" placeholder="Fecha de Inicio" required>
        <input class="form-control" type="text" name="ciudad" placeholder="Ciudad" required>
        <input class="form-control" type="text" name="pais" placeholder="País" required>
        <select class="form-select" name="recinto">
            <?php
            #Para cada tipo agregamos el tag <option value=value_of_param> visible_value </option>
            foreach ($recintos as $d) {
                echo '<option value="'.$d[0].'">'.$d[0].'</option>';
            }
            ?>
        </select>        
        <button class='btn btn-outline-success' type="submit" name="crear_evento"> Crear Evento </button>
        </div>

    </form>
</body>