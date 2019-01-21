<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Vidbg.js Demo</title>
  <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
  <link href="../css/fullscreenDemo.css" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<!--   리캡챠 -->
  <script src='https://www.google.com/recaptcha/api.js'></script>


</head>

<body>

  <div class="block-container">
    <div class="block">
      <h1>Video Background</h1>
      <h3>Fullscreen applied to <body> </h3>
	  <div class="g-recaptcha" data-sitekey="6Lcvzn8UAAAAAFXz-bq-YabQMoaxUglwX1rynZTR"></div>

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

  <script src="../js/vidbg.js"></script>

</body>
</html>
