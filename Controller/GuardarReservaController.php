<?php
	require_once "../Models/conexion.php";
	require_once("../Models/UsuarioModels.php");

	session_start();
	$conexion = new Conectar();
   	$conexion = $conexion->conexion();

	$mail=$_POST['email'];
	$registro = new UsuarioModels();
	$verifico = $registro->verificarMail($mail);

	if ($verifico == 0){
		
		//echo " Mail no registrado<br>";
		header("Location: ../reserva2");

	}
	else{
		$id_vuelo = $_SESSION['vuelo']['id_vuelo'];
		$servicio=$_POST['servicio'];
		$cabina=$_POST['cabina'];
		$id_usuario = $registro->obtenerIdPorMail($mail);
		$instruccion = "INSERT INTO reserva (fk_usuario,id_vuelo,servicio,cabina) VALUES (" . $id_usuario . "," . $id_vuelo . ",'" . $servicio . "','" . $cabina . "');" ;
		if($conexion->query($instruccion) === TRUE){
			echo "Registro guardado";
		}else{
			echo "Error :" . $instruccion . "<br>" . $conexion->error;
		}
		header("Location: ../reserva");
	}
?>