@php
    $colorMap = [
        'blue' => ['bg' => 'white', 'text' => 'blue-800', 'progress' => 'blue-500', 'hover' => 'blue-600'],
        'purple' => ['bg' => 'white', 'text' => 'purple-800', 'progress' => 'purple-500', 'hover' => 'purple-600'],
        'green' => ['bg' => 'white', 'text' => 'green-800', 'progress' => 'green-500', 'hover' => 'green-600'],
    ];
    $c = $colorMap[$color] ?? $colorMap['blue'];
@endphp

<div class="p-6 transition transform rounded-xl shadow-md hover:shadow-xl hover:scale-[1.02] bg-{{ $c['bg'] }} dark:bg-{{ $color }}-900">
    <h3 class="text-lg font-semibold text-{{ $c['text'] }} dark:text-white">{{ $title }}</h3>
    <p class="mt-1 text-gray-600 dark:text-gray-300">{{ $desc }}</p>
    <div class="mt-2 text-sm text-gray-500 dark:text-gray-400">Durasi: {{ $duration }} · Tingkat: {{ $level }}</div>
    <div class="w-full h-2 mt-4 bg-gray-200 rounded-full dark:bg-gray-700">
        <div class="h-full rounded-full bg-{{ $c['progress'] }}" style="width: {{ $progress }}%"></div>
    </div>
    <p class="mt-1 text-sm text-right text-{{ $c['progress'] }} dark:text-white">{{ $progress }}% selesai</p>
    <button class="w-full flex items-center justify-center gap-2 px-4 py-2 mt-4 text-white bg-{{ $c['progress'] }} rounded-md hover:bg-{{ $c['hover'] }} transition">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
        </svg>
        Lihat Kursus
    </button>
</div>
