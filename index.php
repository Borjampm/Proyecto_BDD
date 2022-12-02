<html>
<?php include('./templates/header.html');   ?>
    <body class="bg-dark text-white">
    
    <div>
    <h1 class="display-1 text-info" align="center">Portal de Eventos Musicales</h1>
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
            <input type="submit" value="Iniciar sesión">
        </form>
    <?php } else { ?>
        <form align="center" action="views/logout.php" method="post">
            <input type="submit" value="Cerrar sesión">
        </form>
    <?php } ?>
    <h3>Importar Usuarios</h3>
        <form  action='./queries/importar_usuarios.php' method='GET'>
            <input class='btn' type='submit' value='Importar Usuarios'>
        </form>


    </body>
</html>
