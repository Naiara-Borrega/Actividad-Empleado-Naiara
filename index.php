<?php
    include "vistas/vista_resultado.php";
    include "clases/Empleados.php";

    $empleado = new Empleado("Lola", "Etxegaray", "14-78451589-75");
    $empleado2 = new Empleado("Maria", "Benabide", "18-56595475-56");

    echo $empleado->mostrar();
    echo $empleado2->mostrar();
?>