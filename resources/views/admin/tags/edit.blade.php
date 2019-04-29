@extends('admin.templates.main')

@section('title', 'Editar tag ' . $tag->name)

@section('titulo')
Editar tag
@endsection

@section('content')

<a href="{{route('tags.index')}}" class="btn btn-info">Listado de tags</a>
<hr>

{!! Form::open(['route'=>array('tags.update', $tag->id), 'method'=>'PATCH']) !!}

<div class="form-group">
    {!!Form::label('name', 'Nombre') !!}
    {!!Form::text('name',$tag->name,['class'=>'form-control','placeholder'=>'Nombre', 'required']) !!}
</div>

<div class="form-group">
    {!! Form::submit('Actualizar datos', ['class'=>'btn btn-primary'] ) !!}

</div>
{!!Form::close() !!}
@endsection
