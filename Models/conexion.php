<?php

    if(!isset($_SESSION))
    {
        session_start();
        $_SESSION["sesion_usuario"] = $_SESSION['sesion_usuario'];
    }


class Conectar{
		public function conexion(){
			
			/*private $con;*/

			$con = mysqli_connect("localhost","root","","bd_ecommerce")
			or die ("No Se Puede Conectar Con El Servidor");
			if($con){
				//echo "Conecto...";
	
			}
			else{
				//echo "No Conecto"; // me tiene que redirigir a una pantalla de no conectado
			}

			return $con;
		}
	}
	
?>