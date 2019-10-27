<!DOCTYPE html>
    <head>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>GauchoRocket</title>
      <meta charset="utf-8">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
          rel="stylesheet">
      <link href="../Views/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="../Views/css/estilo.css">
    </head>
<body>
    <?php include_once "../Views/Modulos/Navbar1-view.php"; ?>

    <div class="container">
  <!-- Contenido -->
     <?php
            echo "<p>$instruccion</p>";
            echo "<p>$tipoVuelo</p>";
            echo"
            <table class='table table-bordered table-dark'>
            <thead>
            <tr>
               <th scope='col'>Fecha Viaje</th>
               <th scope='col'>Duración</th>
               <th scope='col'>Costo vuelo</th>
            </tr>
            </thead>
            <tbody>";
                   
            foreach ($vuelos as $vuelo){
               echo "<tr>
                        <td>" . $vuelo['fecha_viaje'] . "</td>
                        <td>" . $vuelo['duracion'] . "</td>
                        <td>".  "$" . $vuelo['costo_vuelo'] . "</td>
                     </tr>";
              }
               echo "</tbody>";
     ?>

    </div>


     <script src="<?phpSERVERURL?>/Views/js/bootstrap.bundle.min.js"></script>
     <script src="<?phpSERVERURL?>/Views/js/jquery.slim.min.js"></script>
     <script src = "<?phpSERVERURL?>/Views/js/bootstrap.min.js"> </script>
     <script type="text/javascript" src="<?phpSERVERURL?>/Views/js/javascript.js"></script>

</body>
</html>