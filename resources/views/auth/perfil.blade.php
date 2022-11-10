@extends('layouts.app')

@section('content')
<div id="form-login-register">
    <div class="contentform">
        <form method="POST" action="perfil/{{Auth::user()->id}}" class="formregister" onsubmit="return validar()">
            <div class="container">
            <h1 class="titleregister"> <strong> Perfil </strong> </h1>

            @csrf
            <div class="name">
                <i class="fas fa-user"></i>
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ Auth::user()->name }}" required autocomplete="name" autofocus placeholder="Nombres:">
                <br><span id="alertname"></span>

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <div>{{ $message }}</div>
                    </span>
                @enderror
            </div>

            <div class="apellido">
                <i class="fas fa-user"></i>
                <input id="apellido" type="text" class="form-control @error('apellido') is-invalid @enderror" name="apellido" value="{{ Auth::user()->apellido }}" required autocomplete="apellido" placeholder="Apellidos:">
                <br><span id="alertapellido"></span>

                @error('apellido')
                    <span class="invalid-feedback" role="alert">
                        <div>{{ $message }}</div>
                    </span>
                @enderror
            </div>

            <div class="fecha_nacimiento">
                <i class="far fa-calendar-alt"></i>
                <input id="fecha_nacimiento" type="date" class="form-control @error('fecha_nacimiento') is-invalid @enderror" name="fecha_nacimiento" value="{{ Auth::user()->fecha_nacimiento }}" required autocomplete="fecha_nacimiento">
                <br><span id="alertdate"></span>

                @error('fecha_nacimiento')
                    <span class="invalid-feedback" role="alert">
                        <div>{{ $message }}</div>
                    </span>
                @enderror
            </div>

            <div class="email">
                <i class="fas fa-envelope"></i>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ Auth::user()->email }}" required autocomplete="email" disabled placeholder="Correo electrónico:">
                <br><span id="alertemail"></span>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <div>{{ $message }}</div>
                    </span>
                @enderror
            </div>

            <div class="password">
                <i class="fas fa-lock"></i>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Contraseña:">
                <br><span id="alertpassword"></span>

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <div>{{ $message }}</div>
                    </span>
                @enderror
            </div>

            <div class="name">
                <i class="fa fa-users"></i>
                <select class="roles" id="rol" onchange="ShowSelected()" name='rol' required value="{{ Auth::user()->rol }}">
                    <option selected value="#" disabled>Elija el rol</option>
                    <option value="Jugador" name='rol' required>Jugador</option>
                    <option value="Administrador" name='rol' required>Administrador</option>
                </select>
            </div>

                <div class="file">
                    <p id="text">Elige un avatar</p>
                </div>

            <div class="buttonsregister1">
                <div>
                    @if (Route::has('login'))
                        <button class="buttoncancelar">
                            <a class="cancelar" href="{{ route('home') }}">{{ __('Cancelar') }}</a>
                        </button>
                    @endif
                </div>

                <div>
                    <button type="submit" class="buttonregister"> {{ __('Guardar') }} </button>
                </div>
            </div>

            <div id="avatar1">
                <input id="avatar" type="text" class="form-control @error('avatar') is-invalid @enderror" name="avatar" value="{{ Auth::user()->avatar }}" autocomplete="avatar" required>
                @error('avatar')
                    <span class="invalid-feedback" role="alert">
                        <div>{{ $message }}</div>
                    </span>
                @enderror
            </div>
        </form>
    </div>
    <div class="avatars">

        <div class="option">
            <img class="img1" src="/images/avatars/boy/Idle1.png" alt="boy" width="60px" height="66px">
            <a class="not-active" id="miLink1" href="/images/avatars/boy/Idle__1.png"></a>
            <input type="radio" id="check1" name="radio" onclick="link1()">
            <label for="check1"></label>
        </div>
        <div class="option">
            <img class="img2" src="/images/avatars/Vaquerito/Idle__1.png" alt="boy" width="60px" height="66px">
            <a class="not-active" id="miLink2" href="/images/avatars/Vaquerito/Idle__1.png"></a>
            <input type="radio" id="check2" name="radio" onclick="link2()">
            <label for="check2"></label>
        </div>
        <div class="option">
            <img class="img3" src="/images/avatars/Vaquerita/Idle__1.png" alt="boy" width="60px" height="66px">
            <a class="not-active" id="miLink3" href="/images/avatars/Vaquerita/Idle__1.png"></a>
            <input type="radio" id="check3" name="radio" onclick="link3()">
            <label for="check3"></label>
        </div>
        <div class="option">
            <img class="img4" src="/images/avatars/Rosita/Idle__1.png" alt="boy" width="60px" height="66px">
            <a class="not-active" id="miLink4" href="/images/avatars/Rosita/Idle__1.png"></a>
            <input type="radio" id="check4" name="radio" onclick="link4()">
            <label for="check4"></label>
        </div>

    </div>
</div>
@endsection
