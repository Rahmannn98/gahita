<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $article->title }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    
</head>
<body class="bg-gray-100 dark:bg-gray-800">
    <div class="max-w-3xl p-6 mx-auto mt-6 bg-white rounded-lg shadow-lg">
        <img src="{{ $article->image }}" alt="{{ $article->title }}" class="w-full mb-4 rounded-lg">
        <h1 class="text-3xl font-bold text-gray-900">{{ $article->title }}</h1>
        <p class="mt-2 text-sm text-gray-500">{{ $article->created_at->format('M d, Y') }} | {{ $article->category }}</p>

        <hr class="my-4">

        <div class="prose text-gray-800">
            {!! nl2br(e($article->content ?? 'Belum ada konten')) !!}
        </div>
        <a href="{{ url('/kegiatan') }}" class="inline-flex items-center px-4 py-2 mt-6 text-blue-600 transition border border-blue-600 rounded-lg hover:bg-blue-600 hover:text-white">
            <x-heroicon-o-arrow-left class="w-5 h-5 mr-2" />
            Kembali
        </a>        
    </div>
    <footer class="p-4 mt-8 text-center text-gray-600">
        &copy; {{ date('Y') }} My Website. All rights reserved.
    </footer>

</body>
</html>
