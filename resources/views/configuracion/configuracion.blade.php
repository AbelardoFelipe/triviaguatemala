@extends('layouts.app')

@section('content')        
        <div class="container-configuracion">        
            <form class="config-form" action="">
                <div class="group-form">
                    <span>Recibir notificaciones por correo.</span>
                    <div class="switch-button">
                        <!-- Checkbox -->
                        <input type="checkbox" name="switch-button-email" id="switch-label-email" class="switch-button__checkbox">
                        <!-- Botón -->
                        <label for="switch-label-email" class="switch-button__label"></label>
                    </div>
                </div>
                <div class="group-form">
                    <label for="">Quitar música de fondo.</label>
                    <div class="switch-button">
                        <!-- Checkbox -->
                        <input type="checkbox" name="switch-button-music-background" id="switch-label-music-background" class="switch-button__checkbox">
                        <!-- Botón -->
                        <label for="switch-label-music-background" class="switch-button__label"></label>
                    </div>
                </div>
                <div class="group-form">
                    <label for="">Quitar sonido </label>
                    <div class="switch-button">
                        <!-- Checkbox -->
                        <input type="checkbox" name="switch-button-sound-efect" id="switch-label-sound-efect" class="switch-button__checkbox">
                        <!-- Botón -->
                        <label for="switch-label-sound-efect" class="switch-button__label"></label>
                    </div>
                </div>
                <div class="group-form">
                    <label for="">Actualizar memória cache (minutos)</label>
                    <input type="range">
                </div>
            </form>
        </div>
@endsection