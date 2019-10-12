<?php require_once "./Views/Modulos/Navbar-view.php" ?>


<?php
session_start();
echo  "Bienvenido!!!   "."</strong>".$_SESSION['sesion_usuario'];
echo session_status();
?>


<!-- Slider -->
<?php include_once "Views/Modulos/Slider-view.php"; ?>


<!-- Productos -->
 <?php // include_once "Views/Modulos/Productos-view.php"; ?>



<!-- Script -->
<?php require_once "./Views/Modulos/Script-view.php"; ?>
</body>
</html>