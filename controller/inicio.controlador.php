<?php
    require_once "model/inicio.php";

    class InicioControlador{
        private $modelo;

        public function __CONSTRUCT(){
            $this -> modelo = new Inicio;
        }

        public function Inicio(){
            require_once "views/header.php";
            require_once "views/inicio/principalAdm.php";
            require_once "views/footer.php";   
        }
    }
?>