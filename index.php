<?php
    include "clases/Empleados.php";
    include "clases/EmpleadoPlantillas.php";
    include "clases/EmpleadoPorComision.php";
    include "clases/PruebaPolimorf.php";

    /* Como la clase es abstracta los dejo comentados */
    /*  
        $empleado = new Empleado("Lola", "Etxegaray", "14-78451589-75");
        $empleado2 = new Empleado("Maria", "Benabide", "18-56595475-56");
    */

    $empleadoPlantilla = new EmpleadoPlantilla("Naiara", "Borrega", "18-56595475-56", 1100, 250);
    $empleadoPorComision = new EmpleadoPorComision("Noelia", "Urdin", "15-98267875-59", 5, 250, 150);

    $resultado = $empleadoPlantilla->mostrar() . "<br>" . $empleadoPorComision->mostrar() . "<br>" . PruebaPolimorf::calcular($empleadoPlantilla);
    
    include "vistas/vista_resultado.php";
?>