<?php
    require_once "../Models/conexion.php";

	$origen = $_POST['origen'];
    $destino = $_POST['destino'];
    $fechaIda = $_POST['fechaIda'];
    $tipoVuelo = $_POST['vuelo'];

    $conexion = new Conectar();
    $conexion = $conexion->conexion();
 
    if($tipoVuelo != 'entre-destino'){
        $instruccion = "SELECT * FROM vuelo V JOIN origen O ON V.id_origen=O.id_origen";
    }else{
        $instruccion = "SELECT * FROM vuelo V JOIN origen O ON V.id_origen=O.id_origen JOIN destino D ON V.id_destino=D.id_destino";
    }
    $condicion = '';

    if($origen != ''){
        $condicion = " WHERE O.nombre_origen ='" . $origen . "'";
    }

    if($destino != ''){
        if($condicion != ''){
            $condicion = "$condicion AND D.nombre_destino='" . $destino . "'";
        }else{
            $condicion = " WHERE D.nombre_destino ='" . $destino . "'";
        }
    }

    if($fechaIda != ''){
        if($condicion != ''){
            $condicion = "$condicion AND V.fecha_viaje='" . $fechaIda . "'";
        }else{
            $condicion = " WHERE V.fecha_viaje ='" . $fechaIda . "'";
        }
    }

    if($tipoVuelo != ''){
        if($condicion != ''){
            $condicion = "$condicion AND V.tipo_vuelo='" . $tipoVuelo . "'";
        }else{
            $condicion = " WHERE V.tipo_vuelo ='" . $tipoVuelo . "'";
        }
    }


    $instruccion = $instruccion . $condicion . ";";

    $result = mysqli_query($conexion, $instruccion);
    $cantidad = mysqli_num_rows($result);

    $vuelos = Array();
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            $vuelo = Array();
            $vuelo['costo_vuelo'] =	$row["costo_vuelo"];
            $vuelo['fecha_viaje'] = $row["fecha_viaje"];
            $vuelo['duracion']	  = $row["duracion"];
            $vuelos[] = $vuelo;
            }
    }

    require_once ("../Views/Contenido/busqueda-vuelo-view.php");
?>