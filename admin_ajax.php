<?




include('./ini_config.php');
include('./core/common.php');


//print_r($_REQUEST);
$idx = $_REQUEST['idx'];

$search_sql = 'select * from mari_t_product where p_idx="'.$idx.'"' ;
$search_result = sql_fetch($search_sql,false);
//print_r($search_result);

$addhtml = '<form  name ="galleryModify" action="./update/gallery_admin_update.php">';
$addhtml = '<div class="row mt">';
$addhtml .= '<div class="col-md-12">';
$addhtml .= '<div class="content-panel">';
$addhtml .='<table class="table table-striped table-advance table-hover">';
$addhtml .='<h4><i class="fa fa-angle-right"></i> MODIFY</h4>';
$addhtml .='<hr>';
$addhtml .='<thead>';
$addhtml .='<tr>';
$addhtml .='<th><i class=" fa fa-edit"></i> TITLE</th>';
$addhtml .='<th class="hidden-phone"> CONTENT</th>';
$addhtml .='<th class="hidden-phone"> IMG</th>';
$addhtml .='</tr>';
$addhtml .='<tr>';
$addhtml .='<td><input type="text" name="p_title" value= " '.$search_result[p_title].' " ></td>';
$addhtml .='<td><input type="text" name="p_content" value= " '.$search_result[p_content].' " ></td>';
$addhtml .='<td><input type="file" name="p_img" value= " '.$search_result["p_img"].' " >';
$addhtml .= '<div class="img_tool"><img src="./update/uploads/'.$search_result['p_img'].'" ></div>';
$addhtml .='</td>';
$addhtml .='<td>';
$addhtml .='<button name="confirm" value="저장">수정';
$addhtml .='</td>';
$addhtml .='</tr>';
$addhtml .='</table>';
$addhtml .='</div>';
$addhtml .='</div>';
$addhtml .='</div>';
$addhtml .='</form>';



    echo $addhtml;
	
                







?>