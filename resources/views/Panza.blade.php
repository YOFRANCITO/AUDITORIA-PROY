<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="w-full h-screen flex p-4 bg-gray-100 *:shadow-md gap-4 *:bg-white">
        <nav class="rounded-xl w-72 h-full flex flex-col gap-4 p-4">
            <a class="" href="{{ route('Wellcome.index') }}">
                <img src="{{ asset('images/logo.png') }}"  alt="">
            </a>

            <div class="">

            </div>
        </nav>

        <div class="w-full rounded-xl p-4">
            @yield('Panza')
        </div>  
    </div>

    @livewireScripts
</body>

</html>