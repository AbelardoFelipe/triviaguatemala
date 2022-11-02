@extends('layouts.app')

@section('content')
      
        <div class="container-configuracion">
        <h2>Edita tus configuraciones</h2>                   
            <form class="config-form" action="">
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
                <div class="group-form">                    
                    <div class="switch-button">
                        <!-- Checkbox -->
                        <input type="checkbox" name="switch-button-sound-efect" id="switch-sound-efect" class="switch-button__checkbox">
                        <!-- Botón -->
                        <label for="switch-sound-efect" class="switch-button__label"></label>
                    </div>
                    <label for="">Quitar sonido.</label>
                </div>
                <div class="group-form">                    
                    <input type="number" name="cache-time" id="cache-time" class="button-cache-time" value="" min="0" max="20" step="1" >
                    <label for="">Actualizar memória cache (20 días máx.).</label>
                </div>
                <div class="group-form"><input class="btn-send-config" type="submit" value="Guardar"></div>
                
            </form>
        </div>
@endsection