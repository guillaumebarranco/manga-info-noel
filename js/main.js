$(document).ready(function() {

	var url_functions = WEB_URL+"functions.php";

	if(typeof admin === "undefined") admin = false;


	$('.epreuves li').hide();

	if (!Date.now) Date.now = function() { return new Date().getTime(); }

	var current_date = Math.floor(Date.now() / 1000);
	console.log(current_date);

	var first_date = 1451088034;
	var second_date = 1451248137;
	var third_date = 1451248137;
	var fourth_date = 1451347234;

	// current_date = firth_date+1;
	// current_date = second_date+1;

	var checkDate = function () {

		if(($('.page_epreuve_1').length !== 0 && current_date < first_date) 	&& admin === false) window.location.href = 'index.php';
		if(($('.page_epreuve_2').length !== 0 && current_date < second_date) 	&& admin === false) window.location.href = 'index.php';
		if(($('.page_epreuve_3').length !== 0 && current_date < third_date) 	&& admin === false) window.location.href = 'index.php';
		if(($('.page_epreuve_4').length !== 0 && current_date < fourth_date) 	&& admin === false) window.location.href = 'index.php';

		if(current_date > first_date 	|| admin === true) showFirstEpreuve();
		if(current_date > second_date 	|| admin === true) showSecondEpreuve();
		if(current_date > third_date 	|| admin === true) showThirdEpreuve();
		if(current_date > fourth_date 	|| admin === true) showFourthEpreuve();

	}();

	function showFirstEpreuve() {
		$('li[data-epreuve=1]').show();
	}

	function showSecondEpreuve() {
		$('li[data-epreuve=2]').show();
	}

	function showThirdEpreuve() {
		$('li[data-epreuve=3]').show();
	}

	function showFourthEpreuve() {
		$('li[data-epreuve=4]').show();
	}

	/*
	*	Final
	*/

	$('.final_button').on('click', function() {

		var data = {
			answer: $('.final_input').val(),
			final_answer: true
		};

		$.ajax({
			type : "POST",
			data: data,
			url : url_functions,
			success: function(response) {
				response = JSON.parse(response);
				if(response.status === 'success') {
					popSuccess(response.content);;
				} else {
					popError(response.content);
				}
			},
			error: function() {
				console.log('error');
            }
		});
	});

	$('.question button').on('click', function() {

		$(this).parent().find('button').removeClass('active');
		$(this).addClass('active');
	});

	$('.validate_quizz').on('click', function() {

		if($('.active').length === 12) {

			var data = {
				quizz_answer: true,
				answers_quizz: []
			};

			var i = 1;

			$('.active').each(function() {
				data.answers_quizz[i] = $(this).text();
				i++;
			});

			console.log(data);

			$.ajax({
				type : "POST",
				data: data,
				url : url_functions,
				success: function(response) {
					response = JSON.parse(response);
					
					if(response.status === 'error') {
						popError(response.content);
					} else {
						swal({
							type: 'success',
							title: "Bravo !"
						}, function() {
							window.location.href = response.content;
						});
					}
				},
				error: function() {
					console.log('error');
	            }
			});
		} else {
			popError("Vous n'avez pas répondu à toutes les questions");
		}
	});

	$('.validate_epreuve2').on('click', function() {

		var answer = $('input[name=indice'+$(this).attr('data-answer')+']').val();

		if(answer !== '') {

			var data = {
				chemin: true,
				answer_chemin: answer,
				number: $(this).attr('data-answer')
			};

			console.log(data);

			$.ajax({
				type : "POST",
				data: data,
				url : url_functions,
				success: function(response) {
					response = JSON.parse(response);
					
					if(response.status === 'error') {
						popError(response.content);
					} else {
						swal({
							type: 'success',
							title: "Bravo !"
						}, function() {
							window.location.href = response.content;
						});
					}
				},
				error: function() {
					console.log('error');
	            }
			});
		}
	});




	$('.doublechoix button').on('click', function() {
		$(this).parents('tr').find('button').removeClass('active');
		$(this).addClass('active');
	});

	$('.validate_doublechoix').on('click', function() {

		if($('.active').length === 6) {

			var data = {
				doublechoix_answer: true,
				answers_doublechoix: []
			};

			var i = 1;

			$('.active').each(function() {
				data.answers_doublechoix[i] = $(this).text();
				i++;
			});

			$.ajax({
				type : "POST",
				data: data,
				url : url_functions,
				success: function(response) {
					response = JSON.parse(response);

					if(response.status === 'error') {
						popError(response.content);
					} else {
						popSuccess(response.content);
					}
					
				},
				error: function() {
					console.log('error');
	            }
			});
		} else {
			popError("Vous n'avez pas répondu à toutes les questions");
		}
	});

	var foundAnswer = 1;

	$('.reponseA').on('click', function() {
		if(foundAnswer === 1 || foundAnswer === 5 || foundAnswer === 6) foundAnswer++;
		if(foundAnswer === 7) {
			window.location.href = 'manga.php';
		}
	});

	$('.reponseB').on('click', function() {
		if(foundAnswer === 2 || foundAnswer === 3 || foundAnswer === 4) foundAnswer++;
	});

});
