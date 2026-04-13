<?php
session_start();
$hora_inicio = $_SESSION['inicio'];
$hora_actual = time();
$tiempo_activo = $hora_actual - $hora_inicio;
?>

<?php include("includes/header.php"); ?>
<?php include("includes/menu.php"); ?>

<main>
  <!-- Ejemplo con for -->
  <section>
    <h2>Bucle for</h2>
    <?php
    for($i = 1; $i <= 5; $i++){
        echo "Número: $i <br>";
    }
    ?>
  </section>

  <!-- Ejemplo con while -->
  <section>
    <h2>Bucle while</h2>
    <?php
    $j = 1;
    while($j <= 5){
        echo "Contador: $j <br>";
        $j++;
    }
    ?>
  </section>

  <!-- Ejemplo con foreach -->
  <section>
    <h2>Bucle foreach</h2>
    <?php
    $frutas = array("Manzana", "Banana", "Naranja", "Uva");
    foreach($frutas as $fruta){
        echo "Fruta: $fruta <br>";
    }
    ?>
  </section>

  <!-- Tabla comparativa de bucles -->
  <section>
    <h2>Comparativa de Bucles en PHP</h2>
    <table>
      <tr><th>Bucle</th><th>Uso</th><th>Ejemplo</th></tr>
      <tr><td>for</td><td>Iteraciones con contador definido</td><td>for($i=0; $i<10; $i++)</td></tr>
      <tr><td>while</td><td>Iteraciones mientras se cumpla condición</td><td>while($i<10)</td></tr>
      <tr><td>do...while</td><td>Ejecuta al menos una vez</td><td>do { ... } while($i<10)</td></tr>
      <tr><td>foreach</td><td>Recorrer arreglos o colecciones</td><td>foreach($array as $valor)</td></tr>
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
