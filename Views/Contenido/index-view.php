<?php
if(isset($_SESSION))
{
    session_destroy();
}
?>

    <body>
    <?php include_once "Views/Modulos/Navbar1-view.php"; ?>

    <!-- Slider -->
    <?php 
        /* SLIDER COMENTADO 26/10
        
        include_once "Views/Modulos/Slider-view.php";
    
        */ ?>

    <div class="container">
  <!-- Contenido -->
     <? // php include_once "Views/Modulos/Productos-view.php"; ?>
     <form action="./Controller/BusquedaVueloController.php" method="POST">
            <input type="text" name="origen" id="origen" >
            <label for="origen">Origen</label>
            <input type="text" name="destino" id="destino" >
            <label for="destino">Destino</label>
            <input type="date" name="fechaIda" id="fechaIda" >
            <label for="fechaIda">Fecha Salida </label>

            <select name="vuelo">
            <option value="tour"> Tour</option>
            <option value="orbital">Orbitales </option>
            <option value="entre-destino">Entre Destinos</option>
            </select>Tipo de vuelo
            
            <input type="submit" name="consulta-viaje" value="Consultar">
        </form>
    </div>


     <script src="<?phpSERVERURL?>/Views/js/bootstrap.bundle.min.js"></script>
     <script src="<?phpSERVERURL?>/Views/js/jquery.slim.min.js"></script>
     <script src = "<?phpSERVERURL?>/Views/js/bootstrap.min.js"> </script>
     <script type="text/javascript" src="<?phpSERVERURL?>/Views/js/javascript.js"></script>

</body>
</html>