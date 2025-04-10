@extends('layouts.app')

@section('content')
    <section id="dashboard" class="grid grid-cols-1 gap-6 md:grid-cols-3" data-aos="fade-up">
        <div class="col-span-3 mb-4">
            <h1 class="text-2xl font-semibold text-gray-800 dark:text-white ">Selamat datang {{ Auth::user()->name; }}!</h1>
        </div>
        <div class="p-6 transition-transform duration-300 bg-white rounded-lg shadow hover:scale-105 ">
            <div class="flex items-center space-x-4">
                <div class="p-3 bg-blue-100 rounded-full dark:bg-blue-800">
                    <svg class="w-6 h-6 text-blue-500 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M11 4.717c-2.286-.58-4.16-.756-7.045-.71A1.99 1.99 0 0 0 2 6v11c0 1.133.934 2.022 2.044 2.007 2.759-.038 4.5.16 6.956.791V4.717Zm2 15.081c2.456-.631 4.198-.829 6.956-.791A2.013 2.013 0 0 0 22 16.999V6a1.99 1.99 0 0 0-1.955-1.993c-2.885-.046-4.76.13-7.045.71v15.081Z" clip-rule="evenodd"/>
                    </svg>    
                </div>
                <div>
                    <h2 class="text-lg font-semibold text-blue-800 dark:text-blue-100">Khursus Terdaftar</h2>
                    <p class="text-2xl font-bold text-blue-900 dark:text-blue-50">40,689</p>
                    <div class="flex items-center mt-1 text-sm text-green-600 dark:text-green-400">
                        <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5 10l5-5 5 5H5z" clip-rule="evenodd" />
                        </svg>
                        8.5% Up from yesterday
                    </div>
                </div>
            </div>
        </div>
    
        <div class="p-6 transition-transform duration-300 bg-white rounded-lg shadow hover:scale-105 ">
            <div class="flex items-center space-x-4">
                <div class="p-3 bg-yellow-100 rounded-full dark:bg-yellow-800">
                    <svg class="w-6 h-6 text-yellow-500 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12.4472 4.10557c-.2815-.14076-.6129-.14076-.8944 0L2.76981 8.49706l9.21949 4.39024L21 8.38195l-8.5528-4.27638Z"/>
                        <path d="M5 17.2222v-5.448l6.5701 3.1286c.278.1325.6016.1293.8771-.0084L19 11.618v5.6042c0 .2857-.1229.5583-.3364.7481l-.0025.0022-.0041.0036-.0103.009-.0119.0101-.0181.0152c-.024.02-.0562.0462-.0965.0776-.0807.0627-.1942.1465-.3405.2441-.2926.195-.7171.4455-1.2736.6928C15.7905 19.5208 14.1527 20 12 20c-2.15265 0-3.79045-.4792-4.90614-.9751-.5565-.2473-.98098-.4978-1.27356-.6928-.14631-.0976-.2598-.1814-.34049-.2441-.04036-.0314-.07254-.0576-.09656-.0776-.01201-.01-.02198-.0185-.02991-.0253l-.01038-.009-.00404-.0036-.00174-.0015-.0008-.0007s-.00004 0 .00978-.0112l-.00009-.0012-.01043.0117C5.12215 17.7799 5 17.5079 5 17.2222Zm-3-6.8765 2 .9523V17c0 .5523-.44772 1-1 1s-1-.4477-1-1v-6.6543Z"/>
                      </svg>                      
                </div>
                <div>
                    <h2 class="text-lg font-semibold text-yellow-800 ">Khursus Aktif</h2>
                    <p class="text-2xl font-bold text-yellow-900 dark:text-yellow-50">10,293</p>
                    <div class="flex items-center mt-1 text-sm text-green-600 dark:text-green-400">
                        <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5 10l5-5 5 5H5z" clip-rule="evenodd" />
                        </svg>
                        1.3% Up from past week
                    </div>
                </div>
            </div>
        </div>
        <div class="p-6 transition-transform duration-300 bg-white rounded-lg shadow hover:scale-105 ">
            <div class="flex items-center space-x-4">
                <div class="p-3 bg-green-100 rounded-full dark:bg-green-800">
                    <!-- Icon Chart -->
                    <svg class="w-8 h-8 text-green-500 dark:text-green-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3v18h18M9 17l3-3 4 4M13 13l3-3 2 2" />
                    </svg>
                </div>
                <div>
                    <h2 class="text-lg font-semibold text-green-800 dark:text-green-100">Khursus Selesai</h2>
                    <p class="text-2xl font-bold text-green-900 dark:text-green-50">1000</p>
                    <div class="flex items-center mt-1 text-sm text-red-600 dark:text-red-400">
                        <svg class="w-4 h-4 mr-1 rotate-180" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5 10l5-5 5 5H5z" clip-rule="evenodd" />
                        </svg>
                        4.3% Down from yesterday
                    </div>
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
                <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray- 700">
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
                labels: ['Kursus Terdaftar', 'Kursus Aktif', 'Kursus Selesai'],
                datasets: [{
                    label: 'Jumlah Kursus',
                    data: [5, 3, 2],
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