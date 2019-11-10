<?php
require_once ("../Models/conexion.php");


class BusquedaModels
{

    private $conexion;
    private $vuelos;

    public function __construct()
    {
        $conexion = new Conectar();
        $con = $conexion->conexion();
        $this->vuelos = array();
    }

    public function RealizarBusqueda ($origen, $destino, $fechaIda, $tipoVuelo){
        if(isset($_POST['destino'])){
            $destino = $_POST['destino'];
        }else{
            $destino='';
        }
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



        $conexion = new Conectar();
        $con = $conexion->conexion();

        $result = mysqli_query($con, $instruccion);
        $cantidad = mysqli_num_rows($result);



        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($ObtenerViajes = $row = mysqli_fetch_assoc($result)) {
                $this->vuelos [] = $ObtenerViajes;
            }
        }

        return $this->vuelos;
    }
}