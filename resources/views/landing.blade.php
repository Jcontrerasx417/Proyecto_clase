<!DOCTYPE html>
<html class="dark" lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TechSales</title>

  <script src="https://cdn.tailwindcss.com"></script>

  <script>
    tailwind.config = {
      darkMode: "class",
      theme: {
        extend: {
          colors: {
            primary: "#0db9f2",
            background: "#0b1417"
          }
        }
      }
    }
  </script>

  <style>
    body { font-family: 'Inter', sans-serif; }
  </style>
</head>

<body class="bg-background text-white">

<!-- NAVBAR -->
<header class="fixed w-full top-0 z-50 backdrop-blur-md bg-white/5 border-b border-white/10">
  <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
    
    <h1 class="text-xl font-black text-primary">TechSales</h1>

    <nav class="hidden md:flex gap-8 text-sm items-center">
      <a href="/" class="hover:text-primary">Inicio</a>
      <a href="/product" class="hover:text-primary">Productos</a>

<!-- CARRITO -->      
    <a href="{{ route('cart.index') }}" class="relative hover:text-primary">
    🛒
    <span class="absolute -top-2 -right-3 bg-primary text-black text-xs px-1 rounded-full">
        {{ count(session('cart', [])) }}
    </span>
</a>

      <!-- ADMIN -->
      <a href="/admin" class="border border-primary text-primary px-3 py-1 rounded-lg hover:bg-primary hover:text-black transition">
        Admin
      </a>
    </nav>

    <a href="/product" class="bg-primary text-black px-4 py-2 rounded-lg font-bold hover:scale-105 transition">
      Comprar
    </a>

  </div>
</header>

<!-- HERO -->
<section class="pt-32 pb-24 px-6 relative overflow-hidden">

  <div class="absolute w-96 h-96 bg-primary/20 blur-3xl rounded-full top-10 left-10"></div>
  <div class="absolute w-96 h-96 bg-blue-500/20 blur-3xl rounded-full bottom-10 right-10"></div>

  <div class="max-w-7xl mx-auto grid md:grid-cols-2 gap-10 items-center">

    <div>
      <h2 class="text-5xl md:text-6xl font-black mb-6">
        Compra y administra <span class="text-primary">tecnología</span>
      </h2>

      <p class="text-slate-400 mb-8 text-lg">
        Plataforma completa: compra productos o gestiona tu tienda desde el panel administrativo.
      </p>

      <div class="flex gap-4 flex-wrap">
        <a href="/product" class="bg-primary text-black px-6 py-3 rounded-lg font-bold hover:scale-105 transition">
          Ver tienda
        </a>

        <a href="/admin" class="border border-white/20 px-6 py-3 rounded-lg hover:bg-white/10 transition">
          Ir al Admin
        </a>
      </div>
    </div>

    <div>
      <img src="https://images.unsplash.com/photo-1593642532973-d31b6557fa68"
           class="rounded-2xl shadow-2xl hover:scale-105 transition duration-500">
    </div>

  </div>
</section>

<!-- FUNCIONALIDADES -->
<section class="max-w-7xl mx-auto px-6 py-16 grid md:grid-cols-3 gap-6">

  <div class="bg-white/5 border border-white/10 p-6 rounded-xl">
    <h3 class="text-primary font-bold text-lg mb-2">🛒 Carrito inteligente</h3>
    <p class="text-slate-400 text-sm">
      Añade productos y gestiona tus compras fácilmente.
    </p>
  </div>

  <div class="bg-white/5 border border-white/10 p-6 rounded-xl">
    <h3 class="text-primary font-bold text-lg mb-2">📦 Gestión de productos</h3>
    <p class="text-slate-400 text-sm">
      Administra inventario desde el panel de control.
    </p>
  </div>

  <div class="bg-white/5 border border-white/10 p-6 rounded-xl">
    <h3 class="text-primary font-bold text-lg mb-2">⚡ Experiencia rápida</h3>
    <p class="text-slate-400 text-sm">
      Interfaz moderna y optimizada para velocidad.
    </p>
  </div>

</section>

<!-- ADMIN SECTION -->
<section class="max-w-7xl mx-auto px-6 py-16 grid md:grid-cols-2 gap-10 items-center">

  <div>
    <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71"
         class="rounded-2xl shadow-lg">
  </div>

  <div>
    <h2 class="text-3xl font-black mb-4">
      Panel Administrativo
    </h2>

    <p class="text-slate-400 mb-6">
      Control total de tu tienda: crea, elimina y gestiona productos en segundos.
    </p>

    <a href="/admin" class="bg-primary text-black px-6 py-3 rounded-lg font-bold hover:scale-105 transition">
      Acceder al panel
    </a>
  </div>

</section>

<!-- CTA FINAL -->
<section class="text-center py-20 px-6">

  <h2 class="text-4xl font-black mb-4">
    Todo en una sola plataforma 🚀
  </h2>

  <p class="text-slate-400 mb-8">
    Compra como cliente o administra como vendedor.
  </p>

  <div class="flex justify-center gap-4 flex-wrap">
    <a href="/product" class="bg-primary text-black px-8 py-4 rounded-xl font-bold hover:scale-105 transition">
      Comprar
    </a>

    <a href="/admin" class="border border-white/20 px-8 py-4 rounded-xl hover:bg-white/10 transition">
      Administrar
    </a>
  </div>

</section>

<!-- FOOTER -->
<footer class="border-t border-white/10 py-6 text-center text-slate-500 text-sm">
  © 2026 TechSales
</footer>

</body>
</html>