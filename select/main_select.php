<?php
include('./ini_config.php');
include('./core/common.php');



	$recent_sql = 'SELECT * FROM mari_t_product WHERE p_regidate ORDER BY p_regidate DESC LIMIT 1;';
	$rececnt_product = sql_fetch($recent_sql,false);




?>
