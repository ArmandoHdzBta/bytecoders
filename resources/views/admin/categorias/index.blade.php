@extends('adminlte::page')


@section('title', 'Bytecoders')

@section('content_header')
    <h1>Lista de categorias</h1>
@stop

@section('content')
   @if(session('info'))
        <div class="alert alert-succes">
            <strong>{{session('info')}}</strong>
        </div>
   @endif
    <div class="card">
        <div class="card-header">
            <a class = "btn btn-secondary" href = "{{route('admin.categorias.create')}}">Agregar Categoria</a>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                    @foreach ($categorias as $categoria)
                        <tr>
                            <td>{{$categoria->id}}</td>
                            <td>{{$categoria->nombre}}</td>
                            <td Width="10PX"><a class="btn btn-primary btn-sm" href="{{route('admin.categorias.edit', $categoria)}}">EDITAR</a></td>
                            <td Width="10PX">
                                <form action="{{route('admin.categorias.destroy',$categoria)}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger btn-sm">ELIMINAR</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
@stop

