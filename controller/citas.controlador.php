<?php

    require_once 'model/citas.php';
    require_once 'model/medicos.php';
    require_once 'model/pacientes.php';
    require_once 'model/consultorios.php';
    

    class CitasControlador{
        private $modelo;

        public function __CONSTRUCT(){
            $this -> modelo = new Citas;
            $this -> modeloMedicos = new Medicos; 
            $this -> modeloConsultorios = new Consultorios; 
            $this -> modeloPacientes = new Pacientes; 
        }

        public function Inicio(){
            require_once 'views/header.php';
            require_once "views/citas/indexCitas.php";
            require_once 'views/footer.php';
        }

        public function ingresarCitas(){
            $titulo = 'Registrar';
            $p = new Citas();

            if(isset($_GET['id'])){
                $p = $this -> modelo -> obtener($_GET['id']);
                $titulo = 'Editar';
            }

            $bdMedicos = $this -> modeloMedicos -> listar();
            $bdConsultorios = $this -> modeloConsultorios -> listar();
            $bdPacientes = $this -> modeloPacientes -> listar();
 
            require_once 'views/header.php';
            require_once "views/citas/formularioCitas.php";
            require_once 'views/footer.php';
        }

        public function guardarCitas(){

            $p = new Citas();

            $p -> set_idCita(intval($_POST['id']));
            $p -> set_citFecha($_POST['fecha']);
            $p -> set_citHora($_POST['hora']);
            $p -> set_citPaciente($_POST['paciente']);
            $p -> set_citMedico($_POST['medico']);
            $p -> set_citConsultorio($_POST['consultorio']);
            $p -> set_citEstado($_POST['estado']);
            $p -> set_citObservaciones($_POST['observaciones']);

            $p -> get_idCita() > 0 ?  
            $this -> modelo -> actualizar($p) :
            $this -> modelo -> insertar($p);

            header('location:?c=citas');
        }
        
        public function eliminar(){
            header('location:?c=citas');

            $this -> modelo -> eliminar($_GET['id']);
        }
    }
?>