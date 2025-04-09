<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    @vite('resources/css/app.css')
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
<body class="bg-gray-900">
    <div class="flex items-center justify-center min-h-screen bg-gray-100">
        <div class="flex flex-col w-full max-w-4xl overflow-hidden bg-white rounded-lg shadow-md md:flex-row">
            <div class="w-full md:w-1/2">
                <img src="img/animate.svg" alt="register animation" class="object-cover w-full h-64 md:h-full animate-float">
            </div>
            <div class="w-full p-8 md:w-1/2">
                <h2 class="mb-6 text-3xl font-bold text-center text-blue-800">Register</h2>
                @if ($errors->any())
                    <div class="mb-4 text-red-500">
                        @foreach ($errors->all() as $error)
                            <p>{{ $error }}</p>
                        @endforeach
                    </div>
                @endif

                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="name" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                        <input type="text" name="name" id="name" required
                            class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50" />
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <input type="email" name="email" id="email" required
                            class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50" />
                    </div>
                    <div class="mb-4">
                        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                        <input type="password" name="password" id="password" required
                            class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50" />
                    </div>
                    <div class="mb-4">
                        <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Konfirmasi Password</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" required
                            class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50" />
                    </div>
                    <button type="submit"
                        class="w-full py-2 text-white bg-blue-500 rounded-md hover:bg-blue-600">Register</button>
                </form>

                <p class="mt-4 text-sm text-center text-gray-600">
                    Sudah punya akun? <a href="{{ route('login') }}"
                        class="text-blue-500 hover:underline">Login di sini</a>.
                </p>
            </div>

        </div>
    </div>
</body>
</html>

