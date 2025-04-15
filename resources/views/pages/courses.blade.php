@extends('layouts.app')

@section('content')
<section id="courses" class="p-6 bg-white shadow-lg rounded-3xl dark:bg-gray-900" data-aos="fade-up" data-aos-delay="200">

    <!-- Judul dan Deskripsi Halaman -->
    <div class="mb-10 text-center">
        <h2 class="text-4xl font-extrabold text-gray-800 dark:text-white">✨ Kursus Terdaftar</h2>
        <p class="mt-3 text-gray-500 dark:text-gray-300">Pilih dan pelajari seni budaya Bali favoritmu!</p>
    </div>

    <!-- Filter & Sort -->
    <div class="flex flex-col gap-4 mb-8 md:flex-row md:items-center md:justify-between">
        <div class="flex items-center gap-3">
            <label for="filter" class="text-sm font-semibold text-gray-700 dark:text-gray-300">Filter Tingkat</label>
            <select id="filter" class="px-4 py-2 text-sm bg-white border rounded-md shadow-sm dark:bg-gray-800 dark:text-white dark:border-gray-700 focus:ring-2 focus:ring-blue-500">
                <option value="all">Semua</option>
                <option value="pemula">Pemula</option>
                <option value="menengah">Menengah</option>
                <option value="lanjutan">Lanjutan</option>
            </select>
        </div>

        <div class="flex items-center gap-3">
            <label for="sort" class="text-sm font-semibold text-gray-700 dark:text-gray-300">Urutkan Durasi</label>
            <select id="sort" class="px-4 py-2 text-sm bg-white border rounded-md shadow-sm dark:bg-gray-800 dark:text-white dark:border-gray-700 focus:ring-2 focus:ring-blue-500">
                <option value="default">Default</option>
                <option value="shortest">Terlama ke Terpendek</option>
                <option value="longest">Terpendek ke Terlama</option>
            </select>
        </div>
    </div>

    <!-- Grid Cards -->
    <div id="course-list" class="grid gap-6 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
        <div class="course-card" data-level="pemula" data-duration="60">
            @include('components.card', [
                'title' => 'Tari Pendet',
                'desc' => 'Tari Pendet adalah salah satu tarian tradisional yang berasal dari Bali.',
                'color' => 'blue',
                'progress' => 40,
                'level' => 'Pemula',
                'duration' => '1 jam'
            ])
        </div>

        <div class="course-card" data-level="menengah" data-duration="45">
            @include('components.card', [
                'title' => 'Tari Rejang',
                'desc' => 'Tari Rejang adalah salah satu tarian tradisional Bali yang digunakan dalam upacara keagamaan.',
                'color' => 'purple',
                'progress' => 60,
                'level' => 'Menengah',
                'duration' => '45 menit'
            ])
        </div>

        <div class="course-card" data-level="lanjutan" data-duration="120">
            @include('components.card', [
                'title' => 'Kendang Tradisional',
                'desc' => 'Alat musik tradisional Bali yang digunakan dalam pertunjukan seni.',
                'color' => 'green',
                'progress' => 20,
                'level' => 'Lanjutan',
                'duration' => '2 jam'
            ])
        </div>
    </div>
</section>

<!-- JS Filter & Sort -->
<script>
    const filterSelect = document.getElementById('filter');
    const sortSelect = document.getElementById('sort');
    const courseCards = document.querySelectorAll('.course-card');
    const courseList = document.getElementById('course-list');

    function filterCourses() {
        const selectedLevel = filterSelect.value;
        courseCards.forEach(card => {
            const level = card.dataset.level;
            card.style.display = (selectedLevel === 'all' || level === selectedLevel) ? 'block' : 'none';
        });
    }

    function sortCourses() {
        const selectedSort = sortSelect.value;
        const cardsArray = Array.from(courseCards);

        if (selectedSort === 'shortest') {
            cardsArray.sort((a, b) => b.dataset.duration - a.dataset.duration);
        } else if (selectedSort === 'longest') {
            cardsArray.sort((a, b) => a.dataset.duration - b.dataset.duration);
        }

        cardsArray.forEach(card => courseList.appendChild(card));
    }

    filterSelect.addEventListener('change', filterCourses);
    sortSelect.addEventListener('change', sortCourses);
</script>
@endsection
