<?php
        ob_start();
        session_start();
        require("../config/conexion.php");
        include('../templates/header.html');
?>

<?php
    $msg = '';
    if (isset($_POST['nombre']) && !empty($_POST['fecha_inicio']) && !empty($_POST['ciudad']) && !empty($_POST['pais']) && !empty($_POST['recinto']))
    {
        $nombre = $_POST['nombre'];
        $fecha_inicio = $_POST['fecha_inicio'];
        $ciudad = $_POST['ciudad'];
        $pais = $_POST['pais'];
        $recinto = $_POST['recinto'];
        $id = $_SESSION['tipo_id'];
        $estado = "En Espera";
        $query = "SELECT crear_evento('$nombre'::varchar, '$fecha_inicio'::date, '$ciudad'::varchar, '$pais'::varchar, '$recinto'::varchar,  $id, '$estado'::varchar);";

        $result = $db1 -> prepare($query);
        $result -> execute();
        $resultado_evento = $result -> fetchAll();

        $resultado_evento = $resultado_evento[0]["crear_evento"];
        if ($resultado_evento == -1){
            $msg = "NO SE PUDO CREAR EL EVENTO";
            header("Location: ./crear_evento.php?msg=$msg");

        } else{
        header("Location: ./agregar_artista.php?msg=$resultado_evento");
        }
    }
?>
