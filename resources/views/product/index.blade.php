<!DOCTYPE html>

<html class="dark" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>TechSales | Premium Hardware Catalog</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;900&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#0db9f2",
                        "background-light": "#f5f8f8",
                        "background-dark": "#101e22",
                    },
                    fontFamily: {
                        "display": ["Inter"]
                    },
                    borderRadius: { "DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px" },
                },
            },
        }
    </script>
<style>
        body {
            font-family: 'Inter', sans-serif;
        }
        .product-card:hover {
            box-shadow: 0 0 15px rgba(13, 185, 242, 0.3);
            border-color: rgba(13, 185, 242, 0.5);
            transform: translateY(-2px);
            transition: all 0.3s ease;
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-slate-100 min-h-screen flex flex-col">
<!-- Top Navigation Bar -->
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
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-xl">search</span>
<input class="bg-white/5 border-white/10 rounded-lg pl-10 pr-4 py-1.5 text-sm focus:ring-1 focus:ring-primary focus:border-primary w-64 text-white placeholder:text-slate-500" placeholder="Search hardware..." type="text"/>
</div>
<button class="bg-primary hover:bg-primary/90 text-background-dark px-5 py-1.5 rounded-lg text-sm font-bold transition-all flex items-center gap-2">
<span class="material-symbols-outlined text-lg">login</span>
                        Login
                    </button>
</div>
</div>
</div>
</header>
<!-- Hero / Category Filter Bar -->
<section class="bg-white/5 border-b border-white/5">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
<div class="flex flex-wrap items-center justify-between gap-4">
<div class="flex items-center gap-2 overflow-x-auto pb-2 sm:pb-0 no-scrollbar">
<button class="bg-primary/20 text-primary border border-primary/30 px-4 py-1.5 rounded-full text-xs font-semibold whitespace-nowrap">All Products</button>
<button class="bg-white/5 hover:bg-white/10 text-slate-300 px-4 py-1.5 rounded-full text-xs font-semibold whitespace-nowrap transition-colors">GPUs</button>
<button class="bg-white/5 hover:bg-white/10 text-slate-300 px-4 py-1.5 rounded-full text-xs font-semibold whitespace-nowrap transition-colors">Monitors</button>
<button class="bg-white/5 hover:bg-white/10 text-slate-300 px-4 py-1.5 rounded-full text-xs font-semibold whitespace-nowrap transition-colors">Laptops</button>
<button class="bg-white/5 hover:bg-white/10 text-slate-300 px-4 py-1.5 rounded-full text-xs font-semibold whitespace-nowrap transition-colors">Peripherals</button>
</div>
<div class="flex items-center gap-2 text-slate-400 text-xs font-medium">
<span>Showing 12 of 48 Products</span>
<span class="material-symbols-outlined text-sm">filter_list</span>
</div>
</div>
</div>
</section>
<!-- Main Content: Product Grid -->
<main class="flex-grow max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
<div class="mb-8">
<h2 class="text-3xl font-black text-white tracking-tight">Premium Hardware Catalog</h2>
<p class="text-slate-400 mt-2">Next-gen performance components for professionals and enthusiasts.</p>
</div>
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
<!-- Card 1 -->
<div class="product-card bg-white/5 border border-white/10 rounded-xl overflow-hidden flex flex-col group">
<div class="relative aspect-video bg-slate-800 overflow-hidden">
<div class="absolute inset-0 bg-gradient-to-t from-background-dark/80 to-transparent"></div>
<div class="w-full h-full bg-cover bg-center transition-transform duration-500 group-hover:scale-110" data-alt="High-end RTX 4090 graphics card close up" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCbxvx-uXIs2zAL13nzeQUOrEAMEhxNWleRHALk9tdW93hb6fVMA4bTFaIJSese1rGSEx6h15WYXNMczFGf9c9jjZU9LVc8ZuZ6M5Lg9Yw1LWuiddmp9js-8m5kP79_Zp16G1ol7OzN224e2aBYBvD08aeN5Y-sAUK6OiANuIZr_X4FoWBx9fcxu4nXKDkjr-F0ktXaNITsByA0xwTEbP9Y7s4vz5qWPGX1qBrtfwOMXeq4Iwte3b89Btgd7sz_ajhgLEINdF_TfhIE')"></div>
<span class="absolute top-3 left-3 bg-primary text-background-dark text-[10px] font-black px-2 py-0.5 rounded uppercase tracking-wider">In Stock</span>
</div>
<div class="p-5 flex flex-col flex-grow">
<div class="flex justify-between items-start mb-2">
<h3 class="text-white font-bold text-lg leading-snug">GeForce RTX 4090 OC Edition</h3>
<span class="text-primary font-black text-lg">$1,599</span>
</div>
<p class="text-slate-400 text-sm mb-6 flex-grow">24GB GDDR6X, Triple Fan Cooling, DLSS 3.0 Support, 4th Gen Tensor Cores.</p>
<div class="flex gap-2">
<button class="flex-grow bg-primary hover:bg-primary/90 text-background-dark py-2 rounded-lg text-sm font-bold transition-all">Add to Cart</button>
<button class="px-3 bg-white/5 hover:bg-white/10 border border-white/10 rounded-lg text-white transition-all">
<span class="material-symbols-outlined text-xl align-middle">visibility</span>
</button>
</div>
</div>
</div>
<!-- Card 2 -->
<div class="product-card bg-white/5 border border-white/10 rounded-xl overflow-hidden flex flex-col group">
<div class="relative aspect-video bg-slate-800 overflow-hidden">
<div class="absolute inset-0 bg-gradient-to-t from-background-dark/80 to-transparent"></div>
<div class="w-full h-full bg-cover bg-center transition-transform duration-500 group-hover:scale-110" data-alt="Ultra wide curved OLED gaming monitor" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDpOglzePlCuNHDCvmO8soTtihfEFHjFCI5FGkPYJlAwCFRRGlhpCXdv7aw9iGUJflP14Vt1D1xDeHsFnQdasIOpgbAPpV2CVJ7tIIGt2rRPSEfxAllfiOIshxlVAyzGL4fBFjktFCKUvQsI4ygmgHPudyNXOYih55xW3oFIV4y1QCxyB3YFPj8c4djKv9f1ZJnAE8s2vEVapvnqa4w6S-FGyyMnnx3eTYDLJKW1coIsIwNv0gMerDRUr7mAimZAZATrghG7-IsWYhi')"></div>
</div>
<div class="p-5 flex flex-col flex-grow">
<div class="flex justify-between items-start mb-2">
<h3 class="text-white font-bold text-lg leading-snug">34" Curved OLED Pro Display</h3>
<span class="text-primary font-black text-lg">$1,299</span>
</div>
<p class="text-slate-400 text-sm mb-6 flex-grow">240Hz Refresh Rate, 0.03ms GtG, 99% DCI-P3, HDR1000, Ultra-wide 1440p.</p>
<div class="flex gap-2">
<button class="flex-grow bg-primary hover:bg-primary/90 text-background-dark py-2 rounded-lg text-sm font-bold transition-all">Add to Cart</button>
<button class="px-3 bg-white/5 hover:bg-white/10 border border-white/10 rounded-lg text-white transition-all">
<span class="material-symbols-outlined text-xl align-middle">visibility</span>
</button>
</div>
</div>
</div>
<!-- Card 3 -->
<div class="product-card bg-white/5 border border-white/10 rounded-xl overflow-hidden flex flex-col group">
<div class="relative aspect-video bg-slate-800 overflow-hidden">
<div class="absolute inset-0 bg-gradient-to-t from-background-dark/80 to-transparent"></div>
<div class="w-full h-full bg-cover bg-center transition-transform duration-500 group-hover:scale-110" data-alt="Sleek silver gaming laptop open on desk" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCQIMkcGQByzDDc0ZE9dkgW7Tufrp422PyUHEL_5giZXWX7ZlisxphbsyAfkCYIHLK7CimzuaUWSXyZistwREnCsXNq79RYPhZJnM8a_XqW1vlhztwStcT_wqUrzxo-rPFpRSN6xBTL4XhkSPXKEqgdkbcXrcUNxfQYJMO8Bnk7Rph8mTHzzpWiUmHA6PyvERQBXTexLBW0hloVc36Dskydf5Oi8kxEuNJHjMGsb5FTUl1Rsx2kodYlZyrKeTO08hq-_0m9Y2nc_KEy')"></div>
<span class="absolute top-3 left-3 bg-red-500 text-white text-[10px] font-black px-2 py-0.5 rounded uppercase tracking-wider">Hot</span>
</div>
<div class="p-5 flex flex-col flex-grow">
<div class="flex justify-between items-start mb-2">
<h3 class="text-white font-bold text-lg leading-snug">X-Titan Gaming i9 Laptop</h3>
<span class="text-primary font-black text-lg">$2,849</span>
</div>
<p class="text-slate-400 text-sm mb-6 flex-grow">Intel Core i9-13980HX, 64GB DDR5, RTX 4080 Mobile, 2TB NVMe Gen4 SSD.</p>
<div class="flex gap-2">
<button class="flex-grow bg-primary hover:bg-primary/90 text-background-dark py-2 rounded-lg text-sm font-bold transition-all">Add to Cart</button>
<button class="px-3 bg-white/5 hover:bg-white/10 border border-white/10 rounded-lg text-white transition-all">
<span class="material-symbols-outlined text-xl align-middle">visibility</span>
</button>
</div>
</div>
</div>
<!-- Card 4 -->
<div class="product-card bg-white/5 border border-white/10 rounded-xl overflow-hidden flex flex-col group">
<div class="relative aspect-video bg-slate-800 overflow-hidden">
<div class="absolute inset-0 bg-gradient-to-t from-background-dark/80 to-transparent"></div>
<div class="w-full h-full bg-cover bg-center transition-transform duration-500 group-hover:scale-110" data-alt="Custom mechanical keyboard with RGB lighting" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuB96jCEKX7UX4yQP4C_hjGLBk89ArBfm96YznbGr4L2xziIzCxIf19H9vllt4jwTEQceqad3Tj_ynmD1-L6OqVwvhDn64lglAYYO1YUQKgsiAuwAQNOs7xgowDEqEuKJ0-QbOvX_uI5gyFDXSmOd7bOvtPdQ2UvkWLE-CW4vrNSoX-_-eTQEzoSXg8A5K_HGXgeyE_XzhC5dEIULCeoSUx0LJrp5JtG7tQ-Wue7ez8du4ZndZuMggwUX-IarqWIEnx6wzI0wYOdxZzg')"></div>
</div>
<div class="p-5 flex flex-col flex-grow">
<div class="flex justify-between items-start mb-2">
<h3 class="text-white font-bold text-lg leading-snug">Tactile-X Pro Keyboard</h3>
<span class="text-primary font-black text-lg">$249</span>
</div>
<p class="text-slate-400 text-sm mb-6 flex-grow">Hot-swappable Mechanical Switches, PBT Keycaps, Per-key RGB, CNC Aluminum.</p>
<div class="flex gap-2">
<button class="flex-grow bg-primary hover:bg-primary/90 text-background-dark py-2 rounded-lg text-sm font-bold transition-all">Add to Cart</button>
<button class="px-3 bg-white/5 hover:bg-white/10 border border-white/10 rounded-lg text-white transition-all">
<span class="material-symbols-outlined text-xl align-middle">visibility</span>
</button>
</div>
</div>
</div>
<!-- Card 5 -->
<div class="product-card bg-white/5 border border-white/10 rounded-xl overflow-hidden flex flex-col group">
<div class="relative aspect-video bg-slate-800 overflow-hidden">
<div class="absolute inset-0 bg-gradient-to-t from-background-dark/80 to-transparent"></div>
<div class="w-full h-full bg-cover bg-center transition-transform duration-500 group-hover:scale-110" data-alt="High performance water-cooled PC tower" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCz9STyzTVZP3L6EmgXv0Ss7TU3CLhJ5zgKmib3XackcslkMiZalgBvYa304rrWBLBJ1f-ihQP2bwAmHZfIvLtKxNJspAzIdGbTkCZgWgID7ZG82XvDEskivH024mZUkIpIVfQGJz08f8gfcMrCNzIlVrFSa8dMbPhSRY1Z4j6AIC0Wk1A3YLUPvw7eflwzA28fsdXH36AEnKn2mtLvqSRrZ9RwIJfi5fPgJUApZzz2bgZKbpaqtniW0cQybQgjp9J1xi8c1Cd5S_6j')"></div>
</div>
<div class="p-5 flex flex-col flex-grow">
<div class="flex justify-between items-start mb-2">
<h3 class="text-white font-bold text-lg leading-snug">Titan Liquid CPU Cooler</h3>
<span class="text-primary font-black text-lg">$189</span>
</div>
<p class="text-slate-400 text-sm mb-6 flex-grow">360mm Radiator, LCD Pump Head Display, High-Static Pressure Silent Fans.</p>
<div class="flex gap-2">
<button class="flex-grow bg-primary hover:bg-primary/90 text-background-dark py-2 rounded-lg text-sm font-bold transition-all">Add to Cart</button>
<button class="px-3 bg-white/5 hover:bg-white/10 border border-white/10 rounded-lg text-white transition-all">
<span class="material-symbols-outlined text-xl align-middle">visibility</span>
</button>
</div>
</div>
</div>
<!-- Card 6 -->
<div class="product-card bg-white/5 border border-white/10 rounded-xl overflow-hidden flex flex-col group">
<div class="relative aspect-video bg-slate-800 overflow-hidden">
<div class="absolute inset-0 bg-gradient-to-t from-background-dark/80 to-transparent"></div>
<div class="w-full h-full bg-cover bg-center transition-transform duration-500 group-hover:scale-110" data-alt="Gaming mouse with sleek design and lights" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDAZdhjrWTHt6kuAbbet8THcnKJ16mPR-P8-E5Dt2fdGzaeOxSD_tRRfZ3EsGBrBbNQBHAC42hASkSnIpsh02PvjcIjkRrZtY9BiJq9zCED0PhnxfqME4CwqeHr_lfLnRZ7JKjekthWBr2pfV_GKnOnQFPLukAv_zgLFHiNWanLTcoyhlUyFkI3959iaeDj23m7nBRhyPwoQCwYc0-aapPaGkAN0Oe0CzY5gT7PQwpjnhea9jEM5r4S7CRgtbz2TKwNfGYMlfxHX2F3')"></div>
</div>
<div class="p-5 flex flex-col flex-grow">
<div class="flex justify-between items-start mb-2">
<h3 class="text-white font-bold text-lg leading-snug">Aero-Precision Wireless Mouse</h3>
<span class="text-primary font-black text-lg">$129</span>
</div>
<p class="text-slate-400 text-sm mb-6 flex-grow">Ultra-lightweight 54g, 30K DPI Sensor, 100hr Battery, Zero Latency Wireless.</p>
<div class="flex gap-2">
<button class="flex-grow bg-primary hover:bg-primary/90 text-background-dark py-2 rounded-lg text-sm font-bold transition-all">Add to Cart</button>
<button class="px-3 bg-white/5 hover:bg-white/10 border border-white/10 rounded-lg text-white transition-all">
<span class="material-symbols-outlined text-xl align-middle">visibility</span>
</button>
</div>
</div>
</div>
<!-- Card 7 -->
<div class="product-card bg-white/5 border border-white/10 rounded-xl overflow-hidden flex flex-col group">
<div class="relative aspect-video bg-slate-800 overflow-hidden">
<div class="absolute inset-0 bg-gradient-to-t from-background-dark/80 to-transparent"></div>
<div class="w-full h-full bg-cover bg-center transition-transform duration-500 group-hover:scale-110" data-alt="High-speed DDR5 RAM modules with RGB" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuACMDeUGcGw1P1DhButhtNKigUaVSZX5RVE3Fr7h7GVmaW-8kjjyqwxHmUoAlJpMp86fP-31aCcifgLZlg7sYuXRkSSL4uyv7S6NzahjaAoE9d54RZenZu0UfrruPyqDA9LLrJN44C2ANtjlHDS-bphOWcrreZkZvtyRRTZMlZ7i-x_DCFMimP8D-fXg-sSe6PgMaPnw9n9bTOhMDIl5m9sqBBSr8fUbM5-YQg_FGMtouyaxi7M5Ao5i4NCWEJY2Gwc0CWwGJboNs6e')"></div>
</div>
<div class="p-5 flex flex-col flex-grow">
<div class="flex justify-between items-start mb-2">
<h3 class="text-white font-bold text-lg leading-snug">Vortex DDR5 RAM 64GB</h3>
<span class="text-primary font-black text-lg">$349</span>
</div>
<p class="text-slate-400 text-sm mb-6 flex-grow">6400MT/s Speed, Low Latency CL32, Heatsink with Customizable RGB Strips.</p>
<div class="flex gap-2">
<button class="flex-grow bg-primary hover:bg-primary/90 text-background-dark py-2 rounded-lg text-sm font-bold transition-all">Add to Cart</button>
<button class="px-3 bg-white/5 hover:bg-white/10 border border-white/10 rounded-lg text-white transition-all">
<span class="material-symbols-outlined text-xl align-middle">visibility</span>
</button>
</div>
</div>
</div>
<!-- Card 8 -->
<div class="product-card bg-white/5 border border-white/10 rounded-xl overflow-hidden flex flex-col group">
<div class="relative aspect-video bg-slate-800 overflow-hidden">
<div class="absolute inset-0 bg-gradient-to-t from-background-dark/80 to-transparent"></div>
<div class="w-full h-full bg-cover bg-center transition-transform duration-500 group-hover:scale-110" data-alt="Professional studio microphone for streaming" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuC_oKCD5LN0bYCzx_pqqSpRWgscq-gFTDiqae9Jncqba6q78orEwiGNuKh9-B48lOgrGMKh-lcUt16MTh3YMSKa0BYQVeSU8Q0aH73caxpQtqh3AarEwISljmduHbVDesIClWCa70Xn8etLB4TQkuhYW_GhO-PBxgNkz1YKRl0pB-WUBhxmx5gtd4CRwmvkT13cqA7uZbdws0V7yRFx8QqolVZ80AYooWW12WOVZ_TUPp0YHfv2xZ6DTumCTGyfJUeZ7k-HBDMxOvWs')"></div>
</div>
<div class="p-5 flex flex-col flex-grow">
<div class="flex justify-between items-start mb-2">
<h3 class="text-white font-bold text-lg leading-snug">Streamer Pro XLR Mic Kit</h3>
<span class="text-primary font-black text-lg">$420</span>
</div>
<p class="text-slate-400 text-sm mb-6 flex-grow">Professional Condenser Mic, Boom Arm, Pop Filter, and Audio Interface Bundle.</p>
<div class="flex gap-2">
<button class="flex-grow bg-primary hover:bg-primary/90 text-background-dark py-2 rounded-lg text-sm font-bold transition-all">Add to Cart</button>
<button class="px-3 bg-white/5 hover:bg-white/10 border border-white/10 rounded-lg text-white transition-all">
<span class="material-symbols-outlined text-xl align-middle">visibility</span>
</button>
</div>
</div>
</div>
</div>
<!-- Pagination -->
<div class="mt-12 flex justify-center">
<nav class="flex items-center gap-2">
<button class="w-10 h-10 flex items-center justify-center rounded-lg bg-white/5 text-slate-400 hover:bg-white/10 transition-colors">
<span class="material-symbols-outlined">chevron_left</span>
</button>
<button class="w-10 h-10 flex items-center justify-center rounded-lg bg-primary text-background-dark font-bold">1</button>
<button class="w-10 h-10 flex items-center justify-center rounded-lg bg-white/5 text-slate-400 hover:bg-white/10 transition-colors">2</button>
<button class="w-10 h-10 flex items-center justify-center rounded-lg bg-white/5 text-slate-400 hover:bg-white/10 transition-colors">3</button>
<span class="text-slate-600 px-2">...</span>
<button class="w-10 h-10 flex items-center justify-center rounded-lg bg-white/5 text-slate-400 hover:bg-white/10 transition-colors">6</button>
<button class="w-10 h-10 flex items-center justify-center rounded-lg bg-white/5 text-slate-400 hover:bg-white/10 transition-colors">
<span class="material-symbols-outlined">chevron_right</span>
</button>
</nav>
</div>
</main>
<!-- Footer -->
<footer class="bg-black/40 border-t border-white/5 mt-auto">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
<div class="grid grid-cols-1 md:grid-cols-4 gap-10">
<div class="col-span-1 md:col-span-1">
<div class="flex items-center gap-2 text-primary mb-6">
<span class="material-symbols-outlined text-2xl">developer_board</span>
<h2 class="text-white text-lg font-bold">TechSales</h2>
</div>
<p class="text-slate-400 text-sm leading-relaxed">The destination for premium computing hardware. We deliver the components that power your ambition.</p>
</div>
<div>
<h3 class="text-white font-bold mb-6 text-sm uppercase tracking-widest">Shop</h3>
<ul class="space-y-4 text-sm text-slate-400">
<li><a class="hover:text-primary transition-colors" href="#">All Products</a></li>
<li><a class="hover:text-primary transition-colors" href="#">Graphics Cards</a></li>
<li><a class="hover:text-primary transition-colors" href="#">Monitors</a></li>
<li><a class="hover:text-primary transition-colors" href="#">Laptops</a></li>
</ul>
</div>
<div>
<h3 class="text-white font-bold mb-6 text-sm uppercase tracking-widest">Support</h3>
<ul class="space-y-4 text-sm text-slate-400">
<li><a class="hover:text-primary transition-colors" href="#">Order Tracking</a></li>
<li><a class="hover:text-primary transition-colors" href="#">Warranty &amp; Returns</a></li>
<li><a class="hover:text-primary transition-colors" href="#">Shipping Policy</a></li>
<li><a class="hover:text-primary transition-colors" href="#">Contact Us</a></li>
</ul>
</div>
<div>
<h3 class="text-white font-bold mb-6 text-sm uppercase tracking-widest">Connect</h3>
<div class="flex gap-4">
<a class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center text-slate-300 hover:bg-primary hover:text-background-dark transition-all" href="#">
<svg class="w-5 h-5 fill-current" viewbox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"></path></svg>
</a>
<a class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center text-slate-300 hover:bg-primary hover:text-background-dark transition-all" href="#">
<svg class="w-5 h-5 fill-current" viewbox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"></path></svg>
</a>
<a class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center text-slate-300 hover:bg-primary hover:text-background-dark transition-all" href="#">
<svg class="w-5 h-5 fill-current" viewbox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"></path></svg>
</a>
</div>
</div>
</div>
<div class="border-t border-white/5 mt-10 pt-6 flex flex-col md:flex-row justify-between items-center gap-4">
<p class="text-slate-500 text-xs">© 2024 TechSales Premium Hardware. All rights reserved.</p>
<div class="flex gap-6 text-xs text-slate-500">
<a class="hover:text-slate-300" href="#">Privacy Policy</a>
<a class="hover:text-slate-300" href="#">Terms of Service</a>
</div>
</div>
</div>
</footer>
</body></html>