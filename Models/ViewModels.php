<?php

    Class ViewModels {

    protected  function obtener_vistas_modelo($vistas) //Palabras que lee la url
    {
        $ListaBlanca = ["indexProducto","productos", "registrar", "login", "index",
            "home", "admin","busqueda","reserva"];

        if (in_array($vistas, $ListaBlanca)) {
            if (is_file("./Views/Contenido/" . $vistas . "-view.php")) {
                $MostrarContenido = "./Views/Contenido/" . $vistas ."-view.php";
            } else {
                $MostrarContenido="index";
            }
        } elseif ($vistas=="index") {
            $MostrarContenido="index";
        } else {
            $MostrarContenido="index";
        }
    return $MostrarContenido;
    }
    }