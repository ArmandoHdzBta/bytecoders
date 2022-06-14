@extends('layouts.app')

@section('titulo')
    INICIO DE SESION
@endsection

@section('inicio_sesion')
    <form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
        @csrf
        <span class="login100-form-title p-b-49">
            Inicio de Sesión
        </span>

        <div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
                <span class="label-input100">Correo Electrónico</span>
                <input id="email" type="email" class="input100 @error('email') is-invalid @enderror "  name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                <span class="focus-input100" data-symbol="&#xf206;"></span>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
        </div>

        <div class="wrap-input100 validate-input" data-validate="Password is required">
                <span class="label-input100">Contraseña</span>
                <input id="password" type="password" class="input100 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                <span class="focus-input100" data-symbol="&#xf190;"></span>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
        </div>
        
        <div class="text-right p-t-8 p-b-31">

            @if (Route::has('password.request'))
            <a class="btn btn-link" href="{{ route('password.request') }}">
                {{ __(' Olvidaste tu Contraseña?') }}
            </a>
            @endif
        </div>
        
        <div class="container-login100-form-btn">
            <div class="wrap-login100-form-btn">
                <div class="login100-form-bgbtn"></div>
                <button class="login100-form-btn">
                    Iniciar Sesión
                </button>
            </div>
        </div>

        <div class="txt1 text-center p-t-54 p-b-20">
            <span>
                Iniciar Sesión con:
            </span>
        </div>

        {{-- <div class="flex-c-m">
            <a href="{{route('login_facebook')}}" class="login100-social-item bg1">
                <i class="fa fa-facebook"></i>
            </a>

            <a href="#" class="login100-social-item bg2">
                <i class="fa fa-instagram"></i>
            </a>

            <a href="#" class="login100-social-item bg3">
                <i class="fa fa-google"></i>
            </a>
        </div> --}}

        <div class="flex-col-c p-t-155">
            <span class="txt1 p-b-17">
                No tienes Cuenta?
            </span>
            <div class="container-login100-form-btn">
                <div class="wrap-login100-form-btn">
                    <div class="login100-form-bgbtn"></div>
                    <button class="login100-form-btn" onclick="location.href='{{ route('register') }}'">
                        Registrarse
                    </button>
                </div>
            </div>
        </div>
    </form>
@endsection