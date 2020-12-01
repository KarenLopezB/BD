<?php
    class Autor{
        private $id;
        private $nombre;
        private $apellido;
        private $nacionalidad;
        private $nacimiento;

        function __construct(){}

        public function getNombre(){
            return $this->nombre;
        }

        public function setNombre($nombre){
            $this->nombre = $nombre;
        }


        public function getApellido(){
            return $this->apellido;
        }

        public function setApellido($apellido){
            $this->apellido = $apellido;
        }

        public function getNacionalidad(){
            return $this->nacionalidad;
        }

        public function setNacionalidad($nacionalidad){
            $this->nacionalidad = $nacionalidad;
        }


        public function getNacimiento(){
            return $this->nacimiento;
        }

        public function setNacimiento($nacimiento){
            $this->nacimiento = $nacimiento;
        }


        public function getId(){
            return $this->id;
        }

        public function setId($id){
            $this->id = $id;
        }
    }
?>