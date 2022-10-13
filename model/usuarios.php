<?php

    class Usuarios{

        private $pdo;

        private $idUsuario;
        private $usuLogin;
        private $usuPassword;    
        private $usuEstado;
        private $usuRol;

        public function __CONSTRUCT(){
            $this -> pdo = BaseDatos::Conectar();
        }

        public function get_idUsuario(){
            return $this -> idUsuario;
        }

        public function set_idUsuario($id_Usuario){
            $this -> idUsuario = $id_Usuario;
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

        public function get_usuEstado(){
            return $this -> usuEstado;
        }

        public function set_usuEstado($usu_Estado){
            $this-> usuEstado = $usu_Estado;
        }

        public function get_usuRol(){
            return $this-> usuRol;
        }

        public function set_usuRol($usu_Rol){
            $this -> usuRol = $usu_Rol;
        }

        public function Listar(){
            try{
                $consulta=$this->pdo->prepare("SELECT * FROM usuarios;");
                $consulta->execute();
                return $consulta->fetchAll(PDO::FETCH_OBJ);
                
            }catch(Exception $e){
                die($e->getMessage());
            }
        }

        public function insertar(Usuarios $p){
            try{
                $consulta = "INSERT INTO usuarios(usuLogin, usuPassword, usuEstado, usuRol) VALUES (?,?,?,?);";
                
                $this -> pdo -> prepare($consulta)
                        ->execute(array(
                            $p -> get_usuLogin(),
                            $p -> get_usuPassword(),
                            $p -> get_usuEstado(),
                            $p -> get_usuRol(),
                        ));

            }catch(Exception $e){
                die($e->getMessage());
            }
        }

        public function obtener($id){
            try{
                $consulta = $this -> pdo -> prepare("SELECT * FROM usuarios WHERE idUsuario = ?;");
                $consulta ->execute(array($id));
                $r = $consulta->fetch(PDO::FETCH_OBJ);

                $p = new Usuarios();
                $p -> set_idUsuario($r -> idUsuario);
                $p -> set_usuLogin($r -> usuLogin);
                $p -> set_usuPassword($r -> usuPassword);
                $p -> set_usuEstado($r -> usuEstado);
                $p -> set_usuRol($r -> usuRol);

                return $p;

            }catch(Exception $e){
                die($e->getMessage());
            }
        }

        public function actualizar(Usuarios $p){
            try{
                $consulta="UPDATE usuarios SET 
                    usuLogin = ?,
                    usuPassword = ?,
                    usuEstado = ?,
                    usuRol = ?
                    WHERE idUsuario = ?;
                ";

                $this->pdo->prepare($consulta)
                        ->execute(array(
                            $p -> get_usuLogin(),
                            $p -> get_usuPassword(),
                            $p -> get_usuEstado(),
                            $p -> get_usuRol(),
                            $p -> get_idUsuario()
                        ));
            }catch(Exception $e){
                die($e->getMessage());
            }
        }

        public function eliminar($id){
            try{
                $consulta="DELETE FROM usuarios WHERE idUsuario = ?;";
                $this->pdo->prepare($consulta)
                        ->execute(array($id));

            }catch(Exception $e){
                die($e->getMessage());
            }
        }
    }
?>