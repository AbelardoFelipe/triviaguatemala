@extends('layouts.app')

@section('content')
    @if($userMusic[0]->musica_fondo == 1)
        <div class="container-audio-play">
        </div>
    @else
        <div class="container-audio-play">
            <i id="play" data-music="" class="fas fa-volume-up"></i>
            <i id="stop" data-music="" class="fas fa-volume-mute"></i>           
        </div>
    @endif
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

                @if($punto < 50)
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
                
                @else
                     <div id="winner-cup" class="winner-cup">                                        
                        <img src="{{ asset('images/trofeo.gif') }}" alt="Trofeo del ganador">
                        <a class="button-respuesta" href="{{ url('/home') }}">Volver</a>                                           
                    </div>
                
                 @endif
                    
                </div>
            </div>
        </div>
        <audio id="btn-click-sound-no" src="{{ asset('sound/008864060_prev.mp3') }}" type="audio/mp3"></audio>
        <audio id="btn-click-sound-yes" src="{{ asset('sound/008864068_prev.mp3') }}" type="audio/mp3"></audio>
        @if($userMusic[0]->musica_fondo == 1)
            <audio id="music-background" data-estado="1" src="" type="audio/mp3"></audio>
        @else
        <audio id="music-background" data-estado="0" src="{{ asset('sound/inquiring-discovery-117953.mp3') }}" type="audio/mp3" loop></audio>
        @endif
        
        
@endsection