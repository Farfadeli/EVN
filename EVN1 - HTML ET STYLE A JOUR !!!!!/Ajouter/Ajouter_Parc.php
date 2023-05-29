<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ajouter | Vehicule</title>
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
    width: 600px;
    border: black 2px solid;
    background-color: white;
    border-radius: 1em 1em 1em 1em;
    z-index: 1;
    height: 520px;
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
    width: 60px;
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

.btn-back {
    display: inline-block;
    position: relative;
    z-index: 1;
    padding: 0 10px 0 30px;

    
    line-height: 44px;
    color: black;
    text-decoration: none;
    font-family: sans-serif;
    font-size: 12px;
    margin-right: 7px;
}
.btn-back:before {
    content: '';
    
    position: absolute;
    box-sizing: border-box;
    left: 20px;
    right: 0;
    height: 34px;
    margin-top: 5px;
    z-index: -1;
    
    border: 2px solid black;
    border-left-width: 0;
    border-radius: 5px;
  

}

.btn-back:after {
    content: '';
    
    position: absolute;
    box-sizing: border-box;
    left: 11px;
    height: 27px;
    width: 26px;
    top: 8px;
    z-index: -2;
    
    border: 2px solid black;
    border-top: 0 transparent;
    border-right: 0 transparent;
    border-radius: 7px 5px 5px 7px;

    
    -webkit-transform: rotate(45deg);
       -moz-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
         -o-transform: rotate(45deg);
            transform: rotate(45deg);
}

</style>
<body>
<iframe src="../header.html" frameborder="0"></iframe>

    <section class="ajouter">
        <div class="containers">
            <div class="tete">
                <a class="btn-back" href="../Parc/parc.php">Retour</a>
                <div class="bar"></div>
                <h2>Ajouter un véhicule</h2>
            <div class="bar"></div>
                
            </div>
            
            <center><form>
            	
            	<input type="text" name="code_vehicule" placeholder="Code Véhicule"><br>


            	<input type="text" name="modele" placeholder="Modèle"><br>


            	<input type="text" name="libelle" placeholder="Libellé"><br>
            	



                <select name="marque" placeholder="Marque">
                <option disabled selected>Marque</option>
                <option value="Renault">Renault</option>
                <option value="Peugeot">Peugeot</option>
                <option value="Honda">Honda</option>
                <option value="Nissan">Nissan</option>
                </select><br>
            	

            	<input type="text" name="km" placeholder="Km"><br>
            	

            	
            	<div class="categorie">
                <fieldset>
                <label for="categorie">Camionette</label>
                <input type="radio" name="categorie" value="Camionette">
                </fieldset>
                <fieldset>
                <label for="categorie">Camion (<3.5t)</label>
                <input type="radio" name="categorie" value="Camion (<3.5t)">
                </fieldset>
                <fieldset>
                <label for="categorie">Camion (>3.5t)</label>
                <input type="radio" name="categorie" value="Camion (>3.5t)">
                </fieldset>
                </div>




            	<input type="text" name="immatriculation" placeholder="Numéro d'immatriculation"><br>
            	

            	<input type="text" name="num_serie" placeholder="Numéro de série"><br>
            	


                <div class="etat">
                    <fieldset>
                <label for="etat">Neuf</label>
                <input type="radio" name="etat" value="Neuf">
                </fieldset>
                <fieldset>
                <label for="etat">Comme Neuf</label>
                <input type="radio" name="etat" value="Comme Neuf">
                </fieldset>
                <fieldset>
                <label for="etat">Usé</label>
                <input type="radio" name="etat" value="Usé">
                </fieldset>
                <fieldset>
                <label for="etat">Endommagé</label>
                <input type="radio" name="etat" value="Endommagé">
                </fieldset>
                </div>
            </form>


            <input type="submit" value="Enregistrer">



        </center>



            
        </div>
        
    </section>





</body>
</html>