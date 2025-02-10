<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite('resources/css/app.css')
    <title>Halaman About</title>
</head>
<x-header></x-header>
<body>
    <section class="mt-16 bg-white dark:bg-gray-900">
        <div class="container px-6 py-10 mx-auto">
            <div class="text-center">
                <h1 class="text-2xl font-semibold text-gray-800 capitalize lg:text-3xl dark:text-white">Pengajar Seni
                    Gahita</h1>
                <p class="max-w-lg mx-auto mt-4 text-gray-500">
                    Berikut merupakan pengajar seni gahita yang akan membimbing anda dalam belajar seni tradtional Bali
                </p>
            </div>
            <div class="grid grid-cols-1 gap-8 mt-8 lg:grid-cols-2">
                <div>
                    <img class="relative z-10 object-cover w-full rounded-md h-96" src="img/IdaBagus.jpg"
                        alt="IdaBagus">
                    <div class="relative z-20 max-w-lg p-6 mx-auto -mt-20 bg-white rounded-md shadow dark:bg-gray-900">
                        <a href="#"
                            class="font-semibold text-gray-800 hover:underline dark:text-white md:text-xl">Ida Bagus
                            Bhaskara</a>
                        <p class="mt-3 text-sm text-gray-500 dark:text-gray-300 md:text-sm">Beliau merupakan penggiat
                            kesenian wayang yang sanagt luar biasa dan nantinya kalian akan dibimbing oleh beliau untuk
                            melestarikan seni wayang</p>
                        <p class="mt-3 text-sm text-blue-500">21 October 2019</p>
                    </div>
                </div>
                <div>
                    <img class="relative z-10 object-cover w-full rounded-md h-96" src="img/nyoman.jpg"
                        alt="NyomanTjandari">
                    <div class="relative z-20 max-w-lg p-6 mx-auto -mt-20 bg-white rounded-md shadow dark:bg-gray-900">
                        <a href="#"
                            class="font-semibold text-gray-800 hover:underline dark:text-white md:text-xl">
                            Nyoman Tjandari
                        </a>
                        <p class="mt-3 text-sm text-gray-500 dark:text-gray-300 md:text-sm">
                            Beliau merupakan seniman yang sangat berbakat dalam bidang seni tari dan Beliau merupakan
                            seorang maestri tari arja
                        </p>
                        <p class="mt-3 text-sm text-blue-500">20 October 2019</p>
                    </div>
                </div>
                <div>
                    <img class="relative z-10 object-cover w-full rounded-md h-96" src="img/madecat.jpg" alt="Made Cat">
                    <div class="relative z-20 max-w-lg p-6 mx-auto -mt-20 bg-white rounded-md shadow dark:bg-gray-900">
                        <a href="#"
                            class="font-semibold text-gray-800 hover:underline dark:text-white md:text-xl">
                            Made Cat
                        </a>
                        <p class="mt-3 text-sm text-gray-500 dark:text-gray-300 md:text-sm">
                            Beliau merupakan seniman yang sangat berbakat dalam bidang seni Tari dan juga salah satu
                            maestro Tari Topeng yang ada di Bali
                        </p>
                        <p class="mt-3 text-sm text-blue-500">20 October 2019</p>
                    </div>
                </div>
                <div>
                    <img class="relative z-10 object-cover w-full rounded-md h-96" src="img/sudinara.jpg"
                        alt="Sudiva Narayana">
                    <div class="relative z-20 max-w-lg p-6 mx-auto -mt-20 bg-white rounded-md shadow dark:bg-gray-900">
                        <a href="#"
                            class="font-semibold text-gray-800 hover:underline dark:text-white md:text-xl">
                            Sudinara
                        </a>
                        <p class="mt-3 text-sm text-gray-500 dark:text-gray-300 md:text-sm">
                            Beliau merupakan seniman yang sangat berbakat dalam bidang seni kendang dan beliau merupakan
                            maestro seni kendang yang ada di Bali
                        <p class="mt-3 text-sm text-blue-500">20 October 2019</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <x-footer></x-footer>
</body>

</html>
