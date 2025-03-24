@extends('layouts.app')

@section('content')
    <section id="settings" class="p-6 bg-white rounded-lg shadow dark:bg-gray-800" data-aos="fade-up" data-aos-delay="400">
        <h2 class="text-xl font-semibold dark:text-white">Pengaturan</h2>
        <div class="mt-4 space-y-4">
            <!-- Form Ganti Password -->
            <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Password Baru</label>
                <input type="password" placeholder="Masukkan password baru" class="block w-full px-3 py-2 mt-1 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Konfirmasi Password</label>
                <input type="password" placeholder="Konfirmasi password baru" class="block w-full px-3 py-2 mt-1 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
            </div>
            <button class="px-4 py-2 text-white transition-colors duration-300 bg-blue-500 rounded-md hover:bg-blue-600">Simpan Perubahan</button>
        </div>
    </section>
@endsection