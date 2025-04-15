@extends('layouts.app')

@section('content')
<section id="profile" class="p-6 bg-white rounded-lg shadow dark:bg-gray-800" data-aos="fade-up" data-aos-delay="100">
    <h2 class="mb-4 text-xl font-semibold dark:text-white">Profil Saya</h2>

    <!-- Foto Profil dan Nama -->
    <div class="flex items-center gap-4">
        <div class="relative w-24 h-24 overflow-hidden border-2 border-blue-500 rounded-full">
            <img src="{{ asset('storage/profile/' . Auth::user()->photo) }}" 
                 alt="Profile" class="object-cover w-full h-full">
        </div>
        <div>
            <h2 class="text-xl font-semibold dark:text-white">{{ Auth::user()->name }}</h2>
            <p class="text-sm text-gray-600 dark:text-gray-300">Bergabung Sejak {{ Auth::user()->created_at->format('F Y') }}</p>
        </div>
    </div>

    <!-- Form Edit Profil -->
    <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data" class="mt-6 space-y-4">
        @csrf
        @method('PUT')

        <!-- Upload Gambar -->
        <div>
            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Foto Profil</label>
            <input type="file" name="photo" class="block w-full mt-1 text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Nama Lengkap</label>
            <input type="text" name="name" value="{{ Auth::user()->name }}"
                class="block w-full px-3 py-2 mt-1 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Email</label>
            <input type="email" name="email" value="{{ Auth::user()->email }}"
                class="block w-full px-3 py-2 mt-1 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Nomor Telepon</label>
            <input type="tel" name="phone" value="{{ Auth::user()->phone ?? '' }}"
                class="block w-full px-3 py-2 mt-1 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
        </div>

        <button type="submit" class="px-5 py-2 text-white transition-all bg-blue-600 rounded-md hover:bg-blue-700">
            Simpan Perubahan
        </button>
    </form>
</section>

@endsection