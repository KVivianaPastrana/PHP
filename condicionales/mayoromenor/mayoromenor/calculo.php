<?php
function promedioMayor($nacimiento1, $nacimiento2, $nacimiento3){
    $edad1 = 2024 - $nacimiento1;
    $edad2 = 2024 - $nacimiento2;
    $edad3 = 2024 - $nacimiento3;

    if ($edad1 > $edad2) {
        if ($edad1 > $edad3) {
            return $edad1;
        }
    } else {
        if ($edad2 > $edad3) {
            return $edad2;
        } else {
            return $edad3;
        }
    }
    $promedio = ($edad1 + $edad2 + $edad3) / 3;    
    echo "El promedio de edades es: " . $promedio;
    
    compararEdad($promedio);
}
function compararEdad($promedio)
{
    if ($promedio >= 18){
        echo "La mayoría de las personas está por encima de la mayoría de edad.";
    } else {
        echo "El promedio de edades está por debajo de la mayoría de edad.";
    }
}
?>
