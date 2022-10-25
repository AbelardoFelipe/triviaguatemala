@extends('layouts.app')

@section('content')
        <div class="container-audio-play">
            <i id="play" data-music="" class="fas fa-volume-up"></i>
            <i id="stop" data-music="" class="fas fa-volume-mute"></i>           
        </div>
        <div class="container-preguntas">        
            <div class="container-play">                                           
                <div class="avatar-display">
                    <h1>¡Juguemos!</h1>
                    <div id="dialog-avatar" class="container-message-avatar">                    
                        <div id="message-avatar-correcto" class="dialog-box">
                            <span class="dialog">¡Correcto! Sigue adelante.</span>
                        </div>                            
                        <div id="message-avatar-incorrecto" class="dialog-box">
                            <span class="dialog">¡No es Correcto! Intenta otra vez.</span>
                        </div>                        
                    </div>
                    <canvas id="boy" width="500" height="500"></canvas>
                </div>
                <div class="preguntas-display">
                    <h2 data-user-numero-pregunta="{{$contador ?? 1}}">{{$contador ?? 1}}. {{$preguntasArray['pregunta']}}</h2>                    
                    <ul class="preguntas-list">
                        <li><button class="button-respuesta" data-click="false" data-is-correct="{{$preguntasArray['respuesta_1']['is_correct']}}" @if($contador == $aprobado && $contador == $contador) disabled @endif>{{$preguntasArray['respuesta_1']['text']}}</button><i class=""></i></li>
                        <li><button class="button-respuesta" data-click="false" data-is-correct="{{$preguntasArray['respuesta_2']['is_correct']}}" @if($contador == $aprobado && $contador == $contador) disabled @endif>{{$preguntasArray['respuesta_2']['text']}}</button><i class=""></i></li>
                        <li><button class="button-respuesta" data-click="false" data-is-correct="{{$preguntasArray['respuesta_3']['is_correct']}}" @if($contador == $aprobado && $contador == $contador) disabled @endif>{{$preguntasArray['respuesta_3']['text']}}</button><i class=""></i></li>
                    </ul>
                    <div class="siguiente-pregunta">            
                        @if($contador  <= 9)
                            @php($contador++)
                            <button id="btn-siguiente-pregunta" type="button" class="btn-siguiente-pregunta" onclick="window.location.href='{{URL::to('/preguntas/'.$contador)}}'" disabled>Siguiente</button>                                                    
                        @endif
                    </div>
                    <audio id="btn-click-sound" src="{{ asset('sound/008864060_prev.mp3') }}" type="audio/mp3"></audio>
                    <audio id="music-background" src="{{ asset('sound/inquiring-discovery-117953.mp3') }}" type="audio/mp3" autoplay loop></audio>
                </div>
            </div>
        </div>
@endsection