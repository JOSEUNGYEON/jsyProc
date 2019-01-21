      
	$(document).ready(function(){
		
		//업로드 파일 미리보기
		var fileTarget = $('.upload-hidden');

		fileTarget.on('change', function(){ // 값이 변경되면

		if(window.FileReader){ // modern browser
			var filename = $(this)[0].files[0].name; } else { // old IE
			var filename = $(this).val().split('/').pop().split('\\').pop(); // 파일명만 추출
			} // 추출한 파일명 삽입 
				$(this).siblings('.upload-name').val(filename); 
			}); 
			var sel_file;
			   $("#input_img").on("change", handleImgFileSelect);
		}); 

 
        function handleImgFileSelect(e) {
            var files = e.target.files;
            var filesArr = Array.prototype.slice.call(files);
 
            filesArr.forEach(function(f) {
                if(!f.type.match("image.*")) {
                    alert("확장자는 이미지 확장자만 가능합니다.");
                    return;
                }
 
                sel_file = f;
 
                var reader = new FileReader();
                reader.onload = function(e) {
                    $("#img").attr("src", e.target.result);
                }
                reader.readAsDataURL(f);
            });
        }
	
	$('#submit-btn').click(function(){
		alert("aaa");
		$('#form_write').submit();
	});