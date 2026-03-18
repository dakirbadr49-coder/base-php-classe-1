<?php
// Les données (Viendrons en réalité de Model) Ran est l'alias de mt_rand
$deZeroJusqueDix = rand(0,10);

// Création d'une variable texte qui servira pour l'affichage du résultat dans la vue (View -> html)
$resultat = "Votre cote : {$deZeroJusqueDix} / 10";

// Création d'une autre variable
$commentaireProf = "{$deZeroJusqueDix} : ";

// On va contrôler  le resultat (Controller) pour l'envoyer à la vue (View -> html)

// Si le chiffre venant du modèle est inférieur ou égale à 3
if ($deZeroJusqueDix <= 3) {
    // On va ajouter à commentaireProf son commentaire
    $commentaireProf .= "Nul, étudie la prochaine fois";
// Sinon si le chiffre est inférieur ou égale à 5
}  elseif ($deZeroJusqueDix <= 5) {
    // On va ajouter à commentaireProf son commentaire
    $commentaireProf .= "Peut mieux faire";
// Sinon si le chiffre est inférieur ou égale à è
}  elseif ($deZeroJusqueDix <= 7) {
    // On va ajouter à commentaireProf son commentaire
    $commentaireProf .= "Bien";
// Sinon (implicitement 8,9 ou 10)
}  else {
    $commentaireProf .= "Très bien";
}


// Appel de la vue (View)
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>15 - Conditions - Correction</title>
</head>
<body>
    <h1>15 - Conditions</h1>
    <p>Créez 15-conditions.php : générez un chiffre entre 0 et 10, puis affichez : 0-3 → "X : Nul, étudie la prochaine fois", 4-5 → "X : Peut mieux faire", 6-7 → "X : Bien", 8-10 → "X : Très bien".</p>
    <h3><?= $resultat?></h3>
    <h4><?= $commentaireProf?></h4>
</body>
</html>