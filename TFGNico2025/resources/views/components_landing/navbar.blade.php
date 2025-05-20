<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
  <title>Navigation Bar</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans">
  <nav class="fixed top-0 left-0 w-full h-20 bg-gradient-to-r from-white to-red-600 shadow z-50">
    <div class="w-full h-full flex items-center justify-center relative">

      <!-- Logo + Nombre totalmente a la izquierda -->
      <div class="absolute left-0 pl-4 flex items-center space-x-3">
        <img src="/logo.png" alt="Logo" class="h-10 w-10 rounded-full object-cover" />
        <a href="#" class="text-red-800 text-2xl font-bold">E-SNEAKERS</a>
      </div>

      <!-- Links centrados -->
     <ul class="flex space-x-8">
  <li><a href="#Home" class="text-black text-lg font-medium hover:text-yellow-500">Home</a></li>
  <li><a href="#About" class="text-black text-lg font-medium hover:text-yellow-500">About</a></li>
  <li><a href="{{ route('register') }}" class="text-black text-lg font-medium hover:text-yellow-500">Register</a></li>
  <li><a href="{{ route('login') }}" class="text-black text-lg font-medium hover:text-yellow-500">Login</a></li>

</ul>

    </div>
  </nav>
</body>
</html>