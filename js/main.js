
$(document).ready(function($) {

	$(".scroll").click(function(event){            
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top}, 500);
	});
		//팝업 드래그를 위한 함수 호출
		$("#pop-up").draggable();

		$('#pop-up').css('cursor', 'move');



});


	function popup_close(){
		console.log("close");
		$('#pop-up').css('display', 'none');
	}

