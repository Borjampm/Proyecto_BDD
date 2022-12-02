<html>
<?php include('./templates/header.html');   ?>
    <body class="bg-light text-white">
    
    <div>
    <h1 class="display-4 text-success" align="center">Portal de Eventos Musicales</h1>
    </div>

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
            <input type="submit" class="btn btn-outline-success" value="Iniciar sesión">
        </form>
    <?php } else { ?>
        <form align="center" action="views/logout.php" method="post">
            <input type="submit" value="Cerrar sesión">
        </form>
    <?php } ?>
        <form align="center" action='./queries/importar_usuarios.php' method='GET'>
            <input class='btn btn-outline-success' type='submit' value='Importar Usuarios'>
        </form>


    </body>
</html>
