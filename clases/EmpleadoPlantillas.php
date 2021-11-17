<?php
    namespace EmpleadoPlantilla;

    class EmpleadoPlantilla extends Empleado{
        protected $sueldo;
        protected $dietas;

        public function __construct($nombre, $apellido, $numeroSeguridadSocial, $sueldo, $dietas){
            parent::__construct($nombre, $apellido, $numeroSeguridadSocial);
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
            echo "Los igresos " . $this->ingresos() . "<br>"; 
        }

        public function ingresos(){
            return $this->sueldo * $this->dietas;
        }
    }
?>