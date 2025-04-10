<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1</title>
    <link href="styles.css" rel="stylesheet" >
</head>
<body>
<div class = "chickenjockey">
<?php

    $num = $_POST ["num"];
    $num100 = $num / 100;
    $num50 = $num / 50;
    $num20 = $num / 20;
    $num10 = $num / 10;
    $num5 = $num / 5;
    $num2 = $num / 2;
    
    echo "Você precisaria de $num100 notas de R$100 para bater o número R$$num<br>";
    echo "Você precisaria de $num50 notas de R$50 para bater o número R$$num<br>";
    echo "Você precisaria de $num20 notas de R$20 para bater o número R$$num<br>";
    echo "Você precisaria de $num10 notas de R$10 para bater o número R$$num<br>";
    echo "Você precisaria de $num5 notas de R$5 para bater o número R$$num<br>";
    echo "Você precisaria de $num2 notas de R$2 para bater o número R$$num<br>";

?>
</div>
</body>
</html>