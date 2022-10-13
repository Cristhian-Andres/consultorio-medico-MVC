<?php
    class Consultorios{

        private $pdo;

        private $idConsultorio;
        private $conNombre;

        public function __CONSTRUCT(){
            $this -> pdo = BaseDatos::Conectar();
        }

        public function get_idConsultorio(){
            return $this -> idConsultorio;
        }

        public function set_idConsultorio($id_Consultorio){
            $this -> idConsultorio = $id_Consultorio;
        }

        public function get_conNombre(){
            return $this -> conNombre;
        }

        public function set_conNombre($con_Nombre ){
            $this -> conNombre = $con_Nombre ;
        }

        public function Listar(){
            try{
                $consulta = $this -> pdo -> prepare("SELECT * FROM consultorios;");
                $consulta->execute();
                return $consulta->fetchAll(PDO::FETCH_OBJ);
                
            }catch(Exception $e){
                die($e->getMessage());
            }
        }

        public function insertar(Consultorios $p){
            try{
                $consulta = "INSERT INTO consultorios(conNombre) VALUES (?);";
                
                $this -> pdo -> prepare($consulta)
                        ->execute(array(
                            $p -> get_conNombre()
                        ));

            }catch(Exception $e){
                die($e->getMessage());
            }
        }

        public function obtener($id){
            try{
                $consulta = $this -> pdo -> prepare("SELECT * FROM consultorios WHERE idConsultorio = ?;");
                $consulta ->execute(array($id));
                $r = $consulta->fetch(PDO::FETCH_OBJ);

                $p = new Consultorios();
                $p -> set_idConsultorio($r -> idConsultorio);
                $p -> set_conNombre($r -> conNombre); 

                return $p;

            }catch(Exception $e){
                die($e->getMessage());
            }
        }

        public function actualizar(Consultorios $p){
            try{
                $consulta="UPDATE consultorios SET 
                    conNombre = ?
                    WHERE idConsultorio = ?;
                ";

                $this->pdo->prepare($consulta)
                        ->execute(array(
                            $p -> get_conNombre(),
                            $p -> get_idConsultorio()
                        ));
            }catch(Exception $e){
                die($e->getMessage());
            }
        }

        public function eliminar($id){
            try{
                $consulta="DELETE FROM consultorios WHERE idConsultorio = ?;";
                $this->pdo->prepare($consulta)
                        ->execute(array($id));

            }catch(Exception $e){
                die($e->getMessage());
            }
        }
    }
?>