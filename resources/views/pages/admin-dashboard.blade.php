@extends('layouts.app')

@section('content')
<section id="admin-dashboard" class="p-6" data-aos="fade-up">
    <h1 class="text-2xl font-semibold text-gray-800 dark:text-white">
        Selamat datang Admin {{ Auth::user()->name }}!
    </h1>

    <div class="grid grid-cols-1 gap-6 mt-6 md:grid-cols-2 lg:grid-cols-3">
        {{-- Total Pengguna --}}
        <div class="p-4 bg-blue-100 rounded-lg shadow dark:bg-blue-900">
            <h3 class="text-lg font-semibold text-blue-800 dark:text-blue-100">Total Pengguna</h3>
            <p class="text-2xl font-bold text-blue-900 dark:text-white">{{ $totalUsers ?? 0 }}</p>
        </div>

        {{-- Total Kursus --}}
        <div class="p-4 bg-green-100 rounded-lg shadow dark:bg-green-900">
            <h3 class="text-lg font-semibold text-green-800 dark:text-green-100">Total Kursus</h3>
            <p class="text-2xl font-bold text-green-900 dark:text-white">{{ $totalCourses ?? 0 }}</p>
        </div>

        {{-- Manajemen Konten --}}
        <div class="p-4 bg-yellow-100 rounded-lg shadow dark:bg-yellow-900">
            <h3 class="text-lg font-semibold text-yellow-800 dark:text-yellow-100">Aksi Cepat</h3>
            <a href="{{ route('admin.users.index') }}" class="block mt-2 text-sm text-blue-600 underline hover:text-blue-800">Kelola Pengguna</a>
            <a href="{{ route('admin.courses.index') }}" class="block mt-1 text-sm text-blue-600 underline hover:text-blue-800">Kelola Kursus</a>
        </div>
    </div>

    {{-- Chart --}}
    <div class="p-6 mt-6 bg-white rounded-lg shadow dark:bg-gray-800">
        <h2 class="mb-4 text-xl font-semibold dark:text-white">Statistik Kursus</h2>
        <canvas id="adminChart" class="w-full h-64"></canvas>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('adminChart').getContext('2d');
    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Pengguna', 'Kursus'],
            datasets: [{
                label: 'Statistik',
                data: [{{ $totalUsers ?? 0 }}, {{ $totalCourses ?? 0 }}],
                backgroundColor: ['#3b82f6', '#10b981'],
                borderColor: ['#3b82f6', '#10b981'],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: { beginAtZero: true }
            }
        }
    });
</script>
@endsection
<style>
    #admin-dashboard {
        animation: fadeIn 0.5s ease-in-out;
    }

    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }
</style>