<?php

    session_start();

    $code = $_POST["codeV"];
    $modele = $_POST["modele"];
    $libelle = $_POST["Libelle"];
    $marque = $_POST["marque"];
    $km = $_POST["km"];
    $categ = $_POST["categ"];
    $imma = $_POST["imma"];
    $num = $_POST["num"];
    $etat = $_POST["etat"];

    if(empty($etat))
    {
        $etat = "bon etat";
    }

    try{
        $bdd = new PDO("mysql:host=localhost;dbname=intermarche","root","");
    }catch(PDOException $e){
        echo $e->getMessage();
    }

    $req = "INSERT INTO vehicule values($code,'$modele','$libelle','$marque','$categ','$imma','$num','$etat',$km)";

    $bdd->query($req);
    header("Location: ../Parc/parc.php");


?>