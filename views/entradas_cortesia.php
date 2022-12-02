<?php
include('../templates/header.html');
require("../config/conexion.php");

$msg = $_GET['msg'];


$query = "SELECT categoria, COUNT(categoria) as Numero_de_entradas FROM entradas WHERE nombre_evento = '$msg' GROUP BY categoria;";
$result = $db2 -> prepare($query);
$result -> execute();
$entradas = $result -> fetchAll();
print_r($entradas);
$msg2 = "Evento" . " " . $estado;

header("Location: ./home.php?msg=$msg2");

?>
