@extends('layouts.acceso')

@section('content')
    <div id="form-login-register">
    <div class="contentform">
        <form method="POST" action="{{ route('login') }}" class="formulario" id="formulario">
            <div class="container">
                @csrf

                <h1 class="titleregister"> <strong> Login </strong> </h1>

                    <div class="email">
                        <i class="fas fa-user"></i>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Correo electrónico:">
                        <br><span id="alertemail"></span>
                    </div>

                    <div class="password">
                        <i class="fas fa-lock"></i>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Contraseña">
                        <br><span id="alertpassword"></span>
                    </div>

                    @error('email')
                            <span class="invalid-feedback" role="alert">
                                <div class="message">{{ $message }}</div>
                            </span>
                    @enderror

                <div class="buttonsregister">
                    <div class="col-md-8 offset-md-4">
                        <button type="submit" class="buttonlogin">
                            {{ __('Iniciar sesión') }}
                        </button>
                    </div>
                    <div>
                        @if (Route::has('register'))
                        <button class="buttonregister">
                            <a href="{{ route('register') }}">{{ __('Registrarme') }}</a>
                        </button>
                        @endif
                    </div>
                </div>

                <div class="forgotpassword">
                    @if (Route::has('password.request'))
                            <a class="forgot" href="{{ route('password.request') }}">
                                {{ __('¿Haz olvidado tu contraseña?') }}
                            </a>                  
                    @endif
                </div>  

            </div>
        </form>

    </div>
    </div>
@endsection
