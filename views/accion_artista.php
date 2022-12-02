<?php
include('../templates/header.html');
require("../config/conexion.php");

$msg = explode(",", $_GET['msg']);
$id_artista = $msg[0];
$id_evento = $msg[1];
$estado = $msg[3];
$id_productora = $msg[2];

$query = "SELECT accion_artista($id_artista, $id_evento, $estado, $id_productora);";
$result = $db1 -> prepare($query);
$result -> execute();
$artistas_display = $result -> fetchAll();
print_r($artistas_display);
echo $artistas_display[0]['accion_artista'];

$msg2 = "Evento" . " " . $artistas_display[0];

// header("Location: ./home.php?msg=$msg2");

?>


