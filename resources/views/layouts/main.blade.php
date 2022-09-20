<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{--CSS--}}
    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css"/>
    {{--JS--}}
    <script defer src="{{asset('js/app.js')}}"></script>
    <title>Trains</title>
</head>
<body>
    <div class="container">
        @yield(content)

    </div>
    
</body>
</html>