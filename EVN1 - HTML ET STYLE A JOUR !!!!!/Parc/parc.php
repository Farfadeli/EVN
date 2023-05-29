<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parc | intermarché</title>
</head>
<style type="text/css">
    *{margin: 0;}
html{height: 100%;}
body{height: 100%;}
iframe{width: 100%; height: 120px;margin-top: 2%;}

/* parc */

.parc
{
    width: 100%;
    height: 85%;
    display: flex;
    justify-content: center;
    align-items: center;
}
.containers
{
    width: 75%;
    border: black 2px solid;
    background-color: white;
    border-radius: 1em 1em 1em 1em;
    z-index: 1;
    max-height: 600px;
    


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
    bottom: 1.45em;
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
    width: 34%;
    height: 2px;
    background-color: black;
}
.bar:first-of-type
{
    margin-left: 0.5%;
}
.bar:last-of-type
{
    margin-right: 0.5%;
}
.tete .btn
{
    background-color: white;
    width: 35px;
    height: 32px;
    border-radius: 0.9em;
    cursor: pointer;
    margin-right: 5px;
    border: black 2px solid;
    z-index: 4;
    display: flex;
    text-decoration: none;
    align-items: center;
    justify-content: center;
    color: black;


}
nav
{
    display: flex;
    gap: 0.5%;
    justify-content: center;
    border-top: 1.5px solid ;
    padding-top: 1%;
    border-bottom: 1.5px solid;
    padding-bottom: 1%;
}
nav p
{
    width: 10%;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: x-large;
    border: black 1px solid;
}
.info
{
    max-height: 460px; 
    overflow-y: scroll;
    overflow-x: hidden;
}
.info div
{
    display: flex;
    padding-top: 0.5em;
    border-bottom: 1px solid;
    padding-bottom: 0.5%;
    gap: 0.5%;
    justify-content: center;
    margin-right: -20px;

}
.info div p
{
    width: 10%;
    display: flex;
    justify-content: center;
    font-size: 1.25em;

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

input[type=search]{

    border: 2px solid black;
    border-radius: 0.7em;
    height: 27px;
    width: 200px;
    margin-right: 5px;
    margin-left: 1px;


}
</style>
<body>

    <iframe src="../header.html" frameborder="0"></iframe>

    <section class="parc">
        <div class="containers">
            <div class="tete">
                <a class="btn-back" href="../Accueil/Acceuil.php">Retour</a>
                <div class="bar"></div>
                <h2>Parc</h2>
                <div class="bar"></div>
                <a class="btn" href="../Ajouter/Ajouter_Parc.php">+</a>
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
                <div>
                    <p>86D12</p>
                    <p>Prelude</p>
                    <p>2.0</p>
                    <p>Honda</p>
                    <p>130K</p>
                    <p>Essence</p>
                    <p>DHV 123K PO3</p>
                    <p>294h0D95</p>
                    <p>CM</p>
                </div>
                <div>
                    <p>86D12</p>
                    <p>Civic</p>
                    <p>EJ4</p>
                    <p>Honda</p>
                    <p>56K</p>
                    <p>Essence</p>
                    <p>JFA 852H SIV</p>
                    <p>640G3SD4</p>
                    <p>CM</p>
                </div>
                <div>
                    <p>86D12</p>
                    <p>Prelude</p>
                    <p>2.0</p>
                    <p>Honda</p>
                    <p>130K</p>
                    <p>Essence</p>
                    <p>DHV 123K PO3</p>
                    <p>294h0D95</p>
                    <p>CM</p>
                </div>
                <div>
                    <p>86D12</p>
                    <p>Civic</p>
                    <p>EJ4</p>
                    <p>Honda</p>
                    <p>56K</p>
                    <p>Essence</p>
                    <p>JFA 852H SIV</p>
                    <p>640G3SD4</p>
                    <p>CM</p>
                </div>
                <div>
                    <p>86D12</p>
                    <p>Prelude</p>
                    <p>2.0</p>
                    <p>Honda</p>
                    <p>130K</p>
                    <p>Essence</p>
                    <p>DHV 123K PO3</p>
                    <p>294h0D95</p>
                    <p>CM</p>
                </div>
            <div>
                <p>86D12</p>
                <p>Prelude</p>
                <p>2.0</p>
                <p>Honda</p>
                <p>130K</p>
                <p>Essence</p>
                <p>DHV 123K PO3</p>
                <p>294h0D95</p>
                <p>CM</p>
            </div>
            <div>
                <p>86D12</p>
                <p>Prelude</p>
                <p>2.0</p>
                <p>Honda</p>
                <p>130K</p>
                <p>Essence</p>
                <p>DHV 123K PO3</p>
                <p>294h0D95</p>
                <p>CM</p>
            </div>
            <div>
                <p>86D12</p>
                <p>Prelude</p>
                <p>2.0</p>
                <p>Honda</p>
                <p>130K</p>
                <p>Essence</p>
                <p>DHV 123K PO3</p>
                <p>294h0D95</p>
                <p>CM</p>
            </div>
            <div>
                <p>86D12</p>
                <p>Prelude</p>
                <p>2.0</p>
                <p>Honda</p>
                <p>130K</p>
                <p>Essence</p>
                <p>DHV 123K PO3</p>
                <p>294h0D95</p>
                <p>CM</p>
            </div>
            <div>
                <p>86D12</p>
                <p>Prelude</p>
                <p>2.0</p>
                <p>Honda</p>
                <p>130K</p>
                <p>Essence</p>
                <p>DHV 123K PO3</p>
                <p>294h0D95</p>
                <p>CM</p>
            </div>
            <div>
                <p>86D12</p>
                <p>Prelude</p>
                <p>2.0</p>
                <p>Honda</p>
                <p>130K</p>
                <p>Essence</p>
                <p>DHV 123K PO3</p>
                <p>294h0D95</p>
                <p>CM</p>
            </div>
            <div>
                <p>86D12</p>
                <p>Prelude</p>
                <p>2.0</p>
                <p>Honda</p>
                <p>130K</p>
                <p>Essence</p>
                <p>DHV 123K PO3</p>
                <p>294h0D95</p>
                <p>CM</p>
            </div>
            <div>
                <p>86D12</p>
                <p>Prelude</p>
                <p>2.0</p>
                <p>Honda</p>
                <p>130K</p>
                <p>Essence</p>
                <p>DHV 123K PO3</p>
                <p>294h0D95</p>
                <p>CM</p>
            </div>
            <div>
                <p>86D12</p>
                <p>Prelude</p>
                <p>2.0</p>
                <p>Honda</p>
                <p>130K</p>
                <p>Essence</p>
                <p>DHV 123K PO3</p>
                <p>294h0D95</p>
                <p>CM</p>
            </div>
            <div>
                <p>86D12</p>
                <p>Prelude</p>
                <p>2.0</p>
                <p>Honda</p>
                <p>130K</p>
                <p>Essence</p>
                <p>DHV 123K PO3</p>
                <p>294h0D95</p>
                <p>CM</p>
            </div>
            <div>
                <p>86D12</p>
                <p>Prelude</p>
                <p>2.0</p>
                <p>Honda</p>
                <p>130K</p>
                <p>Essence</p>
                <p>DHV 123K PO3</p>
                <p>294h0D95</p>
                <p>CM</p>
            </div>
            
        </div>
        
    </section>

    
</body>
</html>