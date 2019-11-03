<?php
	require_once "../Models/conexion.php";
	require_once("../Models/UsuarioModels.php");

	session_start();

	$conexion = new Conectar();
   	$conexion = $conexion->conexion();

	$id_vuelo = $_SESSION['vuelo']['id_vuelo'];
	$servicio=$_POST['servicio'];
	$cabina=$_POST['cabina'];
	$nombre=$_POST['nombre'];
	$apellido=$_POST['apellido'];
	$mail=$_POST['email'];
	$dni=$_POST['dni'];
	$usuario=$_POST['usuario'];
	$pass=$_POST['pass'];

	$registro = new UsuarioModels();
	$verifico = $registro->verificarMail($mail);
	if ($verifico == 0){
        $resul = $registro->agregarUsuarioPorReserva($nombre, $apellido, $pass, $usuario, $mail);
		$id_usuario = $registro->obtenerIdPorMail($mail);
		$instruccion = "INSERT INTO reserva (fk_usuario,id_vuelo,servicio,cabina) VALUES (".$id_usuario.",".$id_vuelo.",'".$servicio."','".$cabina."');" ;
		if($conexion->query($instruccion) === TRUE){
			echo "Registro guardado";
		}else{
			echo "Error :" . $instruccion . "<br>" . $conexion->error;
		}
		#header("Location: ../reserva");
	}
	else{
        echo " Mail ya registrado<br>";
    }
?>