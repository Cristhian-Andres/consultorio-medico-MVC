<?php
    require_once "model/login.php";

    class LoginControlador{
        private $modelo;

        public function __CONSTRUCT(){
            $this -> modelo = new Login;
        }

        public function Inicio(){
            require_once "views/login/index.html";
        }

        public function ingresarLogin(){
            require_once "views/login/formularioLogin.php";
        }

        public function guardarLogin(){

            $user = $_POST['Login'];
            $password = $_POST['Password'];

            $login = $this -> modelo -> validar($user, $password);

            if(count($login) > 0){
                foreach($login as $log){
                    foreach($log as $i){

                        if($i == 'Paciente'){
                            //echo 'si';
                            header('location:?c=inicio');
                        }else if($i == 'Administrador'){
                            //echo 'no';
                            header('location:?c=inicio');
                        }
                    }
                }
            }else{
                header('location:?c=login&a=ingresarlogin');
            }
        }
    }
?>