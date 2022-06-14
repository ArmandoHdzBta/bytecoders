@extends('adminlte::page')


@section('title', 'Bytecoders')

@section('content_header')
    <h1>Editar etiqueta</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::model($etiqueta, ['route' => ['admin.etiquetas.actualizar', $etiqueta->id ]]) !!}
                <input name="id" type="hidden" value="{{$etiqueta->id}}">
                @include('admin.etiqueta.partials.forms')
                {!! Form::submit('Editar etiqueta', ['class'=> 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
