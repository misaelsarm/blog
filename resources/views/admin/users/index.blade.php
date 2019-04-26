@extends('admin.templates.main')
@extends('admin.templates.partials.nav')
@section('title', 'Lista de usuarios')

@section('content')
<div class="container">
    <div class="card sombra">
        @include('flash::message')
        <div class="card-header">
            Listado de usuarios
        </div>
        <div class="card-body">
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
                        <td><a href="{{route('users.edit', $user->id)}}" class="btn btn-primary " ><i class="fas fa-user-edit" ></i></a>
                            <a href="{{route('users.destroy', $user->id)}}" class="btn btn-danger" onclick="return confirm('¿Seguro que deseas eliminar este usuario de manera permanente?')"><i class="fas fa-user-times"></i></a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {!! $users->render() !!}
        </div>
    </div>
</div>
@endsection
