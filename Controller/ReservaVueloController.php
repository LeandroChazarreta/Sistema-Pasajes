<?php
	require_once "../Models/conexion.php";
	require_once "../Models/ReservaModels.php";										

	session_start();

	if(isset($_SESSION['sesion_id'])){
		$conexion = new Conectar();
    	$conexion = $conexion->conexion();

    	$instruccion = "SELECT * FROM vuelo WHERE id_vuelo='" . $_GET['id_vuelo'] . "';";
    	$result = mysqli_query($conexion, $instruccion);
    	$row = mysqli_fetch_assoc($result);
    	$vuelo = Array();
    	$vuelo['id_vuelo']	  =	$row["id_vuelo"];
    	$vuelo['costo_vuelo'] = $row["costo_vuelo"];
    	$vuelo['duracion']	  = $row["duracion"];
    	$vuelo['fecha_viaje'] = $row["fecha_viaje"];
    	$_SESSION['vuelo']=$vuelo;

		$reservaModel = new ReservaModels();
		$busquedaOrigenes=$reservaModel->obtenerOrigenDestino($_GET['id_vuelo']);
		$_SESSION['origenes']= $busquedaOrigenes;
		header("location: ../reserva");
	}else{
		header("location: ../login");
	}

?>