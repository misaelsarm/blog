@extends('admin.templates.main')

@section('title', 'Articulos')

@section('titulo')
Articulos
@endsection

@section('content')
<a href="{{route('articles.create')}}" class="btn btn-info">Escribir nuevo articulo</a>
<hr>
{!! Form::open(['route'=>'articles.index', 'method'=>'GET', 'class'=>'navbar-form pull-right'])!!}
<div class="input-group">

    {!!Form::text('title', null, ['class'=> 'form-control', 'placeholder'=>'Buscar articulos',
    'aria-describedby'=>'search'])
    !!}
    <span class="input-group-text" id="search"><i class="fas fa-search"></i></span>
</div>
{!!Form::close()!!}
<table class="table table-striped">
    <thead>
        <th>ID</th>
        <th>Titulo</th>
        <th>Categoria</th>
        <th>User</th>
        <th>Accion</th>
    </thead>
    <tbody>
        @foreach($articles as $article)
        <tr>
            <td>{{$article->id}}</td>
            <td>{{$article->title}}</td>
            <td> {{$article->category->name}} </td>
            <td> {{$article->user->name}} </td>

            <td><a href="{{route('articles.edit', $article->id)}}" class="btn btn-primary "><i
                        class="fas fa-user-edit"></i></a>
                <a href="{{route('articles.destroy', $article->id)}}" class="btn btn-danger"
                    onclick="return confirm('¿Seguro que deseas eliminar este usuario de manera permanente?')"><i
                        class="fas fa-user-times"></i></a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<div class="d-flex justify-content-center">
    {!! $articles->render() !!}
</div>
@endsection
