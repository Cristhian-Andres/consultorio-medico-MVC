<?php

    require_once 'model/pacientes.php';

    class PacientesControlador{
        private $modelo;

        public function __CONSTRUCT(){
            $this->modelo=new Pacientes;
        }

        public function Inicio(){
            require_once 'views/header.php';
            require_once "views/pacientes/indexPacientes.php";
            require_once 'views/footer.php';
        }

        public function ingresarPacientes(){
            $titulo = 'Registrar';
            $p = new Pacientes();

            if(isset($_GET['id'])){
                $p = $this -> modelo -> obtener($_GET['id']);
                $titulo = 'Editar';
            }

            require_once 'views/header.php';
            require_once "views/pacientes/formularioPacientes.php";
            require_once 'views/footer.php';
        }

        public function guardarPacientes(){
            $p = new Pacientes();

            $p -> set_idPaciente(intval($_POST['id']));
            $p -> set_pacIdentificacion($_POST['identificacion']);
            $p -> set_pacNombres($_POST['nombres']);
            $p -> set_pacApellidos($_POST['apellidos']);
            $p -> set_pacFechaNacimiento($_POST['fecha']);
            $p -> set_pacSexo($_POST['genero']);

            $p -> get_idPaciente() > 0 ?  
            $this -> modelo -> actualizar($p) :
            $this -> modelo -> insertar($p);

            header('location:?c=pacientes');
        }
        
        public function eliminar(){
            header('location:?c=pacientes');
            $this -> modelo -> eliminar($_GET['id']);
        }
    }
?>