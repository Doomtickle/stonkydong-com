<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>StonkyDong | Because Fuck You</title>
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    </head>
    <body class="font-sans">
        <main class="container w-screen h-screen px-4 mx-auto sm:px-6 lg:px-8 background">
            @yield('content')
        </main>
    </body>
    <script src="{{mix('js/app.js')}}" />
</html>
