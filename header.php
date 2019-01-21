<?php
session_start();

	include('./ini_config.php');
	$url=basename($_SERVER["PHP_SELF"]);
?>
<meta http-equiv="Content-Type" content="text/html"; charset="utf-8">




<!-- 라이브러리 모음-------------------------------------------------------------------------------------------------------------------  -->
<script src="https://code.jquery.com/jquery-latest.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://developers.kakao.com/sdk/js/kakao.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<!-- 라이브러리 모음-------------------------------------------------------------------------------------------------------------------  -->


<link rel="stylesheet" type="text/css" href="./css/header.css"/>
<script src="./js/header.js"></script>




<header>
  <title>DISIGN PARK SO JIN</title>

  <div class="container">
    <span id="home">
		<span class="ion-camera">
			<a href='./index.php'>
				<img src="./image/logo.png">
			</a>
		</span>
	</span>


    <div class="box">
      <ul class='right_menu'>
        <li><a href="./portfolio.php">portfolio</a></li>
			<li><a href="./slide.php">Blog</a></li>
			<li><a href="./contact.php">Contact</a></li>
			<li class='instar_header'><a href="./instargram.php"><img src='./image/instar_header.png'></a></li>
      </ul>

	  <ul class='left_menu'>
		<? if($_SESSION['login_name']){?>
			<li><a href="./admin.php">admin</a></li>
			<li><a href="./write.php">WRITE</a></li>
			<li class='join_btn'><a onclick='logout_click()'>Logout</a></li>
		<?}else{?>
			<li class='login_btn'><a onclick='login_click()'>Login</a></li>
		<?}?>

	  </ul>

    </div>

    <span id="menu">
		<span class="ion-navicon-round">
			<img src="./image/menu.png">
		</span>
	</span>

  </div>
</header>


<!-- 카카오 로그인 데이터 전송 -->
<form id ='login_form'action='./update/login_update.php' method='POST' >
	<input type='hidden' id='login_name' name='login_name'>
	<input type='hidden' id='login_img' name='login_img'>
</form>



<!-- 카카오 로그인  -->

<script>


	function login_click(){
  //<![CDATA[
    // 사용할 앱의 JavaScript 키를 설정해 주세요.
    Kakao.init('e28aaa059c654ef30a4076cdde432ef5');
    // 카카오 로그인 버튼을 생성합니다.
	Kakao.Auth.login({
      
      success: function(authObj) {
       throughTalk:false,
      Kakao.API.request({
		
       url: '/v1/user/me',
       success: function(res) {

			
			var login_name = JSON.stringify(res.properties.nickname);
			var login_img = JSON.stringify(res.properties.thumbnail_image);



  $('#login_name').val(login_name);
  $('#login_img').val(login_img);

  var login_name = $('input[name=login_name]').val();
    var login_img = $('input[name=login_img]').val();
	console.log(login_name);
		console.log(login_img);


  

//			
//             alert(JSON.stringify(res)); //<---- kakao.api.request 에서 불러온 결과값 json형태로 출력
//             alert(JSON.stringify(authObj)); //<----Kakao.Auth.createLoginButton에서 불러온 결과값 json형태로 출력
 
             console.log(res.id);//<---- 콘솔 로그에 id 정보 출력(id는 res안에 있기 때문에  res.id 로 불러온다)
             console.log(res.thumbnail_image);//<---- 콘솔 로그에 email 정보 출력 
             //console.log(res.profile_image);
             console.log(res.properties['nickname']);//<---- 콘솔 로그에 닉네임 출력(properties에 있는 nickname 접근 
             // res.properties.nickname으로도 접근 가능 )
             //console.log(res.created);
             //console.log(res.status);
             console.log(authObj.access_token);//<---- 콘솔 로그에 토큰값 출력
 
           // $('#kakao_id').val(res.properties.id);
            //$('#kakao_nickname').val(res.properties.nickname);  
			
            var d = new Date();
			
//            document.write(res.properties.nickname+"님 환영합니다.");
//            document.write('');
//            document.write('접속시간 : '+ d.getFullYear()+'/'+d.getMonth()+'/'+d.getDate()+'/'+d.getHours()+':'+d.getMinutes()+':'+d.getSeconds());
// 
//            document.write('');
//            document.write(res.id);
//             





				$('#login_form').submit();
				//window.location.href='./update/login_update.php';
	
//				location.href='index.php';
	
			
 
           }
 
         })
    
      },
      fail: function(err) {
         alert(JSON.stringify(err));
      }
    });
}

function logout_click(){
		
//	Kakao.Auth.logout(function() { 
//		setTimeout(function(){
//		location.href="./update/logout_update.php"; 
//		},1000);//로그아웃 처리되는 타임을 임시적으로 1000설정
//	});
		setTimeout(function(){
			alert('세션이 만료되어 로그아웃 되었습니다.');
		location.href="./update/logout_update.php"; 
		},1000)
}


</script>