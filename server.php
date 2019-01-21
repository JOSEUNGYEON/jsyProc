

<?php

define("_IP",    "192.168.0.60");
define("_PORT",  "88");

echo '<xmp>'; 



$sSock      = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
socket_bind($sSock, _IP, _PORT); //주소및 포트번호 부여
socket_listen($sSock);
while($cSock = socket_accept($sSock))
{
    socket_getpeername($cSock, $addr, $port);
    echo "SERVER >> client connected $addr:$port \n";
    $date = date("Y/m/d H:i:s");
    socket_write($cSock, $date);
    socket_close($cSock);
    echo "SERVER >> client Close.\n";
}
?>
<!-- 서버는 계속 클라이언트를 기다리는 상태 -->