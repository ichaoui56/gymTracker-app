<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from powerzone.dexignzone.com/xhtml/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Apr 2024 13:53:08 GMT -->

<head>

    <!-- Title -->
    <title>GymTracker | @yield('title')</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="DexignZone">
    <meta name="robots" content="index, follow">
    <meta name="keywords"
        content="bodybuilding, class, clean, coach, fitness, fitness gym, gym, gym trainer, health, martial arts, personal trainer, sport, sports theme, training, workout, Fitness template, Workout design, Health and wellness, Exercise layout, Fitness app, Gym website, UI components, UX components, Workout routines, Health template, UIUX, creative, HTML, CSS, Sass Integration, HTML Template, Bootstrap, Bootstrap Template, Gym UI Kit, websiite, Website template, Fitness Website Design, Exercise App Design, Gym Interface, Exercise Dashboard, Gym Homepage Template, HTML Gym Template, Responsive Gym Design, responsive, HTML Fitness Components, Workout Program Template, Fitness Studio HTML, Responsive Workout Design, Landing Page Kit, HTML5, HTML/CSS">
    <meta name="description"
        content="Embark on a transformative fitness journey with the PowerZone HTML Template. Elevate your workouts and gym routines with this dynamic and versatile template designed to unleash the power of sleek aesthetics and intuitive features. Discover a world of possibilities for fitness and wellness, as PowerZone becomes your gateway to a healthier, stronger version of yourself. With its modern design and comprehensive features, this template is set to redefine and enhance your fitness experience like never before">
    <meta property="og:title" content="PowerZone - Fitness, Workout & Gym HTML Template | DexignZone">
    <meta property="og:description"
        content="Embark on a transformative fitness journey with the PowerZone HTML Template. Elevate your workouts and gym routines with this dynamic and versatile template designed to unleash the power of sleek aesthetics and intuitive features. Discover a world of possibilities for fitness and wellness, as PowerZone becomes your gateway to a healthier, stronger version of yourself. With its modern design and comprehensive features, this template is set to redefine and enhance your fitness experience like never before">
    <meta property="og:image" content="social-image.png">
    <meta name="format-detection" content="telephone=no">
    <meta name="twitter:title" content="PowerZone - Fitness, Workout & Gym HTML Template | DexignZone">
    <meta name="twitter:description"
        content="Embark on a transformative fitness journey with the PowerZone HTML Template. Elevate your workouts and gym routines with this dynamic and versatile template designed to unleash the power of sleek aesthetics and intuitive features. Discover a world of possibilities for fitness and wellness, as PowerZone becomes your gateway to a healthier, stronger version of yourself. With its modern design and comprehensive features, this template is set to redefine and enhance your fitness experience like never before">
    <meta name="twitter:image" content="social-image.png">
    <meta name="twitter:card" content="summary_large_image">

    <!-- Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon icon -->
    <link rel="icon" type="image/png" href="{{ asset('assets/images/favicon.png') }}">

    <!-- Tailwind cdn -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <!-- Stylesheet -->
    <link href="{{ asset('assets/vendor/animate/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('./assets-dashboard/css/buttons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/splitting/dist/splitting.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/magnific-popup/magnific-popup.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/rangeslider/rangeslider.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/switcher/switcher.css') }}" rel="stylesheet">

    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link class="skin" rel="stylesheet" href="{{ asset('assets/css/skin/skin-1.css') }}">

    <!-- Alpine -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">

</head>

<body id="bg" class="data-typography-1">
    <div id="loading-area" class="loading-page-1">
        <div class="loading-inner">
            <span class="text-primary">G</span>
            <span class="text-primary">Y</span>
            <span class="text-primary">M</span>
            <span class="text-white">T</span>
            <span class="text-white">R</span>
            <span class="text-white">A</span>
            <span class="text-white">C</span>
            <span class="text-white">K</span>
            <span class="text-white">E</span>
            <span class="text-white">R</span>
        </div>
    </div>

    <div class="page-wraper">
        <!-- Header -->
            <x-Navbars.home-navbar :user="$user" />


            <!-- End Header -->

            @yield('main')

            <x-Footers.home-footer />
    </div>

    <!-- sweet aleart file  -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- JAVASCRIPT FILES ========================================= -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script><!-- JQUERY.MIN JS -->
    <script src="{{ asset('assets/vendor/wow/wow.js') }}"></script><!-- WOW.JS -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script><!-- BOOTSTRAP.MIN JS -->
    <script src="{{ asset('assets/vendor/splitting/dist/splitting.min.js') }}"></script><!-- Splitting -->
    <script src="{{ asset('assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script><!-- BOOTSTRAP SELEECT -->
    <script src="{{ asset('assets/vendor/magnific-popup/magnific-popup.js') }}"></script><!-- MAGNIFIC POPUP JS -->
    <script src="{{ asset('assets/vendor/counter/waypoints-min.js') }}"></script><!-- WAYPOINTS JS -->
    <script src="{{ asset('assets/vendor/counter/counterup.min.js') }}"></script><!-- COUNTERUP JS -->
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script><!-- SWIPER -->
    <script src="{{ asset('assets/vendor/rangeslider/rangeslider.js') }}"></script><!-- RANGESLIDER -->
    {{-- <script src="{{ asset('assets/vendor/switcher/switcher.js') }}"></script><!-- SWITCHER --> --}}
    <script src="{{ asset('assets/js/dz.carousel.js') }}"></script><!-- OWL-CAROUSEL -->
    <script src="{{ asset('assets/js/dz.ajax.js') }}"></script><!-- AJAX -->
    <script src="{{ asset('assets/js/custom.js') }}"></script><!-- CUSTOM JS -->

</body>

</html>
