<?php
require_once "./Models/UsuarioModels.php";

echo "entro aca";
$Usuarios = new UsuarioModels();

$MostrarUsuarios=$Usuarios->getUsuario();


//require_once ("Views/Modulos/admin-view.php");

