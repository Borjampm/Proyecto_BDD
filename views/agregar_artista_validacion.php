<?php
        ob_start();
        session_start();
        require("../config/conexion.php");
        include('../templates/header.html');
?>

<?php
    if (isset($_POST['id_artista']))
    {
        $id_artista = $_POST['id_artista'];
        $id_evento = $msg;
        $estado = "En Espera";
        $id_productora = $_SESSION['tipo_id'];
        $query = "SELECT agregar_artista($id_artista, $id_evento, '$estado'::varchar, $id_productora);";

        $result = $db1 -> prepare($query);
        $result -> execute();
        $resultado = $result -> fetchAll();

        header("Location: ./agregar_artista.php?msg=$msg");
    }
?>
