<?php
if(isset($_SESSION))
{
    session_destroy();
}
?>

    <body>
    <?php include_once "Views/Modulos/Navbar1-view.php"; ?>

    <!-- Slider -->
    <?php include_once "Views/Modulos/Slider-view.php"; ?>

    <div class="container">
  <!-- Contenido -->
     <? // php include_once "Views/Modulos/Productos-view.php"; ?>
    </div>


     <script src="<?phpSERVERURL?>/Views/js/bootstrap.bundle.min.js"></script>
     <script src="<?phpSERVERURL?>/Views/js/jquery.slim.min.js"></script>
     <script src = "<?phpSERVERURL?>/Views/js/bootstrap.min.js"> </script>
     <script type="text/javascript" src="<?phpSERVERURL?>/Views/js/javascript.js"></script>

</body>
</html>