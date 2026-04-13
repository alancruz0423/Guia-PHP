<?php
session_start();
$hora_inicio = $_SESSION['inicio'];
$hora_actual = time();
$tiempo_activo = $hora_actual - $hora_inicio;
?>

<?php include("includes/header.php"); ?>
<?php include("includes/menu.php"); ?>

<main>
  <!-- Sección de variables -->
  <section>
    <h2>Ejemplos de Variables en PHP</h2>
    <?php
    // Variables de diferentes tipos
    $cadena = "Hola, soy una cadena de texto";
    $entero = 42;
    $decimal = 3.1416;
    $booleano = true;
    $arreglo = array("PHP", "HTML", "CSS");

    echo "<p>String: $cadena</p>";
    echo "<p>Entero: $entero</p>";
    echo "<p>Float: $decimal</p>";
    echo "<p>Boolean: " . ($booleano ? "Verdadero" : "Falso") . "</p>";

    echo "<p>Array:</p>";
    foreach($arreglo as $valor){
        echo "- $valor <br>";
    }

    echo "<p>Fecha actual: " . date("d-m-Y H:i:s") . "</p>";
    echo "<p>Cantidad de elementos en el arreglo: " . count($arreglo) . "</p>";
    ?>
  </section>

  <!-- Sección de tabla comparativa -->
  <section>
    <h2>Tipos de datos en PHP</h2>
    <table>
      <tr><th>Tipo</th><th>Ejemplo</th></tr>
      <tr><td>String</td><td>"Hola"</td></tr>
      <tr><td>Integer</td><td>42</td></tr>
      <tr><td>Float</td><td>3.14</td></tr>
      <tr><td>Boolean</td><td>true / false</td></tr>
      <tr><td>Array</td><td>["PHP", "HTML", "CSS"]</td></tr>
    </table>
  </section>

  <!-- Sección de sesión -->
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
