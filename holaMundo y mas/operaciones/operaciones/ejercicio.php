<?php
function sumar($numeroUno, $numeroDos) {
    $suma = $numeroUno + $numeroDos;
    return $suma;
}
function restar($numeroUno, $numeroDos) {
    $resta = $numeroUno - $numeroDos;
    return $resta;
}
function multiplicar($numeroUno, $numeroDos) {
    $multiplicacion = $numeroUno * $numeroDos;
    return $multiplicacion;
}
function dividir($numeroUno, $numeroDos) {
    if ($numeroDos == 0){
        return false;
    }
    else{
        $division = $numeroUno / $numeroDos;
        return $division; 
    }
}
?>
