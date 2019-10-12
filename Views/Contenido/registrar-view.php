<?php include_once "Views/Modulos/Navbar1-view.php"; ?>
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="cdiard rounded-0">
                           <a href="login"><div class="float-md-right registrar">Ya tengo usuario</div><br> </a>

                        <div class="card-header">
                            <h3 class="mb-0">Registro</h3>
                        </div>





<form class="formulario" novalidate method="post" data-toggle="validator" action="Controller/RegistroController.php">
  <div class="form-row">


      <label for="nom_usuario">Usuario: </label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
        </div>
        <input class="form-control" type="text" name="nom_usuario" id="nom_usuario" placeholder="Ingrese nombre de usuario" required>
        <div class="invalid-tooltip">
            Ingrese un nombre de usuario valido y unico
        </div></div>
        </div>


    <div class="row">
    <div class="col">
    <label for="pass">Contraseña</label>
    <input class ="form-control" type="password" name="pass" id="pass" placeholder="Ingrese Contraseña">
            <div class="invalid-tooltip">
          Ingrese una contraseña con mas de 6 caracteres.
        </div>
    </div> 



    <div class="col">
     <label for="re_pass">Repetir Password</label>
     <input class ="form-control" type="password" name="re_pass" id="re_pass" placeholder="Ingrese nuevamente la contraseña">
             <div class="invalid-tooltip">
          Las contraseñas no son iguales.
        </div>
     </div>   </div>  </div> 


     <div class="row">
    <div class="col">
     <label for="mail">Email</label>
    <input class ="form-control" type="mail" name="mail" id="mail" placeholder="Ingrese su email"> 
    <div class="invalid-tooltip">
          Ingrese un email valido.
        </div> </div> </div>


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
     <div class="form-row">
      <label for="provincia">Provincia</label>
      <select name="provincia" id="provincia" class="form-control">
        <option value="Buenos Aires">Bs. As.</option>
          <option value="Catamarca">Catamarca</option>
          <option value="Chaco">Chaco</option>
          <option value="Chubut">Chubut</option>
          <option value="Cordoba">Cordoba</option>
          <option value="Corrientes">Corrientes</option>
          <option value="Entre Rios">Entre Rios</option>
          <option value="Formosa">Formosa</option>
          <option value="Jujuy">Jujuy</option>
          <option value="La Pampa">La Pampa</option>
          <option value="La Rioja">La Rioja</option>
          <option value="Mendoza">Mendoza</option>
          <option value="Misiones">Misiones</option>
          <option value="Neuquen">Neuquen</option>
          <option value="Rio Negro">Rio Negro</option>
          <option value="Salta">Salta</option>
          <option value="San Juan">San Juan</option>
          <option value="San Luis">San Luis</option>
          <option value="Santa Cruz">Santa Cruz</option>
          <option value="Santa Fe">Santa Fe</option>
          <option value="Sgo. del Estero">Sgo. del Estero</option>
          <option value="Tierra del Fuego">Tierra del Fuego</option>
         <option value="Tucuman">Tucuman</option></select></div> </div>


    <div class="col">
      <label for="localidad">Localidad</label>
      <input type="text" class="form-control" name="localidad" id="localidad" placeholder="Ingrese su localidad" required>
    </div></div>
 

    <div class="row">
        <div class="col">
      <label for="domicilio">Domicilio</label>
      <input type="text" class="form-control" name='domicilio' id="domicilio" placeholder="Ingrese el nombre de calle del domicilio" required>
    </div> 

     <div class="col">
      <label for="nro">Numero de domicilio</label>
      <input type="text" class="form-control" id="nro" name='nro' splaceholder="Ingrese numero del domicilio" required>

      </div></div>

</form>

  <div class="row">
    <div class="col">

      <input class="btn btn-success btn-lg float-right" type="submit" value="Registrar" onclick="validar()"></div></div> </div>
  </div>

</div>
 </div>
</div>

</div>
</div>
</div>
</div>
