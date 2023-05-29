<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Accueil</title>
</head>

<style type="text/css">


	@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap');




	#logo {
		width: 25%;
		margin-top: 6%;
	}

	div.button{
		background-color: white;
		border: 2.5px black solid;
		width: 150px;
		height: 150px;
		border-radius: 25px;
		display: inline-block;
		margin-right: 4px;
		margin-left: 4px;
		margin-top: 100px;



	}

	div.button:hover{
		width: 170px;
		height: 170px;
	}


	div.buttondec:hover{
		padding: 7px;
		color: red;
		border-color: red;
		opacity: 0%;
	}

		div.buttondec2:hover{
		padding: 7px;
		color: red;
		border-color: red;
		opacity: 100%;
	}

	


		div.buttondec{
		background-color: white;
		border: 2.5px black solid;
		width: fit-content;
		height: fit-content;
		border-radius: 20px;
		padding: 6px;
		margin-top: 40px;
		overflow: hidden;
	}


			div.buttondec2{
		top: -81px;
		position: relative;
		z-index: 3;
		padding: 7px;
		background-color: white;
		color: red;
		border: 2.5px red solid;
		width: fit-content;
		height: fit-content;
		border-radius: 20px;
		padding: 6px;
		margin-top: 40px;
		overflow: hidden;
		opacity: 0%;
	}

	a:link{
		color: black;
		text-decoration: none;
	}
	a:visited{
		color: black;
		text-decoration: none;
	}
	a:hover{
		color: black;
		text-decoration: none;

	}
	a:active{
		color: black;
		text-decoration: none;
	}

p1{
	display: flex;
	justify-content: center;
	align-items: center;
	height: 100%;


	font-size: 20px;
	font-family: roboto;
}

img.icons{

	padding-right: 5px;
}




</style>
<body>

<center>
	<a href="#acceuil">
		<img src="../images\logo.png" id="logo">
	</a>
</center>


<center>
    <a href="../Parc/parc.php">
	<div class="button">
		<p1><img class="icons"src="../images\icons\van.png" width="25px">Parc</p1>
	</div>
</a>

    <a href="../Planning/planning.php">
	<div class="button">
		<p1><img class="icons"src="../images\icons\calendar.png" width="20px">Planning</p1>
	</div>
</a>

    <a href="../Historique/Historique.php">
	<div class="button">
		<p1><img class="icons"src="../images\icons\maintenance.png" width="20px">Historique</p1>
	</div>
</a>

<a href="#deconnexion">
	<div class="buttondec">
		<p1><img class="icons"src="../images\icons\logout.png" width="20px">Déconnexion</p1>
	</div>
</a>


<a href="#deconnexion">
	<div class="buttondec2">
		<p1><img class="icons"src="../images\icons\logout1.png" width="20px">Déconnexion</p1>
	</div>
</a>


</center>




</body>
</html>