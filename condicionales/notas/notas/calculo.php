<?php
function calculoPorcentajeTotal($pnota1) {
    $nota1 = $pnota1;
    $porcentajeNota1 = $nota1 * 0.2;
    return $porcentajeNota1;
}

function calculoPorcentajeNota2($pnota2) {
    $nota2 = $pnota2;
    $porcentajeNota2 = $nota2 * 0.35;
    return $porcentajeNota2;
}

function calcularPorcentajeNota3($pnota3) {
    $nota3 = $pnota3;
    $porcentajeNota3 = $nota3 * 0.45;
    return $porcentajeNota3;
}

function sumarPorcentajes($porcentajeNota1, $porcentajeNota2, $porcentajeNota3) {
    $sumaPorcentajes = $porcentajeNota1 + $porcentajeNota2 + $porcentajeNota3;
    return $sumaPorcentajes;
}

function compararNotas($sumaPorcentajes) {
    if ($sumaPorcentajes > 4.5) {
        return "La nota es superior";
    } else if ($sumaPorcentajes > 3.5) {
        return "La nota es buena";
    } else if ($sumaPorcentajes > 3) {
        return "La nota es media";
    } else {
        return "La nota es mala";
    }
}

$porcentaje1 = calculoPorcentajeTotal(4);
$porcentaje2 = calculoPorcentajeNota2(3);
$porcentaje3 = calcularPorcentajeNota3(5);
$suma = sumarPorcentajes($porcentaje1, $porcentaje2, $porcentaje3);
$mensaje = compararNotas($suma);
echo "Porcentaje nota 1: " . $porcentaje1 . "\n";
echo "Porcentaje nota 2: " . $porcentaje2 . "\n";
echo "Porcentaje nota 3: " . $porcentaje3 . "\n";
echo "Suma de los porcentajes: " . $suma . "\n";
echo $mensaje;
?>

?>
