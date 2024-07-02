<?php
function salario($dias, $vdia) {
    return $dias * $vdia;
}

function subTrans($dias, $vdia) {
    $salarioMinimo = 1600000;
    $salarioTrans = salario($dias, $vdia);

    if ($salarioTrans <= 2 * $salarioMinimo) {
        $subTransporte = 114000;
    } else {
        $subTransporte = 0;
    }

    return $subTransporte;
}

function salud($dias, $vdia) {
    $pagoSalud = salario($dias, $vdia) * 0.12;
    return $pagoSalud;
}

function pension($dias, $vdia) {
    $pagoPension = salario($dias, $vdia) * 0.16;
    return $pagoPension;
}

function arl($dias, $vdia) {
    $pagoArl = salario($dias, $vdia) * 0.052;
    return $pagoArl;
}

function deducible($dias, $vdia) {
    return salud($dias, $vdia) + pension($dias, $vdia) + arl($dias, $vdia);
}

function pagoTotal($dias, $vdia) {
return salario($dias,$vdia)+pension($dias, $vdia) + arl($dias, $vdia) + subTrans($dias, $vdia);
}

echo"Salario",
var_dump( salario(20,40000));

echo "Subsidio de Transporte",
var_dump(subTrans (20,40000));

echo "Salud",
var_dump(salud(20,40000));

echo "Pension:",
var_dump(pension(20,40000));

echo "Arl:",
var_dump(arl(20,40000));

echo "Total a pagar:",
var_dump(pagoTotal(20,40000));
?>