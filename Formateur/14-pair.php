<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pair ou impaire</title>
</head>
<body>
    <h1>Pair ou impaire</h1>
    <p>Créez 14-pair.php : générez un nombre aléatoire entre 1 et 20 avec mt_rand(). S'il est pair, affichez "Le nombre X est pair", sinon "Le nombre X est impair". Indice : utilisez l'opérateur modulo %.</p>
    <h3>Première méthode</h3>
    <?php
    // nombre au hasard entre 1 et 20 
    // (on pourrait utiliser rand() - idem depuis PHP 7.1 
    // ou random_int - uniforme et cryptographiquement sécurisée)
    // mais la demande était claire : mt_rand()
    $randNumber = mt_rand(1,20);

    // première méthode
    // si 0 (pas de reste de division) 0 == false
    // if non exécuté si 0, if exécuté si autre numérique 1 == true
    if($randNumber%2){ 
        echo "$randNumber est impair";
    }else{
        echo "$randNumber est pair";
    }
    ?>
    
    <pre><code>
    // première méthode
    // si 0 (pas de reste de division) 0 == false
    // if non exécuté si 0, if exécuté si autre numérique 1 == true
    if($randNumber%2){ 
        echo "$randNumber est impair";
    }else{
        echo "$randNumber est pair";
    }</code></pre>
    <h3>Deuxième méthode</h3>
    <?php
    // nombre au hasard entre 1 et 20 
    // (on pourrait utiliser rand() - idem depuis PHP 7.1 
    // ou random_int - uniforme et cryptographiquement sécurisée)
    // mais la demande était claire : mt_rand()
    $randNumber = mt_rand(1,20);

    // deuxième méthode
    // le modulo nous donne 0 donc true
    if($randNumber%2===0){ 
        echo "$randNumber est pair";
    }else{
        echo "$randNumber est impair";
    }
    ?>
    
    <pre><code>
    // nombre au hasard entre 1 et 20 
    // (on pourrait utiliser rand() - idem depuis PHP 7.1 
    // ou random_int - uniforme et cryptographiquement sécurisée)
    // mais la demande était claire : mt_rand()
    $randNumber = mt_rand(1,20);

    // deuxième méthode
    // le modulo nous donne 0 donc true
    if($randNumber%2===0){ 
        echo "$randNumber est pair";
    }else{
        echo "$randNumber est impair";
    }</code></pre>
    <h3>Troisième méthode</h3>
    <?php
    // nombre au hasard entre 1 et 20 

    $randNumber = mt_rand(1,20);

    // Troisième méthode
    // le modulo nous donne 0 donc true
    // if sans {} avec : et endif
    if($randNumber%2===0): 
        echo "$randNumber est pair";
    else:
        echo "$randNumber est impair";
    endif;
    ?>
    
    <pre><code>
    // nombre au hasard entre 1 et 20 

    $randNumber = mt_rand(1,20);

    // Troisième méthode
    // le modulo nous donne 0 donc true
    // if sans {} avec : et endif
    if($randNumber%2===0): 
        echo "$randNumber est pair";
    else:
        echo "$randNumber est impair";
    endif;</code></pre>
</body>
</html>