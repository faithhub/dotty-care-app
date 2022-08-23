<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? '' }}</title>

    @include('layouts.includes.style')

</head>

<body class="g-sidenav-show bg-gray-100">
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6" height="0" width="0"
            style="display: none; visibility: hidden"></iframe></noscript>
    <div class="min-height-300 bg-primary position-absolute w-100"></div>
    @include('layouts.includes.side-bar')
    <main class="main-content position-relative border-radius-lg">
        @include('layouts.includes.nav')

        <div class="container-fluid py-4">
            @yield('content')
        </div>
    </main>

</body>

@include('layouts.includes.script')

</html>
