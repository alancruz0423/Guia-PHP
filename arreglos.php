<?php
session_start();
$hora_inicio = $_SESSION['inicio'];
$hora_actual = time();
$tiempo_activo = $hora_actual - $hora_inicio;
?>

<?php include("includes/header.php"); ?>
<?php include("includes/menu.php"); ?>

<main>
  <!-- Arreglo indexado -->
  <section>
    <h2>Arreglo indexado</h2>
    <?php
    $colores = array("Rojo", "Verde", "Azul");
    foreach($colores as $color){
        echo "Color: $color <br>";
    }
    ?>
  </section>

  <!-- Arreglo asociativo -->
  <section>
    <h2>Arreglo asociativo</h2>
    <?php
    $edades = array("Ana" => 20, "Luis" => 25, "Carlos" => 30);
    foreach($edades as $nombre => $edad){
        echo "$nombre tiene $edad años <br>";
        if($edad >= 25){
            echo "→ $nombre es mayor de 25 <br>";
        }
    }
    ?>
  </section>

  <!-- Arreglo multidimensional -->
  <section>
    <h2>Arreglo multidimensional</h2>
    <?php
    $alumnos = array(
        array("nombre" => "Ana", "nota" => 9),
        array("nombre" => "Luis", "nota" => 7),
        array("nombre" => "Carlos", "nota" => 6)
    );

    foreach($alumnos as $alumno){
        echo "Alumno: " . $alumno["nombre"] . " - Nota: " . $alumno["nota"] . "<br>";
        if($alumno["nota"] >= 7){
            echo "→ " . $alumno["nombre"] . " aprobó <br>";
        } else {
            echo "→ " . $alumno["nombre"] . " reprobó <br>";
        }
    }
    ?>
  </section>

  <!-- Tabla comparativa de funciones de arreglos -->
  <section>
    <h2>Funciones útiles para arreglos en PHP</h2>
    <table>
      <tr><th>Función</th><th>Uso</th><th>Ejemplo</th></tr>
      <tr><td>count()</td><td>Devuelve número de elementos</td><td>count($array)</td></tr>
      <tr><td>array_push()</td><td>Agrega elementos al final</td><td>array_push($array, "valor")</td></tr>
      <tr><td>array_pop()</td><td>Elimina último elemento</td><td>array_pop($array)</td></tr>
      <tr><td>array_merge()</td><td>Combina dos arreglos</td><td>array_merge($a, $b)</td></tr>
      <tr><td>in_array()</td><td>Verifica si existe un valor</td><td>in_array("Rojo", $colores)</td></tr>
    </table>
  </section>

  <!-- Información de sesión -->
  <section>
    <h3>Información de sesión</h3>
    <?php
    echo "Hora inicio sesión: " . date("H:i:s", $hora_inicio) . "<br>";
    echo "Hora actual: " . date("H:i:s", $hora_actual) . "<br>";
    echo "Tiempo activo: " . floor($tiempo_activo/60) . " minutos " . ($tiempo_activo%60) . " segundos";
    ?>
  </section>
</main>

<?php include("includes/footer.php"); ?>
