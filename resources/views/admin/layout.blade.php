<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Admin Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f4f6f9;
        }

        .sidebar {
            width: 250px;
            height: 100vh;
            background: #1e293b;
            color: white;
            position: fixed;
            padding: 20px;
        }

        .sidebar h4 {
            color: #38bdf8;
            margin-bottom: 20px;
        }

        .sidebar a {
            display: block;
            color: #cbd5f5;
            text-decoration: none;
            padding: 10px;
            border-radius: 8px;
            margin-bottom: 8px;
            transition: 0.3s;
        }

        .sidebar a:hover {
            background: #38bdf8;
            color: black;
        }

        .main {
            margin-left: 260px;
            padding: 20px;
        }

        .topbar {
            background: white;
            padding: 15px;
            border-radius: 10px;
            margin-bottom: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .btn-custom {
            margin-left: 10px;
        }
    </style>
</head>

<body>

    <!-- SIDEBAR -->
    <div class="sidebar">
        <h4>⚙ Admin</h4>

        <a href="/admin">📊 Dashboard</a>
        <a href="/admin/categories">📂 Categorías</a>

        <hr style="border-color: #475569;">

    </div>

    <!-- MAIN CONTENT -->
    <div class="main">

        <!-- TOPBAR -->
        <div class="topbar">
            <h5>Panel de Administración</h5>

            <div>
                <a href="/" class="btn btn-outline-dark btn-sm btn-custom">🏠 Inicio</a>
                <a href="/product" class="btn btn-primary btn-sm btn-custom">🛍 Tienda</a>
            </div>
        </div>

        <!-- CONTENIDO DINÁMICO -->
        @yield('content')

    </div>

</body>
</html>