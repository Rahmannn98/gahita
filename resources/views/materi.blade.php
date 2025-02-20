<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite('resources/css/app.css')
    <title>Halaman Materi</title>
    <style>
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .animate-fadeIn {
            animation: fadeIn 0.6s ease-in-out;
        }
    </style>
</head>

<body class="transition-all duration-300 bg-white dark:bg-gray-900">
    <x-header></x-header>

    <div class="py-24 bg-white sm:py-32 dark:bg-gray-900">
        <div class="px-6 mx-auto max-w-7xl lg:px-8">
            <div class="max-w-2xl mx-auto text-center animate-fadeIn">
                    <h2 class="text-4xl font-semibold tracking-tight dark:text-gray-100 sm:text-5xl">Materi yang Tersedia</h2>
                    <p class="mt-2 text-lg dark:text-gray-100">Selamat datang, berikut merupakan materi yang tersedia.</p>
            </div>

            <!-- Filter Berdasarkan Kategori -->
            <div class="flex flex-wrap justify-center gap-4 mt-10 mb-8 animate-fadeIn">
                <button class="px-4 py-2 text-white transition-colors bg-blue-500 rounded-lg hover:bg-blue-600 filter-btn" data-category="all">Semua</button>
                @foreach ($materis->pluck('kategori')->unique() as $kategori)
                    <button class="px-4 py-2 text-blue-900 transition-colors bg-gray-300 rounded-lg hover:bg-gray-400 dark:bg-gray-700 dark:text-white dark:hover:bg-gray-600 filter-btn" data-category="{{ $kategori }}">
                        {{ ucfirst($kategori) }}
                    </button>
                @endforeach
            </div>

            <!-- Grid Materi -->
            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ($materis as $materi)
                    <div class="p-4 transition-transform bg-white rounded-lg shadow-lg product-card dark:bg-gray-800 dark:text-white animate-fadeIn hover:shadow-2xl hover:scale-105" data-category="{{ $materi->kategori }}">
                        <img src="{{ Str::startsWith($materi->gambar, 'http') ? $materi->gambar : asset('img/' . $materi->gambar) }}" alt="{{ $materi->judul }}" class="object-cover w-full h-48 rounded-md">
                        <h2 class="mt-4 text-xl font-semibold">{{ $materi->judul }}</h2>
                        <p class="mt-2 text-gray-600 dark:text-gray-300">{{ Str::limit($materi->deskripsi, 100) }}</p>
                        <div class="flex items-center mt-2">
                            <span class="text-yellow-400">★★★★★</span>
                            <span class="ml-2 text-gray-500 dark:text-gray-300">(5.0)</span>
                        </div>
                        <div class="flex items-center justify-between mt-4">
                            <div>
                                <span class="text-gray-400 line-through">Rp175.000</span>
                                <span class="text-lg font-bold text-red-500">Rp150.000</span>
                            </div>
                            <button class="px-4 py-2 text-white bg-blue-500 rounded-lg hover:bg-blue-600">Beli</button>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <script>
        document.querySelectorAll('.filter-btn').forEach(button => {
            button.addEventListener('click', function() {
                let category = this.getAttribute('data-category');
                document.querySelectorAll('.product-card').forEach(card => {
                    if (category === 'all' || card.getAttribute('data-category') === category) {
                        card.style.display = 'block';
                        card.classList.add('animate-fadeIn');
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
