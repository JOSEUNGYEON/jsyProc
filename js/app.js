/* 설치한 express 모듈 불러오기 */
const express = require('express')

/* 설치한 socket.io 모듈 불러오기 */
const socket = require('socket.io')

/* Node.js 기본 내장 모듈 불러오기 */
const http = require('http')

/* Node.js 기본 내장 모듈 불러오기 */
const fs = require('fs')

/* express 객체 생성 */
const app = express()

/* express http 서버 생성 */
const server = http.createServer(app)

/* 생성된 서버를 socket.io에 바인딩 */
const io = socket(server)

app.use('/css', express.static('./static/css'))
app.use('/js', express.static('./static/js'))

/* Get 방식으로 / 경로에 접속하면 실행 됨 */
app.get('/', function(request, response) {
  fs.readFile('./static/index.php', function(err, data) {
    if(err) {
      response.send('에러')
    } else {
      response.writeHead(200, {'Content-Type':'text/html'})
      response.write(data)
      response.end()
    }
  })
})

io.sockets.on('connection', function(socket) {

socket.on('newUser',function(name){
  
    console.log(name+' 님이 접속하셨습니다')
    
    //소켓에 접속자 저장
    socket.name = name
    //모든 소켓에 전송 (접속자들에게)  
    io.sockets.emit('update',{type:'connect',name:'SERVER',message:name+' 님이 접속하셨습니다'})
})

 socket.on('message',function(data){
     //누가 보냈는지 추가해줌 
     data.name = socket.name
     
     console.log(data)
     //io.sockets.emit() = 모든 유저(본인 포함)
    //socket.broadcast.emit() = 본인을 제외한 나머지 모두

     //보낸 사람을 제외한 나머지에게 데이터 전송
     socket.broadcast.emit('update',data);
 })



  socket.on('disconnect', function() {
   
    console.log(socket.name+' 님이 나가셨습니다.')

    //나가는 사람을 제외한 나머지에게 전송
    socket.broadcast.emit('update',{type:'disconnect',name:'SERVER',message:socket.name+' 님이 나가셨습니다.'})
  })
})

/* 서버를 8080 포트로 listen */
server.listen(8080, function() {
  console.log('서버 실행 중..')
})