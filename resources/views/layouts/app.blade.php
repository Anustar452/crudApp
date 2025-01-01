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
<body class="antialiased">
    <!-- Header -->
    @include('layout.header')

    <!-- Main Content -->
    <main class="container mx-auto py-8">
        @yield('content')
    </main>

    <!-- Footer -->
    @include('layout.footer')

    <!-- Additional Scripts -->
    @stack('scripts')
</body>
</html>