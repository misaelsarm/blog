@extends('admin.templates.main')

@section('title', 'Nuevo Articulo')

@section('titulo')
<h2>Nuevo Articulo</h2>
@endsection

@section('content')

<a href="{{route('categories.index')}}" class="btn btn-info">Listado de categorias</a>

<hr>
{!! Form::open(['route'=>'articles.store', 'method'=>'POST', 'files'=>true]) !!}

<div class="form-group">
    {!!Form::label('title', 'Titulo') !!}
    {!!Form::text('title',null,['class'=>'form-control','placeholder'=>'Titulo del articulo', 'required']) !!}
</div>


<div class="form-group">
    {!!Form::label('category_id', 'Categoria')!!}
    {!!Form::select('category_id', $categories, null, ['class'=>'form-control select-category', 'required' ]) !!}
</div>

<div class="form-group">
    {!!Form::label('content', 'Contenido') !!}
    {!!Form::textarea('content',null,['class'=>'form-control textarea-content','placeholder'=>'Contenido del articulo', 'required']) !!}
</div>

<div class="form-group">
    {!!Form::label('tags', 'Tags')!!}
    {!!Form::select('tags[]', $tags, null, ['class'=>'form-control select-tag','multiple', 'required' ]) !!}
</div>

<div class="form-group">
    {!!Form::label('image', 'Imagen')!!}
    {!!Form::file('image') !!}
</div>


<div class="form-group">
    {!! Form::submit('Publicar', ['class'=>'btn btn-primary'] ) !!}

</div>

{!!Form::close() !!}


@endsection

@section('js')

<script>
    $(".select-tag").chosen({
        disable_search_threshold: 10,
        no_results_text: 'Ups, no logramos encontrar ningun tag llamado: ',
        placeholder_text_multiple: 'Selecciona un maximo de 3 tags'
    });

    $(".select-category").chosen({
       
        placeholder_text_single: 'Selecciona una categoria',
        no_results_text: 'Ups, no logramos encontrar ninguna categoria llamada: '
        
    });

    $(".textarea-content").trumbowyg();

</script>

@endsection
