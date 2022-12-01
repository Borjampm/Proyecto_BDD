<?php include('../templates/header.html');
require("../config/conexion.php");
?>
<?php session_start();
?>
<?php
        if (!isset($_SESSION['username'])) {
        ?>
            <form align="center" action="./login.php" method="get">
                <input type="submit" value="Iniciar sesión">
            </form>
        <?php } else { 
            if ($_SESSION["tipo"] == "artista"){
                // VISTA PARA ARTISTAS
                echo "Bienvenido/a: ";
                echo $_SESSION['username'];
                echo "\n";
            
            } 
            
            else{
                // VISTA PARA PRODUCTORAS
                echo "Bienvenido/a: ";
                echo $_SESSION['username'];
                echo "\n";
                ?>
                <form align="center" action="./logout.php" method="post">
                    <input type="submit" value="Cerrar sesión">
                </form>
                <form align="center" action="./crear_evento.php" method="get">
                    <input type="submit" value="Crear Evento">
                </form>
                
                <?php

                $tipo_id = $_SESSION['tipo_id'];

                $query = "SELECT * FROM eventos WHERE eventos.id_productora = '$tipo_id' ORDER BY eventos.fecha_inicio DESC;";
                $result = $db1 -> prepare($query);
                $result -> execute();
                $eventos = $result -> fetchAll();

                ?>
                <h2> Eventos Programados </h2>
                <table class='table'>
                    <thead>
                        <tr>
                        <th>Nombre</th>
                        <th>Fecha de Inicio</th>
                        <th>Recinto</th>
                        <th>Ciudad</th>
                        <th>Pais</th>
                        <th>Estado</th>
                    </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($eventos as $evento) {
                                if ($evento[7] == "Programado"){
                                echo "<tr>";
                                echo "<td>$evento[1]</td> ";
                                echo "<td>$evento[5]</td> ";
                                echo "<td>$evento[2]</td> ";
                                echo "<td>$evento[3]</td> ";
                                echo "<td>$evento[4]</td> ";
                                echo "<td>Programado</td> ";
                                echo "</tr>";
                                }
                            }
                            ?>
                        </tbody>
                </table>
                <h2> Eventos en Espera </h2>
                <table class='table'>
                    <thead>
                        <tr>
                        <th>Nombre</th>
                        <th>Fecha de Inicio</th>
                        <th>Recinto</th>
                        <th>Ciudad</th>
                        <th>Pais</th>
                        <th>Estado</th>
                    </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($eventos as $evento) {
                                if ($evento[7] == "En Espera"){
                                echo "<tr>";
                                echo "<td>$evento[1]</td> ";
                                echo "<td>$evento[5]</td> ";
                                echo "<td>$evento[2]</td> ";
                                echo "<td>$evento[3]</td> ";
                                echo "<td>$evento[4]</td> ";
                                echo "<td>En Espera</td> ";
                                echo "</tr>";
                                }
                            }
                            ?>
                        </tbody>
                </table>
                <h2> Eventos Rechazados </h2>
                <table class='table'>
                    <thead>
                        <tr>
                        <th>Nombre</th>
                        <th>Fecha de Inicio</th>
                        <th>Recinto</th>
                        <th>Ciudad</th>
                        <th>Pais</th>
                        <th>Estado</th>
                    </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($eventos as $evento) {
                                if ($evento[7] == "Rechazado"){
                                echo "<tr>";
                                echo "<td>$evento[1]</td> ";
                                echo "<td>$evento[5]</td> ";
                                echo "<td>$evento[2]</td> ";
                                echo "<td>$evento[3]</td> ";
                                echo "<td>$evento[4]</td> ";
                                echo "<td>Rechazado</td> ";
                                echo "</tr>";
                                }
                            }
                            ?>
                        </tbody>
                </table>

                <?php

                    }
                } ?>
<html>
<body>
<div class='main'>
            <h1 class='title'>Pókemon </h1>
            <div class='container'>
                <h3>Ver base de datos 1</h3>
                <form  action='./queries/bdd1.php' method='GET'>
                    <input class='btn' type='submit' value='Consultar'>
                </form>
            </div>
            <div class='container'>
                <h3>Ver base de datos 2</h3>
                <form  action='./queries/bdd2.php' method='GET'>
                    <input class='btn' type='submit' value='Consultar'>
                </form>
            </div>
            <div class='container'>
                <h3>Procedimiento almacenado 1</h3>
                <form  action='./queries/procedimiento1.php' method='GET'>
                    <input class='btn' type='submit' value='Consultar'>
                </form>
            </div>
            <div class='container'>
                <h3>Procedimiento almacenado 2</h3>

                <form  action='./queries/procedimiento2.php' method='POST'>
                    <div class='form-element'>
                        <label for='name'>Name</label>
                        <input type='text' name='name' />
                    </div>


                    <div class='form-element'>
                        <label for='type'>Type</label>
                        <select name='type' id='type'>
                            <option value='Normal'>Normal</option>
                            <option value='Fire'>Fire</option>
                            <option value='Water'>Water</option>
                            <option value='Grass'>Grass</option>
                            <option value='Flying'>Flying</option>
                            <option value='Fighting'>Fighting</option>
                            <option value='Poison'>Poison</option>
                            <option value='Electric'>Electric</option>
                            <option value='Ground'>Ground</option>
                            <option value='Rock'>Rock</option>
                            <option value='Psychic'>Psychic</option>
                            <option value='Ice'>Ice</option>
                            <option value='Bug'>Bug</option>
                            <option value='Ghost'>Ghost</option>
                            <option value='Steel'>Steel</option>
                            <option value='Dragon'>Dragon</option>
                            <option value='Dark'>Dark</option>
                            <option value='Fairy'>Fairy</option>
                        </select>
                    </div>

                    <div class='form-element'>
                        <label for='total'>Total</label>
                        <input type='number' name='total' />
                    </div>


                    <div class='form-element'>
                        <label for='hp'>HP</label>
                        <input type='number' name='hp' />
                    </div>


                    <div class='form-element'>
                        <label for='attack'>Attack</label>
                        <input type='number' name='attack' />
                    </div>


                    <div class='form-element'>
                        <label for='defense'>Defense</label>
                        <input type='number' name='defense' />
                    </div>


                    <div class='form-element'>
                        <label for='sp_atk'>Sp. Atk</label>
                        <input type='number' name='sp_atk' />
                    </div>


                    <div class='form-element'>
                        <label for='sp_def'>Sp. Def</label>
                        <input type='number' name='sp_def' />
                    </div>


                    <div class='form-element'>
                        <label for='speed'>Speed</label>
                        <input type='number' name='speed' />
                    </div>

                    <div class='form-element'>
                        <label for='legendary'>Legendary</label>
                        <select name='legendary' id='legendary'>
                            <option value='true'>True</option>
                            <option value='false'>False</option>
                        </select>
                    </div>


                    <div class='form-element'>
                        <label for='generation'>Generation</label>
                        <input type='number' name='generation'  min='1' max='3'/>
                    </div>


                    <input class='btn' type='submit' value='Consultar'>
                </form>
            </div>
            </body>
</html>