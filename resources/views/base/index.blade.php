<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    @include('base.head')

    <body style="background-color: #e2e8f0">
        @include('base.nav')

        @yield('content')

        @include('base.footer')
    </body>
</html>
