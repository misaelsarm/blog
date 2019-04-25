@extends('admin.templates.main')

@section('title', 'Lista de usuarios')

@section('formulario')
<div class="container">

    <div class="card">
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
                        <td><a href="" class="btn btn-danger"></a><a href="" class="btn btn-primary"></a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>


            {!! $users->render() !!}
        </div>
    </div>
</div>
@endsection
