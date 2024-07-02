<?php
function compararNumeros($num1, $num2){
    if ($num1 > $num2){
        return $num1 . " es mayor que: " . $num2;
    } else if ($num1 < $num2){
        return $num1 . " es menor que: " . $num2;
    } else {
        return $num1 . " es igual que: " . $num2;
    }
}
?>
