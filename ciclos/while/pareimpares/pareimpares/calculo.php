
<?php
function contarParesImpares($pcontar, $pnumero) {
    $contar =$pcontar;
    $numero=$pnumero;
    while ($contar <= $numero) {
        if ($contar % 2 === 0) {
            echo $contar . " es par\n";
        } else {
            echo $contar . " es impar\n";
        }
        $contar++;
    }
}


contarParesImpares(3, 8);
?>