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

<main>
  <section>
    <h1>PHP: Guía</h1>
    <p>Bienvenido. La sesión ha iniciado correctamente.</p>
    <p>Explora los temas del menú para ver ejemplos prácticos de:</p>
    <ul>
      <li>Variables</li>
      <li>Condicionales</li>
      <li>Bucles</li>
      <li>Arreglos</li>
      <li>Sesiones</li>
    </ul>
  </section>
</main>

<?php include("includes/footer.php"); ?>
