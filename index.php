<?php

		include('./header.php');
		include('./right_menu.php');
?>

<script src="./js/main.js"></script>
 <script src="../js/vidbg.js"></script>
<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Meie+Script" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Parisienne" rel="stylesheet">
<style>
.block{
text-align:center;
    margin-top: 130px;
}
.block-container > .block > h1 {
  font-size: 55px;
  color: #fff6f6;
  border-bottom: 0;
  margin: 0 0 10px;
  margin-top: 300px;
  font-family: 'Kaushan Script', cursive;
}
.block-container > .block > h3 {
  color: #fff6f6;
  margin: 0;
  font-size: 32px;
 font-family: 'Kaushan Script', cursive;
}


h5{
color: #fff6f6;
  font-size: 32px;
	font-family: 'Parisienne', cursive;
}


	
</style>

<!-- <!--  팝업  --> 
<!-- <div id="pop-up" class="pop-layer">	 -->
<!-- 	<div id='pop-up_close'><a onclick='popup_close()'><img src='./image/close.png'></a></div> -->
<!-- </div> -->


<body>

<!-- <div id="loading"> -->
<!-- 	<img id='loading-image' src="./image/25.gif" alt="loading"> -->
<!-- </div> -->



<!--  -->
<!-- <section class='main_section'id="intro" class='blur'> -->
<!-- 	<a class='scroll' href="#blog"> <h1>Park So Jin </a> DISIGN <span> PORTFOLIO.</span></h1> -->
<!-- </section> -->
<!--  -->
<!--  -->
<!-- <section class='main_section' class='bgBlur' id="portfolio"> -->
<!-- 	<h1>Park So Jin DISIGN  <span>PORTFOLIO</span></h1> -->
<!-- </section> -->
<!--  -->
<!-- <section class='main_section' class='bgBlur' id="blog"> -->
<!--   <h1>Park So Jin DISIGN <span id=''>PORTFOLIO</span></h1> -->
<!-- </section> -->


  <div class="block-container">
    <div class="block">
      <h1>Park So Jin</h1>
      <h3>SOJIN BABO<body> </h3>
	  <h5>We come to love not by finding a perfect person, but by learning to see an imperfect person perfectly</h5>
    </div>
  </div>

  <script type="text/javascript">
    jQuery(function($){
          $('body').vidbg({
              'mp4': '../data/mp4_video.mp4',
              'webm': '../data/webm_video.webm',
              'poster': '../data/fallback.jpg',
          }, {
            // Options
            muted: true,
            loop: true,
  			overlay: true,
          });
      });
  </script>





</body>