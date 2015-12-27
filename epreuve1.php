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
		
		<header class="page_epreuve_1">
			<h1>Epreuve 1 : Le Quizz</h1>
		</header>

		<div class="wrapper">
			<p>
				<strong>Vous devez répondre au Quizz. Une seule bonne réponse par question. Vous ne pourrez accéder à l'indice qu'une fois toutes les bonnes réponses données, bon courage !</strong>
			</p>

			<div class="quizz">
				
				<div class="question question 1">
					<p>Combien le forum a t-il de jours d'existences ?</p> 
					<button>Entre 1000 et 2000</button>
					<button>Entre 2000 et 3000</button>
					<button>Entre 3000 et 4000</button>
				</div>

				<div class="question question 2">
					<p>Combien y a-t-il de shojo sur le forum</p>
					<button>Entre 20 et 40</button>
					<button>Entre 40 et 60</button>
					<button>Entre 60 et 80</button>
				</div>

				<div class="question question 3">
					<p>De quelle couleur sont les modérateurs</p>
					<button>Rouge</button>
					<button>Vert</button>
					<button>Jaune</button>
				</div>

				<div class="question question 4">
					<p>Combien y a-t-il eu de manga en exposition commençant par un C et un I</p>
					<button>4</button>
					<button>7</button>
					<button>11</button>
				</div>

				<div class="question question 5">
					<p>Combien y a-t-il de membres portant des lunettes</p>
					<button>Entre 15 et 25</button>
					<button>Entre 25 et 35</button>
					<button>Entre 35 et 45</button>
				</div>

				<div class="question question 6">
					<p>Combien y a-t-il de tournois de popularité</p>
					<button>2</button>
					<button>3</button>
					<button>4</button>
				</div>

				<div class="question question 7">
					<p>Combien y a t-il de sujets sur Death Note</p>
					<button>entre 1 et 5</button>
					<button>entre 6 et 10</button>
					<button>plus de 10</button>
				</div>

				<div class="question question 8">
					<p>Dans la section shonen, combien de manga ont une section à eux (exemple : Dragon Ball)</p>
					<button>9</button>
					<button>12</button>
					<button>15</button>
				</div>

				<div class="question question 9">
					<p>Quel manga a le plus de sujets d'hypothèses</p>
					<button>One Piece</button>
					<button>Bleach</button>
					<button>Naruto</button>
				</div>

				<div class="question question 10">
					<p>Combien y a-t-il de post sur le forum</p>
					<button>entre 500 000 et 1 000 000</button>
					<button>entre 1 000 000 et 1 500 000</button>
					<button>plus de 1 500 000</button>
				</div>

				<div class="question question 11">
					<p>Dans une présentation quelle est la première chose que l'on demande</p>
					<button>Votre âge</button>
					<button>Vos manga favoris</button>
					<button>Votre prénom</button>
				</div>

				<div class="question question 1">
					<p>Quelle est la date d'anniversaire du forum</p>
					<button>28 février</button>
					<button>28 mars</button>
					<button>28 avril</button>
				</div>

				<button class="validate validate_quizz">Valider</button>

			</div>
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