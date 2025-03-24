@extends('layouts.app')

@section('content')
    <section id="courses" class="p-6 bg-white rounded-lg shadow dark:bg-gray-800" data-aos="fade-up" data-aos-delay="200">
        <h2 class="text-xl font-semibold dark:text-white">Kursus Terdaftar</h2>
        <div class="grid grid-cols-1 gap-4 mt-4 md:grid-cols-2 lg:grid-cols-3">
            <!-- Card Kursus 1 -->
            <div class="p-4 transition-transform duration-300 bg-gray-100 rounded-lg shadow hover:scale-105 dark:bg-gray-700">
                <h3 class="text-lg font-semibold dark:text-white">Web Development</h3>
                <p class="text-gray-600 dark:text-gray-300">Belajar membuat website modern.</p>
                <button class="px-4 py-2 mt-2 text-white transition-colors duration-300 bg-blue-500 rounded-md hover:bg-blue-600">Lanjutkan Belajar</button>
            </div>

            <!-- Card Kursus 2 -->
            <div class="p-4 transition-transform duration-300 bg-gray-100 rounded-lg shadow hover:scale-105 dark:bg-gray-700">
                <h3 class="text-lg font-semibold dark:text-white">UI/UX Design</h3>
                <p class="text-gray-600 dark:text-gray-300">Belajar mendesain antarmuka pengguna.</p>
                <button class="px-4 py-2 mt-2 text-white transition-colors duration-300 bg-blue-500 rounded-md hover:bg-blue-600">Lanjutkan Belajar</button>
            </div>

            <!-- Card Kursus 3 -->
            <div class="p-4 transition-transform duration-300 bg-gray-100 rounded-lg shadow hover:scale-105 dark:bg-gray-700">
                <h3 class="text-lg font-semibold dark:text-white">Machine Learning</h3>
                <p class="text-gray-600 dark:text-gray-300">Belajar membuat model AI.</p>
                <button class="px-4 py-2 mt-2 text-white transition-colors duration-300 bg-blue-500 rounded-md hover:bg-blue-600">Lanjutkan Belajar</button>
            </div>
        </div>
    </section>
@endsection