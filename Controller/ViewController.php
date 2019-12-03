<?php
    require_once "./Models/ViewModels.php";

    Class ViewController extends  ViewModels {

        public  function  obtener_plantilla_controlador(){
        return require_once "./Views/index.php";
    }

        public function obtener_vistas_controlador()
        {
                if(isset($_GET['views']) ){
                    $routes = explode("/", $_GET['views']);
                    $respuesta = ViewModels::obtener_vistas_modelo($routes[0]);
                }else {
                    $respuesta="index";
                }
                return $respuesta;

        }
    }