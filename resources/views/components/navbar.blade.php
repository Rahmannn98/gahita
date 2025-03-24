<header class="flex items-center justify-between p-4 bg-white shadow dark:bg-gray-800">
    <div class="flex items-center space-x-4">
        <button id="sidebar-toggle" class="md:hidden">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
        </button>
        <h1 class="text-2xl font-semibold dark:text-white">{{ $title ?? 'Dashboard' }}</h1>
    </div>
    <div class="flex items-center space-x-4">
        <div class="relative">
            <img class="w-10 h-10 rounded-full" src="{{ asset('img/rahman.jpeg') }}" alt="Profile">
        </div>
    </div>
</header>