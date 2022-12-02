<html>
<?php include('./templates/header.html');   ?>
    <body class="bg-light text-white">
    

    <?php session_start();
    if (isset($_SESSION['username'])){
        echo "Bienvenido/a: ";
        echo $_SESSION['username'];
    }
?>
 <?php
        if (!isset($_SESSION['username'])) {
    ?>
        <form align="center" action="views/login.php" method="get">
            <input type="submit" class="btn btn-outline-info" value="Iniciar sesión">
        </form>
    <?php } else { ?>
        <form align="center" action="views/logout.php" method="post">
            <input type="submit" class='btn btn-outline-danger' value="Cerrar sesión">
        </form>
    <?php } ?>
        <form align="center" action='./queries/importar_usuarios.php' method='GET'>
            <input class='btn btn-outline-danger' type='submit' value='Importar Usuarios'>
        </form>


    </body>
</html>
