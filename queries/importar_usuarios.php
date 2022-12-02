<?php

    // Nos conectamos a las bdds
    require("../config/conexion.php");
    include('../templates/header.html');

    //ARTISTAS
    $query = "SELECT nombre_artistico, id_artista FROM artistas;";
    $result = $db1 -> prepare($query);
    $result -> execute();
    $artistas = $result -> fetchAll();
    $n_artistas_malo = 0;



    foreach ($artistas as $artista){

        $username = str_replace(" ", "_", $artista[0]);
        $psw = rand(10000000, 99999999);
        $tipo = "artista";
        $query = "SELECT importar_usuario('$username'::varchar, '$psw'::varchar, '$tipo'::varchar , $artista[1]);";



        // Ejecutamos las queries para efectivamente insertar los datos
        $result = $db1 -> prepare($query);
        $result -> execute();
        $resultado_artistas = $result -> fetchAll();
        $resultado_artistas = $resultado_artistas[0]["importar_usuario"];
        if ($resultado_artistas == 0){
            $n_artistas_malo = $n_artistas_malo + 1;
        }
    }

    //PRODUCTORAS
    $query = "SELECT nombre, id_productora, pais FROM productoras;";
    $result = $db1 -> prepare($query);
    $result -> execute();
    $productoras = $result -> fetchAll();
    $n_productoras_malo = 0;


    foreach ($productoras as $productora){

        $username = str_replace(" ", "_", $productora[0]);
        $username = $username . "_" . $productora[2];
        $psw = rand(10000000, 99999999);
        $tipo = "productora";
        $query = "SELECT importar_usuario('$username'::varchar, '$psw'::varchar, '$tipo'::varchar , $productora[1]);";


        // Ejecutamos las querys para efectivamente insertar los datos
        $result = $db1 -> prepare($query);
        $result -> execute();
        $resultado_productoras = $result -> fetchAll();
        $resultado_productoras = $resultado_productoras[0]["importar_usuario"];
        if ($resultado_productoras == 0){
            $n_productoras_malo = $n_productoras_malo + 1;
        }
    }

    // AGREGAR HTML
    if ($n_artistas_malo != 0 || $n_productoras_malo != 0){
        echo "No se pudieron crear ".$n_productoras_malo." cuentas de productoras.";
        echo "\n";
        echo "No se pudieron crear ".$n_artistas_malo." cuentas de artistas.";
    } else{
        echo "Se crearon exitosamente todos los usuarios.";
    }

    // Mostramos los cambios en una nueva tabla de usuarios
    $query = "SELECT * FROM usuarios;";
    $result = $db1 -> prepare($query);
    $result -> execute();
    $usuarios = $result -> fetchAll();

?>
    <form  action='../index.php' method='get'>
        <input class='btn' type='submit' value='Volver'>
    </form>


    <body class="bg-light">
    <div class="container"> 

        <table class='table table-light table-hover w-auto table-bordered border-info table-striped'>
            <thead class="table-success">
                <tr>
                <th>Nombre de usuario</th>
                <th>Contraseña</th>
                <th>Categoría</th>
                <th>ID en Categoría</th>
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
    </div>
    </body>
</html>
