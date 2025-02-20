<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite('resources/css/app.css')
    <title>Page kegiatan</title>
</head>

<body class="h-full text-gray-900 bg-white dark:bg-gray-900 dark:text-gray-100">
    <x-header></x-header>
    <div class="py-24 bg-white sm:py-32 dark:bg-gray-900">
        <div class="px-6 mx-auto max-w-7xl lg:px-8">
            <div class="max-w-2xl mx-auto text-center">
                <h2 class="text-4xl font-semibold tracking-tight dark:bg-gray-900 dark:text-gray-100 sm:text-5xl">
                    Kegiatan Kami
                </h2>
                <p class="mt-2 text-lg dark:bg-gray-900 dark:text-gray-100">
                    Selamat datang, Berikut merupakan kegiatan yang ada di gahita
                </p>
            </div>

            <div class="grid max-w-2xl grid-cols-1 pt-10 mx-auto mt-10 border-t border-gray-200 sm:grid-cols-2 lg:grid-cols-3 gap-x-8 gap-y-16 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none">
                @foreach ($articles as $article)
                    <article class="flex flex-col items-start justify-between max-w-xl p-4 transition-transform duration-300 rounded-lg hover:scale-105 hover:shadow-lg animate-fade-in">
                        <a href="{{ route('articles.show', $article->id) }}" class="w-full">
                            <div class="w-full h-48 overflow-hidden rounded-xl">
                                <img class="object-cover w-full h-full transition-transform duration-300 hover:scale-110"
                                    src="{{ $article->image ? (Str::startsWith($article->image, 'http') ? $article->image : asset('storage/' . $article->image)) : asset('img/gwk.jpg') }}"
                                    alt="Blog Image">
                            </div>
                        </a>
                        <div class="flex items-center mt-4 text-xs gap-x-4">
                            <time class="text-gray-500">{{ $article->created_at->format('M d, Y') }}</time>
                            <span class="bg-gray-100 text-gray-600 rounded-full px-3 py-1.5 text-sm">
                                {{ $article->category ?? 'Tanpa Kategori' }}
                            </span>
                        </div>
                        <h3 class="mt-3 text-lg font-semibold dark:bg-gray-900 dark:text-gray-100 group-hover:text-gray-600">
                            <a href="{{ route('articles.show', $article->id) }}">{{ $article->title }}</a>
                        </h3>
                        <p class="mt-2 text-sm text-gray-600">
                            {{ Str::limit($article->content ?? 'Tidak ada deskripsi.', 100) }}
                        </p>
                        <a href="{{ route('articles.show', $article->id) }}" class="flex items-center mt-4 text-sm text-blue-600 hover:text-blue-800">
                            Baca Selengkapnya
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </article>
                @endforeach
            </div>
            
            <!-- Artikel Terkait -->
            @if (isset($rekomendasis) && $rekomendasis->count() > 0)
                <h3 class="text-2xl font-semibold text-center dark:text-gray-100">Artikel Terkait</h3>
                <div class="grid max-w-2xl grid-cols-1 mx-auto mt-6 sm:grid-cols-2 lg:grid-cols-3 gap-x-8 gap-y-8">
                    @foreach ($rekomendasis as $related)
                        <article class="flex flex-col items-start justify-between p-4 transition-transform duration-300 rounded-lg hover:scale-105 hover:shadow-lg animate-fade-in">
                            <a href="{{ route('articles.show', $related->id) }}">
                                <img class="w-full transition-transform duration-300 rounded-xl hover:scale-110"
                                    src="{{ $related->image ? asset('storage/' . $related->image) : asset('img/default.jpg') }}"
                                    alt="Related Article Image">
                            </a>
                            <div class="flex items-center mt-4 text-xs gap-x-4">
                                <time class="text-gray-500">{{ $related->created_at->format('M d, Y') }}</time>
                                <span class="bg-gray-100 text-gray-600 rounded-full px-3 py-1.5 text-sm">
                                    {{ $related->category ?? 'Tanpa Kategori' }}
                                </span>
                            </div>
                            <h3 class="mt-3 text-lg font-semibold dark:text-gray-100">
                                <a href="{{ route('articles.show', $related->id) }}">{{ $related->title }}</a>
                            </h3>
                        </article>
                    @endforeach
                </div>
            @else
                <p class="text-center text-gray-500">Belum ada artikel terkait.</p>
            @endif
        </div>
    </div>

    <style>
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade-in {
            animation: fadeInUp 0.8s ease-out forwards;
        }
    </style>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const articles = document.querySelectorAll('.animate-fade-in');
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('opacity-100', 'translate-y-0');
                    }
                });
            }, {
                threshold: 0.1
            });

            articles.forEach(article => observer.observe(article));
        });
    </script>

    </div>
    </div>
    <x-footer></x-footer>
</body>

</html>
