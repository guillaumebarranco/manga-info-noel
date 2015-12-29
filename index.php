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
		
		<header>
			<h1>Une nouvelle aventure</h1>
		</header>

		<div class="wrapper">
			<p>
				Bienvenue sur ce jeu organisé par Manga-Info à l'occasion de notre belle période de Noël ! <br /><br />

				Le but de ces mini-jeux sera de trouver le code final à entrer ci-dessous ! Bonne chance à tous ! 
			</p>
			
			<div class="box">
				Chacune de ces épreuves vous donnera un indice. Ces indices mis ensemble, associés aux méninges de votre cerveau vous permettront de trouver le code final et de gagner ce jeu !
				<div class="style_input">
					<input type="text" placeholder="Code final à taper" class="final_input" />
				</div>
				
				<button class="final_button">Accéder au panthéon</button>
			</div>

			<ul class="epreuves">
				<li data-epreuve="1">
					<a href="epreuve1.php">Epreuve 1</a>
				</li>
				<li data-epreuve="2">
					<a href="epreuve2.php">Epreuve 2</a>
				</li>
				<li data-epreuve="3">
					<a href="epreuve3.php">Epreuve 3</a>
				</li>
				<li data-epreuve="4">
					<a href="epreuve4/">Epreuve 4</a>
				</li>
			</ul>
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