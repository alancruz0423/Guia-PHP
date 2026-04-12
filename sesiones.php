<?php
session_start();

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

<h2>Manejo de Sesiones en PHP</h2>

<p>Hora inicio sesión: <?php echo date("H:i:s", $hora_inicio); ?></p>
<p>Hora actual: <?php echo date("H:i:s", $hora_actual); ?></p>
<p>Tiempo activo: <?php echo floor($tiempo_activo/60) . " minutos " . ($tiempo_activo%60) . " segundos"; ?></p>

<a href="sesiones.php?reiniciar=true">Reiniciar sesión</a>

<?php include("includes/footer.php"); ?>
