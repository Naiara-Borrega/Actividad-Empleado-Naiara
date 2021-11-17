<?php
    namespace Empresa; 
    
    class Empresa
    {
        private $empresa;

        public function addEmpleado($empleado) {
            $empresa[] = $empleado;
        }

        public function listarEmpleados() {
            foreach ($empleado as $empresa) {
                $empleado->mostrar();
            } 
        }   

        public function sumaIngresos() {
            $resultado = 0;
            foreach ($empleado as $empresa) {
                $resultado += $empleado->ingresos();
            }
            return $resultado;
        }
    }
?>