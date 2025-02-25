<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $materi->judul }}</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 dark:bg-gray-900">
    <section class="py-8 antialiased bg-white dark:bg-gray-900 md:py-16">
        <div class="max-w-screen-xl px-6 mx-auto lg:px-8">
            <!-- Tombol Back -->
            <div class="mb-6">
                <a href="{{ url()->previous() }}" class="flex items-center text-blue-600 hover:text-blue-800 dark:text-blue-400 dark:hover:text-blue-600">
                    <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                    </svg>
                    Kembali
                </a>
            </div>

            <!-- Judul Halaman -->
            <div class="max-w-2xl mx-auto text-center animate-fadeIn">
                <h2 class="text-4xl font-semibold tracking-tight dark:text-gray-100 sm:text-5xl">{{ $materi->judul }}</h2>
                <p class="mt-2 text-lg dark:text-gray-100">Detail Materi Pembelajaran.</p>
            </div>

            <!-- Video Tutorial -->
            <div class="mt-10">
                @foreach ($materi->detailMateri as $detail)
                    <div class="mb-6 overflow-hidden bg-gray-900 rounded-lg shadow-lg">
                        <video class="w-full" controls>
                            <source src="{{ $detail->video_url }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        <div class="p-4">
                            <h3 class="text-xl font-semibold text-white">{{ $detail->judul }}</h3>
                            <p class="mt-2 text-gray-300">{{ $detail->deskripsi }}</p>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Apa Yang Akan Anda Pelajari? -->
            <div class="mt-10">
                <h3 class="text-2xl font-semibold dark:text-white">Apa Yang Akan Anda Pelajari?</h3>
                <ul class="mt-4 space-y-2 text-gray-600 dark:text-gray-300">
                    <li class="flex items-center">
                        <svg class="w-5 h-5 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Mengetahui Sejarah Perkembangan Kendang di Bali & Nusantara
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Mengetahui Jenis-jenis Kendang
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Mengetahui Cara Memukul Kendang yang Baik
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Mengetahui Pola Dasar Kendang Bali
                    </li>
                </ul>
            </div>

            <!-- Materi Kursus -->
            <div class="mt-10">
                <h3 class="text-2xl font-semibold dark:text-white">Materi Kursus</h3>
                <div class="mt-4 space-y-4">
                    <div class="p-4 rounded-lg bg-gray-50 dark:bg-gray-800">
                        <h4 class="text-lg font-semibold dark:text-white">Pendahuluan: Kendang Bali</h4>
                        <ul class="mt-2 space-y-2 text-gray-600 dark:text-gray-300">
                            <li class="flex items-center">
                                <svg class="w-4 h-4 mr-2 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Pengertian Kendang Bali (02:40)
                            </li>
                            <li class="flex items-center">
                                <svg class="w-4 h-4 mr-2 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Sejarah Kendang Bali (05:33)
                            </li>
                            <li class="flex items-center">
                                <svg class="w-4 h-4 mr-2 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Jenis-jenis Kendang Bali (05:47)
                            </li>
                            <li class="flex items-center">
                                <svg class="w-4 h-4 mr-2 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Fungsi Kendang (03:02)
                            </li>
                        </ul>
                    </div>
                    <!-- Tambahkan materi lainnya di sini -->
                </div>
            </div>

            <!-- Persyaratan -->
            <div class="mt-10">
                <h3 class="text-2xl font-semibold dark:text-white">Persyaratan</h3>
                <ul class="mt-4 space-y-2 text-gray-600 dark:text-gray-300">
                    <li class="flex items-center">
                        <svg class="w-5 h-5 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Tertarik dengan Kendang Bali
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Memiliki Kendang Bali (Praktik)
                    </li>
                </ul>
            </div>

            <!-- Segmentasi -->
            <div class="mt-10">
                <h3 class="text-2xl font-semibold dark:text-white">Segmentasi</h3>
                <ul class="mt-4 space-y-2 text-gray-600 dark:text-gray-300">
                    <li class="flex items-center">
                        <svg class="w-5 h-5 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Pelajar
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Mahasiswa
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Pendidik/Peneliti
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Seluruh masyarakat yang tertarik dengan Kendang Bali
                    </li>
                </ul>
            </div>
        </div>
    </section>
</body>
</html>