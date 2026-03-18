<?php
$i = 1;
$res = "";
        while ($i <= 20) {
            if ($i % 3 == 0) {
                $res .= "<strong>{$i} </strong>";
            } else {
                $res .= "$i ";
            }
            $i++; 
        }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>18 boucle while</title>
</head>
<body>
    <h1>Exercice 18 boucle while</h1>

    <h2>18-boucle-while.php</h2>
    <h3>Créez 18-boucle-while.php : utilisez une boucle while pour afficher les nombres de 1 à 20, en mettant en gras les nombres divisibles par 3. </h3>
    <p>Voici la suite de nombre <?=$res?></p>
</body>
</html>