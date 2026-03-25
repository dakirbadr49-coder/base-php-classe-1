<?php
$messageResultat = "";
$nom = "";
$email = "";
$message = "";
if (isset($_POST["nom"],$_POST["email"],$_POST["message"])){
    $nom = htmlspecialchars($_POST["nom"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    if (empty($nom) || empty($email) || empty($message)) {
        $messageResultat = "Erreur : tous les champs doivent être remplis.";
    } else {
        $messageResultat = "Merci $nom, votre message a bien été reçu.";
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>24-formulaire.php</title>
</head>
<body>
    <h1>Exercice 24</h1>
    <form action="24-formulaire.php" method="POST">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom"><br><br>

        <label for="email">Email :</label>
        <input type="email" id="email" name="email"><br><br>

        <label for="message">Message :</label><br>
        <textarea id="message" name="message"></textarea><br><br>

        <button type="submit">Envoyer</button>
    </form>
    <p><?= $messageResultat ?></p>
    <p>Voici votre nom : <?= $nom ?></p>
    <p>Votre émail : <?= $email ?></p>
    <p>Votre message :<?= $message ?></p>
</body>
</html>