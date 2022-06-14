@extends('layouts.correocontrasenia')


@section('titulo')
    RECUPERAR CONTRASEÑA
@endsection

@section('subtitulo')
    Recuperar Contraseña
@endsection

@section('mensaje.de.contraseña')
    Ingrese su correo electrónico para enviar un enlace para restablecer su contraseña.
@endsection

@section('mensaje.de.envio')
    <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
    </div>
@endsection

@section('formulario.contraseña')
    <form method="POST" action="{{ route('password.email') }}">

        @csrf

        <div class="user-box">

            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <label>Correo electrónico</label>
        </div>

        <button onclick="location.href='{{ route('login') }}'" class="btn btn-primary">
            {{ __('Regresar') }}
        </button> 

        <button type="submit" class="btn btn-primary">
            {{ __('Aceptar') }}
        </button> 

    </form>
    
@endsection



