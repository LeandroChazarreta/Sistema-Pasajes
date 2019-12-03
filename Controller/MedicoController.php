<?php
require_once("../Models/conexion.php");
require_once("../Models/MedicoModels.php");

$conexion = new Conectar();
$con = $conexion->conexion();


$turno = new MedicoModels();
$id_usuario = $turno->ObtenerID();
$Verificar = $turno->VerificarTurno();


if ($Verificar == 0) {
    $CentroMedico = $_POST['centro'];
    $fechaturno = $_POST['fechaturno'];


    $result = mysqli_query($con, "SELECT id_centroMedico FROM centro_medico c WHERE nombre='$CentroMedico'");
    $fila = mysqli_fetch_array($result);
    $centro = $fila['id_centroMedico'];

    $turno->ReservarTurno($id_usuario, $centro,$fechaturno);
    require_once ("./Views/Contenido/medico-view.php");
} else {
    $MostrarTurnos = $turno->GetTurno();

   //header("location: ../turno");
    require_once ("../Views/Contenido/turno-view.php");

    }