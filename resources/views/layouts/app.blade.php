<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        @php
            $tabtitle = config('titles.' . Route::currentRouteName(),'FalconProksa') .' | '. env('APP_NAME');
        @endphp
        <title>{{ $tabtitle }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        {{-- Custom Css --}}
        <link rel="stylesheet" href="{{asset('asset/css/style.css')}}">
        {{-- Aos Cdn --}}
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        {{-- Font --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"/>
        
        
        <link href="https://fonts.googleapis.com/css2?family=Geist+Mono:wght@100..900&family=Literata:ital,opsz,wght@0,7..72,200..900;1,7..72,200..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
        

        
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
    @stack('script')
    </body>
</html>
