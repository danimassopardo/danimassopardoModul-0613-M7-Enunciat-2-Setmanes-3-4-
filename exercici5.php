<?php
// Exercici 5 - Miniaplicació PHP + HTML

function esMajorEdat(int $edat): bool {
    return $edat >= 18;
}

function mitjana(array $notes): float {
    if (count($notes) === 0) return 0.0;
    return array_sum($notes) / count($notes);
}

// Ensure variables are strings for safe use with htmlspecialchars in the form
$errors = [];
$nom = '';
$edat = '';
$numero = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Neteja i validació bàsica
  $nom = isset($_POST['nom']) ? trim((string)$_POST['nom']) : '';
  $edat_input = isset($_POST['edat']) ? $_POST['edat'] : '';
  $numero_input = isset($_POST['numero']) ? $_POST['numero'] : '';

  // Keep values as strings for form re-population, but convert to int for validation
  $edat = ($edat_input === '') ? '' : (int)$edat_input;
  $numero = ($numero_input === '') ? '' : (int)$numero_input;

  if ($nom === '') {
    $errors[] = 'El nom no pot estar buit.';
  }
  if ($edat === '') {
    $errors[] = 'L\'edat no pot estar buida i ha de ser un número.';
  } elseif (!is_int($edat) || $edat <= 0) {
    $errors[] = 'L\'edat ha de ser un número positiu.';
  }
  if ($numero === '') {
    $errors[] = 'El número no pot estar buit.';
  } else if (!is_int($numero) || $numero < 1 || $numero > 10) {
    $errors[] = 'El número ha d\'estar entre 1 i 10.';
  }
  // Convert back to string form values for safe output in the form
  $edat = ($edat === '') ? '' : (int)$edat;
  $numero = ($numero === '') ? '' : (int)$numero;
}

// Notes fixes per l'exercici
$notes = [6, 7.5, 8];
$mitjanaNotes = mitjana($notes);
?>

<!DOCTYPE html>
<html lang="ca">
<head>
  <meta charset="utf-8" />
  <title>Exercici 5 - Miniaplicació</title>
  <style>
    body { font-family: Arial, sans-serif; }
    .error { color: #b00020; }
    .result { background: #f6f6f6; padding: 10px; border-radius: 4px; }
    table { border-collapse: collapse; }
    td, th { padding: 4px 8px; }
  </style>
</head>
<body>
  <h1>Exercici 5: Miniaplicació</h1>

  <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
    <label>Nom: <input type="text" name="nom" value="<?php echo htmlspecialchars($nom); ?>"></label><br><br>
    <label>Edat: <input type="number" name="edat" value="<?php echo htmlspecialchars($edat); ?>"></label><br><br>
    <label>Número (1-10): <input type="number" name="numero" value="<?php echo htmlspecialchars($numero); ?>" min="1" max="10"></label><br><br>
    <button type="submit">Envia</button>
  </form>

  <?php if (!empty($errors)): ?>
    <div class="error">
      <ul>
        <?php foreach ($errors as $e): ?>
          <li><?php echo htmlspecialchars($e); ?></li>
        <?php endforeach; ?>
      </ul>
    </div>
  <?php endif; ?>

  <?php if ($_SERVER['REQUEST_METHOD'] === 'POST' && empty($errors)): ?>
    <div class="result">
      <p>Hola <?php echo htmlspecialchars($nom); ?>, tens <?php echo $edat; ?> anys.</p>
      <p><?php echo esMajorEdat($edat) ? 'Ets major d\'edat.' : 'Ets menor d\'edat.'; ?></p>

      <h3>Taula del <?php echo $numero; ?>:</h3>
      <table>
        <?php for ($i = 1; $i <= 10; $i++): ?>
          <tr>
            <td><?php echo $numero; ?> x <?php echo $i; ?></td>
            <td>=</td>
            <td><?php echo $numero * $i; ?></td>
          </tr>
        <?php endfor; ?>
      </table>

      <h3>Compte enrere des de <?php echo $numero; ?>:</h3>
      <?php
        $c = $numero;
        echo '<p>';
        while ($c >= 1) {
            echo $c . ' ';
            $c--;
        }
        echo '</p>';
      ?>

      <h3>Notes i mitjana</h3>
      <p>Les notes són: <?php echo implode(', ', $notes); ?></p>
      <p>La mitjana de les notes és: <?php echo number_format($mitjanaNotes, 2); ?></p>
    </div>
  <?php endif; ?>

</body>
</html>
