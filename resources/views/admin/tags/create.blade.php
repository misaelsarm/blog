@extends('admin.templates.main')
@section('title', 'Registrar nuevo tag')

@section('titulo')
    Registrar un nuevo tag
@endsection

@section('content')
<a href="{{route('tags.index')}}" class="btn btn-info">Lista de tags</a>
<hr>

{!! Form::open(['route'=>'tags.store', 'method'=>'POST']) !!}

<div class="form-group">
    {!!Form::label('name', 'Nombre') !!}
    {!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Nombre', 'required']) !!}
</div>


<div class="form-group">
    {!! Form::submit('Registrar', ['class'=>'btn btn-primary'] ) !!}

</div>

{!!Form::close() !!}


@endsection