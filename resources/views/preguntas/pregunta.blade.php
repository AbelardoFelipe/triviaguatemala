@extends('layouts.app')

@section('content')
        <div class="container-preguntas">    
            <div class="container-play">                                           
                <div class="avatar-display">
                    <h1>¡Juguemos!</h1>
                    <div id="dialog-avatar" class="container-message-avatar">                    
                        <div id="message-avatar-correcto" class="dialog-box">
                            <span class="dialog">¡Correcto! sigue así.</span>
                        </div>                            
                        <div id="message-avatar-incorrecto" class="dialog-box">
                            <span class="dialog">¡No es Correcto! intenta otra vez.</span>
                        </div>                        
                    </div>
                    <canvas id="boy" width="300" height="500"></canvas>
                </div>
                <div class="preguntas-display">
                    <h2 data-user-numero-pregunta="{{$punteo[0]->numero_pregunta ?? 1}}">{{$preguntasArray['pregunta']}}</h2>
                    <ul class="preguntas-list">
                        <li><button class="button-respuesta" data-is-correct="{{$preguntasArray['respuesta_1']['is_correct']}}">{{$preguntasArray['respuesta_1']['text']}}</button><i class=""></i></li>
                        <li><button class="button-respuesta" data-is-correct="{{$preguntasArray['respuesta_2']['is_correct']}}">{{$preguntasArray['respuesta_2']['text']}}</button><i class=""></i></li>
                        <li><button class="button-respuesta" data-is-correct="{{$preguntasArray['respuesta_3']['is_correct']}}">{{$preguntasArray['respuesta_3']['text']}}</button><i class=""></i></li>
                    </ul>
                    <div class="siguiente-pregunta">
                        @php if($punteo[0]->numero_pregunta ?? 1 >= 10) $contador=1; else ++$contador @endphp
                        <button id="btn-siguiente-pregunta" type="button" class="btn-siguiente-pregunta" onclick="window.location.href='{{URL::to('/preguntas/'.$contador)}}';" disabled>Siguiente</button>
                    </div>
                </div>
            </div>
        </div>
@endsection