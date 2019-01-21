

//NULL값 체크
function isNull(input) { 
	if (input.value == null || input.value == "") { 
		return true; 
	} 
		return false; 
} 


//의미있는 값이 있는지 체크
function isEmpty(input) { 
	if (input.value == null || input.value.replace(/ /gi,"") == "") { 
		return true; 
	} 
		return false; 
} 

//특정문자가 있는지 검사할떄

function containsChars(input,chars) { 
	for (var inx = 0; inx < input.value.length; inx++) { 
		if (chars.indexOf(input.value.charAt(inx)) != -1) 
			return true; 
		} 
			return false; 
} 

//콤마제거

function removeComma(input) { 
	return input.value.replace(/,/gi,""); 
} 

//라디오버튼 체크됐는지 
function hasCheckedRadio(input) { 
	if (input.length > 1) { 
		for (var inx = 0; inx < input.length; inx++) { 
			if (input[inx].checked) return true; 
		} 
	} else { 
		if (input.checked) return true; 
	} 
		return false; 
} 

//한글만 입력받기.
function nr_han(this_s,type){ 
    /* 
    type 
    -> 'c' : 초성 포함 
    -> 's' : 초성 포함 + 공백 포함 
    -> '' : 초성, 공백 무시 
    */ 
    temp_value = this_s.value.toString(); 
    regexp = ''; 
    repexp = ''; 
    switch(type){ 
        case 'c': regexp = /[^ㄱ-ㅎ가-힣]/g;break; 
        case 's': regexp = /[^ㄱ-ㅎ가-힣\s]/g;break; 
        case '':    regexp = /[^가-힣]/g; break; 
        default : regexp = /[^ㄱ-ㅎ가-힣\s]/g; 
    } 
    if(regexp.test(temp_value)) 
    { 
        temp_value = temp_value.replace(regexp,repexp); 
        this_s.value = temp_value; 
    } 
} 

//한글만,숫자만,이메일형식,공백있는지
function check(type){
var regexp ="";
if(type == 'h'){

	regex= "/[a-z0-9]|[ \[\]{}()<>?|`~!@#$%^&*-_+=,.;:\"'\\]/g";

}else if(type == 'n'){

	regex= "/[^0-9]/g";

}else if(type == 's'){
	regex=	"/\s|　/gi";

}else if(type == 'e'){

	regexp =	"/^[A-Za-z0-9_\.\-]+@[A-Za-z0-9\-]+\.[A-Za-z0-9\-]+/";
}
	
v = $(this).val();

if( !regexp.test(v) ) {

	alert("형식에 어긋남");

	$(this).val(v.replace(regexp,''));

}


}

//특수문자가 쓰였는지 확인
function checkSpecial(str) {
	var special_pattern = /[`~!@#$%^&*|\\\'\";:\/?]/gi;
	if (special_pattern.test(str) == true) {
		return 0;
	} else {
		return -1;
	}
}



//폰번호 '-'붙여서 출력
function hp_form_modify(phoneNum) {
	if(isMobile(phoneNum)) {
		var rtnNum;
		var regExp =/(01[016789])([1-9]{1}[0-9]{2,3})([0-9]{4})$/;
		var myArray;
		if(regExp.test(phoneNum)){
			myArray = regExp.exec(phoneNum);
			rtnNum = myArray[1]+'-'+myArray[2]+'-'+myArray[3];
			return rtnNum;
		} else {
			return phoneNum;
		}
	} else {
		return phoneNum;
	}
}



//핸드폰번호 형식체크
function hp_form(phoneNum) {
	var regExp =/(01[016789])([1-9]{1}[0-9]{2,3})([0-9]{4})$/;
	var myArray;
	if(regExp.test(phoneNum)){
		myArray = regExp.exec(phoneNum);
		//   console.log(myArray[1]);
		//   console.log(myArray[2]);
		//   console.log(myArray[3]);
		return true;
	} else {
		return false;
	}
}




function urlParam(name,url){
//				\ 또는 $ name = 'asdasd' 특수 문자 전까지 가져온다
		var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(url);
		console.log(results);
		return results?results[1]:null;
	}


?>
