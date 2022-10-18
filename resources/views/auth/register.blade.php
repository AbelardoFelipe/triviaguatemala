@extends('layouts.app')

@section('content')

    <div class="contentform">
        <form method="POST" action="{{ route('register') }}" class="formregister">
            <div class="container">
            <h1 class="titleregister"> <strong> Registro </strong> </h1>

            @csrf
            <div class="name">
                <i class="fa-solid fa-user"></i>
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nombres:">

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <div>{{ $message }}</div>
                    </span>
                @enderror
            </div>

            <div class="apellido">
                <i class="fa-solid fa-user"></i>
                <input id="apellido" type="text" class="form-control @error('apellido') is-invalid @enderror" name="apellido" value="{{ old('apellido') }}" required autocomplete="apellido" placeholder="Apellidos:">

                @error('apellido')
                    <span class="invalid-feedback" role="alert">
                        <div>{{ $message }}</div>
                    </span>
                @enderror
            </div>

            <div class="fecha_nacimiento">
                <i class="fa-solid fa-calendar"></i>
                <input id="fecha_nacimiento" type="date" class="form-control @error('fecha_nacimiento') is-invalid @enderror" name="fecha_nacimiento" value="{{ old('fecha_nacimiento') }}" required autocomplete="fecha_nacimiento">

                @error('fecha_nacimiento')
                    <span class="invalid-feedback" role="alert">
                        <div>{{ $message }}</div>
                    </span>
                @enderror
            </div>

            <div class="email">
                <i class="fa-solid fa-envelope"></i>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Correo electrónico:">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <div>{{ $message }}</div>
                    </span>
                @enderror
            </div>

            <div class="password">
                <i class="fa-solid fa-lock"></i>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Contraseña">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <div>{{ $message }}</div>
                    </span>
                @enderror
            </div>

            <div class="password">
                <i class="fa-solid fa-lock"></i>
                <input id="password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirmar contraseña">
            </div>

                <div class="file">
                    <p id="text">Seleccionar avatar</p>
                    <input id="avatar" type="file" class="form-control @error('avatar') is-invalid @enderror" name="avatar" value="{{ old('avatar') }}" required autocomplete="avatar">
                </div>

            <div class="buttonsregister">
                <div>
                    @if (Route::has('login'))
                        <button class="buttonlogin">
                            <a class="" href="{{ route('login') }}">{{ __('Iniciar sesión') }}</a>
                        </button>
                    @endif
                </div>

                <div>
                    <button type="submit" class="buttonregister"> {{ __('Registrarme') }} </button>
                </div>
            </div>
        </form>
        </div>
@endsection
