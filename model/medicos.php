<?php

    class Medicos{

        private $pdo;

        private $idMedico;
        private $medIdentificacion;
        private $medNombres;    
        private $medApellidos;
        private $medEspecialidad;
        private $medTelefono;
        private $medCorreo;

        public function __CONSTRUCT(){
            $this -> pdo = BaseDatos::Conectar();
        }

        public function get_idMedico(){
            return $this -> idMedico;
        }

        public function set_idMedico($id_Medico){
            $this -> idMedico = $id_Medico;
        }

        public function get_medIdentificacion (){
            return $this -> medIdentificacion;
        }

        public function set_medIdentificacion ($med_Identificacion ){
            $this -> medIdentificacion = $med_Identificacion ;
        }

        public function get_medNombres(){
            return $this -> medNombres;
        }

        public function set_medNombres($med_Nombres){
            $this -> medNombres = $med_Nombres;
        }

        public function get_medApellidos(){
            return $this -> medApellidos;
        }

        public function set_medApellidos($med_Apellidos){
            $this-> medApellidos = $med_Apellidos;
        }

        public function get_medEspecialidad(){
            return $this-> medEspecialidad;
        }

        public function set_medEspecialidad($med_Especialidad){
            $this -> medEspecialidad = $med_Especialidad;
        }

        public function get_medTelefono(){
            return $this-> medTelefono;
        }

        public function set_medTelefono($med_Telefono){
            $this -> medTelefono = $med_Telefono;
        }

        public function get_medCorreo(){
            return $this-> medCorreo;
        }

        public function set_medCorreo($med_Correo){
            $this -> medCorreo = $med_Correo;
        }


        public function Listar(){
            try{
                $consulta = $this -> pdo -> prepare("SELECT * FROM medicos;");
                $consulta->execute();
                return $consulta->fetchAll(PDO::FETCH_OBJ);
                
            }catch(Exception $e){
                die($e->getMessage());
            }
        }

        public function insertar(Medicos $p){
            try{
                $consulta = "INSERT INTO medicos(medIdentificacion, medNombres, medApellidos, medEspecialidad, medTelefono, medCorreo) VALUES (?,?,?,?,?,?);";
                
                $this -> pdo -> prepare($consulta)
                        ->execute(array(
                            $p -> get_medIdentificacion(),
                            $p -> get_medNombres(),
                            $p -> get_medApellidos(),
                            $p -> get_medEspecialidad(),
                            $p -> get_medTelefono(),
                            $p -> get_medCorreo(),
                        ));

            }catch(Exception $e){
                die($e->getMessage());
            }
        }

        public function obtener($id){
            try{
                $consulta = $this -> pdo -> prepare("SELECT * FROM medicos WHERE idMedico = ?;");
                $consulta ->execute(array($id));
                $r = $consulta->fetch(PDO::FETCH_OBJ);

                $p = new Medicos();
                $p -> set_idMedico($r -> idMedico);
                $p -> set_medIdentificacion($r -> medIdentificacion);
                $p -> set_medNombres($r -> medNombres);
                $p -> set_medApellidos($r -> medApellidos);
                $p -> set_medEspecialidad($r -> medEspecialidad);
                $p -> set_medTelefono($r -> medTelefono);
                $p -> set_medCorreo($r -> medCorreo);

                return $p;

            }catch(Exception $e){
                die($e->getMessage());
            }
        }

        public function actualizar(Medicos $p){
            try{
                $consulta="UPDATE medicos SET 
                    medIdentificacion = ?,
                    medNombres = ?,
                    medApellidos = ?,
                    medEspecialidad = ?,
                    medTelefono = ?,
                    medCorreo = ?
                    WHERE idMedico = ?;
                ";

                $this->pdo->prepare($consulta)
                        ->execute(array(
                            $p -> get_medIdentificacion(),
                            $p -> get_medNombres(),
                            $p -> get_medApellidos(),
                            $p -> get_medEspecialidad(),
                            $p -> get_medTelefono(),
                            $p -> get_medCorreo(),
                            $p -> get_idMedico()
                        ));
            }catch(Exception $e){
                die($e->getMessage());
            }
        }

        public function eliminar($id){
            try{
                $consulta="DELETE FROM medicos WHERE idMedico = ?;";
                $this->pdo->prepare($consulta)
                        ->execute(array($id));

            }catch(Exception $e){
                die($e->getMessage());
            }
        }
    }
?>