<?php
    class BaseDatos{

        const servidor ="localhost";
        const usuario ="root";
        const clave ="";
        const database="centromedico";

        public static function Conectar(){
            try{
                $conexion = new PDO("mysql:host=".self::servidor.";dbname=".self::database.";chartset=utf8",self::usuario,self::clave);

                $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                return $conexion;

            }catch(PDOException $e){
                return "Falló ".$e->getMessage();
            }
        }
    }
?>