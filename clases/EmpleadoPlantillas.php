<?php
    class EmpleadoPlantilla extends Empleado{
        private $sueldo;
        private $dietas;

        public function __construct($nombre, $apellido, $numeroSeguridadSocial, $sueldo, $dietas){
            $this->nombre = $nombre;
            $this->apellido = $apellido;
            $this->numeroSeguridadSocial = $numeroSeguridadSocial;
            $this->sueldo = $sueldo;
            $this->dietas = $dietas;
        }

        public function getSueldo(){
            return $this->sueldo;
        }

        public function getDietas(){
            return $this->dietas;
        }

        public function setSueldo($sueldo){
            $this->sueldo = $sueldo;
        }

        public function setDietas($dietas){
            $this->dietas = $dietas;
        }

        public function mostrar(){
            parent::mostrar();
            echo "Los igresos" . $this->ingresos() . "<br>"; 
        }

        public function ingresos($sueldo, $dietas){
            parent::ingresos();
            return $sueldo * $dietas;
        }
    }
?>