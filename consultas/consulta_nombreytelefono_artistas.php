<?php include('../templates/header.html');   ?>

<body>

<?php
  #Llama a conexión, crea el objeto PDO y obtiene la variable $db
  require("../config/conexion.php");


 	$query = "SELECT nombre_artistico, numero_contacto FROM artistas;";
	$result = $db -> prepare($query);
	$result -> execute();
	$artistas = $result -> fetchAll();
  ?>

	<table>
    <tr>
      <th>Nombre Artistico</th>
      <th>Numero Contacto</th>
    </tr>
  <?php
	foreach ($pokemones as $pokemon) {
  		echo "<tr> <td>$artistas[0]</td> <td>$artistas[1]</td> </tr>";
	}
  ?>
	</table>

<?php include('../templates/footer.html'); ?>
