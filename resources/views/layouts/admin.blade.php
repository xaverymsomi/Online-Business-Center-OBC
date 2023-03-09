<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css"/>

    <link href="{{ asset('frontend/css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/bootstrap5.css') }}" rel="stylesheet">


    <link href="{{ asset('admin/css/material-dashboard.css') }}" rel="stylesheet">
</head>
<body>

    <div class="wrapper">
        @include('layouts.inc.sidebar')

        <div class="contents">
            @yield('contents')
        </div>

        @include('layouts.inc.adminfooter')

    </div>
    
        <!-- Scripts -->
        <script src="{{ asset('admin/js/popper.min.js') }}" defer></script>
        <script src="{{ asset('admin/js/bootstrap.min.js') }}" defer></script>
        <script src="{{ asset('admin/js/perfect-scrollbar.min.js') }}" defer></script>
        <script src="{{ asset('admin/js/smooth-scrollbar.min.js') }}" defer></script>

        @yield('scripts')
</body>
</html>
