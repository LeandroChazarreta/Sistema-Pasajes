<div class="container">
    <div class="col-md-12">
        <div class="col-md-8 mx-auto">
            <div class="card-header">
                <h3 class="mb-0">Solicitar turno con Médico</h3>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-offset-1">

                    <form action="Controller/MedicoController.php" method="POST">
                        <div class="form-group row1">
                            <label for="centro" required="">Centro Médico</label>
                            <select type="text" name="centro" id="centro" class="form-control">
                                <option value="buenos aires"> Buenos Aires</option>
                                <option value="shanghai">Shanghái </option>
                                <option value="ankara">Ankara</option>
                            </select>
                        </div>

                        <div class="form-group row1">
                            <label for="fechaturno" required="">Turnos Disponibles</label>
                            <input type="date" name="fechaturno" id="fechaturno" class="form-control"  min="<?php echo date("Y-m-d",strtotime(date("Y-m-d")));?>" max="<?php echo date("Y-m-d",strtotime(date("Y-m-d")."+ 30 days"));?>" step="1">
                        </div>


                        <input class="bnt bnt-success" type="submit" name="reserva-turnos" value="Reservar">
                    </form>

                </div>

            </div>
        </div>
    </div>