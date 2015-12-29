<!DOCTYPE HTML>

<html>
	<head>

		<meta charset="utf-8" />

		<title>Une aventure de Noël</title>

		<link rel="shortcut icon" href="img/favicon.ico.png" type="image/x-icon"/> 
		<link rel="icon" href="img/favicon.ico.png" type="image/x-icon"/>
		
		<meta name="viewport" content="width=device-width, initial-scale=1" user-scalable="yes" />
	
		<link rel="stylesheet" href="../css/sweet-alert.css" />
		<link rel="stylesheet" href="../css/index.css" />

	</head>

	<body>
		
		<header class="page_epreuve_4">
			<h1>Epreuve 4 : La chasse à l'image</h1>
		</header>

		<div class="wrapper wrapper_big" data-epreuve="4">
			<div class="top"></div>

			<div class="left left_clickable"></div>
			<div class="supernem">
				<img src="../img/planch13.jpg" alt="">
			</div>
			<div class="right right_clickable"></div>

			<div class="bottom"></div>
		</div>

		<footer>
			Copyright © Manga-Info 2015
		</footer>

		<?php require_once('../config.php'); ?>
		<script>
			var WEB_URL = "<?=WEB_URL?>";
			var admin = false;
		</script>
		<?php if(isset($_GET['cygheks'])) echo '<script>var admin = true;</script>'; ?>

		<script src="../js/jquery-2.0.0.min.js"></script>
		<script src="../js/sweet-alert.min.js"></script>
		<script src="../js/functions.js"></script>
		<script src="../js/main.js"></script>
	</body>

</html>
