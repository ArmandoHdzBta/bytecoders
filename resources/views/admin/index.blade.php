@extends('adminlte::page')


@section('title', 'Bytecoders')

@section('content_header')
    <h1>Bytecoders</h1>
@stop

@section('content')
    <p>Welcome to this beautiful admin panel.</p>
    @if ('success')
        <div class="alert alert-success">
            <strong>{{session('success')}}</strong>
        </div>
    @endif
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
