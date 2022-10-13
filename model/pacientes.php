<?php

class Pacientes{

    private $pdo;

    private $idPaciente;
    private $pacIdentificacion;
    private $pacNombres;    
    private $pacApellidos ;
    private $pacFechaNacimiento;
    private $pacSexo ;

    public function __CONSTRUCT(){
        $this -> pdo = BaseDatos::Conectar();
    }

    public function get_idPaciente(){
        return $this -> idPaciente;
    }

    public function set_idPaciente($id_Paciente){
        $this -> idPaciente = $id_Paciente;
    }

    public function get_pacIdentificacion(){
        return $this -> pacIdentificacion;
    }

    public function set_pacIdentificacion($pac_Identificacion){
        $this -> pacIdentificacion = $pac_Identificacion;
    }

    public function get_pacNombres(){
        return $this -> pacNombres;
    }

    public function set_pacNombres($pac_Nombres){
        $this -> pacNombres = $pac_Nombres;
    }

    public function get_pacApellidos(){
        return $this -> pacApellidos;
    }

    public function set_pacApellidos($pac_Apellidos){
        $this-> pacApellidos = $pac_Apellidos;
    }

    public function get_pacFechaNacimiento(){
        return $this-> pacFechaNacimiento;
    }

    public function set_pacFechaNacimiento($pac_FechaNacimiento){
        $this -> pacFechaNacimiento = $pac_FechaNacimiento;
    }

    public function get_pacSexo(){
        return $this -> pacSexo;
    }

    public function set_pacSexo($pac_Sexo){
        $this -> pacSexo = $pac_Sexo;
    }

    public function Listar(){
        try{
            $consulta=$this->pdo->prepare("SELECT * FROM pacientes;");
            $consulta->execute();
            return $consulta->fetchAll(PDO::FETCH_OBJ);
            
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function insertar(Pacientes $p){
        try{
            $consulta = "INSERT INTO pacientes(pacIdentificacion, pacNombres, pacApellidos, pacFechaNacimiento, pacSexo) VALUES (?,?,?,?,?) ;";
            
            $this -> pdo -> prepare($consulta)
                    ->execute(array(
                        $p -> get_pacIdentificacion(),
                        $p -> get_pacNombres(),
                        $p -> get_pacApellidos(),
                        $p -> get_pacFechaNacimiento(),
                        $p -> get_pacSexo(),
                    ));

        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function obtener($id){
        try{
            $consulta = $this -> pdo -> prepare("SELECT * FROM pacientes WHERE idPaciente = ?; ");
            $consulta ->execute(array($id));
            $r = $consulta->fetch(PDO::FETCH_OBJ);

            $p = new Pacientes();
            $p -> set_idPaciente($r -> idPaciente);
            $p -> set_pacIdentificacion($r -> pacIdentificacion);
            $p -> set_pacNombres($r -> pacNombres);
            $p -> set_pacApellidos($r -> pacApellidos);
            $p -> set_pacFechaNacimiento($r -> pacFechaNacimiento);
            $p -> set_pacSexo($r -> pacSexo);

            return $p;

        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function actualizar(Pacientes $p){
        try{
            $consulta="UPDATE pacientes SET 
                pacIdentificacion = ?,
                pacNombres = ?,
                pacApellidos = ?,
                pacFechaNacimiento = ?,
                pacSexo = ?
                WHERE idPaciente = ?;
            ";

            $this->pdo->prepare($consulta)
                    ->execute(array(
                        $p -> get_pacIdentificacion(),
                        $p -> get_pacNombres(),
                        $p -> get_pacApellidos(),
                        $p -> get_pacFechaNacimiento(),
                        $p -> get_pacSexo(),
                        $p -> get_idPaciente()
                    ));
        }catch(Exception $e){
            die($e -> getMessage());
        }
    }

    public function eliminar($id){
        try{
            $consulta = "DELETE FROM pacientes WHERE idPaciente = ? ;";
            $this -> pdo -> prepare($consulta)
                    -> execute(array($id));

        }catch(Exception $e){
            die($e -> getMessage());
        }
    }
}