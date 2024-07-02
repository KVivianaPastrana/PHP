<?php
function contarPareImpares($pcontar, $pnumero) {
    $contar = $pcontar;
    $numero = $pnumero;
    for ($contar = $pcontar; $contar <= $numero; $contar++) {
        if ($contar % 2 === 0) {
            echo $contar . " Es par\n";
        } else {
            echo $contar . " Es impar\n";
        }
    }
    echo "\n";
}

contarPareImpares(3, 8);
?>
