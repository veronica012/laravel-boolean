<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>@yield('page-title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        @include('elements.navbar')
        @yield('content')
        @include('elements.footer')
         <script src="{{ asset('js/app.js') }}" charset="utf-8"></script>
    </body>
</html>
