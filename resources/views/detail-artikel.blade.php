<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Artikel</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="p-5 bg-gray-100">
    <div class="max-w-2xl p-6 mx-auto bg-white rounded-lg shadow-md">
        <img src="{{ $article->image }}" alt="{{ $article->title }}" class="w-full mb-4 rounded-lg">
        <h1 class="mb-2 text-2xl font-bold">{{ $article->title }}</h1>
        <p class="mb-4 text-sm text-gray-500">{{ $article->created_at->format('M d, Y') }} | {{ $article->category }}</p>
        <p class="text-gray-700">{{ $article->content }}</p>
        <a href="{{ url('/kegiatan') }}" class="block mt-4 text-blue-600">← Kembali ke Daftar Artikel</a>
    </div>
</body>
</html>
