<?php require_once "./Views/Modulos/Navbar-view.php" ?>


<?php
session_start();
echo  "Bienvenido!!!   "."</strong>".$_SESSION['sesion_usuario'];
?>
<?php require_once "./Views/Modulos/Script-view.php"; ?>
</body>
</html>