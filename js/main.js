$(document).ready(function() {


	$('.epreuves li').hide();

	if (!Date.now) Date.now = function() { return new Date().getTime(); }

	var current_date = Math.floor(Date.now() / 1000);
	var first_date = 1451088034;
	var second_date = 1451174434;
	var third_date = 1451260834;
	var fourth_date = 1451347234;

	// current_date = firth_date+1;
	current_date = fourth_date+1;

	var checkDate = function () {

		if($('.page_epreuve_1').length !== 0 && current_date < first_date) window.location.href = 'index.html';
		if($('.page_epreuve_2').length !== 0 && current_date < second_date) window.location.href = 'index.html';
		if($('.page_epreuve_3').length !== 0 && current_date < third_date) window.location.href = 'index.html';
		if($('.page_epreuve_4').length !== 0 && current_date < fourth_date) window.location.href = 'index.html';

		if(current_date > first_date) showFirstEpreuve();
		if(current_date > second_date) showSecondEpreuve();
		if(current_date > third_date) showThirdEpreuve();
		if(current_date > fourth_date) showFourthEpreuve();

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
			url : "http://localhost/mi/functions.php",
			success: function(response) {
				console.log(response);
				response = JSON.parse(response);
				if(response.status === 'answer found !') {
					popSuccess('You found the right answer ! Just say the word "Tsubasa" to prove it !');
				}
			},
			error: function() {
				console.log('error');
            }
		});
	});

	$('.question button').on('click', function() {
		console.log('ok');

		$(this).parent().find('button').removeClass('active');
		$(this).addClass('active');
	});

	$('.validate_quizz').on('click', function() {

		if($('.active').length === 12) {

			data = {
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
				url : "http://localhost/mi/functions.php",
				success: function(response) {
					response = JSON.parse(response);
					popError(response.content);
				},
				error: function() {
					console.log('error');
	            }
			});
		} else {
			popError("Vous n'avez pas répondu à toutes les questions");
		}
	});

});
