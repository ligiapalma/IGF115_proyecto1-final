

var io = require('socket.io')(8888);
connections = [];
console.log("Servidor corriendo...");

io.sockets.on('connection', function(socket){

	
	connections.push(socket);
	console.log('Conectado: %s sockets conectado', connections.length);

	//disconnect
	socket.on('disconnect', function(data){
		connections.splice(connections.indexOf(socket), 1);
		console.log('Desconectado: %s sockets conectados', connections.length);
	});

	//enviar un mensaje
	socket.on('sendChatToServer', function(data){
		console.log(data);
		io.sockets.emit('serverChatToClient', {msg: data});
	});
});


