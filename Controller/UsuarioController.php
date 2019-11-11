<?php
require_once "./Models/UsuarioModels.php";

$Usuarios = new UsuarioModels();

$MostrarUsuarios=$Usuarios->getUsuario();


//require_once ("Views/Modulos/admin-view.php");

