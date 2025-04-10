<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    @vite('resources/css/app.css')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
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
                    <div class="mb-4 text-sm text-red-500">
                        @foreach ($errors->all() as $error)
                            <p>{{ $error }}</p>
                        @endforeach
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
                        <input type="password" id="password" name="password" required
                            class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50" />
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
