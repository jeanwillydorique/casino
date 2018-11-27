<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>App Name - @yield('title')</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link href="{{ asset( 'css/ticket.css' ) }}" rel="stylesheet" type="text/css">
        <link href="{{ asset( 'css/result.css' ) }}" rel="stylesheet" type="text/css">
    </head>
    <body>
            @yield('content')
    
    <script src="{{ asset('js/script.js') }}"></script>
    </body>
</html>