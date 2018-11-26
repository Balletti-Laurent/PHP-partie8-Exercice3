<?php
if (isset($_POST['login']) && isset($_POST['password'])) {
    setcookie('login', htmlspecialchars($_POST['login']));
    setcookie('password', htmlspecialchars($_POST['password']), time() + 60 * 60 * 24);
}

?>
<!DOCTYPE html>
<html>
    <head lang="fr">
        <meta charset="utf-8">
        <title>Exercice 3</title>
    </head>
    <body>
        <form method="POST" action="">
            <div><label for="login"> Login :</label><input type="text" name="login" /></div>
            <div><label for="password">Password :</label><input type="password" name="password" /></div>
            <div><input type="submit" value="valider"/></div>
        </form>
    </body>
</html>