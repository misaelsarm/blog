@extends('admin.templates.main')
@section('title', 'Lista de categorias')

@section('titulo')
Lista de categorias
@endsection

@section('content')
<a href="{{route('categories.create')}}" class="btn btn-info">Registro de nueva categoria</a>
<hr>
<table class="table table-striped">
    <thead>
        <th>ID</th>
        <th>Nombre</th>
        <th>Accion</th>
    </thead>
    <tbody>
        @foreach($categories as $category)
        <tr>
            <td>{{$category ->id}}</td>
            <td>{{$category ->name}}</td>
            <td><a href="{{route('categories.edit', $category->id)}}" class="btn btn-primary "><i class="fas fa-user-edit"></i></a>
                <a href="{{route('categories.destroy', $category->id)}}" class="btn btn-danger"
                    onclick="return confirm('¿Seguro que deseas eliminar esta categoria de manera permanente?')"><i
                        class="fas fa-user-times"></i></a></td>
        </tr>
        @endforeach
    </tbody>
</table>
<div class="d-flex justify-content-center">
    {!! $categories->render() !!}
</div>

@endsection
