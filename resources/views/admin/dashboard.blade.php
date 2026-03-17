@extends('admin.layout')

@section('content')

<h2 class="mb-4">📊 Dashboard</h2>

<div class="row">

    <div class="col-md-4">
        <div class="card p-3">
            <h5>Total Categorías</h5>
            <h3>{{ \App\Models\Category::count() }}</h3>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card p-3">
            <h5>Total Productos</h5>
            <h3>{{ \App\Models\Product::count() }}</h3>
        </div>
    </div>

</div>

@endsection