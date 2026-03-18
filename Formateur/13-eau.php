<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Etat de l'eau suivant la température</title>
</head>
<body>
    <h1>Etat de l'eau suivant la température</h1>
    <p>Créez 13-eau.php : générez une température aléatoire entre -100 et 200° et affichez l'état de l'eau (solide ≤ 0, liquide entre 1 et 99, gazeux ≥ 100).</p>
    <?php
    // on mets dans température un int entre -100 et 200
    // depuis PHP 7.1 rand est l'alias de mt_rand
    $temperature = rand(-100,200); 

    // création d'une chaîne de caractère commune aux 3 états
    $string = "L'eau à $temperature"."° est ";

    # conditions if / elseif / else avec {}

    // si la température est plus petit ou égale à 0
    if($temperature <= 0){

        // concaténation de $string avec le .=
        $string .= "solide"; // l'eau est solide

    // sinon si la température est inférieure à 100   
    }elseif($temperature < 100){

        // concaténation de $string avec le .=
        $string .= "liquide"; // l'eau est liquide

    // sinon reste de 100 à 200   
    }else{

        // concaténation de $string avec le .=
        $string .= "gazeuse"; // l'eau est gazeuse

    }


    ?>
    <h4><?=$string?></h4>
    <pre><code>
    // on mets dans température un int entre -100 et 200
    // depuis PHP 7.1 rand est l'alias de mt_rand
    $temperature = rand(-100,200); 

    // création d'une chaîne de caractère commune aux 3 états
    $string = "L'eau à $temperature"."° est ";

    # conditions if / elseif / else avec {}

    // si la température est plus petit ou égale à 0
    if($temperature <= 0){

        // concaténation de $string avec le .=
        $string .= "solide"; // l'eau est solide

    // sinon si la température est inférieure à 100   
    }elseif($temperature < 100){

        // concaténation de $string avec le .=
        $string .= "liquide"; // l'eau est liquide

    // sinon reste de 100 à 200   
    }else{

        // concaténation de $string avec le .=
        $string .= "gazeuse"; // l'eau est gazeuse

    }
</code></pre>
<h4><?=$string?></h4>
</body>
</html>