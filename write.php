
<?php

include('./header.php');

?>
<!-- 
p_id = 글번호
p_title = 글제목
p_content=글내용
p_img= 글이미지
-->
<link rel="stylesheet" type="text/css" href="./css/write.css"/>
<script src="./js/write.js"></script>


    


<form  method='POST' id='form_write' action='./update/write_update.php' onsubmit='return submit_form(this);'enctype="multipart/form-data">
<!-- background -->
<div class="portfolio_back">   
<!--  내용 뿌리기 -->
	<div class= "write_form">
		
	 <div class='write_prod'>
	<!-- 		 등록 이미지  -->
<!-- 		<div class='img_wrap'> -->
<!-- 			<img id='img'> -->
<!-- 		</div> -->
		<div class = "write_inner"><img id='img'></div>

<!-- 		포폴 코멘트 -->

		<div class='write_comment'>
		
			<div class='write_add_img'>
				<label>
					<img src='../image/upload.png'>
					<input type="FILE" class='upload-hidden'name="p_img" id="input_img"/>
					<input class="upload-name" value="파일선택" disabled="disabled">	
				</label>
				<label><button id='submit-btn'>등록</button></label>
<!-- 				<input type='button' value='등록' onclick='submit_form()'> -->
			</div>

			<div class="clear"></div>

			<p><input type='text' class='p_title' name='p_title' placeholder='Title' autocomplete='off'></P> 
				<hr class='title'> 

			<p><input type='text' name='p_content' class='textarea' placeholder='Content' autocomplete='off'></p>
			
				
		
	
		</div><!-- 	end of	write_comment -->
		

	</div><!-- 	end of	write_form -->
	</div><!-- 	end of	write_prod -->


</div><!-- 	end of	portfolio_back -->
</form>

<script>
	function submit_form(f){

	if( !$('.p_title').val()){
	alert('제목을 입력해야지!');
	return false;
	}
	
	if( !$('.textarea').val()){
	alert('내용을 입력해야지!');
	return false;
	}
	
	if( !$('.upload-hidden').val()){
	alert('이미지를 올려야지!');
	return false;
	}

	$('#form_write').submit();
}
</script>




<?
	include('./right_menu.php');
?>

