
<?php
function tablaMultiplicar($factor1, $factor2) {
    $contarPar = 0;
    $contarImpar = 0;
    for ($multiplicando = 1; $multiplicando <= $factor1; $multiplicando++) {
        for ($multiplicador = 1; $multiplicador <= $factor2; $multiplicador++) {
            $resultado = $multiplicando * $multiplicador;
            echo $multiplicando . " x " . $multiplicador . " = " . $resultado . "\n";
            if ($resultado % 2 === 0) {
                echo "buzz\n";
                $contarPar++;
            } else {
                echo "bass\n";
                $contarImpar++;
            }
        }
    }
    echo "Cantidad de resultados pares: " . $contarPar . "\n";
    echo "Cantidad de resultados impares: " . $contarImpar . "\n";
}

tablaMultiplicar(5, 5);
?>
