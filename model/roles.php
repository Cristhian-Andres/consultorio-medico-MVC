<?php
    class Roles{

        private $pdo;

        private $idRol;
        private $rolNombre;

        public function __CONSTRUCT(){
            $this -> pdo = BaseDatos::Conectar();
        }

        public function get_idRol(){
            return $this -> idRol;
        }

        public function set_idRol($id_Rol){
            $this -> idRol = $id_Rol;
        }

        public function get_rolNombre(){
            return $this -> rolNombre;
        }

        public function set_rolNombre($rol_Nombre){
            $this -> rolNombre = $rol_Nombre;
        }

        public function Listar(){
            try{
                $consulta = $this -> pdo -> prepare("SELECT * FROM roles;");
                $consulta->execute();
                return $consulta -> fetchAll(PDO::FETCH_OBJ);
                
            }catch(Exception $e){
                die($e->getMessage());
            }
        }

        public function insertar(Roles $p){
            try{
                $consulta = "INSERT INTO roles(rolNombre) VALUES (?);";
                
                $this -> pdo -> prepare($consulta)
                        ->execute(array(
                            $p -> get_rolNombre()
                        ));

            }catch(Exception $e){
                die($e->getMessage());
            }
        }

        public function obtener($id){
            try{
                $consulta = $this -> pdo -> prepare("SELECT * FROM roles WHERE idRol = ?;");
                $consulta ->execute(array($id));
                $r = $consulta->fetch(PDO::FETCH_OBJ);

                $p = new Roles();
                $p -> set_idRol($r -> idRol);
                $p -> set_rolNombre($r -> rolNombre); 

                return $p;

            }catch(Exception $e){
                die($e->getMessage());
            }
        }

        public function actualizar(Roles $p){
            try{
                $consulta="UPDATE roles SET 
                    rolNombre = ?
                    WHERE idRol = ?;
                ";

                $this->pdo->prepare($consulta)
                        ->execute(array(
                            $p -> get_rolNombre(),
                            $p -> get_idRol()
                        ));
            }catch(Exception $e){
                die($e->getMessage());
            }
        }

        public function eliminar($id){
            try{
                $consulta="DELETE FROM roles WHERE idRol = ?;";
                $this->pdo->prepare($consulta)
                        ->execute(array($id));

            }catch(Exception $e){
                die($e->getMessage());
            }
        }
    }
?>