<?php
function calculoPorcentaje($numeroUno, $numeroDos) {
    $numero1 = $numeroUno;
    $numero2 = $numeroDos;
    $multiplicacion = $numero1 * $numero2;
    $porcentaje = ($multiplicacion / 100);
    return $porcentaje;
}

?>
