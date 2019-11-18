<?php
	require_once "../Models/conexion.php";
	require_once("../Models/UsuarioModels.php");
	require_once("../Models/ReservaModels.php");

	session_start();
	$conexion = new Conectar();
   	$conexion = $conexion->conexion();

   	if (!isset($_SESSION['cantidadPasaje'])) {
   		$_SESSION['cantidadPasaje'] = $_POST['cantidadPasaje'] ;	
   	}
   	$_SESSION['cantidadPasaje'] = $_SESSION['cantidadPasaje'] - 1; 
   	
	$mail=$_POST['email'];
	$registro = new UsuarioModels();
	$verifico = $registro->verificarMail($mail);
	$reserva = new ReservaModels();

	if ($verifico == 0){
		
		//echo " Mail no registrado<br>";
		header("Location: ../reserva2");

	}
	else{
		$id_vuelo = $_SESSION['vuelo']['id_vuelo'];
		$servicio=$_POST['servicio'];
		$cabina=$_POST['cabina'];
		$id_usuario = $registro->obtenerIdPorMail($mail);
		$origen=$_POST['origen'];
		$destino=$_POST['destino'];
		$resultado = $reserva->registrarReserva($id_usuario, $id_vuelo, $servicio, $cabina,$origen,$destino);
		echo $resultado;
		/*if($resultado === 1){
			echo "Registro guardado";
		}else{
			echo "Error :" . $instruccion . "<br>" . $conexion->error;
		}*/
		#header("Location: ../reserva");
	}
?>