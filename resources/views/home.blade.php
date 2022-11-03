@extends('layouts.app')

@section('content')
<div class="dashboard">
    <div class="dash-1">
        <img src="" id="humor_personaje" alt="humor">
        <canvas id="boy" width="500" height="500"></canvas>
          
    </div>
    <div class="dash-2">
        @if($pregunta <10)
            @php($contador = $pregunta)
            <a href="{{URL::to('/preguntas/'.++$contador)}}"><i class='fas fa-play-circle'></i> </a>
        @elseif($pregunta == 10 && $aprobado == 10)
               <div class="ganador-trivia">
                    <span>¡Felicidades has ganado el Juego!</span>
                    <img src="{{ asset('images/medalla.gif') }}" alt="Medalla ganador">{{-- Pureba --}}
                </div>               
        @endif        
    </div>
</div>
@endsection
