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
		
		<header class="page_epreuve_2">
			<h1>Epreuve 2 : Le chemin</h1>
		</header>

		<div class="wrapper">
			<p>
				L'objectif de cette épreuve est de trouver à quoi correspond chacun des indices, et de rentrer la réponse correspondante dans le champ pour accéder à l'indice suivant, puis l'indice final.
			</p>

			<div class="indice">
				Un seinen qui termine par un numéro
			</div>

			<input type="text" name="indice1">
			<div class="style_input">
				<button class="validate_epreuve2" data-answer="1">Valider</button>
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
