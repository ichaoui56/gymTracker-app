<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="apple-touch-icon" sizes="76x76" href="./assets-dashboard/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="./assets-dashboard/img/favicon.png" />
    <title>Dashboard | @yield('title')</title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Nucleo Icons -->

    <!-- Tailwind cdn -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <!-- Flowbite link -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />

    <!-- Flowbite script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

    <link href="./assets-dashboard/css/nucleo-icons.css" rel="stylesheet" />
    <link href="./assets-dashboard/css/cards.css" rel="stylesheet" />
    <link href="./assets-dashboard/css/buttons.css" rel="stylesheet" />
    <link href="./assets-dashboard/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Popper -->
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <!-- Main Styling -->
    <link href="./assets-dashboard/css/argon-dashboard-tailwind.css?v=1.0.1" rel="stylesheet" />
</head>

<body
    class="m-0 font-sans text-base antialiased font-normal dark:bg-slate-900 leading-default bg-gray-300 text-slate-500">

    <div
        class="absolute bg-y-50 w-full top-0 bg-[url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/profile-layout-header.jpg')] min-h-75">
        <span class="absolute top-0 left-0 w-full h-full bg-blue-500 opacity-60"></span>
    </div>

    <!-- sidenav  -->

    <x-sidebars.dashboard-sidebar />

    <!-- end sidenav  -->

    @yield('main')

    <x-sidebars.fixed-sidebar :users="$users" />

</body>

<!-- plugin for charts  -->
<script src="./assets-dashboard/js/plugins/chartjs.min.js" async></script>
<!-- plugin for scrollbar  -->
<script src="./assets-dashboard/js/plugins/perfect-scrollbar.min.js" async></script>
<!-- main script file  -->
<script src="./assets-dashboard/js/argon-dashboard-tailwind.js?v=1.0.1" async></script>
<!-- sweet aleart file  -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</html>
