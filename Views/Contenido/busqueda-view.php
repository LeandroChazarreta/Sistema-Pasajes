<?php
    session_start();
    if(isset($_SESSION['sesion_usuario'])){
      include_once "./Views/Modulos/Navbar-view.php";
    }else{
      include_once "./Views/Modulos/Navbar1-view.php";
    }
    include_once "./resources/templates/javascript.html";
    ?>
    <!-- Page Content -->
    <div class="container"  style="margin-top:3%" >
        <div class="row">
            <br><br>
            <?php
              $i = 0;
              foreach ($_SESSION['vuelos'] as $vuelo) {
              $i = $i + 1;
                echo "
                  <div class='col-lg-4 col-md-6 mb-4'>
                      <div class='card h-100'>
                      <img class='card-img-top' src='./resources/img/".$vuelo['imagen']."' alt='' widht='20%' height='40%'>
                          
                          <div class='card-body'>
                              <h4 class='card-title'>
                              </h4>
                              <h5>Valor: $ " . $vuelo['costo_vuelo'] . "</h5>
                              <p class='card-text'>Duracion: ".$vuelo['duracion']."</p>
                              <p class='card-text'>Fecha de salida: ".$vuelo['fecha_viaje']."</p>
                          </div>
                          <div class='card-footer' align='center'>
                          <a href='./Controller/ReservaVueloController.php?id_vuelo=" . $vuelo["id_vuelo"] ."' >Reservar</a>
                              
                             </div>
                      </div>
                  </div> ";
              }
            ?>
        </div>
    </div>
</body>
</html>