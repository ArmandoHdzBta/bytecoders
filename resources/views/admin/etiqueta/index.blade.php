@extends('adminlte::page')


@section('title', 'Bytecoders')

@section('content_header')
    <a class="btn btn-secondary btn-sm float-right" href="{{route('admin.etiquetas.crear')}}">Crear</a>
    <h1>Etiquetas</h1>
@stop

@section('content')
    @if(session('mensaje'))
        <div class="alert alert-succes">
            <strong>{{session('mensaje')}}</strong>
        </div>
    @elseif(session('error'))
        <div class="alert alert-danger">
            <strong>{{session('error')}}</strong>
        </div>
    @endif
    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($etiquetas as $tag)
                        <tr>
                            <td>{{$tag->id}}</td>
                            <td>{{$tag->nombre}}</td>
                            <td width="10px">
                                <a class="btn btn-primary btn-sm" href="{{route('admin.etiquetas.editar', $tag)}}">Editar</a>
                            </td>
                            <td width="10px">
                                <form action="{{route('admin.etiquetas.eliminar', $tag->id)}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger btn-sm " type="submit" >Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
