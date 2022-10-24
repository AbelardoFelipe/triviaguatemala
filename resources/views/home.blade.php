@extends('layouts.app')

@section('content')
<div class="dashboard">
    <div class="dash-1">
        <canvas id="boy" width="300" height="500"></canvas>
           
    </div>
    <div class="dash-2">
        @if($pregunta <10)
            @php($contador = $pregunta)
            <a href="{{URL::to('/preguntas/'.++$contador)}}"><i class='fas fa-play-circle'></i> </a>
        @elseif($pregunta == 10 && $aprobado == 10)
                <span>Ganaste</span>
        @endif        
    </div>
</div>
@endsection
