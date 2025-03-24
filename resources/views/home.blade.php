<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    
    <!-- AOS CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.css" />

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <link rel="icon" href="/img/logo_gahita.png" type="image/png">
    <meta property="og:image" content="/img/logo_gahita.png">
    <title>Homepage</title>
</head>
<body class="h-full text-gray-900 bg-white dark:bg-gray-900 dark:text-gray-200" data-aos-easing="ease-in-out" data-aos-duration="600" data-aos-delay="100">
    <x-header></x-header>

    <div class="bg-white dark:bg-gray-900" data-aos="fade-up">
        @include('homepage.hero')
    </div>
    <div class="bg-white dark:bg-gray-900" data-aos="fade-up">
        @include('homepage.about')
    </div>
    <div class="bg-white dark:bg-gray-900" data-aos="fade-up">
        @include('homepage.support')
    </div>
    <div class="bg-white dark:bg-gray-900" data-aos="fade-up">
        @include('homepage.lifetime')
    </div>
    <div class="bg-white dark:bg-gray-900" data-aos="fade-up">
        @include('homepage.testimoni')
    </div>
    <div class="bg-white dark:bg-gray-900" data-aos="fade-up">
        @include('homepage.start')
    </div>

    <script src="{{ asset('js/script.js') }}"></script>

    <!-- AOS JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <x-footer></x-footer>
</body>
</html>