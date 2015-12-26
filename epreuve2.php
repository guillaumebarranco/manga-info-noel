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
			<h1>Epreuve 1 : Le Quizz</h1>
		</header>

		<div class="wrapper">
			<p>
				Explication de l'épreuve
			</p>

			<div class="indice">
				Que la croix de ton chemin soit la lumière de l'infini
			</div>

			<input type="text" name="indice1">

			<button class="validate_epreuve2_1">Valider</button>
		</div>

		<footer>
			Copyright © Manga-Info 2015
		</footer>

		<?php require_once('config.php'); ?>
		<script>
			var WEB_URL = "<?=WEB_URL?>";
		</script>

		<script src="js/jquery-2.0.0.min.js"></script>
		<script src="js/sweet-alert.min.js"></script>
		<script src="js/functions.js"></script>
		<script src="js/main.js"></script>
	</body>

</html>
