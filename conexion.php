<?php //Etiqueta php
    class Bd{
        private static $conexion=NULL;
        private function __construct(){} //Precargar informacion para el uso de la conexion

        public static function conectar(){
            $pdo_option[PDO::ATTR_ERRMODE]=PDO::ERRMODE_EXCEPTION; 
            self::$conexion = new PDO('mysql:host=localhost;dbname=biblioteca','root','',$pdo_option);
            return self::$conexion;
        }
    }
?>