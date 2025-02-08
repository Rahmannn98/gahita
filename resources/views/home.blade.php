<!DOCTYPE html>
<html lang="en" class="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="icon" href="/img/logo_gahita.png" type="image/png">
    <meta property="og:image" content="/img/logo_gahita.png">
    <title>Homepage</title>

</head>

<body class="h-full">
    <x-header></x-header>
    <div class="relative inset-0 flex items-center justify-center h-screen bg-center bg-no-repeat bg-cover -z-10 "
        style="background-image: url('/img/gwk.jpg');">
        <div class="absolute inset-0 bg-black/30 backdrop-blur-lg"></div>
        <div class="relative max-w-2xl py-32 mx-auto sm:py-48 lg:py-56">
            <div class="text-center">
                <h1 class="text-5xl font-semibold tracking-tight text-white opacity-0 animate-fade-in sm:text-7xl">
                    Belajar Budaya Bali lebih Mudah
                </h1>
                <p class="mt-8 text-lg font-medium text-gray-200 sm:text-xl">
                    <span id="typing-text"></span><span id="cursor">|</span>
                </p>
                <div class="flex items-center justify-center mt-10 gap-x-6 animate-fade-slide">
                    <!-- Tombol Get Started -->
                    <a href="#" 
                       class="px-6 py-3 text-sm font-semibold text-white transition-all duration-300 bg-indigo-600 rounded-md shadow-lg hover:bg-indigo-500 hover:-translate-y-1 hover:shadow-xl active:scale-95">
                        Get started
                    </a>
                    <a href="/materi" class="relative font-semibold text-indigo-400 transition-all duration-300 text-sm/6 group"> Learn more 
                        <span class="inline-block transition-transform duration-300 group-hover:translate-x-1">→</span>
                    </a>
                </div>
                
            </div>
        </div>
    </div>

    <!-- Animasi Fade-in -->
    <style>
        @keyframes fade-in {
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
            animation: fade-in 1s ease-out forwards;
        }

        /* Efek Typing */
        @keyframes blink {
            50% {
                opacity: 0;
            }
        }

        #cursor {
            display: inline-block;
            animation: blink 1s step-end infinite;
        }
                keyframes fade-slide {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .animate-fade-slide {
            animation: fade-slide 0.8s ease-out;
        }
    </style>
    <script>
        const text = "Gahita adalah Platform Pembelajaran Kebudayaan dengan menyediakan konten pembelajaran berupa modul & video yang menarik.";
        let index = 0;

        function typeEffect() {
            if (index < text.length) {
                document.getElementById("typing-text").innerHTML += text.charAt(index);
                index++;
                setTimeout(typeEffect, 100);
            }
        }
        window.onload = () => {
            setTimeout(typeEffect, 500);
        };
    </script>
    <section class="w-full py-12 text-center bg-white dark:bg-gray-900">
        <h3 class="mb-8 text-3xl font-semibold text-gray-800 dark:text-white animate-fade-in"></h3>

        <div class="grid items-center justify-center grid-cols-2 gap-6 px-6 sm:grid-cols-3 md:grid-cols-5">
            <div class="flex justify-center">
                <img src="/img/kemenbudaya.png" alt="Kementrian Kebudayaan" class="w-auto h-20 transition-transform duration-300 ease-in-out hover:scale-105">
            </div>
            <div class="flex justify-center">
                <img src="/img/pendidikan.png" alt="pendidikan" class="w-auto h-20 transition-transform duration-300 ease-in-out hover:scale-105">
            </div>
            <div class="flex justify-center">
                <img src="/img/merdeka.png" alt="merdeka" class="w-auto h-20 transition-transform duration-300 ease-in-out hover:scale-105">
            </div>
            <div class="flex justify-center">
                <img src="/img/laravel.png" alt="Laravel" class="w-auto h-20 transition-transform duration-300 ease-in-out hover:scale-105">
            </div>
            <div class="flex justify-center">
                <img src="/img/udayana.png" alt="udayana" class="w-auto h-20 transition-transform duration-300 ease-in-out hover:scale-105">
            </div>
        </div>
    </section>
    <div class="relative py-24 overflow-hidden bg-gray-900 isolate sm:py-32">
        <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&crop=focalpoint&fp-y=.8&w=2830&h=1500&q=80&blend=111827&sat=-100&exp=15&blend-mode=multiply"
            alt="" class="absolute inset-0 object-cover object-right -z-10 size-full md:object-center">
        <div class="hidden sm:absolute sm:-top-10 sm:right-1/2 sm:-z-10 sm:mr-10 sm:block sm:transform-gpu sm:blur-3xl"
            aria-hidden="true">
            <div class="aspect-1097/845 w-[68.5625rem] bg-linear-to-tr from-[#ff4694] to-[#776fff] opacity-20"
                style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
            </div>
        </div>
        <div class="absolute -top-52 left-1/2 -z-10 -translate-x-1/2 transform-gpu blur-3xl sm:top-[-28rem] sm:ml-16 sm:translate-x-0 sm:transform-gpu"
            aria-hidden="true">
            <div class="aspect-1097/845 w-[68.5625rem] bg-linear-to-tr from-[#ff4694] to-[#776fff] opacity-20"
                style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
            </div>
        </div>
        <div class="px-6 mx-auto max-w-7xl lg:px-8">
            <div class="max-w-2xl mx-auto lg:mx-0">
                <h2 class="text-5xl font-semibold tracking-tight text-white sm:text-7xl">Pembelajaran dapat diakses Seumur hidup.</h2>
                <p class="mt-8 text-lg font-medium text-gray-300 text-pretty sm:text-xl/8">Materi Pembelajaran di Gahita begitu banyak, kalian dapat memilih materi yang kalian gemari dan jangan khawatir karena waktu akses ke materi kalian akan berlaku seumur hidup, namun ada juga beberapa materi yang kami batasi waktunya seperti 6 bulan - 1 tahun.</p>
            </div>
            <div class="max-w-2xl mx-auto mt-10 lg:mx-0 lg:max-w-none">
                <dl class="grid grid-cols-1 gap-8 mt-16 sm:mt-20 sm:grid-cols-2 lg:grid-cols-4">
                    <div class="flex flex-col-reverse gap-1 animate-fade-in">
                        <dt class="text-gray-300 text-base/7">Cources Program</dt>
                        <dd class="text-4xl font-semibold tracking-tight text-white counter" data-target="12">0</dd>
                    </div>
                    <div class="flex flex-col-reverse gap-1 animate-fade-in">
                        <dt class="text-gray-300 text-base/7">Full-time colleagues</dt>
                        <dd class="text-4xl font-semibold tracking-tight text-white counter" data-target="300">0</dd>
                    </div>
                    <div class="flex flex-col-reverse gap-1 animate-fade-in">
                        <dt class="text-gray-300 text-base/7">Hours per week</dt>
                        <dd class="text-4xl font-semibold tracking-tight text-white counter" data-target="40">0</dd>
                    </div>
                    <div class="flex flex-col-reverse gap-1 animate-fade-in">
                        <dt class="text-gray-300 text-base/7">Paid time off</dt>
                        <dd class="text-4xl font-semibold tracking-tight text-white counter" data-target="100">0</dd>
                    </div>
                </dl>
                <script>
                    function startCounter() {
                        const counters = document.querySelectorAll(".counter");
            
                        counters.forEach(counter => {
                            let target = +counter.getAttribute("data-target");
                            let count = 0;
                            let speed = target / 100; // Kecepatan animasi
            
                            function updateCounter() {
                                if (count < target) {
                                    count += speed;
                                    counter.textContent = Math.ceil(count);
                                    requestAnimationFrame(updateCounter);
                                } else {
                                    counter.textContent = target; // memastikan berhenti di angka target
                                }
                            }
                            updateCounter();
                        });
                    }
            
                    function resetCounter() {
                        const counters = document.querySelectorAll(".counter");
                        counters.forEach(counter => {
                            counter.textContent = "0"; // Reset angka ke 0
                        });
                        setTimeout(startCounter, 500); // Mulai ulang animasi setelah reset
                    }
            
                    startCounter();
                    setInterval(resetCounter, 5000);
                </script>
            </div>
        </div>
    </div>
    <div class="py-24 bg-gray-50 sm:py-32">
        <div class="max-w-2xl px-6 mx-auto lg:max-w-7xl lg:px-8">
            <h2 class="font-semibold text-center text-indigo-600 text-base/7">Deploy faster</h2>
            <p
                class="max-w-lg mx-auto mt-2 text-4xl font-semibold tracking-tight text-center text-balance text-gray-950 sm:text-5xl">
                Everything you need to deploy your app</p>
            <div class="grid gap-4 mt-10 sm:mt-16 lg:grid-cols-3 lg:grid-rows-2">
                <div class="relative lg:row-span-2">
                    <div class="absolute inset-px rounded-lg bg-white lg:rounded-l-[2rem]"></div>
                    <div
                        class="relative flex h-full flex-col overflow-hidden rounded-[calc(var(--radius-lg)+1px)] lg:rounded-l-[calc(2rem+1px)]">
                        <div class="px-8 pt-8 pb-3 sm:px-10 sm:pt-10 sm:pb-0">
                            <p class="mt-2 text-lg font-medium tracking-tight text-gray-950 max-lg:text-center">Mobile
                                friendly</p>
                            <p class="max-w-lg mt-2 text-gray-600 text-sm/6 max-lg:text-center">Anim aute id magna
                                aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo.</p>
                        </div>
                        <div class="@container relative min-h-[30rem] w-full grow max-lg:mx-auto max-lg:max-w-sm">
                            <div
                                class="absolute inset-x-10 top-10 bottom-0 overflow-hidden rounded-t-[12cqw] border-x-[3cqw] border-t-[3cqw] border-gray-700 bg-gray-900 shadow-2xl">
                                <img class="object-cover object-top size-full"
                                    src="https://tailwindui.com/plus/img/component-images/bento-03-mobile-friendly.png"
                                    alt="">
                            </div>
                        </div>
                    </div>
                    <div
                        class="pointer-events-none absolute inset-px rounded-lg ring-1 shadow-sm ring-black/5 lg:rounded-l-[2rem]">
                    </div>
                </div>
                <div class="relative max-lg:row-start-1">
                    <div class="absolute inset-px rounded-lg bg-white max-lg:rounded-t-[2rem]"></div>
                    <div
                        class="relative flex h-full flex-col overflow-hidden rounded-[calc(var(--radius-lg)+1px)] max-lg:rounded-t-[calc(2rem+1px)]">
                        <div class="px-8 pt-8 sm:px-10 sm:pt-10">
                            <p class="mt-2 text-lg font-medium tracking-tight text-gray-950 max-lg:text-center">
                                Performance</p>
                            <p class="max-w-lg mt-2 text-gray-600 text-sm/6 max-lg:text-center">Lorem ipsum, dolor sit
                                amet consectetur adipisicing elit maiores impedit.</p>
                        </div>
                        <div
                            class="flex items-center justify-center flex-1 px-8 max-lg:pt-10 max-lg:pb-12 sm:px-10 lg:pb-2">
                            <img class="w-full max-lg:max-w-xs"
                                src="https://tailwindui.com/plus/img/component-images/bento-03-performance.png"
                                alt="">
                        </div>
                    </div>
                    <div
                        class="pointer-events-none absolute inset-px rounded-lg ring-1 shadow-sm ring-black/5 max-lg:rounded-t-[2rem]">
                    </div>
                </div>
                <div class="relative max-lg:row-start-3 lg:col-start-2 lg:row-start-2">
                    <div class="absolute bg-white rounded-lg inset-px"></div>
                    <div class="relative flex h-full flex-col overflow-hidden rounded-[calc(var(--radius-lg)+1px)]">
                        <div class="px-8 pt-8 sm:px-10 sm:pt-10">
                            <p class="mt-2 text-lg font-medium tracking-tight text-gray-950 max-lg:text-center">
                                Security</p>
                            <p class="max-w-lg mt-2 text-gray-600 text-sm/6 max-lg:text-center">Morbi viverra dui mi
                                arcu sed. Tellus semper adipiscing suspendisse semper morbi.</p>
                        </div>
                        <div class="@container flex flex-1 items-center max-lg:py-6 lg:pb-2">
                            <img class="h-[min(152px,40cqw)] object-cover"
                                src="https://tailwindui.com/plus/img/component-images/bento-03-security.png"
                                alt="">
                        </div>
                    </div>
                    <div class="absolute rounded-lg shadow-sm pointer-events-none inset-px ring-1 ring-black/5"></div>
                </div>
                <div class="relative lg:row-span-2">
                    <div class="absolute inset-px rounded-lg bg-white max-lg:rounded-b-[2rem] lg:rounded-r-[2rem]">
                    </div>
                    <div
                        class="relative flex h-full flex-col overflow-hidden rounded-[calc(var(--radius-lg)+1px)] max-lg:rounded-b-[calc(2rem+1px)] lg:rounded-r-[calc(2rem+1px)]">
                        <div class="px-8 pt-8 pb-3 sm:px-10 sm:pt-10 sm:pb-0">
                            <p class="mt-2 text-lg font-medium tracking-tight text-gray-950 max-lg:text-center">
                                Powerful APIs</p>
                            <p class="max-w-lg mt-2 text-gray-600 text-sm/6 max-lg:text-center">Sit quis amet rutrum
                                tellus ullamcorper ultricies libero dolor eget sem sodales gravida.</p>
                        </div>
                        <div class="relative min-h-[30rem] w-full grow">
                            <div
                                class="absolute bottom-0 right-0 overflow-hidden bg-gray-900 shadow-2xl top-10 left-10 rounded-tl-xl">
                                <div class="flex bg-gray-800/40 ring-1 ring-white/5">
                                    <div class="flex -mb-px font-medium text-gray-400 text-sm/6">
                                        <div
                                            class="px-4 py-2 text-white border-b border-r border-r-white/10 border-b-white/20 bg-white/5">
                                            NotificationSetting.jsx</div>
                                        <div class="px-4 py-2 border-r border-gray-600/10">App.jsx</div>
                                    </div>
                                </div>
                                <div class="px-6 pt-6 pb-14">
                                    <!-- Your code example -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="pointer-events-none absolute inset-px rounded-lg ring-1 shadow-sm ring-black/5 max-lg:rounded-b-[2rem] lg:rounded-r-[2rem]">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-footer></x-footer>
</body>

</html>
