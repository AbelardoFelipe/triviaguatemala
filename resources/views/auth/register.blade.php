@extends('layouts.acceso')

@section('content')
<div id="form-login-register">
    <div class="contentform">
        <form method="POST" action="{{ route('register') }}" class="formregister" onsubmit="return validar()">
            <div class="container">
            <h1 class="titleregister"> <strong> Registro </strong> </h1>

            @csrf
            <div class="name">
                <i class="fas fa-user"></i>
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Nombres:" autofocus>
                <br><span id="alertname"></span>

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <div>{{ $message }}</div>
                    </span>
                @enderror
            </div>

            <div class="apellido">
                <i class="fas fa-user"></i>
                <input id="apellido" type="text" class="form-control @error('apellido') is-invalid @enderror" name="apellido" value="{{ old('apellido') }}" required autocomplete="apellido" placeholder="Apellidos:">
                <br><span id="alertapellido"></span>

                @error('apellido')
                    <span class="invalid-feedback" role="alert">
                        <div>{{ $message }}</div>
                    </span>
                @enderror
            </div>

            <div class="fecha_nacimiento">
                <i class="far fa-calendar-alt"></i>
                <input id="fecha_nacimiento" type="date" class="form-control @error('fecha_nacimiento') is-invalid @enderror" name="fecha_nacimiento" value="{{ old('fecha_nacimiento') }}" required autocomplete="fecha_nacimiento">
                <br><span id="alertdate"></span>

                @error('fecha_nacimiento')
                    <span class="invalid-feedback" role="alert">
                        <div>{{ $message }}</div>
                    </span>
                @enderror
            </div>

            <div class="email">
                <i class="fas fa-envelope"></i>
                <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Correo electr??nico:">
                <br><span id="alertemail"></span>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <div>{{ $message }}</div>
                    </span>
                @enderror
            </div>

            <div class="password">
                <i class="fas fa-lock"></i>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Contrase??a">
                <br><span id="alertpassword"></span>

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <div>{{ $message }}</div>
                    </span>
                @enderror
            </div>

            <div class="password">
                <i class="fas fa-lock"></i>
                <input id="password" type="password" class="confirm form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirmar contrase??a">
            </div>

            <div class="name">
                <i class="fa fa-users"></i>
                <select class="roles" id="rol" onchange="ShowSelected()" name='rol' required>
                    <option selected value="#" disabled>Elija el rol</option>
                    <option value="Jugador" name='rol'>Jugador</option>
                    <option value="Administrador" name='rol'>Administrador</option>
                </select>
            </div>

            <div class="file">
                <p id="text">Elige un avatar</p>
            </div>
            
            <div class="buttonsregister1">
                <div>
                    @if (Route::has('login'))
                        <button class="buttonlogin">
                            <a class="" href="{{ route('login') }}">{{ __('Iniciar sesi??n') }}</a>
                        </button>
                    @endif
                </div>

                <div>
                    <input type="submit" class="buttonregister" value="{{ __('Registrarme') }}">
                </div>
            </div>
            
            <div id="avatar1">
                <input id="avatar" type="text" class="form-control @error('avatar') is-invalid @enderror" name="avatar" value="{{ old('avatar') }}" autocomplete="avatar">
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
            <img class="img2" src="/images/avatars/Vaquerito/Idle__1.png" alt="Vaquerito" width="60px" height="66px">
            <a class="not-active" id="miLink2" href="/images/avatars/Vaquerito/Idle__1.png"></a>
            <input type="radio" id="check2" name="radio" onclick="link2()">
            <label for="check2"></label>
        </div>
        <div class="option">
            <img class="img3" src="/images/avatars/Vaquerita/Idle__1.png" alt="Vaquerita" width="60px" height="66px">
            <a class="not-active" id="miLink3" href="/images/avatars/Vaquerita/Idle__1.png"></a>
            <input type="radio" id="check3" name="radio" onclick="link3()">
            <label for="check3"></label>
        </div>
        <div class="option">
            <img class="img4" src="/images/avatars/Rosita/Idle__1.png" alt="Rosita" width="60px" height="66px">
            <a class="not-active" id="miLink4" href="/images/avatars/Rosita/Idle__1.png"></a>
            <input type="radio" id="check4" name="radio" onclick="link4()">
            <label for="check4"></label>
        </div>

    </div>
</div>
@endsection
