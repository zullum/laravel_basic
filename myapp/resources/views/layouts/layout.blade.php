<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Pizzas</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        </style>

        {{-- Styles  --}}
        <link rel="stylesheet" href="/css/main.css">
    </head>
    <body class="antialiased">

        @yield('content')
        <footer>
            Copyright Zullums Pizza House 2021
        </footer>
    </body>
</html>