<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício Bonus</title>
    <link href="styles.css" rel="stylesheet" >
</head>
<body>
<h1>Cálculo de média da nota:</h1>

<form method = "post" action="index.php">

    <h2>Insira a o Número da sorte:</h2>
    <input type = "number"  name="num" min="1" max="100" size="25"/> <br></br>

    <input type="submit">

    <?php
        $numero = rand(1,100);
        $num = $_POST[num];

        if ($num > $numero)
        {
            echo "O número digitado é maior que o número alvo.";
        }
        else if ($num < $numero)
        {
            echo "O número digitado é menor que o número alvo.";
        }
        else 
        {
            echo "Você acertou, o número da sorte era $numero";
        }
    ?>

</form>
</body>
</html>