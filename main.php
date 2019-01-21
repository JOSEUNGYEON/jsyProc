
<?php
include('./header.php');
//
include('ini_config.php');
//include('./core/common.php');
include('./select/portfolio_select.php');




?>
<head>
<meta http-equiv="Content-Type" content="text/html"; charset="utf-8">
<title>슬라이더</title>
</head>



  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="./slick/slick.css">
  <link rel="stylesheet" type="text/css" href="./slick/slick-theme.css">
  <script src="./js/main.js"></script>

  <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
  <script src="./slick/slick.min.js" type="text/javascript" charset="utf-8"></script>



  <style type="text/css">


    * {
      box-sizing: border-box;
    }

    .slider {
        width: 50%;
        margin: 100px auto;
    }

    .slick-slide {
      margin: 0px 20px;
    }

    .slick-slide img {
      width: 100%;
    }

    .slick-prev:before,
    .slick-next:before {
      color: black;
    }


    .slick-slide {
      transition: all ease-in-out .3s;
      opacity: .2;
    }

    .slick-active {
      opacity: .5;
    }

    .slick-current {
      opacity: 1;
    }
	.section1{
		width:40%;
		margin:0 auto;
		margin-top:50px;
		height:600px;
	}
		.section2{
		width:38%;
		margin:0 auto;
		margin-top:50px;
		height:100px;
	}
	img{
		width:100%;
		height:100%;
	}
  </style>
</head>
<body>


<div class='section1'>
  <section class="slider-for" >
<?

			while ($row = mysql_fetch_array($recent_product)) {
			
					$img = '<img src="./update/uploads/'.$row['p_img'].'" >';
					$title= $row['p_title'];
					$content=$row['p_content'];
					$regidate=$row['p_regidate'];
				?>
				<div>
					<?=$img?>
					
				</div>


				<?}?>
		
		
	

  </section>
  </div>
  
  <div class='section2'>
  <section class="slider-nav" >

	<?php while($row=mysql_fetch_row($recent_product)){ 
	
		$img = '<img src="./update/uploads/'.$row['p_img'].'" >';
					$title= $row['p_title'];
					$content=$row['p_content'];
					$regidate=$row['p_regidate'];

	?>
		<div>
			<?=$img?>
		</div>
	<?}?>
	
  </section>
  </div>


  <script type="text/javascript">
    $(document).on('ready', function() {
		

$('.slider-for').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  fade: true,
  asNavFor: '.slider-nav'
});
$('.slider-nav').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  asNavFor: '.slider-for',
  dots: true,
  centerMode: true,
  focusOnSelect: true
});



 

    });
</script>

</body>
</html>
