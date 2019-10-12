<?php
	require_once("../Models/conexion.php");
	require_once("../Models/UsuarioModels.php");
	

	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$calle = $_POST['domicilio'];
	$nro = $_POST['nro'];
	$provincia = $_POST['provincia'];         
	$localidad = $_POST['localidad'];
	$pass = $_POST['pass'];									// recibo la info del formulario
	$repass = $_POST['re_pass'];
	$nom_usuario = $_POST['nom_usuario'];
	$mail = $_POST['mail'];

	$registro = new UsuarioModels();                             //clase agregar
	$verifico = $registro->verificar($nom_usuario);       // verifico que el nombre de usuario no exista
	if ($verifico == 0){

        $resul = $registro->agregarUsuario($nombre, $apellido, $calle, $nro, $provincia, $localidad, $pass, $nom_usuario, $mail);

        header("Location: ../login");
	}
	else{
		echo " Nombre De Usuario Ya Existe";			// si existe msj de error (me voy a dirigir al formulario
			                                            // para que ingrese otro nomb de usuario)
	}

require_once ("Views/Contenido/registrar-view.php");
