<?php
$chiffre=[""];
if(isset($_POST["chiffreAEvaluer"])){
    $chiffre = $_POST["chiffreAEvaluer"];
}
$numerique = intval($chiffre);
function estPair($nombre) {
    return $nombre % 2 === 0;
}
$res = "";
if (estPair($numerique)){
    $res.="pair";
} else {
    $res.="impair";
}   
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>20-ma-fonction.php</title>
</head>
<body>
    <h1>Exo 20 ma fonction</h1>
    <h2>20-ma-fonction.php</h2>
    <h3>Créez 20-ma-fonction.php : créez une fonction estPair($n) qui retourne true si le nombre est pair, false sinon. Testez-la avec plusieurs nombres.</h3>
    <p>Voici quelque exemples : </p>
    <?php
    if (estPair(0)) {
    echo "0 est pair";  
    }
    echo "<br>";
    echo "<br>";
    if (!estPair(1)) {
    echo "1 est impair"; 
    }
    ?>
    <p>Et ici vous pouvez l'essayer par vous même </p>
    <form action="20-ma-fonction.php" method="POST">
        <label for="chiffreE">Entrez un chiffre</label>
        <input type="number" name="chiffreAEvaluer" id="chiffreE">
        <input type="submit">
    </form>
    <?="<br>"?>
    <?="Le nombre {$numerique} est $res"?>
</body>
</html>