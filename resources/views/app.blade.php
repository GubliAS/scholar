<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    {{-- Template CSS: copy vendor files to public/assets/css/ then uncomment --}}
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}"> --}}
    @vite('resources/js/app.js')
    @vite('resources/css/app.css')
    @inertiaHead
</head>
<body>
    @inertia
    {{-- Template JS: copy vendor files to public/assets/js/ then uncomment --}}
    {{-- <script src="{{ asset('assets/js/jquery.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('assets/js/plugins.js') }}"></script> --}}
    {{-- <script src="{{ asset('assets/js/custom.js') }}"></script> --}}
</body>
</html>
