<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Park So Jin</title>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
  
  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>
<?
include('./select/gallery_admin_select.php');

include('./side_bar_admin.php');
?>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Basic Table Examples</h3>
        <div class="row">
          
          <!-- /col-md-12 -->
        
          <!-- /col-md-12 -->
        </div>

        <!-- row -->

        <div class="row mt">
          <div class="col-md-12">
            <div class="content-panel">
              <table class="table table-striped table-advance table-hover">
                <h4><i class="fa fa-angle-right"></i> PORTFOLIO LIST</h4>
                <hr>
                <thead>
                  <tr>
                    <th> NO</th>
					<th><i class=" fa fa-edit"></i> TITLE</th>
                    <th class="hidden-phone"> IMG</th>
                    <th><i><img src='../image/like.png'></i></th>
 
                    <th></th>
                  </tr>
                </thead>
                <tbody>

				
				<? 
				$num = 1 ; 
				while( $row = mysql_fetch_array($proc_list) ){
					
				?>
					
				<tr>	
                    <td>
                      <a href="#"><?=$num?></a>
                    </td>
                    <td class="hidden-phone"><?=$row[p_title]?></td>
                    <td><?=$row['p_img']?></td>
                    <td><span class="label label-info label-mini"><?=$row['p_like']?></span></td>
                    <td>
<!--                       <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button> -->
                      <button class="btn btn-primary btn-xs" onclick='modify(<?=$row["p_idx"]?>)'><i class="fa fa-pencil"></i></button>
                      <button class="btn btn-danger btn-xs" onclick='Delete(<?=$row["p_idx"]?>)'><i class="fa fa-trash-o "></i></button>
                    </td>
				 </tr>
				<?
					$num ++;

				}
				?>
            


                 
                </tbody>
              </table>
            </div>
            <!-- /content-panel -->
          </div>
          <!-- /col-md-12 -->
        </div>
		<div id = 'modify'>
		</div>
        <!-- /row -->
      </section>
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <!--footer start-->
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>

<script>
function modify(idx){

		$.ajax({
			type:'POST',
			url:'../admin_ajax.php',
			data:{
				idx : idx	
			}
		})
			.done( function(data){
			//alert(data);
				$('#modify').html(data);
				$('#modify').slideDown('slow');

		});
					
		

}
function Delete(idx){
	console.log(idx);
	if(confirm('정말 삭제하시겠습니까?')){

		location.href="./update/gallery_admin_update.php?idx="+idx+"" ; 
		
			
	}

}
</script>
</body>

</html>
