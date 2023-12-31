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

        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <meta content="" name="description">
        <meta content="" name="keywords">

        <!-- Favicons -->
        <link href="{{asset("assets/img/favicon.png")}}" rel="icon">
        <link href="{{asset("assets/img/apple-touch-icon.png")}}" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="{{asset("assets/vendor/bootstrap/css/bootstrap.min.css")}}" rel="stylesheet">
        <link href="{{asset("assets/vendor/bootstrap-icons/bootstrap-icons.css")}}" rel="stylesheet">
        <link href="{{asset("assets/vendor/aos/aos.css")}}" rel="stylesheet">
        <link href="{{asset("assets/vendor/glightbox/css/glightbox.min.css")}}" rel="stylesheet">
        <link href="{{asset("assets/vendor/swiper/swiper-bundle.min.css")}}" rel="stylesheet">

        <!-- Variables CSS Files. Uncomment your preferred color scheme -->
        <link href="{{asset("assets/css/variables.css")}}" rel="stylesheet">
        <!-- <link href="assets/css/variables-blue.css" rel="stylesheet"> -->
        <!-- <link href="assets/css/variables-green.css" rel="stylesheet"> -->
        <!-- <link href="assets/css/variables-orange.css" rel="stylesheet"> -->
        <!-- <link href="assets/css/variables-purple.css" rel="stylesheet"> -->
        <!-- <link href="assets/css/variables-red.css" rel="stylesheet"> -->
        <!-- <link href="assets/css/variables-pink.css" rel="stylesheet"> -->

        <!-- Template Main CSS File -->
        <link href="{{asset("assets/css/main.css")}}" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
            <div>
                <a href="/">
                    <div class="flex justify-center">
                        <a href="{{ url('/dashboard') }}"  class="logo d-flex align-items-center scrollto me-auto me-lg-0">
                            <img style="height: 200px; width: 200px" src="{{asset('assets/img/wanderlust (1).png')}}" alt="Main Page"  class="rounded-pill">
                        </a>
                    </div>
                </a>
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
