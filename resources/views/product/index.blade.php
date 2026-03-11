<!DOCTYPE html>
<html class="dark" lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>TechSales | Catálogo</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;900&display=swap" rel="stylesheet" />
  <link href="https://fonts.material.icons.com/icon?family=Material+Icons" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet" />
  <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  <script id="tailwind-config">
    tailwind.config = {
      darkMode: "class",
      theme: {
        extend: {
          colors: {
            "primary": "#0db9f2",
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

    /* Estilos para forzar la paginación horizontal y adaptarla a tu tema oscuro */
    .custom-pagination nav { display: flex; flex-direction: column; gap: 1rem; align-items: center; }
    @media (min-width: 640px) { .custom-pagination nav { flex-direction: row; justify-content: space-between; } }
    .custom-pagination ul { display: flex; flex-wrap: wrap; gap: 0.5rem; list-style: none; padding: 0; margin: 0; justify-content: center; }
    .custom-pagination li { display: flex; }
    .custom-pagination a, .custom-pagination span.relative { display: flex; align-items: center; justify-content: center; padding: 0.5rem 1rem; background-color: rgba(255, 255, 255, 0.05); border: 1px solid rgba(255, 255, 255, 0.1); border-radius: 0.5rem; color: #cbd5e1; text-decoration: none; transition: all 0.2s; font-size: 0.875rem; }
    .custom-pagination a:hover { background-color: rgba(13, 185, 242, 0.1); border-color: #0db9f2; color: #0db9f2; }
    .custom-pagination [aria-current="page"] span { background-color: #0db9f2; color: #101e22; border-color: #0db9f2; font-weight: bold; }
    .custom-pagination svg { width: 1.25rem; height: 1.25rem; }
    .custom-pagination p { color: #94a3b8; margin: 0; font-size: 0.875rem; text-align: center; }
  </style>
</head>

<body class="bg-[#101e22] text-slate-100 min-h-screen flex flex-col">

  <header class="sticky top-0 z-50 w-full border-b border-white/10 bg-[#101e22]/80 backdrop-blur-md">
    <div class="max-w-7xl mx-auto px-4 h-16 flex items-center justify-between">
      <div class="flex items-center gap-2 text-primary">
        <span class="material-symbols-outlined text-3xl">developer_board</span>
        <h1 class="text-white text-xl font-bold">TechSales</h1>
      </div>
      <nav class="flex items-center gap-6">
        <a href="/" class="text-slate-300 hover:text-primary text-sm">Inicio</a>
        <button class="bg-primary text-black px-4 py-1.5 rounded-lg text-sm font-bold">Login</button>
      </nav>
    </div>
  </header>

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
              alt="{{ $item->nombre }}"
              class="w-full h-full object-cover"
            >
          </div>

          <div class="p-5 flex flex-col flex-grow">
            <div class="flex justify-between items-start mb-2">
              <h3 class="text-white font-bold text-lg leading-tight">{{ $item->name }}</h3>
              <span class="text-primary font-bold">${{ number_format($item->price ?? 0, 0) }}</span>
            </div>
            
            <p class="text-slate-400 text-sm mb-6 flex-grow line-clamp-2">
              {{ $item->description ?? 'Sin descripción disponible.' }}
            </p>

            <div class="flex gap-2">
              <button class="flex-grow bg-primary hover:bg-primary/90 text-black py-2 rounded-lg text-sm font-bold transition-all">
                Comprar
              </button>
              <form action="{{ route('product.destroy', $item) }}" method="POST" class="flex-grow">
                @csrf
                @method('delete')
               <button class= "flex-grow bg-red-600 hover:bg-red-700 text-white py-2 rounded-lg text-sm font-bold transition-all">
                 Eliminar
               </button>
              </form>   
              <a href="{{ url('/product/'.$item->id) }}" class="px-3 bg-white/5 border border-white/10 rounded-lg flex items-center hover:bg-white/20 transition-colors">
                <span class="material-symbols-outlined text-xl text-white">visibility</span>
              </a>
            </div>
          </div>
        </div>
      @endforeach

    </div>
  </main>

  <footer class="bg-black/40 border-t border-white/5 py-8 mt-10">
    <div class="max-w-7xl mx-auto px-4 text-center">
      <p class="text-slate-500 text-xs">© 2026 TechSales. Generado con Laravel.</p>
    </div>
  </footer>

</body>
</html>