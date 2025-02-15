<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite('resources/css/app.css')
    <title>Page Materi</title>
</head>

<body class="h-full text-gray-900 bg-white dark:bg-gray-900 dark:text-gray-100">
    <x-header></x-header>
    <div class="py-24 bg-white sm:py-32 dark:bg-gray-900">
        <div class="px-6 mx-auto max-w-7xl lg:px-8">
            <div class="max-w-2xl mx-auto text-center ">
                <h2 class="text-4xl font-semibold tracking-tight dark:bg-gray-900 dark:text-gray-100 sm:text-5xl">Kegiatan Kami</h2>
                <p class="mt-2 text-lg dark:bg-gray-900 dark:text-gray-100">Selamat datang, Berikut merupakan kegiatan yang ada di gahita</p>
            </div>
            <div
                class="grid max-w-2xl grid-cols-1 pt-10 mx-auto mt-10 border-t border-gray-200 gap-x-8 gap-y-16 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3 ">
                @foreach ($articles as $article)
                    <article
                        class="flex flex-col items-start justify-between max-w-xl p-4 transition-transform duration-300 rounded-lg hover:scale-105 hover:shadow-lg animate-fade-in">
                        <a href="{{route('articles.show',$article->id)}}">
                          <img class="w-full transition-transform duration-300 rounded-xl hover:scale-110"
                          src="{{ $article->image ? (Str::startsWith($article->image, 'http') ? $article->image : asset('storage/' . $article->image)) : asset('img/gwk.jpg') }}"alt="Blog Image">      
                        </a>
                        <div class="flex items-center mt-4 text-xs gap-x-4">
                            <time class="text-gray-500">{{ $article->created_at->format('M d, Y') }}</time>
                            <span
                                class="bg-gray-100 text-gray-600 rounded-full px-3 py-1.5 text-sm">{{ $article->category }}</span>
                        </div>
                        <h3 class="mt-3 text-lg font-semibold dark:bg-gray-900 dark:text-gray-100 group-hover:text-gray-600">
                            <a href="/detail">{{ $article->title }}</a>
                        </h3>
                        <p class="mt-2 text-sm text-gray-600">{{Str::limit($article->content,100)  }}</p>
                    </article>
                @endforeach
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
