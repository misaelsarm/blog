@extends('admin.templates.main')
@extends('admin.templates.partials.nav')
@section('title', 'Registrar nuevo usuario')

@section('content')
<div class="container">
    <div class="card sombra">
        <div class="card-header">
            Registrar un nuevo usuario
        </div>
        <div class="card-body">

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
                {!!Form::select('type', ['' => 'Selecciona una opcion', 'member' => 'Miembro',
                'admin'=>'Administrador'], null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Registrar', ['class'=>'btn btn-primary'] ) !!}

            </div>
            {!!Form::close() !!}
        </div>
    </div>
</div>

@endsection
