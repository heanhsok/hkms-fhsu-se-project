<!DOCTYPE html>
<html lang="en">
    <head>
        @include('includes.head')
    </head>
    <body>
        <header>
            @include ('includes.nav-bar')
            @include ('includes.sidebar')
        </header>
        @yield('content')
    </body>
</html>
