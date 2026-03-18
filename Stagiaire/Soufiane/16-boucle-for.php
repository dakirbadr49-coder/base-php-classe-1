<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>les 4 exos</title>
</head>
<body>
    <h1>exo 1</h1>
    <?php
    $nombre = 1;
    for($nombre ; $nombre <= 50 ; $nombre++){
        echo "$nombre";}
    ?>
    <h1>Exo 2</h1>
    <?php
for ($i = 1; $i <= 50; $i++) {
    // if ($i == 52) break;       // Arrête à 15
    if ($i % 2 != 0) continue; // Saute les impairs
    echo "$i ";
} ?>
</body>
</html>