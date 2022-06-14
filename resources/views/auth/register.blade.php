@extends('layouts.app')

@section('titulo')
    REGISTRO
@endsection

@section('registro')
<form class="login100-form validate-form" method="POST" action="{{ route('register') }}">
    @csrf
    <span class="login100-form-title p-b-49">
        Registrarse
    </span>

    <div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
            <span class="label-input100">Nombre</span>
            <input class="input100 @error('name') is-invalid @enderror" value="{{ old('name') }}" type="text" placeholder="Name" id="name" name="name" required autocomplete="name" autofocus>
            <span class="focus-input100" data-symbol="&#xf206;"></span>

            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
    </div>

    <div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
        <span class="label-input100">Correo Electronico</span>
        <input class="input100 @error('email') is-invalid @enderror" type="text" placeholder="Email" id="email" name="email" value="{{ old('email') }}" required autocomplete="email">
        <span class="focus-input100" data-symbol="&#xf206;"></span>

        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
</div>

    <div class="wrap-input100 validate-input" data-validate="Password is required">
            <span class="label-input100">Contraseña</span>
            <input class="input100 @error('password') is-invalid @enderror" type="password" placeholder="Password" id="password" name="password" required autocomplete="new-password">
            <span class="focus-input100" data-symbol="&#xf190;"></span>

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
             @enderror
    
    </div>

    <div class="wrap-input100 validate-input" data-validate="Password is required">
        <span class="label-input100">Contraseña</span>
        <input class="input100" type="password" placeholder="Password_confirmacion" name="password_confirmation" id="password-confirm" required autocomplete="new-password">
        <span class="focus-input100" data-symbol="&#xf190;"></span>
    </div>
    
    <br>
    <br>
    
    <div class="container-login100-form-btn">
        <div class="wrap-login100-form-btn">
            <div class="login100-form-bgbtn"></div>
            <button class="login100-form-btn">
                Registrar
            </button>
        </div>
    </div>
</form>

@endsection
