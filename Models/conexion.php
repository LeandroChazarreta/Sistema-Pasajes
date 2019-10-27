<?php
	/*
    if(!isset($_SESSION))
    {
        session_start();
        $_SESSION["sesion_usuario"] = $_SESSION['sesion_usuario'];
    }
	*/

	class Conectar{
		public function conexion(){
			
			/*private $con;*/

			$config = parse_ini_file("../resources/config.ini", true);
			

			$host = $config['connection']['host'];
			$usuario = $config['connection']['user'];
			$password = $config['connection']['password'];
			$bd = $config['connection']['database'];
			$port = $config['connection']['port'];

			$con = new mysqli($host, $usuario, $password, $bd, $port);
			if ($con->connect_error) {
				return die("Ha tenido un error de conexion");
			}
			return $con;
		}
	}
	
?>