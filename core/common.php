
<?php

//해당 메시지를 띄우고 해당 URL 로 이동
function goto_caution($msg, $url){
 $str = "<script>";
 $str .= "alert('{$msg}');";
 $str .= "location.href = '{$url}';";
 $str .= "</script>";
 echo("$str");
 exit;
}

//해당 메시지를 띄우고 그전 페이지로 이동
function back_caution($msg){
 $str = "<script>";
 $str .= "alert('{$msg}');";
 $str .= "history.back();";
 $str .= "</script>";
 echo("$str");
 exit;
}



function alert($msg,$url){
 $str = "<script>";
 $str .= "alert('{$msg}');";
 $str .="location.href = '{$url}';";
 $str .= "</script>";
 echo("$str");
 exit;
}



function sql_query($sql, $error=MARI_DISPLAY_SQL_ERROR)
{
    // Blind SQL Injection 취약점 해결
    $sql = trim($sql);
    // union의 사용을 허락하지 않습니다.
    $sql = preg_replace("#^select.*from.*union.*#i", "select 1", $sql);
    // `information_schema` DB로의 접근을 허락하지 않습니다.
    $sql = preg_replace("#^select.*from.*where.*`?information_schema`?.*#i", "select 1", $sql);
    if ($error)
        $result = @mysql_query($sql) or die("<p>$sql<p>" . mysql_errno() . " : " .  mysql_error() . "<p>error file : $_SERVER[PHP_SELF]");
    else
        $result = @mysql_query($sql);
    return $result;
}


// 쿼리를 실행한 후 결과값에서 한행을 얻는다.
function sql_fetch($sql, $error=MARI_DISPLAY_SQL_ERROR)
{
    $result = sql_query($sql, $error);
    //$row = @sql_fetch_array($result) or die("<p>$sql<p>" . mysql_errno() . " : " .  mysql_error() . "<p>error file : $_SERVER['PHP_SELF']");
    $row = sql_fetch_array($result);
    return $row;
}


// 결과값에서 한행 연관배열(이름으로)로 얻는다.
function sql_fetch_array($result)
{
    $row = @mysql_fetch_assoc($result);
    return $row;
}


// $result에 대한 메모리(memory)에 있는 내용을 모두 제거한다.
// sql_free_result()는 결과로부터 얻은 질의 값이 커서 많은 메모리를 사용할 염려가 있을 때 사용된다.
// 단, 결과 값은 스크립트(script) 실행부가 종료되면서 메모리에서 자동적으로 지워진다.
function sql_free_result($result)
{
    return mysql_free_result($result);
}


function sql_password($value)
{
    // mysql 4.0x 이하 버전에서는 password() 함수의 결과가 16bytes
    // mysql 4.1x 이상 버전에서는 password() 함수의 결과가 41bytes
    $row = sql_fetch(" select password('$value') as pass ");
    return $row['pass'];
}




?>