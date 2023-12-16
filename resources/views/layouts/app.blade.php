<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

{{--        <title>{{ config('app.name', 'Laravel') }}</title>--}}

        <title>Wanderlust</title>
        <meta content="" name="description">
        <meta content="" name="keywords">

        <!-- Favicons -->
        <link href="{{asset('assets/img/wanderlust (1).png')}}" rel="icon">
        <link href="{{asset('assets/img/wanderlust (1).png')}}" rel="apple-touch-icon">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Favicons -->
        <link href="{{asset('assets/img/favicon.png')}}" rel="icon">
        <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
        <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
        <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

        <!-- Variables CSS Files. Uncomment your preferred color scheme -->
        <link href="{{asset('assets/css/variables.css')}}" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="{{asset('assets/css/main.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">
        <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>

        <!-- Vendor JS Files -->
        <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js"')}}></script>
        <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
        <script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
        <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
        <script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
        <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>

        <!-- Template Main JS File -->
        <script src="{{asset('assets/js/main.js')}}"></script>
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
    @include('layouts.navigation')
    @if(isset($header))
        {{$header}}
    @endif
    <main>

        {{$slot}}
    </main>

    </body>
</html>
