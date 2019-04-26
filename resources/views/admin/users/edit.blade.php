@extends('admin.templates.main')

@section('title', 'Editar usuario ' . $user->name)

@section('formulario')


<div class="container">
    <div class="card sombra">
        <div class="card-header">
            Editar usuario
        </div>
        <div class="card-body">

            <a href="{{route('users.index')}}" class="btn btn-info">Listado de usuarios</a>
            <hr>



            {!! Form::open(['route'=>array('users.update', $user->id), 'method'=>'PATCH']) !!}

            <div class="form-group">
                {!!Form::label('name', 'Nombre') !!}
                {!!Form::text('name',$user->name,['class'=>'form-control','placeholder'=>'Nombre', 'required']) !!}
            </div>

            <div class="form-group">
                {!!Form::label('email', 'Email') !!}
                {!!Form::email('email',$user->email,['class'=>'form-control','placeholder'=>'example@example.com',
                'required'])
                !!}
            </div>



            <div class="form-group">
                {!!Form::label('type', 'tipo')!!}
                {!!Form::select('type', ['' => 'Selecciona una opcion', 'member' => 'Miembro',
                'admin'=>'Administrador'], $user->type, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Actualizar datos', ['class'=>'btn btn-primary'] ) !!}

            </div>
        </div>
    </div>
</div>

{!!Form::close() !!}

@endsection
