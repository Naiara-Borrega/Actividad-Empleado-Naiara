<?php
    abstract class Empleado{
        private $nombre;
        private $apellido;
        private $numeroSeguridadSocial;

        public function __construct($nombre, $apellido, $numeroSeguridadSocial){
            $this->nombre = $nombre;
            $this->apellido = $apellido;
            $this->numeroSeguridadSocial = $numeroSeguridadSocial;
        }

        public function getNombre(){
            return $this->nombre;
        }

        public function getApellido(){
            return $this->apellido;
        }

        public function getNumeroSeguridadSocial(){
            return $this->numeroSeguridadSocial;
        }

        public function setNombre($nombre){
            $this->nombre = $nombre;
        }

        public function setApellido($apellido){
            $this->apellido = $apellido;
        }

        public function setNumeroSeguridadSocial($numeroSeguridadSocial){
            $this->numeroSeguridadSocial = $numeroSeguridadSocial;
        }

        public function mostrar(){
            echo "Este empleado $this->nombre $this->apellido con el NSS: $this->numeroSeguridadSocial <br>"; 
        }

        abstract function ingresos($sueldo, $dietas){}
    }
?>