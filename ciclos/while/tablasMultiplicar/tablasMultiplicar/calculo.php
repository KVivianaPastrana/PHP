<?php
function tablaNueve($pcontar, $prango) {
    $contar = $pcontar;
    $rango = $prango;
    $i = 1;
    while ($i <= $rango) {
        $multiplicar = $contar * $i;
        echo $contar . " * " . $i . " = " . $multiplicar . "\n";
        $i++;
    }
    echo "\n";
}

function paroImpar($numero){
    if($numero % 2 == 0){
        echo "Numero: " . $numero . ": Es par\n";
    } else {
        echo "Numero: " . $numero . ": Es impar\n";
    }
}

echo "Bucle 1:\n";
tablaNueve(3, 5);
echo "Bucle 2:\n";
tablaNueve(2, 6);
?>
