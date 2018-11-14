<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{--custom css--}}
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">

    {{--Font--}}
    <link href="{{asset('https://fonts.googleapis.com/css?family=Lato:900i')}}" rel="stylesheet">

    {{--Font Awesome--}}
    <link rel="stylesheet" href="{{asset('https://use.fontawesome.com/releases/v5.2.0/css/all.css')}}"
          integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css')}}">

    {{--Style boostrap 4.0.0 --}}
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">

    {{--javascript boostrap 4.0.0--}}
    <script src="{{asset('https://code.jquery.com/jquery-3.3.1.slim.min.js')}}"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>

    <script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js')}}"
            integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
            crossorigin="anonymous"></script>
    <script src="{{asset('https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js')}}"
            integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
            crossorigin="anonymous"></script>
    
    @yield('head')
</head>
<body>
@include('Frontend.Partail.header')

@yield('content')

@include('Frontend.Partail.footer')

@include('Frontend.Pages.pop_up')
<script src="{{asset('http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js')}}"></script>

<script type="text/javascript" src="{{asset('js/javascript.js')}}"></script>

@yield('extra-js')
</body>
</html>