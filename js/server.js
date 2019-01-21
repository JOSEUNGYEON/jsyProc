var express = require('express');
var app = express();
var http = require('http').Server(app); //1
var io = require('socket.io')(http);    //1

app.get('/',function(req, res){  //2   모든 request는 client에 response 하도록
  res.sendFile(__dirname + '../client.php');
});

var count=1;
io.on('connection', function(socket){ //3 웹사이트에 접속하면 자동 실행
  console.log('user connected: ', socket.id);  //3-1
  var name = "user" + count++;                 //3-1
  io.to(socket.id).emit('change name',name);   //3-1

  socket.on('disconnect', function(){ //3-2  소켓에 전달된 이벤트를 인식해 함수를 실행시킴
    console.log('user disconnected: ', socket.id);
  });

  socket.on('send message', function(name,text){ //3-3  send 이벤트 함수 
    var msg = name + ' : ' + text;
    console.log(msg);
    io.emit('receive message', msg);
  });
});

http.listen(3000, function(){ //4
  console.log('server on!');
});