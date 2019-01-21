<?php
include('./ini_config.php');
include('./core/common.php');



	$proc = ' select   *  from mari_t_product order by p_regidate desc';
	//$proc_list = sql_query($proc,false);
	$proc_list = mysql_query($proc);
	
	print_r($proc_list);
	//var_dump($proc_list);
//	die;

?>