<?php
$numero = null;
  if (isset($_POST['sortear'])) {
    $numero = rand(1, 10);
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1</title>
    <link href="styles.css" rel="stylesheet" >
</head>
<body>
    
<h1>ROLETA ALEATÓRIA</h1>
<form method="post">
    <button type="submit" name="sortear">Girar</button>
  </form>

  <?php if ($numero !== null): ?>
    <div>chickenjockey: <?= $numero ?></div>
  <?php endif; ?>

    
</body>
</html>  