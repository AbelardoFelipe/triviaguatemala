@extends('layouts.app')

@section('content')      
        <div class="container-configuracion">
        <h2>Edita tus configuraciones</h2>                   
            <form id="form-config" class="config-form" action="">
                <div class="group-form">                    
                    <div class="switch-button">
                        <!-- Checkbox -->
                        <input type="checkbox" name="switch-button-email" id="switch-email" class="switch-button__checkbox">
                        <!-- Botón -->
                        <label for="switch-email" class="switch-button__label"></label>
                    </div>
                    <span>Recibir notificaciones por correo.</span>
                </div>
                <div class="group-form">                    
                    <div class="switch-button">
                        <!-- Checkbox -->
                        <input type="checkbox" name="switch-button-music-background" id="switch-music-background" class="switch-button__checkbox">
                        <!-- Botón -->
                        <label for="switch-music-background" class="switch-button__label"></label>
                    </div>
                    <label for="">Quitar música de fondo.</label>
                </div>
                <div id="panel-config-admin" class="contenedor-panel-admin">
                <div class="group-form">                    
                    <input type="number" name="cache-time" id="cache-time" class="button-cache-time" value="" min="0" max="20" step="1" >
                    <label for="">Actualizar memória cache (20 días máx.).</label>
                </div>
                <div class="group-form-admin">
                    <label for="">Modificar API</label>                    
                    <input type="url" name="url-cache" id="url-cache" class="box-cache">                    
                </div>
                <div class="group-form-admin">
                <label for="">Modificar grupo</label>                    
                    <input type="url" name="url-cache-equipo" id="url-cache-equipo" class="box-cache">                    
                </div>
                </div>                              
                <div class="group-form"><input id="btn-send-config" class="btn-send-config" type="submit" value="Guardar"></div>                
            </form>
        </div>
@endsection