<?php
session_start();
$hora_inicio = $_SESSION['inicio'];
$hora_actual = time();
$tiempo_activo = $hora_actual - $hora_inicio;
?>

<?php include("includes/header.php"); ?>
<?php include("includes/menu.php"); ?>

<h2>Ejemplos de Condicionales en PHP</h2>

<?php
// Ejemplo con if, else, elseif
$numero = 15;

if($numero < 10){
    echo "<p>El número $numero es menor que 10</p>";
} elseif($numero == 10){
    echo "<p>El número es exactamente 10</p>";
} else {
    echo "<p>El número $numero es mayor que 10</p>";
}

// Ejemplo con switch
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

<hr>
<h3>Información de sesión</h3>
<?php
echo "Hora inicio sesión: " . date("H:i:s", $hora_inicio) . "<br>";
echo "Hora actual: " . date("H:i:s", $hora_actual) . "<br>";
echo "Tiempo activo: " . floor($tiempo_activo/60) . " minutos " . ($tiempo_activo%60) . " segundos";
?>

<?php include("includes/footer.php"); ?>
