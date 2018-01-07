<!doctype html>
<html>
<head>
    <title>@yield('title')</title>
    <link href="{{ asset('css/www.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
</head>
<body>
    @include('layouts.www.header')
    @include('layouts.www.navigation')
    <div style="text-align: center;">
        <h1 style="font-size: 500px;">404</h1>
        <p>Not found</p>
    </div>
</body>
</html>
