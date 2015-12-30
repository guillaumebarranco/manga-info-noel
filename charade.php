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

		<div class="wrapper">

			<a href="epreuve6.php">Retour sur la page de l'épreuve</a>
	
			<br><br>
			<p>
				Mon premier est est une version améliorée du Gyo dans un manga du Jump bien connu, <br><br>
				Mon second est plutôt bavard, <br><br>
				Mon troisième est un animal souvent considére comme dégoûtant, <br><br>
				Mon dernier est est un acronyme raccroché à la technologie. <br><br>
				Mon tout est probablement utile pour trouver l'indice que vous recherchez tant.
			</p>

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
