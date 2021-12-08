<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('html.head')
    <body>
        <div class="container">
            <div class="header_box">
                @yield('header')
            </div>
            <div class="content">
                @yield('navLeft')
                @yield('content')
            </div>
            <footer class="footer">
                @yield('footer')
            </footer>
        </div>
    </body>
</html>
