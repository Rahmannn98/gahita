<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="icon" href="/img/logo_gahita.png" type="image/png">
    <meta property="og:image" content="/img/logo_gahita.png">
    <title>Homepage</title>
    
</head>
<body class="h-full">
    <x-header></x-header>
    <div class="relative min-h-screen text-gray-900 bg-white min dark:bg-gray-900 dark:text-white">
        <!-- Background Gambar -->
        <div class="absolute inset-0 bg-center bg-cover -z-10" 
             style="background-image: url('https://images.unsplash.com/photo-1735611675430-ff9543957266?q=80&w=2833&auto=format&fit=crop');">
        </div> 
        <!-- Overlay untuk Gelap/Terang -->
        <div class="absolute inset-0 bg-white/50 dark:bg-black/50 -z-10"></div>
        <div class="relative px-6 isolate pt-14 lg:px-8">
            <div class="absolute inset-x-0 overflow-hidden -top-40 -z-10 transform-gpu blur-3xl sm:-top-80" aria-hidden="true">
                <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 
                            rotate-[30deg] bg-gradient-to-tr from-pink-300 to-indigo-300 opacity-30 
                            sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" 
                     style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 
                     60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 
                     27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
                </div>
            </div>
    
            <div class="max-w-2xl py-32 mx-auto sm:py-48 lg:py-56">
                <div class="hidden sm:mb-8 sm:flex sm:justify-center">
                    <div class="relative px-3 py-1 text-gray-700 rounded-full dark:text-gray-100 text-sm/6 ring-1 ring-gray-700 dark:ring-gray-500 hover:ring-gray-300">
                        Announcing our next lesson. 
                        <a href="#" class="font-semibold text-indigo-600">
                            <span class="absolute inset-0" aria-hidden="true"></span>Read more <span aria-hidden="true">&rarr;</span>
                        </a>
                    </div>
                </div>
                <div class="text-center">
                    <h1 class="text-5xl font-semibold tracking-tight text-gray-600 dark:text-gray-100 sm:text-7xl">
                        Belajar Budaya Bali lebih Mudah
                    </h1>
                    <p class="mt-8 text-lg font-medium text-gray-600 dark:text-gray-300 sm:text-xl">
                        Gahita adalah Platform Pembelajaran Kebudayaan dengan menyediakan konten pembelajaran berupa 
                        modul & video yang menarik.
                    </p>
                    <div class="flex items-center justify-center mt-10 gap-x-6">
                        <a href="#" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold 
                                  text-white shadow-xs hover:bg-indigo-500">
                            Get started
                        </a>
                        <a href="#" class="font-semibold text-indigo-700 text-sm/6">Learn more <span aria-hidden="true">→</span></a>
                    </div>
                </div>
            </div>
    
            <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl 
                        sm:top-[calc(100%-30rem)]" 
                 aria-hidden="true">
                <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 
                            bg-gradient-to-tr from-pink-300 to-indigo-300 opacity-30 
                            sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]" 
                     style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 
                     60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 
                     27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
                </div>
            </div>
        </div>
    </div>
    
      <div class="relative py-24 overflow-hidden bg-gray-900 isolate sm:py-32">
        <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&crop=focalpoint&fp-y=.8&w=2830&h=1500&q=80&blend=111827&sat=-100&exp=15&blend-mode=multiply" alt="" class="absolute inset-0 object-cover object-right -z-10 size-full md:object-center">
        <div class="hidden sm:absolute sm:-top-10 sm:right-1/2 sm:-z-10 sm:mr-10 sm:block sm:transform-gpu sm:blur-3xl" aria-hidden="true">
          <div class="aspect-1097/845 w-[68.5625rem] bg-linear-to-tr from-[#ff4694] to-[#776fff] opacity-20" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
        </div>
        <div class="absolute -top-52 left-1/2 -z-10 -translate-x-1/2 transform-gpu blur-3xl sm:top-[-28rem] sm:ml-16 sm:translate-x-0 sm:transform-gpu" aria-hidden="true">
          <div class="aspect-1097/845 w-[68.5625rem] bg-linear-to-tr from-[#ff4694] to-[#776fff] opacity-20" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
        </div>
        <div class="px-6 mx-auto max-w-7xl lg:px-8">
          <div class="max-w-2xl mx-auto lg:mx-0">
            <h2 class="text-5xl font-semibold tracking-tight text-white sm:text-7xl">Work with us</h2>
            <p class="mt-8 text-lg font-medium text-gray-300 text-pretty sm:text-xl/8">Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat fugiat.</p>
          </div>
          <div class="max-w-2xl mx-auto mt-10 lg:mx-0 lg:max-w-none">
            <dl class="grid grid-cols-1 gap-8 mt-16 sm:mt-20 sm:grid-cols-2 lg:grid-cols-4">
              <div class="flex flex-col-reverse gap-1">
                <dt class="text-gray-300 text-base/7">Offices worldwide</dt>
                <dd class="text-4xl font-semibold tracking-tight text-white">12</dd>
              </div>
              <div class="flex flex-col-reverse gap-1">
                <dt class="text-gray-300 text-base/7">Full-time colleagues</dt>
                <dd class="text-4xl font-semibold tracking-tight text-white">300+</dd>
              </div>
              <div class="flex flex-col-reverse gap-1">
                <dt class="text-gray-300 text-base/7">Hours per week</dt>
                <dd class="text-4xl font-semibold tracking-tight text-white">40</dd>
              </div>
              <div class="flex flex-col-reverse gap-1">
                <dt class="text-gray-300 text-base/7">Paid time off</dt>
                <dd class="text-4xl font-semibold tracking-tight text-white">Unlimited</dd>
              </div>
            </dl>
          </div>
        </div>
      </div>
      <div class="py-24 bg-gray-50 sm:py-32">
        <div class="max-w-2xl px-6 mx-auto lg:max-w-7xl lg:px-8">
          <h2 class="font-semibold text-center text-indigo-600 text-base/7">Deploy faster</h2>
          <p class="max-w-lg mx-auto mt-2 text-4xl font-semibold tracking-tight text-center text-balance text-gray-950 sm:text-5xl">Everything you need to deploy your app</p>
          <div class="grid gap-4 mt-10 sm:mt-16 lg:grid-cols-3 lg:grid-rows-2">
            <div class="relative lg:row-span-2">
              <div class="absolute inset-px rounded-lg bg-white lg:rounded-l-[2rem]"></div>
              <div class="relative flex h-full flex-col overflow-hidden rounded-[calc(var(--radius-lg)+1px)] lg:rounded-l-[calc(2rem+1px)]">
                <div class="px-8 pt-8 pb-3 sm:px-10 sm:pt-10 sm:pb-0">
                  <p class="mt-2 text-lg font-medium tracking-tight text-gray-950 max-lg:text-center">Mobile friendly</p>
                  <p class="max-w-lg mt-2 text-gray-600 text-sm/6 max-lg:text-center">Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo.</p>
                </div>
                <div class="@container relative min-h-[30rem] w-full grow max-lg:mx-auto max-lg:max-w-sm">
                  <div class="absolute inset-x-10 top-10 bottom-0 overflow-hidden rounded-t-[12cqw] border-x-[3cqw] border-t-[3cqw] border-gray-700 bg-gray-900 shadow-2xl">
                    <img class="object-cover object-top size-full" src="https://tailwindui.com/plus/img/component-images/bento-03-mobile-friendly.png" alt="">
                  </div>
                </div>
              </div>
              <div class="pointer-events-none absolute inset-px rounded-lg ring-1 shadow-sm ring-black/5 lg:rounded-l-[2rem]"></div>
            </div>
            <div class="relative max-lg:row-start-1">
              <div class="absolute inset-px rounded-lg bg-white max-lg:rounded-t-[2rem]"></div>
              <div class="relative flex h-full flex-col overflow-hidden rounded-[calc(var(--radius-lg)+1px)] max-lg:rounded-t-[calc(2rem+1px)]">
                <div class="px-8 pt-8 sm:px-10 sm:pt-10">
                  <p class="mt-2 text-lg font-medium tracking-tight text-gray-950 max-lg:text-center">Performance</p>
                  <p class="max-w-lg mt-2 text-gray-600 text-sm/6 max-lg:text-center">Lorem ipsum, dolor sit amet consectetur adipisicing elit maiores impedit.</p>
                </div>
                <div class="flex items-center justify-center flex-1 px-8 max-lg:pt-10 max-lg:pb-12 sm:px-10 lg:pb-2">
                  <img class="w-full max-lg:max-w-xs" src="https://tailwindui.com/plus/img/component-images/bento-03-performance.png" alt="">
                </div>
              </div>
              <div class="pointer-events-none absolute inset-px rounded-lg ring-1 shadow-sm ring-black/5 max-lg:rounded-t-[2rem]"></div>
            </div>
            <div class="relative max-lg:row-start-3 lg:col-start-2 lg:row-start-2">
              <div class="absolute bg-white rounded-lg inset-px"></div>
              <div class="relative flex h-full flex-col overflow-hidden rounded-[calc(var(--radius-lg)+1px)]">
                <div class="px-8 pt-8 sm:px-10 sm:pt-10">
                  <p class="mt-2 text-lg font-medium tracking-tight text-gray-950 max-lg:text-center">Security</p>
                  <p class="max-w-lg mt-2 text-gray-600 text-sm/6 max-lg:text-center">Morbi viverra dui mi arcu sed. Tellus semper adipiscing suspendisse semper morbi.</p>
                </div>
                <div class="@container flex flex-1 items-center max-lg:py-6 lg:pb-2">
                  <img class="h-[min(152px,40cqw)] object-cover" src="https://tailwindui.com/plus/img/component-images/bento-03-security.png" alt="">
                </div>
              </div>
              <div class="absolute rounded-lg shadow-sm pointer-events-none inset-px ring-1 ring-black/5"></div>
            </div>
            <div class="relative lg:row-span-2">
              <div class="absolute inset-px rounded-lg bg-white max-lg:rounded-b-[2rem] lg:rounded-r-[2rem]"></div>
              <div class="relative flex h-full flex-col overflow-hidden rounded-[calc(var(--radius-lg)+1px)] max-lg:rounded-b-[calc(2rem+1px)] lg:rounded-r-[calc(2rem+1px)]">
                <div class="px-8 pt-8 pb-3 sm:px-10 sm:pt-10 sm:pb-0">
                  <p class="mt-2 text-lg font-medium tracking-tight text-gray-950 max-lg:text-center">Powerful APIs</p>
                  <p class="max-w-lg mt-2 text-gray-600 text-sm/6 max-lg:text-center">Sit quis amet rutrum tellus ullamcorper ultricies libero dolor eget sem sodales gravida.</p>
                </div>
                <div class="relative min-h-[30rem] w-full grow">
                  <div class="absolute bottom-0 right-0 overflow-hidden bg-gray-900 shadow-2xl top-10 left-10 rounded-tl-xl">
                    <div class="flex bg-gray-800/40 ring-1 ring-white/5">
                      <div class="flex -mb-px font-medium text-gray-400 text-sm/6">
                        <div class="px-4 py-2 text-white border-b border-r border-r-white/10 border-b-white/20 bg-white/5">NotificationSetting.jsx</div>
                        <div class="px-4 py-2 border-r border-gray-600/10">App.jsx</div>
                      </div>
                    </div>
                    <div class="px-6 pt-6 pb-14">
                      <!-- Your code example -->
                    </div>
                  </div>
                </div>
              </div>
              <div class="pointer-events-none absolute inset-px rounded-lg ring-1 shadow-sm ring-black/5 max-lg:rounded-b-[2rem] lg:rounded-r-[2rem]"></div>
            </div>
          </div>
        </div>
      </div>
      <x-footer></x-footer>
</body>
</html>