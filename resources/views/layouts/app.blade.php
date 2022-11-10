<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Trivia Guatemala</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="/js/avatar.js"></script>
    

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/fontawesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/play.css') }}" rel="stylesheet">
    <link href="{{ asset('css/config.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

</head>
<body>
    <div id="app">
        <nav>
            <div class="menu">
                <div></div>
                @auth
                    <div class="menu-lateral">
                        <input id="menu-lateral" name="" type="checkbox" value="" />
                        <label for="menu-lateral"> ☰ </label>
                        <ul>
                            <li><a href="{{ url('/home') }}"><i class="fas fa-home"> </i>  <p>Inicio</p></a></li>
                            <li><a href="{{ url('/perfil') }}"><i class="fas fa-user"> </i>  <p>Mi perfil</p></a></li>
                            <li><a href="#"><i class="fas fa-search"> </i> <p>Buscar amigos</p></a></li>
                            <li><a href="{{ url('/users') }}"><i class="fas fa-chart-bar"> </i> <p>Ranking jugadores</p></a></li>
                            <li><a href="{{ url('/configuracion') }}"><i class="fas fa-cog"> </i> <p>Configuración</p></a></li>
                            <li>
                                <a class="" href="{{ route('logout') }}"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class="fas fa-sign-out-alt"></i><p>{{ __('Cerrar sesion') }}</p>
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </div>
                @else
                    <div></div>    
                @endauth    

                @auth    
                    <div class="menu-user">
                        <span>{{ Auth::user()->rol}}</span>
                        <a id="" data-user-id="{{ Auth::user()->id}}" class="{{Auth::user()->apellido}}" href="#" role="button" >
                            {{ Auth::user()->name .' ' .Auth::user()->apellido  }}
                            <input type="hidden" id="avatar-seleccionado" value="{{ Auth::user()->avatar }}">
                        </a>
                    </div>
                @else
                    <div></div>        
                @endauth

                <a class="menu-titulo" href="{{ url('/home') }}">
                    Trivia Guatemala 
                </a>
                
                <div class="menu-datos" >
                     @auth
                        <div class="menu-datos-1">
                            <p>Puntos</p>
                            <i class="fas fa-star"></i>
                            <p id="show-puntos">{{$punto ?? 0}}</p>
                        </div>                            
                        <div class="menu-datos-2">
                            <div class="menu-datos-2A">
                                <p>Nivel</p>   
                                <i class="fas fa-trophy"></i>
                                <p data-user-nivel="{{ $punteo[0]->nivel ?? 1}}" data-user-numero_pregunta="{{ $pregunta ?? 0}}"><span id="show-nivel">{{$aprobado ?? 0}}</span>/10</p>{{-- @if($pregunta ?? 0 <=10 ) {{ $pregunta ?? 0}} @else {{ ++$pregunta}} @endif --}}
                            </div> 
                            <div class="menu-datos-2B">                                
                                <div id="progressBar">
                                    <div data-user-aprobado="{{$aprobado ?? 0}}" id="progressBarFill"></div>     
                                </div>
                            </div>
                        </div>                            
                    @endauth
                    
                </div>
            </div>
        </nav>
        @auth
        <input type="hidden" id="last_loggin" value="{{ Auth::user()->last_loggin }}">
        @endauth
        <main class="">
            @yield('content')            
        </main>
    </div>
    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment.min.js"></script>
    <script src="/js/dash.js"></script>
    <script src="{{ asset('js/play.js') }}"></script>
    <script src="{{ asset('js/register.js') }}"></script>
    <script src="{{ asset('js/config.js') }}"></script>
    <script src="{{ asset('js/sweetalert.min.js') }}"></script>
    <script type="text/javascript">
        window.CSRF_TOKEN = '{{ csrf_token() }}';//validar token de acceso
        progresBar();
function progresBar(){
    const PREGUNTA_APROBADO = document.querySelector('div[data-user-aprobado]');
    let fill = (PREGUNTA_APROBADO.dataset.userAprobado*10)+'%';
    PROGRES_BAR_FILL.style.width=fill+" !important";
    console.log(PREGUNTA_APROBADO.dataset.userAprobado*10);
}
    </script>
</body>
</html>
