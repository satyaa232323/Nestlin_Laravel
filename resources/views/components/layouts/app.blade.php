<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @livewireStyles
        <link rel="stylesheet" href="{{ asset('css/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/css/detailbaru.css') }}">
        <link rel="stylesheet" href="{{ asset('css/css/responsive.css') }}">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

        <title>Nestlin</title>

    </head>
    <body>
        @livewire('partials.navbar')
        <main>
            {{ $slot }}
        </main>
    </body>
    @livewireScripts
</html>
