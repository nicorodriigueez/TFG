<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
     <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .fade-in {
            animation: fadeIn 1s ease-in-out;
        }
    </style>
</head>
<body class="min-h-screen flex items-center justify-center bg-gradient-to-br from-red-700 via-red-900 to-black">
    <div class="w-full max-w-md bg-white/90 backdrop-blur-sm border border-red-500 shadow-2xl rounded-xl p-8 fade-in">
        <div class="flex justify-center mb-6">
            <img src="/logolargoSF.png" alt="Logo E-Sneakers" class="h-12">
        </div>
        <h2 class="text-3xl font-bold text-center text-red-800 mb-4">Iniciar Sesión</h2>

        <!-- Session Status -->
        @if (session('status'))
            <div class="text-sm text-green-600 text-center">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}" class="space-y-4">
            @csrf

            <div>
                <label for="email" class="block text-sm font-medium text-red-800">Email</label>
                <input id="email" type="email" name="email" required autofocus
                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-red-500 focus:border-red-500" />
                @error('email')
                    <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="password" class="block text-sm font-medium text-red-800">Contraseña</label>
                <input id="password" type="password" name="password" required
                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-red-500 focus:border-red-500" />
                @error('password')
                    <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex items-center justify-between">
                <label class="inline-flex items-center">
                    <input type="checkbox" name="remember" class="rounded border-gray-300 text-red-600 shadow-sm focus:ring-red-500">
                    <span class="ml-2 text-sm text-gray-700">Recordarme</span>
                </label>

                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="text-sm text-red-600 hover:underline">
                        ¿Olvidaste tu contraseña?
                    </a>
                @endif
            </div>

            <div class="pt-4">
                <button type="submit"
                        class="w-full bg-red-700 hover:bg-red-800 text-white font-semibold py-2 px-4 rounded-md transition">
                    Iniciar sesión
                </button>
            </div>
        </form>

        <p class="text-sm text-center text-gray-600 mt-4">¿No tienes cuenta?
            <a href="{{ route('register') }}" class="text-red-700 font-semibold hover:underline">Regístrate aquí</a>
        </p>
    </div>
</body>
</html>