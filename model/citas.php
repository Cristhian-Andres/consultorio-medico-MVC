<?php

class Citas{

    private $pdo;

    private $idCita;
    private $citFecha;
    private $citHora;    
    private $citPaciente;
    private $citMedico;
    private $citConsultorio;
    private $citEstado;
    private $citObservaciones;

    public function __CONSTRUCT(){
        $this -> pdo = BaseDatos::Conectar();
    }

    public function get_idCita (){
        return $this -> idCita;
    }

    public function set_idCita($id_Cita ){
        $this -> idCita = $id_Cita ;
    }

    public function get_citFecha(){
        return $this -> citFecha;
    }

    public function set_citFecha($cit_Fecha){
        $this -> citFecha = $cit_Fecha;
    }

    public function get_citHora(){
        return $this -> citHora;
    }

    public function set_citHora($cit_Hora){
        $this -> citHora = $cit_Hora;
    }

    public function get_citPaciente(){
        return $this -> citPaciente;
    }

    public function set_citPaciente($cit_Paciente ){
        $this-> citPaciente= $cit_Paciente ;
    }

    public function get_citMedico(){
        return $this-> citMedico;
    }

    public function set_citMedico($cit_Medico){
        $this -> citMedico = $cit_Medico;
    }

    public function get_citConsultorio(){
        return $this -> citConsultorio;
    }

    public function set_citConsultorio ($cit_Consultorio ){
        $this -> citConsultorio= $cit_Consultorio ;
    }

    public function get_citEstado(){
        return $this -> citEstado;
    }

    public function set_citEstado($cit_Estado){
        $this -> citEstado = $cit_Estado ;
    }

    public function get_citObservaciones(){
        return $this -> citObservaciones;
    }

    public function set_citObservaciones($cit_Observaciones){
        $this -> citObservaciones = $cit_Observaciones;
    }

    // Metodos

    public function Listar(){
        try{
            $consulta = $this -> pdo -> prepare("SELECT * FROM citas INNER JOIN medicos ON citas.citMedico = medicos.idMedico INNER JOIN pacientes ON citas.citPaciente = pacientes.idPaciente INNER JOIN consultorios ON citas.citConsultorio = consultorios.idConsultorio ;");
            $consulta->execute();
            return $consulta->fetchAll(PDO::FETCH_OBJ);
            
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function insertar(Citas $p){
        try{
            $consulta = "INSERT INTO citas(citFecha, citHora, citPaciente, citMedico, citConsultorio, citEstado, citObservaciones) VALUES (?,?,?,?,?,?,?) ;";
            
            $this -> pdo -> prepare($consulta)
                    ->execute(array(
                        $p -> get_citFecha(),
                        $p -> get_citHora(),
                        $p -> get_citPaciente(),
                        $p -> get_citMedico(),
                        $p -> get_citConsultorio(),
                        $p -> get_citEstado(),
                        $p -> get_citObservaciones()
                    ));
            print_r($consulta);

        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function obtener($id){
        try{
            $consulta = $this -> pdo -> prepare("SELECT * FROM citas WHERE idCita = ?; ");
            $consulta ->execute(array($id));
            $r = $consulta->fetch(PDO::FETCH_OBJ);

            $p = new Citas();
            $p -> set_idCita($r -> idCita);
            $p -> set_citFecha($r -> citFecha);
            $p -> set_citHora($r -> citHora);
            $p -> set_citPaciente($r -> citPaciente);
            $p -> set_citMedico($r -> citMedico);
            $p -> set_citConsultorio($r -> citConsultorio);
            $p -> set_citEstado($r -> citEstado);
            $p -> set_citObservaciones($r -> citObservaciones);

            return $p;

        }catch(Exception $e){
            die($e->getMessage());
        }
    }



    public function actualizar(Citas $p){
        try{
            $consulta = " UPDATE citas SET 
                citFecha = ?,
                citHora = ?,
                citPaciente = ?,
                citMedico = ?,
                citConsultorio = ?,
                citEstado = ?,
                citObservaciones = ?
                WHERE idCita = ?;
            ";

            $this->pdo->prepare($consulta)
                    ->execute(array(
                        $p -> get_citFecha(),
                        $p -> get_citHora(),
                        $p -> get_citPaciente(),
                        $p -> get_citMedico(),
                        $p -> get_citConsultorio(),
                        $p -> get_citEstado(),
                        $p -> get_citObservaciones(),
                        $p -> get_idCita(),
                    ));
        }catch(Exception $e){
            die($e -> getMessage());
        }
    }

    public function eliminar($id){
        try{
            $consulta = "DELETE FROM citas WHERE idCita = ? ;";
            $this -> pdo -> prepare($consulta)
                    -> execute(array($id));

        }catch(Exception $e){
            die($e -> getMessage());
        }
    }
}