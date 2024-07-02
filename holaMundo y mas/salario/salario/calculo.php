<?php
function salario($dias, $vdia) {
    return $dias * $vdia;
}

function pension($dias, $vdia) {
    return salario($dias, $vdia) * 0.12;
}

function salud($dias, $vdia) {
    return salario($dias, $vdia) * 0.085;
}

function arl($dias, $vdia) {
    return salario($dias, $vdia) * 0.0052;
}

function descuento($dias, $vdia) {
    return pension($dias, $vdia) + salud($dias, $vdia) + arl($dias, $vdia);
}

function total($dias, $vdia) {
    return salario($dias, $vdia) - descuento($dias, $vdia);
}
?>
