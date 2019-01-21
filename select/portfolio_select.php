<!--
===============================================
DB  
product (작품) . comment(댓글)  member(로그인)


1. 작품   
2.comment
3.like
4. link
5.채팅
===============================================

-->
<?php

include('./ini_config.php');
include('./core/common.php');



	$recent_sql = 'SELECT * FROM mari_t_product WHERE p_regidate ORDER BY p_regidate DESC';
	$recent_product = sql_query($recent_sql,false);


	



?>