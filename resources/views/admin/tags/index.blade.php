@extends('admin.templates.main')

@section('title', 'Tags')

@section('titulo')
Tags
@endsection

@section('content')
<a href="{{route('tags.create')}}" class="btn btn-info">Registro de nuevo tag</a>
<hr>
{!! Form::open(['route'=>'tags.index', 'method'=>'GET', 'class'=>'navbar-form pull-right'])!!}
<div class="input-group">
    
    {!!Form::text('name', null, ['class'=> 'form-control', 'placeholder'=>'buscar tags', 'aria-describedby'=>'search'])
    !!}
    <span class="input-group-text" id="search"><i class="fas fa-search"></i></span>
</div>
{!!Form::close()!!}
<table class="table table-striped">
    <thead>
        <th>ID</th>
        <th>Nombre</th>
        <th>Accion</th>
    </thead>
    <tbody>
        @foreach($tags as $tag)
        <tr>
            <td>{{$tag ->id}}</td>
            <td>{{$tag ->name}}</td>
            <td><a href="{{route('tags.edit', $tag->id)}}" class="btn btn-primary "><i class="fas fa-user-edit"></i></a>
                <a href="{{route('tags.destroy', $tag->id)}}" class="btn btn-danger"
                    onclick="return confirm('¿Seguro que deseas eliminar esta categoria de manera permanente?')"><i
                        class="fas fa-user-times"></i></a></td>
        </tr>
        @endforeach
    </tbody>
</table>
<div class="d-flex justify-content-center">
    {!! $tags->render() !!}
</div>

@endsection
