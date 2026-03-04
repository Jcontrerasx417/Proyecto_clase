<!DOCTYPE html>
<html class="dark" lang="es">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>TechSales - Publicar Producto</title>

  <link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet"
  />
  <link
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap"
    rel="stylesheet"
  />

  <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  <script id="tailwind-config">
    tailwind.config = {
      darkMode: "class",
      theme: {
        extend: {
          colors: {
            "primary":          "#0db9f2",
            "background-light": "#f5f8f8",
            "background-dark":  "#101e22",
          },
          fontFamily: {
            display: ["Inter", "sans-serif"],
          },
          borderRadius: {
            DEFAULT: "0.25rem",
            lg:      "0.5rem",
            xl:      "0.75rem",
            full:    "9999px",
          },
        },
      },
    };
  </script>

  <style>
    /* Global */
    body { font-family: "Inter", sans-serif; }

    /* Glassmorphism card */
    .glass-effect {
      background:      rgba(27, 36, 39, 0.8);
      backdrop-filter: blur(12px);
      border:          1px solid rgba(59, 78, 84, 0.5);
    }
  </style>
</head>

<body class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-slate-100 min-h-screen flex flex-col">

  <header class="sticky top-0 z-50 w-full border-b border-[#283539] bg-background-dark/80 backdrop-blur-md">
    <div class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between">

      <div class="flex items-center gap-3">
        <div class="bg-primary p-1.5 rounded-lg">
          <svg class="w-7 h-7 text-background-dark" fill="none" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
            <path
              d="M8.57829 8.57829C5.52816 11.6284 3.451 15.5145 2.60947 19.7452C1.76794 23.9758 2.19984 28.361
                 3.85056 32.3462C5.50128 36.3314 8.29667 39.7376 11.8832 42.134C15.4698 44.5305 19.6865 45.8096
                 24 45.8096C28.3135 45.8096 32.5302 44.5305 36.1168 42.134C39.7033 39.7375 42.4987 36.3314
                 44.1494 32.3462C45.8002 28.361 46.2321 23.9758 45.3905 19.7452C44.549 15.5145 42.4718 11.6284
                 39.4217 8.57829L24 24L8.57829 8.57829Z"
              fill="currentColor"
            />
          </svg>
        </div>
        <h1 class="text-2xl font-black tracking-tighter text-white">TechSales</h1>
      </div>

      <nav class="hidden md:flex items-center gap-10">
        <a class="text-sm font-semibold hover:text-primary transition-colors" href="#">Home</a>
        <a class="text-sm font-semibold hover:text-primary transition-colors" href="#">Products</a>
        <a class="text-sm font-semibold hover:text-primary transition-colors" href="#">About</a>
      </nav>

      <div class="flex items-center gap-4">
        <button class="px-5 py-2.5 rounded-lg bg-primary text-background-dark font-bold text-sm hover:brightness-110 transition-all">
          Login
        </button>
        <div class="size-10 rounded-full border border-primary/30 p-0.5 overflow-hidden">
          <img
            class="w-full h-full object-cover rounded-full"
            src="https://lh3.googleusercontent.com/aida-public/AB6AXuC-wk9V0PqkeCxtXERiJPkMOGBhKQesv19ajoj8cmirYdgxWDX9zqDVe9oi2_o1kSV7oWI6VFnHias-0172JnJl_0KnwtRH-VF2Dgb9pPbuu0FhnOfoHcUdnBsdWlmu6HJCZPFBEspMDEcR1rtxLJdMEU6z0Le17ApG6cC3IX2aYt8axCeGhBxmDn31R95UQheBsq9azxH0g0y4JiUqvM0S92xBDkapJMYWJ49W-U88AkVw2g-EWwbyoqS2q96HfxYFdzvfpav3UjTQ"
            alt="User profile"
          />
        </div>
      </div>

    </div>
  </header>

  <main class="flex-grow flex flex-col items-center py-12 px-6">
    <div class="w-full max-w-3xl">

      <div class="mb-10 text-center md:text-left">
        <h2 class="text-4xl md:text-5xl font-black text-white mb-3 tracking-tight">Publicar Producto</h2>
        <p class="text-slate-400 text-lg">Vende tu hardware de última generación con los mejores precios del mercado.</p>
      </div>

      <div class="glass-effect rounded-xl p-8 shadow-2xl">
        <form action="{{ route('product.store') }}" method="POST" class="grid grid-cols-1 md:grid-cols-2 gap-6" enctype="multipart/form-data">
          @csrf

          <div class="md:col-span-2 group">
            <label class="block text-sm font-bold text-slate-300 mb-2 group-focus-within:text-primary transition-colors">
              Nombre del Producto
            </label>
            <input
              type="text"
              name="nombre"
              class="w-full bg-[#162226] border border-[#3b4e54] rounded-lg px-4 py-3 text-white
                     focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-all
                     placeholder:text-slate-500"
              placeholder="Ej: NVIDIA GeForce RTX 4090 Founders Edition"
              required
            />
          </div>

          <div class="group">
            <label class="block text-sm font-bold text-slate-300 mb-2 group-focus-within:text-primary transition-colors">
              Precio de Venta
            </label>
            <div class="relative">
              <span class="absolute left-4 top-1/2 -translate-y-1/2 text-slate-400 font-medium">$</span>
              <input
                type="number"
                name="precio"
                step="0.01"
                class="w-full bg-[#162226] border border-[#3b4e54] rounded-lg pl-8 pr-4 py-3 text-white
                       focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-all
                       placeholder:text-slate-500"
                placeholder="0.00"
                required
              />
            </div>
          </div>

          <div class="group">
            <label class="block text-sm font-bold text-slate-300 mb-2 group-focus-within:text-primary transition-colors">
              Estado del Equipo
            </label>
            <select
              class="w-full bg-[#162226] border border-[#3b4e54] rounded-lg px-4 py-3 text-white
                     focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-all
                     appearance-none"
            >
              <option value="nuevo">Nuevo (Sellado)</option>
              <option value="como-nuevo">Usado - Como nuevo</option>
              <option value="buen-estado">Usado - Buen estado</option>
            </select>
          </div>

          <div class="group md:col-span-2">
            <label class="block text-sm font-bold text-slate-300 mb-2 group-focus-within:text-primary transition-colors">
              Categoría
            </label>
            <select
              name="categoria"
              class="w-full bg-[#162226] border border-[#3b4e54] rounded-lg px-4 py-3 text-white
                     focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-all"
              required
            >
              @foreach ($categorias as $categoria)
                <option value="{{ $categoria->id }}">{{ $categoria->name }}</option>
              @endforeach
            </select>
          </div>

          <div class="md:col-span-2 group">
            <label class="block text-sm font-bold text-slate-300 mb-2 group-focus-within:text-primary transition-colors">
              Descripción Detallada
            </label>
            <textarea
              name="descripcion"
              class="w-full bg-[#162226] border border-[#3b4e54] rounded-lg px-4 py-3 text-white
                     focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-all
                     placeholder:text-slate-500 resize-none"
              placeholder="Especificaciones técnicas, tiempo de uso, motivos de venta..."
              rows="5"
              required
            ></textarea>
          </div>

          <div class="md:col-span-2">
  <label class="block text-sm font-bold text-slate-300 mb-2">
    Imágenes del Producto
  </label>
  <div class="border-2 border-dashed border-[#3b4e54] rounded-xl p-10 flex flex-col items-center
              justify-center bg-[#162226]/50 hover:bg-[#162226] hover:border-primary transition-all cursor-pointer">
    
    <label for="foto-input" class="flex flex-col items-center justify-center w-full h-full cursor-pointer group/upload">
      <span class="material-symbols-outlined text-primary text-5xl mb-3 group-hover/upload:scale-110 transition-transform">
        cloud_upload
      </span>
      <p class="text-white font-semibold">Haz clic para subir o arrastra y suelta</p>
      
      <p id="file-name" class="text-slate-500 text-sm mt-1 text-center">PNG, JPG o WEBP (Máx. 10MB)</p>
      
      <input 
        type="file" 
        name="foto" 
        id="foto-input" 
        accept="image/*" 
        class="hidden" 
        onchange="document.getElementById('file-name').innerText = 'Seleccionado: ' + this.files[0].name; document.getElementById('file-name').classList.replace('text-slate-500', 'text-primary')"
      />
    </label>
  </div>
</div>

          <div class="md:col-span-2 pt-4">
            <button
              type="submit"
              class="w-full bg-primary hover:brightness-110 text-background-dark font-black py-4 rounded-xl
                     text-lg flex items-center justify-center gap-2 transition-all shadow-lg shadow-primary/20"
            >
              <span class="material-symbols-outlined">rocket_launch</span>
              Guardar Producto
            </button>
          </div>

        </form>
      </div>

      <div class="mt-8 flex items-start gap-4 p-4 rounded-lg bg-primary/5 border border-primary/10">
        <span class="material-symbols-outlined text-primary">info</span>
        <p class="text-sm text-slate-400">
          <strong class="text-slate-200">Consejo Pro:</strong>
          Los productos con descripciones detalladas y más de 3 fotos claras se venden un
          <span class="text-primary font-bold">45% más rápido</span>.
        </p>
      </div>

    </div>
  </main>

  <footer class="mt-auto border-t border-[#283539] bg-background-dark py-12 px-6">
    <div class="max-w-7xl mx-auto flex flex-col md:flex-row justify-between items-center gap-8">
      <div class="flex flex-col gap-2 items-center md:items-start">
        <div class="flex items-center gap-2 opacity-80">
          <div class="bg-primary size-5 rounded-sm"></div>
          <span class="text-xl font-bold text-white tracking-tighter">TechSales</span>
        </div>
        <p class="text-slate-500 text-sm">© 2024 TechSales Inc. Todos los derechos reservados.</p>
      </div>
    </div>
  </footer>

</body>
</html>