<?php
	session_start();
	if(isset($_SESSION['sesion_id'])){
		header("location: ../reserva");
	}else{
		header("location: ../login");
	}

?>