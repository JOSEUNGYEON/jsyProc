
$(document).ready(function() {

		    $('#loading').show();

		});

		 

		$(window).on('load', function() {

		    $('#loading').hide();

		});


//헤더 메뉴 열고닫기 
	$(function() {

		var w = $(window).width(),
		h = $(window).height();
		//$('section').width(w);
		$('section.main_section').height(h);
		$('menu .container').height(h - 60);
		$('body').prepend('<div id="overlay">');

			$('#menu').click(function() {$('html').addClass('active');});
			$('#close-menu').click(function() {$('html').removeClass('active');});
			$('#overlay').click(function() {$('html').removeClass('active');});
			$(window).resize(function() {
				var w = $(window).width(),
				h = $(window).height();
				//$('section').width(w);
				$('section.main_section').height(h);
				$('menu .container').height(h - 60);
			});

	});