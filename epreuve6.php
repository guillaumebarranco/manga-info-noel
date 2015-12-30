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
			<h1>Epreuve 6 : Besoin d'un coup de main ?</h1>
		</header>

		<div class="wrapper wrapper_cat">

			<div class="style_input">
				<label for="" style="margin-bottom:10px;display:block;">Combien y'a t-il de membres avec la lettre "E" dans leur pseudo ?</label>
				<input type="text">
			</div>

			<div class="style_input">
				<label for="" style="margin-bottom:10px;display:block;">Dans quel sujet se trouvait le 129ème post de TDS ?</label>
				<input type="text">
			</div>

			<div class="style_input">
				<label for="" style="margin-bottom:10px;display:block;">Et pour finir, quel jour de la semaine Samael a t-il été nominé Modérateur ?</label>
				<input type="text">
			</div>			

			<button class="validate">Valider</button>

			<p>
				PS : Vous avez du mal avec ces questions pourtant simples ? <a href="help.php">Un peu d'aide</a>
			</p>
		</div>

		<footer class="koko">
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
