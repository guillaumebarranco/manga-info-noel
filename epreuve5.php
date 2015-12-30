<!DOCTYPE HTML>

<html>
	<head>

		<meta charset="utf-8" />

		<title>Une aventure de Noël</title>

		<link rel="shortcut icon" href="img/favicon.ico.png" type="image/x-icon"/> 
		<link rel="icon" href="img/favicon.ico.png" type="image/x-icon"/>
		
		<meta name="viewport" content="width=device-width, initial-scale=1" user-scalable="yes" />
	
		<link rel="stylesheet" href="css/sweet-alert.css" />
		<link rel="stylesheet" href="css/index.css" />

	</head>

	<body>
		
		<header class="page_epreuve_5">
			<h1>Epreuve 5 : Le texte à trous</h1>
		</header>

		<div class="wrapper">

			<p>
				Les <span class="number"></span> signifient que le champ suivant doit être un chiffre ou un nombre <br><br>
			</p>

			<p class="holes">
				<input type="text"> est la seule femme du staff du forum, elle possède un grade spécial. C'est quelque chose que l'on peut obtenir au bout 3500 post et <span class="number"></span><input type="text"> mois d'ancienneté entre autre. <br><br>
				L'ancienneté par contre n'a aucun rapport pour obtenir une médaille, par exemple la médaille <input type="text"> s'obtient en partageant ou en refaisant la présentation d'un manga. <br><br>
				Dans les manga principaux, il y a en a un des 5 dont l'histoire en tomes est terminée, il s'agit de <input type="text">. Le premier à avoir ouvert un sujet d'hypothèses là-bas était <input type="text">  celui qui lui a répondu le premier avait comme prénom dans la vie réelle <input type="text"> 
				La vie réelle... on peut aussi parler de nos rêves dans la section <input type="text">  Elle fait partie de la zone Général où on peut voir les sections <input type="text"> et <input type="text">  ces deux sections ont le même début de titre mais la seconde concerne plus précisément des sujets qui sont en rapport avec le principe du forum d'où ce rajout. <br><br>
				A ce propos, dans la partie shonen, il y a une section qui concerne un manga. celui qui a un A dedans mais pas plus de deux fois, qui est composé de plusieurs mots et qui a entre 4 et 7 voyelles, <input type="text">  Le sujet qui est en note dans cette section s'appelle <input type="text"> ce qui est logique en vérité. <br><br>
				Par contre ce qui n'est pas logique c'est que dans les membres qui ont pour loisir wii la fameuse console, il y en a un qui n'a pas son pseudo en rapport, il s'appelle <input type="text"> alors que l'autre membre on comprend clairement son loisir car lui il a pour pseudo <input type="text"> 
				Est-ce que ce jeu de fin d'année est logique aussi? Il faudrait peut-être demander à celui qui a ouvert le sujet pour l'annoncer, <input type="text">  Ou bien alors à son collègue qui a fait ce site, <input type="text">  celui qui a un seul numéro dans son pseudo. <br><br>
				Faut espérer terminer ce jeu avant la nouvelle année, on sera bientôt en an <span class="number"></span><input type="text"> est-ce qu'un membre a ce même nombre de message?
				Non, certains l'ont dépassé et d'autres pas encore atteint. <br><br>
				Par contre quand on regarde bien, il y a en un qui a 1 post près franchissait un palier dans les post, le membre <input type="text">  En atteignant ce cap rond, il aurait alors obtenu le grade <input type="text">  <br>
			</p>

			<button class="validate validate_holes">Valider</button>
		</div>

		<footer>
			Copyright © Manga-Info 2015
		</footer>

		<?php require_once('config.php'); ?>
		<script>
			var WEB_URL = "<?=WEB_URL?>";
			var admin = false;
		</script>
		<?php if(isset($_GET['cygheks'])) echo '<script>var admin = true;</script>'; ?>

		<script src="js/jquery-2.0.0.min.js"></script>
		<script src="js/sweet-alert.min.js"></script>
		<script src="js/functions.js"></script>
		<script src="js/main.js"></script>
	</body>

</html>
