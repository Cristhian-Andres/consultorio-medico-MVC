<?php
    require_once 'model/roles.php';

    class RolesControlador{
        private $modelo;

        public function __CONSTRUCT(){
            $this -> modelo = new Roles;
        }

        public function Inicio(){
            require_once 'views/header.php';
            require_once "views/roles/indexRoles.php";
            require_once 'views/footer.php';
        }

        public function ingresarRoles(){
            $titulo = 'Registrar';
            $p = new Roles();

            if(isset($_GET['id'])){
                $p = $this -> modelo -> obtener($_GET['id']);
                $titulo = 'Editar';
            }

            require_once 'views/header.php';
            require_once "views/roles/formularioRoles.php";
            require_once 'views/footer.php';
        }

        public function guardarRoles(){
            $p = new Roles();

            $p -> set_idRol(intval($_POST['id']));
            $p -> set_rolNombre($_POST['nombre']);

            $p -> get_idRol() > 0 ?  
            $this -> modelo -> actualizar($p) :
            $this -> modelo -> insertar($p);

            header('location:?c=roles');
        }
        
        public function eliminar(){
            header('location:?c=roles');
            $this -> modelo -> eliminar($_GET['id']);
        }
    }
?>