@extends('layouts.app')

@section('content')        
        <div class="container-configuracion">        
            <form class="config-form" action="">
                <div class="group-form">
                    <span>Recibir notificaciones por correo.</span>
                    <div class="switch-button">
                        <!-- Checkbox -->
                        <input type="checkbox" name="switch-button" id="switch-label" class="switch-button__checkbox">
                        <!-- Botón -->
                        <label for="switch-label" class="switch-button__label"></label>
                    </div>
                </div>
                <div class="group-form">
                    <label for="">Quitar música de fondo.</label>
                    
                </div>
                <div class="group-form">
                    <label for="">Quitar sonido </label>
                    
                </div>
                <div class="group-form">
                    <label for="">Actualizar memória cache (minutos)</label>
                    
                </div>
            </form>
        </div>
@endsection