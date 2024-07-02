<?php
function multiplicarWhile($pcontar, $pnumero) {
$contar = $pcontar;
$numero=$pnumero;
    
    while ($contar <= $numero) {
        $multiplicar = $contar * $numero;
        echo $multiplicar ."";
        $contar++;
    }
echo "\n" ;
}

echo "Bucle 1: ";
multiplicarWhile(1, 8);


echo "Bucle 2: ";
multiplicarWhile(2, 6);

?>
