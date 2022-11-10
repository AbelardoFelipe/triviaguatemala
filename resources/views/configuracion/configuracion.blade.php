@extends('layouts.app')

@section('content')      
        <div class="container-configuracion">
        <h2>Edita tus configuraciones</h2>                   
            <form id="form-config" class="config-form" action="">
                <span id="rol" data-rol="{{ Auth::user()->rol}}" class="tipo-rol">{{ Auth::user()->rol}}</span>                
                <input type="hidden" name="user_id" value="{{ Auth::user()->id}}">
                <div class="group-form">                    
                    <div class="switch-button">                      
                        <input type="checkbox" name="switch_email" id="switch-email" class="switch-button__checkbox" @isset($configsUser[0]->notificacion_email) checked @endisset>
                        <label for="switch-email" class="switch-button__label"></label>
                    </div>
                    <span>Recibir notificaciones por correo</span>
                </div>
                <div class="group-form">                    
                    <div class="switch-button">
                        <input type="checkbox" name="switch_music" id="switch-music" class="switch-button__checkbox" @isset($configsUser[0]->musica_fondo) checked @endisset>
                        <label for="switch-music" class="switch-button__label"></label>
                    </div>
                    <label for="">Quitar música de fondo</label>
                </div>
                @if(Auth::user()->rol == "Administrador")
                    <div id="panel-config-admin" class="contenedor-panel-admin">
                    <div class="group-form">                    
                        <input type="number" name="cache_time" id="cache-time" class="button-cache-time" @isset($apiCache[0]->tiempo_cache) value={{$apiCache[0]->tiempo_cache}} @endisset @empty($apiCache[0]->tiempo_cache) value='20' @endempty min="0" max="20" step="1">
                        <label for="">Actualizar memória cache (20 días máx.)</label>
                    </div>
                    <div class="group-form-admin">
                        <label for="">Modificar API</label>                    
                        <input type="url" name="url_cache" id="url-cache" class="box-cache" @isset($apiCache[0]->url_cache) value={{$apiCache[0]->url_cache}} @endisset @empty($apiCache[0]->url_cache) value='http://ec2-44-203-35-246.compute-1.amazonaws.com/preguntas.php?nivel=1&grupo=' @endempty>                    
                    </div>
                    <div class="group-form-admin">
                    <label for="">Modificar grupo</label>                    
                        <input type="number" name="url_cache_equipo" id="url-cache-equipo" class="box-team" @isset($apiCache[0]->url_cache_equipo) value={{$apiCache[0]->url_cache_equipo}} @endisset @empty($apiCache  [0]->url_cache_equipo) value='4' @endempty min="0" max="20" step="1">                    
                    </div>
                    </div> 
                @endif
                <div class="group-form"><input id="btn-send-config" class="btn-send-config" type="submit" value="Guardar"></div>                
            </form>
        </div>
@endsection