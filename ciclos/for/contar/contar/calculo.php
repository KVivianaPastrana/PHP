<?php
function contarFor($pcontar, $pnumero) {
    $numero = $pnumero;
    for ($contar = $pcontar; $contar <= $numero; $contar++) {
        echo $contar;
    }
}

contarFor(1, 5);
?>
