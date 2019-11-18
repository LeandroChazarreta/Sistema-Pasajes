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
            $instruccion = "SELECT V.id_vuelo, V.fecha_viaje , V.costo_vuelo, V.imagen, V.duracion FROM vuelo V JOIN vuelo_trayecto VT ON V.id_vuelo=VT.fk_vuelo JOIN trayecto T ON VT.fk_trayecto=T.id_trayecto";
        }else{
            $instruccion = "SELECT V.id_vuelo, V.fecha_viaje , V.costo_vuelo, V.imagen, V.duracion FROM vuelo V JOIN vuelo_trayecto VT ON V.id_vuelo=VT.fk_vuelo JOIN trayecto T ON VT.fk_trayecto=T.id_trayecto";
        }
        $condicion = '';

        if($origen != ''){
            $condicion = " WHERE T.origen ='" . $origen . "'";
        }

        if($destino != ''){
            if($condicion != ''){
                $condicion = "$condicion AND T.destino='" . $destino . "'";
            }else{
                $condicion = " WHERE T.destino ='" . $destino . "'";
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
        $instruccion = $instruccion . $condicion . " GROUP BY V.id_vuelo, V.fecha_viaje, V.costo_vuelo, V.imagen, V.duracion;";

 

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