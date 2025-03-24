<header class="flex items-center justify-between p-4 bg-white shadow-md dark:bg-gray-800">
    <div class="flex items-center space-x-4">
        <button id="sidebar-toggle" class="transition-transform duration-300 transform md:hidden focus:outline-none hover:scale-110">
            <svg class="w-6 h-6 text-gray-800 dark:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
        </button>
        <h1 class="text-2xl font-semibold text-transparent bg-clip-text bg-gradient-to-r from-blue-800 to-blue-700">
            {{ $title ?? 'Dashboard' }}
        </h1>
    </div>
    <div class="flex items-center space-x-4">
        <div class="relative">
            <img class="object-cover w-10 h-10 transition-transform duration-300 rounded-full hover:scale-110" src="{{ asset('img/rahman.jpeg') }}" alt="Profile">
        </div>
    </div>
</header>