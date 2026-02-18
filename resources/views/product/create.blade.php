<!DOCTYPE html>
<html class="dark" lang="es">

<!-- ============================================================
     HEAD
     ============================================================ -->
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>TechSales - Publicar Producto</title>

  <!-- Fonts -->
  <link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet"
  />
  <link
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap"
    rel="stylesheet"
  />

  <!-- Tailwind CSS -->
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

<!-- ============================================================
     BODY
     ============================================================ -->
<body class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-slate-100 min-h-screen flex flex-col">

  <!-- =========================================================
       HEADER
       ========================================================= -->
  <header class="sticky top-0 z-50 w-full border-b border-[#283539] bg-background-dark/80 backdrop-blur-md">
    <div class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between">

      <!-- Logo -->
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

      <!-- Nav -->
      <nav class="hidden md:flex items-center gap-10">
        <a class="text-sm font-semibold hover:text-primary transition-colors" href="#">Home</a>
        <a class="text-sm font-semibold hover:text-primary transition-colors" href="#">Products</a>
        <a class="text-sm font-semibold hover:text-primary transition-colors" href="#">About</a>
      </nav>

      <!-- Actions -->
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

  <!-- =========================================================
       MAIN
       ========================================================= -->
  <main class="flex-grow flex flex-col items-center py-12 px-6">
    <div class="w-full max-w-3xl">

      <!-- Page Title -->
      <div class="mb-10 text-center md:text-left">
        <h2 class="text-4xl md:text-5xl font-black text-white mb-3 tracking-tight">Publicar Producto</h2>
        <p class="text-slate-400 text-lg">Vende tu hardware de última generación con los mejores precios del mercado.</p>
      </div>

      <!-- Form Card -->
      <div class="glass-effect rounded-xl p-8 shadow-2xl">
        <form class="grid grid-cols-1 md:grid-cols-2 gap-6">

          <!-- Nombre del Producto -->
          <div class="md:col-span-2 group">
            <label class="block text-sm font-bold text-slate-300 mb-2 group-focus-within:text-primary transition-colors">
              Nombre del Producto
            </label>
            <input
              type="text"
              class="w-full bg-[#162226] border border-[#3b4e54] rounded-lg px-4 py-3 text-white
                     focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-all
                     placeholder:text-slate-500"
              placeholder="Ej: NVIDIA GeForce RTX 4090 Founders Edition"
            />
          </div>

          <!-- Precio de Venta -->
          <div class="group">
            <label class="block text-sm font-bold text-slate-300 mb-2 group-focus-within:text-primary transition-colors">
              Precio de Venta
            </label>
            <div class="relative">
              <span class="absolute left-4 top-1/2 -translate-y-1/2 text-slate-400 font-medium">$</span>
              <input
                type="number"
                class="w-full bg-[#162226] border border-[#3b4e54] rounded-lg pl-8 pr-4 py-3 text-white
                       focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-all
                       placeholder:text-slate-500"
                placeholder="0.00"
              />
            </div>
          </div>

          <!-- Estado del Equipo -->
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

          <!-- Descripción Detallada -->
          <div class="md:col-span-2 group">
            <label class="block text-sm font-bold text-slate-300 mb-2 group-focus-within:text-primary transition-colors">
              Descripción Detallada
            </label>
            <textarea
              class="w-full bg-[#162226] border border-[#3b4e54] rounded-lg px-4 py-3 text-white
                     focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-all
                     placeholder:text-slate-500 resize-none"
              placeholder="Especificaciones técnicas, tiempo de uso, motivos de venta..."
              rows="5"
            ></textarea>
          </div>

          <!-- Imágenes del Producto -->
          <div class="md:col-span-2">
            <label class="block text-sm font-bold text-slate-300 mb-2">
              Imágenes del Producto
            </label>
            <div class="border-2 border-dashed border-[#3b4e54] rounded-xl p-10 flex flex-col items-center
                        justify-center bg-[#162226]/50 hover:bg-[#162226] hover:border-primary transition-all cursor-pointer">
              <label class="flex flex-col items-center justify-center w-full h-full cursor-pointer group/upload">
                <span class="material-symbols-outlined text-primary text-5xl mb-3 group-hover/upload:scale-110 transition-transform">
                  cloud_upload
                </span>
                <p class="text-white font-semibold">Haz clic para subir o arrastra y suelta</p>
                <p class="text-slate-500 text-sm mt-1">PNG, JPG o WEBP (Máx. 10MB)</p>
                <input type="file" accept="image/*" multiple class="hidden" />
              </label>
            </div>
          </div>

          <!-- Submit -->
          <div class="md:col-span-2 pt-4">
            <button
              type="submit"
              class="w-full bg-primary hover:brightness-110 text-background-dark font-black py-4 rounded-xl
                     text-lg flex items-center justify-center gap-2 transition-all shadow-lg shadow-primary/20"
            >
              <span class="material-symbols-outlined">rocket_launch</span>
              Publicar Producto Ahora
            </button>
          </div>

        </form>
      </div>

      <!-- Pro Tip -->
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

  <!-- =========================================================
       FOOTER
       ========================================================= -->
  <footer class="mt-auto border-t border-[#283539] bg-background-dark py-12 px-6">
    <div class="max-w-7xl mx-auto flex flex-col md:flex-row justify-between items-center gap-8">

      <!-- Brand -->
      <div class="flex flex-col gap-2 items-center md:items-start">
        <div class="flex items-center gap-2 opacity-80">
          <div class="bg-primary size-5 rounded-sm"></div>
          <span class="text-xl font-bold text-white tracking-tighter">TechSales</span>
        </div>
        <p class="text-slate-500 text-sm">© 2024 TechSales Inc. Todos los derechos reservados.</p>
      </div>

      <!-- Social Links -->
      <div class="flex gap-8">

        <!-- Twitter / X -->
        <a class="text-slate-400 hover:text-primary transition-colors" href="#" aria-label="Twitter">
          <svg class="size-6" fill="currentColor" viewBox="0 0 24 24">
            <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127
                     1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148
                     -5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949
                     4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29
                     2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562
                     2.457-2.549z"/>
          </svg>
        </a>

        <!-- LinkedIn -->
        <a class="text-slate-400 hover:text-primary transition-colors" href="#" aria-label="LinkedIn">
          <svg class="size-6" fill="currentColor" viewBox="0 0 24 24">
            <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5
                     -5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79
                     1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765
                     c1.396-2.586 7-2.777 7 2.476v6.759z"/>
          </svg>
        </a>

        <!-- GitHub -->
        <a class="text-slate-400 hover:text-primary transition-colors" href="#" aria-label="GitHub">
          <svg class="size-6" fill="currentColor" viewBox="0 0 24 24">
            <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234
                     c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729
                     1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604
                     -2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176
                     0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552
                     3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807
                     5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086
                     8.199-11.386 0-6.627-5.373-12-12-12z"/>
          </svg>
        </a>

      </div>
    </div>
  </footer>

</body>
</html>