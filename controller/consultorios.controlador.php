<?php

    require_once 'model/consultorios.php';

    class ConsultoriosControlador{
        private $modelo;

        public function __CONSTRUCT(){
            $this -> modelo = new Consultorios;
        }

        public function Inicio(){
            require_once 'views/header.php';
            require_once "views/consultorios/indexConsultorios.php";
            require_once 'views/footer.php';
        }

        public function ingresarConsultorios(){
            $titulo = 'Registrar';
            $p = new Consultorios();

            if(isset($_GET['id'])){
                $p = $this -> modelo -> obtener($_GET['id']);
                $titulo = 'Editar';
            }

            require_once 'views/header.php';
            require_once "views/consultorios/formularioConsultorios.php";
            require_once 'views/footer.php';
        }

        public function guardarConsultorios(){
            $p = new Consultorios();

            $p -> set_idConsultorio(intval($_POST['id']));
            $p -> set_conNombre($_POST['nombre']);

            $p -> get_idConsultorio() > 0 ?  
            $this -> modelo -> actualizar($p) :
            $this -> modelo -> insertar($p);

            header('location:?c=consultorios');
        }
        
        public function eliminar(){
            header('location:?c=consultorios');
            $this -> modelo -> eliminar($_GET['id']);
        }
    }
?>