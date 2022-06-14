@extends('layouts.correocontrasenia')

@section('titulo')
    RECUPERAR CONTRASEÑA
@endsection

@section('subtitulo')
    Ingresa los datos para recuperar contraseña
@endsection

@section('mensaje.de.contraseña')
    Ingresa los datos para recuperar tu contraseña
@endsection



@section('formulario.contraseña')

    <form method="POST" action="{{ route('password.update') }}">

        @csrf

        <input type="hidden" name="token" value="{{ $token }}">

        <div class="user-box">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
            <label>Correo electrónico</label>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="user-box">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
            <label>Contraseña</label>
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="user-box">
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
            <label>Confirmar contraseña</label>
        </div>

        <button type="submit" class="btn btn-primary">
            {{ __('Recuperar Contraseña') }}
        </button> 

    </form>
@endsection