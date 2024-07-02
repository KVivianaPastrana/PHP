<?php
function areaCuadrado($lado) {
    return $lado * $lado;
}

function compararAreasCuadrados($lado1, $lado2, $lado3) {
    $area1 = areaCuadrado($lado1);
    $area2 = areaCuadrado($lado2);
    $area3 = areaCuadrado($lado3);

    echo "Área del primer cuadrado: " . $area1 . "\n";
    echo "Área del segundo cuadrado: " . $area2 . "\n";
    echo "Área del tercer cuadrado: " . $area3 . "\n";

    if ($area1 > $area2 && $area1 > $area3) {
        return 1;
    } elseif ($area2 > $area1 && $area2 > $area3) {
        return 2;
    } else {
        return 3;
    }
}
?>
