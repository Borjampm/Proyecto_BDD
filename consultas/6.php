<?php include('../templates/header.html');   ?>

<body>
<?php
  #Llama a conexión, crea el objeto PDO y obtiene la variable $db
  #WHERE artistas.nombre_artistico ILIKE ‘%$nombre%’
  #WHERE LOWER(artistas.nombre_artistico) = LOWER('$nombre')
  require("../config/conexion.php");

  $nombre = $_POST["nombre"];
  $query = "SELECT hospedajes_y_reservas.nombre_hotel, COUNT( hospedajes_y_reservas.nombre_hotel) as Estadias_en_hotel
            FROM Artistas INNER JOIN Hospedajes_y_reservas
            ON artistas.id_artista = hospedajes_y_reservas.id_artista
            WHERE LOWER(artistas.nombre_artistico) = LOWER('$nombre')
            GROUP BY hospedajes_y_reservas.nombre_hotel;";
;
	$result = $db -> prepare($query);
	$result -> execute();
	$hoteles = $result -> fetchAll();
  ?>


	<table align="center">
    <tr>
      <th>Nombre</th>
      <th>Cantidad de Estadias</th>
    </tr>
  <?php
	foreach ($hoteles as $hotel) {
  		echo "<tr><td>$hotel[0]</td><td>$hotel[1]</td></tr>";
	}
  ?>
	</table>

<?php include('../templates/footer.html'); ?>
