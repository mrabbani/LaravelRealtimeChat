@extends('layouts.master')
@section('content')
    <p id="power">0</p>
    @endsection
@section('footer')
    <script src="https://cdn.socket.io/socket.io-1.3.7.js"></script>
    <script>
        var socket = io('http://localhost:3000');
//        var socket = io('http://192.168.10.10:3000');
        socket.on("test-channel:App\\Events\\NotificationEvent", function(message){
            // increase the power everytime we load test route

            console.log(message);
            $('#power').text(parseInt($('#power').text()) + parseInt(message.data.power));
        });
    </script>
    @endsection