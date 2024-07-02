<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
include 'cuadros/calculo.php';

$lado1 = 5;
$lado2 = 8;
$lado3 = 10;

echo "El cuadrado con el área más grande es el número " . compararAreasCuadrados($lado1, $lado2, $lado3);

    ?>
</body>
</html>