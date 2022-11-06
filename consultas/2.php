<?php include('../templates/header.html');   ?>

<body>
<?php
  #Llama a conexión, crea el objeto PDO y obtiene la variable $db
  require("../config/conexion.php");

  $nombre = $_POST["nombre"];
  $query = "SELECT artistas.nombre_artistico, COUNT(artistas.nombre_artistico) as entradas_de_cortesía_entregadas
            FROM entradas_cortesia INNER JOIN artistas ON entradas_cortesia.id_artista = artistas.id_artista
            WHERE artistas.nombre_artistico ILIKE '%$nombre%'
            GROUP BY artistas.nombre_artistico;";
	$result = $db -> prepare($query);
	$result -> execute();
	$artistas = $result -> fetchAll();
  ?>

	<table align="center">
    <tr>
      <th>Nombre</th>
      <th>Cantidad de entradas</th>
    </tr>
  <?php
	foreach ($artistas as $artista) {
  		echo "<tr><td>$artista[0]</td><td>$artista[1]</td></tr>";
	}
  ?>
	</table>

<?php include('../templates/footer.html'); ?>
