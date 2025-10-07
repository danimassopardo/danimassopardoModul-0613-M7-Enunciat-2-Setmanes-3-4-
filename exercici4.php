<?php
// Exercici 4 – Funcions amb Arrays en PHP

$productes = [
    "Llibre" => 12.5,
    "Motxilla" => 35,
    "Bolígraf" => 1.2,
    "Carpeta" => 4.8
];

$quantitats = [
    "Llibre" => 2,
    "Motxilla" => 1,
    "Bolígraf" => 5,
    "Carpeta" => 3
];

// 3. Funció que calcula subtotals i retorna un array amb detall
function calculaSubtotals(array $productes, array $quantitats): array {
    $detall = [];
    foreach ($productes as $nom => $preu) {
        $q = isset($quantitats[$nom]) ? $quantitats[$nom] : 0;
        $subtotal = $preu * $q;
        $detall[$nom] = [
            'preu' => $preu,
            'quantitat' => $q,
            'subtotal' => $subtotal
        ];
    }
    return $detall;
}

// 4. Funció que calcula el total final
function calculaTotal(array $detall): float {
    $total = 0.0;
    foreach ($detall as $item) {
        $total += $item['subtotal'];
    }
    return $total;
}

$detall = calculaSubtotals($productes, $quantitats);
$total = calculaTotal($detall);
?>

<!DOCTYPE html>
<html lang="ca">
<head>
  <meta charset="utf-8" />
  <title>Exercici 4 - Compres</title>
  <style>
    table { border-collapse: collapse; width: 70%; }
    th, td { border: 1px solid #ccc; padding: 8px; text-align: left; }
    th { background: #f4f4f4; }
    tfoot td { font-weight: bold; }
  </style>
</head>
<body>
  <h1>Exercici 4: Compres botiga online</h1>

  <table>
    <thead>
      <tr>
        <th>Producte</th>
        <th>Preu unitari</th>
        <th>Quantitat</th>
        <th>Subtotal</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($detall as $nom => $item): ?>
        <tr>
          <td><?php echo htmlspecialchars($nom, ENT_QUOTES, 'UTF-8'); ?></td>
          <td><?php echo number_format($item['preu'], 2); ?> €</td>
          <td><?php echo $item['quantitat']; ?></td>
          <td><?php echo number_format($item['subtotal'], 2); ?> €</td>
        </tr>
      <?php endforeach; ?>
    </tbody>
    <tfoot>
      <tr>
        <td colspan="3">Total compra</td>
        <td><?php echo number_format($total, 2); ?> €</td>
      </tr>
    </tfoot>
  </table>

</body>
</html>
