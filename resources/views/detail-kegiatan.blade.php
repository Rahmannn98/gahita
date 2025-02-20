<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $article->title }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="text-gray-100 bg-gray-100 dark:bg-gray-900">
    
    <!-- Hero Section -->
    <div class="relative w-full bg-center bg-cover h-96" style="background-image: url('{{ $article->image }}');">
        <div class="absolute inset-0 flex flex-col items-center justify-center p-6 text-center bg-black bg-opacity-50">
            <h1 class="text-4xl font-bold">{{ $article->title }}</h1>
            <p class="mt-2 text-gray-300">{{ $article->created_at->format('M d, Y') }} | {{ $article->category }}</p>
        </div>
    </div>
    
    <!-- Content Section -->
    <div class="max-w-4xl px-6 py-12 mx-auto text-gray-200">
        <div class="prose prose-invert max-w-none">{!! nl2br(e($article->content ?? 'Belum ada konten')) !!}</div>
        <a href="{{ url('/kegiatan') }}" class="inline-block px-6 py-3 mt-6 text-white transition bg-blue-600 rounded-lg hover:bg-blue-700">
            &larr; Kembali
        </a>
    </div>
    
    <!-- Artikel Terkait -->
    @if ($rekomendasis->count() > 0)
    <h3 class="text-2xl font-semibold text-center">Artikel Terkait</h3>
    <div class="grid max-w-6xl grid-cols-1 gap-6 mx-auto mt-6 sm:grid-cols-2 lg:grid-cols-3">
        @foreach ($rekomendasis as $related)
            <a href="{{ route('articles.show', $related->id) }}" class="relative block h-56 overflow-hidden rounded-lg group">
                <img src="{{ $related->image ? asset('storage/' . $related->image) : asset('img/default.jpg') }}" 
                    class="absolute inset-0 object-cover w-full h-full transition-transform duration-300 group-hover:scale-110" 
                    alt="{{ $related->title }}">
                <div class="absolute inset-0 flex items-end p-4 bg-black bg-opacity-50">
                    <h4 class="text-lg font-semibold">{{ $related->title }}</h4>
                </div>
            </a>
        @endforeach
    </div>
    @else
    <p class="mt-6 text-center text-gray-400">Belum ada artikel terkait.</p>
    @endif
    
    <!-- Footer -->
    <footer class="p-6 mt-12 text-center text-gray-500">
        &copy; {{ date('Y') }} My Website. All rights reserved.
    </footer>
    
</body>
</html>
