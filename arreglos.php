<?php
session_start();
$hora_inicio = $_SESSION['inicio'];
$hora_actual = time();
$tiempo_activo = $hora_actual - $hora_inicio;
?>

<?php include("includes/header.php"); ?>
<?php include("includes/menu.php"); ?>

<h2>Ejemplos de Arreglos en PHP</h2>

<?php
// Arreglo indexado
$colores = array("Rojo", "Verde", "Azul");
echo "<h3>Arreglo indexado</h3>";
foreach($colores as $color){
    echo "Color: $color <br>";
}

// Arreglo asociativo
$edades = array("Ana" => 20, "Luis" => 25, "Carlos" => 30);
echo "<h3>Arreglo asociativo</h3>";
foreach($edades as $nombre => $edad){
    echo "$nombre tiene $edad años <br>";
    if($edad >= 25){
        echo "→ $nombre es mayor de 25 <br>";
    }
}

// Arreglo multidimensional
$alumnos = array(
    array("nombre" => "Ana", "nota" => 9),
    array("nombre" => "Luis", "nota" => 7),
    array("nombre" => "Carlos", "nota" => 6)
);

echo "<h3>Arreglo multidimensional</h3>";
foreach($alumnos as $alumno){
    echo "Alumno: " . $alumno["nombre"] . " - Nota: " . $alumno["nota"] . "<br>";
    if($alumno["nota"] >= 7){
        echo "→ " . $alumno["nombre"] . " aprobó <br>";
    } else {
        echo "→ " . $alumno["nombre"] . " reprobó <br>";
    }
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
