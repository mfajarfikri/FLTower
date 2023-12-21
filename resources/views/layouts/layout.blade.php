<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('image/favicon.ico') }}" type="ico">

    {{-- <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" /> --}}




    <title>{{ config('app.name', 'Laravel') }}</title>
</head>

<body class="">

    <div class="bg-gray-100  text-gray-600 h-screen flex overflow-hidden text-sm">
        @include('component.sidebar')

        @yield('content')
    </div>


    <!-- Make sure you put this AFTER Leaflet's CSS -->
    {{-- <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script> --}}
</body>

</html>
