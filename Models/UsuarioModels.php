<?php
require_once ("../Models/conexion.php");

class UsuarioModels
{
    private $db;
    private $usuarios;

    public function __construct()
    {
        $this->db=Conectar::conexion(); //conecto con la bd
        $this->productos=array();
    }


    public function login($usuario, $pass){  //recibo usuario y contraseña
        $password = md5($pass);	// codifico contraseña
        $sql = "select * from usuario where nom_usuario ='".$usuario."' and password = '".$password."'";// verifico usuario y contraseña

        $con = new Conectar();
        $link=$con->conexion();//conecto

        $res = mysqli_query($link , $sql); //mando la consulta
        if (mysqli_num_rows($res) > 0){ // si no me devuelve ningun registro o mas de uno error
            //si me devuelve un registro guardo el nom de usuario y el id
            $reg = mysqli_fetch_array($res);
            $_SESSION["sesion_usuario"] = $reg["nom_usuario"];
            $_SESSION["sesion_id"] = $reg["id_usuario"];
            return 1;
        }
    }

    public function Admin ($usuario, $pass) {
        $password = md5($pass);	// codifico contraseña
        $sql1 = "select * from usuario where nom_usuario ='".$usuario."' and password = 
            '".$password."' and admin='1'";// verifico usuario y contraseña

        $con = new Conectar();
        $link=$con->conexion();//conecto

        $res = mysqli_query($link , $sql1); //mando la consulta
        if (mysqli_num_rows($res) > 0){
            $reg = mysqli_fetch_array($res);
            $_SESSION["sesion_usuario"] = $reg["nom_usuario"];
            $_SESSION["sesion_id"] = $reg["id_usuario"];
            return 1;
        }
    }

    public function agregarUsuario($nombre, $apellido, $calle, $nro, $provincia, $localidad, $pass, $nom_usuario, $mail){
        $claveUsuario = md5($pass);			// codifico la contraseña
        $sql = "Insert Into usuario (nombre, apellido, calle, nro, provincia, localidad, 
            password, nom_usuario, mail) values 
					('".$nombre."','".$apellido."','".$calle."','".$nro."','".$provincia."','
					".$localidad."','".$claveUsuario."','".$nom_usuario."','".$mail."')";

        $con = new Conectar();
        $res = mysqli_query($con->conexion(), $sql);  // inserto el registro en la bd

        if ($res == 1){

            return 1;		// si afecto una linea
        }
        else{

            return 0;       // si no afecto ninguna linea
        }
    }

    public function verificar($usuario)
    {
        $sql = "select * from usuario where (nom_usuario ='".$usuario."')";
        $con = new Conectar();		// verifico nombre de usuario
        $res = mysqli_query($con->conexion(), $sql);
        return mysqli_num_rows($res);

    }

    public function getUsuario (){
        {
            $sql = "select * from usuario";

            $resultado=$this->db->query($sql);
            while ($ObtenerUsuarios = mysqli_fetch_assoc($resultado)){
                $this->usuarios[]=$ObtenerUsuarios;
            }
            return $this->usuarios;
        }
    }

}