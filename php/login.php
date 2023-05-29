<?php

    session_start();
    
    $login = $_POST['login'];
    $pass = $_POST['password'];
    if(empty($login)){
        $_SESSION['logError'] = true;
        header("Location: ../index.php");
    }
    if(empty($pass)){
        $_SESSION['logError'] = true;
        header("Location: ../index.php");
    }

    try{
        $bdd = new PDO("mysql:host=localhost;dbname=intermarche","root","");
    }catch(PDOException $e){
        echo $e->getMessage();
    }

    $req = "SELECT COUNT(idUser) FROM utilisateur WHERE loginUSer = '$login' and mdpUser = '$pass'";
    $res = $bdd->query($req);

    foreach($res as $row){if($row[0]){
            $_SESSION['name'] = $login;
            header("Location: ../Accueil/Acceuil.php");
        }else{
            $_SESSION['logError'] = true;
            header("Location: ../index.php");
        }
    }

?>