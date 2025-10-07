<?php
// Hub d'exercicis - index.php
$exercicis = [
    'Exercici 1 - Variables i Conversió' => 'exercici1.php',
    'Exercici 2 - Comprovacions' => 'comprovacions.php',
    'Exercici 3 - Alumnes i notes' => 'exercici3.php',
    'Exercici 4 - Compres' => 'exercici4.php',
    'Exercici 5 - Miniaplicació' => 'exercici5.php'
];
?>
<!DOCTYPE html>
<html lang="ca">
<head>
  <meta charset="utf-8" />
  <title>Hub d'exercicis</title>
  <style>
    body { font-family: Arial, sans-serif; }
    ul { line-height: 1.8; }
  </style>
</head>
<body>
  <h1>Hub d'exercicis</h1>
  <p>Cliqueu un enllaç per obrir l'exercici corresponent:</p>
  <ul>
    <?php foreach ($exercicis as $label => $file): ?>
      <li><a href="<?php echo htmlspecialchars($file); ?>"><?php echo htmlspecialchars($label); ?></a></li>
    <?php endforeach; ?>
  </ul>
</body>
</html>
