@extends('layouts.app')

@section('content')
    <section id="history" class="p-6 bg-white rounded-lg shadow dark:bg-gray-800" data-aos="fade-up" data-aos-delay="300">
        <h2 class="text-xl font-semibold dark:text-white">Riwayat Pembelian</h2>
        <div class="mt-4 space-y-4">
            <!-- Riwayat 1 -->
            <div class="p-4 transition-transform duration-300 rounded-lg shadow bg-blue-50 hover:scale-105 dark:bg-blue-900">
                <div class="flex items-center space-x-4">
                    <div class="p-2 bg-blue-100 rounded-full dark:bg-blue-800">
                        <svg class="w-6 h-6 text-blue-500 dark:text-blue-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M4 8h16M4 12h16m-7 4h7"></path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-blue-800 dark:text-blue-100">Tari Rejang</h3>
                        <p class="text-gray-600 dark:text-gray-300">Tanggal Pembelian: 12 Oktober 2023</p>
                        <p class="text-gray-600 dark:text-gray-300">Harga: Rp 500.000</p>
                    </div>
                </div>
            </div>

            <!-- Riwayat 2 -->
            <div class="p-4 transition-transform duration-300 rounded-lg shadow bg-green-50 hover:scale-105 dark:bg-green-900">
                <div class="flex items-center space-x-4">
                    <div class="p-2 bg-green-100 rounded-full dark:bg-green-800">
                        <svg class="w-6 h-6 text-green-500 dark:text-green-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M4 8h16M4 12h16m-7 4h7"></path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-green-800 dark:text-green-100">Tari Pendet</h3>
                        <p class="text-gray-600 dark:text-gray-300">Tanggal Pembelian: 5 September 2023</p>
                        <p class="text-gray-600 dark:text-gray-300">Harga: Rp 400.000</p>
                    </div>
                </div>
            </div>

            <!-- Riwayat 3 -->
            <div class="p-4 transition-transform duration-300 rounded-lg shadow bg-yellow-50 hover:scale-105 dark:bg-yellow-900">
                <div class="flex items-center space-x-4">
                    <div class="p-2 bg-yellow-100 rounded-full dark:bg-yellow-800">
                        <svg class="w-6 h-6 text-yellow-500 dark:text-yellow-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M4 8h16M4 12h16m-7 4h7"></path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-yellow-800 dark:text-yellow-100">Alat Musik Kendang</h3>
                        <p class="text-gray-600 dark:text-gray-300">Tanggal Pembelian: 20 Agustus 2023</p>
                        <p class="text-gray-600 dark:text-gray-300">Harga: Rp 600.000</p>
                    </div>
                </div>
            </div>

            <!-- Riwayat 4 -->
            <div class="p-4 transition-transform duration-300 rounded-lg shadow bg-red-50 hover:scale-105 dark:bg-red-900">
                <div class="flex items-center space-x-4">
                    <div class="p-2 rounded-full bg-red- 100 dark:bg-red-800">
                        <svg class="w-6 h-6 text-red-500 dark:text-red-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M4 8h16M4 12h16m-7 4h7"></path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-red-800 dark:text-red-100">Tari Kecak</h3>
                        <p class="text-gray-600 dark:text-gray-300">Tanggal Pembelian: 12 Mei 2023</p>
                        <p class="text-gray-600 dark:text-gray-300">Harga: Rp 507.000</p>
                    </div>
                </div>
            </div>

            <!-- Riwayat 5 -->
            <div class="p-4 transition-transform duration-300 rounded-lg shadow bg-purple-50 hover:scale-105 dark:bg-purple-900">
                <div class="flex items-center space-x-4">
                    <div class="p-2 bg-purple-100 rounded-full dark:bg-purple-800">
                        <svg class="w-6 h-6 text-purple-500 dark:text-purple-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M4 8h16M4 12h16m-7 4h7"></path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-purple-800 dark:text-purple-100">Alat Musik Reong</h3>
                        <p class="text-gray-600 dark:text-gray-300">Tanggal Pembelian: 24 Juli 2024</p>
                        <p class="text-gray-600 dark:text-gray-300">Harga: Rp 90.000</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection