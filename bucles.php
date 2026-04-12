<?php
session_start();
$hora_inicio = $_SESSION['inicio'];
$hora_actual = time();
$tiempo_activo = $hora_actual - $hora_inicio;
?>

<?php include("includes/header.php"); ?>
<?php include("includes/menu.php"); ?>

<h2>Ejemplos de Bucles en PHP</h2>

<?php
// Ejemplo con for
echo "<h3>Bucle for</h3>";
for($i = 1; $i <= 5; $i++){
    echo "Número: $i <br>";
}

// Ejemplo con while
echo "<h3>Bucle while</h3>";
$j = 1;
while($j <= 5){
    echo "Contador: $j <br>";
    $j++;
}

// Ejemplo con foreach recorriendo un arreglo
echo "<h3>Bucle foreach</h3>";
$frutas = array("Manzana", "Banana", "Naranja", "Uva");
foreach($frutas as $fruta){
    echo "Fruta: $fruta <br>";
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
