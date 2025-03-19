<!DOCTYPE html>
<html class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Dashboard</title>
</head>
<body class="h-full">
    <div class="flex h-screen bg-gray-100">
        <!-- Sidebar -->
        <div id="sidebar" class="fixed w-64 h-full p-5 space-y-6 text-white transition-transform transform -translate-x-full bg-gray-800 md:translate-x-0 md:block md:relative">
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
                <a href="/home" class="block px-4 py-2 text-red-400 rounded-md hover:bg-red-500">Keluar</a>
            </nav>
        </div>

        <!-- Content Area -->
        <div class="flex flex-col flex-1">
            <!-- Navbar -->
            <header class="flex items-center justify-between p-4 bg-white shadow">
                <h1 class="text-2xl font-semibold">Dashboard</h1>
                <div class="relative">
                    <img class="w-10 h-10 rounded-full" src="img/rahman.jpeg" alt="Profile">
                </div>
            </header>

            <!-- Main Content -->
            <main class="p-6 space-y-6">
                <section id="dashboard" class="grid grid-cols-1 gap-6 md:grid-cols-3">
                    <div class="p-4 bg-white rounded-lg shadow">
                        <h2 class="text-lg font-semibold">Kursus Terdaftar</h2>
                        <p class="text-2xl font-bold">5</p>
                    </div>
                    <div class="p-4 bg-white rounded-lg shadow">
                        <h2 class="text-lg font-semibold">Kursus Aktif</h2>
                        <p class="text-2xl font-bold">3</p>
                    </div>
                    <div class="p-4 bg-white rounded-lg shadow">
                        <h2 class="text-lg font-semibold">Kursus Selesai</h2>
                        <p class="text-2xl font-bold">2</p>
                    </div>
                </section>

                <section id="profile" class="p-6 bg-white rounded-lg shadow">
                    <h2 class="text-xl font-semibold">Profile Saya</h2>
                    <p class="text-gray-600">Nama: John Doe</p>
                    <p class="text-gray-600">Email: johndoe@example.com</p>
                </section>

                <section id="courses" class="p-6 bg-white rounded-lg shadow">
                    <h2 class="text-xl font-semibold">Kursus Terdaftar</h2>
                    <ul class="mt-2 space-y-2">
                        <li class="p-4 bg-gray-100 rounded">Web Development</li>
                        <li class="p-4 bg-gray-100 rounded">UI/UX Design</li>
                        <li class="p-4 bg-gray-100 rounded">Machine Learning</li>
                    </ul>
                </section>

                <section id="history" class="p-6 bg-white rounded-lg shadow">
                    <h2 class="text-xl font-semibold">Riwayat Pembelian</h2>
                    <p class="text-gray-600">Anda telah membeli 3 kursus.</p>
                </section>
            </main>
        </div>
    </div>
</body>
</html>