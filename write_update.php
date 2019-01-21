<?php
include('../core/common.php');
include('../ini_config.php');


// 넘어오는 post값  셋팅 ===========================================================================================
//@extract($_POST);
$p_id =  $_POST['p_id'];
$p_title =  $_POST['p_title'];
$p_content =  $_POST['p_content'];
$p_regidate = date('Y-m-d');
//==================================================================================================================





//디렉토리 생성및 권한설정==========================================================================================
$mydir = "./uploads"; 
 if(@mkdir($mydir, 0777)) { 
    if(is_dir($mydir)) { 
        @chmod($mydir, 0777); 
        echo "${mydir} 디렉토리를 생성하였습니다."; 
    }else{
		
	}
 }
//==========================================================================================


$file_name = $_FILES['p_img']['name'];                // 업로드한 파일명

$file_tmp_name = $_FILES['p_img']['tmp_name'];   // 임시 디렉토리에 저장된 파일명

$file_size = $_FILES['p_img']['size'];                 // 업로드한 파일의 크기

$mimeType = $_FILES['p_img']['type'];                 // 업로드한 파일의 MIME Type

$save_dir = './uploads/';

$file_time = time(); 

$file_name =basename($_FILES['p_img']['name']);

$change_file_name = "file_".$file_time.".".$file_name;	 // 실제 업로드 될 파일명 생성	(본인이 원하는 파일명 지정 가능)	 
	


//파일을 저장할 디렉토리 및 파일명 전체 경로

   $dest_url = $save_dir . $change_file_name;







if(!move_uploaded_file($file_tmp_name, $dest_url))

   {
	alert("파일을 지정한 디렉토리에 업로드하는데 실패했습니다.",'../write.php');

   }else{
	
		if($connect){

			
			$product_sql = " insert into mari_t_product set
							p_id = '$p_id',
							p_title = '$p_title',
							p_content= '$p_content',
							p_img= '$change_file_name',
							p_regidate= '$p_regidate'
							";


			mysql_query($product_sql);
			alert("등록이 완료 되었습니다.",'../portfolio.php');
				
		}else{
			alert("DB 연결을 확인해주세요.","history:back(0);");
		}
	

	
   }



?>