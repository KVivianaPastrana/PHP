<?php

function calculoPorcentaje($porcentajeUno, $porcentajeDos, $porcentajeTres) {
    $nota1 = $porcentajeUno;
    $nota2 = $porcentajeDos;
    $nota3 = $porcentajeTres;
    $porcentaje1 = ($nota1 * 30) / 100;
    $porcentaje2 = ($nota2 * 30) / 100;
    $porcentaje3 = ($nota3 * (40 + $porcentaje1 + $porcentaje2));
    return [$porcentaje1, $porcentaje3];
}
?>