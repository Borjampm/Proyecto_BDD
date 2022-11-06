<?php include('../templates/header.html');   ?>

<body>
<?php
  #Llama a conexión, crea el objeto PDO y obtiene la variable $db
  #WHERE artistas.nombre_artistico ILIKE ‘%$nombre%’
  #WHERE LOWER(artistas.nombre_artistico) = LOWER('$nombre')
  require("../config/conexion.php");

  $nombre = $_POST["nombre"];
  $query = "SELECT DISTINCT eventos.pais
            FROM Eventos
            WHERE LOWER(eventos.evento) = LOWER('$nombre');";
	$result = $db -> prepare($query);
	$result -> execute();
	$paises = $result -> fetchAll();
  ?>


	<table align="center">
    <tr>
      <th>Pais</th>
    </tr>
  <?php
	foreach ($paises as $pais) {
  		echo "<tr><td>$pais[0]</td></tr>";
	}
  ?>
	</table>


<?php include('../templates/footer.html'); ?>
