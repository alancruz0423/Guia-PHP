<?php
session_start();
$hora_inicio = $_SESSION['inicio'];
$hora_actual = time();
$tiempo_activo = $hora_actual - $hora_inicio;
?>

<?php include("includes/header.php"); ?>
<?php include("includes/menu.php"); ?>

<main>
  <!-- Ejemplo con if/else -->
  <section>
    <h2>Ejemplos de Condicionales en PHP</h2>
    <?php
    $numero = 15;

    if($numero < 10){
        echo "<p>El número $numero es menor que 10</p>";
    } elseif($numero == 10){
        echo "<p>El número es exactamente 10</p>";
    } else {
        echo "<p>El número $numero es mayor que 10</p>";
    }
    ?>
  </section>

  <!-- Ejemplo con switch -->
  <section>
    <h2>Ejemplo con Switch</h2>
    <?php
    $color = "rojo";

    switch($color){
        case "rojo":
            echo "<p>El color es rojo</p>";
            break;
        case "azul":
            echo "<p>El color es azul</p>";
            break;
        case "verde":
            echo "<p>El color es verde</p>";
            break;
        default:
            echo "<p>Color no reconocido</p>";
    }
    ?>
  </section>

  <!-- Tabla de operadores -->
  <section>
    <h2>Operadores Lógicos en PHP</h2>
    <table>
      <tr><th>Operador</th><th>Ejemplo</th><th>Resultado</th></tr>
      <tr><td>==</td><td>$a == $b</td><td>Igualdad</td></tr>
      <tr><td>!=</td><td>$a != $b</td><td>Diferente</td></tr>
      <tr><td>&&</td><td>$a && $b</td><td>AND lógico</td></tr>
      <tr><td>||</td><td>$a || $b</td><td>OR lógico</td></tr>
      <tr><td>!</td><td>!$a</td><td>Negación</td></tr>
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
