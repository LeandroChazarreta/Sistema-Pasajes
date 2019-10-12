    <!DOCTYPE html>
    <head>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>GauchoRocket</title>
      <meta charset="utf-8">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
          rel="stylesheet">
      <link href="Views/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="Views/css/estilo.css">
    </head>


      <!-- Redirecciona a home -->
    <?php require_once "./Controller/ViewController.php";
    $vt = new ViewController();
    $AplicaVistas=$vt ->obtener_vistas_controlador();

        if ($AplicaVistas== "index"):
            require_once "./Views/Contenido/index-view.php";
         else:
    ?>


      <?php require_once $AplicaVistas; ?>






    <?php endif; ?>


      <!-- Script -->
      <?php require_once "./Views/Modulos/Script-view.php"; ?>
    </body>
    </html>