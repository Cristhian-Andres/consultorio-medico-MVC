<?php

    require_once 'model/medicos.php';

    class MedicosControlador{
        private $modelo;

        public function __CONSTRUCT(){
            $this -> modelo = new Medicos;
        }

        public function Inicio(){
            require_once 'views/header.php';
            require_once "views/medicos/indexMedicos.php";
            require_once 'views/footer.php';
        }

        public function ingresarMedicos(){
            $titulo = 'Registrar';
            $p = new Medicos();

            if(isset($_GET['id'])){
                $p = $this -> modelo -> obtener($_GET['id']);
                $titulo = 'Editar';
            }

            require_once 'views/header.php';
            require_once "views/medicos/formularioMedicos.php";
            require_once 'views/footer.php';
        }

        public function guardarMedicos(){
            $p = new Medicos();

            $p -> set_idMedico(intval($_POST['id']));
            $p -> set_medIdentificacion($_POST['identificacion']);
            $p -> set_medNombres($_POST['nombres']);
            $p -> set_medApellidos($_POST['apellidos']);
            $p -> set_medEspecialidad($_POST['especialidad']);
            $p -> set_medTelefono($_POST['telefono']);
            $p -> set_medCorreo($_POST['correo']);

            $p -> get_idMedico() > 0 ?  
            $this -> modelo -> actualizar($p) :
            $this -> modelo -> insertar($p);

            header('location:?c=medicos');
        }
        
        public function eliminar(){
            header('location:?c=medicos');
            $this -> modelo -> eliminar($_GET['id']);
        }
    }
?>