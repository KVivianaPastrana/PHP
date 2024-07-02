<?php

function multiplicarFor($pcontar, $pnumero) {
    $numero=$pnumero;

    for ($contar = $pcontar; $contar <= $numero; $contar++) {
        $multiplicar =$numero * $contar;
        echo $multiplicar . " ";
    }
    echo "\n";
}

echo "Bucle 1: ";
multiplicarFor(1, 8);

echo "Bucle 2: ";
multiplicarFor(2, 6);
?>
