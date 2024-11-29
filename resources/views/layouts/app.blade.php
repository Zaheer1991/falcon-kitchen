<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Discover high-quality kitchen equipment at {{ env('APP_NAME') }}. From commercial ovens to durable cookware, we provide everything to elevate your culinary space. Shop now for the best prices and expert support!">
    <meta name="keywords" content="kitchen equipment, commercial kitchen tools, professional cookware, kitchen appliances, cooking equipment, restaurant supplies, high-quality kitchen tools, culinary equipment, durable cookware, affordable kitchen tools">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css">

    <link rel="icon" href="{{ asset('assets/favicon.ico') }}" type="image/x-icon">
    
    @php
        $tabtitle = config('titles.' . Route::currentRouteName(), 'FalconProksa') . ' | ' . env('APP_NAME');
    @endphp
    <title>{{ $tabtitle }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">

    <!-- Animation on Scroll (AOS) -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />

    {{-- Swiper Slider --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.3.2/swiper-bundle.min.css" />

    <!-- Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body class="font-sans antialiased">
    

    <main>
        {{ $slot }}
    </main>

    

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.3.2/swiper-bundle.min.js"></script>
    <script src="{{asset('asset/js/script.js')}}"></script>
    <script>
        AOS.init({
        duration: 1200,
        easing: 'ease-in-out',
        once: true,
    });
    </script>
    @stack('script')
</body>
</html>
