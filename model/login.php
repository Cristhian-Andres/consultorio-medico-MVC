<?php
    class Login{

        private $pdo;

        private $usuLogin;
        private $usuPassword;

        public function __CONSTRUCT(){
            $this -> pdo = BaseDatos::Conectar();
        }

        public function get_usuLogin(){
            return $this -> usuLogin;
        }
    
        public function set_usuLogin($usu_Login){
            $this -> usuLogin = $usu_Login;
        }
    
        public function get_usuPassword(){
            return $this -> usuPassword;
        }
    
        public function set_usuPassword($usu_Password){
            $this -> usuPassword = $usu_Password;
        }

        public function validar($user, $password){

            try{
                $consulta = $this -> pdo -> prepare("SELECT * FROM usuarios WHERE usuLogin = '$user' and usuPassword = '$password';");
                $consulta -> execute();
                
                return $consulta -> fetchAll();
    
            }catch(Exception $e){
                
                die($e->getMessage());
            }
        }
    }
?>