@extends('layouts.app')

@section('content')
    <section id="dashboard" class="grid grid-cols-1 gap-6 md:grid-cols-3" data-aos="fade-up">
        <!-- Card Kursus Terdaftar -->
        <div class="p-6 transition-transform duration-300 rounded-lg shadow bg-blue-50 hover:scale-105 dark:bg-blue-900">
            <div class="flex items-center space-x-4">
                <div class="p-3 bg-blue-100 rounded-full dark:bg-blue-800">
                    <!-- Ikon Buku (Kursus Terdaftar) -->
                    <svg class="w-8 h-8 text-blue-500 dark:text-blue-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                    </svg>
                </div>
                <div>
                    <h2 class="text-lg font-semibold text-blue-800 dark:text-blue-100">Kursus Terdaftar</h2>
                    <p class="text-2xl font-bold text-blue-900 dark:text-blue-50">5</p>
                </div>
            </div>
        </div>

        <!-- Card Kursus Aktif -->
        <div class="p-6 transition-transform duration-300 rounded-lg shadow bg-yellow-50 hover:scale-105 dark:bg-yellow-900">
            <div class="flex items-center space-x-4">
                <div class="p-3 bg-yellow-100 rounded-full dark:bg-yellow-800">
                    <!-- Ikon Tanda Centang (Kursus Aktif) -->
                    <svg class="w-8 h-8 text-yellow-500 dark:text-yellow-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <div>
                    <h2 class="text-lg font-semibold text-yellow-800 dark:text-yellow-100">Kursus Aktif</h2>
                    <p class="text-2xl font-bold text-yellow-900 dark:text-yellow-50">3</p>
                </div>
            </div>
        </div>

        <!-- Card Kursus Selesai -->
        <div class="p-6 transition-transform duration-300 rounded-lg shadow bg-green-50 hover:scale-105 dark:bg-green-900">
            <div class="flex items-center space-x-4">
                <div class="p-3 bg-green-100 rounded-full dark:bg-green-800">
                    <!-- Ikon Bendera (Kursus Selesai) -->
                    <svg class="w-8 h-8 text-green-500 dark:text-green-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 21v-4m0 0V5a2 2 0 012-2h6.5l1 1H21l-3 6 3 6h-8.5l-1-1H5a2 2 0 00-2 2zm9-13.5V9"></path>
                    </svg>
                </div>
                <div>
                    <h2 class="text-lg font-semibold text-green-800 dark:text-green-100">Kursus Selesai</h2>
                    <p class="text-2xl font-bold text-green-900 dark:text-green-50">2</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Grafik Statistik Kursus -->
    <section id="charts" class="p-6 bg-white rounded-lg shadow dark:bg-gray-800" data-aos="fade-up" data-aos-delay="200">
        <h2 class="text-xl font-semibold dark:text-white">Statistik Kursus</h2>
        <div class="mt-4">
            <canvas id="courseChart" class="w-full h-64"></canvas>
        </div>
    </section>

    <!-- Progress Bar -->
    <section id="progress" class="p-6 bg-white rounded-lg shadow dark:bg-gray-800" data-aos="fade-up" data-aos-delay="300">
        <h2 class="text-xl font-semibold dark:text-white">Progress Kursus</h2>
        <div class="mt-4 space-y-4">
            <div>
                <p class="text-gray-600 dark:text-gray-300">Tari Rejang</p>
                <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                    <div class="bg-blue-500 h-2.5 rounded-full" style="width: 75%"></div>
                </div>
            </div>
            <div>
                <p class="text-gray-600 dark:text-gray-300">Tari Pendet</p>
                <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                    <div class="bg-yellow-500 h-2.5 rounded-full" style="width: 50%"></div>
                </div>
            </div>
            <div>
                <p class="text-gray-600 dark:text-gray-300">Alat Musik Kendang</p>
                <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                    <div class="bg-green-500 h-2.5 rounded-full" style="width: 90%"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Aktivitas Terbaru -->
    <section id="info" class="p-6 bg-white rounded-lg shadow dark:bg-gray-800" data-aos="fade-up" data-aos-delay="400">
        <h2 class="text-xl font-semibold dark:text-white">Aktivitas Terbaru</h2>
        <div class="mt-4 space-y-4">
            <div class="p-4 bg-gray-100 rounded-lg dark:bg-gray-700">
                <p class="text-gray-600 dark:text-gray-300">Anda menyelesaikan kursus <strong>Tari Rejang</strong>.</p>
                <p class="text-sm text-gray-500 dark:text-gray-400">2 jam yang lalu</p>
            </div>
            <div class="p-4 bg-gray-100 rounded-lg dark:bg-gray-700">
                <p class="text-gray-600 dark:text-gray-300">Anda mendaftar ke kursus <strong>Alat Musik Kendang</strong>.</p>
                <p class="text-sm text-gray-500 dark:text-gray-400">1 hari yang lalu</p>
            </div>
        </div>
    </section>

    <!-- Script untuk Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('courseChart').getContext('2d');
        const courseChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Tari Rejang', 'Tari Pendet', 'Alat Musik Kendang'],
                datasets: [{
                    label: 'Progress Kursus',
                    data: [20, 50, 90],
                    backgroundColor: ['#3b82f6', '#f59e0b', '#10b981'],
                    borderColor: ['#3b82f6', '#f59e0b', '#10b981'],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
@endsection