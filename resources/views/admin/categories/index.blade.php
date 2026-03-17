@extends('admin.layout')

@section('content')

<h2>Categorías</h2>

<a href="{{ route('categories.create') }}" class="btn btn-primary mb-3">
    + Nueva categoría
</a>

<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Acciones</th>
    </tr>

    @foreach($categories as $cat)
    <tr>
        <td>{{ $cat->id }}</td>
        <td>{{ $cat->name }}</td>
        <td>

            <a href="{{ route('categories.edit', $cat->id) }}" class="btn btn-warning btn-sm">
                Editar
            </a>

            <form action="{{ route('categories.destroy', $cat->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger btn-sm">Eliminar</button>
            </form>

        </td>
    </tr>
    @endforeach

</table>

@endsection