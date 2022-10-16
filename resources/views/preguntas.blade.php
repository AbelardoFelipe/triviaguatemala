<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
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
</body>
</html>







