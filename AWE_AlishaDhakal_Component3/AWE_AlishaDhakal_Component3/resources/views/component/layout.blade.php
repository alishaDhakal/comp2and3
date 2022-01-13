<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>LARAVEL</title>
    <link rel="stylesheet" href="{{asset('css/fontawesome-5.5/css/all.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/slick/slick.css')}}">
    <link rel="stylesheet" href="{{asset('css/slick/slick-theme.css')}}">
    <link rel="stylesheet" href="{{asset('magnific-popup/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />

</head>
<body>
@include('include.header')
@yield('content')
@include('include.footer')
<script src="{{asset('js/jquery-1.9.1.min.js')}}"></script>
<script src="{{asset('slick/slick.min.js')}}"></script>
<script src="{{asset('magnific-popup/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('js/jquery.singlePageNav.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/style.js')}}"></script>
</body>
</html>
