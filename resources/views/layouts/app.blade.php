<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        {{-- Custom Css --}}
        <link rel="stylesheet" href="{{asset('asset/css/style.css')}}">
        {{-- Aos Cdn --}}
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @stack('style')
    </head>
    <body class="font-sans antialiased">
        <main>
            {{ $slot }}
        </main>


        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
    </body>
</html>
@stack('script')
