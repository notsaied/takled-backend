<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Orange_Theme" data-layout="vertical">
<head>
    @include('layouts.head')
    <title>@yield('title', 'Dashboard')</title>
    @yield('css')
</head>
<body class="link-sidebar">
    <!-- Preloader -->
    <div class="preloader">
        <img src="{{ URL::asset('build/images/logos/favicon.png') }}" alt="loader" class="lds-ripple img-fluid" />
    </div>

    @yield('pageContent')

    <div class="dark-transparent sidebartoggler"></div>
    @include('layouts.scripts2')
    @yield('scripts')
</body>
</html>
