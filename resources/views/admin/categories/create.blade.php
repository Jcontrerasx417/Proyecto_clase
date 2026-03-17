@extends('admin.layout')

@section('content')

<h2>Crear categoría</h2>

<form action="{{ route('categories.store') }}" method="POST">
    @csrf

    <input type="text" name="name" class="form-control mb-3" placeholder="Nombre de la categoría">

    <button class="btn btn-success">Guardar</button>
</form>

@endsection