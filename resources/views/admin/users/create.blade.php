@extends('admin.templates.main')
@section('title', 'Registrar nuevo usuario')

@section('titulo')
    Registrar un nuevo usuario
@endsection

@section('content')

<a href="{{route('users.index')}}" class="btn btn-info">Listado de usuarios</a>
                   
<hr>

{!! Form::open(['route'=>'users.store', 'method'=>'POST']) !!}

<div class="form-group">
    {!!Form::label('name', 'Nombre') !!}
    {!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Nombre', 'required']) !!}
</div>

<div class="form-group">
    {!!Form::label('email', 'Email') !!}
    {!!Form::email('email',null,['class'=>'form-control','placeholder'=>'example@example.com', 'required'])
    !!}
</div>

<div class="form-group">
    {!!Form::label('password', 'Password') !!}
    {!!Form::password('password',['class'=>'form-control','placeholder'=>'************', 'required']) !!}
</div>

<div class="form-group">
    {!!Form::label('type', 'tipo')!!}
    {!!Form::select('type', ['member' => 'Miembro',
    'admin'=>'Administrador'], null, ['class'=>'form-control','placeholder' =>'Selecciona una opcion', 'required' ]) !!}
</div>

<div class="form-group">
    {!! Form::submit('Registrar', ['class'=>'btn btn-primary'] ) !!}

</div>
{!!Form::close() !!}

@endsection
