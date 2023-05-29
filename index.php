<?php
    session_start();

?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./style/index.css">
        <title>Document</title>
    </head>
    <body>
        
        <iframe src="./header.html" frameborder="0"></iframe>
        <form action="./php/login.php" method="post">

            <?php
                if(isset($_SESSION['logError'])){
                    echo "<p style='color:red'>Mauvais Login/mot de passe</p>";
                }
                session_destroy();
                $_SESSION = [];
            ?>

            <label for="login">Login: </label><input type="text" name="login" class="login">
            <label for="password">Password: </label><input type="password" name="password" class="password">
            <input type="submit" value="Connexion">
        </form> 
    </body>
</html>