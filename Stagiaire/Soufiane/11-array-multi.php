<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>11-array-multi.php</title>
</head>
<body>
    <h1>11-array-multi.php</h1>
    <p>Créez 11-array-multi.php : créez un tableau multidimensionnel de 3 stagiaires avec nom, prénom et un sous-tableau de sites (perso + github). Affichez le github du troisième stagiaire.</p>
<?php
$stagiaires = [
    "WEBDEV01" => [
        "Nom" => "Dupont",
        "Prenom" => "Jean",
        "Sites" => [
            "SitePerso" => "https://example.com/jean/",
            "github" => "https://github.com/jean",
        ],
    ],
    "WEBDEV02" => [
        "Nom" => "Martin",
        "Prenom" => "Marie",
        "Sites" => [
            "SitePerso" => "https://example.com/marie/",
            "github" => "https://github.com/marie",
        ],
    ],
];

// Accéder au github de Marie
echo $stagiaires["WEBDEV02"]["Sites"]["github"];
// https://github.com/marie 
?>
</body>
</html>