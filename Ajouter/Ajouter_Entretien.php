<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ajouter | Entretien</title>
</head>

<style type="text/css">
	
    *{margin: 0;}
html{height: 100%;}
body{height: 100%;}
iframe{width: 100%; height: 120px;margin-top: 2%;}



.ajouter  
{
    width: 100%;
    height: 85%;
    display: flex;
    justify-content: center;
    align-items: center;
}
.containers
{
    
    margin-top: -130px;
    width: 600px;
    border: black 2px solid;
    background-color: white;
    border-radius: 1em 1em 1em 1em;
    z-index: 1;
    height: 230px;
}
.containers .tete
{
    width: 95%;
    margin-left: auto;
    margin-right: auto;
    display: flex;
    align-items: center;
    background-color: white;
    position: relative;
    bottom: 24px;
    z-index: 2;
}
.tete h2
{
    margin-left: auto;
    margin-right: auto;
    font-size: 2.5em;

}
.bar
{
    width: 55px;
    height: 2px;
    background-color: black;


}
.bar:first-of-type
{
    margin-left: 0%;
}
.bar:last-of-type
{
    margin-right: 0%;
}
.tete .btn
{
    background-color: rgb(207, 192, 192);
    border: none;
    width: 2.5%;
    height: 35px;
    border-radius: 0em 1em 0em 1em;
    cursor: pointer;
    margin-right: 0.2%;
    border: black 1px solid;
    z-index: 4;
}
.tete a
{
    background-color: rgb(219, 210, 210);
    text-decoration: none;
    color: black;
    height: 35px;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 100px;
    border-radius: 50px 0% 0% 50px;
    border: 1.5px solid;

}



.logo
{
    height: 15%;
    display: flex;
    align-items: flex-end;
    justify-content: center;

}
section img
{
    width: 25%;
}

input[type=text]{

    border: 1,5px solid black;
    border-radius: 0.5em;
    height: 17px;
    width: 200px;
    margin: 10px;
}

input[type=date]{

    border: 1,5px solid black;
    border-radius: 0.5em;
    height: 17px;
    width: 200px;
    margin: 10px;
}

select{


width: 210px;
border: 2px solid black;
border-radius: 0.5em;
    margin: 10px;

}


fieldset{
    width: fit-content;
    border-color: black;
    border-width: 1,5px;
    border-radius: 0.5em;
    display: inline-flex;
    margin-right: 5px;
    margin-left: 5px;
    margin-top: 10px;
    margin-bottom: 10px;
    align-items: center;
    padding-bottom: 5px;


}


input[type=submit]{

    border: none;
    height: 25px;
    width: 90px;
    border-radius: 0.5em;
    background-color: black;
    color: white;
    margin-top: 10px;

}


input[type=submit]:active{

background-color: grey;


}

</style>
<body>
<iframe src="../header.html" frameborder="0"></iframe>

    <section class="ajouter">
        <div class="containers">
            <div class="tete">
                <a href="../Planning/planning.php">Retour</a>
                <div class="bar"></div>
                <h2>Ajouter un entretien</h2>
            <div class="bar"></div>
                
            </div>
            
            <center><form>
            	
            	<select name="entretien">
                <option disabled selected>Entretien</option>
                

                <optgroup label="Liquides">
                <option value="Vidange huile (essence)">Vidange huile (essence)</option>
                <option value="Vidange huile (diesel)">Vidange huile (diesel)</option>
                <option value="Liquide de frein">Liquide de frein</option>
                <option value="Liquide de refroidissement">Liquide de refroidissement</option>
                <option value="Liquide lave-glace">Liquide lave-glace</option>
                <option value="Circuit hydraulique de suspension">Circuit hydraulique de suspension</option>
                <option value="Boîte de vitesse">Boîte de vitesse</option>
                <option value="Pompe d’assistance de direction">Pompe d’assistance de direction</option>
                </optgroup>
                <optgroup label="Filtres">
                <option value="Filtre à huile (essence)">Filtre à huile (essence)</option>
                <option value="Filtre à huile (diesel)">Filtre à huile (diesel)</option>
                <option value="Filtre à air">Filtre à air</option>
                <option value="Filtre à essence">Filtre à essence</option>
                <option value="Filtre à gazole">Filtre à gazole</option>
                </optgroup>
                <optgroup label="Pieces de frein">
                <option value="Plaquette de frein AV/AR">Plaquette de frein AV/AR</option>
                <option value="Disque de frein">Disque de frein</option>
                <option value="Tambours de frein">Tambours de frein</option>
                </optgroup>
                <optgroup label="Pieces de roues">
                <option value="Pneus">Pneus</option>
                <option value="Roulements de roue arrière">Roulements de roue arrière</option>
                <option value="Rotules de direction et suspension">Rotules de direction et suspension</option>
                </optgroup>
                <optgroup label="Autres éléments">
                <option value="Essuie-glaces">Essuie-glaces</option>
                <option value="Pot d’échappement">Pot d’échappement</option>
                <option value="Courroie de distribution (essence)">Courroie de distribution (essence)</option>
                <option value="Courroie de distribution (diesel)">Courroie de distribution (diesel)</option>
                <option value="Courroie d’accessoires">Courroie d’accessoires</option>
                <option value="Cardans">Cardans</option>
                </optgroup>
                </select><br>


            	<input type="date" name="date" placeholder="Date"><br>


            	<input type="text" name="libelle" placeholder="N° immat véhicule"><br>
            	




            <input type="submit" value="Enregistrer">



        </center>



            
        </div>
        
    </section>





</body>
</html>