<?php include('../templates/header.html');   ?>

<body>
<?php
  #Llama a conexión, crea el objeto PDO y obtiene la variable $db
  #WHERE artistas.nombre_artistico ILIKE ‘%$nombre%’
  #WHERE LOWER(artistas.nombre_artistico) = LOWER('$nombre')
  require("../config/conexion.php");

  $nombre = $_POST["nombre"];
  $query = "SELECT tours.id_tour, tours.nombre, tours.fecha_inicio, tours.fecha_termino
            FROM Artistas
            INNER JOIN Artista_en_evento ON artistas.id_artista = artista_en_evento.id_artista
            INNER JOIN Eventos
            ON eventos.id_productora = artista_en_evento.id_productora AND  eventos.id_evento = artista_en_evento.id_evento
            INNER JOIN Tours ON eventos.evento = tours.nombre
            WHERE artistas.nombre_artistico ILIKE ‘%$nombre%’
            ORDER BY tours.fecha_inicio DESC
            LIMIT 1;";
	$result = $db -> prepare($query);
	$result -> execute();
	$tours = $result -> fetchAll();
  ?>


	<table align="center">
    <tr>
      <th>Id</th>
      <th>Nombre</th>
      <th>Fecha Inicio</th>
      <th>Fecha Termino</th>
    </tr>
  <?php
	foreach ($tours as $tour) {
  		echo "<tr><td>$tour[0]</td><td>$tour[1]</td><td>$tour[2]</td><td>$tour[3]</td></tr>";
	}
  ?>
	</table>

<?php include('../templates/footer.html'); ?>
