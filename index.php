<?php

if(isset($_POST['signin'])){
    echo('hello world');
}

?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="exemple de faille SQLI">
        <title>Livecoding</title>
    </head>
    <body>
        <h1>Faille SQLI</h1>
            
        <form method="post" action="#">
            Login : <input type="text" name="login"><br>
            Password : <input type="password" name="login"><br>
            <input type="submit" name="signin">
        </form>
    </body>
</html>