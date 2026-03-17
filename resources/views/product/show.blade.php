<!DOCTYPE html>
<html class="dark" lang="en">
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>{{ $producto->name }} - TechSales</title>

<script src="https://cdn.tailwindcss.com"></script>

<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet"/>

<script>
tailwind.config = {
    darkMode: "class",
    theme: {
        extend: {
            colors: {
                primary: "#0db9f2",
                "background-dark": "#101e22",
            },
            fontFamily: {
                sans: ["Inter"]
            }
        }
    }
}
</script>
</head>

<body class="bg-background-dark text-white font-sans">

<!-- ================= HEADER ================= -->
<header class="sticky top-0 z-50 border-b border-white/10 bg-background-dark/80 backdrop-blur">

<div class="max-w-7xl mx-auto px-6 h-16 flex items-center justify-between">

    <!-- LOGO -->
    <div class="font-extrabold text-lg">
        <span class="text-primary">TECH</span>SALES
    </div>

    <!-- NAV -->
    <nav class="hidden md:flex gap-6 text-sm text-gray-300">
        <a href="#" class="hover:text-primary">GPU</a>
        <a href="#" class="hover:text-primary">CPU</a>
        <a href="#" class="hover:text-primary">Motherboards</a>
        <a href="#" class="hover:text-primary">Memory</a>
    </nav>

    <!-- RIGHT -->
    <div class="flex items-center gap-4">

        <span class="material-symbols-outlined">person</span>

        <!-- CARRITO -->
        <a href="{{ route('cart.index') }}" class="relative">
            <span class="material-symbols-outlined">shopping_cart</span>

            <span class="absolute -top-2 -right-2 bg-primary text-xs px-1 rounded-full">
                {{ session('cart') ? count(session('cart')) : 0 }}
            </span>
        </a>

    </div>

</div>

</header>
<!-- ================= END HEADER ================= -->


<!-- ================= MAIN ================= -->
<main class="max-w-7xl mx-auto px-6 py-10">

<!-- Breadcrumb -->
<div class="text-sm text-gray-400 mb-6 flex gap-2">
    <span>Home</span> >
    <span>{{ $producto->category->name ?? 'Sin categoría' }}</span> >
    <span class="text-white">{{ $producto->name }}</span>
</div>

<div class="grid grid-cols-1 lg:grid-cols-2 gap-10">

<!-- IMAGEN -->
<div class="bg-white/5 p-6 rounded-xl border border-white/10">
    <span class="bg-primary text-xs px-3 py-1 rounded font-bold uppercase">In Stock</span>

    <img 
        src="{{ asset('storage/' . $producto->image) }}"
        class="w-full h-[400px] object-contain mt-4 hover:scale-105 transition"
    >
</div>

<!-- INFO -->
<div class="flex flex-col gap-6">

    <!-- CATEGORIA -->
    <span class="text-primary text-xs font-bold uppercase">
        {{ $producto->category->name ?? 'Sin categoría' }}
    </span>

    <!-- NOMBRE -->
    <h1 class="text-4xl font-extrabold">
        {{ $producto->name }}
    </h1>

    <!-- DESCRIPCION -->
    <p class="text-gray-400 leading-relaxed">
        {{ $producto->description }}
    </p>

    <!-- PRECIO + COMPRA -->
    <div class="bg-white/5 p-6 rounded-xl border border-white/10">

        <div class="text-4xl font-bold mb-4">
            ${{ number_format($producto->price, 0) }}
        </div>

        <!-- BOTON CARRITO -->
        <form action="{{ route('cart.add', $producto->id) }}" method="POST">
            @csrf
            <button class="w-full bg-primary py-3 rounded-lg font-bold hover:bg-primary/80 transition flex items-center justify-center gap-2">
                <span class="material-symbols-outlined">add_shopping_cart</span>
                ADD TO CART
            </button>
        </form>

        <button class="w-full mt-3 border border-white/20 py-3 rounded-lg hover:bg-white/10 transition">
            ❤️ ADD TO WISHLIST
        </button>

        <div class="flex justify-between mt-6 text-sm text-gray-400">
            <span>🚚 Free Delivery</span>
            <span>🛡️ Warranty</span>
        </div>

    </div>

</div>

</div>

</main>
<!-- ================= END MAIN ================= -->

</body>
</html>