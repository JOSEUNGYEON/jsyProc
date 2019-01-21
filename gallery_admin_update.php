<?php

//print_r($_REQUEST);
$idx = $_REQUEST[idx];

 sql_query('delete * from mari_t_product where p_idx ="'.$idx.'"' );

 alert("삭제 완료 되었습니다.",'../gallery_admin.php');

?>