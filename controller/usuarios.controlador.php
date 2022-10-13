<?php

    require_once 'model/usuarios.php';

    class UsuariosControlador{
        private $modelo;

        public function __CONSTRUCT(){
            $this -> modelo = new Usuarios;
        }

        public function Inicio(){
            require_once 'views/header.php';
            require_once "views/usuarios/indexUsuarios.php";
            require_once 'views/footer.php';
        }

        public function ingresarUsuarios(){
            $titulo = 'Registrar';
            $p = new Usuarios();

            if(isset($_GET['id'])){
                $p = $this -> modelo -> obtener($_GET['id']);
                $titulo = 'Editar';
            }

            require_once 'views/header.php';
            require_once "views/usuarios/formularioUsuarios.php";
            require_once 'views/footer.php';
        }

        public function guardarUsuarios(){
            $p = new Usuarios();

            $p -> set_idUsuario(intval($_POST['id']));
            $p -> set_usuLogin($_POST['Login']);
            $p -> set_usuPassword($_POST['Password']);
            $p -> set_usuEstado($_POST['Estado']);
            $p -> set_usuRol($_POST['Rol']);

            $p -> get_idUsuario() > 0 ?  
            $this -> modelo -> actualizar($p) :
            $this -> modelo -> insertar($p);

            header('location:?c=usuarios');
        }
        
        public function eliminar(){
            header('location:?c=usuarios');
            $this -> modelo -> eliminar($_GET['id']);
        }
    }
?>