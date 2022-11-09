@extends('layouts.app')

@section('content')      
        <div class="container-configuracion">
        <h2>Edita tus configuraciones</h2>                   
            <form id="form-config" class="config-form" action="">
                <span id="rol" data-rol="{{ Auth::user()->rol}}" class="tipo-rol">{{ Auth::user()->rol}}</span>
                <!-- <input type="hidden" name="user-rol" value="{{ Auth::user()->rol}}"> -->
                <input type="hidden" name="user_id" value="{{ Auth::user()->id}}">
                <div class="group-form">                    
                    <div class="switch-button">                      
                        <input type="checkbox" name="switch_email" id="switch-email" class="switch-button__checkbox" @isset($switch_email) checked @endisset>
                        <label for="switch-email" class="switch-button__label"></label>
                    </div>
                    <span>Recibir notificaciones por correo.</span>
                </div>
                <div class="group-form">                    
                    <div class="switch-button">
                        <input type="checkbox" name="switch_music" id="switch-music" class="switch-button__checkbox" @isset($switch_music) checked @endisset>
                        <label for="switch-music" class="switch-button__label"></label>
                    </div>
                    <label for="">Quitar música de fondo.</label>
                </div>
                @if(Auth::user()->rol == "Administrador")
                    <div id="panel-config-admin" class="contenedor-panel-admin">
                    <div class="group-form">                    
                        <input type="number" name="cache_time" id="cache-time" class="button-cache-time" @isset($cache_time) $cache_time @endisset min="0" max="20" step="1" >
                        <label for="">Actualizar memória cache (20 días máx.).</label>
                    </div>
                    <div class="group-form-admin">
                        <label for="">Modificar API {{$url_cache}}</label>                    
                        <input type="url" name="url_cache" id="url-cache" class="box-cache" @isset($url_cache) $url_cache @endisset>                    
                    </div>
                    <div class="group-form-admin">
                    <label for="">Modificar grupo</label>                    
                        <input type="number" name="url_cache_equipo" id="url-cache-equipo" class="box-team" @isset($url_cache_equipo) value="$url_cache_equipo" @endisset>                    
                    </div>
                    </div> 
                @endif
                <div class="group-form"><input id="btn-send-config" class="btn-send-config" type="submit" value="Guardar"></div>                
            </form>
        </div>
@endsection