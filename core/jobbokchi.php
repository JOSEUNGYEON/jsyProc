
<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
date_default_timezone_set('Asia/Seoul');


 // include 된 모든 파일을 보여줌 .

$includes = get_included_files();

  foreach($includes as $filename){
    echo $filename . "<br>";

  }



//콘솔로 디버깅하기
function debug_to_console( $data ) {
    $output = $data;
    if ( is_array( $output ) )
        $output = implode( ',', $output);

    echo "<script>console.log( 'Debug Objects: " . $output . "' );</script>";
}

$includes = get_included_files();

  foreach($includes as $filename){
    echo $filename . "<br>";

  }



function fn_js_d($str){

        $return_str                 = "";

        if (is_object($str)) {
            $str                    = (array) $str;

        }

        ?>
        <script type="text/javascript">

            function dump(arr,level) {
                
                var dumped_text     = "";
                
                if(!level) {
                    level           = 0;
                    
                }
                var level_padding   = "";
                
                for(var j=0;j<level+1;j++) {
                    level_padding += "    ";
                    
                }

                if(typeof(arr) == 'object') { //Array/Hashes/Objects
                    
                    for(var item in arr) {
                        var value   = arr[item];

                        if(typeof(value) == 'object') { //If it is an array,
                            dumped_text     += level_padding + "'" + item + "' ...\n";
                            dumped_text     += dump(value,level+1);
                        } else {
                            dumped_text     += level_padding + "'" + item + "' => \"" + value + "\"\n";
                        }
                    }
                } else { //Stings/Chars/Numbers etc.
                    /*                  dumped_text = "===>"+arr+"<===("+typeof(arr)+")"; */
                    dumped_text     = arr;

                }
                return dumped_text;
            }

            var ar                  = <?=json_encode($str); ?>;
            console.log(dump(ar));
            
        </script>

        <?php

    }

//메타태그를 이용한 url 이동
function goto_url($url)
{
    $url = str_replace("&amp;", "&", $url);
    //echo "<script> location.replace('$url'); </script>";

    if (!headers_sent())
        header('Location: '.$url);
    else {
        echo '<script>';
        echo 'location.replace("'.$url.'");';
        echo '</script>';
        echo '<noscript>';
        echo '<meta http-equiv="refresh" content="0;url='.$url.'" />';
        echo '</noscript>';
    }
    exit;
}



?>