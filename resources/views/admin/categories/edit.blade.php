@extends('admin.templates.main')

@section('title', 'Editar categoria ' . $category->name)

@section('titulo')
Editar categoria
@endsection

@section('content')

<a href="{{route('categories.index')}}" class="btn btn-info">Listado de categorias</a>
<hr>

{!! Form::open(['route'=>array('categories.update', $category->id), 'method'=>'PATCH']) !!}

<div class="form-group">
    {!!Form::label('name', 'Nombre') !!}
    {!!Form::text('name',$category->name,['class'=>'form-control','placeholder'=>'Nombre', 'required']) !!}
</div>

<div class="form-group">
    {!! Form::submit('Actualizar datos', ['class'=>'btn btn-primary'] ) !!}

</div>
{!!Form::close() !!}
@endsection
