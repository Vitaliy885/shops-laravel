<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('') }}">
    <link rel="stylesheet" href="{{ asset('/css/header.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/footer.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/common.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/home.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/slicknav.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    @stack('styles')
</head>
<body>
@include('layout.header')
@if(Request::is('/'))
    @include('components.slider')
@endif
@if(!Request::is('/'))
    @include('components.slider-area')
@endif
@include('layout.content')
@include('layout.footer')
</body>
</html>
