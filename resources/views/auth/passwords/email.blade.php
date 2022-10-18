@extends('layouts.app')

@section('content')
<div id="form-login-register">
    <div class="contentform">
        <form method="POST" action="{{ route('password.email') }}">
            <div class="container">
                <h1 class="titleregister"> <strong> Recuperar contraseña </strong> </h1>

                @csrf

                <div class="email">
                    <i class="fas fa-envelope"></i>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Correo electrónico:">
                </div>

                <div class="buttonsreset">
                    <button type="submit" class="buttonreset">
                        {{ __('Recuperar contraseña') }}
                    </button>
                </div>

                @error('email')
            <span class="invalid-feedback" role="alert">
                <div id="success">{{ $message }}</div>
            </span>
        @enderror
    
        @if (session('status'))
            <div id="success" class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        
            </div>
        </form>
    </div>
</div>
@endsection
