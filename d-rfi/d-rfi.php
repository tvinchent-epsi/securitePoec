<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Faille RFI</h1>

    <?php

    $urlBDD = 'mysql.raq32.ovh.fr';
    $userBDD = 'admin';
    $pwdBDD = '!az12qsxe@kdn47';

    isset($_GET['color']) && include($_GET['color']);

    // include('d-rfi-attaque-rfi.php');

    ?>

    Choisir votre thème : <a href="?color=blue.php">bleu</a> - <a href="?color=green.php">vert</a>
    <br>
    Ajouter <strong>?color=d-rfi-attaque.php</strong> à l'URL pour voir un listing des variables de la page..
</body>
</html>
