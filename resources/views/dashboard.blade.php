<!DOCTYPE html>
<html class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>Dashboard</title>
</head>
<body class="h-full dark:bg-gray-900">
    <!-- Loading Screen -->
    <div id="loading" class="fixed inset-0 flex items-center justify-center bg-gray-100">
        <div class="w-12 h-12 border-t-2 border-b-2 border-gray-900 rounded-full animate-spin"></div>
    </div>

    <div class="flex h-screen bg-gray-100 dark:bg-gray-900">
        <!-- Sidebar -->
        <div id="sidebar" class="fixed w-64 h-full p-5 space-y-6 text-white transition-transform duration-300 transform -translate-x-full bg-gray-800 md:translate-x-0 md:block md:relative dark:bg-gray-700">
            <a href="/home"> 
                <div class="flex items-center space-x-3">
                    <img class="h-10" src="img/gahita_white.png" alt="Logo">
                </div>
            </a>
            <nav class="mt-5">
                <a href="#dashboard" class="block px-4 py-2 rounded-md hover:bg-gray-700">Dashboard</a>
                <a href="#profile" class="block px-4 py-2 rounded-md hover:bg-gray-700">Profile Saya</a>
                <a href="#courses" class="block px-4 py-2 rounded-md hover:bg-gray-700">Kursus Terdaftar</a>
                <a href="#history" class="block px-4 py-2 rounded-md hover:bg-gray-700">Riwayat Pembelian</a>
                <a href="/home" class="block px-4 py-2 text-red-400 transition-colors duration-300 rounded-md hover:bg-red-600 hover:text-white">Keluar</a>
            </nav>
        </div>

        <!-- Content Area -->
        <div class="flex flex-col flex-1">
            <!-- Navbar -->
            <header class="flex items-center justify-between p-4 bg-white shadow dark:bg-gray-800">
                <div class="flex items-center space-x-4">
                    <button id="sidebar-toggle" class="md:hidden">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                        </svg>
                    </button>
                    <h1 class="text-2xl font-semibold dark:text-white">Dashboard</h1>
                </div>
                <div class="flex items-center space-x-4">
                    <button id="dark-mode-toggle" class="p-2 rounded-full hover:bg-gray-200 dark:hover:bg-gray-700">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path>
                        </svg>
                    </button>
                    <div class="relative">
                        <img class="w-10 h-10 rounded-full" src="img/rahman.jpeg" alt="Profile">
                    </div>
                </div>
            </header>

            <!-- Main Content -->
            <main class="p-6 space-y-6">
                <section id="dashboard" class="grid grid-cols-1 gap-6 md:grid-cols-3" data-aos="fade-up">
                    <div class="p-4 transition-transform duration-300 bg-white rounded-lg shadow hover:scale-105 dark:bg-gray-800">
                        <h2 class="text-lg font-semibold dark:text-white">Kursus Terdaftar</h2>
                        <p class="text-2xl font-bold dark:text-white">5</p>
                    </div>
                    <div class="p-4 transition-transform duration-300 bg-white rounded-lg shadow hover:scale-105 dark:bg-gray-800">
                        <h2 class="text-lg font-semibold dark:text-white">Kursus Aktif</h2>
                        <p class="text-2xl font-bold dark:text-white">3</p>
                    </div>
                    <div class="p-4 transition-transform duration-300 bg-white rounded-lg shadow hover:scale-105 dark:bg-gray-800">
                        <h2 class="text-lg font-semibold dark:text-white">Kursus Selesai</h2>
                        <p class="text-2xl font-bold dark:text-white">2</p>
                    </div>
                </section>

                <section id="profile" class="p-6 bg-white rounded-lg shadow dark:bg-gray-800" data-aos="fade-up" data-aos-delay="100">
                    <h2 class="text-xl font-semibold dark:text-white">Profile Saya</h2>
                    <p class="text-gray-600 dark:text-gray-300">Nama: John Doe</p>
                    <p class="text-gray-600 dark:text-gray-300">Email: johndoe@example.com</p>
                </section>

                <section id="courses" class="p-6 bg-white rounded-lg shadow dark:bg-gray-800" data-aos="fade-up" data-aos-delay="200">
                    <h2 class="text-xl font-semibold dark:text-white">Kursus Terdaftar</h2>
                    <ul class="mt-2 space-y-2">
                        <li class="p-4 bg-gray-100 rounded dark:bg-gray-700 dark:text-white">Web Development</li>
                        <li class="p-4 bg-gray-100 rounded dark:bg-gray-700 dark:text-white">UI/UX Design</li>
                        <li class="p-4 bg-gray-100 rounded dark:bg-gray-700 dark:text-white">Machine Learning</li>
                    </ul>
                </section>

                <section id="history" class="p-6 bg-white rounded-lg shadow dark:bg-gray-800" data-aos="fade-up" data-aos-delay="300">
                    <h2 class="text-xl font-semibold dark:text-white">Riwayat Pembelian</h2>
                    <p class="text-gray-600 dark:text-gray-300">Anda telah membeli 3 kursus.</p>
                </section>
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

        // Dark Mode Toggle
        const darkModeToggle = document.getElementById('dark-mode-toggle');
        const body = document.body;

        darkModeToggle.addEventListener('click', function() {
            body.classList.toggle('dark');
        });

        // Hide Loading Screen
        window.addEventListener('load', function() {
            const loading = document.getElementById('loading');
            loading.classList.add('hidden');
        });
    </script>
</body>
</html>