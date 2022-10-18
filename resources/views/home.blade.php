@extends('layouts.app')

@section('content')
<div class="dashboard">
    <div class="dash-1">
        <canvas id="boy" width="300" height="500"></canvas>
    </div>
    <div class="dash-2">
        {{-- @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif --}}
        <a href="{{ url('/preguntas') }}"><i class="fas fa-play-circle"></i></a>
    </div>
</div>
@endsection
