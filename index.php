<?php
session_start();

if(isset($_SESSION['inicio'])){
    session_destroy();
    session_start();
}

// Guardamos la hora de inicio
$_SESSION['inicio'] = time();
?>

<?php include("includes/header.php"); ?>
<?php include("includes/menu.php"); ?>

<h1>PHP: Guía</h1>
<p>Bienvenido. La sesión ha iniciado correctamente.</p>

<?php include("includes/footer.php"); ?>
