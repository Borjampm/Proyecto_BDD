<?php

    // Nos conectamos a las bdds
    require("../config/conexion.php");
    include('../templates/header.html');

    // Primero obtenemos todos los pokemons de la tabla que queremos agregar
    $query = "SELECT nombre_artistico, id_artista FROM artistas;";
    $result = $db1 -> prepare($query);
    $result -> execute();
    $artistas = $result -> fetchAll();



    foreach ($artistas as $artista){

        // Luego construimos las querys con nuestro procedimiento almacenado para ir agregando esas tuplas a nuestra bdd objetivo
        // Hacemos una verificacion para ver si el pokemon es legendario porque ese parámetro no se comporta muy bien entre php y sql
        // asi que lo agregamos manualmente al final (por eso los FALSE o TRUE)
        $username = str_replace(" ", "_", $artista[0]);
        $psw = rand(10000000, 99999999);
        $tipo = "artista";
        $query = "importar_usuario($username, $psw, $tipo ,$artista[1]);";
        echo $query;


        // Ejecutamos las querys para efectivamente insertar los datos
        $result = $db1 -> prepare($query);
        $result -> execute();
        $result -> fetchAll();
    }


    // Mostramos los cambios en una nueva tabla
    $query = "SELECT * FROM usuarios;";
    $result = $db1 -> prepare($query);
    $result -> execute();
    $usuarios = $result -> fetchAll();

?>

    <body>  
        <table class='table'>
            <thead>
                <tr>
                <th>id</th>
                <th>username</th>
                <th>password</th>
                <th>tipo</th>
                <th>id_tipo</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($usuarios as $usuario) {
                    echo "<tr>";
                    for ($i = 0; $i < 12; $i++) {
                        echo "<td>$usuario[$i]</td> ";
                    }
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
        <footer>
        </footer>
    </body>
</html>