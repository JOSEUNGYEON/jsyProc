<?php 
session_start();//세션초기화

//세션 쿠키 저장값 날리기=====================================================
if (isset($_COOKIE[session_name('login_name')])) {
    setcookie(session_name('login_name'), '', time()-42000, '/');
	setcookie(session_name('login_img'), '', time()-42000, '/');
}

//모든 세션 파괴===============================================================
session_destroy();
//=============================================================================
?>


<meta http-equiv="Content-Type" content="text/html"; charset="utf-8">
<?

include('../core/common.php');

	//echo "날리기전 :".$_SESSION['login_name'];
//	session_unset($_SESSION['login_name']);
//	session_unset($_SESSION['login_img']);
//	session_commit();
	//echo "날리기후 :".$_SESSION['login_name'];
	
	// 세션 체크후 location===================
	if(isset($_SESSION['login_name'])){
	
	alert('로그아웃 되었습니다!','../index.php');
	}else{
	alert('다시 시도해주세요.','../index.php');

	}
?>