@extends('layouts.app')

@section('content')
    <section id="history" class="p-6 bg-white rounded-lg shadow dark:bg-gray-800" data-aos="fade-up" data-aos-delay="300">
        <h2 class="text-xl font-semibold dark:text-white">Riwayat Pembelian</h2>
        <div class="mt-4 space-y-4">
            <!-- Riwayat 1 -->
            <div class="p-4 transition-transform duration-300 bg-gray-100 rounded-lg shadow hover:scale-105 dark:bg-gray-700">
                <h3 class="text-lg font-semibold dark:text-white">Web Development</h3>
                <p class="text-gray-600 dark:text-gray-300">Tanggal Pembelian: 12 Oktober 2023</p>
                <p class="text-gray-600 dark:text-gray-300">Harga: Rp 500.000</p>
            </div>

            <!-- Riwayat 2 -->
            <div class="p-4 transition-transform duration-300 bg-gray-100 rounded-lg shadow hover:scale-105 dark:bg-gray-700">
                <h3 class="text-lg font-semibold dark:text-white">UI/UX Design</h3>
                <p class="text-gray-600 dark:text-gray-300">Tanggal Pembelian: 5 September 2023</p>
                <p class="text-gray-600 dark:text-gray-300">Harga: Rp 400.000</p>
            </div>

            <!-- Riwayat 3 -->
            <div class="p-4 transition-transform duration-300 bg-gray-100 rounded-lg shadow hover:scale-105 dark:bg-gray-700">
                <h3 class="text-lg font-semibold dark:text-white">Machine Learning</h3>
                <p class="text-gray-600 dark:text-gray-300">Tanggal Pembelian: 20 Agustus 2023</p>
                <p class="text-gray-600 dark:text-gray-300">Harga: Rp 600.000</p>
            </div>
        </div>
    </section>
@endsection