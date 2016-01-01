<?php

	

	$status = "success";
	$response = array();

	if(empty($_POST)) {
		$status = "error";
		echo json_encode($status);
	} else {

		if(isset($_POST['final_answer'])) {
			finalResponse();
		} else if(isset($_POST['quizz_answer'])) {
			checkQuizz();

		} else if(isset($_POST['doublechoix_answer'])) {
			checkDoubleChoix();

		} else if(isset($_POST['chemin'])) {
			checkChemin();

		} else if(isset($_POST['holes_answer'])) {
			checkHoles();

		} else {
			$status = "error";
			echo json_encode($status);
		}
	}

	function checkChemin() {
		$chemin = array();
	
		$chemin[1] = "Détenu 042";
		$chemin[2] = "Jomon";
		$chemin[3] = "Fairy Tail";
		$chemin[4] = "Powerdark94";

		$_POST['number'] = intval($_POST['number']);

		if(strtolower($_POST['answer_chemin']) === strtolower($chemin[$_POST['number']])) {

			switch ($_POST['number']) {
				case 1:
					$response['content'] = "detenu042.php";
				break;

				case 2:
					$response['content'] = "jomon.php";
				break;

				case 3:
					$response['content'] = "fairytail.php";
				break;

				case 4:
					$response['content'] = "powerdark94.php";
				break;
			}

			$status = 'success';

		} else {
			$status = 'error';
			$response['content'] = "Ce n'est pas la bonne réponse, cherche mieux !";
		}

		$response['status'] = $status;
		echo json_encode($response);
	}

	function checkQuizz() {

		$quizz = array();
	
		$quizz[1] = "Entre 3000 et 4000";
		$quizz[2] = "Entre 40 et 60";
		$quizz[3] = "Rouge";
		$quizz[4] = "7";
		$quizz[5] = "Entre 35 et 45";
		$quizz[6] = "3";
		$quizz[7] = "plus de 10";
		$quizz[8] = "12";
		$quizz[9] = "Naruto";
		$quizz[10] = "entre 1 000 000 et 1 500 000";
		$quizz[11] = "Votre prénom";
		$quizz[12] = "28 février";


		if(!empty($_POST['answers_quizz'])) {

			$nb_errors = 0;

			for ($i=1; $i <= 12; $i++) {
				if(strtolower($_POST['answers_quizz'][$i]) !== strtolower($quizz[$i])) {
					$nb_errors++;
				}
			}
		}

		if($nb_errors === 0) {
			$response['content'] = "internet.php";
			$status = 'success';
		} else {
			$status = 'error';
			$response['content'] = 'Vous avez '.$nb_errors.' erreurs !';
		}

		$response['status'] = $status;
		echo json_encode($response);
	}

	function checkDoubleChoix() {

		$doublechoix = array();
	
		$doublechoix[1] = "Majin-ikki";
		$doublechoix[2] = "Faux";
		$doublechoix[3] = "10 du mois";
		$doublechoix[4] = "Les 4 ans du forum";
		$doublechoix[5] = "Shika'";
		$doublechoix[6] = "lire et écrire";

		if(!empty($_POST['answers_doublechoix'])) {

			$nb_errors = 0;

			for ($i=1; $i <= 6; $i++) {
				if(strtolower($_POST['answers_doublechoix'][$i]) !== strtolower($doublechoix[$i])) {
					$nb_errors++;
				}
			}
		}

		if($nb_errors === 0) {
			$response['content'] = "Bravo, vous avez trouvé les bonnes réponses ! Malheureusement, ce n'est pas la bonne façon d'obtenir l'indice.";
			$status = 'success';
		} else {
			$status = 'error';
			$response['content'] = 'Vous avez '.$nb_errors.' erreurs !';
		}

		$response['status'] = $status;
		echo json_encode($response);
	}

	function checkHoles() {

		$holes = array();
	
		$holes[1] = "tsubasaki";
		$holes[2] = "3";
		$holes[3] = "la mangathèque";
		$holes[4] = "naruto";
		$holes[5] = "admin manga info";
		$holes[6] = "greg";
		$holes[7] = "espace privé";
		$holes[8] = "sondages";
		$holes[9] = "sondages manga";
		$holes[10] = "Fullmetal Alchemist";
		$holes[11] = "Full Metal Alchemist";
		$holes[12] = "greny";
		$holes[13] = "Oufdewii";
		$holes[14] = "cygheks";
		$holes[15] = "gear 2nd";
		$holes[16] = "2016";
		$holes[17] = "Brook Le Fredonneur";
		$holes[18] = "Vastolorde";

		if(!empty($_POST['answers_holes'])) {

			$nb_errors = 0;

			for ($i=1; $i <= count($holes); $i++) {
				if(strtolower($_POST['answers_holes'][$i]) !== strtolower($holes[$i])) {
					$nb_errors++;
				}
			}
		}

		if($nb_errors === 0) {
			$response['content'] = "roller.php";
			$status = 'success';
		} else {
			$status = 'error';
			$response['content'] = 'Vous avez '.$nb_errors.' erreurs !';
		}

		$response['status'] = $status;
		echo json_encode($response);
	}

	function finalResponse() {

		if(isset($_POST['answer']) && strtolower($_POST['answer']) === 'trente') {
			$status = 'success';
			$response['content'] = 'Vous avez trouvé la bonne réponse ! Vous avez obtenu la phrase secrète : "Un lapin en feu dansant la salsa" !';
		} else if(isset($_POST['answer']) && strtolower($_POST['answer']) === strtolower('XM45T27A')) {
			$status = 'error';
			$response['content'] = "C'était bien tenté, j'avoue. Tu auras une gauffre. Mais tu t'es gauffré.";
		} else {

			$status = 'error';
			$response['content'] = 'Mauvaise réponse mon lapin. Au mieux cette danse t\'as envoyé valser...';
		}

		require_once('config.php');

		$bdd = new PDO('mysql:host=localhost;dbname=mots', 'root', PASSWORD);

		try {

			$mot = utf8_encode($_POST['answer']);
			$datetime = date_format(date_create(), 'Y-m-d H:i:s');
			$ip = $_SERVER['REMOTE_ADDR'];


			$insert = $bdd->prepare("INSERT INTO `words` (`mot`, `datetime`, `IP`) VALUES (:mot, :datetime, :ip)");			
			
			$insert->bindParam(':mot', $mot, \PDO::PARAM_STR);
			$insert->bindParam(':datetime', $datetime, \PDO::PARAM_STR);
			$insert->bindParam(':ip', $ip, \PDO::PARAM_STR);
			$insert->execute();

		} catch(Exception $e) {
			var_dump($e);
			die;
		}

		$response['status'] = $status;

		echo json_encode($response);	
	}
