<?php

	$status = "success";

	if(empty($_POST)) {
		$status = "error";
		echo json_encode($status);
	} else {

		if(isset($_POST['final_answer'])) {
			finalResponse();
		} else {
			$status = "error";
			echo json_encode($status);
		}
	}

	function finalResponse() {

		if(isset($_POST['answer']) && $_POST['answer'] === 'secret') {
			$status = 'answer found !';
		} else {
			$status = 'error for answer';
		}

		$response = array();
		$response['status'] = $status;

		echo json_encode($response);	
	}
