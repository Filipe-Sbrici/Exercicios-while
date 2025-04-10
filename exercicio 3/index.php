<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3</title>
    <link href="styles.css" rel="stylesheet" >
</head>
<body>


    
<h1>ROLETA ALEATÓRIA</h1>
<form method="post">
    <button type="submit" name="sortear">Girar</button>
</form>

<?php
$base = rand(0, 100);
$tentativas = 0;
$nums = [];

do {
    $numero = rand(0, 100);
    $tentativas++;
    $nums[] = $numero;
} while ($numero != $base);

echo "<h2>Adivinhação Automática</h2>";
echo "Número base: $base<br>";
echo "Total de tentativas: $tentativas<br>";
echo "Números gerados: " . implode(", ", $nums);
?>
    
</body>
</html>  