<?php require_once "./Views/Modulos/Navbar-view.php" ?>


<?php
session_start();
echo  "Bienvenido!!!   "."</strong>".$_SESSION['sesion_usuario'];
?>
<?php require_once "./Views/Modulos/Script-view.php"; ?>

<div class="container">
  <!-- Contenido -->
     <? // php include_once "Views/Modulos/Productos-view.php"; ?>
     <form action="./Controller/BusquedaVueloController.php" method="POST">
            <label for="origen">Origen</label>
            <input type="text" name="origen" id="origen" >
            <label for="destino">Destino</label> 
            <input type="text" name="destino" id="destino" disabled="disabled" >
            <label for="fechaIda">Fecha Salida </label>
            <input type="date" name="fechaIda" id="fechaIda" >
            Tipo de vuelo
            <select name="vuelo"  id="tipoVuelo" required="">
            <option value="tour"> Tour</option>
            <option value="orbital">Orbitales </option>
            <option value="entre-destino">Entre Destinos</option>
            </select>
            
            <input type="submit" name="consulta-viaje" value="Consultar">
        </form>
    </div>

</body>
</html>