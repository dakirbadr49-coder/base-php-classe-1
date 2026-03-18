<!DOCTYPE html>

<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>notes</title>
</head>
<body>
    <h1>NOTES</h1>
    <p>Créez 15-conditions.php : générez un chiffre entre 0 et 10, puis affichez : 0-3 → "X : Nul, étudie la prochaine fois", 4-5 → "X : Peut mieux faire", 6-7 → "X : Bien", 8-10 → "X : Très bien".</p>
    <?php
    $random = rand(0,10);
    if($random <= 3){
        echo "$random : Nul, étudie la prochaine fois";
    }
    elseif($random<=5){
        echo"$random : Peut mieux faire";
    }
    elseif("$random <= 7"){
        echo"$random : Bien";
    }
    else{
        echo"$random : Très bien";
    } ?><?php $random ?>
</body>
</html>