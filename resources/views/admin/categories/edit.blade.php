@extends('admin.layout')

@section('content')

<h2>Editar categoría</h2>

<form action="{{ route('categories.update', $category->id) }}" method="POST">
    @csrf
    @method('PUT')

    <input type="text" name="name" value="{{ $category->name }}" class="form-control mb-3">

    <button class="btn btn-primary">Actualizar</button>
</form>

@endsection