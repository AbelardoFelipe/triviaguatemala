@extends('layouts.app')

@section('content')
<div class="dashboard">
    <div class="dash-1">
        <canvas id="boy" width="300" height="500"></canvas>
        <span>{{$pregunta}}</span>      
    </div>
    <div class="dash-2">
        @empty($pregunta)
            <a href="{{URL::to('/preguntas/1')}}"><i class='fas fa-play-circle'></i> </a>
        @endempty
        
        @if($pregunta <10)
            @php($contador = $pregunta);
            <a href="{{URL::to('/preguntas/'.++$contador)}}"><i class='fas fa-play-circle'></i> </a>                
        @endif        
    </div>
</div>
@endsection
