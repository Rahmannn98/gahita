<div>
    <header class="fixed inset-x-0 top-0 z-50 bg-white/30 dark:bg-gray-900/30 backdrop-blur-md">
        <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global" x-data="{ isOpen: false }">
          <div class="flex lg:flex-1">
            <a href="#" class="-m-1.5 p-1.5">
              <span class="sr-only">Your Company</span>
              <img class="w-auto h-8 opacity-80 dark:hidden" src="img/gahita.png" alt="Logo Gahita"> 
              <img class="hidden w-auto h-8 opacity-100 dark:block" src="img/gahita_white.png" alt="Logo Gahita">
            </a>
          </div>
          <div class="flex lg:hidden">
            <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700 dark:text-white">
              <span class="sr-only">Open main menu</span>
              <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
              </svg>
            </button>
          </div>
          <div class="hidden lg:flex lg:gap-x-12">
            <a href="/home" class="font-semibold text-gray-700 dark:text-gray-100 text-sm/6">Beranda</a>
            <a href="/materi" class="font-semibold text-gray-700 dark:text-gray-100 text-sm/6">Materi</a>
            <a href="/pengajar" class="font-semibold text-gray-700 dark:text-gray-100 text-sm/6">Pengajar</a>
            <a href="/contact" class="font-semibold text-gray-700 dark:text-gray-100 text-sm/6">Contact</a>
         </div>        
          <div class="hidden lg:flex lg:flex-1 lg:justify-end">
            <button id="theme-toggle" class="p-2 text-gray-900 bg-gray-200 rounded-md dark:text-white dark:bg-gray-800">
            <span id="theme-toggle-light" class="hidden">🌞</span>
            <span id="theme-toggle-dark">🌙</span>
            <script>
                document.addEventListener("DOMContentLoaded", function () {
                    const themeToggle = document.getElementById("theme-toggle");
                    const htmlElement = document.documentElement;
                
                    // Cek jika dark mode sebelumnya aktif
                    if (localStorage.getItem("theme") === "dark") {
                        htmlElement.classList.add("dark");
                    }
                
                    themeToggle.addEventListener("click", () => {
                        if (htmlElement.classList.contains("dark")) {
                            htmlElement.classList.remove("dark");
                            localStorage.setItem("theme", "light");
                        } else {
                            htmlElement.classList.add("dark");
                            localStorage.setItem("theme", "dark");
                        }
                    });
                });
                </script>
        </button>
        </div>
        </nav>
        <!-- Mobile menu, show/hide based on menu open state. -->
        {{-- <div class="lg:hidden" role="dialog" aria-modal="true">
          <!-- Background backdrop, show/hide based on slide-over state. -->
          <div class="fixed inset-0 z-50"></div>
          <div class="fixed inset-y-0 right-0 z-50 w-full px-6 py-6 overflow-y-auto bg-white sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
            <div class="flex items-center justify-between">
              <a href="#" class="-m-1.5 p-1.5">
                <span class="sr-only">Your Company</span>
                <img class="w-auto h-8" src="https://tailwindui.com/pl us/img/logos/mark.svg?color=indigo&shade=600" alt="">
              </a>
              <button type="button" @click="isOpen = !isOpen" class="-m-2.5 rounded-md p-2.5 text-gray-700">
                <span class="sr-only">Close menu</span>
                <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                </svg>
              </button>
            </div>
            <div class="flow-root mt-6">
              <div class="-my-6 divide-y divide-gray-500/10">
                <div class="py-6 space-y-2">
                  <a href="/home" class="block px-3 py-2 -mx-3 font-semibold text-gray-900 rounded-lg text-base/7 hover:bg-gray-50">Branda</a>
                  <a href="/materi" class="block px-3 py-2 -mx-3 font-semibold text-gray-900 rounded-lg text-base/7 hover:bg-gray-50">Materi</a>
                  <a href="/pengajar" class="block px-3 py-2 -mx-3 font-semibold text-gray-900 rounded-lg text-base/7 hover:bg-gray-50">Pengajar</a>
                  <a href="/contact" class="block px-3 py-2 -mx-3 font-semibold text-gray-900 rounded-lg text-base/7 hover:bg-gray-50">Contact</a>
                </div>
                <div class="py-6">
                  <a href="#" class="-mx-3 block rounded-lg px-3 py-2.5 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Log in</a>
                </div> --}}
              </div>
            </div>
          </div>
        </div>
      </header>
</div>