<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    @vite('resources/css/app.css')
    <script>
        const eyeSVG = `
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-600" fill="none"
                viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M2.458 12C3.732 7.943 7.523 5 12 5s8.268 2.943 9.542 7c-1.274 4.057-5.065 7-9.542 7s-8.268-2.943-9.542-7z" />
            </svg>`;

        const eyeOffSVG = `
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-600" fill="none"
                viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.542-7a10.05 10.05 0 012.217-3.592M9.88 9.88a3 3 0 104.24 4.24" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M3 3l18 18" />
            </svg>`;

        function togglePassword(inputId, toggleId) {
            const input = document.getElementById(inputId);
            const toggle = document.getElementById(toggleId);

            if (input.type === "password") {
                input.type = "text";
                toggle.innerHTML = eyeOffSVG;
            } else {
                input.type = "password";
                toggle.innerHTML = eyeSVG;
            }
        }

        document.addEventListener("DOMContentLoaded", function() {
            const passwordInput = document.getElementById("password");
            const passwordToggle = document.getElementById("togglePasswordBtn");
            passwordToggle.innerHTML = eyeSVG;

            const confirmInput = document.getElementById("password_confirmation");
            const confirmToggle = document.getElementById("toggleConfirmPasswordBtn");
            confirmToggle.innerHTML = eyeSVG;

            const passwordHint = document.getElementById("passwordHint");
            const confirmMessage = document.getElementById("confirmPasswordMessage");

            passwordInput.addEventListener("input", function() {
                const value = this.value;
                const isValid =
                    value.length >= 8 &&
                    /[a-z]/.test(value) &&
                    /[A-Z]/.test(value) &&
                    /\d/.test(value);

                // Sembunyikan hint jika format valid, tampilkan jika belum valid
                passwordHint.classList.toggle("hidden", isValid || value.length === 0);

                checkPasswordMatch();
            });

            confirmInput.addEventListener("input", function() {
                checkPasswordMatch();
            });

            function checkPasswordMatch() {
                const iconCheck = `
        <svg xmlns="http://www.w3.org/2000/svg" class="inline w-4 h-4 mr-1 text-green-600" fill="none"
            viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M9 12l2 2l4 -4M12 21c4.97 0 9 -4.03 9 -9s-4.03 -9 -9 -9s-9 4.03 -9 9s4.03 9 9 9z" />
        </svg>`;

                const iconX = `
        <svg xmlns="http://www.w3.org/2000/svg" class="inline w-4 h-4 mr-1 text-red-600" fill="none"
            viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M6 18L18 6M6 6l12 12" />
        </svg>`;

                if (confirmInput.value.length > 0) {
                    if (passwordInput.value === confirmInput.value) {
                        confirmMessage.innerHTML = iconCheck + "Password sesuai";
                        confirmMessage.classList.remove("text-red-600");
                        confirmMessage.classList.add("text-green-600");
                    } else {
                        confirmMessage.innerHTML = iconX + "Password belum sesuai";
                        confirmMessage.classList.remove("text-green-600");
                        confirmMessage.classList.add("text-red-600");
                    }
                    confirmMessage.classList.remove("hidden");
                } else {
                    confirmMessage.classList.add("hidden");
                }
            }

        });
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

<body class="bg-gray-900">
    <div class="flex items-center justify-center min-h-screen bg-gray-100">
        <div class="flex flex-col w-full max-w-4xl overflow-hidden bg-white rounded-lg shadow-md md:flex-row">
            <div class="w-full md:w-1/2">
                <img src="img/animate.svg" alt="register animation"
                    class="object-cover w-full h-64 md:h-full animate-float">
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
                        <div class="relative">
                            <input type="password" name="password" id="password" required
                                class="block w-full pr-10 mt-1 border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50" />
                            <button type="button" onclick="togglePassword('password', 'togglePasswordBtn')"
                                id="togglePasswordBtn" class="absolute p-1 top-2 right-2">
                                <!-- SVG icon will be injected here -->
                            </button>
                        </div>
                        <p id="passwordHint" class="hidden mt-1 text-xs text-red-600">
                            * Password harus minimal 8 karakter, mengandung huruf besar (Uppercase), huruf kecil
                            (Lowercase), dan angka.
                        </p>
                    </div>

                    <div class="mb-4">
                        <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Konfirmasi
                            Password</label>
                        <div class="relative">
                            <input type="password" name="password_confirmation" id="password_confirmation" required
                                class="block w-full pr-10 mt-1 border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50" />
                            <button type="button"
                                onclick="togglePassword('password_confirmation', 'toggleConfirmPasswordBtn')"
                                id="toggleConfirmPasswordBtn" class="absolute p-1 top-2 right-2">
                                <!-- SVG icon will be injected here -->
                            </button>
                        </div>

                        <p id="confirmPasswordMessage" class="hidden mt-1 text-xs"></p>
                    </div>

                    <button type="submit"
                        class="w-full py-2 text-white bg-blue-500 rounded-md hover:bg-blue-600">Register</button>
                </form>

                <p class="mt-4 text-sm text-center text-gray-600">
                    Sudah punya akun? <a href="{{ route('login') }}" class="text-blue-500 hover:underline">Login di
                        sini</a>.
                </p>
            </div>

        </div>
    </div>
</body>

</html>
