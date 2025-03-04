<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $materi->judul }}</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/detail-materi.css') }}">
</head>
<body class="bg-gray-100 dark:bg-gray-900">
    <section class="py-8 antialiased bg-white dark:bg-gray-900 md:py-16">
        <div class="max-w-screen-xl px-6 mx-auto lg:px-8">
            <!-- Tombol Back -->
            <div class="mb-6 animate-fadeIn">
                <a href="{{ url()->previous() }}" class="flex items-center text-blue-600 transition duration-300 hover:text-blue-800 dark:text-blue-400 dark:hover:text-blue-600">
                    <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                    </svg>
                    Kembali
                </a>
            </div>

            <!-- Judul Halaman -->
            <div class="max-w-2xl mx-auto text-center animate-fadeIn">
                <h2 class="text-4xl font-semibold tracking-tight dark:text-gray-100 sm:text-5xl">{{ $materi->judul }}</h2>
                <p class="mt-2 text-lg text-gray-600 dark:text-gray-300">Materi Pembelajaran.</p>
            </div>

            <!-- Video Tutorial -->
            <div class="mt-10">
                @foreach ($materi->detailMateri as $detail)
                    <div class="mb-6 overflow-hidden transition-transform transform bg-gray-900 rounded-lg shadow-lg animate-fadeIn hover:scale-105">
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
        </div>
    </section>

    <script src="{{ asset('js/detail-materi.js') }}"></script>
</body>
</html>