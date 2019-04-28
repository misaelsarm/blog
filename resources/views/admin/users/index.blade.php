@extends('admin.templates.main')

@section('title', 'Lista de usuarios')

@section('titulo')
Listado de usuarios
@endsection

@section('content')
<a href="{{route('users.create')}}" class="btn btn-info">Registro de nuevo usuario</a>
<hr>

<table class="table table-striped">
    <thead>
        <th>ID</th>
        <th>Nombre</th>
        <th>Correo electronico</th>
        <th>Tipo de usuario</th>
        <th>Accion</th>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td> {{$user->email}} </td>
            <td>
                @if($user->type == "member")
                <span class="badge badge-primary">{{$user->type}}</span>
                @else
                <span class="badge badge-danger">{{$user->type}}</span>
                @endif
            </td>
            <td><a href="{{route('users.edit', $user->id)}}" class="btn btn-primary "><i
                        class="fas fa-user-edit"></i></a>
                <a href="{{route('users.destroy', $user->id)}}" class="btn btn-danger"
                    onclick="return confirm('¿Seguro que deseas eliminar este usuario de manera permanente?')"><i
                        class="fas fa-user-times"></i></a></td>
        </tr>
        @endforeach
    </tbody>
</table>
<div class="d-flex justify-content-center">
    {!! $users->render() !!}
</div>

@endsection
