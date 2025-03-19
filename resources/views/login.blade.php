<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    @vite('resources/css/app.css')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="p-8 bg-white rounded-lg shadow-md w-96">
        <h2 class="mb-6 text-2xl font-bold text-center">Login</h2>
        @if ($errors->any())
            <div class="mb-4 text-red-500">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif
        <form action="{{ route('login') }}" method="POST">
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
            <div class="flex items-center justify-between mb-4">
                <div>
                    <input type="checkbox" id="remember" name="remember" class="mr-4" />
                    <label for="remember" class="text-sm text-gray-700">Ingatkan </label>
                </div>
                <a href="#" class="text-sm text-blue-500 hover:underline">Lupa Password?</a>
            </div>
            <div class="flex items-center justify-between">
                <button type="submit" class="w-full py-2 text-white bg-blue-500 rounded-md hover:bg-blue-600">Login</button>
            </div>
        </form>
        <p class="mt-4 text-sm text-center text-gray-600">
            Belum punya akun? <a href="/dashboard " class="text-blue-500 hover:underline">Daftar di sini</a>.
        </p>
    </div>
</body>
</html>
