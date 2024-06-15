<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    @include('base.head')

    <body>
        @include('base.nav')

        @yield('content')

        @include('base.footer')
    </body>
</html>
