<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 10</title>
    <link href="styles.css" rel="stylesheet" >
</head>
<body>
<?php

    $num = $_POST ["num"];
    $random = rand(1,10);
    $retep = 0;
    
    do{
        $num -= $random;
        $retep += 1;

    }while(num!=0)
    
    echo "Você precisaria de $num100 notas de R$100 para bater o número R$$num<br>";

?>
</body>
</html>