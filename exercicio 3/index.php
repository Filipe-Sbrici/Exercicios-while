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

    $numero = rand(0,10);
    echo "num test $numero<br>"

    if (isset($_POST['botao_teste'])) {
      echo "O botão foi clicado!";
    }

?>
    
</body>
</html>  