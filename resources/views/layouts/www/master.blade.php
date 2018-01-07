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
    @include('layouts.www.header')
    @include('layouts.www.navigation')
    <div id="container">
        <div id="posts">
            @yield('content')
        </div>
        <div id="sidebar">
            <div>
                <h3 class="sidebar_header">Topics</h3>
                @foreach($categories as $category)
                <h4 class="sidebar_topic">
                    <a href="/category/{{$category->id}}" class="sidebar_topic_link">
                        {{$category->name}}
                    </a>
                </h4>
                @endforeach
            </div>
        </div>
    </div>
</body>
</html>
