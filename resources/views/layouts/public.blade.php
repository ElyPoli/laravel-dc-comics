<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> @yield('title') </title>

    {{-- Icona --}}
    <link rel="icon" href="{{ asset('img/favicon.ico') }}">

    {{-- Inlcudo gli assets con vite --}}
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>

<body>
    {{-- Includo la navbar --}}
    @include('partials.header')
    <main>
        {{-- Segnaposto per il contenuto principale della pagina --}}
        @yield('content')
    </main>
    {{-- Includo il footer --}}
    @include('partials.footer')
</body>

</html>
