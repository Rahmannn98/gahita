@extends('layouts.app')
@section('content')

@foreach ($histories as $history)
<section id="courses" class="p-6 bg-white shadow-lg rounded-3xl dark:bg-gray-900" data-aos="fade-up" data-aos-delay="200">
    <div class="p-6 transition-transform duration-300 rounded-lg shadow-lg hover:scale-105
        {{ $loop->iteration % 5 == 1 ? 'bg-blue-50 dark:bg-blue-900 hover:bg-blue-100 dark:hover:bg-blue-700' : '' }}
        {{ $loop->iteration % 5 == 2 ? 'bg-green-50 dark:bg-green-900 hover:bg-green-100 dark:hover:bg-green-700' : '' }}
        {{ $loop->iteration % 5 == 3 ? 'bg-yellow-50 dark:bg-yellow-900 hover:bg-yellow-100 dark:hover:bg-yellow-700' : '' }}
        {{ $loop->iteration % 5 == 4 ? 'bg-red-50 dark:bg-red-900 hover:bg-red-100 dark:hover:bg-red-700' : '' }}
        {{ $loop->iteration % 5 == 0 ? 'bg-purple-50 dark:bg-purple-900 hover:bg-purple-100 dark:hover:bg-purple-700' : '' }}
    ">
        <div class="flex items-center justify-between space-x-4">
            <div class="flex items-center space-x-4">
                <div class="p-3 rounded-full 
                    {{ $loop->iteration % 5 == 1 ? 'bg-blue-100 dark:bg-blue-800' : '' }}
                    {{ $loop->iteration % 5 == 2 ? 'bg-green-100 dark:bg-green-800' : '' }}
                    {{ $loop->iteration % 5 == 3 ? 'bg-yellow-100 dark:bg-yellow-800' : '' }}
                    {{ $loop->iteration % 5 == 4 ? 'bg-red-100 dark:bg-red-800' : '' }}
                    {{ $loop->iteration % 5 == 0 ? 'bg-purple-100 dark:bg-purple-800' : '' }}
                ">
                    <svg class="w-8 h-8 
                        {{ $loop->iteration % 5 == 1 ? 'text-blue-500 dark:text-blue-200' : '' }}
                        {{ $loop->iteration % 5 == 2 ? 'text-green-500 dark:text-green-200' : '' }}
                        {{ $loop->iteration % 5 == 3 ? 'text-yellow-500 dark:text-yellow-200' : '' }}
                        {{ $loop->iteration % 5 == 4 ? 'text-red-500 dark:text-red-200' : '' }}
                        {{ $loop->iteration % 5 == 0 ? 'text-purple-500 dark:text-purple-200' : '' }}"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M4 8h16M4 12h16m-7 4h7"></path>
                    </svg>
                </div>
                <div>
                    <h3 class="text-xl font-semibold 
                        {{ $loop->iteration % 5 == 1 ? 'text-blue-800 dark:text-blue-100' : '' }}
                        {{ $loop->iteration % 5 == 2 ? 'text-green-800 dark:text-green-100' : '' }}
                        {{ $loop->iteration % 5 == 3 ? 'text-yellow-800 dark:text-yellow-100' : '' }}
                        {{ $loop->iteration % 5 == 4 ? 'text-red-800 dark:text-red-100' : '' }}
                        {{ $loop->iteration % 5 == 0 ? 'text-purple-800 dark:text-purple-100' : '' }}
                    ">{{ $history->nama }}</h3>
                    <p class="text-gray-600 dark:text-gray-300">
                        Tanggal Pembelian: {{ \Carbon\Carbon::parse($history->tanggal)->translatedFormat('d F Y') }}
                    </p>
                    <p class="text-gray-600 dark:text-gray-300">
                        Harga: <span class="font-bold">Rp {{ number_format($history->harga, 0, ',', '.') }}</span>
                    </p>
                </div>
            </div>
            <a href="{{ route('history', $history->id) }}"
               class="text-lg font-medium hover:text-blue-700 dark:hover:text-blue-100
                    {{ $loop->iteration % 5 == 1 ? 'text-blue-500 dark:text-blue-300' : '' }}
                    {{ $loop->iteration % 5 == 2 ? 'text-green-500 dark:text-green-300' : '' }}
                    {{ $loop->iteration % 5 == 3 ? 'text-yellow-500 dark:text-yellow-300' : '' }}
                    {{ $loop->iteration % 5 == 4 ? 'text-red-500 dark:text-red-300' : '' }}
                    {{ $loop->iteration % 5 == 0 ? 'text-purple-500 dark:text-purple-300' : '' }}
            ">
            </a>
        </div>
    </div>
</section>
@endforeach

@endsection