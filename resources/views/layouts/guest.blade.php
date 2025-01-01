<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', config('app.name', 'Laravel'))</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    @vite(['resources/js/app.js'])
</head>
<body class="bg-gray-100">
    <div class="min-h-screen flex flex-col justify-center items-center">
        <!-- Logo -->
        <div class="mb-6">
            <a href="{{ url('/') }}">
                <img class="h-16 w-auto" src="{{ asset('images/logo.png') }}" alt="{{ config('app.name', 'Laravel') }}">
            </a>
        </div>

        <!-- Main Content -->
        <div class="w-full sm:max-w-md bg-white shadow-md rounded-lg px-6 py-8">
            @yield('content')
        </div>

        <!-- Footer -->
        <footer class="mt-6 text-sm text-gray-500">
            &copy; {{ date('Y') }} {{ config('app.name', 'Laravel') }}. All rights reserved.
        </footer>
    </div>
</body>
</html>