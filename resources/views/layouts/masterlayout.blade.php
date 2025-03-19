<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KWFPL - @yield('title','Website')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @stack('style')

</head>

<body>
    <div id="wrapper">
        <div id="header">
            <h1>Kushwaha web formate private limited</h1>
        </div>
        <div id="menu">
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="/post">Post</a></li>
            </ul>
        </div>

        <div id="content">
            @hasSection('content')
                @yield('content')
            @else
            <h2>No Content Found</h2>
            @endif
        </div>

        <div id="sidebar">
            @section('sidebar')
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/about">About</a></li>
                    <li><a href="/post">Post</a></li>
                </ul>
            @show
        </div>
        <div id="footer">
            KWFPL@copyright 2025.
        </div>
    </div>

    @stack('scripts')

</body>
</html>