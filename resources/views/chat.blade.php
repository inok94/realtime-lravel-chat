<html xmlns:v-on="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <style>
        .list-group {
            overflow-y:scroll;
            height: 200px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row" id="app">
        <div class="offset-4 col-md-4">
            <li class="list-group-item active">Chat room</li>
            <ul class="list-group" v-chat-scroll>
                <message
                    v-for="value in chat.message"
                    :key=value.index
                    color="success"
                >@{{value}}</message>
            </ul>
            <input v-model="message" @keypress.enter="send"
                   type="text" class="form-control" placeholder="Type your message">
        </div>
    </div>
</div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
