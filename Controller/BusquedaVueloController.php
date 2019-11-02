<?php
    require_once "../Models/conexion.php";
    require_once "../Models/BusquedaModels.php";

	$Origen = $_POST['origen'];
    $Destino = $_POST['destino'];
    $FechaIda = $_POST['fechaIda'];
    $TipoVuelo = $_POST['vuelo'];


    $BusquedaModels = new BusquedaModels();

    $RealizarBusqueda = $BusquedaModels->RealizarBusqueda($Origen, $Destino,$FechaIda,$TipoVuelo);


    session_start();
    $_SESSION['vuelos']=$RealizarBusqueda;


    header("location: ../busqueda");

?>