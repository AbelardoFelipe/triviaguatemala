@extends('layouts.app')

@section('content')
    <main class="">
        <div class="container-preguntas">    
            <div class="container-play">
                <h1>Juguemos</h1>
                <div class="avatar-display">
        
                </div>
                <div class="preguntas-display">
                    <h2>{{$preguntasArray['pregunta']}}</h2>
                    <ul class="preguntas-list">
                        <li><button class="button-respuesta">{{$preguntasArray['respuesta_1']['text']}}</button></li>
                        <li><button class="button-respuesta">{{$preguntasArray['respuesta_2']['text']}}</button></li>
                        <li><button class="button-respuesta">{{$preguntasArray['respuesta_3']['text']}}</button></li>
                    </ul>
                </div>
            </div>
        </div>
    </main>
@endsection