<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ $title ?? 'Mappia' }}</title>
        <script  src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
        @vite(['resources/css/app.css','resources/js/app.js'])
    </head>
    <body>
        @yield('contents')
    </body>
</html>
