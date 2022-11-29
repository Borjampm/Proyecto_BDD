<?php
    ob_start();
    session_start();
    require("../config/conexion.php");
    include('../templates/header.html');
?>

<?php

    $msg = '';
    if (isset($_POST['login']) && !empty($_POST['username']) && !empty($_POST['password']))
    {

        $query = "SELECT user_name, password, tipo FROM usuarios WHERE user_name=".$_POST['username']." AND password=".$_POST['password'].";";
        $result = $db1 -> prepare($query);
        $result -> execute();
        $usuario = $result -> fetchAll();

        if($usuario){

        // $rut = $_POST['username'];
        // $user_password = $_POST['password'];
        $_SESSION['valid'] = true;
        $_SESSION['timeout'] = time();
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['password'] = $_POST['password'];
        $_SESSION['tipo'] = $usuario[2];

        $msg = "SESION INICIADA CORRECTAMENTE";
        header("Location: ./home.php?msg=$msg");
        } else{
            //$msg = "CREDENCIALES INVALIDAS";
            header("Location: ./login.php?msg=$query");
        }
    }
?>
