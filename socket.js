/**
 * Created by m on 12/3/15.
 */
var app = require('express')();
var http = require('http').Server(app);
var io = require('socket.io')(http);
var Redis = require('ioredis');
var redis = new Redis();

redis.subscribe('test-channel', function(err, count) {

});

redis.on('message', function(channel, message) {

    console.log('Message Receive', message);
    message = JSON.parse(message);
    io.emit(channel+ ':' + message.event, message.data);

});

http.listen(3000, function() {
    console.log('Listening port 3000');
});