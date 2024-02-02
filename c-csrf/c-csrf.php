<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Attaque CSRF</h1>

    <h3>Livre d'or</h3>

<?php

$pdo = new PDO("mysql:host=localhost;dbname=securite", 'root', '');
$selectall = $pdo->query("SELECT * FROM livredor");
$result = $selectall->fetchAll();
foreach ($result as $ligne) {
    echo $ligne['mot'] . ' <a href="?supp.php?id=' .$ligne['id']. '">Supprimer le mot</a><br>';
}

?>

<h3>Exemple d'attaque CSRF</h3>
<p> Jetez un oeil au lien permettant la suppression d'une entrée du livre d'or ;
    <ul>
        <li>celui-ci envoie vers un script qui supprime le mot ayant pour id le numéro passé en GET</li>
        <li>Dès lors, si j'envoie un lien à cet admin qui l'envoie vers ?supp.php?id=1, le 1er commentaire sera supprimé..</li><br>
        <li>Comment s'en prémunir ? Attribuer à chaque utilisateur / admin un jeton spécifique.</li>
    </ul>     
</p>

</body>
</html>