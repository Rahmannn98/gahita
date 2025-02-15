<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite('resources/css/app.css')
    <title>Halaman Materi</title>
</head>

<body class="transition-all duration-300 bg-white dark:bg-gray-900">
    <x-header></x-header>
    <div class="py-24 bg-white sm:py-32 dark:bg-gray-900">
        <div class="px-6 mx-auto max-w-7xl lg:px-8">
            <div class="max-w-2xl mx-auto text-center">
                <h2 class="text-4xl font-semibold tracking-tight dark:text-gray-100 sm:text-5xl">Materi yang Tersedia</h2>
                <p class="mt-2 text-lg dark:text-gray-100">Selamat datang, berikut merupakan materi yang tersedia.</p>
            </div>
            <div class="flex flex-wrap justify-center gap-4 mt-10 mb-8">
                <button class="px-4 py-2 text-white transition-colors bg-blue-500 rounded-lg hover:bg-blue-600 filter-btn" data-category="all">Semua</button>
                <button class="px-4 py-2 text-blue-900 transition-colors bg-gray-300 rounded-lg hover:bg-gray-400 dark:bg-gray-700 dark:text-white dark:hover:bg-gray-600 filter-btn" data-category="gambelan">Gambelan</button>
                <button class="px-4 py-2 text-blue-900 transition-colors bg-gray-300 rounded-lg hover:bg-gray-400 dark:bg-gray-700 dark:text-white dark:hover:bg-gray-600 filter-btn" data-category="fashion">Tarian</button>
                <button class="px-4 py-2 text-blue-900 transition-colors bg-gray-300 rounded-lg hover:bg-gray-400 dark:bg-gray-700 dark:text-white dark:hover:bg-gray-600 filter-btn" data-category="kuliner">Kriya</button>
            </div>
            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
                <!-- Produk Gambelan -->
                <div class="p-4 bg-white rounded-lg shadow-lg product-card dark:bg-gray-800 dark:text-white animate-fadeIn" data-category="gambelan">
                    <img src="img/kendang.png" alt="Gambelan" class="object-cover w-full h-auto rounded-md">
                    <h2 class="mt-4 text-xl font-semibold">Gambelan Tradisional Bali</h2>
                    <p class="mt-2 text-gray-600 dark:text-gray-300">Instrumen musik khas dari Bali yang digunakan dalam upacara adat.</p>
                </div>

                <div class="p-4 bg-white rounded-lg shadow-lg product-card dark:bg-gray-800 dark:text-white animate-fadeIn" data-category="gambelan">
                    <img src="img/kendang.png" alt="Kendang" class="object-cover w-full h-auto rounded-md">
                    <h2 class="mt-4 text-xl font-semibold">Kendang</h2>
                    <p class="mt-2 text-gray-600 dark:text-gray-300">Alat musik pukul yang menjadi pengatur irama dalam gamelan.</p>
                </div>

                <!-- Produk Fashion -->
                <div class="p-4 bg-white rounded-lg shadow-lg product-card dark:bg-gray-800 dark:text-white animate-fadeIn" data-category="fashion">
                    <img src="img/tari.png" alt="Tarian" class="object-cover w-full h-auto rounded-md">
                    <h2 class="mt-4 text-xl font-semibold">Tari Bali</h2>
                    <p class="mt-2 text-gray-600 dark:text-gray-300">Seni tari yang memukau dengan gerakan anggun dan ekspresi yang kuat.</p>
                </div>

                <div class="p-4 bg-white rounded-lg shadow-lg product-card dark:bg-gray-800 dark:text-white animate-fadeIn" data-category="fashion">
                    <img src="img/gambelan.png" alt="Kostum Tari" class="object-cover w-full h-auto rounded-md">
                    <h2 class="mt-4 text-xl font-semibold">Makna & Cara Membuat Penjor Tradisional Bali</h2>
                    <p class="mt-2 text-gray-600 dark:text-gray-300">Makna & Cara Membuat Penjor Tradisional Bali</p>
                </div>

                <!-- Produk Kuliner -->
                <div class="p-4 bg-white rounded-lg shadow-lg product-card dark:bg-gray-800 dark:text-white animate-fadeIn" data-category="kuliner">
                    <img src="img/gwk.jpg" alt="Makanan Tradisional" class="object-cover w-full h-auto rounded-md">
                    <h2 class="mt-4 text-xl font-semibold">Pembelajaran Seni Kriya</h2>
                    <p class="mt-2 text-gray-600 dark:text-gray-300">Belajar seni kriya tradisional dengan teknik modern.</p>
                </div>

                <div class="p-4 bg-white rounded-lg shadow-lg product-card dark:bg-gray-800 dark:text-white animate-fadeIn" data-category="kuliner">
                    <img src="img/gwk.jpg" alt="Kopi Bali" class="object-cover w-full h-48 rounded-md">
                    <h2 class="mt-4 text-xl font-semibold">Seni Kriya</h2>
                    <p class="mt-2 text-gray-600 dark:text-gray-300">Eksplorasi seni kriya dalam berbagai bentuk dan media.</p>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.querySelectorAll('.filter-btn').forEach(button => {
            button.addEventListener('click', function () {
                let category = this.getAttribute('data-category');
                document.querySelectorAll('.product-card').forEach(card => {
                    if (category === 'all' || card.getAttribute('data-category') === category) {
                        card.style.display = 'block';
                        card.classList.add('animate-fadeIn'); // Animasi muncul
                    } else {
                        card.style.display = 'none';
                    }
                });

                // Update warna tombol aktif
                document.querySelectorAll('.filter-btn').forEach(btn => {
                    btn.classList.remove('bg-blue-500', 'text-white');
                    btn.classList.add('bg-gray-300', 'text-blue-900', 'dark:bg-gray-700', 'dark:text-white');
                });
                this.classList.remove('bg-gray-300', 'text-blue-900', 'dark:bg-gray-700', 'dark:text-white');
                this.classList.add('bg-blue-500', 'text-white');
            });
        });
    </script>

    <x-footer></x-footer>
</body>

</html>