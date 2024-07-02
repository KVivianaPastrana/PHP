<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?php
  include 'nomina/calculo.php';
  
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
</body>
</html>