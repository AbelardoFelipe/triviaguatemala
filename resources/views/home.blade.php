@extends('layouts.app')

@section('content')
<div class="">
    <div class="">
        <div class="">
            <div class="">
                <div class="">{{ __('Dashboard') }}</div>

                <div class="">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>

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
        <a href="#"><i class="fas fa-play-circle"></i></a>
    </div>
</div>
@endsection
