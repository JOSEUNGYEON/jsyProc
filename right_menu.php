<?php
session_start();

?>


<menu>
<meta http-equiv="Content-Type" content="text/html"; charset="utf-8">
  <div class="logo"><a href="">
	<? if($_SESSION['login_img']){ ?>
			<img src="<?=$_SESSION['login_img']?>">
			</a>
			<div class='login_status'><label><?=$_SESSION['login_name'] ?>님 접속중입니다~</label></div>
	<?}else{?>
			<img src="./image/logo.png">
			</a>
		<?}?>
			
		
	</a>
	
	</div>
  <span id="close-menu"><span class="ion-close-round"><img src="./image/close_btn.png"></span></span>
  <div class="container">
    <div class="box">
      <ul>										
        <li><a href="./portfolio.php">Fashion</a></li>
        <li><a href="#">Fashion Shows</a></li>
        <li><a href="javascript:alert('준비중입니다');">Culture</a></li>
        <li><a href="javascript:alert('준비중입니다');">Magazine</a></li>
        <li><a href="javascript:alert('준비중입니다');">Met Gala</a></li>
        <li><a href="javascript:alert('준비중입니다');">Videos</a></li>
        <li><a href="javascript:alert('준비중입니다');" target="_blank">Subscribe</a></li>
      </ul>
      <ul>
        <li><a href="#">Promotions</a></li>
        <li><a href="#">Vogue Archive</a></li>
     
      </ul>
      <ul>
        <li><a class="ion-social-facebook" href="#" target="_blank"><img src="./image/facebook.png"></a></li>
        <li><a class="ion-social-twitter" href="https://www.behance.net/maiky-" target="_blank"><img src="./image/be.png"></a></li>
        <li><a class="ion-social-instagram" href="https://www.instagram.com/1994maiky/" target="_blank"><img src="./image/instar.png"></a></li>
      </ul>
<!--       <div class="sign-up"> -->
<!--         <a href="#">	Sign up for Maiky <span class="ion-arrow-right-c"></span></a> -->
<!--       </div> -->
    </div>
  </div>
</menu>