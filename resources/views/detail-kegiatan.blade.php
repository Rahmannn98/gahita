<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $article->title }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/show.css') }}">
</head>
<body class="text-gray-800 bg-gray-100 dark:bg-gray-900 dark:text-gray-200">
    
    <!-- Hero Section -->
    <div class="relative w-full bg-center bg-cover h-96 animate-fadeIn" style="background-image: url('{{ $article->image ? (Str::startsWith($article->image, 'http') ? $article->image : asset('storage/' . $article->image)) : asset('img/default.jpg') }}');">
        <div class="absolute inset-0 flex flex-col items-center justify-center p-6 text-center bg-gradient-to-t from-black via-transparent to-transparent">
            <h1 class="text-5xl font-bold text-white animate-slideInDown">{{ $article->title }}</h1>
            <p class="mt-4 text-lg text-gray-300 animate-slideInUp">{{ $article->created_at->format('M d, Y') }} | {{ $article->category ?? 'Tanpa Kategori' }}</p>
        </div>
    </div>
    
    <!-- Content Section -->
    <div class="max-w-4xl px-6 py-12 mx-auto">
        <div class="prose prose-lg dark:prose-invert max-w-none animate-fadeIn">
            {!! nl2br(e($article->content ?? 'Belum ada konten')) !!}
        </div>
        <a href="{{ url('/kegiatan') }}" class="inline-block px-6 py-3 mt-6 text-white transition bg-blue-600 rounded-lg hover:bg-blue-700 animate-fadeIn">
            &larr; Kembali
        </a>
    </div>
    
    <!-- Artikel Terkait -->
    @if (isset($rekomendasis) && $rekomendasis->count() > 0)
        <div class="max-w-6xl px-6 py-12 mx-auto">
            <h2 class="mb-8 text-3xl font-bold text-center text-gray-800 dark:text-gray-200 animate-fadeIn">Artikel Terkait</h2>
            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ($rekomendasis as $related)
                    <a href="{{ route('articles.show', $related->id) }}" class="relative block h-64 overflow-hidden rounded-lg group animate-fadeIn">
                        <img src="{{ $related->image ? (Str::startsWith($related->image, 'http') ? $related->image : asset('storage/' . $related->image)) : asset('img/default.jpg') }}" 
                            class="absolute inset-0 object-cover w-full h-full transition-transform duration-300 group-hover:scale-110" 
                            alt="{{ $related->title }}">
                        <div class="absolute inset-0 flex items-end p-6 bg-black bg-opacity-50">
                            <h4 class="text-xl font-semibold text-white">{{ $related->title }}</h4>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    @else
        <p class="mt-6 text-center text-gray-500 dark:text-gray-400 animate-fadeIn">Belum ada artikel terkait.</p>
    @endif
    
    <!-- Footer -->
    <footer class="p-6 mt-12 text-center text-gray-500 dark:text-gray-400">
        &copy; {{ date('Y') }} My Website. All rights reserved.
    </footer>

    <script src="{{ asset('js/show.js') }}"></script>
</body>
</html>