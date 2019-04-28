<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','Default') | Admin</title>
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.css')}}">
</head>

<body class="fondo">
    @include('admin.templates.partials.nav')
    <section>
        <div class="container">
            <div class="card sombra">
                <div class="card-header">
                    @yield('titulo')
                </div>
                <div class="card-body">
                    @include('flash::message')
                    @include('admin.templates.partials.errors')
                    @yield('content')
                </div>
            </div>
        </div>
        <div>
            @yield('jumbotron')
        </div>
    </section>

    <script src="{{asset('plugins/jquery/js/jquery-3.4.0.js')}}"></script>

    <script src="{{asset('plugins/bootstrap/js/bootstrap.js')}}"></script>

</body>

</html>
