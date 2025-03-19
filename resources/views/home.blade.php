<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="icon" href="/img/logo_gahita.png" type="image/png">
    <meta property="og:image" content="/img/logo_gahita.png">
    <title>Homepage</title>
</head>
<body class="h-full">
    <x-header></x-header>

    @include('sections.hero')
    @include('sections.about')
    @include('sections.support')
    @include('sections.lifetime')
    @include('sections.testimoni')
    @include('sections.start')

    <script src="{{ asset('js/script.js') }}"></script>
    <x-footer></x-footer>
</body>
</html>