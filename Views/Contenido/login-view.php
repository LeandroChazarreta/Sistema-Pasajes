<?php
if(isset($_SESSION))
{
session_destroy();
}
?>

<?php include_once "Views/Modulos/Navbar1-view.php"; ?>

	 <div class="container py-5">
	    <div class="row">
	        <div class="col-md-12">
	            <div class="row">
	                <div class="col-md-6 mx-auto">
	                    <div class="cdiard rounded-0">
	                        <div class="card-header">
	                            <h3 class="mb-0">Login</h3>
	                        </div>
	                        <div class="card-body">
	                            <form class="form" role="form" autocomplete="off" id="formLogin" action="Controller/LoginController.php" method="POST">
	                                <div class="form-group">
	                                    <label for="nom_usuario">Usuario</label>
	                                    <input type="text" class="form-control form-control-lg rounded-0" name="nom_usuario" id="nom_usuario" required="">
	                                    <div class="invalid-feedback">Usuario incorrecto.</div>
	                                </div>
	                                <div class="form-group">
	                                    <label for='pass'>Contraseña</label>
	                                    <input type="password" class="form-control form-control-lg rounded-0" name='pass' id="pass" required="" autocomplete="new-password">
	                                    <div class="invalid-feedback"> Contraseña incorrecta</div>
	                                </div>
	                                <div>
	                                    
	                                      <input class="checkbox" type="checkbox">
	                                      <span class="custom-control-description small text-dark">Recordar usuario</span>
	                                    </label>
	                                </div>
                                    <div id="notlogin"> Usuario o contraeña incorrecta</div>
	                                <button type="submit" class="btn btn-success btn-lg float-none" id="btnLogin">Ingresar</button>
	                            </form>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>




<?php require_once "./Views/Modulos/Script-view.php"; ?>
</body>
</html>