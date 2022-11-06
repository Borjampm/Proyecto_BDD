<?php include('../templates/header.html');   ?>

<body>
<?php
  #Llama a conexión, crea el objeto PDO y obtiene la variable $db
  #WHERE artistas.nombre_artistico ILIKE ‘%$nombre%’
  #WHERE LOWER(artistas.nombre_artistico) = LOWER('$nombre')
  require("../config/conexion.php");

  $nombre = $_POST["nombre"];
  $query = "SELECT DISTINCT productoras.nombre
            FROM Artistas
            INNER JOIN Artista_en_evento ON artistas.id_artista = artista_en_evento.id_artista
            INNER JOIN Eventos
            ON eventos.id_productora = artista_en_evento.id_productora AND  eventos.id_evento = artista_en_evento.id_evento
            INNER JOIN Productoras ON eventos.id_productora = productoras.id_productora
            WHERE LOWER(artistas.nombre_artistico) = LOWER('nombre');";
;
	$result = $db -> prepare($query);
	$result -> execute();
	$productoras = $result -> fetchAll();
  ?>


	<table align="center">
    <tr>
      <th>Nombre</th>
    </tr>
  <?php
	foreach ($productoras as $productora) {
  		echo "<tr><td>$productora[0]</td></tr>";
	}
  ?>
	</table>

<?php include('../templates/footer.html'); ?>
