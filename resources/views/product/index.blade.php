<!DOCTYPE html>
<html class="dark" lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>TechSales | Catálogo</title>

  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;900&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet" />

  <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>

  <script>
    tailwind.config = {
      darkMode: "class",
      theme: {
        extend: {
          colors: {
            primary: "#0db9f2",
            "background-dark": "#101e22",
          },
          fontFamily: { display: ["Inter"] },
        },
      },
    };
  </script>

  <style>
    body { font-family: "Inter", sans-serif; }

    .product-card:hover {
      box-shadow: 0 0 15px rgba(13, 185, 242, 0.3);
      border-color: rgba(13, 185, 242, 0.5);
      transform: translateY(-2px);
      transition: all 0.3s ease;
    }
  </style>
</head>

<body class="bg-[#101e22] text-slate-100 min-h-screen flex flex-col">

<!-- 🔥 HEADER MEJORADO -->
<header class="sticky top-0 z-50 w-full border-b border-white/10 bg-[#101e22]/80 backdrop-blur-md">
  <div class="max-w-7xl mx-auto px-4 h-16 flex items-center justify-between">

    <div class="flex items-center gap-2 text-primary">
      <span class="material-symbols-outlined text-3xl">developer_board</span>
      <h1 class="text-white text-xl font-bold">TechSales</h1>
    </div>

    <nav class="flex items-center gap-6">

      <a href="/" class="text-slate-300 hover:text-primary text-sm">Inicio</a>

      <!-- 🛒 CARRITO -->
      <a href="{{ route('cart.index') }}" class="relative">
        <span class="material-symbols-outlined text-white">shopping_cart</span>

        <span class="absolute -top-2 -right-2 bg-primary text-xs px-1 rounded-full text-black font-bold">
          {{ session('cart') ? count(session('cart')) : 0 }}
        </span>
      </a>

      <button class="bg-primary text-black px-4 py-1.5 rounded-lg text-sm font-bold">
        Login
      </button>

    </nav>
  </div>
</header>

<!-- MAIN -->
<main class="flex-grow max-w-7xl mx-auto px-4 py-10 w-full">

  <div class="mb-8">
    <h2 class="text-3xl font-black text-white tracking-tight">Catálogo de Hardware</h2>
    <p class="text-slate-400">
      Mostrando {{ count($miLista) }} productos disponibles.
    </p>
  </div>

  <div class="custom-pagination mb-8">
    {{ $miLista->links() }}
  </div>

  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

    @foreach($miLista as $item)
    <div class="product-card bg-white/5 border border-white/10 rounded-xl overflow-hidden flex flex-col">

      <div class="relative aspect-video bg-slate-800">
        <img 
          src="{{ asset('storage/' . ($item->image ?? 'https://via.placeholder.com/400x225?text=Hardware')) }}" 
          class="w-full h-full object-cover"
        >
      </div>

      <div class="p-5 flex flex-col flex-grow">

        <div class="flex justify-between items-start mb-2">
          <h3 class="text-white font-bold text-lg">{{ $item->name }}</h3>
          <span class="text-primary font-bold">${{ number_format($item->price ?? 0, 0) }}</span>
        </div>

        <p class="text-slate-400 text-sm mb-6 flex-grow line-clamp-2">
          {{ $item->description ?? 'Sin descripción disponible.' }}
        </p>

        <div class="flex gap-2">

          <!-- 🛒 AGREGAR AL CARRITO -->
          <form action="{{ route('cart.add', $item->id) }}" method="POST" class="flex-grow">
            @csrf
            <button class="w-full bg-primary hover:bg-primary/90 text-black py-2 rounded-lg text-sm font-bold">
              Comprar
            </button>
          </form>

          <!-- ❌ ELIMINAR -->
          <form action="{{ route('product.destroy', $item) }}" method="POST" class="flex-grow">
            @csrf
            @method('delete')
            <button class="w-full bg-red-600 hover:bg-red-700 text-white py-2 rounded-lg text-sm font-bold">
              Eliminar
            </button>
          </form>

          <!-- 👁 VER -->
          <a href="{{ url('/product/'.$item->id) }}" class="px-3 bg-white/5 border border-white/10 rounded-lg flex items-center hover:bg-white/20">
            <span class="material-symbols-outlined text-white">visibility</span>
          </a>

        </div>

      </div>

    </div>
    @endforeach

  </div>

</main>

<footer class="bg-black/40 border-t border-white/5 py-8 mt-10">
  <div class="max-w-7xl mx-auto px-4 text-center">
    <p class="text-slate-500 text-xs">© 2026 TechSales. Laravel</p>
  </div>
</footer>

</body>
</html>