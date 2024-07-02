<?php 
function calcularEdades($anioAct, $anioNa) {
    $edad = $anioAct - $anioNa;
    if ($edad >= 18) {
        return "Es mayor de edad";
    } else {
        return "Es menor de edad";
    }
}
?>
