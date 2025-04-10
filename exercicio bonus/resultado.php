<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício Bonus</title>
    <link href="styles.css" rel="stylesheet" >
</head>
<body>
<div class = "chickenjockey">
<h1>NÚMERO DA SORTE</h1>

<?php
$random = $_GET["random"];
$try = $_GET["try"];
?>

<h2>Boa mlk</h2>
<p>Você acertou o número da sorte: <?php echo $random; ?></p>
<p>Total de tentativas: <?php echo $try; ?></p>

</div>
</body>
</html>