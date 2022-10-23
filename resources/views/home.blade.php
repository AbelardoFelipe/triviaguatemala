@extends('layouts.app')

@section('content')
<div class="dashboard">
    <div class="dash-1">
        <canvas id="boy" width="300" height="500"></canvas>
    </div>
    <div class="dash-2">
        @php
            if($pregunta == 0){                
                echo "<a href='./preguntas') }}'> <i class='fas fa-play-circle'></i></a>";
            }else{             
                echo "<a href='./preguntas/$pregunta')'><i class='fas fa-play-circle'></i> </a>";
            }
            
        @endphp        
    </div>
</div>
@endsection
