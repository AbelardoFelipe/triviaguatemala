@extends('layouts.app')

@section('content')
        <div class="container-preguntas">    
            <div class="container-play">
                
                <div class="avatar-display">
                    <h1>¡Juguemos!</h1>
                </div>
                <div class="preguntas-display">
                    <h2>{{$preguntasArray['pregunta']}}</h2>
                    <ul class="preguntas-list">
                        <li><button class="button-respuesta">{{$preguntasArray['respuesta_1']['text']}}</button></li>
                        <li><button class="button-respuesta">{{$preguntasArray['respuesta_2']['text']}}</button></li>
                        <li><button class="button-respuesta">{{$preguntasArray['respuesta_3']['text']}}</button></li>
                    </ul>
                    <div class="siguiente-pregunta">
                        <button class="btn-siguiente-pregunta">Siguiente</button>
                    </div>
                </div>
            </div>
        </div>
@endsection