<?php
// Exercici 1 – Variables i Conversió de Tipus
// Aquest fitxer defineix variables, fa conversions i mostra resultats dins de paràgrafs HTML.

// 1. Declaració de variables
$nom = "Anna"; // string
$edat_str = "20"; // string representant l'edat
$nota_float = 8.5; // float
$aprovat = true; // boolean

// 2. Conversió explícita: string -> int
$edat = (int)$edat_str;

// 3. Càlcul de la suma (int + float)
$suma = $edat + $nota_float;

// 4. Mostrar totes les variables amb missatges descriptius en paràgrafs HTML
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="utf-8" />
    <title>Exercici 1 - Variables i Conversió</title>
</head>
<body>
    <h1>Exercici 1: Variables i Conversió de Tipus</h1>
    <p>Nom: <?php echo htmlspecialchars($nom, ENT_QUOTES, 'UTF-8'); ?></p>
    <p>Edat (string original): <?php echo htmlspecialchars($edat_str, ENT_QUOTES, 'UTF-8'); ?></p>
    <p>Edat (int convertida): <?php echo $edat; ?></p>
    <p>Nota (float): <?php echo $nota_float; ?></p>
    <p>Suma edat + nota: <?php echo $suma; ?></p>

    <?php if ($aprovat): ?>
        <p>L'alumne ha aprovat.</p>
    <?php else: ?>
        <p>L'alumne ha suspès.</p>
    <?php endif; ?>

    <!-- 6. Conversions addicionals amb funcions -->
    <p>Edat convertida a string (strval): <?php echo strval($edat); ?></p>
    <p>Nota convertida a integer (int cast): <?php echo (int)$nota_float; ?></p>

    <!-- Comentari: Per executar: php -S localhost:8000 i obrir http://localhost:8000/exercici1.php -->
</body>
</html>
