<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    @vite('resources/css/app.css')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script>
        function togglePassword(id, toggleId) {
            const input = document.getElementById(id);
            const icon = document.getElementById(toggleId);
    
            if (input.type === "password") {
                input.type = "text";
                icon.innerHTML = eyeOffSVG;
            } else {
                input.type = "password";
                icon.innerHTML = eyeSVG;
            }
        }
    
        const eyeSVG = `
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M2.458 12C3.732 7.943 7.523 5 12 5s8.268 2.943 9.542 7c-1.274 4.057-5.065 7-9.542 7s-8.268-2.943-9.542-7z" />
            </svg>`;
    
        const eyeOffSVG = `
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.542-7a10.05 10.05 0 012.217-3.592M9.88 9.88a3 3 0 104.24 4.24" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M3 3l18 18" />
            </svg>`;
    </script>
    
    
    <style>
        .animate-float {
            animation: float 6s ease-in-out infinite;
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-10px);
            }
        }
    </style>
</head>

<body class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="flex items-center justify-center min-h-screen bg-gray-100">
        <div class="flex flex-col w-full max-w-4xl overflow-hidden bg-white rounded-lg shadow-md md:flex-row">

            <!-- Gambar -->
            <div class="relative flex items-center justify-center w-full md:w-1/2 bg-gradient-to-br">
                <img src="{{ asset('img/peaople.svg') }}" alt="Login Animation"
                    class="object-contain w-full h-64 md:h-auto animate-float">
            </div>

            <!-- Form Login -->
            <div class="w-full p-8 md:w-1/2">
                <h2 class="mb-6 text-3xl font-bold text-center text-blue-900">Login</h2>

                @if ($errors->any())
                <div class="flex items-center gap-2 px-4 py-2 mb-4 text-sm text-red-600 bg-red-100 border border-red-300 rounded">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-red-600" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 9v2m0 4h.01M21 12c0 4.97-4.03 9-9 9s-9-4.03-9-9 4.03-9 9-9 9 4.03 9 9z" />
                    </svg>
                    <span>Email atau password tidak sesuai.</span>
                </div>
            @endif
            

                <form action="{{ route('login') }}" method="POST" class="w-full">
                    @csrf

                    <div class="mb-4">
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <input type="email" id="email" name="email" required
                            class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50" />
                    </div>

                    <div class="mb-4">
                        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                        <div class="relative">
                            <input type="password" id="password" name="password" required
                                class="block w-full pr-20 mt-1 border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50" />
                                <button type="button" onclick="togglePassword('password', 'togglePasswordBtn')" id="togglePasswordBtn"
                                class="absolute p-1 right-2 top-2">
                                <!-- Mata default (tertutup) -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-600" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M2.458 12C3.732 7.943 7.523 5 12 5s8.268 2.943 9.542 7c-1.274 4.057-5.065 7-9.542 7s-8.268-2.943-9.542-7z" />
                                </svg>
                            </button>
                            
                        </div>
                    </div>                    
                    <div class="flex items-center justify-between mb-4 text-sm">
                        <div>
                            <input type="checkbox" id="remember" name="remember" class="mr-2">
                            <label for="remember" class="text-gray-700">Ingatkan</label>
                        </div>
                        <a href="#" class="text-blue-500 hover:underline">Lupa Password?</a>
                    </div>

                    <button type="submit"
                        class="w-full py-2 text-white transition duration-300 bg-blue-500 rounded-md hover:bg-blue-600">Login</button>
                </form>

                <p class="mt-4 text-sm text-center text-gray-600">
                    Belum punya akun? <a href="{{ route('register') }}" class="text-blue-500 hover:underline">Daftar di
                        sini</a>.
                </p>
            </div>

        </div>
    </div>
</body>

</html>
