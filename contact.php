<?php

include('header.php');

?>

<script src="./js/app.js"></script>
<script src="./js/socket.io.js"></script>

<style>

	.contact_div{
/*		border: 1px solid red;*/
		width:600px;
		height:185px;
		margin:0 auto;
		margin-top:350px;
	}
.contact_div img{
	margin:0 auto;
	display: flex;


}
.font_cap{
	font-size:13px;
	font-weight:700;
	color: #c3c3c3;
	text-align:center;
	    margin-top: 50px;
}
hr.title{
width: 55px;
    border: solid 0.5px #e0d7d7;
    margin-top: 35px;
}
.chatting{

	    margin-left: 245px;

}
.chatting img{
	
	    display: table-cell;
}

</style>


<div class="contact_div">
	
	<div class='chatting'>
	<a onclick='chatting_pop()'><img src='../image/logo.png'></a>
	</div>



	<img src='../image/contact_title.png'>
	<hr class='title'> 
	<p class='font_cap'>
		E-mail : 1994maiky@gmail.com<br>
		    www.behance.net/maiky-<br>
		 www.instagram.com/1994maiky
		
	</p>
</div>

<script>
	function chatting_pop(){
		console.log('클릭펑션확인');

}





</script>
