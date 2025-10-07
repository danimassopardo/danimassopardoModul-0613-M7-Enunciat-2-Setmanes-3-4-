<?php
// Exercici 2 – Comprovació i comparacions amb variables
// Fitxer: comprovacions.php

// 1. Declaració de variables
$nom = "Anna";
$edat = 20;
$correu = "anna@example.com";
$telefon = "";      // cadena buida
$nota = 7;
$registre = null;

// 2. Comprovacions amb isset, empty, is_null
$checks = [];
$checks[] = 'isset($nom): ' . (isset($nom) ? 'true' : 'false');
$checks[] = 'empty($nom): ' . (empty($nom) ? 'true' : 'false');
$checks[] = 'is_null($nom): ' . (is_null($nom) ? 'true' : 'false');

$checks[] = 'isset($telefon): ' . (isset($telefon) ? 'true' : 'false');
$checks[] = 'empty($telefon): ' . (empty($telefon) ? 'true' : 'false');
$checks[] = 'is_null($telefon): ' . (is_null($telefon) ? 'true' : 'false');

$checks[] = 'isset($registre): ' . (isset($registre) ? 'true' : 'false');
$checks[] = 'empty($registre): ' . (empty($registre) ? 'true' : 'false');
$checks[] = 'is_null($registre): ' . (is_null($registre) ? 'true' : 'false');

// 3. Condicions amb if/elseif/else
$majoria = '';
if ($edat >= 18) {
    $majoria = 'L\'usuari és major d\'edat.';
} else {
    $majoria = 'L\'usuari és menor d\'edat.';
}

$avaluacio = '';
if ($nota < 5) {
    $avaluacio = 'Suspès';
} elseif ($nota >= 5 && $nota < 7) {
    $avaluacio = 'Aprovat';
} elseif ($nota >= 7 && $nota < 9) {
    $avaluacio = 'Notable';
} else {
    $avaluacio = 'Excel·lent';
}

// 4. Operadors lògics i filter_var
$alerts = [];
if (empty($telefon) && filter_var($correu, FILTER_VALIDATE_EMAIL)) {
    $alerts[] = 'Atenció: el telèfon està buit però el correu sembla vàlid.';
}
if (is_null($registre) || empty($registre)) {
    $alerts[] = 'Atenció: el registre és null o falsy.';
}

// Bonus: Tot en una llista HTML
?>
<!DOCTYPE html>
<html lang="ca">
<head>
  <meta charset="utf-8" />
  <title>Exercici 2 - Comprovacions</title>
</head>
<body>
  <h1>Exercici 2: Comprovacions i comparacions</h1>

  <h2>Comprovacions (isset, empty, is_null)</h2>
  <ul>
    <?php foreach ($checks as $c): ?>
      <li><?php echo htmlspecialchars($c, ENT_QUOTES, 'UTF-8'); ?></li>
    <?php endforeach; ?>
  </ul>

  <h2>Major d'edat?</h2>
  <p><?php echo $majoria; ?></p>

  <h2>Avaluació per nota (<?php echo $nota; ?>)</h2>
  <p><?php echo $avaluacio; ?></p>

  <h2>Alerts i validacions</h2>
  <ul>
    <li>Correu vàlid: <?php echo filter_var($correu, FILTER_VALIDATE_EMAIL) ? 'sí' : 'no'; ?></li>
    <?php if (!empty($alerts)): ?>
      <?php foreach ($alerts as $a): ?>
        <li><?php echo htmlspecialchars($a, ENT_QUOTES, 'UTF-8'); ?></li>
      <?php endforeach; ?>
    <?php else: ?>
      <li>No hi ha alertes.</li>
    <?php endif; ?>
  </ul>

</body>
</html>
