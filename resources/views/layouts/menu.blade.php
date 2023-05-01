<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/x-icon" href="https://www.nicepng.com/png/full/21-212785_pink-and-yellow-hibiscus-flower-hawaiian-flower-clipart.png">
        <title>{{config('app.name', 'ACTIVIDAD 11')}}</title>

        <!-- Stylesheet -->
        <link href="{{asset('css/app.css')}}" rel="stylesheet">
    </head>
    <body>
        @include('nav.navbar')

        <div class="container">
            @yield('content')
        </div>

        @include('nav.footer')
    </body>
</html>