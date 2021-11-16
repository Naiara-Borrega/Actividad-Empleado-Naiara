<?php
    class EmpleadoPorComision extends Empleado{
        private $horas;
        private $tarifa;
        private $base;

        public function __construct($nombre, $apellido, $numeroSeguridadSocial, $horas, $tarifa, $base){
            $this->nombre = $nombre;
            $this->apellido = $apellido;
            $this->numeroSeguridadSocial = $numeroSeguridadSocial;
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
            echo "Los igresos" . $this->ingresos() . "<br>";
        }

        public function ingresos($sueldo, $dietas){
            parent::ingresos();
            return ($base + $horas) * $tarifa;
        }
    }
?>