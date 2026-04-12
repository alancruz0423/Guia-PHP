<?php
session_start();
$hora_inicio = $_SESSION['inicio'];
$hora_actual = time();
$tiempo_activo = $hora_actual - $hora_inicio;
?>

<?php include("includes/header.php"); ?>
<?php include("includes/menu.php"); ?>

<h2>Ejemplos de Variables en PHP</h2>

<?php
// Variables de diferentes tipos
$cadena = "Hola, soy una cadena de texto";
$entero = 42;
$decimal = 3.1416;
$booleano = true;
$arreglo = array("PHP", "HTML", "CSS");

// Mostrar variables
echo "<p>String: $cadena</p>";
echo "<p>Entero: $entero</p>";
echo "<p>Float: $decimal</p>";
echo "<p>Boolean: " . ($booleano ? "Verdadero" : "Falso") . "</p>";

// Mostrar arreglo
echo "<p>Array:</p>";
foreach($arreglo as $valor){
    echo "- $valor <br>";
}

// Uso de funciones
echo "<p>Fecha actual: " . date("d-m-Y H:i:s") . "</p>";
echo "<p>Cantidad de elementos en el arreglo: " . count($arreglo) . "</p>";
?>

<hr>
<h3>Información de sesión</h3>
<?php
echo "Hora inicio sesión: " . date("H:i:s", $hora_inicio) . "<br>";
echo "Hora actual: " . date("H:i:s", $hora_actual) . "<br>";
echo "Tiempo activo: " . floor($tiempo_activo/60) . " minutos " . ($tiempo_activo%60) . " segundos";
?>

<?php include("includes/footer.php"); ?>
