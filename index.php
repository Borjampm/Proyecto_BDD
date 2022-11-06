<?php include('templates/header.html');   ?>

<body>
  <h1 align="center"> Centro de Informaciones de Eventos Musicales </h1>
  <p style="text-align:center;">Aquí podrás encontrar información sobre todo lo que está ocurriendo en el mundo de la musica.</p>

  <br>

  <h3 align="center"> ¿Quieres ver los nombres artisticos de todos los artistas y sus numeros de contacto?</h3>

  <form align="center" action="consultas/consulta_nombreytelefono_artistas.php" method="post">
    <input type="submit" value="Buscar">
  </form>

  <br>
  <br>
  <br>

  <h3 align="center"> ¿Quieres ver las entradas de cortesia que ha entregado un artista?</h3>

  <form align="center" action="consultas/consulta_cantidad_entradas_cortesia.php" method="post">
    Nombre Artistico:
    <input type="text" name="nombre">
    <br/><br/>
    <input type="submit" value="Buscar">
  </form>

  <br>
  <br>
  <br>

  <h3 align="center"> ¿Quieres conocer los Pokemones más altos que: ?</h3>

  <form align="center" action="consultas/consulta_altura.php" method="post">
    Altura Mínima:
    <input type="text" name="altura">
    <br/><br/>
    <input type="submit" value="Buscar">
  </form>
  <br>
  <br>
  <br>

  <h3 align="center">¿Quieres buscar todos los pokemones por tipo?</h3>

  <?php
  #Primero obtenemos todos los tipos de pokemones
  require("config/conexion.php");
  $result = $db -> prepare("SELECT DISTINCT tipo FROM pokemones;");
  $result -> execute();
  $dataCollected = $result -> fetchAll();
  ?>

  <form align="center" action="consultas/consulta_tipo.php" method="post">
    Seleccinar un tipo:
    <select name="tipo">
      <?php
      #Para cada tipo agregamos el tag <option value=value_of_param> visible_value </option>
      foreach ($dataCollected as $d) {
        echo "<option value=$d[0]>$d[0]</option>";
      }
      ?>
    </select>
    <br><br>
    <input type="submit" value="Buscar por tipo">
  </form>

  <br>
  <br>
  <br>
  <br>
</body>
</html>
