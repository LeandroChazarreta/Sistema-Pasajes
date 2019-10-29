<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script type="text/javascript">
  $( function() {
    $("#tipoVuelo").change( function() {
        if ($(this).val() === "entre-destino") {
            $("#destino").prop("disabled", false);
        }else{
          $("#destino").prop("disabled", true);
          $("#destino").val("");
        }
    });
})
</script>


<!-- <?php
//if(isset($_SESSION))
{
  //  session_destroy();
}

?> -->

    <body>
    <?php
    session_start();
    if(isset($_SESSION['sesion_id'])){
      include_once "Views/Modulos/Navbar-view.php";       
    }else{
      include_once "Views/Modulos/Navbar1-view.php";       
    }
    
    ?>


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

     <script src="<?phpSERVERURL?>/Views/js/bootstrap.bundle.min.js"></script>
     <script src="<?phpSERVERURL?>/Views/js/jquery.slim.min.js"></script>
     <script src = "<?phpSERVERURL?>/Views/js/bootstrap.min.js"> </script>
     <script type="text/javascript" src="<?phpSERVERURL?>/Views/js/javascript.js"></script>

</body>
</html>