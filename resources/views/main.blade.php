<!DOCTYPE html>
<html lang="hu">
    <head>

        @include('partials._head')

    </head>

    <body id="home">

        @include('partials._messages')

        @include('partials._nav')

        @yield('content')

        @include('partials._callBlock')

        @include('partials._footer')

        @include('partials._scripts')

        @yield('scripts')

    </body>
</html>