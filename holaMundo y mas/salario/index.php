<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
include 'salario/calculo.php';

echo "Salud: ";
var_dump(salud(30, 40000));
echo "Pension: ";
var_dump(pension(30, 40000));
echo "ARL: ";
var_dump(arl(30, 40000));
echo "Descuentos: ";
var_dump(descuento(20, 40000));
echo "Total a pagar de fp: ";
var_dump(total(20, 40000));
?>

</body>
</html>