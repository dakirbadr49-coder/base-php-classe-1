<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>12-GET.php</title>
</head>
<body>
    <h1>12-GET.php</h1>
    <p>Créez 12-GET.php : une page HTML avec 4 liens qui pointent vers des variables GET différentes (ex: ?section=accueil, ?section=contact, etc.). Affichez le contenu de $_GET avec var_dump().</p>
<a href="12-GET.php?section=accueil">Accueil</a>
<a href="12-GET.php?section=a-propos">A propos</a>
<a href="12-GET.php?section=services">Services</a>
<a href="12-GET.php?section=contact">Contact</a>
<?php
var_dump($_GET);
?>
</body>
</html>