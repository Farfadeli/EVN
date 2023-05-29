<?php

    session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/parc.css">
    <title>Parc | intermarché</title>

    <style>
        .none {
            display: none;
        }

        .flex {
            display: flex;
        }

        .ajout {
            width: 100%;
            height: 100%;
            background-color: rgb(0, 0, 0, 0.5);
            position: absolute;
            top: 0%;
            z-index: 1;
            justify-content: center;
            align-items: center;
        }
        form
        {
            width: 50%;
            display: grid;
            grid-template-columns: 45% 45%;
            background-color: white;
            padding: 10%;
        }
        form div
        {
            display: flex;
            flex-direction: column;
            margin-top: 5%;
        }
        form div:nth-child(2n)
        {
            margin-left: 10%;
        }
        input[type='submit']{
            width: 20%;
            height: 50%;
            margin-top: auto;
            margin-left: auto;
            margin-right: auto;
            background-color: rgb(207, 113, 113);
            color: white;
            border-radius: .5rem;
            cursor: pointer;
            border: none;
        }
    </style>

</head>

<body>

    <iframe src="../header.html" frameborder="0"></iframe>

    <section class="parc" style="z-index: 0;">
        <div class="containers">
            <div class="tete">
                <a href="../Accueil/Acceuil.php">Retour</a>
                <div class="bar"></div>
                <h2>Parc</h2>
                <div class="bar"></div>
                <button class="btn">+</button>
                <input type="search" name="searchbar" placeholder="Rechecher...">
            </div>
            <nav>
                <p>Code Véhicule</p>
                <p>Modèle</p>
                <p>Libellé</p>
                <p>Marque</p>
                <p>KM</p>
                <p>Catégorie</p>
                <p>Num Immat</p>
                <p>Num de série</p>
                <p>Etat</p>
            </nav>
            <div class="info">
                <?php

                $bdd = new PDO("mysql:host=localhost;dbname=intermarche","root","");

                $req = "SELECT * FROM vehicule";
                $res = $bdd->query($req);
                foreach($res as $rep){
                    $code = $rep[0];
                    $modele = $rep[1];
                    $libelle = $rep[2];
                    $marque = $rep[3];
                    $km = $rep[8];
                    $categ = $rep[4];
                    $immat = $rep[5];
                    $num = $rep[6];
                    $etat = $rep[7];
                    echo "<div>
                    <p>$code</p>
                    <p>$modele</p>
                    <p>$libelle</p>
                    <p>$marque</p>
                    <p>$km</p>
                    <p>$categ</p>
                    <p>$immat</p>
                    <p>$num</p>
                    <p>$etat</p>
                </div>";
                }

                

            ?>
            </div>
        </div>

    </section>


    <div class="ajout none">
        <h2 style="position: absolute; left:42.5%; top:25%">Ajouter un véhicule</h2>
        <form action="../php/ajoutVehicule.php" method="post">
            <div>
                <label for="code">Code véhicule:</label>
                <input type="text" name="codeV">
            </div>
            <div>
                <label for="Modele">Modèle:</label>
                <input type="text" name="modele">
            </div>
            <div>
                <label for="libelle">Libellé:</label>
                <input type="text" name="Libelle">
            </div>
            <div>
                <label for="marque">Marque:</label>
                <input type="text" name="marque">
            </div>
            <div>
                <label for="km">Killométrage:</label>
                <input type="text" name="km">
            </div>
            <div>
                <label for="categ">Catégorie:</label>
                <input type="text" name="categ">
            </div>
            <div>
                <label for="imma">Immatriculation:</label>
                <input type="text" name="imma">
            </div>
            <div>
                <label for="num">Numéro de série:</label>
                <input type="text" name="num">
            </div>
            <div>
                <label for="etat">Etat:</label>
                <input type="text" name="etat">
            </div>
            <input type="submit" value="Ajouter">
            </form>
    </div>

<script type="text/javascript" src="./parc.js"></script>
</body>

</html>