<?php
$isEasy = true;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Exercice 2 Partie 2</title>
</head>
<body>
    <h1>Exercice 2 Partie 2</h1>

    <?php
    if($isEasy): ?>
    <p><?= 'C\'est Facile !!'; ?></p>
    <?php else: ?>
    <p><?= 'C\'est difficile !!!'; ?></p>
    <?php endif ?>
</body>
</html>