<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="@yield('theme', 'light')" data-color-theme="Purple_Theme   " data-layout="vertical">
<head>
    @include('layouts.head')
    <title>@yield('title', 'Dashboard')</title>
    @yield('css')
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}" />
</head>
<body class="link-sidebar">
    <!-- Preloader -->
    <div class="preloader">
        <img src="{{ URL::asset('build/images/logos/logo.png') }}" alt="loader" class="lds-ripple img-fluid" />
    </div>
    <div id="main-wrapper">

        <!-- Sidebar Start -->
        <aside class="left-sidebar with-vertical">
            <div>@include('admin.layouts.sidebar')</div>
        </aside>
        <!-- Sidebar End -->

        <div class="page-wrapper">
            <!-- Header Start -->
            <header class="topbar">
                <div class="with-vertical">@include('layouts.header')</div>
                <div class="app-header with-horizontal">@include('layouts.horizontal-header')</div>
            </header>
            <!-- Header End -->

            <aside class="left-sidebar with-horizontal">
                @include('layouts.horizontal-sidebar')
            </aside>

            <div class="body-wrapper">
                <div class="container-fluid">
                    @yield('pageContent')
                </div>
            </div>
        </div>
    </div>
    <div class="dark-transparent sidebartoggler"></div>
    @include('layouts.scripts')
    @yield('scripts')
</body>
</html>
