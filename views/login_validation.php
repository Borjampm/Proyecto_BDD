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
        $username = $_POST['username'];
        $password = $_POST['password'];
        $query = "SELECT user_name, password, tipo, tipo_id FROM usuarios WHERE user_name ='$username'AND password ='$password';";
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
        $_SESSION['tipo'] = $usuario[0][2];
        $_SESSION['tipo_id'] = $usuario[0][3];

        $msg = "SESION INICIADA CORRECTAMENTE";
        header("Location: ./home.php?msg=$msg");
        } else{
            $msg = "CREDENCIALES INVALIDAS";
            header("Location: ./login.php?msg=$msg");
        }
    }
?>
