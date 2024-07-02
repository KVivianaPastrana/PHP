<?php
function contarWhile($contar, $numero) {
    while ($contar <= $numero) {
        echo $contar;
        $contar++;
    }
    echo "\n";
}

echo "Bucle 1: ";
contarWhile(3, 8);

echo "Bucle 2: ";
contarWhile(2, 6);
?>
