<?php
    
    //echo '<script language="javascript">alert("Mail no registrado");</script>';
      include_once "Views/Modulos/Navbar-view.php";
      session_start();
      $id_vuelo = $_SESSION['vuelo']['id_vuelo'];
      $precio = $_SESSION['vuelo']['costo_vuelo'];
      $duracion = $_SESSION['vuelo']['duracion'];
      $fecha_viaje = $_SESSION['vuelo']['fecha_viaje'];
        

?>
<p style="color:red; text-align:center; font-size:24px;" >Mail no registrado</p>
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="cdiard rounded-0">
                        <div class="card-header">
                            <h3 class="mb-0">Reservar</h3>
                        </div>


<form class="formulario" novalidate method="post" data-toggle="validator" action="Controller/GuardarReserva2Controller.php">

 </div> 
 <div class="row">
      <div class="col">
           <label for="vuelo">Vuelo:</label>
            <input type="text" id="vuelo" name="vuelo" class="form-control" required="" value="<?php echo $id_vuelo?>" disabled>
        </div>
        <div class="col">
      <label for="precio">Precio:</label>
      <input type="text" id="precio" name="precio" class="form-control" required="" value="<?php echo $precio?>" disabled>
    </div>
  </div>
  <div class="row">
      <div class="col">
           <label for="duracion">Duración:</label>
            <input type="text" id="duracion" name="duracion" class="form-control" required="" value="<?php echo $duracion?>" disabled>
        </div>
        <div class="col">
      <label for="fecha">Fecha:</label>
      <input type="date" id="fecha" name="fecha" class="form-control" required="" value="<?php echo $fecha_viaje?>" disabled>
    </div>
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
      </div>
    </div>
    </div>
  
 

    <div class="row">
        <div class="col">
      <label for="email">Email</label>
      <input type="text" class="form-control" name='email' id="email" placeholder="Ingrese su email" required>
    </div> 

    <div class="col">
      <label for="dni">DNI</label>
      <input type="text" class="form-control" name='dni' id="dni" placeholder="Ingrese su DNI" required>
    </div> 
  </div>
  <div class="row">
    <div class="col">
      <label for="usuario">Usuario</label>
      <input type="text" class="form-control" name='usuario' id="usuario" placeholder="Ingrese su usuario" required>
    </div>
    <div class="col">
      </div>
    </div>
  <div class="row">
    <div class="col">
      <label for="pass">Contraseña</label>
      <input type="password" class="form-control" name='pass' id="pass" placeholder="Ingrese contraseña" required>
    </div>
    <div class="col">
      <label for="re_pass">Repita Contraseña</label>
      <input type="password" class="form-control" name='re_pass' id="re_pass" placeholder="Ingrese nuevamente contraseña" required>
    </div>
    </div>
  <div class="row">
        <div class="col">
      <label for="nro">Servicio</label><br>
      <select id="servicio" name="servicio">
        <option value="standard">Standard</option>
        <option value="gourmet">Gourmet</option>
        <option value="spa">Spa</option>
      </select>
    </div> 

    <div class="col">
      <label for="nro">Cabina</label><br>
      <select id="cabina" name="cabina">
        <option value="general">General</option>
        <option value="familiar">Familiar</option>
        <option value="suite">Suite</option>
      </select>

      </div>
  </div>

  <div class="row">
    <div class="col">

      <input class="btn btn-success btn-lg float-right" type="submit" value="Reservar" onclick=""></div></div> </div>
  </div>
  </form>

</div>
 </div>
</div>

</div>
</div>
</div>
</div>
