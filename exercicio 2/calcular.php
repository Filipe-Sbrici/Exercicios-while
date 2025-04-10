<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 10</title>
    <link href="styles.css" rel="stylesheet" >
</head>
<body>
<div class = "chickenjockey">

<?php

    $num = $_POST["num"];
    $numor = $num;
    $random = rand(1, 10);
    $retep = 0;

    do {
        $numor -= $random;
        $retep += 1;
    } while($numor > 0);

    echo "Levou aproximadamente $retep repetições do numero $random, para sair do número $num até 0<br>";

?>
</div>
</body>
</html>