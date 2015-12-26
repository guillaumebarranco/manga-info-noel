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

		} else {
			$status = "error";
			echo json_encode($status);
		}
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
				if($_POST['answers_quizz'][$i] !== $quizz[$i]) {
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

	function finalResponse() {

		if(isset($_POST['answer']) && $_POST['answer'] === 'trente') {
			$status = 'success';
			$response['content'] = 'Vous avez trouvé la bonne réponse ! Vous avez obtenu la phrase secrète : "Un lapin en feu dansant la salsa" !';
		} else {
			$status = 'error';
			$response['content'] = 'Mauvaise réponse mon lapin. Au mieux cette danse t\'as envoyé valsé...';
		}

		$response['status'] = $status;

		echo json_encode($response);	
	}
