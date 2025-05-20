<x-guest-layout>
    <div class="w-full max-w-md bg-white/90 backdrop-blur-sm border border-red-500 shadow-2xl rounded-xl p-8">
        <div class="flex justify-center mb-6">
            <img src="{{ asset('logolargoSF.png') }}" alt="Logo E-Sneakers" class="h-12">
        </div>

        <h2 class="text-3xl font-bold text-center text-red-800 mb-4">Crear Cuenta</h2>

        <form method="POST" action="{{ route('register') }}" class="space-y-4">
            @csrf

            <div>
                <label for="name" class="block text-sm font-medium text-red-800">Nombre</label>
                <input id="name" name="name" required autofocus
                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-red-500 focus:border-red-500" />
            </div>

            <div>
                <label for="email" class="block text-sm font-medium text-red-800">Email</label>
                <input id="email" name="email" type="email" required
                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-red-500 focus:border-red-500" />
            </div>

            <div>
                <label for="password" class="block text-sm font-medium text-red-800">Contraseña</label>
                <input id="password" name="password" type="password" required
                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-red-500 focus:border-red-500" />
            </div>

            <div>
                <label for="password_confirmation" class="block text-sm font-medium text-red-800">Confirmar Contraseña</label>
                <input id="password_confirmation" name="password_confirmation" type="password" required
                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-red-500 focus:border-red-500" />
            </div>

            <div>
                <label for="role" class="block text-sm font-medium text-red-800">Rol</label>
                <select name="role" id="role"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-red-500 focus:border-red-500">
                    <option value="0">Administrador</option>
                    <option value="1">Vendedor</option>
                    <option value="2" selected>Cliente</option>
                </select>
            </div>

            <div class="pt-4">
                <button type="submit"
                        class="w-full bg-red-700 hover:bg-red-800 text-white font-semibold py-2 px-4 rounded-md transition">
                    Registrarse
                </button>
            </div>
        </form>
    </div>
</x-guest-layout>