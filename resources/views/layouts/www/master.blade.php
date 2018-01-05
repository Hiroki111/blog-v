<!doctype html>
<html>
<head>
    <title>@yield('title')</title>
    <link href="{{ asset('css/www.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <script src="{{ asset('js/lib.js') }}"></script>

</head>
<body>
    <header>
        <a href="/" id="logo_link">
            <img id="logo_image" src="/storage/template/logo.jpeg">
            <h1 id="header_title">Hiroki's Blog</h1>
            <p id="subheader_title">Web development with Laravel, React.js and more</p>
        </a>
    </header>
    <div id="container">
        <div id="posts">
            @yield('content')
        </div>
        <div id="side_bar">
            <a href="/About">
                <h4 style="font-weight: bold;">About myself</h4>
                <img id="about_image" src="/storage/template/about.png">
            </a>
        </div>
    </div>
</body>
</html>
