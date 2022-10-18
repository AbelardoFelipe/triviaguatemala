<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Trivia Guatemala</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/fontawesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/play.css') }}" rel="stylesheet">
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
                            <li><a href="#"><i class="fas fa-home"> </i>  <p>Inicio</p></a></li>
                            <li><a href="#"><i class="fas fa-user"> </i>  <p>Mi perfil</p></a></li>
                            <li><a href="#"><i class="fas fa-search"> </i> <p>Buscar amigos</p></a></li>
                            <li><a href="#"><i class="fas fa-chart-bar"> </i> <p>Ranking jugadores</p></a></li>
                            <li><a href="#"><i class="fas fa-cog"> </i> <p>Configuraciones</p></a></li>
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
                        <a id="" class="" href="#" role="button" >
                            {{ Auth::user()->name .' ' .Auth::user()->apellido  }}
                        </a>
                    </div>
                @else
                    <div></div>        
                @endauth

                <a class="menu-titulo" href="{{ url('/') }}">
                    Trivia Guatemala
                </a>
                
                @auth
                    <div class="menu-datos" >
                    
                        
                        <ul>
                            <p>Nivel</p>                
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
                        <a id="" class="" href="#" role="button" >
                            {{ Auth::user()->name .' ' .Auth::user()->apellido  }}
                        </a>
                    </div>
                @else
                    <div></div>        
                @endauth

                <a class="menu-titulo" href="{{ url('/') }}">
                    Trivia Guatemala
                </a>
                

                <div class="menu-datos" >
                     @auth
                        <div class="menu-datos-1">
                            <p>Puntos</p>
                            <i class="fas fa-star"></i>
                            <p>10</p>
                        </div>                            
                        <div class="menu-datos-2">
                            <div class="menu-datos-2A">
                                <p>Nivel</p>   
                                <i class="fas fa-trophy"></i>
                                <p>1/10</p>
                            </div> 
                            <div class="menu-datos-2B">
                                <div id="progressBar">
                                    <div id="progressBarFill"></div>     
                                </div>
                            </div>
                        </div>                            
                    @endauth
                    
                </div>

            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <!-- Scripts -->
    <script src="{{ asset('js/play.js') }}" defer></script>
</body>
</html>
