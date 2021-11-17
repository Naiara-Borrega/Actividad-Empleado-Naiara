<?php
    namespace EmpleadoComision;

    class EmpleadoPorComision extends Empleado{
        protected $horas;
        protected $tarifa;
        protected $base;

        public function __construct($nombre, $apellido, $numeroSeguridadSocial, $horas, $tarifa, $base){
            parent::__construct($nombre, $apellido, $numeroSeguridadSocial);
            $this->horas = $horas;
            $this->tarifa = $tarifa;
            $this->base = $base;
        }

        public function getHoras(){
            return $this->horas;
        }

        public function getTarifa(){
            return $this->tarifa;
        }

        public function getBase(){
            return $this->base;
        }

        public function setHoras($horas){
            $this->horas = $horas;
        }

        public function setTarifa($tarifa){
            $this->tarifa = $tarifa;
        }

        public function setBase($base){
            $this->base = $base;
        }

        public function mostrar(){
            parent::mostrar();
            echo "Los igresos " . $this->ingresos() . "<br>";
        }

        public function ingresos(){
            return ($this->base + $this->horas) * $this->tarifa;
        }
    }
?>