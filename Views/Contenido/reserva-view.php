<?php 

    session_start();
    if(isset($_SESSION['sesion_usuario'])){
      include_once "Views/Modulos/Navbar-view.php";       
    }else{
      include_once "Views/Modulos/Navbar1-view.php";       
    }
    
?>
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="cdiard rounded-0">
                        <div class="card-header">
                            <h3 class="mb-0">Reservar</h3>
                        </div>


<form class="formulario" novalidate method="post" data-toggle="validator" action="Controller/RegistroController.php">

 </div> 


    


    <div class="row">
    <div class="col">
           <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" class="form-control" required="" placeholder="Ingrese su nombre">
      <div class="invalid-tooltip">
       Ingrese un nombre
      </div>
        </div>


        <div class="col">
      <label for="apellido">Apellido:</label>
      <input type="text" id="apellido" name="apellido" class="form-control" required="" placeholder="Ingrese su apellido">
      <div class="invalid-tooltip">
        Ingrese su apellido
      </div></div></div>
  
 

    <div class="row">
        <div class="col">
      <label for="dni">DNI</label>
      <input type="text" class="form-control" name='dni' id="dni" placeholder="Ingrese su DNI" required>
    </div> 

    <div class="col">
      <label for="nro">Cantidad de pasajes</label><br>
      <select>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
      </select>

      </div>
  </div>

</form>

  <div class="row">
    <div class="col">

      <input class="btn btn-success btn-lg float-right" type="submit" value="Reservar" onclick="validar()"></div></div> </div>
  </div>

</div>
 </div>
</div>

</div>
</div>
</div>
</div>
