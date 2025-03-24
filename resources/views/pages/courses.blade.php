@extends('layouts.app')

@section('content')
    <section id="courses" class="p-6 bg-white rounded-lg shadow dark:bg-gray-800" data-aos="fade-up" data-aos-delay="200">
        <div class="grid grid-cols-1 gap-6 mt-6 md:grid-cols-2 lg:grid-cols-3">
            <div class="p-6 transition-transform duration-300 rounded-lg shadow-lg bg-blue-50 hover:scale-105 dark:bg-blue-900">
                <div class="flex items-center space-x-4">
                    <div class="p-3 bg-blue-100 rounded-full dark:bg-blue-800">
                        <svg class="w-10 h-10 text-blue-500 dark:text-blue-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M4 8h16M4 12h16m-7 4h7"></path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-blue-800 dark:text-blue-100">Tari Pendet</h3>
                        <p class="text-gray-600 dark:text-gray-300">Tari Pendet adalah salah satu tarian tradisional yang berasal dari Bali, Indonesia.</p>
                    </div>
                </div>
                <button class="w-full px-4 py-2 mt-4 text-white transition-colors duration-300 bg-blue-500 rounded-md hover:bg-blue-600">Lihat Kursus</button>
            </div>

            <div class="p-6 transition-transform duration-300 rounded-lg shadow-lg bg-purple-50 hover:scale-105 dark:bg-purple-900">
                <div class="flex items-center space-x-4">
                    <div class="p-3 bg-purple-100 rounded-full dark:bg-purple-800">
                        <svg class="w-10 h-10 text-purple-500 dark:text-purple-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2L2 7h20L12 2zM2 17l10 5 10-5-10-5-10 5z"></path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-purple-800 dark:text-purple-100">Tari Rejang</h3>
                        <p class="text-gray-600 dark:text-gray-300">Tari Rejang adalah salah satu tarian tradisional yang berasal dari Bali, Indonesia.</p>
                    </div>
                </div>
                <button class="w-full px-4 py-2 mt-4 text-white transition-colors duration-300 bg-purple-500 rounded-md hover:bg-purple-600">Lihat Kursus</button>
            </div>

            <div class="p-6 transition-transform duration-300 rounded-lg shadow-lg bg-green-50 hover:scale-105 dark:bg-green-900">
                <div class="flex items-center space-x-4">
                    <div class="p-3 bg-green-100 rounded-full dark:bg-green-800">
                        <svg class="w-10 h-10 text-green-500 dark:text-green-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M4 8h16M4 12h16m-7 4h7"></path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-green-800 dark:text-green-100">Alat Tradisional Kendang</h3>
                        <p class="text-gray-600 dark:text-gray-300">Alat Traditional Kendang Bali yang digunakan dalam pertunjukan seni.</p>
                    </div>
                </div>
                <button class="w-full px-4 py-2 mt-4 text-white transition-colors duration-300 bg-green-500 rounded-md hover:bg-green-600">Lihat Kursus</button>
            </div>

            <div class="p-6 transition-transform duration-300 rounded-lg shadow-lg bg-yellow-50 hover:scale-105 dark:bg-yellow-900">
                <div class="flex items-center space-x-4">
                    <div class="p-3 bg-yellow-100 rounded-full dark:bg-yellow-800">
                        <svg class="w-10 h-10 text-yellow-500 dark:text-yellow-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2L2 7h20L12 2zM2 17l10 5 10-5-10-5-10 5z"></path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-yellow-800 dark:text-yellow-100">Kursus Musik</h3>
                        <p class="text-gray-600 dark:text-gray-300">Belajar memainkan alat musik tradisional Bali.</p>
                    </div>
                </div>
                <button class="w-full px-4 py-2 mt-4 text-white transition-colors duration-300 bg-yellow-500 rounded-md hover:bg-yellow-600">Lihat Kursus</button>
            </div>

            <!-- Tambahkan lebih banyak kartu kursus di sini jika diperlukan -->
        </div>
    </section>
@endsection