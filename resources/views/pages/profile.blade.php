@extends('layouts.app')

@section('content')
    <section id="profile" class="p-6 bg-white rounded-lg shadow dark:bg-gray-800" data-aos="fade-up" data-aos-delay="100">
        <h2 class="text-xl font-semibold dark:text-white">Profile Saya</h2>

        <!-- Foto Profil dan Nama -->
        <div class="flex items-center mt-4 space-x-4">
            <div class="relative w-20 h-20 overflow-hidden rounded-full">
                <img src="{{ asset('img/rahman.jpeg') }}" alt="Profile" class="object-cover w-full h-full">
            </div>
            <div>
                <h2 class="text-xl font-semibold dark:text-white">John Doe</h2>
                <p class="text-sm text-gray-600 dark:text-gray-300">Anggota sejak Januari 2023</p>
            </div>
        </div>

        <!-- Progress Bar Profil Lengkap -->
        <div class="mt-4">
            <p class="text-sm font-medium text-gray-700 dark:text-gray-300">Profil Lengkap: 75%</p>
            <div class="w-full h-2 mt-1 bg-gray-200 rounded-full dark:bg-gray-700">
                <div class="h-2 bg-blue-500 rounded-full" style="width: 75%"></div>
            </div>
        </div>

        <!-- Form Edit Profil -->
        <div class="mt-6 space-y-4">
            <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Nama Lengkap</label>
                <input type="text" value="John Doe" class="block w-full px-3 py-2 mt-1 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Email</label>
                <input type="email" value="johndoe@example.com" class="block w-full px-3 py-2 mt-1 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Nomor Telepon</label>
                <input type="tel" value="081234567890" class="block w-full px-3 py-2 mt-1 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
            </div>
            <button class="px-4 py-2 text-white transition-colors duration-300 bg-blue-500 rounded-md hover:bg-blue-600">Simpan Perubahan</button>
        </div>

        <!-- Riwayat Kursus -->
        <div class="mt-6" data-aos="fade-up" data-aos-delay="200">
            <h3 class="text-lg font-semibold dark:text-white">Riwayat Kursus</h3>
            <div class="mt-2 space-y-2">
                <div class="p-4 bg-gray-100 rounded-lg dark:bg-gray-700">
                    <p class="text-gray-600 dark:text-gray-300">Tari Rejang</p>
                    <p class="text-sm text-gray-500 dark:text-gray-400">Selesai pada 12 Oktober 2023</p>
                </div>
                <div class="p-4 bg-gray-100 rounded-lg dark:bg-gray-700">
                    <p class="text-gray-600 dark:text-gray-300">Tari Pendet</p>
                    <p class="text-sm text-gray-500 dark:text-gray-400">Selesai pada 5 September 2023</p>
                </div>
            </div>
        </div>
    </section>
@endsection