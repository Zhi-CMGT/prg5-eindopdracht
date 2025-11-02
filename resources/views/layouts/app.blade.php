<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased">
<div class="min-h-screen bg-cream-bg">
    @include('layouts.home-navigation')

    <!-- Page Heading -->
    @isset($header)
        <div class="bg-gradient-to-r from-[#4A7856] to-[#5a8866] py-12 px-4">
            <header>
                {{ $header }}
            </header>

            @isset($h1)
                <h1 class="text-4xl md:text-5xl font-bold text-white text-center tracking-tight">
                    {{ $h1 }}
                </h1>
            @endisset

            @isset($p)
                <p class="text-white/80 text-center mt-3 text-lg">
                    {{ $p }}
                </p>
            @endisset
        </div>
    @endisset

    <!-- Page Content -->
    <main>
        {{ $slot }}
    </main>
</div>
</body>
</html>
