<?php

		include('header.php');	
		include('./select/portfolio_select.php');
?>


<script src="./js/portfolio.js"></script>
<script src="../js/lightSlider.js"></script>

<link type="text/css" rel="stylesheet" href="../css/lightSlider.css" /> 
<link type="text/css" rel="stylesheet" href="../css/portfolio.css" />    





<!--  내용 뿌리기 -->
<body>

	<div class='main_fo'>
		<ul class='lightSlider' id='image-gallery'class='main_for'>
		<?
			while ($row = mysql_fetch_array($recent_product)) {
					$img = '<img src="./update/uploads/'.$row['p_img'].'" >';
					$title= $row['p_title'];
					$content=$row['p_content'];
					$regidate=$row['p_regidate'];
				?>
		<!--    printf("제목: %s  등록일: %s", $row['p_title'], $row['p_regidate']);   -->
			   <li data-thumb='./update/uploads/<?=$row['p_img']?>'>
			  	<div class= "instagram_form">
					<div class='instagram_prod'>
				<!-- 		 포폴이미지  -->
						<div class = "instagram_inner">
							<?=$img?>
						</div>

				<!-- 		포폴 코멘트 -->

						<div class='instagram_comment'>
						
							<div class='like_img'>
								<img src='../image/like.png'><img src='../image/comment.png'>
							</div>

							<div class="clear"></div>

								<p><?=$title?></P> 
								<hr class='title'> 
<!-- 								<p><?=$regidate?></P> -->
								<p><?=$content?></P>
							
						</div><!-- 	end of	instagram_comment -->
					</div><!-- 	end of	instagram_form -->
						
			  </li>
		<?}?>
	</ul>

	</div>

</body>


<?
	include('./right_menu.php');
?>

	