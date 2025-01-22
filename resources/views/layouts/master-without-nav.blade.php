<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="light" data-sidebar-size="lg"
    data-sidebar-image="none" data-preloader="disable">

<head>
    <meta charset="utf-8" />
    <title> @yield('title') | BTEU - Sistema bolsa de trabajo educativo UIET</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="BTEU ADMIN" name="description" />
    <meta content="Themesbrand" name="author" />
     <meta name="keywords" content="BTEU - Sistema bolsa de trabajo educativo UIET">
     
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('build/images/bteuico.ico') }}">

    <!-- include head css -->
    @include('layouts.head-css')

    @livewireStyles
</head>

<body>

    @yield('content')

    <!-- vendor-scripts -->
    @include('layouts.vendor-scripts')

    @livewireScripts
</body>

</html>

