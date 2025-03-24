<!DOCTYPE html>
<html class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Dashboard' }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body class="h-full dark:bg-gray-900">
    <!-- Loading Screen -->
    @include('components.loading')

    <div class="flex h-screen bg-gray-100 dark:bg-gray-900">
        <!-- Sidebar -->
        @include('components.sidebar')

        <!-- Content Area -->
        <div class="flex flex-col flex-1 ml-64 overflow-y-auto"> <!-- Tambahkan margin kiri (ml-64) -->
            <!-- Navbar -->
            @include('components.navbar')

            <!-- Main Content -->
            <main class="p-6 space-y-6">
                @yield('content') <!-- Konten dinamis -->
            </main>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        // Inisialisasi AOS
        AOS.init();

        // Toggle Sidebar
        document.getElementById('sidebar-toggle').addEventListener('click', function() {
            const sidebar = document.getElementById('sidebar');
            sidebar.classList.toggle('-translate-x-full');
        });

        // Hide Loading Screen
        window.addEventListener('load', function() {
            const loading = document.getElementById('loading');
            loading.classList.add('hidden');
        });
    </script>
</body>
</html>