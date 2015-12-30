$(document).ready(function() {

	var url_functions = WEB_URL+"functions.php";

	if(typeof admin === "undefined") admin = false;


	$('.epreuves li').hide();

	if (!Date.now) Date.now = function() { return new Date().getTime(); }

	var current_date = Math.floor(Date.now() / 1000);
	// console.log(current_date);

	var first_date = 1451088034;
	var second_date = 1451248137;
	var third_date = 1451248137;
	var fourth_date = 1451421005;
	var fifth_date = 1451505603;
	var sixth_date = 1451505603;

	// current_date = firth_date+1;
	// current_date = fourth_date+1;

	var checkDate = function () {

		if(($('.page_epreuve_1').length !== 0 && current_date < first_date) 	&& admin === false) window.location.href = 'index.php';
		if(($('.page_epreuve_2').length !== 0 && current_date < second_date) 	&& admin === false) window.location.href = 'index.php';
		if(($('.page_epreuve_3').length !== 0 && current_date < third_date) 	&& admin === false) window.location.href = 'index.php';
		if(($('.page_epreuve_4').length !== 0 && current_date < fourth_date) 	&& admin === false) window.location.href = '../index.php';
		if(($('.page_epreuve_5').length !== 0 && current_date < fifth_date) 	&& admin === false) window.location.href = 'index.php';
		if(($('.page_epreuve_5').length !== 0 && current_date < sixth_date) 	&& admin === false) window.location.href = 'index.php';

		if(current_date > first_date 	|| admin === true) showFirstEpreuve();
		if(current_date > second_date 	|| admin === true) showSecondEpreuve();
		if(current_date > third_date 	|| admin === true) showThirdEpreuve();
		if(current_date > fourth_date 	|| admin === true) showFourthEpreuve();
		if(current_date > fifth_date 	|| admin === true) showFifthEpreuve();
		if(current_date > fifth_date 	|| admin === true) showSixthEpreuve();

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

	function showFifthEpreuve() {
		$('li[data-epreuve=5]').show();
	}

	function showSixthEpreuve() {
		$('li[data-epreuve=6]').show();
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







	$('.right_clickable').on('click', function() {
		var epreuve = parseInt($('.wrapper').attr('data-epreuve'));

		console.log(epreuve);

		if(epreuve === 1) {
			window.location.href = 'autredroite.php';
		} else if(epreuve === 4) {
			window.location.href = 'discutons.php';
		} else if(epreuve === 9000) {
			window.location.href = 'z.php';
		}
	});

	$('.left_clickable').on('click', function() {
		var epreuve = parseInt($('.wrapper').attr('data-epreuve'));

		console.log(epreuve);

		if(epreuve === 1) {
			window.location.href = '2014.php';
		} else if(epreuve === 4) {
			window.location.href = 'voyant.php';
		} else if(epreuve === 9000) {
			window.location.href = 'index.php';
		}
	});

    var check_mm = 0,
    	mm = 0;

	$(document).keydown(function (e) {
		console.log(e.which);

		if ($('.wrapper[data-epreuve=1]').length === 1) {

			if (mm == 0) {
				mm = e.which == 77 ? 1 : 0;
			} else if (mm == 1) {
				mm = e.which == 69 ? 2 : 0;
			} else if (mm == 2) {
				mm = e.which == 78 ? 3 : 0;
			} else if (mm == 3) {
				mm = e.which == 82 ? 4 : 0;
			} else if (mm == 4) {
				mm = e.which == 69 ? 5 : 0;
			} else if (mm == 5) {
				mm = e.which == 80 ? 6 : 0;
			}else if (mm == 6) {
				mm = e.which == 85 ? 7 : 0;
			} else if (mm == 7) {
				mm = e.which == 83 ? 8 : 0;
				window.location.href = "../animal.php";
			}
			
		} else if ($('.wrapper[data-epreuve=3]').length === 1) {

			if (mm == 0) {
				mm = e.which == 84 ? 1 : 0;
			} else if (mm == 1) {
				mm = e.which == 79 ? 2 : 0;
			} else if (mm == 2) {
				mm = e.which == 66 ? 3 : 0;
			} else if (mm == 3) {
				mm = e.which == 73 ? 4 : 0;
			} else if (mm == 4) {
				mm = e.which == 65 ? 5 : 0;
			} else if (mm == 5) {
				mm = e.which == 83 ? 6 : 0;
				window.location.href = "tobias.php";
			}
			
		} else if ($('.wrapper[data-epreuve=5]').length === 1) {

			if (mm == 0) {
				mm = e.which == 65 ? 1 : 0;
			} else if (mm == 1) {
				mm = e.which == 66 ? 2 : 0;
			} else if (mm == 2) {
				mm = e.which == 85 ? 3 : 0;
			} else if (mm == 3) {
				mm = e.which == 82 ? 4 : 0;
			} else if (mm == 4) {
				mm = e.which == 65 ? 5 : 0;
			} else if (mm == 5) {
				mm = e.which == 77 ? 6 : 0;
			} else if (mm == 6) {
				mm = e.which == 69 ? 7 : 0;
				window.location.href = "don.php";
			}
		} else if ($('.wrapper[data-epreuve=6]').length === 1) {

			if (mm == 0) {
				mm = e.which == 83 ? 1 : 0;
			} else if (mm == 1) {
				mm = e.which == 73 ? 2 : 0;
			} else if (mm == 2) {
				mm = e.which == 77 ? 3 : 0;
			} else if (mm == 3) {
				mm = e.which == 80 ? 4 : 0;
			} else if (mm == 4) {
				mm = e.which == 76 ? 5 : 0;
			} else if (mm == 5) {
				mm = e.which == 69 ? 6 : 0;
			} else if (mm == 6) {
				mm = e.which == 79 ? 7 : 0;
			} else if (mm == 7) {
				mm = e.which == 70 ? 8 : 0;
			} else if (mm == 8) {
				mm = e.which == 32 ? 9 : 0;
			} else if (mm == 9) {
				mm = e.which == 71 ? 10 : 0;
			} else if (mm == 10) {
				mm = e.which == 79 ? 11 : 0;
			} else if (mm == 11) {
				mm = e.which == 68 ? 12 : 0;
				window.location.href="towerofgod.php";
			}
		} else if($('.wrapper_leretour').length === 1) {

			if (mm == 0) {
				mm = e.which == 83 ? 1 : 0;
			} else if (mm == 1) {
				mm = e.which == 73 ? 2 : 0;
			} else if (mm == 2) {
				mm = e.which == 77 ? 3 : 0;
			} else if (mm == 3) {
				mm = e.which == 80 ? 4 : 0;
			} else if (mm == 4) {
				mm = e.which == 76 ? 5 : 0;
			} else if (mm == 5) {
				mm = e.which == 69 ? 6 : 0;
				window.location.href="charade.php";
			}
		} else if($('.wrapper_cat').length === 1) {

			if (mm == 0) {
				mm = e.which == 67 ? 1 : 0;
			} else if (mm == 1) {
				mm = e.which == 72 ? 2 : 0;
			} else if (mm == 2) {
				mm = e.which == 65 ? 3 : 0;
			} else if (mm == 3) {
				mm = e.which == 84 ? 4 : 0;
				window.location.href="ile.php";
			}
		}
	});

	$('.validate_top').on('click', function() {
		if($('input[name=name_top]').val().toLowerCase() === 'kayze') {
			window.location.href = "z.php";
		}
	});

	$('.validate_bottom').on('click', function() {
		if($('input[name=name_bottom]').val().toLowerCase() === 'kayze') {
			window.location.href = "stop.php";
		}
	});











	$('.validate_holes').on('click', function() {

		var data = {
			holes_answer: true,
			answers_holes: []
		};

		var i = 1;

		$('.holes input').each(function() {
			data.answers_holes[i] = $(this).val();
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
					window.location.href = response.content;
				}
				
			},
			error: function() {
				console.log('error');
            }
		});
	});

	var count = 0;

	$('.helpme').on('click', function() {

		if(count > 5) {
			window.location.href = "leretour.php";
		} else {
			$('.txt').append('<p>Eh bien... Persévérez ! :D</p>');
			count++;
		}
	});

	$('.koko').on('click', function() {
		$(this).text("Il retombe toujours sur ses pattes");
		var that = $(this);
		setTimeout(function() {
			that.text("Copyright © Manga-Info 2015");
		}, 100);
	});

});
