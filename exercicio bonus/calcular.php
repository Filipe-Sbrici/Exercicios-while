<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício Bonus</title>
    <link href="styles.css" rel="stylesheet" >
</head>
<body>
<h1>NÚMERO DA SORTE</h1>
<div class = "chickenjockey">

<?php
    $palpite = $_POST["palpite"];
    $random = $_POST["random"];
    $try = $_POST["try"] + 1;

    if ($palpite == $random) {
        header("Location: resultado.php?random=$random&try=$try");
        exit;
    }
?>

<p>Você digitou: <?php echo $palpite; ?></p>

<?php
if ($palpite > $random) {
    echo "<p>Tente um número menor!</p>";
} else {
    echo "<p>Tente um número maior!</p>";
}
?>


<form action="calcular.php" method="post">
  <input type="number" name="palpite" min="0" max="100" required>

  <input type="hidden" name="random" value="<?php echo $random; ?>">
  <input type="hidden" name="try" value="<?php echo $try; ?>">

  <br><br>
  <button type="submit">Tentar novamente</button>
</form>
</div>
</body>
</html> 