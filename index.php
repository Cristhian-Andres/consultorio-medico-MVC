<?php
    require_once "model/baseDatos.php";

    if(!isset($_GET['c'])){
        require_once "controller/login.controlador.php";
        $controlador = new LoginControlador();
        call_user_func(array($controlador,"Inicio"));
    }else{
        $controlador = $_GET['c'];
        require_once "controller/$controlador.controlador.php";
        $controlador = ucwords($controlador)."Controlador";
        $controlador = new $controlador;
        $accion = isset($_GET['a']) ? $_GET['a'] : "Inicio";
        call_user_func(array($controlador, $accion));
    }
?>