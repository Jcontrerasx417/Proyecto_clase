<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Carrito</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

<style>
    body{
        background: linear-gradient(135deg, #eef2ff, #f8fafc);
        font-family: 'Segoe UI', sans-serif;
    }

    h2{
        color: #1e3a8a;
    }

    .card{
        border-radius: 15px;
        box-shadow: 0 6px 20px rgba(0,0,0,0.1);
        border: none;
        background: #ffffff;
    }

    .product-img{
        width: 70px;
        height: 70px;
        object-fit: cover;
        border-radius: 12px;
        border: 2px solid #e0e7ff;
    }

    .btn-custom{
        border-radius: 10px;
        transition: 0.3s;
    }

    .btn-custom:hover{
        transform: scale(1.05);
    }

    .btn-outline-secondary{
        border-color: #6366f1;
        color: #6366f1;
    }

    .btn-outline-secondary:hover{
        background-color: #6366f1;
        color: white;
    }

    .btn-danger{
        background-color: #ef4444;
        border: none;
    }

    .btn-danger:hover{
        background-color: #dc2626;
    }

    .btn-dark{
        background: linear-gradient(135deg, #4f46e5, #1e3a8a);
        border: none;
    }

    .btn-dark:hover{
        opacity: 0.9;
    }

    .btn-outline-primary{
        border-color: #4f46e5;
        color: #4f46e5;
    }

    .btn-outline-primary:hover{
        background-color: #4f46e5;
        color: white;
    }

    .total-box{
        background: linear-gradient(135deg, #ffffff, #eef2ff);
        padding: 20px;
        border-radius: 15px;
        box-shadow: 0 6px 20px rgba(0,0,0,0.1);
    }

    .fw-bold{
        color: #111827;
    }

    .text-muted{
        color: #6b7280 !important;
    }

    hr{
        border-top: 1px solid #c7d2fe;
    }

</style>
</head>

<body>

<div class="container mt-5">

    <h2 class="mb-4 fw-bold">
        🛒 Tu Carrito
    </h2>

    @if(session('cart') && count(session('cart')) > 0)

    <div class="row">

        <!-- 🧾 LISTA PRODUCTOS -->
        <div class="col-md-8">

            <div class="card p-3">

                @php $total = 0; @endphp

                @foreach(session('cart') as $id => $item)

                @php $total += $item['price'] * $item['quantity']; @endphp

                <div class="d-flex align-items-center justify-content-between border-bottom py-3">

                    <div class="d-flex align-items-center gap-3">
                        <img src="{{ asset('storage/'.$item['image']) }}" class="product-img">

                        <div>
                            <h5 class="mb-1">{{ $item['name'] }}</h5>
                            <small class="text-muted">${{ $item['price'] }}</small>
                        </div>
                    </div>

                    <div class="d-flex align-items-center gap-2">

                        <!-- ➖ -->
                        <form action="{{ route('cart.decrease', $id) }}" method="POST">
                            @csrf
                            <button class="btn btn-outline-secondary btn-sm btn-custom">
                                <i class="fas fa-minus"></i>
                            </button>
                        </form>

                        <span class="fw-bold">{{ $item['quantity'] }}</span>

                        <!-- ➕ -->
                        <form action="{{ route('cart.increase', $id) }}" method="POST">
                            @csrf
                            <button class="btn btn-outline-secondary btn-sm btn-custom">
                                <i class="fas fa-plus"></i>
                            </button>
                        </form>

                    </div>

                    <div class="fw-bold">
                        ${{ $item['price'] * $item['quantity'] }}
                    </div>

                    <!-- ❌ -->
                    <form action="{{ route('cart.remove', $id) }}" method="POST">
                        @csrf
                        <button class="btn btn-danger btn-sm btn-custom">
                            <i class="fas fa-trash"></i>
                        </button>
                    </form>

                </div>

                @endforeach

            </div>

        </div>


        <!-- 💰 TOTAL -->
        <div class="col-md-4">

            <div class="total-box">

                <h4 class="mb-3">Resumen</h4>

                <div class="d-flex justify-content-between mb-2">
                    <span>Subtotal</span>
                    <span>${{ $total }}</span>
                </div>

                <hr>

                <div class="d-flex justify-content-between fw-bold fs-5">
                    <span>Total</span>
                    <span>${{ $total }}</span>
                </div>

                <button class="btn btn-dark w-100 mt-3 btn-custom">
                    Finalizar compra
                </button>

                <a href="{{ route('product.index') }}" class="btn btn-outline-primary w-100 mt-2 btn-custom">
                    Seguir comprando
                </a>

            </div>

        </div>

    </div>

    @else

    <div class="text-center mt-5">
        <h4 class="text-muted">Tu carrito está vacío 🛒</h4>
        <a href="{{ route('product.index') }}" class="btn btn-primary mt-3">
            Ir a comprar
        </a>
    </div>

    @endif

</div>

</body>
</html>