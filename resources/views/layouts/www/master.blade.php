<!doctype html>
<html>
<head>
    <title>@yield('title')</title>
    <link href="{{ asset('css/www.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <script src="{{ asset('js/lib.js') }}"></script>
    <script src="{{ asset('vendor/code-prettify-master/loader/run_prettify.js') }}"></script>

</head>
<body>
    @include('layouts.www.header')
    @include('layouts.www.navigation')
    <div id="container">
        <div id="posts">
            @yield('content')
        </div>
        <div id="sidebar">
            <div style="display: flex;">
            <!--
            Replace the following form with Google Search
            <form >
                    <input type="password" style="flex: 1;">
                    <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
            </form>
            -->
            </div>
            <div>
                <h3 class="sidebar_header">Categories</h3>
                @foreach($categories as $category)
                <p class="sidebar_topic">
                    <a href="/category/{{$category->id}}" class="sidebar_topic_link">
                        {{$category->name}}
                    </a>
                </p>
                @endforeach
            </div>
        </div>
    </div>
    @include('layouts.www.footer')
</body>
</html>
