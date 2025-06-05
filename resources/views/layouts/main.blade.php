<!DOCTYPE html>
<html lang="it-IT">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="On Hair 2.0, Barber shop a Messina">

        <title>On Hair 2.0 - Accendiamo il tuo stile</title>

        <!-- Critical CSS for above-the-fold content -->
        @vite(['resources/css/critical.scss'])

        <!-- Fonts -->
        <!-- TODO maybe not using a CDN and have the font already in the website? -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Teko:wght@300..700&display=swap');
        </style>
    </head>
    <body>
        @include('layouts.header')
        @yield('content')
        @include('layouts.footer')

        <!-- Non-critical styles and scripts -->
        @stack('styles')
    </body>
</html>
