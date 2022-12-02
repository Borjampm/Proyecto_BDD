<?php
    session_start();
    if (isset($_GET['msg'])){
        $msg = $_GET['msg'];
    } else{
        $msg = "INGRESAR CREDENCIALES";
    }
?>

<?php include('../templates/header.html'); ?>

<body>
    <!-- <h3> Ingrese nombre de usuario y contraseña </h3> -->
    <br>
    <form class="form-signin" role="form" action="login_validation.php" method="post">
        <?php echo $msg; ?>
        <div class="mb-3">
        <input class="form-control" type="text" name="username" placeholder="nombre de usuario" required autofocus>
        <input class="form-control" type="password" name="password" placeholder="contraseña" required>
        </div>
        <!-- <select type="tipo" name="tipo" placeholder="contraseña" required> -->
        <button type="submit" name="login"> Iniciar sesión </button>
    </form>

</body>
