<?php
require_once("../Models/conexion.php");

class MedicoModels
{
    private $conexion;

    public function __construct()
    {
        $conexion = new Conectar();
        $this->conexion = $conexion->conexion();
    }


    public function ObtenerID(){
        if(!isset($_SESSION))
        {
            session_start();
        }

        $session = $_SESSION['sesion_usuario'];
        $consulta = "SELECT id_usuario FROM usuario WHERE nom_usuario='$session'";
        $ObtenerID = mysqli_query($this->conexion, $consulta);
        $id_user =mysqli_fetch_array($ObtenerID);
        $id_usuario = $id_user['id_usuario'];

        return $id_usuario;
    }

    public function VerificarTurno(){
        $usuario=$this->ObtenerID();

        $consulta = "SELECT * FROM turno WHERE id_usuario='$usuario'";
        $res = mysqli_query($this->conexion, $consulta);
        $row_cnt = $res->num_rows;


        if ($row_cnt > 0){
            return 1;		// si hay registros
        }
        else{
            return 0;       // si no hay registros
        }
    }

    public function GetTurno(){
        $usuario=$this->ObtenerID();

        $consulta = "SELECT * FROM turno WHERE id_usuario='$usuario'";
        $res = mysqli_query($this->conexion, $consulta);

        while ($ObtenerTurno = mysqli_fetch_assoc($res)){
            $Turno[]=$ObtenerTurno;
        }
        return $Turno;
    }

    public function ReservarTurno ($id_usuario, $id_centroMedico, $fechaturno)
    {
        $sql = "Insert Into turno (id_usuario, id_centroMedico, fechaturno) values 
					('".$id_usuario."','".$id_centroMedico."','".$fechaturno."')";

        $con = new Conectar();
        $res = mysqli_query($con->conexion(), $sql);  // inserto el registro en la bd

        if ($res == 1){
            return 1;		// si afecto una linea
        }
        else{
            return 0;       // si no afecto ninguna linea
        }
    }
}


