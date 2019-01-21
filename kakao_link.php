<script type="text/JavaScript" src="https://developers.kakao.com/sdk/js/kakao.min.js"></script>


<script type="text/javascript">
    function shareKakaotalk() {
        Kakao.init("62b3c636b61b7b66895268dfe7a54cb4");      // 사용할 앱의 JavaScript 키를 설정
        Kakao.Link.sendDefault({
              objectType:"feed"
            , content : {
                  title:"소현이누나 신기하지 !?"   // 콘텐츠의 타이틀
                , description:"누나 테스트용ㅇㅇ "   // 콘텐츠 상세설명
                , imageUrl:"http://postfiles12.naver.net/20160312_91/ggaymon_14577899342397WdQA_JPEG/68.jpeg?type=w580"   // 썸네일 이미지
                , link : {
                      mobileWebUrl:"https://www.instagram.com/ironjo175/"   // 모바일 카카오톡에서 사용하는 웹 링크 URL
                    , webUrl:"https://www.instagram.com/ironjo175/" // PC버전 카카오톡에서 사용하는 웹 링크 URL
                }
            }
            , social : {
                  likeCount:0       // LIKE 개수
                , commentCount:0    // 댓글 개수
                , sharedCount:0     // 공유 회수
            }
            , buttons : [
                {
                      title:"클릭해봐요"    // 버튼 제목
                    , link : {
                        mobileWebUrl:"https://www.instagram.com/ironjo175/"   // 모바일 카카오톡에서 사용하는 웹 링크 URL
                      , webUrl:"https://www.instagram.com/ironjo175/" // PC버전 카카오톡에서 사용하는 웹 링크 URL
                    }
                }
            ]
        });
    }
</script>

<body>
    <h1>카카오톡 공유하기</h1>
    <input type="button" onClick="shareKakaotalk();" value="KAKOA Talk으로 공유하기"/>
</body>
