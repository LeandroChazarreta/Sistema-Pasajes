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
    <div class="container">

        <div class="row">
            <br><br>
            <?php
              foreach ($_SESSION['vuelos'] as $vuelo) {
                echo "
                  <div class='col-lg-4 col-md-6 mb-4'>
                      <div class='card h-100'>
                      <img class='card-img-top' src='./resources/img/".$vuelo['imagen']."' alt='' widht='30%' height='60%'>
                          
                          <div class='card-body'>
                              <h4 class='card-title'>
                              </h4>
                              <h5>Valor: $ " . $vuelo['costo_vuelo'] . "</h5>
                              <p class='card-text'>Duracion: ".$vuelo['duracion']."</p>
                              <p class='card-text'>Fecha de salida: ".$vuelo['fecha_viaje']."</p>
                          </div>
                          <div class='card-footer'>
                          <a href='./Controller/ReservaVueloController.php?id_vuelo=" . $vuelo["id_vuelo"] ."'>Reservar</a>
                              Cantidad <select>
                                      <option value='1'>1</option>
                                      <option value='2'>2</option>
                                      <option value='3'>3</option>
                                      <option value='4'>4</option>
                                    </select>
                             </div>
                      </div>
                  </div> ";
              }
            ?>
        </div>
    </div>
</body>
</html>