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
		
		<header class="page_epreuve_3">
			<h1>Epreuve 3 : Le double choix</h1>
		</header>

		<div class="wrapper">
			<p class="click">
				Cette épreuve est un mini-questionnaire. Pour accéder à l'indice et pour chaque question, il faut choisir <span class="green reponseA">la réponse A</span> ou <span class="red reponseB">la réponse B</span>.
			</p>

			<table>

				<thead>
					<tr>
						<th>Question</th>
						<th>Réponse A</th>
						<th>Réponse B</th>
					</tr>
				</thead>

				<tbody class="doublechoix">
					
					<tr>
						<td>Quel membre est fictif</td>
						<td><button class="bg_green">Majin-ikki</button></td>
						<td><button class="bg_red">Admin Manga Info</button></td>
					</tr>

					<tr>
						<td>Le forum ne possède aucun membre dont le pseudo est composé uniquement de numéros</td>
						<td><button class="bg_green">Vrai</button></td>
						<td><button class="bg_red">Faux</button></td>
					</tr>

					<tr>
						<td>Le jour de remise des médailles est le</td>
						<td><button class="bg_green">1er du mois</button></td>
						<td><button class="bg_red">10 du mois</button></td>
					</tr>

					<tr>
						<td>Quel est le deuxième plus ancien sujet fêtant l'anniversaire du forum</td>
						<td><button class="bg_green">Les 5 ans du forum</button></td>
						<td><button class="bg_red">Les 4 ans du forum</button></td>
					</tr>

					<tr>
						<td>Quel membre a gagné le dernier jeu d'halloween</td>
						<td><button class="bg_green">Shika'</button></td>
						<td><button class="bg_red">Master of Madness</button></td>
					</tr>

					<tr>
						<td>Chocolat aime</td>
						<td><button class="bg_green">lire et écrire</button></td>
						<td><button class="bg_red">faire du sport</button></td>
					</tr>

				</tbody>

			</table>
			

			<div class="style_input">
				<button class="validate validate_doublechoix" data-answer="1">Valider</button>
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
