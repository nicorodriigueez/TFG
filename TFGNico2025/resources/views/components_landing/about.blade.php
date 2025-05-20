<section id="about" class="bg-gradient-to-r from-white to-red-100 py-24 px-6">
  <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center justify-center gap-16">

    <!-- Imagen -->
    <div class="w-64 h-64 rounded-full shadow-2xl border-4 border-red-400 overflow-hidden transform transition duration-500 hover:scale-105" id="about-image">
      <img src="/logo.png" alt="Logo E-SNEAKERS" class="w-full h-full object-cover" />
    </div>

    <!-- Texto -->
    <div class="flex flex-col items-center md:items-start text-center md:text-left space-y-6 max-w-xl" id="about-text">
      <h2 class="text-5xl font-extrabold text-red-700">¿Quiénes Somos?</h2>
      <p class="text-gray-700 text-lg leading-relaxed">
        En <span class="text-red-600 font-bold">E-SNEAKERS</span> respiramos cultura urbana. Somos más que una tienda: somos una comunidad de amantes de las zapatillas. 
        <br><br>
        Desde los lanzamientos más esperados hasta los modelos más exclusivos, te conectamos con lo mejor del streetwear. Calidad, estilo y autenticidad, directo a tus pies.
      </p>
      <ul class="text-gray-700 list-disc list-inside">
        <li>Ediciones limitadas y colecciones premium</li>
        <li>Entrega rápida y segura</li>
        <li>Asesoramiento personalizado</li>
        <li>Pasión por el diseño y la cultura sneaker</li>
      </ul>
      <a href="/login" class="mt-6 inline-block bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-6 rounded-lg shadow-md transition">
        Únete Ahora
      </a>
    </div>
  </div>
</section>

<!-- Sección Destacados -->
<section class="bg-white py-24 px-6">
  <div class="max-w-7xl mx-auto flex flex-col md:flex-row gap-12 items-center">
    <div class="w-full md:w-1/2" id="feature-img">
      <img src="/botines1.png" alt="Zapatillas destacadas" class="rounded-xl shadow-xl transform transition duration-500 hover:scale-105" />
    </div>
    <div class="w-full md:w-1/2 space-y-6 text-center md:text-left" id="feature-text">
      <h2 class="text-4xl font-bold text-red-700">Últimos Lanzamientos</h2>
      <p class="text-gray-700 text-lg">
        Descubre los modelos más nuevos del mercado. Tecnología, estilo y comodidad se fusionan en nuestros lanzamientos. ¡Haz que cada paso cuente!
      </p>
      <a href="/login" class="inline-block bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-6 rounded-lg transition shadow">
        Ver más
      </a>
    </div>
  </div>
</section>

<!-- Sección Logo Alargado -->
<section class="bg-red-50 py-20 px-6">
  <div class="max-w-5xl mx-auto text-center" id="logo-section">
    <h2 class="text-3xl font-bold text-red-800 mb-6">Nuestra Marca</h2>
    <img src="logolargo.png" alt="Logo E-SNEAKERS" class="mx-auto w-64 md:w-96 animate-bounce" />
    <p class="mt-4 text-gray-600 text-lg">Autenticidad, diseño y comunidad. Lo que nos define en cada paso.</p>
  </div>
</section>

<script>
  // Animación de entrada para imagen y texto
  document.addEventListener('DOMContentLoaded', () => {
    const entries = ['about-text', 'about-image', 'feature-img', 'feature-text', 'logo-section'];
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('animate-fade-in-up');
        }
      });
    }, { threshold: 0.2 });

    entries.forEach(id => {
      const el = document.getElementById(id);
      if (el) observer.observe(el);
    });
  });

  tailwind.config = {
    theme: {
      extend: {
        animation: {
          'fade-in-up': 'fadeInUp 1s ease-out forwards',
        },
        keyframes: {
          fadeInUp: {
            '0%': { opacity: '0', transform: 'translateY(40px)' },
            '100%': { opacity: '1', transform: 'translateY(0)' },
          },
        },
      },
    },
  };
</script>