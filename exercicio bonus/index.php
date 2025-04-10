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
    $random = rand(0, 100);
    $try = 0;
?>

<form action="calcular.php" method="post">
  <p>Digite um número entre 0 e 100:</p>
  <input type="number" name="palpite" min="0" max="100" required>

  <input type="hidden" name="random" value="<?php echo $random; ?>">
  <input type="hidden" name="try" value="<?php echo $try; ?>">

  <br><br>
  <button type="submit">Enviar palpite</button>
</form>
</div>
</body>
</html> 