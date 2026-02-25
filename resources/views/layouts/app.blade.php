<!DOCTYPE html>
<html class="dark" lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>TechSales | Premium Hardware Catalog</title>
  <link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;900&display=swap"
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
            display: ["Inter"],
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
    body { font-family: "Inter", sans-serif; }

    /* Product card hover effect */
    .product-card:hover {
      box-shadow:     0 0 15px rgba(13, 185, 242, 0.3);
      border-color:   rgba(13, 185, 242, 0.5);
      transform:      translateY(-2px);
      transition:     all 0.3s ease;
    }
  </style>
</head>

<body class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-slate-100 min-h-screen flex flex-col">

  <header class="sticky top-0 z-50 w-full border-b border-white/10 bg-background-dark/80 backdrop-blur-md">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex items-center justify-between h-16">

        <div class="flex items-center gap-8">
          <div class="flex items-center gap-2 text-primary">
            <span class="material-symbols-outlined text-3xl">developer_board</span>
            <h1 class="text-white text-xl font-bold tracking-tight">TechSales</h1>
          </div>
          <nav class="hidden md:flex items-center gap-8">
            <a class="text-slate-300 hover:text-primary text-sm font-medium transition-colors" href="#">Home</a>
            <a class="text-primary text-sm font-medium border-b-2 border-primary pb-1" href="#">Products</a>
            <a class="text-slate-300 hover:text-primary text-sm font-medium transition-colors" href="#">About</a>
          </nav>
        </div>

        <div class="flex items-center gap-4">
          <div class="relative hidden lg:block">
            <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-xl">
              search
            </span>
            <input
              type="text"
              class="bg-white/5 border border-white/10 rounded-lg pl-10 pr-4 py-1.5 text-sm w-64 text-white
                     placeholder:text-slate-500 focus:ring-1 focus:ring-primary focus:border-primary"
              placeholder="Search hardware..."
            />
          </div>
          <button class="bg-primary hover:bg-primary/90 text-background-dark px-5 py-1.5 rounded-lg text-sm
                         font-bold transition-all flex items-center gap-2">
            <span class="material-symbols-outlined text-lg">login</span>
            Login
          </button>
        </div>

      </div>
    </div>
  </header>

  <footer class="bg-black/40 border-t border-white/5 mt-auto">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">

      <!-- Footer Grid -->
      <div class="grid grid-cols-1 md:grid-cols-4 gap-10">

        <!-- Brand Blurb -->
        <div class="col-span-1">
          <div class="flex items-center gap-2 text-primary mb-6">
            <span class="material-symbols-outlined text-2xl">developer_board</span>
            <h2 class="text-white text-lg font-bold">TechSales</h2>
          </div>
          <p class="text-slate-400 text-sm leading-relaxed">
            The destination for premium computing hardware. We deliver the components that power your ambition.
          </p>
        </div>

        <!-- Shop Links -->
        <div>
          <h3 class="text-white font-bold mb-6 text-sm uppercase tracking-widest">Shop</h3>
          <ul class="space-y-4 text-sm text-slate-400">
            <li><a class="hover:text-primary transition-colors" href="#">All Products</a></li>
            <li><a class="hover:text-primary transition-colors" href="#">Graphics Cards</a></li>
            <li><a class="hover:text-primary transition-colors" href="#">Monitors</a></li>
            <li><a class="hover:text-primary transition-colors" href="#">Laptops</a></li>
          </ul>
        </div>

        <!-- Support Links -->
        <div>
          <h3 class="text-white font-bold mb-6 text-sm uppercase tracking-widest">Support</h3>
          <ul class="space-y-4 text-sm text-slate-400">
            <li><a class="hover:text-primary transition-colors" href="#">Order Tracking</a></li>
            <li><a class="hover:text-primary transition-colors" href="#">Warranty &amp; Returns</a></li>
            <li><a class="hover:text-primary transition-colors" href="#">Shipping Policy</a></li>
            <li><a class="hover:text-primary transition-colors" href="#">Contact Us</a></li>
          </ul>
        </div>

        <!-- Social Links -->
        <div>
          <h3 class="text-white font-bold mb-6 text-sm uppercase tracking-widest">Connect</h3>
          <div class="flex gap-4">

            <!-- Twitter / X -->
            <a class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center text-slate-300
                      hover:bg-primary hover:text-background-dark transition-all"
               href="#" aria-label="Twitter">
              <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564
                         -2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797
                         6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806
                         -.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232
                         -2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179
                         1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797
                         -1.562 2.457-2.549z"/>
              </svg>
            </a>

            <!-- Instagram -->
            <a class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center text-slate-300
                      hover:bg-primary hover:text-background-dark transition-all"
               href="#" aria-label="Instagram">
              <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069
                         1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919
                         -1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699
                         -4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227
                         1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014
                         -4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014
                         3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0
                         3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948
                         0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073
                         -4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163
                         6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79
                         -4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441
                         .645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439
                         -1.44z"/>
              </svg>
            </a>

            <!-- LinkedIn -->
            <a class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center text-slate-300
                      hover:bg-primary hover:text-background-dark transition-all"
               href="#" aria-label="LinkedIn">
              <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14
                         c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764
                         s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604
                         c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
              </svg>
            </a>

          </div>
        </div>

      </div><!-- /Footer Grid -->

      <!-- Bottom Bar -->
      <div class="border-t border-white/5 mt-10 pt-6 flex flex-col md:flex-row justify-between items-center gap-4">
        <p class="text-slate-500 text-xs">© 2024 TechSales Premium Hardware. All rights reserved.</p>
        <div class="flex gap-6 text-xs text-slate-500">
          <a class="hover:text-slate-300" href="#">Privacy Policy</a>
          <a class="hover:text-slate-300" href="#">Terms of Service</a>
        </div>
      </div>

    </div>
  </footer>

</body>
</html>