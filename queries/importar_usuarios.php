<?php

    // Nos conectamos a las bdds
    require("../config/conexion.php");
    include('../templates/header.html');

    //ARTISTAS
    $query = "SELECT nombre_artistico, id_artista FROM artistas;";
    $result = $db1 -> prepare($query);
    $result -> execute();
    $artistas = $result -> fetchAll();



    foreach ($artistas as $artista){

        $username = str_replace(" ", "_", $artista[0]);
        $psw = rand(10000000, 99999999);
        $tipo = "artista";
        $query = "SELECT importar_usuario('$username'::varchar, '$psw'::varchar, '$tipo'::varchar , $artista[1]);";



        // Ejecutamos las querys para efectivamente insertar los datos
        $result = $db1 -> prepare($query);
        $result -> execute();
        $result -> fetchAll();
    }

    //PRODUCTORAS
    $query = "SELECT nombre, id_productora, pais FROM productoras;";
    $result = $db1 -> prepare($query);
    $result -> execute();
    $productoras = $result -> fetchAll();



    foreach ($productoras as $productora){

        $username = str_replace(" ", "_", $productora[0]);
        $username = $username . "_" . $productora[2];
        $psw = rand(10000000, 99999999);
        $tipo = "productora";
        $query = "SELECT importar_usuario('$username'::varchar, '$psw'::varchar, '$tipo'::varchar , $productora[1]);";


        // Ejecutamos las querys para efectivamente insertar los datos
        $result = $db1 -> prepare($query);
        $result -> execute();
        $resultado_artista = $result -> fetchAll();
        print_r($resultado_artista)."/n";
    }


    // Mostramos los cambios en una nueva tabla de usuarios
    $query = "SELECT * FROM usuarios;";
    $result = $db1 -> prepare($query);
    $result -> execute();
    $usuarios = $result -> fetchAll();

?>

    <body>
        <table class='table'>
            <thead>
                <tr>
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
                    for ($i = 0; $i < 4; $i++) {
                        echo "<td>$usuario[$i]</td> ";
                    }
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
        <table class='table'>
            <thead>
                <tr>
                <th>result</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
        <footer>
        </footer>
    </body>
</html>
