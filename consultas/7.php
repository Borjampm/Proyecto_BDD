<?php include('../templates/header.html');   ?>

<body>

<?php
  #Llama a conexión, crea el objeto PDO y obtiene la variable $db
  require("../config/conexion.php");


 	$query = "SELECT artistas.nombre_artistico
            FROM rntradas_cortesia INNER JOIN artistas ON entradas_cortesia.id_artista = artistas.id_artista
            GROUP BY artistas.nombre_artistico
            ORDER BY COUNT(artistas.nombre_artistico) DESC
            LIMIT 1;";
	$result = $db -> prepare($query);
	$result -> execute();
	$artistas = $result -> fetchAll();
  ?>

	<table align="center">
    <tr>
      <th>Nombre Artistico</th>
    </tr>
  <?php
	foreach ($artistas as $artista) {
  		echo "<tr> <td>$artista[0]</td></tr>";
	}
  ?>
	</table>

<?php include('../templates/footer.html'); ?>
