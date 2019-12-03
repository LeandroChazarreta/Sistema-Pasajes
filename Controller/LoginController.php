<?php
session_start();

require_once "../Models/conexion.php";
require_once "../Models/UsuarioModels.php";

$UsuarioModels = new UsuarioModels();


$respuesta1 = $UsuarioModels->Admin($_POST['nom_usuario'], $_POST['pass']);
if ($respuesta1 == 1){
    header("location: ./admin");
}
else{
    $respuesta = $UsuarioModels->login($_POST['nom_usuario'], $_POST['pass']);

    if ($respuesta == 1){
    	if(isset($_SESSION['vuelos'])){
			header("location: ../busqueda");
    	}else{
	        header("location: ../home");
    	}
    }else {
        header("location: ./login");
    }
}