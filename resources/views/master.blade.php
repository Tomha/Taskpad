<!doctype html>
<html>
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title')</title>
        
        <link rel="stylesheet" href="{{ asset('css/master.css') }}">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
        @yield('css')

    </head>
    <body>
        <div id="page-container">
        
            <div id="page-header">
                <div class="container" style="height:100%">
                    <a id="header-title" href="/">Taskpad</a>
                    @if(auth()->check())
                        <a class="header-button btn btn-primary" id="nav-button" href="/logout">Logout</a>
                    @else
                        <a class="header-button btn btn-primary" id="nav-button" href="/login">Log In</a>
                        <a class="header-button btn btn-primary" id="nav-button" href="/register">Register</a>
                    @endif
                </div>
             </div>
                
            <div id="page-content" class="container">
                @yield('content')
            </div>

            <footer id="page-footer">
                <p id="legal">© Taskpad 2017</p>
                <a id="github-link" href="https://github.com/tomha/taskpad">Visit on Github</a>
            </footer>
            
        </div>


    </body>
</html>
