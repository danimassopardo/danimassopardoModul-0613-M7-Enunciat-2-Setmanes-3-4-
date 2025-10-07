<?php
// Exercici 3 – Alumnes, notes i condicions

$noms = ["Anna", "Pau", "Júlia"];

$notes = [
    "Anna"  => ["nota1" => 8, "nota2" => 9],
    "Joan"  => ["nota1" => 6, "nota2" => 7],
    "Pau"   => ["nota1" => 4, "nota2" => 5],
    "Clara" => ["nota1" => 9, "nota2" => 10],
    "Júlia" => ["nota1" => 7, "nota2" => 8]
];

function classificaNota($mitjana) {
    if ($mitjana < 5) return 'Suspès';
    if ($mitjana >= 5 && $mitjana < 7) return 'Aprovat';
    if ($mitjana >= 7 && $mitjana < 9) return 'Notable';
    return 'Excel·lent';
}

?>
<!DOCTYPE html>
<html lang="ca">
<head>
  <meta charset="utf-8" />
  <title>Exercici 3 - Alumnes</title>
  <style>
    table { border-collapse: collapse; width: 80%; }
    th, td { border: 1px solid #ccc; padding: 8px; text-align: left; }
    th { background: #f4f4f4; }
  </style>
</head>
<body>
  <h1>Exercici 3: Alumnes, notes i condicions</h1>

  <table>
    <thead>
      <tr>
        <th>Nom</th>
        <th>Nota 1</th>
        <th>Nota 2</th>
        <th>Mitjana</th>
        <th>Resultat</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($noms as $nom): ?>
        <?php
          // Si no existeixen les notes per a aquest nom, omplim amb zeros o amb un text
          $n1 = isset($notes[$nom]['nota1']) ? $notes[$nom]['nota1'] : 0;
          $n2 = isset($notes[$nom]['nota2']) ? $notes[$nom]['nota2'] : 0;
          $mitjana = ($n1 + $n2) / 2;
          $resultat = classificaNota($mitjana);
        ?>
        <tr>
          <td><?php echo htmlspecialchars($nom, ENT_QUOTES, 'UTF-8'); ?></td>
          <td><?php echo $n1; ?></td>
          <td><?php echo $n2; ?></td>
          <td><?php echo number_format($mitjana, 2); ?></td>
          <td><?php echo $resultat; ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>

</body>
</html>
