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
    $isEasy = true;
    if($isEasy)
    {
        echo "C'est Facile !!";
    }
    else 
    {
        echo "C'est difficile !!!";
    }
    ?>

    <?php
    $isEasy = (boolean)0;
    if($isEasy)
    {
        echo "C'est Facile !!";
    }
    else 
    {
        echo "C'est difficile !!!";
    }
    
    ?>

</body>
</html>