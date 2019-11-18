<?php
require_once "./Views/Modulos/Navbar-view.php";
?>

<div class="container">
    <div class="col-md-12">
        <div class="col-md-8 mx-auto">
            <div class="card-header">
                <h3 class="mb-0">Turno Pendiente</h3>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-offset-1">


                    <?php

        foreach($MostrarTurnos as $linea) {
             echo '
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5> '  .$linea["id_centroMedico"]. '</h5>
                            <p class="card-text">'  .$linea["fechaTurno"]. '</p>
                        </div>
                    </div>
                </div> </a>';
        }
        ?>




                </div></div></div>

    </div></div>