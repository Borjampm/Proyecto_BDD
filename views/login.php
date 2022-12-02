<?php
    session_start();
    if (isset($_GET['msg'])){
        $msg = $_GET['msg'];
    } else{
        $msg = "INGRESAR CREDENCIALES";
    }
?>

<?php include('../templates/header.html'); ?>

<body align="center">
    <br>
    <form class="form-signin" role="form" action="login_validation.php" method="post" align="center">
    <h3 class="display-6"> Ingrese sus credenciales </h3>
        <div class="d-grid gap-2 col-6 mx-auto">
        <input class="form-control" type="text" name="username" placeholder="Nombre de Usuario" required autofocus>
        <input class="form-control" type="password" name="password" placeholder="Contraseña" required>
        </div>
        <!-- <select type="tipo" name="tipo" placeholder="contraseña" required> -->
        <br></br>
        <button class='btn btn-outline-success' type="submit" name="login"> Iniciar sesión </button>
    </form>

</body>