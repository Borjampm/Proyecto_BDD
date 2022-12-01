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
        $id= $_SESSION['tipo_id'];
        $query = "SELECT crear_evento('$nombre'::varchar, '$fecha_inicio'::varchar, '$ciudad'::varchar, '$pais'::varchar, '$recinto'::varchar,  $id);";

        $result = $db1 -> prepare($query);
        $result -> execute();
        $resultado_evento = $result -> fetchAll();

        $resultado_evento = $resultado_evento[0]["crear_evento"];
        if ($resultado_evento == 0){
            $msg = "NO SE PUDO CREAR EL EVENTO";
            header("Location: ./crear_evento.php?msg=$msg");

        } else{
            $msg = "EVENTO CREADO CORRECTAMENTE";
        header("Location: ./home.php?msg=$msg");
        }
    }
?>
