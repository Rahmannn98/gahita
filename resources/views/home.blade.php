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
            </div>
        </div>
    </div>
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
        const text =
            "Gahita adalah Platform Pembelajaran Kebudayaan dengan menyediakan konten pembelajaran berupa modul & video yang menarik.";
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
    <section class="bg-white dark:bg-gray-900">
        <div class="items-center max-w-screen-xl gap-16 px-4 py-8 mx-auto lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
            <div class="font-light text-blue-700 sm:text-lg dark:text-white">
                <h2 class="mb-4 text-4xl font-extrabold tracking-tight text-blue-900 dark:text-white">Platform Pembelajaran Pertama di Bali</h2>
                <p class="mb-4 font-medium">Gahita hadir sebagai inovasi pendidikan pertama di Bali yang menghubungkan teknologi dengan pembelajaran interaktif. Kami adalah tim strategis, desainer, dan pengembang yang berdedikasi untuk menciptakan pengalaman belajar yang lebih mudah, efektif, dan menyenangkan.</p>
                <p class="mb-4 font-medium">We are strategists, Belajar lebih cerdas, berkembang lebih cepat, hanya di Gahita! </p>
            </div>
            <div class="grid grid-cols-2 gap-4 mt-8">
                <img class="w-full rounded-lg animate-slide-in-left" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/office-long-2.png" alt="office content 1">
                <img class="w-full mt-4 rounded-lg lg:mt-10 animate-slide-in-right" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/office-long-1.png" alt="office content 2">
            </div>
        </div>        
    </section>
    <div class="py-16 bg-white dark:bg-gray-900 sm:py-32">
        <div class="px-6 mx-auto max-w-7xl lg:px-8">
            <h2 class="mb-12 text-4xl font-semibold text-center text-blue-900 dark:text-gray-100">
                Supported By
            </h2>
    
            <!-- Wrapper untuk animasi -->
            <div class="relative overflow-hidden">
                <div class="flex space-x-10 animate-marquee">
                    <div class="relative group">
                        <img class="object-contain transition-transform duration-500 max-h-12 group-hover:scale-110 group-hover:rotate-3"
                            src="img/merdeka.png" alt="merdeka" width="158" height="48">
                    </div>
                    <div class="relative group">
                        <img class="object-contain transition-transform duration-500 max-h-12 group-hover:scale-110 group-hover:rotate-3"
                            src="img/kemenbudaya.png" alt="kemenbudaya" width="158" height="48">
                    </div>
                    <div class="relative group">
                        <img class="object-contain transition-transform duration-500 max-h-12 group-hover:scale-110 group-hover:rotate-3"
                            src="img/pendidikan.png" alt="Kemenpendidikan" width="158" height="48">
                    </div>
                    <div class="relative group">
                        <img class="object-contain transition-transform duration-500 max-h-12 group-hover:scale-110 group-hover:rotate-3"
                            src="img/laravel.png" alt="Laravel" width="158" height="48">
                    </div>
                    <div class="relative group">
                        <img class="object-contain transition-transform duration-500 max-h-12 group-hover:scale-110 group-hover:rotate-3"
                            src="img/udayana.png" alt="Udayana" width="158" height="48">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Tambahkan untuk animasi -->
    <style>
        @keyframes marquee {
            0% { transform: translateX(100%); }
            100% { transform: translateX(-100%); }
        }
        .animate-marquee {
            display: flex;
            white-space: nowrap;
            animation: marquee 12s linear infinite;
        }
    </style>
    
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
                <h2 class="text-5xl font-semibold tracking-tight text-white sm:text-7xl">Pembelajaran dapat diakses
                    Seumur hidup.</h2>
                <p class="mt-8 text-lg font-medium text-gray-300 text-pretty sm:text-xl/8">Materi Pembelajaran di Gahita
                    begitu banyak, kalian dapat memilih materi yang kalian gemari dan jangan khawatir karena waktu akses
                    ke materi kalian akan berlaku seumur hidup, namun ada juga beberapa materi yang kami batasi waktunya
                    seperti 6 bulan - 1 tahun.</p>
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
    
    <div class="px-6 py-24 bg-white dark:bg-gray-900">
        <h1 class="mb-4 text-3xl font-bold text-center text-blue-900 dark:text-gray-100">
           Apa Kata mereka?
          </h1>
          <h2 class="mb-12 font-semibold text-center text-blue-900 text-2l dark:text-gray-100">
            Testimoni dan dukungan yang telah kami dapatkan selama inimenjadi bukti bahwa Platform Gahita profesional & aman.
          </h2>
        <div class="max-w-6xl mx-auto">
            <div class="grid gap-8 md:grid-cols-3">
                <!-- Testimonial Card 1 -->
                <div
                    class="p-6 transition duration-500 transform bg-gray-100 rounded-lg shadow dark:bg-gray-800 hover:scale-105">
                    <blockquote class="text-lg font-semibold text-gray-900 dark:text-white">
                        <p>“Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo expedita voluptas culpa
                            sapiente alias molestiae.”</p>
                    </blockquote>
                    <figcaption class="flex flex-col items-center mt-6">
                        <img class="w-12 h-12 rounded-full"
                            src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                            alt="">
                        <div class="mt-4 text-center">
                            <div class="font-semibold text-gray-900 dark:text-white">Judith Black</div>
                            <div class="text-sm text-gray-600 dark:text-gray-400">CEO of Workcation</div>
                        </div>
                    </figcaption>
                </div>

                <!-- Testimonial Card 2 -->
                <div
                    class="p-6 transition duration-500 transform bg-gray-100 rounded-lg shadow dark:bg-gray-800 hover:scale-105">
                    <blockquote class="text-lg font-semibold text-gray-900 dark:text-white">
                        <p>“Doloribus quisquam vel, quia necessitatibus delectus aperiam reiciendis consequatur velit
                            animi.”</p>
                    </blockquote>
                    <figcaption class="flex flex-col items-center mt-6">
                        <img class="w-12 h-12 rounded-full"
                            src="https://images.unsplash.com/photo-1522075469751-3a6694fb2f61?ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                            alt="">
                        <div class="mt-4 text-center">
                            <div class="font-semibold text-gray-900 dark:text-white">John Doe</div>
                            <div class="text-sm text-gray-600 dark:text-gray-400">Founder of TechFlow</div>
                        </div>
                    </figcaption>
                </div>

                <!-- Testimonial Card 3 -->
                <div
                    class="p-6 transition duration-500 transform bg-gray-100 rounded-lg shadow dark:bg-gray-800 hover:scale-105">
                    <blockquote class="text-lg font-semibold text-gray-900 dark:text-white">
                        <p>“Explicabo similique eum, omnis iure commodi distinctio laudantium nisi excepturi.”</p>
                    </blockquote>
                    <figcaption class="flex flex-col items-center mt-6">
                        <img class="w-12 h-12 rounded-full"
                            src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                            alt="">
                        <div class="mt-4 text-center">
                            <div class="font-semibold text-gray-900 dark:text-white">Sarah Connor</div>
                            <div class="text-sm text-gray-600 dark:text-gray-400">CMO of FutureTech</div>
                        </div>
                    </figcaption>
                </div>
            </div>
        </div>
    </div>
    <x-footer></x-footer>
</body>
</html>
