<?php
session_start();

//Para que la zona horaria coincida con la de Chiapas
date_default_timezone_set("America/Mexico_City");

// Si no existe la sesión, la creamos
if(!isset($_SESSION['inicio'])){
    $_SESSION['inicio'] = time();
}

$hora_inicio = $_SESSION['inicio'];
$hora_actual = time();
$tiempo_activo = $hora_actual - $hora_inicio;

// Reinicio de sesión
if(isset($_GET['reiniciar'])){
    session_destroy();
    session_start();
    $_SESSION['inicio'] = time();
    $hora_inicio = $_SESSION['inicio'];
    $hora_actual = time();
    $tiempo_activo = 0;
}
?>

<?php include("includes/header.php"); ?>
<?php include("includes/menu.php"); ?>

<main>
  <!-- Información de sesión -->
  <section>
    <h2>Manejo de Sesiones en PHP</h2>
    <p>Hora inicio sesión: <?php echo date("H:i:s", $hora_inicio); ?></p>
    <p>Hora actual: <?php echo date("H:i:s", $hora_actual); ?></p>
    <p>Tiempo activo: <?php echo floor($tiempo_activo/60) . " minutos " . ($tiempo_activo%60) . " segundos"; ?></p>
    <p><a href="sesiones.php?reiniciar=true">Reiniciar sesión</a></p>
  </section>

  <!-- Funciones de sesión -->
  <section>
    <h2>Funciones comunes de sesiones en PHP</h2>
    <table>
      <tr><th>Función</th><th>Uso</th><th>Ejemplo</th></tr>
      <tr><td>session_start()</td><td>Inicia o reanuda una sesión</td><td>session_start();</td></tr>
      <tr><td>$_SESSION</td><td>Arreglo asociativo para guardar datos</td><td>$_SESSION["usuario"] = "Alan";</td></tr>
      <tr><td>session_destroy()</td><td>Elimina toda la información de la sesión</td><td>session_destroy();</td></tr>
      <tr><td>session_unset()</td><td>Libera todas las variables de sesión</td><td>session_unset();</td></tr>
    </table>
  </section>
</main>

<?php include("includes/footer.php"); ?>
