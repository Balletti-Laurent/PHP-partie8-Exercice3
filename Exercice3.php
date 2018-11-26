<?php
$login = 'login';
$password = 'password';
$endCookie = time() + 60 * 60 * 24;
setcookie('login', 'login', $endCookie);
setcookie('password', 'password', $endCookie);

?>



<!DOCTYPE html>
<html>
    <head lang="fr">
        <meta charset="utf-8">
        <title>Exercice 3</title>
    </head>
    <body>
        <form method="POST" action="Exercice3.php">
            <div><label for="login"> Login :</label><input type="text" name="login" /></div>
            <div><label for="password">Password :</label><input type="password" name="password" /></div>
            <div><input type="submit" value="valider"/></div>
        </form>
    </body>
</html>