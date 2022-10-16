<h1>  Juguemos</h1>

@foreach($preguntasArray as $pregunta)
    <ul>
        <li>{{$pregunta->pregunta}}</li>
    </ul>
@endforeach